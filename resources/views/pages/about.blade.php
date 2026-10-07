@extends('layouts.app')

@section('content')

<!-- Main Content -->
  <main class="container container-narrow section-pad-sm">
    <div class="section-head">
      <span class="section-sub">قصة المبادرة ورسالتها</span>
      <h1 style="font-size: 2.3rem; margin-bottom: 12px;">لأن طلب المساعدة ليس ضعفًا</h1>
      <p style="font-size: 1.15rem; color: var(--text-secondary); max-width: 650px; margin-inline: auto;">
        بنينا سَنَد AI ليكون الخطوة الأولى المريحة لكل شاب وفتاة في ليبيا يمرون بضغوطات الحياة ولا يجدون من يسمعهم بدون أحكام.
      </p>
    </div>

    <!-- The Problem & The Solution -->
    <div style="display: grid; grid-template-columns: 1fr; gap: 30px; margin-bottom: 50px;">
      
      <!-- The Problem -->
      <div class="card card-beige" style="border-radius: var(--radius-xl); padding: 36px;">
        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 16px;">
          <div style="width: 44px; height: 44px; border-radius: var(--radius-sm); background-color: var(--primary-accent-soft); color: var(--primary-accent); display: flex; align-items: center; justify-content: center;">
            <svg class="icon-svg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
          </div>
          <h2 style="font-size: 1.5rem;">المشكلة: حواجز الصمت والوصمة</h2>
        </div>
        <p style="line-height: 1.8; font-size: 1.05rem;">
          الكثير من الشباب في ليبيا يمرون بتراكمات وضغوط دراسية، مهنية، واجتماعية متزايدة. لكنهم في أغلب الأوقات:
        </p>
        <ul style="margin-top: 14px; display: flex; flex-direction: column; gap: 10px; font-size: 0.98rem; padding-right: 18px;">
          <li style="list-style-type: disc;">لا يعرفون أين يبدأون أو كيف يعبرون عما يشعرون به.</li>
          <li style="list-style-type: disc;">يخشون الأحكام الاجتماعية أو الوصمة المرتبطة بزيارة العيادات النفسية.</li>
          <li style="list-style-type: disc;">يشعرون بالخوف من تسجيل بياناتهم أو مشاركة أسمائهم الحقيقية.</li>
          <li style="list-style-type: disc;">يفتقرون إلى نقطة انطلاق ميسرة ومفهومة بلهجتهم وثقافتهم اليومية.</li>
        </ul>
      </div>

      <!-- The Solution -->
      <div class="card card-soft-green" style="border-radius: var(--radius-xl); padding: 36px;">
        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 16px;">
          <div style="width: 44px; height: 44px; border-radius: var(--radius-sm); background-color: var(--wellness-green); color: #FFFFFF; display: flex; align-items: center; justify-content: center;">
            <svg class="icon-svg" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          </div>
          <h2 style="font-size: 1.5rem; color: var(--wellness-green);">الحل: سَنَد AI كنقطة بداية آمنة</h2>
        </div>
        <p style="line-height: 1.8; font-size: 1.05rem; color: var(--text-primary);">
          سَنَد يوفر مساحة رقمية مجهولة بالكامل، تجمع بين:
        </p>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px; margin-top: 18px;">
          <div style="background-color: #FFFFFF; padding: 16px; border-radius: var(--radius-md); border: 1px solid var(--wellness-green-border);">
            <strong style="color: var(--wellness-green); display: block; margin-bottom: 4px;">فهم الذكاء الاصطناعي</strong>
            استيعاب للهجة الليبية وتفريغ هادئ للأفكار بدون أي قيود أو رقابة شخصية.
          </div>
          <div style="background-color: #FFFFFF; padding: 16px; border-radius: var(--radius-md); border: 1px solid var(--wellness-green-border);">
            <strong style="color: var(--wellness-green); display: block; margin-bottom: 4px;">تقييم أولي للاحتياج</strong>
            تقدير مستوى الحاجة للدعم ومساعدة المستخدم على معرفة أين يقف حاليًا.
          </div>
          <div style="background-color: #FFFFFF; padding: 16px; border-radius: var(--radius-md); border: 1px solid var(--wellness-green-border);">
            <strong style="color: var(--wellness-green); display: block; margin-bottom: 4px;">الدعم البشري المتخصص</strong>
            تحويل سلس إلى معالجين وأخصائيين نفسيين ليبيين معتمدين عندما تقتضي الحاجة.
          </div>
        </div>
      </div>

    </div>

    <!-- Core Philosophy: Human in the loop -->
    <div class="card" style="border-radius: var(--radius-xl); padding: 36px; text-align: center;">
      <h3 style="font-size: 1.4rem; margin-bottom: 12px;">فلسفتنا في استخدام الذكاء الاصطناعي</h3>
      <p style="max-width: 600px; margin-inline: auto; line-height: 1.8; font-size: 1.05rem; margin-bottom: 24px;">
        "الذكاء الاصطناعي في سَنَد أداة استماع وإسناد تمهيدية؛ هو لا يحل محل الطبيب، ولا يصدر وصفات علاجية، وإنما يبني جسرًا إنسانيًا مريحًا يسهّل وصول المحتاجين للرعاية المتخصصة في الوقت المناسب."
      </p>
      <a href="anonymous-start.html" class="btn btn-primary btn-lg">ابدأ تجربتك الآمنة الآن</a>
    </div>
  </main>
  
@endsection