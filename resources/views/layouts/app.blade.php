<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>سَنَد AI | منصة ليبية ذكية للدعم النفسي والتواصل مع المختصين</title>
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
  <style>
    /* =========================================================
   SANAD — UNIFIED STEP TRACKER
   ========================================================= */

.sanad-steps {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    margin: 0 auto 28px;
    padding: 0;
    direction: rtl;
}

.sanad-step {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: var(--text-muted);
    font-size: 0.78rem;
    font-weight: 500;
    text-decoration: none;
    white-space: nowrap;
    transition:
        color 0.2s ease,
        opacity 0.2s ease,
        transform 0.2s ease;
}

.sanad-step:hover {
    color: var(--primary-accent);
    transform: translateY(-1px);
}

.sanad-step-number {
    width: 24px;
    height: 24px;
    flex: 0 0 24px;

    display: grid;
    place-items: center;

    border-radius: 50%;
    border: 1px solid var(--border-light);

    background: var(--bg-surface);
    color: var(--text-muted);

    font-size: 0.7rem;
    font-weight: 600;
    line-height: 1;
}

/* Current step */
.sanad-step.active {
    color: var(--primary-accent);
    font-weight: 700;
}

.sanad-step.active .sanad-step-number {
    background: var(--primary-accent);
    border-color: var(--primary-accent);
    color: #fff;

    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
}

/* Completed steps */
.sanad-step.completed {
    color: var(--text-secondary);
}

.sanad-step.completed .sanad-step-number {
    background: var(--primary-accent-soft);
    border-color: var(--primary-accent);
    color: var(--primary-accent);
    font-weight: 700;
}

.sanad-arrow {
    flex: 0 0 auto;
    color: var(--border-medium);
    font-size: 0.8rem;
    line-height: 1;
    opacity: 0.8;
}

/* Mobile */
@media (max-width: 700px) {
    .sanad-steps {
        justify-content: flex-start;
        overflow-x: auto;
        padding: 2px 4px 8px;
        margin-bottom: 22px;

        scrollbar-width: none;
        -webkit-overflow-scrolling: touch;
    }

    .sanad-steps::-webkit-scrollbar {
        display: none;
    }

    .sanad-step {
        font-size: 0.72rem;
    }

    .sanad-step-number {
        width: 22px;
        height: 22px;
        flex-basis: 22px;
        font-size: 0.65rem;
    }

    .sanad-arrow {
        font-size: 0.7rem;
    }
}
  </style>
</head>
<body>

    <!-- Main Navigation Header -->

    <!-- Premium Main Header -->
    <header class="main-header">
    <div class="container header-inner">

        <!-- Brand -->
        <a href="{{ url('/') }}" class="brand-logo">
        <div class="brand-mark">
            <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M12 3.5a8.5 8.5 0 0 0-6.1 14.4L4.7 21l3.8-1.1A8.5 8.5 0 1 0 12 3.5Z"/>
            <path d="M8.5 12h.01M12 12h.01M15.5 12h.01"/>
            </svg>
        </div>

        <div class="brand-text">
            <span class="brand-name">سَنَد</span>
            
        </div>
        </a>


        <!-- Desktop Navigation -->
        <nav class="nav-links" aria-label="التنقل الرئيسي">

         <a href="{{ url('/') }}"
          class="nav-link {{ request()->is('/') ? 'active' : '' }}">
            الرئيسية
        </a>

        <a href="/#how-it-works"
          class="nav-link {{ request()->is('/') ? '' : '' }}">
            كيف يعمل؟
        </a>

        <a href="{{ url('/pages/specialists.html') }}" class="nav-link">
            المختصون
        </a>

        <a href="{{ url('/pages/community.html') }}" class="nav-link">
            المجتمع
        </a>

        <a href="{{ url('/pages/personal-assistant.html') }}" class="nav-link">
            مساعدي
        </a>

        </nav>


        <!-- Header Actions -->
        <div class="header-actions">

      


      


        <!-- Main CTA -->
        <a href="{{ url('/pages/anonymous-start.html') }}"
            class="header-primary-btn">

            <svg viewBox="0 0 24 24">
            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v10Z"/>
            </svg>

            <span>ابدأ الآن</span>
        </a>


        <!-- Mobile Menu -->
        <button class="mobile-menu-btn"
                aria-label="فتح القائمة"
                aria-expanded="false">

            <svg viewBox="0 0 24 24">
            <line x1="4" y1="7" x2="20" y2="7"/>
            <line x1="4" y1="12" x2="20" y2="12"/>
            <line x1="4" y1="17" x2="20" y2="17"/>
            </svg>

        </button>

        </div>

    </div>
    </header>



  <!-- Mobile Drawer -->
  <div class="mobile-drawer-overlay"></div>
  <!-- Mobile Drawer -->
  <div class="mobile-drawer-overlay"></div>

  

<!-- Mobile Drawer -->
<div class="mobile-drawer-overlay"></div>

