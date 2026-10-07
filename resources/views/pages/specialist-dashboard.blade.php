<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>لوحة تحكم الأخصائي | سَنَد AI</title>
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<body style="background-color: var(--bg-primary);">

  <!-- Top Header for Dashboard -->
  <header class="main-header">
    <div class="container-fluid header-inner" style="padding-inline: 24px;">
      <a href="../index.html" class="brand-logo">
        <div class="brand-icon-wrapper" style="background: linear-gradient(135deg, var(--wellness-green), #3E5E47);">
          <svg class="icon-svg icon-lg" viewBox="0 0 24 24"><path d="M16 4h2a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/></svg>
        </div>
        <div>
          <span class="brand-title">سَنَد</span>
          <span class="brand-badge-ai">AI</span>
          <span class="brand-tag" style="background-color: var(--wellness-green-soft); color: var(--wellness-green); margin-right: 6px;">بوابة المختصين</span>
        </div>
      </a>

      <div class="header-actions">
        <a href="analytics.html" class="btn btn-secondary btn-sm">مرصد سَنَد</a>
        <a href="../index.html" class="btn btn-secondary btn-sm">واجهة المستخدم</a>
        <div style="display: flex; align-items: center; gap: 8px; border-right: 1px solid var(--border-medium); padding-right: 14px;">
          <div class="specialist-avatar-placeholder" style="width: 38px; height: 38px; font-size: 0.95rem; background-color: var(--primary-accent-soft); color: var(--primary-accent);">
            أ.م
          </div>
          <span style="font-weight: 700; font-size: 0.95rem;">د. أحمد محمد</span>
        </div>
      </div>
    </div>
  </header>

  <!-- Dashboard Layout -->
  <div class="dashboard-layout">
    
    <!-- Sidebar -->
    <aside class="dashboard-sidebar">
      <div class="sidebar-profile">
        <div class="specialist-avatar-placeholder" style="width: 48px; height: 48px; font-size: 1.1rem; background-color: var(--primary-accent-soft); color: var(--primary-accent);">
          أ.م
        </div>
        <div>
          <div style="font-weight: 700; font-size: 1rem;">د. أحمد محمد</div>
          <div style="font-size: 0.8rem; color: var(--text-muted);">أخصائي نفسي إكلينيكي</div>
          <span class="badge badge-online" style="font-size: 0.72rem; padding: 2px 6px; margin-top: 4px;">متاح للاستشارات</span>
        </div>
      </div>

      <nav class="sidebar-menu">
        <a href="specialist-dashboard.html" class="sidebar-link active">
          <svg class="icon-svg" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
          الرئيسية
        </a>
        <a href="specialist-dashboard.html" class="sidebar-link">
          <svg class="icon-svg" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
          الحالات المرصودة
        </a>
        <a href="case-details.html" class="sidebar-link">
          <svg class="icon-svg" viewBox="0 0 24 24"><path d="M16 4h2a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/></svg>
          تفاصيل حالة (#SN-1042)
        </a>
        <a href="specialists.html" class="sidebar-link">
          <svg class="icon-svg" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          الجلسات والمواعيد
        </a>
        <a href="analytics.html" class="sidebar-link">
          <svg class="icon-svg" viewBox="0 0 24 24"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
          مرصد سَنَد والإحصائيات
        </a>
        <a href="specialist-profile.html" class="sidebar-link">
          <svg class="icon-svg" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          الملف الشخصي
        </a>
      </nav>

      <div style="margin-top: auto; padding-top: 20px; border-top: 1px solid var(--border-light);">
        <a href="../index.html" class="btn btn-secondary btn-sm" style="width: 100%;">
          الخروج إلى الموقع العام
        </a>
      </div>
    </aside>

    <!-- Main Dashboard Body -->
    <main class="dashboard-main">
      
      <!-- Greeting Header -->
      <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 28px; flex-wrap: wrap; gap: 16px;">
        <div>
          <span style="font-size: 0.9rem; color: var(--text-muted);">بوابة الإشراف الإكلينيكي</span>
          <h1 style="font-size: 2.1rem; margin-top: 2px;">مرحبًا د. أحمد محمد</h1>
        </div>
        <div style="display: flex; gap: 10px;">
          <button class="btn btn-secondary btn-sm js-refresh-btn" onclick="SanadApp.showToast('تم تحديث قائمة الحالات الواردة')">
            <svg class="icon-svg" viewBox="0 0 24 24"><polyline points="23 4 23 10 17 10"/><path d="M20.49 15a9 9 0 11-2.12-9.36L23 10"/></svg>
            تحديث الحالات
          </button>
        </div>
      </div>

      <!-- Human in the Loop Workflow Banner (Critical Hackathon Requirement) -->
      <div class="hitl-banner">
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px;">
          <div>
            <span class="badge" style="background-color: var(--wellness-green); color: #FFFFFF; font-size: 0.8rem; margin-bottom: 6px;">
              منهجية الإشراف البشري (Human-in-the-Loop Architecture)
            </span>
            <h3 style="font-size: 1.25rem;">الذكاء الاصطناعي يساعد المختص، لكنه لا يتخذ القرار النهائي</h3>
            <p style="font-size: 0.9rem; color: var(--text-secondary); margin: 0;">
              يقوم نظام سَنَد برصد الكلمات المفتاحية ومستويات الإجهاد، وتقديم التوصية التمهيدية للأخصائي البشري فقط لتأكيدها أو تعديلها.
            </p>
          </div>
        </div>

        <div class="hitl-steps-row">
          <div class="hitl-step-item">
            <svg class="icon-svg" style="color: var(--primary-accent);" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            <span>1. تحليل سَنَد الذكي (AI Analysis)</span>
          </div>

          <div class="hitl-step-arrow">←</div>

          <div class="hitl-step-item">
            <svg class="icon-svg" style="color: var(--warm-gold);" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><line x1="16" y1="13" x2="8" y2="13"/></svg>
            <span>2. توصية الاحتياج التقديرية</span>
          </div>

          <div class="hitl-step-arrow">←</div>

          <div class="hitl-step-item active">
            <svg class="icon-svg" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
            <span>3. مراجعة المختص البشري</span>
          </div>

          <div class="hitl-step-arrow">←</div>

          <div class="hitl-step-item" style="border-color: var(--wellness-green-border);">
            <svg class="icon-svg" style="color: var(--wellness-green);" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            <span>4. القرار والتدخل الإكلينيكي النهائي</span>
          </div>
        </div>
      </div>

      <!-- Quick Stats Grid -->
      <div class="stats-grid">
        <div class="stat-card">
          <div style="font-size: 0.9rem; color: var(--text-muted);">الحالات الجديدة اليوم</div>
          <div class="stat-card-num">12</div>
          <span style="font-size: 0.8rem; color: var(--wellness-green);">+4 جلسات خلال آخر ساعتين</span>
        </div>

        <div class="stat-card">
          <div style="font-size: 0.9rem; color: var(--text-muted);">جلسات الاستشارة اليوم</div>
          <div class="stat-card-num">5</div>
          <span style="font-size: 0.8rem; color: var(--text-muted);">3 جلسات مكتملة، 2 قيد الانتظار</span>
        </div>

        <div class="stat-card">
          <div style="font-size: 0.9rem; color: var(--text-muted);">حالات تحتاج متابعة</div>
          <div class="stat-card-num" style="color: var(--warm-gold);">8</div>
          <span style="font-size: 0.8rem; color: var(--warm-gold);">مستوى احتياج متوسط</span>
        </div>

        <div class="stat-card">
          <div style="font-size: 0.9rem; color: var(--text-muted);">حالات عالية الأولوية</div>
          <div class="stat-card-num" style="color: var(--priority-high);">2</div>
          <span style="font-size: 0.8rem; color: var(--priority-high);">تتطلب اتصالاً فوريًا</span>
        </div>
      </div>

      <!-- Cases List Card -->
      <div class="cases-table-card">
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 14px; margin-bottom: 16px;">
          <div>
            <h2 style="font-size: 1.35rem; margin-bottom: 4px;">سجل الحالات الواردة (بيانات مجهّلة)</h2>
            <p style="font-size: 0.88rem; color: var(--text-muted); margin: 0;">
              تعرض الحالات بمعرّفات مشفرة مؤقتة طبقًا لمعايير الخصوصية.
            </p>
          </div>

          <div style="display: flex; gap: 8px;">
            <button class="btn btn-secondary btn-sm js-case-filter active" data-filter="all">الكل (5)</button>
            <button class="btn btn-secondary btn-sm js-case-filter" data-filter="high">أولوية عالية</button>
            <button class="btn btn-secondary btn-sm js-case-filter" data-filter="medium">تحتاج متابعة</button>
            <button class="btn btn-secondary btn-sm js-case-filter" data-filter="stable">مستقرة</button>
          </div>
        </div>

        <div class="table-responsive">
          <table class="cases-table">
            <thead>
              <tr>
                <th>معرّف الحالة (Case ID)</th>
                <th>مستوى الاحتياج</th>
                <th>آخر تواصل</th>
                <th>المؤشرات المرصودة</th>
                <th>حالة الملف</th>
                <th>الإجراء الموصى به</th>
              </tr>
            </thead>
            <tbody>
              <!-- Row 1: High Priority (Prompt Requirement) -->
              <tr data-priority="high">
                <td>
                  <strong style="color: var(--priority-high);">#SN-1057</strong>
                  <span style="display: block; font-size: 0.75rem; color: var(--text-muted);">جلسة صوتية • بنغازي</span>
                </td>
                <td>
                  <span class="badge badge-risk-high">مرتفع (أولوية عاجلة)</span>
                </td>
                <td>منذ 20 دقيقة</td>
                <td>
                  <span class="indicator-tag" style="border-color: #F0B8B2; color: var(--priority-high);">ضغط شديد</span>
                  <span class="indicator-tag" style="border-color: #F0B8B2; color: var(--priority-high);">هلع</span>
                </td>
                <td>
                  <span style="font-weight: 700; color: var(--priority-high);">أولوية عالية</span>
                </td>
                <td>
                  <div style="display: flex; gap: 6px;">
                    <a href="case-details.html?id=SN-1057" class="btn btn-wellness btn-sm">فتح الملف</a>
                    <button class="btn btn-secondary btn-sm js-request-session-btn">طلب تدخل</button>
                  </div>
                </td>
              </tr>

              <!-- Row 2: Medium Priority (Prompt Requirement) -->
              <tr data-priority="medium">
                <td>
                  <strong style="color: var(--text-primary);">#SN-1042</strong>
                  <span style="display: block; font-size: 0.75rem; color: var(--text-muted);">محادثة نصية • طرابلس</span>
                </td>
                <td>
                  <span class="badge badge-risk-medium">متوسط</span>
                </td>
                <td>منذ ساعتين</td>
                <td>
                  <span class="indicator-tag">ضغط دراسي</span>
                  <span class="indicator-tag">قلق</span>
                  <span class="indicator-tag">أرق</span>
                </td>
                <td>
                  <span style="font-weight: 600; color: var(--warm-gold);">تحتاج متابعة</span>
                </td>
                <td>
                  <div style="display: flex; gap: 6px;">
                    <a href="case-details.html?id=SN-1042" class="btn btn-secondary btn-sm">عرض الحالة</a>
                    <button class="btn btn-soft btn-sm js-confirm-decision">تأكيد التقييم</button>
                  </div>
                </td>
              </tr>

              <!-- Row 3: Medium Priority -->
              <tr data-priority="medium">
                <td>
                  <strong style="color: var(--text-primary);">#SN-1033</strong>
                  <span style="display: block; font-size: 0.75rem; color: var(--text-muted);">محادثة نصية • مصراتة</span>
                </td>
                <td>
                  <span class="badge badge-risk-medium">متوسط</span>
                </td>
                <td>منذ 4 ساعات</td>
                <td>
                  <span class="indicator-tag">إرهاق وظيفي</span>
                  <span class="indicator-tag">تشتت ذهني</span>
                </td>
                <td>
                  <span style="font-weight: 600; color: var(--warm-gold);">تحتاج متابعة</span>
                </td>
                <td>
                  <div style="display: flex; gap: 6px;">
                    <a href="case-details.html?id=SN-1033" class="btn btn-secondary btn-sm">عرض الحالة</a>
                    <button class="btn btn-soft btn-sm js-confirm-decision">تأكيد التقييم</button>
                  </div>
                </td>
              </tr>

              <!-- Row 4: Stable -->
              <tr data-priority="stable">
                <td>
                  <strong style="color: var(--text-primary);">#SN-1028</strong>
                  <span style="display: block; font-size: 0.75rem; color: var(--text-muted);">مساعد يومي • سبها</span>
                </td>
                <td>
                  <span class="badge badge-online">منخفض (مستقر)</span>
                </td>
                <td>أمس</td>
                <td>
                  <span class="indicator-tag">متابعة ذاتية</span>
                  <span class="indicator-tag">تمارين استرخاء</span>
                </td>
                <td>
                  <span style="font-weight: 600; color: var(--wellness-green);">مكتمل التوجيه</span>
                </td>
                <td>
                  <a href="case-details.html?id=SN-1028" class="btn btn-secondary btn-sm">سجل التمارين</a>
                </td>
              </tr>

              <!-- Row 5: Stable -->
              <tr data-priority="stable">
                <td>
                  <strong style="color: var(--text-primary);">#SN-1019</strong>
                  <span style="display: block; font-size: 0.75rem; color: var(--text-muted);">محادثة نصية • الزاوية</span>
                </td>
                <td>
                  <span class="badge badge-online">منخفض</span>
                </td>
                <td>منذ يومين</td>
                <td>
                  <span class="indicator-tag">استفسار عام</span>
                </td>
                <td>
                  <span style="font-weight: 600; color: var(--wellness-green);">مغلقة</span>
                </td>
                <td>
                  <a href="case-details.html?id=SN-1019" class="btn btn-secondary btn-sm">عرض السجل</a>
                </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </main>

  </div>

  <script src="{{asset('assets/js/app.js')}}"></script>
  <script src="{{asset('assets/js/dashboard.js')}}"></script>
</body>
</html>
