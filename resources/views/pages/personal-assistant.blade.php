
@extends('layouts.app')

@section('content')

<style>
/* =========================================================
   SANAD AI — PERSONAL HELPER
========================================================= */

body {
    background: var(--bg-secondary, #f7f8fa);
}

.sanad-helper {
    width: min(1120px, calc(100% - 32px));
    margin: 0 auto;
    padding: 28px 0 60px;
}

/* =========================================================
   HERO
========================================================= */

.sanad-hero {
    position: relative;
    overflow: hidden;
    background: var(--bg-surface, #fff);
    border: 1px solid var(--border-light, #e5e7eb);
    border-radius: 30px;
    padding: 38px;
    margin-bottom: 22px;
}

.sanad-hero::before {
    content: "";
    position: absolute;
    width: 360px;
    height: 360px;
    border-radius: 50%;
    background: rgba(97, 33, 125, .055);
    top: -230px;
    left: -130px;
}

.sanad-hero::after {
    content: "";
    position: absolute;
    width: 180px;
    height: 180px;
    border-radius: 50%;
    background: rgba(97, 33, 125, .035);
    bottom: -120px;
    right: -50px;
}

.sanad-hero-content {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 35px;
}

.sanad-welcome {
    flex: 1;
}

.sanad-brand-line {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    color: var(--primary-accent, #61217d);
    font-size: .85rem;
    font-weight: 700;
    margin-bottom: 12px;
}

.sanad-brand-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: var(--primary-accent, #61217d);
    box-shadow: 0 0 0 5px rgba(97, 33, 125, .08);
}

.sanad-hero h1 {
    margin: 0 0 10px;
    font-size: clamp(1.8rem, 4vw, 2.5rem);
    line-height: 1.35;
    color: var(--text-primary, #111827);
}

.sanad-hero p {
    max-width: 680px;
    margin: 0;
    color: var(--text-secondary, #64748b);
    line-height: 1.9;
    font-size: 1rem;
}

.sanad-avatar {
    width: 96px;
    height: 96px;
    flex-shrink: 0;
    border-radius: 28px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary-accent, #61217d);
    background: linear-gradient(
        145deg,
        rgba(97, 33, 125, .13),
        rgba(97, 33, 125, .035)
    );
    border: 1px solid rgba(97, 33, 125, .13);
}

.sanad-avatar svg {
    width: 43px;
    height: 43px;
    fill: none;
    stroke: currentColor;
    stroke-width: 1.6;
    stroke-linecap: round;
    stroke-linejoin: round;
}

/* =========================================================
   COMMON SECTION
========================================================= */

.sanad-section {
    background: var(--bg-surface, #fff);
    border: 1px solid var(--border-light, #e5e7eb);
    border-radius: 25px;
    padding: 27px;
    margin-bottom: 22px;
}

.section-heading {
    margin-bottom: 19px;
}

.section-heading h2 {
    margin: 0 0 5px;
    color: var(--text-primary, #111827);
    font-size: 1.18rem;
}

.section-heading p {
    margin: 0;
    color: var(--text-muted, #94a3b8);
    font-size: .88rem;
    line-height: 1.7;
}

/* =========================================================
   MOOD
========================================================= */

.mood-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 10px;
}

.mood-btn {
    appearance: none;
    border: 1px solid var(--border-light, #e5e7eb);
    background: var(--bg-primary, #f8fafc);
    border-radius: 17px;
    min-height: 88px;
    padding: 12px 8px;
    cursor: pointer;
    color: var(--text-secondary, #64748b);
    font-family: inherit;

    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 7px;

    transition:
        transform .2s ease,
        border-color .2s ease,
        background .2s ease,
        box-shadow .2s ease;
}

.mood-btn:hover {
    transform: translateY(-2px);
    border-color: rgba(97,33,125,.25);
}

.mood-btn.active {
    color: var(--primary-accent, #61217d);
    background: rgba(97,33,125,.07);
    border-color: var(--primary-accent, #61217d);
    box-shadow: 0 7px 22px rgba(97,33,125,.08);
}

.mood-btn svg {
    width: 27px;
    height: 27px;
    fill: none;
    stroke: currentColor;
    stroke-width: 1.6;
    stroke-linecap: round;
    stroke-linejoin: round;
}

.mood-btn span {
    font-size: .85rem;
    font-weight: 600;
}

/* =========================================================
   QUICK ACTIONS
========================================================= */

.quick-actions {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 12px;
}

.quick-action {
    appearance: none;
    width: 100%;
    text-align: right;
    font-family: inherit;
    text-decoration: none;
    border: 1px solid var(--border-light, #e5e7eb);
    background: var(--bg-primary, #f8fafc);
    border-radius: 19px;
    padding: 19px 17px;
    color: var(--text-primary, #111827);
    cursor: pointer;
    transition: all .2s ease;
}

.quick-action:hover {
    transform: translateY(-2px);
    border-color: rgba(97,33,125,.25);
    box-shadow: 0 8px 25px rgba(15,23,42,.05);
}

.quick-icon {
    width: 43px;
    height: 43px;
    border-radius: 13px;
    background: rgba(97,33,125,.08);
    color: var(--primary-accent, #61217d);

    display: flex;
    align-items: center;
    justify-content: center;

    margin-bottom: 13px;
}

.quick-icon svg {
    width: 21px;
    height: 21px;
    fill: none;
    stroke: currentColor;
    stroke-width: 1.7;
    stroke-linecap: round;
    stroke-linejoin: round;
}

.quick-action strong {
    display: block;
    margin-bottom: 5px;
    font-size: .92rem;
}

.quick-action small {
    display: block;
    color: var(--text-muted, #94a3b8);
    font-size: .77rem;
    line-height: 1.55;
}

/* =========================================================
   SMART SUGGESTION
========================================================= */

.sanad-recommendation {
    position: relative;
    overflow: hidden;
    border-radius: 25px;
    padding: 29px;
    margin-bottom: 22px;

    background:
        linear-gradient(
            135deg,
            rgba(97,33,125,.09),
            rgba(97,33,125,.025)
        );

    border: 1px solid rgba(97,33,125,.13);
}

.recommendation-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
    margin-bottom: 15px;
}

.recommendation-label {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    color: var(--primary-accent, #61217d);
    font-size: .82rem;
    font-weight: 700;
}

.recommendation-label::before {
    content: "";
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: currentColor;
}

.recommendation-state {
    color: var(--text-muted, #94a3b8);
    font-size: .78rem;
}

.sanad-recommendation h2 {
    margin: 0 0 9px;
    color: var(--text-primary, #111827);
    font-size: 1.35rem;
    line-height: 1.5;
}

.sanad-recommendation p {
    max-width: 800px;
    margin: 0 0 21px;
    color: var(--text-secondary, #64748b);
    line-height: 1.85;
}

.recommendation-actions {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

/* =========================================================
   PERSONAL NOTE
========================================================= */

.journal-card {
    background: var(--bg-surface, #fff);
    border: 1px solid var(--border-light, #e5e7eb);
    border-radius: 25px;
    padding: 27px;
}

.journal-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 15px;
    margin-bottom: 15px;
}

.journal-header h2 {
    margin: 0 0 5px;
    font-size: 1.12rem;
}

.journal-header p {
    margin: 0;
    color: var(--text-muted, #94a3b8);
    font-size: .85rem;
    line-height: 1.65;
}

.private-label {
    white-space: nowrap;
    padding: 6px 10px;
    border-radius: 999px;
    border: 1px solid var(--border-light, #e5e7eb);
    background: var(--bg-primary, #f8fafc);
    color: var(--text-muted, #94a3b8);
    font-size: .73rem;
}

.journal-input {
    width: 100%;
    min-height: 115px;
    box-sizing: border-box;
    resize: vertical;

    background: var(--bg-primary, #f8fafc);
    border: 1px solid var(--border-medium, #d1d5db);
    border-radius: 16px;

    padding: 14px 16px;

    font-family: inherit;
    font-size: .92rem;
    line-height: 1.75;
    color: var(--text-primary, #111827);

    outline: none;

    transition:
        border-color .2s ease,
        box-shadow .2s ease;
}

.journal-input:focus {
    border-color: rgba(97,33,125,.4);
    box-shadow: 0 0 0 4px rgba(97,33,125,.06);
}

.journal-footer {
    display: flex;
    justify-content: flex-end;
    margin-top: 11px;
}

/* =========================================================
   MODAL
========================================================= */

.sanad-modal {
    position: fixed;
    inset: 0;
    z-index: 9999;

    display: none;
    align-items: center;
    justify-content: center;

    padding: 20px;

    background: rgba(15,23,42,.42);
    backdrop-filter: blur(8px);
}

.sanad-modal.show {
    display: flex;
}

.sanad-modal-box {
    width: min(560px, 100%);
    max-height: min(700px, calc(100vh - 40px));
    overflow-y: auto;

    background: var(--bg-surface, #fff);
    border: 1px solid var(--border-light, #e5e7eb);
    border-radius: 26px;

    padding: 27px;

    box-shadow: 0 25px 70px rgba(15,23,42,.18);

    animation: sanadModalIn .22s ease;
}

@keyframes sanadModalIn {
    from {
        opacity: 0;
        transform: translateY(10px) scale(.98);
    }

    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

.modal-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 15px;
    margin-bottom: 22px;
}

.modal-header h2 {
    margin: 0 0 5px;
    font-size: 1.3rem;
}

.modal-header p {
    margin: 0;
    color: var(--text-muted, #94a3b8);
    font-size: .85rem;
    line-height: 1.6;
}

.modal-close {
    width: 36px;
    height: 36px;
    border-radius: 11px;
    border: 1px solid var(--border-light, #e5e7eb);
    background: var(--bg-primary, #f8fafc);
    color: var(--text-secondary, #64748b);
    cursor: pointer;

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 18px;
}

.modal-close:hover {
    color: var(--text-primary, #111827);
}

/* =========================================================
   BREATHING
========================================================= */

.breathing-area {
    text-align: center;
    padding: 10px 0 5px;
}

.breath-circle {
    width: 165px;
    height: 165px;
    margin: 0 auto 22px;

    border-radius: 50%;

    background: rgba(97,33,125,.08);
    border: 1px solid rgba(97,33,125,.16);

    display: flex;
    align-items: center;
    justify-content: center;

    color: var(--primary-accent, #61217d);

    transition: transform 4s ease-in-out;
}

.breath-circle.active {
    animation: breathing 8s ease-in-out infinite;
}

@keyframes breathing {
    0%,
    100% {
        transform: scale(.78);
    }

    50% {
        transform: scale(1);
    }
}

.breath-circle span {
    font-size: 1.05rem;
    font-weight: 700;
}

.breath-status {
    color: var(--text-secondary, #64748b);
    margin-bottom: 18px;
}

/* =========================================================
   SLEEP
========================================================= */

.sleep-list {
    display: grid;
    gap: 10px;
}

.sleep-item {
    display: flex;
    gap: 13px;
    align-items: flex-start;

    padding: 14px;

    border: 1px solid var(--border-light, #e5e7eb);
    border-radius: 15px;

    background: var(--bg-primary, #f8fafc);
}

.sleep-number {
    width: 29px;
    height: 29px;
    flex-shrink: 0;

    border-radius: 9px;

    background: rgba(97,33,125,.09);
    color: var(--primary-accent, #61217d);

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: .78rem;
    font-weight: 700;
}

.sleep-item strong {
    display: block;
    margin-bottom: 3px;
    font-size: .9rem;
}

.sleep-item span {
    color: var(--text-muted, #94a3b8);
    font-size: .79rem;
    line-height: 1.6;
}

/* =========================================================
   SPECIALISTS
========================================================= */

.specialist-list {
    display: grid;
    gap: 10px;
}

.specialist-card {
    display: flex;
    align-items: center;
    gap: 13px;

    padding: 14px;

    border: 1px solid var(--border-light, #e5e7eb);
    border-radius: 17px;

    background: var(--bg-primary, #f8fafc);
}

.specialist-avatar {
    width: 45px;
    height: 45px;
    flex-shrink: 0;

    border-radius: 14px;

    background: rgba(97,33,125,.08);
    color: var(--primary-accent, #61217d);

    display: flex;
    align-items: center;
    justify-content: center;
}

.specialist-info {
    flex: 1;
}

.specialist-info strong {
    display: block;
    margin-bottom: 3px;
    font-size: .9rem;
}

.specialist-info span {
    color: var(--text-muted, #94a3b8);
    font-size: .77rem;
}

/* =========================================================
   MODAL ACTION
========================================================= */

.modal-footer {
    display: flex;
    justify-content: flex-end;
    gap: 9px;
    margin-top: 22px;
}

/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 900px) {

    .mood-grid {
        grid-template-columns: repeat(3, 1fr);
    }

    .quick-actions {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 600px) {

    .sanad-helper {
        width: calc(100% - 20px);
        padding: 15px 0 35px;
    }

    .sanad-hero,
    .sanad-section,
    .sanad-recommendation,
    .journal-card {
        border-radius: 20px;
        padding: 20px;
    }

    .sanad-hero-content {
        flex-direction: column-reverse;
        align-items: flex-start;
    }

    .sanad-avatar {
        width: 65px;
        height: 65px;
        border-radius: 19px;
    }

    .sanad-avatar svg {
        width: 31px;
        height: 31px;
    }

    .mood-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .quick-actions {
        grid-template-columns: 1fr 1fr;
    }

    .recommendation-top {
        flex-direction: column;
        align-items: flex-start;
        gap: 6px;
    }

    .recommendation-actions {
        flex-direction: column;
    }

    .recommendation-actions .btn {
        width: 100%;
        justify-content: center;
    }

    .journal-header {
        flex-direction: column;
    }

    .private-label {
        align-self: flex-start;
    }

    .modal-footer {
        flex-direction: column;
    }

    .modal-footer .btn {
        width: 100%;
        justify-content: center;
    }
}
</style>


<main class="sanad-helper">

    {{-- =====================================================
         HERO
    ====================================================== --}}

    <section class="sanad-hero">

        <div class="sanad-hero-content">

            <div class="sanad-welcome">

                <div class="sanad-brand-line">
                    <span class="sanad-brand-dot"></span>
                    مساعدك الشخصي في سَنَد
                </div>

                <h1>
                    أنا سَنَد، كيف أساعدك اليوم؟
                </h1>

                <p>
                    لست بحاجة إلى المرور بخطوات كثيرة.
                    أخبرني فقط كيف تشعر أو ما الذي تحتاجه،
                    وسأساعدك في اختيار ما يناسبك الآن.
                </p>

            </div>


            <div class="sanad-avatar">

                <svg viewBox="0 0 24 24">
                    <path d="M12 3a8 8 0 0 0-8 8v4a3 3 0 0 0 3 3h1v-6H6a6 6 0 0 1 12 0h-2v6h1a3 3 0 0 0 3-3v-4a8 8 0 0 0-8-8z"/>
                    <path d="M8 18c.8 1.8 2.2 3 4 3s3.2-1.2 4-3"/>
                </svg>

            </div>

        </div>

    </section>


    {{-- =====================================================
         MOOD
    ====================================================== --}}

    <section class="sanad-section">

        <div class="section-heading">

            <h2>
                كيف تشعر الآن؟
            </h2>

            <p>
                اختر الحالة الأقرب إليك، وسأخصص لك اقتراحي.
            </p>

        </div>


        <div class="mood-grid">

            <button
                type="button"
                class="mood-btn js-mood active"
                data-mood="متوسط"
                data-title="خذ يومك بهدوء"
                data-advice="ليس من الضروري أن تكون في أفضل حال طوال الوقت. ركّز اليوم على ما تحتاجه فعلًا واترك مساحة صغيرة للراحة."
            >
                <svg viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10"/>
                    <line x1="8" y1="15" x2="16" y2="15"/>
                    <circle cx="9" cy="9" r=".4"/>
                    <circle cx="15" cy="9" r=".4"/>
                </svg>
                <span>متوسط</span>
            </button>


            <button
                type="button"
                class="mood-btn js-mood"
                data-mood="جيد"
                data-title="استمر بهذا التوازن"
                data-advice="يبدو أن الأمور تسير بشكل جيد. حاول الحفاظ على هذا التوازن ولا تضغط على نفسك بمهام كثيرة في وقت واحد."
            >
                <svg viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10"/>
                    <line x1="8" y1="14" x2="16" y2="14"/>
                    <circle cx="9" cy="9" r=".4"/>
                    <circle cx="15" cy="9" r=".4"/>
                </svg>
                <span>جيد</span>
            </button>


            <button
                type="button"
                class="mood-btn js-mood"
                data-mood="ممتاز"
                data-title="حافظ على هذه الطاقة"
                data-advice="رائع. استغل هذه الطاقة في شيء مهم بالنسبة لك، واحرص في الوقت نفسه على إعطاء نفسك مساحة للراحة."
            >
                <svg viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10"/>
                    <path d="M8 14s1.5 2 4 2 4-2 4-2"/>
                    <circle cx="9" cy="9" r=".4"/>
                    <circle cx="15" cy="9" r=".4"/>
                </svg>
                <span>ممتاز</span>
            </button>


            <button
                type="button"
                class="mood-btn js-mood"
                data-mood="متعب"
                data-title="ربما تحتاج إلى استراحة"
                data-advice="إذا كان يومك مرهقًا، فلا بأس أن تخفف من سرعتك قليلًا. خذ دقائق بسيطة لنفسك وجرب تمرين تنفس هادئ."
            >
                <svg viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10"/>
                    <path d="M8 16s1.5-2 4-2 4 2 4 2"/>
                    <circle cx="9" cy="9" r=".4"/>
                    <circle cx="15" cy="9" r=".4"/>
                </svg>
                <span>متعب</span>
            </button>


            <button
                type="button"
                class="mood-btn js-mood"
                data-mood="سيئ"
                data-title="أنا هنا للاستماع"
                data-advice="يبدو أن اليوم ليس سهلًا عليك. يمكنك التحدث معي بهدوء، وإذا شعرت أنك بحاجة إلى مساعدة متخصصة يمكنني مساعدتك في الوصول إليها."
            >
                <svg viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10"/>
                    <path d="M8 16s1.5-2 4-2 4 2 4 2"/>
                    <circle cx="9" cy="9" r=".4"/>
                    <circle cx="15" cy="9" r=".4"/>
                </svg>
                <span>سيئ</span>
            </button>

        </div>

    </section>


    {{-- =====================================================
         QUICK ACTIONS
    ====================================================== --}}

    <section class="sanad-section">

        <div class="section-heading">

            <h2>
                ماذا تحتاج الآن؟
            </h2>

            <p>
                كل ما تحتاجه متاح لك من هنا.
            </p>

        </div>


        <div class="quick-actions">


            {{-- CHAT --}}
            <a
                href="{{ url('/pages/personal-assistant.html') }}"
                class="quick-action"
            >

                <div class="quick-icon">

                    <svg viewBox="0 0 24 24">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                    </svg>

                </div>

                <strong>
                    أريد أن أتحدث
                </strong>

                <small>
                    ابدأ محادثة خاصة مع سَنَد
                </small>

            </a>


            {{-- BREATHING --}}
            <button
                type="button"
                class="quick-action js-open-modal"
                data-modal="breathingModal"
            >

                <div class="quick-icon">

                    <svg viewBox="0 0 24 24">
                        <path d="M12 3v18"/>
                        <path d="M5 8c2 0 4 1 7 4"/>
                        <path d="M19 8c-2 0-4 1-7 4"/>
                        <path d="M5 16c2 0 4-1 7-4"/>
                        <path d="M19 16c-2 0-4-1-7-4"/>
                    </svg>

                </div>

                <strong>
                    أحتاج إلى الهدوء
                </strong>

                <small>
                    تمرين تنفس بسيط الآن
                </small>

            </button>


            {{-- SLEEP --}}
            <button
                type="button"
                class="quick-action js-open-modal"
                data-modal="sleepModal"
            >

                <div class="quick-icon">

                    <svg viewBox="0 0 24 24">
                        <path d="M21 12.8A9 9 0 1 1 11.2 3 7 7 0 0 0 21 12.8z"/>
                    </svg>

                </div>

                <strong>
                    أريد أن أنام أفضل
                </strong>

                <small>
                    روتين بسيط قبل النوم
                </small>

            </button>


            {{-- SPECIALISTS --}}
            <button
                type="button"
                class="quick-action js-open-modal"
                data-modal="specialistsModal"
            >

                <div class="quick-icon">

                    <svg viewBox="0 0 24 24">
                        <circle cx="12" cy="7" r="4"/>
                        <path d="M5 21a7 7 0 0 1 14 0"/>
                    </svg>

                </div>

                <strong>
                    أريد مختصًا
                </strong>

                <small>
                    تعرّف على المختصين المتاحين
                </small>

            </button>

        </div>

    </section>


    {{-- =====================================================
         SMART RECOMMENDATION
    ====================================================== --}}

    <section class="sanad-recommendation">

        <div class="recommendation-top">

            <span class="recommendation-label">
                اقتراح سَنَد لك
            </span>

            <span
                class="recommendation-state"
                id="moodState"
            >
                حالتك الآن: متوسط
            </span>

        </div>


        <h2 id="sanadDailyTitle">
            خذ يومك بهدوء
        </h2>


        <p id="sanadDailyText">
            ليس من الضروري أن تكون في أفضل حال طوال الوقت.
            ركّز اليوم على ما تحتاجه فعلًا واترك مساحة صغيرة للراحة.
        </p>


        <div class="recommendation-actions">

            <a
               href="{{ url('/pages/personal-assistant.html') }}"
                class="btn btn-primary"
            >
                تحدث مع سَنَد
            </a>

            <button
                type="button"
                class="btn btn-secondary js-open-modal"
                data-modal="breathingModal"
            >
                خذ دقيقة للهدوء
            </button>

        </div>

    </section>


    {{-- =====================================================
         PERSONAL NOTE
    ====================================================== --}}

    <section class="journal-card">

        <div class="journal-header">

            <div>

                <h2>
                    مساحة خاصة لك
                </h2>

                <p>
                    اكتب ما يدور في ذهنك. يمكنك الاحتفاظ بالملاحظة على جهازك فقط.
                </p>

            </div>

            <span class="private-label">
                خاصة بك
            </span>

        </div>


        <textarea
            id="dailyJournalInput"
            class="journal-input"
            placeholder="اكتب ما تفكر فيه أو ما تشعر به الآن..."
        ></textarea>


        <div class="journal-footer">

            <button
                type="button"
                id="saveJournalBtn"
                class="btn btn-wellness btn-sm"
            >
                حفظ الملاحظة
            </button>

        </div>

    </section>

</main>


{{-- =========================================================
     BREATHING MODAL
========================================================= --}}

<div
    class="sanad-modal"
    id="breathingModal"
    aria-hidden="true"
>

    <div class="sanad-modal-box">

        <div class="modal-header">

            <div>

                <h2>
                    خذ دقيقة للهدوء
                </h2>

                <p>
                    اتبع الدائرة وخذ نفسًا ببطء.
                </p>

            </div>

            <button
                type="button"
                class="modal-close js-close-modal"
            >
                ×
            </button>

        </div>


        <div class="breathing-area">

            <div
                class="breath-circle"
                id="breathCircle"
            >
                <span id="breathText">
                    جاهز؟
                </span>
            </div>


            <div
                class="breath-status"
                id="breathStatus"
            >
                عندما تكون مستعدًا، ابدأ التمرين.
            </div>


            <button
                type="button"
                class="btn btn-primary"
                id="startBreathing"
            >
                ابدأ التمرين
            </button>

        </div>

    </div>

</div>


{{-- =========================================================
     SLEEP MODAL
========================================================= --}}

<div
    class="sanad-modal"
    id="sleepModal"
    aria-hidden="true"
>

    <div class="sanad-modal-box">

        <div class="modal-header">

            <div>

                <h2>
                    روتين هادئ قبل النوم
                </h2>

                <p>
                    لا تحتاج إلى تغيير كل شيء. ابدأ بخطوة واحدة.
                </p>

            </div>

            <button
                type="button"
                class="modal-close js-close-modal"
            >
                ×
            </button>

        </div>


        <div class="sleep-list">

            <div class="sleep-item">

                <div class="sleep-number">1</div>

                <div>

                    <strong>
                        ابتعد عن الشاشة قليلًا
                    </strong>

                    <span>
                        حاول منح عينيك وعقلك بعض الهدوء قبل النوم.
                    </span>

                </div>

            </div>


            <div class="sleep-item">

                <div class="sleep-number">2</div>

                <div>

                    <strong>
                        اجعل الإضاءة أكثر هدوءًا
                    </strong>

                    <span>
                        الإضاءة الهادئة تساعدك على الانتقال إلى أجواء النوم.
                    </span>

                </div>

            </div>


            <div class="sleep-item">

                <div class="sleep-number">3</div>

                <div>

                    <strong>
                        تنفس ببطء
                    </strong>

                    <span>
                        خذ عدة أنفاس عميقة وركز فقط على عملية التنفس.
                    </span>

                </div>

            </div>


            <div class="sleep-item">

                <div class="sleep-number">4</div>

                <div>

                    <strong>
                        لا تضغط على نفسك
                    </strong>

                    <span>
                        إذا لم تنم فورًا، حاول فقط أن تستريح دون مقاومة.
                    </span>

                </div>

            </div>

        </div>


        <div class="modal-footer">

            <button
                type="button"
                class="btn btn-secondary js-close-modal"
            >
                فهمت
            </button>

        </div>

    </div>

</div>


{{-- =========================================================
     SPECIALISTS MODAL
========================================================= --}}

<div
    class="sanad-modal"
    id="specialistsModal"
    aria-hidden="true"
>

    <div class="sanad-modal-box">

        <div class="modal-header">

            <div>

                <h2>
                    المختصون
                </h2>

                <p>
                    إذا شعرت أنك بحاجة إلى دعم متخصص، يمكنك البدء من هنا.
                </p>

            </div>

            <button
                type="button"
                class="modal-close js-close-modal"
            >
                ×
            </button>

        </div>


        <div class="specialist-list">


            <div class="specialist-card">

                <div class="specialist-avatar">

                    <svg
                        viewBox="0 0 24 24"
                        width="22"
                        height="22"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.6"
                    >
                        <circle cx="12" cy="7" r="4"/>
                        <path d="M5 21a7 7 0 0 1 14 0"/>
                    </svg>

                </div>

                <div class="specialist-info">

                    <strong>
                        أخصائي نفسي
                    </strong>

                    <span>
                        الدعم النفسي والاستماع
                    </span>

                </div>

                <span class="private-label">
                    متاح
                </span>

            </div>


            <div class="specialist-card">

                <div class="specialist-avatar">

                    <svg
                        viewBox="0 0 24 24"
                        width="22"
                        height="22"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.6"
                    >
                        <path d="M12 3a9 9 0 1 0 9 9"/>
                        <path d="M12 7v5l3 2"/>
                    </svg>

                </div>

                <div class="specialist-info">

                    <strong>
                        مستشار أسري
                    </strong>

                    <span>
                        العلاقات والأسرة والتواصل
                    </span>

                </div>

                <span class="private-label">
                    متاح
                </span>

            </div>


            <div class="specialist-card">

                <div class="specialist-avatar">

                    <svg
                        viewBox="0 0 24 24"
                        width="22"
                        height="22"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.6"
                    >
                        <path d="M12 2a10 10 0 1 0 10 10"/>
                        <path d="M12 6v6l4 2"/>
                    </svg>

                </div>

                <div class="specialist-info">

                    <strong>
                        مستشار توتر وضغوط
                    </strong>

                    <span>
                        التعامل مع الضغط والإرهاق
                    </span>

                </div>

                <span class="private-label">
                    متاح
                </span>

            </div>

        </div>


        <div class="modal-footer">

            <button
                type="button"
                class="btn btn-primary"
onclick="window.location.href='{{ url('/pages/anonymous-start.html') }}'"            >
                تحدث مع سَنَد أولًا
            </button>

        </div>

    </div>

</div>


<script>
document.addEventListener('DOMContentLoaded', function () {

    /* =====================================================
       MODALS
    ===================================================== */

    const modalButtons = document.querySelectorAll('.js-open-modal');
    const closeButtons = document.querySelectorAll('.js-close-modal');
    const modals = document.querySelectorAll('.sanad-modal');


    function openModal(id) {

        const modal = document.getElementById(id);

        if (!modal) {
            return;
        }

        modal.classList.add('show');
        modal.setAttribute('aria-hidden', 'false');

        document.body.style.overflow = 'hidden';
    }


    function closeModal(modal) {

        if (!modal) {
            return;
        }

        modal.classList.remove('show');
        modal.setAttribute('aria-hidden', 'true');

        document.body.style.overflow = '';

        if (modal.id === 'breathingModal') {
            stopBreathing();
        }
    }


    modalButtons.forEach(button => {

        button.addEventListener('click', function () {

            openModal(this.dataset.modal);

        });

    });


    closeButtons.forEach(button => {

        button.addEventListener('click', function () {

            closeModal(this.closest('.sanad-modal'));

        });

    });


    modals.forEach(modal => {

        modal.addEventListener('click', function (event) {

            if (event.target === modal) {
                closeModal(modal);
            }

        });

    });


    document.addEventListener('keydown', function (event) {

        if (event.key === 'Escape') {

            document
                .querySelectorAll('.sanad-modal.show')
                .forEach(modal => closeModal(modal));

        }

    });


    /* =====================================================
       MOOD
    ===================================================== */

    const moodButtons = document.querySelectorAll('.js-mood');

    const moodState =
        document.getElementById('moodState');

    const dailyTitle =
        document.getElementById('sanadDailyTitle');

    const dailyText =
        document.getElementById('sanadDailyText');


    moodButtons.forEach(button => {

        button.addEventListener('click', function () {

            moodButtons.forEach(item => {
                item.classList.remove('active');
            });

            this.classList.add('active');


            const mood =
                this.dataset.mood;

            const title =
                this.dataset.title;

            const advice =
                this.dataset.advice;


            moodState.textContent =
                'حالتك الآن: ' + mood;

            dailyTitle.textContent =
                title;

            dailyText.textContent =
                advice;


            if (
                typeof SanadApp !== 'undefined' &&
                typeof SanadApp.showToast === 'function'
            ) {

                SanadApp.showToast(
                    'تم تحديث حالتك: ' + mood
                );

            }

        });

    });


    /* =====================================================
       BREATHING EXERCISE
    ===================================================== */

    const breathCircle =
        document.getElementById('breathCircle');

    const breathText =
        document.getElementById('breathText');

    const breathStatus =
        document.getElementById('breathStatus');

    const startBreathing =
        document.getElementById('startBreathing');


    let breathingTimer = null;
    let breathingRunning = false;


    function stopBreathing() {

        breathingRunning = false;

        clearTimeout(breathingTimer);

        breathCircle.classList.remove('active');

        breathText.textContent = 'جاهز؟';

        breathStatus.textContent =
            'عندما تكون مستعدًا، ابدأ التمرين.';

        startBreathing.textContent =
            'ابدأ التمرين';
    }


    function breathingStep(step) {

        if (!breathingRunning) {
            return;
        }


        const steps = [
            {
                text: 'استنشق',
                status: 'خذ نفسًا ببطء لمدة 4 ثوانٍ.',
                duration: 4000
            },
            {
                text: 'احتفظ',
                status: 'احتفظ بالنفس بهدوء لمدة 4 ثوانٍ.',
                duration: 4000
            },
            {
                text: 'ازفر',
                status: 'أخرج النفس ببطء لمدة 6 ثوانٍ.',
                duration: 6000
            }
        ];


        const current =
            steps[step % steps.length];


        breathText.textContent =
            current.text;

        breathStatus.textContent =
            current.status;


        breathingTimer = setTimeout(function () {

            breathingStep(step + 1);

        }, current.duration);

    }


    startBreathing.addEventListener('click', function () {

        if (breathingRunning) {

            stopBreathing();

            return;
        }


        breathingRunning = true;

        breathCircle.classList.add('active');

        startBreathing.textContent =
            'إيقاف التمرين';

        breathingStep(0);

    });


    /* =====================================================
       PERSONAL NOTE
    ===================================================== */

    const journalInput =
        document.getElementById('dailyJournalInput');

    const saveJournalBtn =
        document.getElementById('saveJournalBtn');


    const savedNote =
        localStorage.getItem('sanad_daily_note');


    if (savedNote && journalInput) {

        try {

            const parsed =
                JSON.parse(savedNote);

            if (parsed.text) {
                journalInput.value =
                    parsed.text;
            }

        } catch (error) {

            console.warn(
                'Unable to restore Sanad note.'
            );

        }

    }


    saveJournalBtn.addEventListener('click', function () {

        const note =
            journalInput.value.trim();


        if (!note) {

            journalInput.focus();

            if (
                typeof SanadApp !== 'undefined' &&
                typeof SanadApp.showToast === 'function'
            ) {

                SanadApp.showToast(
                    'اكتب ملاحظتك أولًا'
                );

            }

            return;
        }


        localStorage.setItem(
            'sanad_daily_note',
            JSON.stringify({
                text: note,
                saved_at: new Date().toISOString()
            })
        );


        if (
            typeof SanadApp !== 'undefined' &&
            typeof SanadApp.showToast === 'function'
        ) {

            SanadApp.showToast(
                'تم حفظ الملاحظة على جهازك.',
                'success'
            );

        }

    });

});
</script>

@endsection