<aside class="mobile-drawer">

    <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid var(--border-light); padding-bottom: 14px;">

        <span style="font-weight: 700; font-size: 1.1rem;">
            القائمة الرئيسية
        </span>

        <button class="mobile-drawer-close modal-close-btn" aria-label="إغلاق">
            <svg class="icon-svg" viewBox="0 0 24 24">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
        </button>

    </div>

    <div style="display: flex; flex-direction: column; gap: 10px; margin-top: 10px;">

        <a href="{{ url('/') }}" class="nav-link">
            الرئيسية
        </a>

        <a href="{{ url('/pages/anonymous-start.html') }}" class="nav-link">
            بدء محادثة مجهولة
        </a>

        <a href="{{ url('/pages/chat.html') }}" class="nav-link">
            المحادثة الذكية
        </a>

        <a href="{{ url('/pages/personal-assistant.html') }}" class="nav-link">
            المساعد اليومي
        </a>

        <a href="{{ url('/pages/community.html') }}" class="nav-link">
            مجتمع سَنَد
        </a>

    </div>

</aside>



  @yield('content')
  

  <!-- Footer -->
  
  <!-- Footer -->
  <footer class="main-footer">
    <div class="container">
      <div class="footer-grid">

        <div>
          <div class="brand-logo" style="margin-bottom: 12px;">
            <div class="brand-icon-wrapper" style="width: 36px; height: 36px;">
              <svg class="icon-svg" viewBox="0 0 24 24">
                <path d="M12 3c-4.97 0-9 4.03-9 9 0 2.12.74 4.07 1.97 5.61L4 21l3.5-1.02A8.93 8.93 0 0012 21c4.97 0 9-4.03 9-9s-4.03-9-9-9z"/>
              </svg>
            </div>
            <span>سَنَد AI</span>
          </div>

          <p class="footer-brand-desc">
            "لست وحدك، سَنَد معك" - منصة دعم نفسي ذكية تربط الشباب الليبي بالرعاية المتخصصة في مساحة آمنة ومريحة.
          </p>
        </div>

        <div class="footer-col">
          <h4>المستخدم</h4>
          <div class="footer-links">
            <a href="javascript:void(0)" class="footer-link" aria-disabled="true">بدء محادثة مجهولة</a>
            <a href="javascript:void(0)" class="footer-link" aria-disabled="true">المساعد اليومي</a>
            <a href="javascript:void(0)" class="footer-link" aria-disabled="true">دليل المختصين</a>
            <a href="javascript:void(0)" class="footer-link" aria-disabled="true">مجتمع سَنَد</a>
          </div>
        </div>

        <div class="footer-col">
          <h4>الخصوصية والأمان</h4>
          <div class="footer-links">
            <a href="javascript:void(0)" class="footer-link" aria-disabled="true">هندسة الخصوصية</a>
            <a href="javascript:void(0)" class="footer-link" aria-disabled="true">مركز الطوارئ والأمان</a>
            <a href="javascript:void(0)" class="footer-link" aria-disabled="true">منهجية عدم التشخيص</a>
          </div>
        </div>

        <div class="footer-col">
          <h4>المختصون والبيانات</h4>
          <div class="footer-links">
            <a href="javascript:void(0)" class="footer-link" aria-disabled="true">بوابة الأخصائيين</a>
            <a href="javascript:void(0)" class="footer-link" aria-disabled="true">نموذج دراسة حالة</a>
            <a href="javascript:void(0)" class="footer-link" aria-disabled="true">مرصد سَنَد المجمّع</a>
          </div>
        </div>

      </div>

      <div class="footer-bottom">
        <div>جميع الحقوق محفوظة © سَنَد AI - نموذج أولي لهاكاثون 2026</div>
        <div>تنبيه: سَنَد AI منصة استرشاد ودعم، وليست بديلاً عن الطوارئ الطبية أو المستشفيات.</div>
      </div>
    </div>
  </footer>


  <!-- Mobile Bottom Navigation Bar -->
  <nav class="mobile-bottom-nav">
    <a href="index.html" class="mobile-nav-item">
      <svg class="icon-svg" viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
      <span>الرئيسية</span>
    </a>
    <a href="pages/anonymous-start.html" class="mobile-nav-item">
      <svg class="icon-svg" viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
      <span>المحادثة</span>
    </a>
    <a href="pages/personal-assistant.html" class="mobile-nav-item">
      <svg class="icon-svg" viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
      <span>مساعدي</span>
    </a>
    <a href="pages/specialists.html" class="mobile-nav-item">
      <svg class="icon-svg" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
      <span>المختصون</span>
    </a>
    <a href="pages/community.html" class="mobile-nav-item">
      <svg class="icon-svg" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/></svg>
      <span>المجتمع</span>
    </a>
  </nav>

  
  <script src="{{asset('assets/js/app.js')}}"></script>
</body>
</html>
