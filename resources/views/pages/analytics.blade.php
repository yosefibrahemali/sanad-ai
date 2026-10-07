@extends('layouts.app')

@section('content')
  <!-- Main Content -->
  <main class="container section-pad-sm">
    
    <!-- Anonymity Banner -->
    <div class="card card-soft-green" style="border-radius: var(--radius-xl); padding: 22px 28px; margin-bottom: 32px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 14px;">
      <div style="display: flex; align-items: center; gap: 12px;">
        <svg class="icon-svg icon-lg" style="color: var(--wellness-green);" viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
        <div>
          <strong style="font-size: 1.05rem; color: var(--wellness-green);">إعلان موثوقية المرصد:</strong>
          <span style="font-size: 0.92rem; color: var(--text-primary); margin-right: 6px;">
            كافة البيانات المعروضة مجهّلة ومجمّعة إحصائيًا بالكامل، ولا تحتوي على أي أسماء أو معرفات تدل على هوية المستخدمين.
          </span>
        </div>
      </div>
      <span class="badge badge-online">تحديث أسبوعي تلقائي</span>
    </div>

    <!-- Header Description -->
    <div style="margin-bottom: 36px;">
      <h1 style="font-size: 2.2rem; margin-bottom: 8px;">مؤشرات الصحة النفسية بين الشباب في ليبيا</h1>
      <p style="font-size: 1.05rem; color: var(--text-secondary); max-width: 720px;">
        لوحة قياس مجتمعية تهدف لمساعدة الباحثين وصناع القرار والمختصين على فهم مصادر القلق والضغوطات النفسية الأكثر تأثيرًا على فئة الشباب.
      </p>
    </div>

    <!-- Top Key Metrics -->
    <div class="stats-grid" style="margin-bottom: 36px;">
      <div class="stat-card">
        <div style="font-size: 0.88rem; color: var(--text-muted);">إجمالي الجلسات المجهولة</div>
        <div class="stat-card-num">3,420+</div>
        <span style="font-size: 0.8rem; color: var(--wellness-green);">خلال الربع الحالي</span>
      </div>

      <div class="stat-card">
        <div style="font-size: 0.88rem; color: var(--text-muted);">جلسات التحويل للمختصين</div>
        <div class="stat-card-num" style="color: var(--primary-accent);">480</div>
        <span style="font-size: 0.8rem; color: var(--text-muted);">14% من إجمالي الجلسات</span>
      </div>

      <div class="stat-card">
        <div style="font-size: 0.88rem; color: var(--text-muted);">وقت الذروة اليومي</div>
        <div class="stat-card-num" style="font-size: 1.8rem; color: var(--warm-gold);">11 م - 2 ص</div>
        <span style="font-size: 0.8rem; color: var(--warm-gold);">أعلى مؤشرات الأرق والتفكير الليلي</span>
      </div>

      <div class="stat-card">
        <div style="font-size: 0.88rem; color: var(--text-muted);">نسبة اكتمال التمارين الذاتية</div>
        <div class="stat-card-num">68%</div>
        <span style="font-size: 0.8rem; color: var(--wellness-green);">تمارين التنفس وإدارة التوتر</span>
      </div>
    </div>

    <!-- Charts Grid -->
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 28px; margin-bottom: 40px;">
      
      <!-- Chart 1: Stress Sources (Direct Prompt Requirement) -->
      <div class="observatory-chart-card">
        <div style="margin-bottom: 22px;">
          <h3 style="font-size: 1.25rem; margin-bottom: 4px;">أكثر مصادر الضغط بين المستخدمين</h3>
          <p style="font-size: 0.85rem; color: var(--text-muted);">توزيع مسببات التوتر المستخلصة من الجلسات المجهولة</p>
        </div>

        <div class="bar-distribution-item">
          <div class="bar-dist-header">
            <span>الدراسة والامتحانات الجامعية</span>
            <strong>38%</strong>
          </div>
          <div class="bar-dist-track">
            <div class="bar-dist-fill" data-width="38%" style="background-color: var(--primary-accent);"></div>
          </div>
        </div>

        <div class="bar-distribution-item">
          <div class="bar-dist-header">
            <span>العمل والوظيفة وبداية المسار المهني</span>
            <strong>24%</strong>
          </div>
          <div class="bar-dist-track">
            <div class="bar-dist-fill" data-width="24%" style="background-color: #D67A5E;"></div>
          </div>
        </div>

        <div class="bar-distribution-item">
          <div class="bar-dist-header">
            <span>العلاقات والأسرة والتوقعات الاجتماعية</span>
            <strong>18%</strong>
          </div>
          <div class="bar-dist-track">
            <div class="bar-dist-fill" data-width="18%" style="background-color: var(--warm-gold);"></div>
          </div>
        </div>

        <div class="bar-distribution-item">
          <div class="bar-dist-header">
            <span>الوضع المالي وتكاليف المعيشة</span>
            <strong>12%</strong>
          </div>
          <div class="bar-dist-track">
            <div class="bar-dist-fill" data-width="12%" style="background-color: #A28258;"></div>
          </div>
        </div>

        <div class="bar-distribution-item">
          <div class="bar-dist-header">
            <span>أخرى (صدمات، سفر، ظروف عامة)</span>
            <strong>8%</strong>
          </div>
          <div class="bar-dist-track">
            <div class="bar-dist-fill" data-width="8%" style="background-color: var(--text-muted);"></div>
          </div>
        </div>
      </div>

      <!-- Chart 2: Regional Distribution & Needs -->
      <div class="observatory-chart-card">
        <div style="margin-bottom: 22px;">
          <h3 style="font-size: 1.25rem; margin-bottom: 4px;">التوزيع الجغرافي للاستشارات</h3>
          <p style="font-size: 0.85rem; color: var(--text-muted);">بناءً على اختيار المنطقة الاختياري من المستخدمين</p>
        </div>

        <div class="bar-distribution-item">
          <div class="bar-dist-header">
            <span>المنطقة الغربية (طرابلس، مصراتة، الزاوية، الجبل)</span>
            <strong>52%</strong>
          </div>
          <div class="bar-dist-track">
            <div class="bar-dist-fill" data-width="52%" style="background-color: var(--wellness-green);"></div>
          </div>
        </div>

        <div class="bar-distribution-item">
          <div class="bar-dist-header">
            <span>المنطقة الشرقية (بنغازي، طبرق، البيضاء، أجدابيا)</span>
            <strong>34%</strong>
          </div>
          <div class="bar-dist-track">
            <div class="bar-dist-fill" data-width="34%" style="background-color: #5E8B6D;"></div>
          </div>
        </div>

        <div class="bar-distribution-item">
          <div class="bar-dist-header">
            <span>المنطقة الجنوبية (سبها، أوباري، الشاطئ، مرزق)</span>
            <strong>14%</strong>
          </div>
          <div class="bar-dist-track">
            <div class="bar-dist-fill" data-width="14%" style="background-color: #7DA68B;"></div>
          </div>
        </div>

        <!-- Levels of Need breakdown -->
        <div style="margin-top: 32px; border-top: 1px solid var(--border-light); padding-top: 20px;">
          <div style="font-weight: 700; margin-bottom: 12px; font-size: 0.95rem;">تصنيف مستويات الاحتياج للدعم:</div>
          <div style="display: flex; gap: 10px; height: 26px; border-radius: var(--radius-full); overflow: hidden;">
            <div style="width: 55%; background-color: var(--warm-gold); display: flex; align-items: center; justify-content: center; color: #fff; font-size: 0.75rem; font-weight: 700;" title="متوسط 55%">متوسط (55%)</div>
            <div style="width: 33%; background-color: var(--wellness-green); display: flex; align-items: center; justify-content: center; color: #fff; font-size: 0.75rem; font-weight: 700;" title="منخفض 33%">منخفض (33%)</div>
            <div style="width: 12%; background-color: var(--priority-high); display: flex; align-items: center; justify-content: center; color: #fff; font-size: 0.75rem; font-weight: 700;" title="مرتفع 12%">عاجل (12%)</div>
          </div>
        </div>

      </div>

    </div>

    <!-- Impact & Research Statement -->
    <div class="card card-beige" style="border-radius: var(--radius-xl); padding: 32px; text-align: center;">
      <h3 style="font-size: 1.3rem; margin-bottom: 8px;">نحو مجتمع أكثر تعاطفًا ووعيًا</h3>
      <p style="max-width: 680px; margin-inline: auto; font-size: 0.98rem; line-height: 1.7; margin-bottom: 20px;">
        يساعد مرصد سَنَد في تسليط الضوء العلمي على احتياجات الشباب الليبي بعيدًا عن التكهنات، مما يسهم في تطوير مبادرات توعوية ودراسية واقعية تحمي الصحة النفسية المجتمعية.
      </p>
      <a href="../index.html" class="btn btn-primary">العودة للصفحة الرئيسية</a>
    </div>

  </main>

  <script src="{{asset('assets/js/app.js')}}"></script>
  <script src="{{asset('assets/js/dashboard.js')}}"></script>
@endsection
