@extends('layouts.app')

@section('content')
  <!-- Main Content -->
  <main class="container section-pad-sm">

    

    <div class="sanad-steps">

    {{-- Step 1 --}}
    <a
        href="{{ url('/pages/anonymous-start') }}"
        class="sanad-step completed"
    >
        <span class="sanad-step-number">✓</span>
        <span>البداية المجهولة</span>
    </a>

    <span class="sanad-arrow">←</span>

    {{-- Step 2 --}}
    <a
        href="{{ url('/pages/chat') }}"
        class="sanad-step completed"
    >
        <span class="sanad-step-number">✓</span>
        <span>محادثة سَنَد</span>
    </a>

    <span class="sanad-arrow">←</span>

    {{-- Step 3 --}}
    <div class="sanad-step active">
        <span class="sanad-step-number">3</span>
        <span>تقييم الاحتياج</span>
    </div>

    <span class="sanad-arrow">←</span>

    {{-- Step 4 --}}
    <a
        href="{{ url('/pages/specialists') }}"
        class="sanad-step"
    >
        <span class="sanad-step-number">4</span>
        <span>الدعم والمختص</span>
    </a>

</div>

    <div class="assessment-hero">
      <span class="badge badge-anonymous badge-pill" style="margin-bottom: 12px;">خطوة 3 من 4: تحليل الاحتياج</span>
      <h1 style="font-size: 2.3rem; margin-bottom: 10px;">خلينا نشوفوا كيف نقدروا نساعدوك</h1>
      <p style="max-width: 620px; margin-inline: auto; font-size: 1.05rem;">
        بناءً على حديثك الهادئ مع سَنَد، رصدنا هذه المؤشرات لمساعدتك على فهم ما تمر به وتقديم أفضل الخطوات المتاحة لراحتك.
      </p>

      <div style="display: inline-flex; align-items: center; gap: 12px; background-color: var(--bg-surface); border: 1px solid var(--border-medium); padding: 10px 24px; border-radius: var(--radius-full); margin-top: 20px; box-shadow: var(--shadow-subtle);">
        <span style="font-size: 0.95rem; font-weight: 600;">مستوى الاحتياج للدعم:</span>
        <span class="badge badge-risk-medium" style="font-size: 0.9rem; padding: 4px 14px;">متوسط (يحتاج إلى متابعة)</span>
      </div>
    </div>

    <!-- Visual Indicators Grid -->
    <div class="assessment-meters-grid">
      <!-- Meter 1: Stress -->
      <div class="meter-card">
        <div class="meter-head">
          <span class="meter-label">مستوى الضغط النفسي</span>
          <span class="meter-val-tag badge-risk-medium">مرتفع نسبيًا</span>
        </div>
        <div class="meter-bar-track">
          <div class="meter-bar-fill fill-orange" style="width: 72%;"></div>
        </div>
        <p style="font-size: 0.82rem; color: var(--text-muted); margin-top: 10px;">
          مرتبط بضغط الدراسة وتراكم المهام
        </p>
      </div>

      <!-- Meter 2: Anxiety -->
      <div class="meter-card">
        <div class="meter-head">
          <span class="meter-label">مستوى القلق والترقب</span>
          <span class="meter-val-tag badge-risk-medium">متوسط</span>
        </div>
        <div class="meter-bar-track">
          <div class="meter-bar-fill fill-amber" style="width: 58%;"></div>
        </div>
        <p style="font-size: 0.82rem; color: var(--text-muted); margin-top: 10px;">
          أفكار متكررة حول الامتحانات والمستقبل
        </p>
      </div>

      <!-- Meter 3: Fatigue -->
      <div class="meter-card">
        <div class="meter-head">
          <span class="meter-label">الإرهاق العام</span>
          <span class="meter-val-tag badge-risk-medium">ملحوظ</span>
        </div>
        <div class="meter-bar-track">
          <div class="meter-bar-fill fill-orange" style="width: 65%;"></div>
        </div>
        <p style="font-size: 0.82rem; color: var(--text-muted); margin-top: 10px;">
          حاجة ماسة إلى فترات استرخاء وفصل ذهني
        </p>
      </div>

      <!-- Meter 4: Sleep -->
      <div class="meter-card">
        <div class="meter-head">
          <span class="meter-label">انتظام وجودة النوم</span>
          <span class="meter-val-tag badge-risk-medium">تذبذب</span>
        </div>
        <div class="meter-bar-track">
          <div class="meter-bar-fill fill-amber" style="width: 48%;"></div>
        </div>
        <p style="font-size: 0.82rem; color: var(--text-muted); margin-top: 10px;">
          صعوبة الاستغراق في النوم بسبب التفكير الليلي
        </p>
      </div>

      <!-- Meter 5: Focus -->
      <div class="meter-card">
        <div class="meter-head">
          <span class="meter-label">القدرة على التركيز</span>
          <span class="meter-val-tag" style="background-color: var(--bg-secondary); color: var(--text-secondary);">يحتاج تنظيم</span>
        </div>
        <div class="meter-bar-track">
          <div class="meter-bar-fill fill-amber" style="width: 40%;"></div>
        </div>
        <p style="font-size: 0.82rem; color: var(--text-muted); margin-top: 10px;">
          تشتت ناتج عن تراكم الضغوطات
        </p>
      </div>
    </div>

    <!-- Medical Disclaimer Banner -->
    <div class="disclaimer-box" style="margin-bottom: 48px; padding: 18px 24px; border-radius: var(--radius-lg);">
      <svg class="icon-svg icon-lg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
      <div>
        <h4 style="font-size: 0.95rem; color: inherit; margin-bottom: 4px;">توضيح هام من سَنَد AI:</h4>
        <p style="color: inherit; font-size: 0.88rem; line-height: 1.6;">
          هذا التقييم هو رصد استرشادي لمؤشرات الحديث بهدف توجيهك، ولا يُعتبر بأي شكل تشخيصًا سريريًا أو طبيًا نهائيًا. إذا كنت تشعر بتفاقم الأعراض، فإن خطوتك الأفضل هي التحدث المباشر مع مختص بشري.
        </p>
      </div>
    </div>

    <!-- "شن ممكن نديروا توا؟" Next Steps Section -->
    <div style="margin-bottom: 60px;">
      <div class="section-head" style="margin-bottom: 32px;">
        <span class="section-sub">خطوات عملية لمساعدتك</span>
        <h2>شن ممكن نديروا توا؟</h2>
        <p>اختر ما يناسب راحتك ووقتك من الخيارات التالية:</p>
      </div>

      <div class="next-steps-grid">
        <!-- Option 1: Breathing Exercise -->
        <div class="step-action-card">
          <div class="step-action-icon" style="background-color: var(--wellness-green-soft); color: var(--wellness-green);">
            <svg class="icon-svg icon-lg" viewBox="0 0 24 24"><path d="M12 2a10 10 0 0110 10c0 5.52-4.48 10-10 10S2 17.52 2 12A10 10 0 0112 2z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <div>
            <h3 style="font-size: 1.15rem; margin-bottom: 8px;">تمارين تنفس موجهة</h3>
            <p style="font-size: 0.88rem; margin-bottom: 16px;">تمرين بسيط مدته 3 دقائق يساعد جهازك العصبي على تهدئة دقات القلب وخفض التوتر.</p>
          </div>
          <button data-open-modal="breathingModal" class="btn btn-wellness btn-sm" style="width: 100%;">ابدأ تمرين التنفس الآن</button>
        </div>

        <!-- Option 2: Stress Management -->
        <div class="step-action-card">
          <div class="step-action-icon" style="background-color: var(--primary-accent-soft); color: var(--primary-accent);">
            <svg class="icon-svg icon-lg" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
          </div>
          <div>
            <h3 style="font-size: 1.15rem; margin-bottom: 8px;">خطة إدارة التوتر</h3>
            <p style="font-size: 0.88rem; margin-bottom: 16px;">خطوات لتجزئة المهام الدراسية المعقدة إلى فترات صغيرة قابلة للإنجاز بدون إجهاد.</p>
          </div>
          <a href="personal-assistant.html" class="btn btn-secondary btn-sm" style="width: 100%;">عرض الخطة في مساعدي</a>
        </div>

        <!-- Option 3: Sleep Hygiene -->
        <div class="step-action-card">
          <div class="step-action-icon" style="background-color: var(--warm-gold-soft); color: var(--warm-gold);">
            <svg class="icon-svg icon-lg" viewBox="0 0 24 24"><path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"/></svg>
          </div>
          <div>
            <h3 style="font-size: 1.15rem; margin-bottom: 8px;">تنظيم النوم المريح</h3>
            <p style="font-size: 0.88rem; margin-bottom: 16px;">إرشادات مسائية لتفريغ الأفكار قبل الاستلقاء وتقليل تشتت الشاشات الزرقاء.</p>
          </div>
          <a href="personal-assistant.html" class="btn btn-secondary btn-sm" style="width: 100%;">نصائح النوم المهدئة</a>
        </div>

        <!-- Option 4: Human Specialist -->
        <div class="step-action-card" style="border: 2px solid var(--wellness-green-border); background-color: var(--bg-surface-elevated);">
          <div class="step-action-icon" style="background-color: var(--wellness-green); color: #FFFFFF;">
            <svg class="icon-svg icon-lg" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
          </div>
          <div>
            <span class="badge badge-online" style="margin-bottom: 8px;">دعم إكلينيكي متخصص</span>
            <h3 style="font-size: 1.15rem; margin-bottom: 8px;">التحدث مع مختص نفسي</h3>
            <p style="font-size: 0.88rem; margin-bottom: 16px;">جلسة استشارية سرية مع معالج نفسي ليبي معتمد يفهم واقعك ويوفر رعاية معمقة.</p>
          </div>
          <a href="specialists.html" class="btn btn-primary btn-sm" style="width: 100%;">طلب جلسة مع مختص</a>
        </div>
      </div>
    </div>

    <!-- Next Step Continuity Card -->
    <div class="next-step-card">
      <div class="next-step-content">
        <span class="next-step-tag">الخطوة التالية (4 من 4)</span>
        <h3>هل ترغب في البدء في خطتك اليومية أو استشارة مختص؟</h3>
        <p>يمكنك التوجه إلى لوحة المساعد اليومي لمتابعة حالتك ذاتيًا، أو استعراض الأخصائيين المعتمدين في ليبيا لجلسة مباشرة.</p>
      </div>
      <div style="display: flex; gap: 12px; flex-shrink: 0; flex-wrap: wrap;">
        <a href="personal-assistant.html" class="btn btn-secondary btn-lg">
          المساعد اليومي
        </a>
        <a href="specialists.html" class="btn btn-wellness btn-lg">
          استعراض المختصين النفسيين
        </a>
      </div>
    </div>

  </main>

  <!-- Interactive Breathing Exercise Modal -->
  <div class="modal-overlay" id="breathingModal">
    <div class="modal-window" style="text-align: center;">
      <div class="modal-header">
        <h3 style="display: flex; align-items: center; gap: 8px;">
          <svg class="icon-svg" style="color: var(--wellness-green);" viewBox="0 0 24 24"><path d="M12 2a10 10 0 0110 10c0 5.52-4.48 10-10 10S2 17.52 2 12A10 10 0 0112 2z"/></svg>
          تمرين التنفس الهادئ (4-4-4)
        </h3>
        <button class="modal-close-btn">&times;</button>
      </div>

      <div class="breathing-box">
        <div class="breathing-circle-container">
          <div class="breathing-circle"></div>
        </div>

        <h4 class="js-breathing-phase" style="font-size: 1.25rem; color: var(--wellness-green); margin-bottom: 8px;">
          شهيق هادئ من الأنف...
        </h4>
        <p class="js-breathing-timer" style="font-size: 1.1rem; font-weight: 700; color: var(--text-muted); margin-bottom: 18px;">
          4 ثوانٍ
        </p>
        <p style="font-size: 0.9rem; color: var(--text-secondary); max-width: 380px;">
          ركز على حركة الدائرة، واسمح لكتفيك بالاسترخاء. لا تفكر في أي شيء آخر سوى أنفاسك.
        </p>
      </div>

      <button class="btn btn-secondary modal-close-btn" style="width: 100%;">إنهاء التمرين</button>
    </div>
  </div>

  

@endsection
