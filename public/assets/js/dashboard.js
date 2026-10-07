/**
 * سَنَد AI - Specialist Dashboard & Analytics Engine
 * Human in the Loop Workflow, Case Triage, Decision Controls & Analytics
 */

const SanadDashboard = {
  init() {
    this.setupCaseFilters();
    this.setupHumanDecisionActions();
    this.setupObservatoryCharts();
  },

  setupCaseFilters() {
    const filterButtons = document.querySelectorAll('.js-case-filter');
    const tableRows = document.querySelectorAll('.cases-table tbody tr');

    if (!filterButtons.length) return;

    filterButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        filterButtons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const filter = btn.getAttribute('data-filter');

        tableRows.forEach(row => {
          if (filter === 'all') {
            row.style.display = '';
          } else {
            const priority = row.getAttribute('data-priority');
            row.style.display = priority === filter ? '' : 'none';
          }
        });
      });
    });
  },

  setupHumanDecisionActions() {
    // Confirm assessment
    document.querySelectorAll('.js-confirm-decision').forEach(btn => {
      btn.addEventListener('click', () => {
        SanadApp.showToast('تم اعتماد تقييم الحالة بواسطة المختص البشري بنجاح.', 'success');
        const badge = document.querySelector('.js-decision-status');
        if (badge) {
          badge.textContent = 'معتمد إكلينيكيًا';
          badge.className = 'badge badge-online js-decision-status';
        }
      });
    });

    // Request session
    document.querySelectorAll('.js-request-session-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        SanadApp.showToast('تم إرسال دعوة جلسة آمنة ومجهولة للمستخدم.', 'success');
      });
    });

    // Add clinical note
    const saveNoteBtn = document.querySelector('.js-save-clinical-note');
    const noteInput = document.querySelector('.js-clinical-note-input');
    if (saveNoteBtn && noteInput) {
      saveNoteBtn.addEventListener('click', () => {
        if (!noteInput.value.trim()) {
          SanadApp.showToast('يرجى كتابة الملاحظة قبل الحفظ');
          return;
        }
        SanadApp.showToast('تم حفظ الملاحظة الإكلينيكية في سجل الحالة المشفر.', 'success');
        noteInput.value = '';
      });
    }
  },

  setupObservatoryCharts() {
    // Animate data bars on page load
    const bars = document.querySelectorAll('.bar-dist-fill');
    if (!bars.length) return;

    bars.forEach(bar => {
      const width = bar.getAttribute('data-width') || '50%';
      bar.style.width = '0%';
      setTimeout(() => {
        bar.style.width = width;
        bar.style.transition = 'width 1.2s cubic-bezier(0.16, 1, 0.3, 1)';
      }, 200);
    });
  }
};

document.addEventListener('DOMContentLoaded', () => {
  SanadDashboard.init();
});
