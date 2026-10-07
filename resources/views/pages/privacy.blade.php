@extends('layouts.app')

@section('content')


  <!-- Main Content -->
  <main class="container section-pad-sm">
    <div class="section-head">
      <span class="section-sub">الشفافية والأمان في صميم كل سطر برمجي</span>
      <h1 style="font-size: 2.3rem; margin-bottom: 12px;">خصوصيتك أولاً ودائمًا</h1>
      <p style="max-width: 680px; margin-inline: auto;">
        صممنا سَنَد AI ليكون الملاذ الأكثر أمانًا في ليبيا. الخصوصية هنا ليست مجرد إعداد إضافي، بل هي الأساس المعماري لكامل المنصة.
      </p>
    </div>

    <!-- 5 Privacy Architecture Cards -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; margin-bottom: 50px;">
      
      <!-- Card 1 -->
      <div class="card card-interactive">
        <div style="width: 48px; height: 48px; border-radius: var(--radius-sm); background-color: var(--wellness-green-soft); color: var(--wellness-green); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
          <svg class="icon-svg icon-lg" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
        </div>
        <h3 style="font-size: 1.15rem; margin-bottom: 8px;">مجهولية تامة (Anonymous by Design)</h3>
        <p style="font-size: 0.92rem; line-height: 1.65;">
          يمكنك استخدام سَنَد والتحدث بكامل راحتك دون أي حاجة للكشف عن اسمك أو رقمك أو بريدك، ودون تسجيل دخول.
        </p>
      </div>

      <!-- Card 2 -->
      <div class="card card-interactive">
        <div style="width: 48px; height: 48px; border-radius: var(--radius-sm); background-color: var(--primary-accent-soft); color: var(--primary-accent); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
          <svg class="icon-svg icon-lg" viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
        </div>
        <h3 style="font-size: 1.15rem; margin-bottom: 8px;">حماية البيانات (Data Protection)</h3>
        <p style="font-size: 0.92rem; line-height: 1.65;">
          نحافظ على بياناتك ونستخدم أقل قدر ممكن من المعلومات الفنية الضرورية لتشغيل الجلسة دون أي تتبع خارجي.
        </p>
      </div>

      <!-- Card 3 -->
      <div class="card card-interactive">
        <div style="width: 48px; height: 48px; border-radius: var(--radius-sm); background-color: var(--warm-gold-soft); color: var(--warm-gold); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
          <svg class="icon-svg icon-lg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z"/></svg>
        </div>
        <h3 style="font-size: 1.15rem; margin-bottom: 8px;">التحكم المطلق لك (Your Control)</h3>
        <p style="font-size: 0.92rem; line-height: 1.65;">
          أنت من يتحكم في مسار جلستك؛ يمكنك إنهاء المحادثة ومسح كل السجلات متى شئت بنقرة واحدة لا رجعة فيها.
        </p>
      </div>

      <!-- Card 4 -->
      <div class="card card-interactive">
        <div style="width: 48px; height: 48px; border-radius: var(--radius-sm); background-color: var(--bg-secondary); color: var(--text-primary); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
          <svg class="icon-svg icon-lg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"/></svg>
        </div>
        <h3 style="font-size: 1.15rem; margin-bottom: 8px;">لا تشخيص طبي (No Medical Diagnosis)</h3>
        <p style="font-size: 0.92rem; line-height: 1.65;">
          سَنَد أداة فهم ودعم ومرافقة، ولا يصدر تقارير طبية ولا يصف أدوية، ما يجنبك أي أحكام أو وسم سريري.
        </p>
      </div>

      <!-- Card 5 -->
      <div class="card card-interactive">
        <div style="width: 48px; height: 48px; border-radius: var(--radius-sm); background-color: var(--wellness-green-soft); color: var(--wellness-green); display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
          <svg class="icon-svg icon-lg" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
        </div>
        <h3 style="font-size: 1.15rem; margin-bottom: 8px;">إشراف بشري آمن (Human Support)</h3>
        <p style="font-size: 0.92rem; line-height: 1.65;">
          عند الحاجة لتدخل أعمق، يتم التحويل لمختص بشري مرخص مع الاحتفاظ الكامل بخصوصيتك وعدم كشف هويتك.
        </p>
      </div>
    </div>

    <!-- Privacy Interactive Control Center -->
    <div class="card card-beige" style="border-radius: var(--radius-xl); padding: 36px; max-width: 820px; margin-inline: auto;">
      <h2 style="font-size: 1.5rem; margin-bottom: 6px;">لوحة إعدادات الخصوصية والبيانات</h2>
      <p style="font-size: 0.95rem; color: var(--text-secondary); margin-bottom: 28px;">
        اختر كيفية تعامل المنصة مع بيانات جلستك الحالية:
      </p>

      <div style="display: flex; flex-direction: column; gap: 20px;">
        
        <!-- Setting 1: Anonymous Mode -->
        <div style="display: flex; justify-content: space-between; align-items: center; background-color: var(--bg-surface); padding: 18px 22px; border-radius: var(--radius-md); border: 1px solid var(--border-light);">
          <div>
            <div style="font-weight: 700; font-size: 1rem;">الجلسة المجهولة (Anonymous Mode)</div>
            <div style="font-size: 0.85rem; color: var(--text-muted);">عدم طلب أي معلومات تعريفية عن المستخدم</div>
          </div>
          <span class="badge badge-online">مفعّل دائمًا (ON)</span>
        </div>

        <!-- Setting 2: Save Chat History -->
        <div style="display: flex; justify-content: space-between; align-items: center; background-color: var(--bg-surface); padding: 18px 22px; border-radius: var(--radius-md); border: 1px solid var(--border-light);">
          <div>
            <div style="font-weight: 700; font-size: 1rem;">حفظ المحادثات محليًا في جهازك</div>
            <div style="font-size: 0.85rem; color: var(--text-muted);">لتمكينك من مراجعتها لاحقًا من نفس المتصفح</div>
          </div>
          <label style="display: flex; align-items: center; gap: 8px; cursor: pointer;">
            <input type="checkbox" id="toggleSaveHistory" style="width: 20px; height: 20px; accent-color: var(--primary-accent);">
            <span id="saveHistoryLabel" style="font-weight: 700; font-size: 0.9rem; color: var(--text-muted);">معطل (OFF)</span>
          </label>
        </div>

        <!-- Setting 3: Anonymized Analytics -->
        <div style="display: flex; justify-content: space-between; align-items: center; background-color: var(--bg-surface); padding: 18px 22px; border-radius: var(--radius-md); border: 1px solid var(--border-light);">
          <div>
            <div style="font-weight: 700; font-size: 1rem;">المساهمة في مرصد سَنَد (تحليل مجهّل ومجمّع)</div>
            <div style="font-size: 0.85rem; color: var(--text-muted);">للمساعدة في فهم مصادر الضغوط العامة بين الشباب دون أي تفاصيل شخصية</div>
          </div>
          <label style="display: flex; align-items: center; gap: 8px; cursor: pointer;">
            <input type="checkbox" id="toggleAnalytics" checked style="width: 20px; height: 20px; accent-color: var(--primary-accent);">
            <span id="analyticsLabel" style="font-weight: 700; font-size: 0.9rem; color: var(--wellness-green);">مفعّل (ON)</span>
          </label>
        </div>

      </div>

      <!-- Action Buttons -->
      <div style="display: flex; gap: 14px; margin-top: 32px; border-top: 1px solid var(--border-medium); padding-top: 24px; flex-wrap: wrap;">
        <button id="deleteAllDataBtn" class="btn btn-danger-soft btn-lg" style="flex: 1;">
          <svg class="icon-svg" viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/></svg>
          حذف كل بياناتي الآن
        </button>
        <a href="../index.html" class="btn btn-secondary btn-lg" style="flex: 1;">
          إنهاء الجلسة والعودة للرئيسية
        </a>
      </div>
    </div>
  </main>


  <script>
    // Toggle save history
    const toggleHistory = document.getElementById('toggleSaveHistory');
    const historyLabel = document.getElementById('saveHistoryLabel');
    toggleHistory.addEventListener('change', () => {
      if (toggleHistory.checked) {
        historyLabel.textContent = 'مفعّل (ON)';
        historyLabel.style.color = 'var(--wellness-green)';
        SanadApp.showToast('تم تفعيل حفظ المحادثة محليًا على هذا الجهاز فقط.');
      } else {
        historyLabel.textContent = 'معطل (OFF)';
        historyLabel.style.color = 'var(--text-muted)';
        SanadApp.showToast('تم تعطيل حفظ المحادثات.');
      }
    });

    // Toggle analytics
    const toggleAnalytics = document.getElementById('toggleAnalytics');
    const analyticsLabel = document.getElementById('analyticsLabel');
    toggleAnalytics.addEventListener('change', () => {
      if (toggleAnalytics.checked) {
        analyticsLabel.textContent = 'مفعّل (ON)';
        analyticsLabel.style.color = 'var(--wellness-green)';
        SanadApp.showToast('تم تفعيل المساهمة في الإحصائيات المجمعة.');
      } else {
        analyticsLabel.textContent = 'معطل (OFF)';
        analyticsLabel.style.color = 'var(--text-muted)';
        SanadApp.showToast('تم استبعاد بياناتك من الإحصائيات المجمعة.');
      }
    });

    // Delete all data
    document.getElementById('deleteAllDataBtn').addEventListener('click', () => {
      localStorage.clear();
      SanadApp.showToast('تم حذف كافة السجلات والبيانات المحلية بنجاح!', 'success');
      setTimeout(() => {
        window.location.href = '../index.html';
      }, 1400);
    });
  </script>
  
@endsection
