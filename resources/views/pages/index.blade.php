<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>سَنَد AI | منصة ليبية ذكية للدعم النفسي والتواصل مع المختصين</title>
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<body>

  <!-- Main Navigation Header -->
  <header class="main-header">
    <div class="container header-inner">
      <a href="index.html" class="brand-logo">
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
        <a href="index.html" class="nav-link active">الرئيسية</a>
        <a href="#how-it-works" class="nav-link">كيف يعمل؟</a>
        <a href="pages/chat.html" class="nav-link">المحادثة</a>
        <a href="pages/assessment.html" class="nav-link">التقييم</a>
        <a href="pages/personal-assistant.html" class="nav-link">المساعد اليومي</a>
        <a href="pages/specialists.html" class="nav-link">المختصون</a>
        <a href="pages/community.html" class="nav-link">المجتمع</a>
        <a href="pages/privacy.html" class="nav-link">الخصوصية</a>
        <a href="pages/about.html" class="nav-link">عن سَنَد</a>
      </nav>

      <div class="header-actions">
        <a href="pages/safety.html" class="btn btn-secondary btn-sm" title="مركز الطوارئ والأمان">
          <svg class="icon-svg" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          مركز الأمان
        </a>
        <a href="pages/specialist-dashboard.html" class="btn btn-specialist-portal btn-sm" title="بوابة الأخصائيين">
          بوابة المختصين
        </a>
        <a href="pages/anonymous-start.html" class="btn btn-primary btn-sm">تحدث بشكل مجهول</a>
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
      <a href="index.html" class="nav-link active">الرئيسية</a>
      <a href="pages/anonymous-start.html" class="nav-link">بدء محادثة مجهولة</a>
      <a href="pages/chat.html" class="nav-link">المحادثة الذكية</a>
      <a href="pages/assessment.html" class="nav-link">تقييم الاحتياج</a>
      <a href="pages/personal-assistant.html" class="nav-link">المساعد اليومي</a>
      <a href="pages/specialists.html" class="nav-link">المختصون النفسيون</a>
      <a href="pages/community.html" class="nav-link">مجتمع سَنَد</a>
      <a href="pages/privacy.html" class="nav-link">الخصوصية والأمان</a>
      <a href="pages/analytics.html" class="nav-link">مرصد سَنَد (إحصائيات)</a>
      <a href="pages/safety.html" class="nav-link">مركز الأمان</a>
      <a href="pages/specialist-dashboard.html" class="nav-link" style="color: var(--wellness-green); font-weight: 700;">بوابة الأخصائيين</a>
    </div>
  </aside>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container hero-grid">
      <div class="hero-content">
        <div class="hero-badge-container">
          <svg class="icon-svg" style="color: var(--primary-accent);" viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
          </svg>
          <span style="font-size: 0.88rem; font-weight: 600; color: var(--text-secondary);">مساحة ليبية آمنة 100% بدون هوية</span>
        </div>

        <h1 class="hero-title">
          مساحة آمنة تتحدث فيها، <br>
          <span class="highlight">وسَنَد يساعدك</span>
        </h1>

        <p class="hero-desc">
          تحدث مع مساعدنا الذكي بشكل آمن ومجهول، افهم ما تمر به بهدوء، واحصل على الدعم المناسب أو تواصل مع مختص نفسي عندما تحتاج إليه، دون أحكام أو تشخيصات متسرعة.
        </p>

        <div class="hero-cta-group">
          <a href="pages/anonymous-start.html" class="btn btn-primary btn-lg">
            <svg class="icon-svg" viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
            ابدأ محادثة مجهولة
          </a>
          <a href="#how-it-works" class="btn btn-secondary btn-lg">
            <svg class="icon-svg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            كيف يعمل سَنَد؟
          </a>
        </div>

        <div class="hero-trust-indicators">
          <div class="trust-item">
            <svg class="icon-svg trust-item-icon" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
            <span>بدون اسم أو بريد</span>
          </div>
          <div class="trust-item">
            <svg class="icon-svg trust-item-icon" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
            <span>مفهوم باللهجة الليبية</span>
          </div>
          <div class="trust-item">
            <svg class="icon-svg trust-item-icon" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
            <span>إشراف بشري مختص</span>
          </div>
        </div>
      </div>

      <!-- Hero Visual Representation -->
      <div class="hero-visual-card">
        <div style="margin-bottom: 20px;">
          <span style="font-size: 0.8rem; font-weight: 700; color: var(--text-muted); text-transform: uppercase;">رحلة الدعم الذكي المتكاملة</span>
          <h3 style="font-size: 1.25rem; margin-top: 4px;">جسر الأمان: من البوح إلى الرعاية</h3>
        </div>

        <div class="architecture-diagram">
          <!-- Node 1: Anonymous User -->
          <div class="diagram-node">
            <div class="node-icon user-node">
              <svg class="icon-svg" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            </div>
            <div class="node-details">
              <div class="node-title">المستخدم المجهول (Anonymous)</div>
              <div class="node-desc">فضفضة حرة، بدون تسجيل دخول، تشفير جلسة فوري</div>
            </div>
            <span class="badge badge-anonymous">خاص 100%</span>
          </div>

          <!-- Connector 1 -->
          <div class="diagram-connector">
            <div class="diagram-connector-line"></div>
            <span class="diagram-connector-tag">استماع وتحليل مؤشرات</span>
          </div>

          <!-- Node 2: Sanad AI -->
          <div class="diagram-node" style="border-color: var(--primary-accent-border); background-color: var(--bg-surface-elevated);">
            <div class="node-icon ai-node">
              <svg class="icon-svg" viewBox="0 0 24 24"><path d="M12 2a10 10 0 0110 10c0 5.52-4.48 10-10 10S2 17.52 2 12A10 10 0 0112 2z"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
            </div>
            <div class="node-details">
              <div class="node-title">مساعد سَنَد الذكي (AI Assistant)</div>
              <div class="node-desc">فهم اللهجة الليبية، تقييم مستوى الاحتياج، دعم أولي</div>
            </div>
            <span class="badge" style="background-color: var(--primary-accent-soft); color: var(--primary-accent);">موجّه وليس مشخّص</span>
          </div>

          <!-- Connector 2 -->
          <div class="diagram-connector">
            <div class="diagram-connector-line"></div>
            <span class="diagram-connector-tag">تحويل عند الحاجة</span>
          </div>

          <!-- Node 3: Human Specialist -->
          <div class="diagram-node">
            <div class="node-icon specialist-node">
              <svg class="icon-svg" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
            </div>
            <div class="node-details">
              <div class="node-title">المختص النفسي البشري (Human Specialist)</div>
              <div class="node-desc">إشراف إكلينيكي، جلسات استشارية مرخصة في ليبيا</div>
            </div>
            <span class="badge badge-online">جاهزون للمساعدة</span>
          </div>
        </div>

        <div class="privacy-badge-floating">
          <svg class="icon-svg" viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
          <span>الخصوصية والأمان أولويتنا الدائمة</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Workflow Section -->
  <section id="how-it-works" class="section-pad" style="background-color: var(--bg-secondary);">
    <div class="container">
      <div class="section-head">
        <span class="section-sub">خطوات واضحة وبسيطة</span>
        <h2>كيف يعمل سَنَد؟</h2>
        <p>نرافقك في رحلة هادئة خطوة بخطوة، تبدأ من الحديث التلقائي وتصل إلى أقصى درجات الاطمئنان والرعاية.</p>
      </div>

      <div class="workflow-grid">
        <!-- Step 1 -->
        <div class="workflow-card">
          <div class="workflow-step-num">01</div>
          <div class="workflow-icon-wrap">
            <svg class="icon-svg" viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
          </div>
          <h3 class="workflow-title">تحدث</h3>
          <p class="workflow-desc">شارك ما تشعر به بالطريقة التي تناسبك؛ كتابة أو تسجيل صوتي، دون أي حاجة للإفصاح عن هويتك.</p>
        </div>

        <!-- Step 2 -->
        <div class="workflow-card">
          <div class="workflow-step-num">02</div>
          <div class="workflow-icon-wrap">
            <svg class="icon-svg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
          </div>
          <h3 class="workflow-title">يفهمك سَنَد</h3>
          <p class="workflow-desc">يحلل المساعد الذكي سياق كلامك بتفهم ويبحث عن المؤشرات العاطفية التي تحتاج إلى الانتباه والاهتمام.</p>
        </div>

        <!-- Step 3 -->
        <div class="workflow-card">
          <div class="workflow-step-num">03</div>
          <div class="workflow-icon-wrap">
            <svg class="icon-svg" viewBox="0 0 24 24"><path d="M18 20V10"/><path d="M12 20V4"/><path d="M6 20v-6"/></svg>
          </div>
          <h3 class="workflow-title">تقييم مستوى الاحتياج</h3>
          <p class="workflow-desc">يحدد النظام مستوى الحاجة إلى الدعم (منخفض، متوسط، متابعة)، دون تقديم تشخيص طبي أو أحكام قطعية.</p>
        </div>

        <!-- Step 4 -->
        <div class="workflow-card">
          <div class="workflow-step-num">04</div>
          <div class="workflow-icon-wrap">
            <svg class="icon-svg" viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
          </div>
          <h3 class="workflow-title">احصل على الدعم</h3>
          <p class="workflow-desc">استفد من تمارين تنفس موجهة، إرشادات إدارة التوتر، والمحتوى المخصص لحالتك لمساعدتك في يومك.</p>
        </div>

        <!-- Step 5 -->
        <div class="workflow-card">
          <div class="workflow-step-num">05</div>
          <div class="workflow-icon-wrap">
            <svg class="icon-svg" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="8.5" cy="7" r="4"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/></svg>
          </div>
          <h3 class="workflow-title">تواصل مع مختص</h3>
          <p class="workflow-desc">عند الحاجة أو الرغبة، يمكنك الانتقال بسلاسة إلى أخصائي نفسي ليبي معتمد لجلسة استشارية آمنة.</p>
        </div>
      </div>

      <div style="text-align: center; margin-top: 48px;">
        <a href="pages/anonymous-start.html" class="btn btn-primary btn-lg">جرب الخطوة الأولى الآن</a>
      </div>
    </div>
  </section>

  <!-- Core Pillars Section -->
  <section class="section-pad">
    <div class="container">
      <div class="section-head">
        <span class="section-sub">قيم سَنَد الأساسية</span>
        <h2>منظومة صُممت لراحتك النفسية</h2>
        <p>ندرك الحواجز الاجتماعية والصعوبات التي يمر بها الشباب، لذا بنينا سَنَد على أسس متينة من الثقة.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 28px;">
        <div class="card card-interactive">
          <div style="width: 52px; height: 52px; border-radius: var(--radius-md); background-color: var(--primary-accent-soft); color: var(--primary-accent); display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
            <svg class="icon-svg icon-lg" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>مجهولية تامة بالتصميم (Anonymous by Design)</h3>
          <p style="margin-top: 10px;">لا نطلب اسمك، رقم هاتفك، أو بريدك الإلكتروني. محادثاتك لا ترتبط بأي حساب شخصي ويمكنك حذفها بضغطة زر واحدة.</p>
        </div>

        <div class="card card-interactive">
          <div style="width: 52px; height: 52px; border-radius: var(--radius-md); background-color: var(--wellness-green-soft); color: var(--wellness-green); display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
            <svg class="icon-svg icon-lg" viewBox="0 0 24 24"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg>
          </div>
          <h3>الذكاء الاصطناعي كجسر وليس بديلاً</h3>
          <p style="margin-top: 10px;">سَنَد لا يقدم تشخيصًا طبيًا نهائيًا ولا يصرف أدوية. دوره استيعاب الضغوط وتحديد مستوى الاحتياج لنصلك بالمختص الحقيقي عند اللزوم.</p>
        </div>

        <div class="card card-interactive">
          <div style="width: 52px; height: 52px; border-radius: var(--radius-md); background-color: var(--warm-gold-soft); color: var(--warm-gold); display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
            <svg class="icon-svg icon-lg" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
          </div>
          <h3>مجتمع متضامن بدون أحكام</h3>
          <p style="margin-top: 10px;">شارك تجاربك مع أشخاص يمرون بنفس الظروف في ليبيا، بأسماء رمزية مشفرة وبيئة مراقبة ومحمية ضد أي تنمر أو إساءة.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Specialist Callout Banner -->
  <section class="container" style="margin-bottom: 70px;">
    <div style="background: linear-gradient(135deg, var(--bg-surface), var(--bg-secondary)); border: 1px solid var(--border-medium); border-radius: var(--radius-xl); padding: 36px 44px; display: flex; justify-content: space-between; align-items: center; gap: 30px; flex-wrap: wrap; box-shadow: var(--shadow-card);">
      <div style="max-width: 600px;">
        <span class="badge badge-online" style="margin-bottom: 12px;">نظام Human in the Loop المعتمد</span>
        <h3 style="font-size: 1.6rem; margin-bottom: 8px;">هل أنت أخصائي أو معالج نفسي؟</h3>
        <p>الذكاء الاصطناعي يساعدك في فرز المؤشرات وتلخيص الجلسات، لكن القرار الإكلينيكي النهائي يبقى دائمًا بيدك.</p>
      </div>
      <div style="display: flex; gap: 14px;">
        <a href="pages/specialist-dashboard.html" class="btn btn-wellness btn-lg">
          <svg class="icon-svg" viewBox="0 0 24 24"><path d="M16 4h2a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/></svg>
          لوحة تحكم الأخصائي
        </a>
        <a href="pages/analytics.html" class="btn btn-secondary btn-lg">مرصد سَنَد للبيانات</a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="main-footer">
    <div class="container">
      <div class="footer-grid">
        <div>
          <div class="brand-logo" style="margin-bottom: 12px;">
            <div class="brand-icon-wrapper" style="width: 36px; height: 36px;">
              <svg class="icon-svg" viewBox="0 0 24 24"><path d="M12 3c-4.97 0-9 4.03-9 9 0 2.12.74 4.07 1.97 5.61L4 21l3.5-1.02A8.93 8.93 0 0012 21c4.97 0 9-4.03 9-9s-4.03-9-9-9z"/></svg>
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
            <a href="pages/anonymous-start.html" class="footer-link">بدء محادثة مجهولة</a>
            <a href="pages/personal-assistant.html" class="footer-link">المساعد اليومي</a>
            <a href="pages/specialists.html" class="footer-link">دليل المختصين</a>
            <a href="pages/community.html" class="footer-link">مجتمع سَنَد</a>
          </div>
        </div>

        <div class="footer-col">
          <h4>الخصوصية والأمان</h4>
          <div class="footer-links">
            <a href="pages/privacy.html" class="footer-link">هندسة الخصوصية</a>
            <a href="pages/safety.html" class="footer-link">مركز الطوارئ والأمان</a>
            <a href="pages/about.html" class="footer-link">منهجية عدم التشخيص</a>
          </div>
        </div>

        <div class="footer-col">
          <h4>المختصون والبيانات</h4>
          <div class="footer-links">
            <a href="pages/specialist-dashboard.html" class="footer-link">بوابة الأخصائيين</a>
            <a href="pages/case-details.html" class="footer-link">نموذج دراسة حالة</a>
            <a href="pages/analytics.html" class="footer-link">مرصد سَنَد المجمّع</a>
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
    <a href="index.html" class="mobile-nav-item active">
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
