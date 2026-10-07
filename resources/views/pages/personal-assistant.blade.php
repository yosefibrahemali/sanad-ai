@extends('layouts.app')

@section('content')


  <!-- Main Content -->
  <main class="container section-pad-sm">
    
    <!-- Step Tracker Bar -->
    <div class="step-tracker-bar">
      <a href="anonymous-start.html" class="step-tracker-item completed">
        <span class="step-num">✓</span>
        <span>1. البداية المجهولة</span>
      </a>
      <span class="step-tracker-arrow">←</span>
      <a href="chat.html" class="step-tracker-item completed">
        <span class="step-num">✓</span>
        <span>2. محادثة سَنَد</span>
      </a>
      <span class="step-tracker-arrow">←</span>
      <a href="assessment.html" class="step-tracker-item completed">
        <span class="step-num">✓</span>
        <span>3. تقييم الاحتياج</span>
      </a>
      <span class="step-tracker-arrow">←</span>
      <div class="step-tracker-item active">
        <span class="step-num">4</span>
        <span>4. الدعم الذاتي اليومي</span>
      </div>
    </div>
    
    <!-- Daily Greeting & Mood Check Header -->
    <div class="assistant-header-card">
      <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 16px;">
        <div>
          <span class="badge badge-anonymous js-user-id" style="margin-bottom: 8px;">مستخدم #4821</span>
          <h1 style="font-size: 2.2rem; margin-bottom: 6px;">صباح الخير والراحة</h1>
          <p style="font-size: 1.1rem; color: var(--text-secondary);">كيف حالك اليوم؟ سَنَد هنا ليساعدك في ترتيب أفكارك وتخفيف يومك.</p>
        </div>

        <div style="background-color: var(--bg-surface); padding: 8px 18px; border-radius: var(--radius-full); border: 1px solid var(--border-light); font-size: 0.88rem; color: var(--text-muted);">
          جلسة اليوم: تفقد مستمر ومجهول
        </div>
      </div>

      <!-- Mood Selector -->
      <div style="margin-top: 28px;">
        <label style="display: block; font-weight: 700; font-size: 1rem; margin-bottom: 12px; color: var(--text-primary);">
          سجّل حالتك المزاجية الآن:
        </label>
        <div class="mood-selector">
          <button type="button" class="mood-btn js-mood-btn" data-mood="ممتاز" data-advice="يوم رائع ومشرق! استغل هذه الطاقة الإيجابية في إنجاز المهام المؤجلة، ولا تنسَ كتابة سبب امتنانك اليوم.">
            <svg class="icon-svg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
            ممتاز
          </button>

          <button type="button" class="mood-btn js-mood-btn" data-mood="جيد" data-advice="الحمد لله على هذا التوازن. حافظ على هذا الهدوء وخذ فترات راحة قصيرة بين مهامك اليومية.">
            <svg class="icon-svg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="8" y1="14" x2="16" y2="14"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
            جيد
          </button>

          <button type="button" class="mood-btn js-mood-btn active" data-mood="متوسط" data-advice="الحالة المتوسطة مقبولة وطبيعية تمامًا. ركّز على ما هو ضروري فقط اليوم، ولا تضغط على نفسك بالمثالية.">
            <svg class="icon-svg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="8" y1="15" x2="16" y2="15"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
            متوسط
          </button>

          <button type="button" class="mood-btn js-mood-btn" data-mood="متعب" data-advice="نفهم تعبك. عندما يكون الجسد والذهن منهكين، فإن الراحة ليست خيارًا ثانويًا بل ضرورة. جرب تمرين التنفس أو استراحة بدون شاشات.">
            <svg class="icon-svg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M16 16s-1.5-2-4-2-4 2-4 2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
            متعب
          </button>

          <button type="button" class="mood-btn js-mood-btn" data-mood="سيئ" data-advice="أنا هنا معك. الأيام الصعبة تمر، وطلبك للدعم دليل وعي وقوة. لو تحب، ادخل المحادثة وفضفض عن كل ما يضايقك بدون أي حرج.">
            <svg class="icon-svg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M16 16s-1.5-2-4-2-4 2-4 2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
            سيئ
          </button>
        </div>
      </div>
    </div>

    <!-- Daily Needs Section -->
    <div style="margin-bottom: 40px;">
      <h3 style="font-size: 1.35rem; margin-bottom: 6px;">ماذا تحتاج اليوم؟</h3>
      <p style="font-size: 0.95rem; color: var(--text-secondary);">اختر الجوانب التي ترغب في التركيز عليها لتخصيص محتواك اليومي:</p>

      <div class="daily-needs-grid">
        <div class="need-toggle-card selected">
          <svg class="icon-svg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 14 14"/></svg>
          <span>تنظيم يومك ومهامك</span>
        </div>

        <div class="need-toggle-card selected">
          <svg class="icon-svg" viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
          <span>تقليل التوتر والضغط</span>
        </div>

        <div class="need-toggle-card">
          <svg class="icon-svg" viewBox="0 0 24 24"><path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"/></svg>
          <span>تحسين جودة النوم</span>
        </div>

        <div class="need-toggle-card">
          <svg class="icon-svg" viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
          <span>التحدث مع أحد</span>
        </div>

        <div class="need-toggle-card">
          <svg class="icon-svg" viewBox="0 0 24 24"><path d="M12 2a10 10 0 0110 10c0 5.52-4.48 10-10 10S2 17.52 2 12A10 10 0 0112 2z"/></svg>
          <span>تمرين استرخاء موجه</span>
        </div>
      </div>
    </div>

    <!-- Sanad's Dynamic Daily Suggestion Card -->
    <div class="card card-soft-terracotta" style="margin-bottom: 40px; border-radius: var(--radius-xl); padding: 32px;">
      <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px; flex-wrap: wrap; gap: 10px;">
        <span class="badge" style="background-color: var(--primary-accent); color: #FFFFFF; font-size: 0.85rem;">
          اقتراح سَنَد المخصص لك اليوم
        </span>
        <span style="font-size: 0.85rem; color: var(--text-muted);">بناءً على حالتك المزاجية (متوسط)</span>
      </div>

      <h2 id="sanadDailyTitle" style="font-size: 1.5rem; margin-bottom: 12px; color: var(--text-primary);">
        تطبيق قاعدة "25 دقيقة تركيز + 5 دقائق تفريغ ذهني"
      </h2>

      <p id="sanadDailyText" style="font-size: 1.05rem; line-height: 1.7; color: var(--text-secondary); margin-bottom: 24px;">
        الحالة المتوسطة مقبولة وطبيعية تمامًا. ركّز على ما هو ضروري فقط اليوم، ولا تضغط على نفسك بالمثالية. قسّم وقت دراستك أو عملك إلى فترات مدتها 25 دقيقة فقط، تليها استراحة بدون أي هاتف أو شاشات.
      </p>

      <div style="display: flex; gap: 12px; flex-wrap: wrap;">
        <a href="chat.html" class="btn btn-primary">
          <svg class="icon-svg" viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
          ناقش هذا مع سَنَد في المحادثة
        </a>
        <a href="assessment.html" class="btn btn-secondary">
          عرض تمارين التنفس السريعة
        </a>
      </div>
    </div>

    <!-- Daily Reflection Section -->
    <div class="card" style="border-radius: var(--radius-xl);">
      <h3 style="font-size: 1.25rem; margin-bottom: 8px;">سجل ملاحظاتك الخاصة اليوم</h3>
      <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 16px;">
        مساحة حرة لك وحدك لتفريغ الأفكار. لا يتم إرسالها إلى أي خادم، بل تبقى في متصفحك مؤقتًا.
      </p>
      <textarea id="dailyJournalInput" style="width: 100%; height: 110px; background-color: var(--bg-primary); border: 1px solid var(--border-medium); border-radius: var(--radius-md); padding: 14px; font-family: var(--font-family); font-size: 0.98rem; outline: none; margin-bottom: 14px;" placeholder="شن الحاجة اللي مسببتلك ثقل اليوم أو حاجة حاب تدونها؟"></textarea>
      <div style="display: flex; justify-content: flex-end;">
        <button id="saveJournalBtn" class="btn btn-wellness btn-sm">حفظ الملاحظة محليًا</button>
      </div>
    </div>
  </main>

  <script>
    // Mood selection interactions
    const moodButtons = document.querySelectorAll('.js-mood-btn');
    const adviceText = document.getElementById('sanadDailyText');

    moodButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        moodButtons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const advice = btn.getAttribute('data-advice');
        if (adviceText && advice) {
          adviceText.textContent = advice;
        }
        SanadApp.showToast('تم تسجيل حالتك: ' + btn.getAttribute('data-mood'));
      });
    });

    // Needs selection toggle
    document.querySelectorAll('.need-toggle-card').forEach(card => {
      card.addEventListener('click', () => {
        card.classList.toggle('selected');
      });
    });

    // Save journal
    document.getElementById('saveJournalBtn').addEventListener('click', () => {
      const input = document.getElementById('dailyJournalInput');
      if (!input.value.trim()) {
        SanadApp.showToast('يرجى تدوين ملاحظتك أولاً');
        return;
      }
      SanadApp.showToast('تم حفظ ملاحظتك بأمان في جهازك فقط.', 'success');
      input.value = '';
    });
  </script>

  
@endsection
