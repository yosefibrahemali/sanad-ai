<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>تفاصيل الحالة #SN-1042 | بوابة المختصين | سَنَد AI</title>
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<body style="background-color: var(--bg-primary);">

  <!-- Dashboard Top Header -->
  <header class="main-header">
    <div class="container-fluid header-inner" style="padding-inline: 24px;">
      <a href="specialist-dashboard.html" class="brand-logo">
        <div class="brand-icon-wrapper" style="background: linear-gradient(135deg, var(--wellness-green), #3E5E47);">
          <svg class="icon-svg icon-lg" viewBox="0 0 24 24"><path d="M16 4h2a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/></svg>
        </div>
        <div>
          <span class="brand-title">سَنَد</span>
          <span class="brand-badge-ai">AI</span>
          <span class="brand-tag" style="background-color: var(--wellness-green-soft); color: var(--wellness-green); margin-right: 6px;">مراجعة الحالة</span>
        </div>
      </a>
      <div class="header-actions">
        <a href="specialist-dashboard.html" class="btn btn-secondary btn-sm">العودة لقائمة الحالات</a>
      </div>
    </div>
  </header>

  <!-- Dashboard Layout -->
  <div class="dashboard-layout">
    
    <!-- Sidebar -->
    <aside class="dashboard-sidebar">
      <nav class="sidebar-menu">
        <a href="specialist-dashboard.html" class="sidebar-link">
          <svg class="icon-svg" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
          لوحة التحكم
        </a>
        <a href="specialist-dashboard.html" class="sidebar-link active">
          <svg class="icon-svg" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
          الحالة #SN-1042
        </a>
        <a href="analytics.html" class="sidebar-link">
          <svg class="icon-svg" viewBox="0 0 24 24"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
          مرصد سَنَد
        </a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="dashboard-main">
      
      <!-- Case Header -->
      <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 24px; flex-wrap: wrap; gap: 16px;">
        <div>
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 6px;">
            <h1 style="font-size: 2rem;">ملف الحالة #SN-1042</h1>
            <span class="badge badge-anonymous">جلسة مجهولة بالكامل</span>
            <span class="badge badge-risk-medium js-decision-status">قيد مراجعة المختص</span>
          </div>
          <p style="font-size: 0.92rem; color: var(--text-muted); margin: 0;">
            تاريخ الجلسة: اليوم • الوسيلة: محادثة نصية • المنطقة المفترضة: طرابلس (اختياري)
          </p>
        </div>

        <div style="display: flex; gap: 10px;">
          <button class="btn btn-wellness btn-sm js-confirm-decision">
            <svg class="icon-svg" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
            تأكيد التقييم الحالي
          </button>
          <button class="btn btn-secondary btn-sm js-request-session-btn">
            <svg class="icon-svg" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
            طلب جلسة استشارية
          </button>
        </div>
      </div>

      <!-- Human in the loop Indicator Card -->
      <div style="background-color: var(--bg-surface); border: 1px solid var(--border-medium); border-radius: var(--radius-lg); padding: 18px 24px; margin-bottom: 24px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 14px;">
        <div style="display: flex; align-items: center; gap: 12px;">
          <div style="width: 40px; height: 40px; border-radius: 50%; background-color: var(--wellness-green-soft); color: var(--wellness-green); display: flex; align-items: center; justify-content: center;">
            <svg class="icon-svg" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          </div>
          <div>
            <strong style="font-size: 0.95rem;">مبدأ الإشراف البشري (Human-in-the-Loop):</strong>
            <p style="font-size: 0.85rem; color: var(--text-secondary); margin: 0;">
              المختص البشري يملك الصلاحية الكاملة لتأكيد أو تعديل أو تصعيد تقييم الذكاء الاصطناعي.
            </p>
          </div>
        </div>
        <div style="font-size: 0.85rem; color: var(--text-muted);">
          المشرف الإكلينيكي: د. أحمد محمد
        </div>
      </div>

      <div style="display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 24px; margin-bottom: 30px;">
        
        <!-- Column 1: AI Summary & Indicators & Decision Controls -->
        <div>
          <!-- AI Summary Card -->
          <div class="card" style="margin-bottom: 24px;">
            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 12px;">
              <svg class="icon-svg" style="color: var(--primary-accent);" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
              <h3 style="font-size: 1.15rem;">ملخص الذكاء الاصطناعي (AI Summary)</h3>
            </div>
            <p style="line-height: 1.7; font-size: 0.95rem; margin-bottom: 16px;">
              "المستخدم يذكر ضغطًا مستمرًا وصعوبة في التركيز نتيجة تراكم الامتحانات الجامعية، مصحوبًا بأرق وتفكير ليلي مفرط. لا توجد أي مؤشرات خطورة عاجلة أو رغبة في إيذاء النفس. الاستجابة كانت إيجابية لتمارين التنفس المبدئية."
            </p>

            <div style="border-top: 1px solid var(--border-light); padding-top: 14px;">
              <span style="font-size: 0.85rem; color: var(--text-muted); display: block; margin-bottom: 8px;">المؤشرات المستخلصة:</span>
              <div style="display: flex; flex-wrap: wrap; gap: 6px;">
                <span class="indicator-tag">ضغط نفسي</span>
                <span class="indicator-tag">قلق دراسي</span>
                <span class="indicator-tag">إرهاق ذهني</span>
                <span class="indicator-tag">مشاكل واضطراب نوم</span>
              </div>
            </div>
          </div>

          <!-- Sanad AI Assessment vs Human Decision -->
          <div class="card card-beige">
            <h3 style="font-size: 1.15rem; margin-bottom: 12px;">تقييم سَنَد التقديري</h3>
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px; background-color: var(--bg-surface); padding: 12px 18px; border-radius: var(--radius-md);">
              <span style="font-weight: 600;">مستوى الاحتياج المقترح:</span>
              <span class="badge badge-risk-medium" style="font-size: 0.9rem;">متوسط (يحتاج متابعة)</span>
            </div>
            <p style="font-size: 0.82rem; color: var(--text-muted); margin-bottom: 20px;">
              تنبيه: هذا تقييم مساعد أولي ناتج عن تحليل المحادثة، ولا يعتبر بديلاً عن الفحص الإكلينيكي.
            </p>

            <h4 style="font-size: 0.95rem; margin-bottom: 10px;">إجراءات المختص البشري:</h4>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
              <button class="btn btn-wellness btn-sm js-confirm-decision">تأكيد التقييم</button>
              <button class="btn btn-secondary btn-sm" onclick="SanadApp.showToast('تم فتح نافذة تعديل مستوى الاحتياج')">تعديل التقييم</button>
            </div>
          </div>

          <!-- Clinical Note Box -->
          <div class="card" style="margin-top: 24px;">
            <h3 style="font-size: 1.15rem; margin-bottom: 8px;">إضافة ملاحظة إكلينيكية (سجل مشفر)</h3>
            <textarea class="js-clinical-note-input" style="width: 100%; height: 85px; border: 1px solid var(--border-medium); border-radius: var(--radius-md); padding: 10px; font-family: var(--font-family); font-size: 0.9rem; margin-bottom: 10px;" placeholder="اكتب ملاحظاتك المهنية حول مسار الحالة..."></textarea>
            <div style="display: flex; justify-content: flex-end;">
              <button class="btn btn-primary btn-sm js-save-clinical-note">حفظ الملاحظة</button>
            </div>
          </div>
        </div>

        <!-- Column 2: Chat Conversation Timeline -->
        <div>
          <div class="card" style="height: 100%; display: flex; flex-direction: column;">
            <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid var(--border-light); padding-bottom: 12px; margin-bottom: 16px;">
              <h3 style="font-size: 1.15rem; display: flex; align-items: center; gap: 8px;">
                <svg class="icon-svg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                الخط الزمني للمحادثة المجهولة
              </h3>
              <span style="font-size: 0.78rem; color: var(--text-muted);">جلسة اليوم 10:14 ص</span>
            </div>

            <div style="display: flex; flex-direction: column; gap: 14px; overflow-y: auto; max-height: 520px; padding-left: 6px;">
              
              <!-- Message 1 -->
              <div style="background-color: var(--bg-primary); padding: 14px; border-radius: var(--radius-md); border-right: 3px solid var(--primary-accent);">
                <div style="display: flex; justify-content: space-between; font-size: 0.78rem; color: var(--text-muted); margin-bottom: 4px;">
                  <strong>سَنَد AI</strong>
                  <span>10:14 ص</span>
                </div>
                <p style="font-size: 0.9rem; margin: 0;">
                  "مرحبًا، أنا سَنَد. أنا هنا باش نسمعك بدون أحكام. شن أكثر حاجة شاغلة بالك اليوم؟"
                </p>
              </div>

              <!-- Message 2 -->
              <div style="background-color: var(--bg-surface-alt); padding: 14px; border-radius: var(--radius-md); border-right: 3px solid var(--text-muted);">
                <div style="display: flex; justify-content: space-between; font-size: 0.78rem; color: var(--text-muted); margin-bottom: 4px;">
                  <strong>المستخدم (#SN-1042)</strong>
                  <span>10:15 ص</span>
                </div>
                <p style="font-size: 0.9rem; margin: 0;">
                  "الفترة الأخيرة حاس روحي مضغوط واجد ومش قادر نركز في دراستي."
                </p>
              </div>

              <!-- Message 3 -->
              <div style="background-color: var(--bg-primary); padding: 14px; border-radius: var(--radius-md); border-right: 3px solid var(--primary-accent);">
                <div style="display: flex; justify-content: space-between; font-size: 0.78rem; color: var(--text-muted); margin-bottom: 4px;">
                  <strong>سَنَد AI</strong>
                  <span>10:15 ص</span>
                </div>
                <p style="font-size: 0.9rem; margin: 0;">
                  "نفهمك. الضغط المستمر ممكن يخلي التركيز أصعب. لو تحب، نحاولوا نفهموا مع بعض شن أكثر شيء مسبّبلك الضغط."
                </p>
              </div>

              <!-- Message 4 -->
              <div style="background-color: var(--bg-surface-alt); padding: 14px; border-radius: var(--radius-md); border-right: 3px solid var(--text-muted);">
                <div style="display: flex; justify-content: space-between; font-size: 0.78rem; color: var(--text-muted); margin-bottom: 4px;">
                  <strong>المستخدم (#SN-1042)</strong>
                  <span>10:16 ص</span>
                </div>
                <p style="font-size: 0.9rem; margin: 0;">
                  "امتحانات ومواد متراكمة، وحتى النوم مش عارف نرقد كويس، ديما نفكر شن بصير لو مجبتش درجات كويسة."
                </p>
              </div>

              <!-- Message 5 -->
              <div style="background-color: var(--bg-primary); padding: 14px; border-radius: var(--radius-md); border-right: 3px solid var(--primary-accent);">
                <div style="display: flex; justify-content: space-between; font-size: 0.78rem; color: var(--text-muted); margin-bottom: 4px;">
                  <strong>سَنَد AI</strong>
                  <span>10:17 ص</span>
                </div>
                <p style="font-size: 0.9rem; margin: 0;">
                  "القلق من النتيجة طبيعي، لكن الأرق يضاعف المشكلة. اقترحنا عليك تمرين تنفس مهدئ وتقسيم المهام لدفعات 25 دقيقة. وحولناك لتقييم الاحتياج الكامل."
                </p>
              </div>

            </div>
          </div>
        </div>

      </div>
    </main>

  </div>

  <script src="{{asset('assets/js/app.js')}}"></script>
  <script src="{{asset('assets/js/dashboard.js')}}"></script>
</body>
</html>
