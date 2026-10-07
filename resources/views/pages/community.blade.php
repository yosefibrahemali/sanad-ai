@extends('layouts.app')

@section('content')
  <!-- Main Content -->
  <main class="container container-narrow section-pad-sm">
    
    <!-- Community Safety Banner -->
    <div class="community-banner">
      <div>
        <span class="badge badge-online" style="margin-bottom: 8px;">مساحة إيجابية محروسة</span>
        <h2 style="font-size: 1.6rem; margin-bottom: 6px;">شارك بدون ما تكشف هويتك</h2>
        <p style="margin: 0; font-size: 0.98rem; max-width: 580px;">
          هنا مساحة هادئة لتبادل التجارب والنصائح والتخفيف عن بعضنا البعض. كل المنشورات تظهر بمعرّفات مشفرة لحماية خصوصيتك وكرامتك.
        </p>
      </div>
      <div>
        <button data-open-modal="newPostModal" class="btn btn-wellness btn-lg" style="white-space: nowrap;">
          فضفض للمجتمع
        </button>
      </div>
    </div>

    <!-- Posts Feed Container -->
    <div id="communityPostsContainer">
      
      <!-- Post 1 (From prompt specifications) -->
      <article class="post-card">
        <div class="post-header">
          <div class="user-anonymous-handle">
            <div class="avatar-mask-icon">
              <svg class="icon-svg" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            </div>
            <div>
              <span>مستخدم #4821</span>
              <span style="display: block; font-size: 0.76rem; color: var(--text-muted); font-weight: normal;">منذ ساعتين • المنطقة الغربية</span>
            </div>
          </div>
          <span class="badge badge-anonymous" style="font-size: 0.78rem;">ضغط دراسي</span>
        </div>

        <div class="post-body">
          الفترة الأخيرة كنت نمر بضغط كبير في الدراسة ومش قادر نركز، وحاس روحي مسبوق في كل المواد. هل حد مر بنفس الشي وكيف قدرتوا تتغلبوا على الشعور هذا؟
        </div>

        <div class="post-footer-actions">
          <button class="post-action-btn js-like-btn" data-count="18">
            <svg class="icon-svg" viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
            <span class="js-count">18</span> مساندة
          </button>

          <button class="post-action-btn js-toggle-comments">
            <svg class="icon-svg" viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
            <span>3 ردود داعمة</span>
          </button>

          <button class="post-action-btn js-report-btn" style="margin-right: auto;" title="إبلاغ آمن">
            <svg class="icon-svg" viewBox="0 0 24 24"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/><line x1="4" y1="22" x2="4" y2="15"/></svg>
            تبليغ
          </button>
        </div>

        <!-- Comments Container -->
        <div class="js-comments-list" style="margin-top: 18px; padding-top: 16px; border-top: 1px solid var(--border-light); display: flex; flex-direction: column; gap: 12px;">
          <div style="background-color: var(--bg-primary); padding: 12px 16px; border-radius: var(--radius-md); font-size: 0.92rem;">
            <strong style="color: var(--text-primary); display: block; margin-bottom: 2px;">مستخدم #1730:</strong>
            مررت بنفس التجربة الفصل اللي فات. اللي نفعني إني بطلت نقارن روحي بالثانين وبديت نذاكر نص ساعة ونرتاح 10 دقايق. ربي يوفقك.
          </div>
          <div style="background-color: var(--bg-primary); padding: 12px 16px; border-radius: var(--radius-md); font-size: 0.92rem;">
            <strong style="color: var(--text-primary); display: block; margin-bottom: 2px;">مستخدم #6024:</strong>
            حاول تقسم يومك، وماتقراش وأنت سهران للصبح لأن النوم هو الأساس باش الدماغ يثبت المعلومات. أتمنى تكون أفضل.
          </div>
          <div style="background-color: var(--bg-primary); padding: 12px 16px; border-radius: var(--radius-md); font-size: 0.92rem;">
            <strong style="color: var(--text-primary); display: block; margin-bottom: 2px;">مستخدم #3190:</strong>
            الضغط شعور جماعي يمر بيه الكل، متخليش الخوف يعطلك. خطوة صغيرة كل يوم وتلقى روحك كملت.
          </div>
        </div>
      </article>

      <!-- Post 2 -->
      <article class="post-card">
        <div class="post-header">
          <div class="user-anonymous-handle">
            <div class="avatar-mask-icon">
              <svg class="icon-svg" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            </div>
            <div>
              <span>مستخدم #7129</span>
              <span style="display: block; font-size: 0.76rem; color: var(--text-muted); font-weight: normal;">منذ 5 ساعات • المنطقة الشرقية</span>
            </div>
          </div>
          <span class="badge badge-anonymous" style="font-size: 0.78rem;">تحسين النوم</span>
        </div>

        <div class="post-body">
          نصيحة جربتها ونفعتني هلبا: تمرين التنفس اللي موجود في سَنَد ساعدني نوقف التفكير المفرط بالليل قبل ما نرقد. لو حد يعاني من الأرق يجربه بجدية.
        </div>

        <div class="post-footer-actions">
          <button class="post-action-btn js-like-btn" data-count="34">
            <svg class="icon-svg" viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
            <span class="js-count">34</span> مساندة
          </button>

          <button class="post-action-btn js-toggle-comments">
            <svg class="icon-svg" viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
            <span>تعليق واحد</span>
          </button>

          <button class="post-action-btn js-report-btn" style="margin-right: auto;" title="إبلاغ آمن">
            <svg class="icon-svg" viewBox="0 0 24 24"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/><line x1="4" y1="22" x2="4" y2="15"/></svg>
            تبليغ
          </button>
        </div>
      </article>

    </div>

    {{-- <!-- Continuity Card -->
    <div class="next-step-card" style="margin-top: 36px;">
      <div class="next-step-content">
        <span class="badge badge-wellness" style="margin-bottom: 8px;">مساحة دعم متكاملة</span>
        <h3>هل تحتاج لمتابعة فردية خاصة أو استشارة أخصائي؟</h3>
        <p>المجتمع وسيلة رائعة للتضامن، وإذا كنت تفضل مساحة شخصية أكثر خصوصية، يمكنك تجربة تمارين "المساعد اليومي" أو التحدث مع أخصائي نفسي مرخص.</p>
      </div>
      <div class="next-step-actions">
        <a href="personal-assistant.html" class="btn btn-primary">
          المساعد اليومي
          <svg class="icon-svg" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
        </a>
        <a href="specialists.html" class="btn btn-secondary">
          دليل المختصين
        </a>
      </div>
    </div> --}}
  </main>

  <!-- New Anonymous Post Modal -->
  <div class="modal-overlay" id="newPostModal">
    <div class="modal-window">
      <div class="modal-header">
        <h3 style="display: flex; align-items: center; gap: 8px;">
          <svg class="icon-svg" style="color: var(--primary-accent);" viewBox="0 0 24 24"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
          مشاركة تجربة مجهولة في مجتمع سَنَد
        </h3>
        <button class="modal-close-btn">&times;</button>
      </div>

      <div style="background-color: var(--wellness-green-soft); padding: 12px 16px; border-radius: var(--radius-md); font-size: 0.85rem; color: var(--wellness-green); margin-bottom: 16px;">
        ستُنشر هذه التدوينة تلقائيًا تحت اسمك الرمزي (<span class="js-user-id">مستخدم #4821</span>). لن تظهر أي بيانات تدل عليك.
      </div>

      <div style="margin-bottom: 16px;">
        <label style="display: block; font-weight: 600; font-size: 0.9rem; margin-bottom: 6px;">موضوع المشاركة:</label>
        <select style="width: 100%; padding: 10px; border-radius: var(--radius-md); border: 1px solid var(--border-medium); font-family: var(--font-family);">
          <option>ضغط دراسي وامتحانات</option>
          <option>قلق وتفكير بالمستقبل</option>
          <option>تحسين النوم والصحة</option>
          <option>تجربة نجاح في تجاوز أزمة</option>
          <option>فضفضة عامة</option>
        </select>
      </div>

      <div style="margin-bottom: 20px;">
        <label style="display: block; font-weight: 600; font-size: 0.9rem; margin-bottom: 6px;">اكتب ما يجول في خاطرك:</label>
        <textarea id="newPostText" style="width: 100%; height: 110px; border: 1px solid var(--border-medium); border-radius: var(--radius-md); padding: 12px; font-family: var(--font-family); font-size: 0.95rem;" placeholder="شارك سؤالك أو تجربتك ليتفاعل معها رفاقك في المجتمع..."></textarea>
      </div>

      <button id="submitPostBtn" class="btn btn-primary" style="width: 100%;">نشر التدوينة الآن</button>
    </div>
  </div>


  <script>
    // Like button toggle
    document.querySelectorAll('.js-like-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        let count = parseInt(btn.getAttribute('data-count'), 10);
        const countSpan = btn.querySelector('.js-count');
        if (btn.classList.contains('active-like')) {
          btn.classList.remove('active-like');
          count--;
        } else {
          btn.classList.add('active-like');
          count++;
          SanadApp.showToast('تم إرسال مشاعر المساندة والدعم.');
        }
        btn.setAttribute('data-count', count);
        countSpan.textContent = count;
      });
    });

    // Report button
    document.querySelectorAll('.js-report-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        SanadApp.showToast('تم استلام البلاغ، فريق أمان سَنَد يراجع المحتوى للحفاظ على سلامة المجتمع.', 'info');
      });
    });

    // Submit post
    document.getElementById('submitPostBtn').addEventListener('click', () => {
      const text = document.getElementById('newPostText').value.trim();
      if (!text) {
        SanadApp.showToast('يرجى كتابة نص المشاركة');
        return;
      }
      SanadApp.closeModal('newPostModal');
      SanadApp.showToast('تم نشر مشاركتك بنجاح كمستخدم مجهول.', 'success');
      document.getElementById('newPostText').value = '';
    });
  </script>
@endsection