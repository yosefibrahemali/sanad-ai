<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>الملف المهني: د. أحمد محمد | سَنَد AI</title>
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<body>

  <!-- Unified Navigation Header -->
  <header class="main-header">
    <div class="container header-inner">
      <a href="../index.html" class="brand-logo">
        <div class="brand-icon-wrapper">
          <svg class="icon-svg icon-lg" viewBox="0 0 24 24">
            <path d="M12 3c-4.97 0-9 4.03-9 9 0 2.12.74 4.07 1.97 5.61L4 21l3.5-1.02A8.93 8.93 0 0012 21c4.97 0 9-4.03 9-9s-4.03-9-9-9z"/>
            <path d="M8 12h.01M12 12h.01M16 12h.01"/>
          </svg>
        </div>
        <div>
          <span class="brand-title">سَنَد</span>
          <span class="brand-badge-ai">AI</span>
        </div>
      </a>

      <nav class="nav-links">
        <a href="../index.html" class="nav-link">الرئيسية</a>
        <a href="../index.html#how-it-works" class="nav-link">كيف يعمل؟</a>
        <a href="chat.html" class="nav-link">المحادثة</a>
        <a href="assessment.html" class="nav-link">التقييم</a>
        <a href="personal-assistant.html" class="nav-link">المساعد اليومي</a>
        <a href="specialists.html" class="nav-link active">المختصون</a>
        <a href="community.html" class="nav-link">المجتمع</a>
        <a href="privacy.html" class="nav-link">الخصوصية</a>
        <a href="about.html" class="nav-link">عن سَنَد</a>
      </nav>

      <div class="header-actions">
        <a href="specialists.html" class="btn btn-secondary btn-sm">العودة لقائمة المختصين</a>
        <button class="mobile-menu-btn" aria-label="القائمة">
          <svg class="icon-svg" viewBox="0 0 24 24"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
        </button>
      </div>
    </div>
  </header>

  <!-- Mobile Drawer -->
  <div class="mobile-drawer-overlay"></div>
  <aside class="mobile-drawer">
    <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid var(--border-light); padding-bottom: 14px;">
      <span style="font-weight: 700; font-size: 1.1rem;">القائمة الرئيسية</span>
      <button class="mobile-drawer-close modal-close-btn" aria-label="إغلاق">
        <svg class="icon-svg" viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>
    </div>
    <div style="display: flex; flex-direction: column; gap: 10px; margin-top: 10px;">
      <a href="../index.html" class="nav-link">الرئيسية</a>
      <a href="anonymous-start.html" class="nav-link">بدء محادثة مجهولة</a>
      <a href="chat.html" class="nav-link">المحادثة الذكية</a>
      <a href="assessment.html" class="nav-link">تقييم الاحتياج</a>
      <a href="personal-assistant.html" class="nav-link">المساعد اليومي</a>
      <a href="specialists.html" class="nav-link active">المختصون النفسيون</a>
      <a href="community.html" class="nav-link">مجتمع سَنَد</a>
      <a href="privacy.html" class="nav-link">الخصوصية والأمان</a>
      <a href="analytics.html" class="nav-link">مرصد سَنَد (إحصائيات)</a>
      <a href="safety.html" class="nav-link">مركز الأمان</a>
      <a href="specialist-dashboard.html" class="nav-link" style="color: var(--wellness-green); font-weight: 700;">بوابة الأخصائيين</a>
    </div>
  </aside>

  <!-- Main Content -->
  <main class="container container-narrow section-pad-sm">
    
    <!-- Profile Card Header -->
    <div class="card" style="border-radius: var(--radius-xl); padding: 36px; margin-bottom: 30px;">
      <div style="display: flex; gap: 24px; align-items: center; flex-wrap: wrap;">
        <div class="specialist-avatar-placeholder" style="width: 90px; height: 90px; font-size: 1.8rem; background-color: var(--primary-accent-soft); color: var(--primary-accent); border-radius: var(--radius-lg);">
          أ.م
        </div>
        <div style="flex-grow: 1;">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 4px; flex-wrap: wrap;">
            <h1 style="font-size: 1.85rem;">د. أحمد محمد</h1>
            <span class="badge badge-online">متاح الآن للجلسات</span>
          </div>
          <div style="color: var(--primary-accent); font-weight: 700; font-size: 1.05rem; margin-bottom: 8px;">
            أخصائي نفسي إكلينيكي معتمد • ترخيص مزاولة طرابلس
          </div>
          <div style="display: flex; gap: 16px; font-size: 0.9rem; color: var(--text-muted); flex-wrap: wrap;">
            <span>خبرة 8 سنوات</span>
            <span>•</span>
            <span>طرابلس، ليبيا</span>
            <span>•</span>
            <span style="display: inline-flex; align-items: center; gap: 4px;">
              <svg class="icon-svg" style="width: 14px; height: 14px; color: var(--warm-gold);" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
              تقييم 4.9 من 5 (140+ استشارة)
            </span>
          </div>
        </div>
      </div>

      <!-- Action Buttons Row -->
      <div style="display: flex; gap: 12px; margin-top: 28px; border-top: 1px solid var(--border-light); padding-top: 24px; flex-wrap: wrap;">
        <button data-open-modal="bookSessionModal" class="btn btn-primary btn-lg" style="flex: 1;">
          <svg class="icon-svg" viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
          طلب جلسة فورية
        </button>
        <button data-open-modal="bookSessionModal" class="btn btn-wellness btn-lg" style="flex: 1;">
          <svg class="icon-svg" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          حجز موعد لاحق
        </button>
      </div>
    </div>

    <!-- Bio & Areas of Expertise -->
    <div class="card" style="border-radius: var(--radius-xl); margin-bottom: 30px;">
      <h3 style="font-size: 1.25rem; margin-bottom: 12px;">نبذة مهنية</h3>
      <p style="margin-bottom: 24px; line-height: 1.8;">
        أخصائي نفسي إكلينيكي حاصل على ماجستير في علم النفس العيادي، متخصص في التعامل مع اضطرابات القلق، ضغوطات المرحلة الجامعية وبداية الحياة المهنية، واضطرابات التكيف والصدمات النفسية. أؤمن بأهمية توفير مساحة آمنة خالية من الأحكام تناسب الخصوصية الثقافية والاجتماعية في ليبيا.
      </p>

      <h3 style="font-size: 1.25rem; margin-bottom: 12px;">المجالات التي يعمل عليها</h3>
      <div style="display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 24px;">
        <span class="indicator-tag" style="padding: 6px 14px; font-size: 0.9rem;">العلاج المعرفي السلوكي (CBT)</span>
        <span class="indicator-tag" style="padding: 6px 14px; font-size: 0.9rem;">إدارة الضغوط والقلق الدراسي</span>
        <span class="indicator-tag" style="padding: 6px 14px; font-size: 0.9rem;">تحسين جودة النوم ومحاربة الأرق</span>
        <span class="indicator-tag" style="padding: 6px 14px; font-size: 0.9rem;">اضطرابات الهلع والتوتر الاجتماعي</span>
        <span class="indicator-tag" style="padding: 6px 14px; font-size: 0.9rem;">الإرشاد الفردي للشباب</span>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; border-top: 1px solid var(--border-light); padding-top: 20px;">
        <div>
          <span style="font-size: 0.85rem; color: var(--text-muted); display: block; margin-bottom: 4px;">اللغات واللهجات:</span>
          <strong>العربية الفصحى، اللهجة الليبية، الإنجليزية</strong>
        </div>
        <div>
          <span style="font-size: 0.85rem; color: var(--text-muted); display: block; margin-bottom: 4px;">أسلوب الجلسات:</span>
          <strong>جلسات محادثة نصية مشفرة، أو صوتية حسب اختيارك</strong>
        </div>
      </div>
    </div>

    <!-- Anonymous Feedback & Reviews -->
    <div class="card" style="border-radius: var(--radius-xl);">
      <h3 style="font-size: 1.25rem; margin-bottom: 16px;">آراء وتقييمات المستخدمين (مجهولة المصدر)</h3>

      <div style="display: flex; flex-direction: column; gap: 16px;">
        <div style="background-color: var(--bg-primary); padding: 18px; border-radius: var(--radius-md); border: 1px solid var(--border-light);">
          <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
            <span class="user-anonymous-handle">
              <span class="avatar-mask-icon" style="width: 26px; height: 26px;">
                <svg class="icon-svg" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
              </span>
              مستخدم #1420
            </span>
            <span style="font-size: 0.8rem; color: var(--text-muted);">قبل أسبوع</span>
          </div>
          <p style="font-size: 0.95rem; margin: 0;">
            "أسلوب الدكتور متفهم ومريح جدًا، ما حسيتش بأي حرج وأنا نحكي عن مشكلتي. ساعدني نرتب جدول نومي وأفكاري قبل الامتحانات."
          </p>
        </div>

        <div style="background-color: var(--bg-primary); padding: 18px; border-radius: var(--radius-md); border: 1px solid var(--border-light);">
          <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
            <span class="user-anonymous-handle">
              <span class="avatar-mask-icon" style="width: 26px; height: 26px;">
                <svg class="icon-svg" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
              </span>
              مستخدم #8911
            </span>
            <span style="font-size: 0.8rem; color: var(--text-muted);">قبل أسبوعين</span>
          </div>
          <p style="font-size: 0.95rem; margin: 0;">
            "تجربة الجلسة كانت سلسة، والأهم إن خصوصيتي كانت محفوظة وما حسيتش بأي ضغط لكشف معلومات شخصية."
          </p>
        </div>
      </div>
    </div>
  </main>

  <!-- Book Session Modal -->
  <div class="modal-overlay" id="bookSessionModal">
    <div class="modal-window">
      <div class="modal-header">
        <h3>حجز جلسة مع د. أحمد محمد</h3>
        <button class="modal-close-btn">&times;</button>
      </div>
      <p style="font-size: 0.9rem; color: var(--text-secondary); margin-bottom: 20px;">
        اختر الموعد وطريقة التواصل المفضلة لك:
      </p>
      <div style="margin-bottom: 16px;">
        <label style="display: block; font-weight: 600; font-size: 0.9rem; margin-bottom: 8px;">اليوم والوقت:</label>
        <select style="width: 100%; padding: 12px; border-radius: var(--radius-md); border: 1px solid var(--border-medium); font-family: var(--font-family); background-color: var(--bg-primary);">
          <option>اليوم - جلسة فورية (متاح الآن)</option>
          <option>غدًا - 05:00 مساءً</option>
          <option>غدًا - 07:30 مساءً</option>
          <option>بعد غد - 06:00 مساءً</option>
        </select>
      </div>
      <button id="submitBooking" class="btn btn-primary" style="width: 100%;">تأكيد الحجز المجهول</button>
    </div>
  </div>

  <script src="{{asset('assets/js/app.js')}}"></script>
  <script>
    document.getElementById('submitBooking').addEventListener('click', () => {
      SanadApp.closeModal('bookSessionModal');
      SanadApp.showToast('تم تأكيد حجز الجلسة بنجاح مع د. أحمد محمد.', 'success');
    });
  </script>
</body>
</html>
