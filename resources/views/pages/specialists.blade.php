@extends('layouts.app')

@section('content')
  <!-- Main Content -->

  <br><br>
<div class="sanad-steps">

    <a href="{{ url('/pages/anonymous-start') }}" class="sanad-step completed">
        <span class="sanad-step-number">✓</span>
        <span>البداية المجهولة</span>
    </a>

    <span class="sanad-arrow">←</span>

    <a href="{{ url('/pages/chat') }}" class="sanad-step completed">
        <span class="sanad-step-number">✓</span>
        <span>محادثة سَنَد</span>
    </a>

    <span class="sanad-arrow">←</span>

    <a href="{{ url('/pages/assessment') }}" class="sanad-step completed">
        <span class="sanad-step-number">✓</span>
        <span>تقييم الاحتياج</span>
    </a>

    <span class="sanad-arrow">←</span>

    <div class="sanad-step active">
        <span class="sanad-step-number">4</span>
        <span>الدعم والمختص</span>
    </div>

</div>

  <!-- Main Content -->
  <main class="container section-pad-sm">
    <div class="section-head" style="margin-bottom: 36px;">
      <span class="section-sub">شبكة استشارية ليبية مرخصة</span>
      <h1 style="font-size: 2.3rem; margin-bottom: 12px;">مختصون جاهزون لسماعك</h1>
      <p style="max-width: 650px; margin-inline: auto;">
        عندما تشعر بالحاجة لمساعدة بشرية متخصصة، يمكنك حجز جلسة استشارية سرية وآمنة مع أخصائيين ومعالجين نفسيين معتمدين في ليبيا.
      </p>
    </div>

    <!-- Filters Row -->
    <div class="specialists-filters">
      <span style="font-weight: 700; font-size: 0.95rem; margin-left: 8px;">تصفية حسب:</span>
      <button class="filter-chip active js-spec-filter" data-filter="all">جميع المختصين</button>
      <button class="filter-chip js-spec-filter" data-filter="available">متاح الآن فقط</button>
      <button class="filter-chip js-spec-filter" data-filter="west">المنطقة الغربية (طرابلس / مصراتة)</button>
      <button class="filter-chip js-spec-filter" data-filter="east">المنطقة الشرقية (بنغازي)</button>
      <button class="filter-chip js-spec-filter" data-filter="south">المنطقة الجنوبية (سبها)</button>
    </div>

    <!-- Specialists Grid -->
    <div class="specialists-grid" id="specialistsGrid">
      
      <!-- Specialist 1: Dr. Ahmed Mohamed -->
      <div class="specialist-card" data-available="true" data-region="west">
        <div class="specialist-head">
          <div class="specialist-avatar-placeholder" style="background-color: var(--primary-accent-soft); color: var(--primary-accent);">
            أ.م
          </div>
          <div class="specialist-meta">
            <h3>د. أحمد محمد</h3>
            <div class="specialist-title">أخصائي نفسي إكلينيكي</div>
            <div class="specialist-badge-row">
              <span class="badge badge-online">متاح الآن</span>
              <span class="badge badge-anonymous" style="font-size: 0.78rem;">
                <svg class="icon-svg" style="width: 14px; height: 14px; color: var(--warm-gold);" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                4.9 (140+ جلسة)
              </span>
            </div>
          </div>
        </div>

        <div class="specialist-details-list">
          <div class="detail-line">
            <span>الخبرة المهنية:</span>
            <strong>8 سنوات</strong>
          </div>
          <div class="detail-line">
            <span>المنطقة:</span>
            <strong>طرابلس (المنطقة الغربية)</strong>
          </div>
          <div class="detail-line">
            <span>اللغات واللهجات:</span>
            <strong>العربية، اللهجة الليبية، الإنجليزية</strong>
          </div>
          <div class="detail-line">
            <span>مجالات التركيز:</span>
            <span style="font-size: 0.82rem; color: var(--primary-accent);">إدارة الضغوط، القلق، اضطرابات النوم</span>
          </div>
        </div>

        <div class="specialist-actions-row">
          <a href="specialist-profile.html?id=dr-ahmed" class="btn btn-secondary btn-sm" style="flex: 1;">عرض الملف</a>
          <button data-open-modal="bookSessionModal" class="btn btn-primary btn-sm" style="flex: 1;">طلب جلسة</button>
        </div>
      </div>

      <!-- Specialist 2: Ms. Sarah Ali -->
      <div class="specialist-card" data-available="true" data-region="east">
        <div class="specialist-head">
          <div class="specialist-avatar-placeholder" style="background-color: var(--wellness-green-soft); color: var(--wellness-green);">
            س.ع
          </div>
          <div class="specialist-meta">
            <h3>أ. سارة علي</h3>
            <div class="specialist-title">أخصائية دعم نفسي وإرشاد أسري</div>
            <div class="specialist-badge-row">
              <span class="badge badge-online">متاحة الآن</span>
              <span class="badge badge-anonymous" style="font-size: 0.78rem;">
                <svg class="icon-svg" style="width: 14px; height: 14px; color: var(--warm-gold);" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                4.8 (95 جلسة)
              </span>
            </div>
          </div>
        </div>

        <div class="specialist-details-list">
          <div class="detail-line">
            <span>الخبرة المهنية:</span>
            <strong>6 سنوات</strong>
          </div>
          <div class="detail-line">
            <span>المنطقة:</span>
            <strong>بنغازي (المنطقة الشرقية)</strong>
          </div>
          <div class="detail-line">
            <span>اللغات واللهجات:</span>
            <strong>العربية، اللهجة الليبية</strong>
          </div>
          <div class="detail-line">
            <span>مجالات التركيز:</span>
            <span style="font-size: 0.82rem; color: var(--primary-accent);">دعم الشباب، القلق الدراسي، العلاقات</span>
          </div>
        </div>

        <div class="specialist-actions-row">
          <a href="specialist-profile.html?id=sarah-ali" class="btn btn-secondary btn-sm" style="flex: 1;">عرض الملف</a>
          <button data-open-modal="bookSessionModal" class="btn btn-primary btn-sm" style="flex: 1;">طلب جلسة</button>
        </div>
      </div>

      <!-- Specialist 3: Mr. Mohamed Salem -->
      <div class="specialist-card" data-available="false" data-region="west">
        <div class="specialist-head">
          <div class="specialist-avatar-placeholder" style="background-color: var(--warm-gold-soft); color: var(--warm-gold);">
            م.س
          </div>
          <div class="specialist-meta">
            <h3>أ. محمد سالم</h3>
            <div class="specialist-title">معالج نفسي واستشاري سلوكي</div>
            <div class="specialist-badge-row">
              <span class="badge badge-anonymous" style="font-size: 0.75rem;">متاح غدًا</span>
              <span class="badge badge-anonymous" style="font-size: 0.78rem;">
                <svg class="icon-svg" style="width: 14px; height: 14px; color: var(--warm-gold);" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                4.9 (210 جلسة)
              </span>
            </div>
          </div>
        </div>

        <div class="specialist-details-list">
          <div class="detail-line">
            <span>الخبرة المهنية:</span>
            <strong>10 سنوات</strong>
          </div>
          <div class="detail-line">
            <span>المنطقة:</span>
            <strong>مصراتة (المنطقة الغربية)</strong>
          </div>
          <div class="detail-line">
            <span>اللغات واللهجات:</span>
            <strong>العربية، اللهجة الليبية، الإنجليزية</strong>
          </div>
          <div class="detail-line">
            <span>مجالات التركيز:</span>
            <span style="font-size: 0.82rem; color: var(--primary-accent);">العلاج المعرفي السلوكي (CBT)، الصدمات</span>
          </div>
        </div>

        <div class="specialist-actions-row">
          <a href="specialist-profile.html?id=mohamed-salem" class="btn btn-secondary btn-sm" style="flex: 1;">عرض الملف</a>
          <button data-open-modal="bookSessionModal" class="btn btn-secondary btn-sm" style="flex: 1;">حجز موعد</button>
        </div>
      </div>

      <!-- Specialist 4: Dr. Fatima Al-Obeidi -->
      <div class="specialist-card" data-available="true" data-region="south">
        <div class="specialist-head">
          <div class="specialist-avatar-placeholder" style="background-color: var(--primary-accent-soft); color: var(--primary-accent);">
            ف.ع
          </div>
          <div class="specialist-meta">
            <h3>د. فاطمة العبيدي</h3>
            <div class="specialist-title">أخصائية علاج الصدمات النفسية</div>
            <div class="specialist-badge-row">
              <span class="badge badge-online">متاحة الآن</span>
              <span class="badge badge-anonymous" style="font-size: 0.78rem;">
                <svg class="icon-svg" style="width: 14px; height: 14px; color: var(--warm-gold);" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                4.9 (80 جلسة)
              </span>
            </div>
          </div>
        </div>

        <div class="specialist-details-list">
          <div class="detail-line">
            <span>الخبرة المهنية:</span>
            <strong>7 سنوات</strong>
          </div>
          <div class="detail-line">
            <span>المنطقة:</span>
            <strong>سبها (المنطقة الجنوبية)</strong>
          </div>
          <div class="detail-line">
            <span>اللغات واللهجات:</span>
            <strong>العربية، اللهجة الليبية</strong>
          </div>
          <div class="detail-line">
            <span>مجالات التركيز:</span>
            <span style="font-size: 0.82rem; color: var(--primary-accent);">الاستقرار النفسي، الخوف والهلع، التمكين</span>
          </div>
        </div>

        <div class="specialist-actions-row">
          <a href="specialist-profile.html?id=fatima-obeidi" class="btn btn-secondary btn-sm" style="flex: 1;">عرض الملف</a>
          <button data-open-modal="bookSessionModal" class="btn btn-primary btn-sm" style="flex: 1;">طلب جلسة</button>
        </div>
      </div>

    </div>

    <!-- Next Step Continuity Card -->
    <div class="next-step-card" style="margin-top: 40px;">
      <div class="next-step-content">
        <span class="badge badge-wellness" style="margin-bottom: 8px;">متابعة خطتك الشاملة</span>
        <h3>هل ترغب أيضاً في تمارين ومتابعة ذاتية يومية؟</h3>
        <p>يمكنك استخدام "المساعد اليومي" لتتبع مزاجك، ممارسة تمارين التنفس، والحصول على اقتراحات تعزيز الراحة الذهنية يومياً وبشكل مجهول.</p>
      </div>
      <div class="next-step-actions">
        <a href="personal-assistant.html" class="btn btn-primary">
          الانتقال للمساعد اليومي
          <svg class="icon-svg" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
        <a href="community.html" class="btn btn-secondary">
          استكشاف مجتمع سَنَد
        </a>
      </div>
    </div>
  </main>

  <!-- Book Session Modal -->
  <div class="modal-overlay" id="bookSessionModal">
    <div class="modal-window">
      <div class="modal-header">
        <h3 style="display: flex; align-items: center; gap: 8px;">
          <svg class="icon-svg" style="color: var(--wellness-green);" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
          طلب جلسة استشارية سرية
        </h3>
        <button class="modal-close-btn">&times;</button>
      </div>

      <div style="background-color: var(--bg-secondary); border-radius: var(--radius-md); padding: 16px; margin-bottom: 20px;">
        <div style="font-weight: 700; font-size: 0.95rem; margin-bottom: 4px;">ضمان السرية التامة:</div>
        <p style="font-size: 0.85rem; color: var(--text-secondary);">
          يتم ربط الجلسة بمعرّف جلستك المجهول (<span class="js-user-id">مستخدم #4821</span>) ولا يتم إظهار اسمك للمختص إلا إذا رغبت في ذلك بنفسك أثناء الجلسة.
        </p>
      </div>

      <div style="margin-bottom: 16px;">
        <label style="display: block; font-weight: 600; font-size: 0.9rem; margin-bottom: 8px;">نوع الجلسة المفضل:</label>
        <div style="display: flex; gap: 12px;">
          <label style="flex: 1; border: 1px solid var(--border-medium); border-radius: var(--radius-md); padding: 12px; cursor: pointer; display: flex; align-items: center; gap: 8px; background-color: var(--bg-surface-alt);">
            <input type="radio" name="sessionType" checked style="accent-color: var(--primary-accent);">
            <span>محادثة نصية خاصة</span>
          </label>
          <label style="flex: 1; border: 1px solid var(--border-medium); border-radius: var(--radius-md); padding: 12px; cursor: pointer; display: flex; align-items: center; gap: 8px;">
            <input type="radio" name="sessionType" style="accent-color: var(--primary-accent);">
            <span>مكالمة صوتية مشفرة</span>
          </label>
        </div>
      </div>

      <div style="margin-bottom: 24px;">
        <label style="display: block; font-weight: 600; font-size: 0.9rem; margin-bottom: 8px;">ملاحظة أولية للمختص (اختياري):</label>
        <textarea style="width: 100%; height: 80px; border: 1px solid var(--border-medium); border-radius: var(--radius-md); padding: 10px; font-family: var(--font-family); font-size: 0.9rem;" placeholder="مثال: أحتاج مساعدة في إدارة ضغط الامتحانات وصعوبة النوم..."></textarea>
      </div>

      <button id="confirmBookingBtn" class="btn btn-primary" style="width: 100%;">تأكيد إرسال الطلب للمختص</button>
    </div>
  </div>


  <script>
    // Filtering logic
    const filterChips = document.querySelectorAll('.js-spec-filter');
    const specialistCards = document.querySelectorAll('.specialist-card');

    filterChips.forEach(chip => {
      chip.addEventListener('click', () => {
        filterChips.forEach(c => c.classList.remove('active'));
        chip.classList.add('active');

        const filter = chip.getAttribute('data-filter');

        specialistCards.forEach(card => {
          if (filter === 'all') {
            card.style.display = '';
          } else if (filter === 'available') {
            card.style.display = card.getAttribute('data-available') === 'true' ? '' : 'none';
          } else {
            card.style.display = card.getAttribute('data-region') === filter ? '' : 'none';
          }
        });
      });
    });

    document.getElementById('confirmBookingBtn').addEventListener('click', () => {
      SanadApp.closeModal('bookSessionModal');
      SanadApp.showToast('تم إرسال طلب الجلسة للمختص بنجاح. سيتم إشعارك فور القبول.', 'success');
    });
  </script>
@endsection
