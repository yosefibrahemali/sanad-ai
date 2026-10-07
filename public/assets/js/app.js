/**
 * سَنَد AI - Core Application Script
 * Global Utilities, Navigation, Modals, State & Toast System
 */

const SanadApp = {
  // Global Mock State
  state: {
    anonymousId: localStorage.getItem('sanad_user_id') || 'مستخدم #' + Math.floor(1000 + Math.random() * 9000),
    region: localStorage.getItem('sanad_region') || 'المنطقة الغربية',
    userMode: localStorage.getItem('sanad_mode') || 'كتابة',
    currentMood: localStorage.getItem('sanad_mood') || 'متوسط',
    privacySettings: {
      anonymousSession: true,
      saveHistory: false,
      anonymizedAnalytics: true
    }
  },

  init() {
    this.setupNavigation();
    this.setupModals();
    this.setupBreathingExercise();
    this.updateUserLabels();
  },

  setupNavigation() {
    // Highlight active link based on current page
    const currentPath = window.location.pathname.split('/').pop() || 'index.html';
    
    document.querySelectorAll('.nav-link, .mobile-nav-item, .sidebar-link').forEach(link => {
      const href = link.getAttribute('href');
      if (href) {
        const linkFile = href.split('/').pop();
        if (linkFile === currentPath || (currentPath === '' && linkFile === 'index.html')) {
          link.classList.add('active');
        }
      }
    });

    // Mobile drawer controls
    const menuBtn = document.querySelector('.mobile-menu-btn');
    const drawer = document.querySelector('.mobile-drawer');
    const overlay = document.querySelector('.mobile-drawer-overlay');
    const closeBtn = document.querySelector('.mobile-drawer-close');

    if (menuBtn && drawer && overlay) {
      menuBtn.addEventListener('click', () => {
        drawer.classList.add('open');
        overlay.classList.add('open');
      });

      const closeDrawer = () => {
        drawer.classList.remove('open');
        overlay.classList.remove('open');
      };

      if (closeBtn) closeBtn.addEventListener('click', closeDrawer);
      overlay.addEventListener('click', closeDrawer);
    }
  },

  updateUserLabels() {
    document.querySelectorAll('.js-user-id').forEach(el => {
      el.textContent = this.state.anonymousId;
    });
  },

  setupModals() {
    document.querySelectorAll('[data-open-modal]').forEach(trigger => {
      trigger.addEventListener('click', (e) => {
        e.preventDefault();
        const modalId = trigger.getAttribute('data-open-modal');
        this.openModal(modalId);
      });
    });

    document.querySelectorAll('.modal-overlay').forEach(modal => {
      modal.addEventListener('click', (e) => {
        if (e.target === modal || e.target.closest('.modal-close-btn')) {
          this.closeModal(modal.id);
        }
      });
    });
  },

  openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
      modal.classList.add('open');
      document.body.style.overflow = 'hidden';
    }
  },

  closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
      modal.classList.remove('open');
      document.body.style.overflow = '';
    }
  },

  showToast(message, type = 'info') {
    let container = document.querySelector('.toast-container');
    if (!container) {
      container = document.createElement('div');
      container.className = 'toast-container';
      document.body.appendChild(container);
    }

    const toast = document.createElement('div');
    toast.className = `toast toast-${type}`;
    
    // SVG icons based on type
    const checkIcon = `<svg class="icon-svg" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>`;
    const infoIcon = `<svg class="icon-svg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>`;
    
    toast.innerHTML = `
      ${type === 'success' ? checkIcon : infoIcon}
      <span>${message}</span>
    `;

    container.appendChild(toast);

    setTimeout(() => {
      toast.style.opacity = '0';
      toast.style.transform = 'translateY(10px)';
      toast.style.transition = 'all 0.3s ease';
      setTimeout(() => toast.remove(), 300);
    }, 3200);
  },

  setupBreathingExercise() {
    const breathingModal = document.getElementById('breathingModal');
    if (!breathingModal) return;

    const phaseText = breathingModal.querySelector('.js-breathing-phase');
    const timerText = breathingModal.querySelector('.js-breathing-timer');
    if (!phaseText) return;

    let phases = [
      { text: 'شهيق هادئ من الأنف...', duration: 4 },
      { text: 'احبس أنفاسك بلطف...', duration: 4 },
      { text: 'زفير بطيء ومريح من الفم...', duration: 4 }
    ];

    let currentPhase = 0;
    let secondsLeft = phases[0].duration;

    setInterval(() => {
      if (!breathingModal.classList.contains('open')) return;

      secondsLeft--;
      if (timerText) timerText.textContent = secondsLeft + ' ثوانٍ';

      if (secondsLeft <= 0) {
        currentPhase = (currentPhase + 1) % phases.length;
        secondsLeft = phases[currentPhase].duration;
        phaseText.textContent = phases[currentPhase].text;
      }
    }, 1000);
  }
};

document.addEventListener('DOMContentLoaded', () => {
  SanadApp.init();
});
