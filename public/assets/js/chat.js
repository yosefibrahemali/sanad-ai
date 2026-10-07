/**
 * سَنَد AI - Enhanced Interactive Chat Interface Engine
 * Libyan Dialect AI, Real-time Sentiment Meters, Synthesized Chimes & Voice Simulation
 */

const SanadChat = {
  chatBody: null,
  inputField: null,
  sendBtn: null,
  typingIndicator: null,
  analysisPanel: null,
  voiceBox: null,
  voiceTimerInterval: null,
  voiceSeconds: 0,
  isRecording: false,
  messageCount: 0,
  audioCtx: null,
  detectedIndicators: new Set(['استكشاف أولي', 'ضغط نفسي']),

  // Dynamic emotional meter scores (percentages)
  meters: {
    stress: 60,
    anxiety: 45,
    fatigue: 50
  },

  // Rich Libyan empathetic responses dictionary
  knowledgeBase: [
    {
      keywords: ['مضغوط', 'ضغط', 'دراستي', 'قرايتي', 'امتحانات', 'جامعة', 'تراكم', 'مواد'],
      reply: 'نفهمك وخيي/وخيتي. الضغط المستمر متاع القراية والامتحانات يخلي التركيز أصعب واجد ويحسسك إنك تايه بين المواد. لو تحب، نحاولوا نفهموا مع بعض شن أكثر مادة أو ظرف مسبّبلك الثقل هذا توا؟ خطوة بخطوة نقدروا نرتبوا أفكارنا.',
      indicators: ['ضغط نفسي دراسي', 'صعوبة في التركيز', 'إجهاد ذهني'],
      delta: { stress: +15, anxiety: +10, fatigue: +10 }
    },
    {
      keywords: ['نوم', 'نرقد', 'أرق', 'ليل', 'تفكير', 'سهران', 'منرقدش'],
      reply: 'صعوبة النوم ديما تبان لما الدماغ يقعد يخدم ويفكر بدون توقف، خاصة لما تكون في السرير والدنيا هادية. التفكير المفرط بالليل متعب هلبا. جربت تخلي التيليفون بعيد عليك قبل النوم بنصف ساعة؟ نقدروا نديروا تمرين تنفس مهدئ يريح بالك قبل ما ترقد.',
      indicators: ['أرق واضطراب النوم', 'تفكير ليلي مفرط'],
      delta: { stress: +5, anxiety: +12, fatigue: +20 }
    },
    {
      keywords: ['قلق', 'خايف', 'توتر', 'مستقبل', 'رهبة', 'قلبي', 'خوف'],
      reply: 'القلق شعور طبيعي يجي لما تكون الأمور مش واضحة أو خايف من الجاي. لكن متنساش إنك مش لازم تشيل الحمل بروحك. سَنَد معاك، ومرات مجرد التعبير عن اللي في خاطرك بروحة يخفف نص التوتر.',
      indicators: ['قلق وتوتر', 'ترقب المستقبل'],
      delta: { stress: +10, anxiety: +20, fatigue: +5 }
    },
    {
      keywords: ['خدمة', 'شغل', 'عمل', 'رزق', 'فلوس', 'تخرجت', 'مستقبلي'],
      reply: 'ضغوطات بداية المسار المهني والبحث عن الخدمة في بلادنا مش ساهلة وتثقل الكاهل. حقك تحس بالضغط، لكن خوذ نفس، خطوتك الجاية تبدأ من راحة بالك وتركيزك على اللي بيدك توا.',
      indicators: ['ضغط مهني ومادي', 'تفكير بالمستقبل'],
      delta: { stress: +15, anxiety: +15, fatigue: +5 }
    },
    {
      keywords: ['تعبت', 'فديت', 'روتين', 'حابس', 'خنقة', 'وحدي', 'مخنوق'],
      reply: 'الشعور بالخنقة والتعب النفسي مش ساهل، والاعتراف بيه أول خطوة للشجاعة. إنت مش بروحك، ومهم تاخذ نفس عميق وماتقساش على روحك اليوم. شن رايك نحكي شوية على أكثر حاجة متعبتك في يومك؟',
      indicators: ['إرهاق عام', 'حاجة إلى تفريغ نفسي'],
      delta: { stress: +10, anxiety: +10, fatigue: +15 }
    },
    {
      keywords: ['تنفس', 'تمرين', 'استرخاء', 'نبي نهدا', 'مهدئ'],
      reply: 'أحسنت في اختيار خطوة التهدئة. تمرين التنفس (4-4-4) يرسل إشارة فورية لجهازك العصبي باش يخفف النبض والتوتر. اضغط على الزر تحت باش نفتحوا تمرين التنفس التفاعلي مع بعض.',
      indicators: ['استجابة للتمارين', 'بحث عن استرخاء'],
      delta: { stress: -15, anxiety: -10, fatigue: -5 },
      action: 'breathing'
    },
    {
      keywords: ['انتحار', 'نبي نموت', 'ننهي كل شي', 'مش قادر نتحمل نهائي'],
      reply: 'سلامتك وأمانك هما أهم شيء عندي. الكلام هذا يوضح إنك تمر بوقت صعب واجد ومحتاج دعم بشري حقيقي ومباشر. أرجوك متقعدش بروحك، خلينا نحولوك توا لمختص أو مركز أمان باش يقف معاك خطوة بخطوة.',
      indicators: ['أولوية عالية', 'دعم بشري مباشر'],
      isCrisis: true
    }
  ],

  init() {
    this.chatBody = document.getElementById('chatMessages');
    this.inputField = document.getElementById('chatInput');
    this.sendBtn = document.getElementById('chatSendBtn');
    this.analysisPanel = document.getElementById('chatAnalysisPanel');
    this.voiceBox = document.getElementById('voiceRecordingBox');

    if (!this.chatBody || !this.inputField) return;

    this.bindEvents();
    this.renderMeterBars();
  },

  playChime(type = 'sent') {
    try {
      if (!this.audioCtx) {
        const AudioContext = window.AudioContext || window.webkitAudioContext;
        this.audioCtx = new AudioContext();
      }
      if (this.audioCtx.state === 'suspended') {
        this.audioCtx.resume();
      }

      const osc = this.audioCtx.createOscillator();
      const gain = this.audioCtx.createGain();

      osc.type = 'sine';
      if (type === 'sent') {
        osc.frequency.setValueAtTime(520, this.audioCtx.currentTime);
        osc.frequency.exponentialRampToValueAtTime(780, this.audioCtx.currentTime + 0.12);
      } else {
        osc.frequency.setValueAtTime(680, this.audioCtx.currentTime);
        osc.frequency.exponentialRampToValueAtTime(540, this.audioCtx.currentTime + 0.18);
      }

      gain.gain.setValueAtTime(0.04, this.audioCtx.currentTime);
      gain.gain.exponentialRampToValueAtTime(0.001, this.audioCtx.currentTime + 0.2);

      osc.connect(gain);
      gain.connect(this.audioCtx.destination);

      osc.start();
      osc.stop(this.audioCtx.currentTime + 0.2);
    } catch (e) {
      // Audio autoplay gracefully suppressed if not supported
    }
  },

  bindEvents() {
    this.sendBtn.addEventListener('click', () => this.handleSendMessage());

    this.inputField.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' && !e.shiftKey) {
        e.preventDefault();
        this.handleSendMessage();
      }
    });

    // Suggestion chips
    document.querySelectorAll('.js-chat-suggestion').forEach(chip => {
      chip.addEventListener('click', () => {
        const text = chip.getAttribute('data-text') || chip.textContent.trim();
        this.inputField.value = text;
        this.handleSendMessage();
      });
    });

    // Voice simulation toggle
    const micBtn = document.getElementById('chatMicBtn');
    if (micBtn) {
      micBtn.addEventListener('click', () => this.toggleVoiceRecording());
    }

    // Toggle analysis panel on mobile
    const togglePanelBtn = document.getElementById('toggleAnalysisBtn');
    if (togglePanelBtn && this.analysisPanel) {
      togglePanelBtn.addEventListener('click', () => {
        this.analysisPanel.classList.toggle('mobile-visible');
      });
    }
  },

  toggleVoiceRecording() {
    const micBtn = document.getElementById('chatMicBtn');
    if (!this.voiceBox) return;

    if (!this.isRecording) {
      // Start recording simulation
      this.isRecording = true;
      this.voiceBox.classList.add('active');
      if (micBtn) micBtn.classList.add('btn-danger-soft');
      this.voiceSeconds = 0;
      const timerEl = this.voiceBox.querySelector('.js-record-timer');

      this.voiceTimerInterval = setInterval(() => {
        this.voiceSeconds++;
        const mins = String(Math.floor(this.voiceSeconds / 60)).padStart(2, '0');
        const secs = String(this.voiceSeconds % 60).padStart(2, '0');
        if (timerEl) timerEl.textContent = `${mins}:${secs}`;
      }, 1000);

      SanadApp.showToast('جاري تسجيل صوتك بشكل مشفر ومجهول...');
    } else {
      // Stop and send voice note
      this.stopAndSendVoiceNote();
    }
  },

  stopAndSendVoiceNote() {
    const micBtn = document.getElementById('chatMicBtn');
    this.isRecording = false;
    clearInterval(this.voiceTimerInterval);
    if (this.voiceBox) this.voiceBox.classList.remove('active');
    if (micBtn) micBtn.classList.remove('btn-danger-soft');

    const duration = this.voiceSeconds || 4;
    const mins = Math.floor(duration / 60);
    const secs = duration % 60;
    const timeFormatted = `${mins}:${String(secs).padStart(2, '0')}`;

    const voiceMessageHtml = `
      <div style="display: flex; align-items: center; gap: 12px; min-width: 200px;">
        <button type="button" class="btn btn-secondary btn-sm" style="width: 34px; height: 34px; padding: 0; border-radius: 50%;" onclick="SanadApp.showToast('تشغيل التسجيل الصوتي المجهول')">
          <svg class="icon-svg" style="width: 16px; height: 16px;" viewBox="0 0 24 24"><polygon points="5 3 19 12 5 21 5 3"/></svg>
        </button>
        <div style="flex-grow: 1;">
          <div class="sound-waves" style="height: 14px;">
            <span class="sound-wave-bar" style="background-color: #FFFFFF; height: 8px;"></span>
            <span class="sound-wave-bar" style="background-color: #FFFFFF; height: 14px;"></span>
            <span class="sound-wave-bar" style="background-color: #FFFFFF; height: 10px;"></span>
            <span class="sound-wave-bar" style="background-color: #FFFFFF; height: 16px;"></span>
            <span class="sound-wave-bar" style="background-color: #FFFFFF; height: 9px;"></span>
          </div>
          <span style="font-size: 0.75rem; opacity: 0.85;">تسجيل صوتي مجهول (${timeFormatted})</span>
        </div>
      </div>
    `;

    this.appendMessage(voiceMessageHtml, 'user', true);
    this.playChime('sent');
    this.messageCount++;
    this.showTypingIndicator();

    setTimeout(() => {
      this.hideTypingIndicator();
      this.appendMessage('سمعت تسجيلك الصوتي بكل اهتمام. صوتك يعكس تعب وثقل، لكنك خطيت خطوة شجاعة بأنك عبرت. خلينا نركزوا على أكثر نقطة متعبتك.', 'ai');
      this.playChime('received');
      this.detectedIndicators.add('تسجيل صوتي مجهول');
      this.detectedIndicators.add('حاجة لتفريغ المشاعر');
      this.updateAnalysisPanel(false);
    }, 1300);
  },

  handleSendMessage() {
    if (this.isRecording) {
      this.stopAndSendVoiceNote();
      return;
    }

    const text = this.inputField.value.trim();
    if (!text) return;

    this.appendMessage(text, 'user');
    this.playChime('sent');
    this.inputField.value = '';
    this.messageCount++;

    this.showTypingIndicator();

    setTimeout(() => {
      this.hideTypingIndicator();
      this.generateAIResponse(text);
      this.playChime('received');
    }, 1100);
  },

  appendMessage(text, sender = 'ai', isHtml = false) {
    const row = document.createElement('div');
    row.className = `message-row ${sender === 'user' ? 'user-message' : 'ai-message'}`;

    const now = new Date();
    const timeStr = now.toLocaleTimeString('ar-LY', { hour: '2-digit', minute: '2-digit' });

    const avatarSvg = sender === 'user' 
      ? `<svg class="icon-svg" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>`
      : `<svg class="icon-svg" viewBox="0 0 24 24"><path d="M12 2a10 10 0 0110 10c0 5.52-4.48 10-10 10S2 17.52 2 12A10 10 0 0112 2z"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>`;

    row.innerHTML = `
      <div class="message-avatar-small">
        ${avatarSvg}
      </div>
      <div class="message-bubble">
        ${isHtml ? text : `<p>${text}</p>`}
        <span class="message-time">${timeStr}</span>
      </div>
    `;

    this.chatBody.appendChild(row);
    this.scrollToBottom();
  },

  showTypingIndicator() {
    if (document.getElementById('typingIndicator')) return;

    const row = document.createElement('div');
    row.className = 'message-row ai-message';
    row.id = 'typingIndicator';

    row.innerHTML = `
      <div class="message-avatar-small">
        <svg class="icon-svg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/></svg>
      </div>
      <div class="typing-bubble">
        <span class="typing-dot"></span>
        <span class="typing-dot"></span>
        <span class="typing-dot"></span>
      </div>
    `;

    this.chatBody.appendChild(row);
    this.scrollToBottom();
  },

  hideTypingIndicator() {
    const el = document.getElementById('typingIndicator');
    if (el) el.remove();
  },

  generateAIResponse(userText) {
    let matched = null;

    for (const item of this.knowledgeBase) {
      if (item.keywords.some(kw => userText.includes(kw))) {
        matched = item;
        break;
      }
    }

    if (matched) {
      this.appendMessage(matched.reply, 'ai');
      matched.indicators.forEach(ind => this.detectedIndicators.add(ind));
      if (matched.delta) {
        this.meters.stress = Math.min(95, Math.max(20, this.meters.stress + (matched.delta.stress || 0)));
        this.meters.anxiety = Math.min(95, Math.max(20, this.meters.anxiety + (matched.delta.anxiety || 0)));
        this.meters.fatigue = Math.min(95, Math.max(20, this.meters.fatigue + (matched.delta.fatigue || 0)));
      }
      this.updateAnalysisPanel(matched.isCrisis);

      if (matched.action === 'breathing') {
        SanadApp.openModal('breathingModal');
      }
    } else {
      const defaultReply = 'كلامك مهم ونسمع فيك بكل اهتمام. خوذ وقتك وشاركني باللي تقدر عليه، أنا هنا باش نفهمك ونساندك بدون أي أحكام أو قيود.';
      this.appendMessage(defaultReply, 'ai');
      this.detectedIndicators.add('متابعة الحديث');
      this.updateAnalysisPanel(false);
    }

    // Check if we should insert the comfortable step-by-step handoff card
    if (this.messageCount >= 2 && !document.getElementById('chatHandoffCard')) {
      setTimeout(() => {
        this.insertHandoffPrompt();
      }, 700);
    }
  },

  insertHandoffPrompt() {
    if (document.getElementById('chatHandoffCard')) return;

    const banner = document.createElement('div');
    banner.className = 'chat-handoff-banner';
    banner.id = 'chatHandoffCard';

    banner.innerHTML = `
      <div style="display: flex; align-items: center; gap: 12px;">
        <div style="width: 38px; height: 38px; border-radius: 50%; background-color: var(--wellness-green); color: #FFFFFF; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
          <svg class="icon-svg" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        </div>
        <div>
          <strong style="font-size: 0.95rem; color: var(--text-primary); display: block;">سَنَد استوعب مؤشرات حالتك المبدئية</strong>
          <span style="font-size: 0.84rem; color: var(--text-secondary);">يمكنك الآن الانتقال إلى الخطوة التالية لمعرفة مستوى الاحتياج وتمارين الراحة المقترحة.</span>
        </div>
      </div>
      <div style="display: flex; gap: 8px; flex-shrink: 0;">
        <a href="assessment.html" class="btn btn-wellness btn-sm">
          عرض التقييم الكامل (خطوة 3)
        </a>
      </div>
    `;

    this.chatBody.appendChild(banner);
    this.scrollToBottom();
  },

  renderMeterBars() {
    if (!this.analysisPanel) return;

    const stressBar = this.analysisPanel.querySelector('.js-meter-stress');
    const anxietyBar = this.analysisPanel.querySelector('.js-meter-anxiety');
    const fatigueBar = this.analysisPanel.querySelector('.js-meter-fatigue');

    if (stressBar) {
      stressBar.style.width = this.meters.stress + '%';
      stressBar.style.transition = 'width 0.8s ease';
    }
    if (anxietyBar) {
      anxietyBar.style.width = this.meters.anxiety + '%';
      anxietyBar.style.transition = 'width 0.8s ease';
    }
    if (fatigueBar) {
      fatigueBar.style.width = this.meters.fatigue + '%';
      fatigueBar.style.transition = 'width 0.8s ease';
    }
  },

  updateAnalysisPanel(isCrisis = false) {
    if (!this.analysisPanel) return;

    this.renderMeterBars();

    const indicatorsContainer = this.analysisPanel.querySelector('.js-indicators-list');
    const needLevelBadge = this.analysisPanel.querySelector('.js-need-level');
    const assessmentCta = this.analysisPanel.querySelector('.js-assessment-cta');

    if (indicatorsContainer) {
      indicatorsContainer.innerHTML = '';
      this.detectedIndicators.forEach(tag => {
        const span = document.createElement('span');
        span.className = 'indicator-tag';
        span.textContent = tag;
        indicatorsContainer.appendChild(span);
      });
    }

    if (needLevelBadge) {
      if (isCrisis) {
        needLevelBadge.textContent = 'أولوية عاجلة (دعم بشري)';
        needLevelBadge.className = 'badge badge-risk-high js-need-level';
      } else if (this.messageCount >= 2) {
        needLevelBadge.textContent = 'يحتاج إلى متابعة';
        needLevelBadge.className = 'badge badge-risk-medium js-need-level';
      }
    }

    if (this.messageCount >= 2 && assessmentCta) {
      assessmentCta.style.display = 'block';
    }
  },

  scrollToBottom() {
    this.chatBody.scrollTop = this.chatBody.scrollHeight;
  }
};

document.addEventListener('DOMContentLoaded', () => {
  SanadChat.init();
});
