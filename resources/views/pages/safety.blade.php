@extends('layouts.app')

@section('content')


  <!-- Main Content -->
  <main class="container container-narrow section-pad-sm" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: center;">
    
    <!-- Safety Calm Banner -->
    <div class="card card-soft-green" style="border-radius: var(--radius-xl); padding: 36px; text-align: center; margin-bottom: 30px;">
      <div style="width: 64px; height: 64px; border-radius: 50%; background-color: var(--wellness-green); color: #FFFFFF; display: flex; align-items: center; justify-content: center; margin-inline: auto; margin-bottom: 20px;">
        <svg class="icon-svg icon-xl" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
      </div>

      <h1 style="font-size: 2.1rem; margin-bottom: 12px; color: var(--text-primary);">
        يبدو أن ما تمر به يحتاج إلى دعم بشري مباشر
      </h1>

      <p style="font-size: 1.12rem; line-height: 1.8; color: var(--text-secondary); max-width: 620px; margin-inline: auto; margin-bottom: 28px;">
        من الأفضل أن تتحدث الآن مع مختص نفسي أو شخص قريب تثق به. سلامتك وأمانك هما الأولوية القصوى، وأنت لست وحدك في هذا الظرف.
      </p>

      <div style="display: flex; gap: 14px; justify-content: center; flex-wrap: wrap;">
        <a href="specialists.html" class="btn btn-wellness btn-lg">
          <svg class="icon-svg" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
          التواصل المباشر مع مختص نفسي
        </a>
        <button data-open-modal="supportHelplineModal" class="btn btn-secondary btn-lg">
          <svg class="icon-svg" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
          أرقام الدعم والإرشاد الفوري
        </button>
      </div>
    </div>

    <!-- Calm Breathing Box -->
    <div class="card" style="border-radius: var(--radius-xl); padding: 30px; margin-bottom: 30px;">
      <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
        <div>
          <h3 style="font-size: 1.25rem; margin-bottom: 6px;">هل تشعر بتسارع النبض أو الاختناق؟</h3>
          <p style="font-size: 0.95rem; color: var(--text-secondary); margin: 0;">
            توقف لثوانٍ معدودة، خذ نفسًا عميقًا من بطنك بهدوء، وأفرغه ببطء شديد.
          </p>
        </div>
        <button data-open-modal="breathingModal" class="btn btn-wellness btn-sm">
          تفعيل موجه التنفس الآن
        </button>
      </div>
    </div>

    <!-- Practical Actions Cards -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px;">
      
      <!-- Action 1 -->
      <div class="card">
        <h4 style="font-size: 1.1rem; margin-bottom: 8px;">1. تحدث مع شخص تثق به</h4>
        <p style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.6;">
          صديق مقرب، أحد أفراد العائلة، أو شخص تشعر بالارتياح لصوته. مجرد التواجد بقرب شخص مخلص يخفف الكثير من حدة المشاعر.
        </p>
      </div>

      <!-- Action 2 -->
      <div class="card">
        <h4 style="font-size: 1.1rem; margin-bottom: 8px;">2. غيّر مكان جلوسك</h4>
        <p style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.6;">
          اشرب كوب ماء بارد، اغسل وجهك، أو اخرج إلى الهواء الطلق لبضع دقائق لكسر حلقة التفكير الضاغط.
        </p>
      </div>

      <!-- Action 3 -->
      <div class="card">
        <h4 style="font-size: 1.1rem; margin-bottom: 8px;">3. سَنَد مستمر معك</h4>
        <p style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.6;">
          يمكنك العودة للمحادثة في أي لحظة لمواصلة التحدث، أو إغلاق الجلسة عندما تشعر برغبة في الراحة التامة.
        </p>
      </div>

    </div>

    <div style="text-align: center; margin-top: 36px;">
      <a href="chat.html" class="btn btn-secondary">
        العودة إلى محادثة سَنَد
      </a>
      <a href="../index.html" class="btn btn-secondary" style="margin-right: 12px;">
        إغلاق الجلسة بأمان
      </a>
    </div>

  </main>

  <!-- Helpline Modal -->
  <div class="modal-overlay" id="supportHelplineModal">
    <div class="modal-window">
      <div class="modal-header">
        <h3 style="display: flex; align-items: center; gap: 8px;">
          <svg class="icon-svg" style="color: var(--wellness-green);" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
          قنوات الإرشاد والدعم في ليبيا
        </h3>
        <button class="modal-close-btn">&times;</button>
      </div>

      <p style="font-size: 0.9rem; color: var(--text-secondary); margin-bottom: 20px;">
        دليل إرشادي استرشادي للخطوط والمراكز المجتمعية المساندة في ليبيا:
      </p>

      <div style="display: flex; flex-direction: column; gap: 14px; margin-bottom: 24px;">
        <div style="background-color: var(--bg-primary); padding: 14px; border-radius: var(--radius-md); border: 1px solid var(--border-light);">
          <strong style="display: block; font-size: 0.98rem; margin-bottom: 2px;">خط الدعم والإرشاد النفسي الوطني (استرشادي)</strong>
          <span style="font-size: 0.85rem; color: var(--text-muted);">متاح على مدار الساعة للمشورة المجانية: 1414</span>
        </div>
        <div style="background-color: var(--bg-primary); padding: 14px; border-radius: var(--radius-md); border: 1px solid var(--border-light);">
          <strong style="display: block; font-size: 0.98rem; margin-bottom: 2px;">الهلال الأحمر الليبي - الإسناد والدعم النفسي الاجتماعي</strong>
          <span style="font-size: 0.85rem; color: var(--text-muted);">فرق الدعم الميداني في طرابلس، بنغازي، مصراتة والجنوب</span>
        </div>
        <div style="background-color: var(--bg-primary); padding: 14px; border-radius: var(--radius-md); border: 1px solid var(--border-light);">
          <strong style="display: block; font-size: 0.98rem; margin-bottom: 2px;">طوارئ الإسعاف الطبي الوطني</strong>
          <span style="font-size: 0.85rem; color: var(--text-muted);">في حالات الطوارئ الصحية الجسدية الحرجة: 191</span>
        </div>
      </div>

      <button class="btn btn-secondary modal-close-btn" style="width: 100%;">إغلاق</button>
    </div>
  </div>

  <!-- Interactive Breathing Modal -->
  <div class="modal-overlay" id="breathingModal">
    <div class="modal-window" style="text-align: center;">
      <div class="modal-header">
        <h3>تمرين التنفس الهادئ</h3>
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
      </div>
      <button class="btn btn-secondary modal-close-btn" style="width: 100%;">إنهاء التمرين</button>
    </div>
  </div>

@endsection
