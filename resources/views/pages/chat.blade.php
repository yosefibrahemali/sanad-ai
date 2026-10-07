@extends('layouts.app')

@section('content')

<style>
    /* =========================================================
       PAGE
    ========================================================= */

    html,
    body {
        min-height: 100%;
    }

    body {
        background: var(--bg-secondary);
        overflow-x: hidden;
    }

    .sanad-page {
        width: min(1180px, calc(100% - 32px));
        margin: 0 auto;
        padding: 20px 0 30px;
    }


    /* =========================================================
       STEPS
    ========================================================= */

    .sanad-steps {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;

        margin-bottom: 16px;
    }

    .sanad-step {
        display: flex;
        align-items: center;
        gap: 7px;

        color: var(--text-muted);
        font-size: .78rem;
        text-decoration: none;
    }

    .sanad-step.active {
        color: var(--primary-accent);
        font-weight: 700;
    }

    .sanad-step-number {
        width: 22px;
        height: 22px;

        display: grid;
        place-items: center;

        border-radius: 50%;
        border: 1px solid var(--border-light);

        background: var(--bg-surface);

        font-size: .68rem;
    }

    .sanad-step.active .sanad-step-number {
        background: var(--primary-accent);
        color: #fff;
        border-color: var(--primary-accent);
    }

    .sanad-arrow {
        color: var(--border-medium);
        font-size: .75rem;
    }


    /* =========================================================
       CHAT CONTAINER
    ========================================================= */

    .sanad-chat {
        height: calc(100dvh - 155px);
        min-height: 500px;

        display: grid;
        grid-template-columns: minmax(0, 1fr) 280px;

        background: var(--bg-surface);
        border: 1px solid var(--border-light);
        border-radius: 20px;

        overflow: hidden;

        box-shadow: var(--shadow-card);
    }


    /* =========================================================
       MAIN CHAT
    ========================================================= */

    .sanad-main {
        min-width: 0;
        min-height: 0;

        display: flex;
        flex-direction: column;
    }


    /* =========================================================
       HEADER
    ========================================================= */

    .sanad-header {
        flex: 0 0 68px;

        height: 68px;

        display: flex;
        align-items: center;
        justify-content: space-between;

        padding: 0 18px;

        border-bottom: 1px solid var(--border-light);
    }

    .sanad-profile {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .sanad-avatar {
        width: 40px;
        height: 40px;

        display: grid;
        place-items: center;

        border-radius: 50%;

        background: var(--primary-accent-soft);
        color: var(--primary-accent);
    }

    .sanad-avatar svg {
        width: 20px;
        height: 20px;
    }

    .sanad-name {
        margin: 0;

        color: var(--text-primary);
        font-size: .95rem;
        font-weight: 800;
    }

    .sanad-status {
        display: flex;
        align-items: center;
        gap: 5px;

        margin-top: 3px;

        color: var(--text-muted);
        font-size: .68rem;
    }

    .status-dot {
        width: 6px;
        height: 6px;

        border-radius: 50%;

        background: var(--wellness-green);
    }

    .analysis-toggle {
        height: 36px;

        padding: 0 11px;

        display: flex;
        align-items: center;
        gap: 6px;

        border: 1px solid var(--border-light);
        border-radius: 9px;

        background: var(--bg-secondary);
        color: var(--text-secondary);

        cursor: pointer;

        font-family: inherit;
        font-size: .72rem;
    }

    .analysis-toggle:hover {
        color: var(--primary-accent);
        border-color: var(--primary-accent);
    }


    /* =========================================================
       MESSAGES
    ========================================================= */

    .sanad-messages {
        flex: 1 1 auto;

        min-width: 0;
        min-height: 0;

        overflow-y: auto;
        overflow-x: hidden;

        padding: 25px 28px;

        scroll-behavior: smooth;

        scrollbar-width: thin;
    }

    .sanad-messages::-webkit-scrollbar {
        width: 6px;
    }

    .sanad-messages::-webkit-scrollbar-track {
        background: transparent;
    }

    .sanad-messages::-webkit-scrollbar-thumb {
        background: var(--border-medium);
        border-radius: 10px;
    }

    .sanad-message {
        display: flex;
        align-items: flex-end;
        gap: 8px;

        margin-bottom: 15px;
    }

    .sanad-message.user {
        direction: ltr;
    }

    .sanad-message.ai {
        direction: ltr;
    }

    .sanad-message.user .sanad-bubble {
        order: 2;
    }

    .sanad-message.user .message-avatar {
        order: 1;
    }

    .sanad-message.ai .sanad-bubble {
        order: 1;
    }

    .sanad-message.ai .message-avatar {
        order: 2;
    }

    .sanad-bubble {
        max-width: 620px;

        padding: 10px 14px;

        border-radius: 14px;

        background: var(--bg-secondary);
        border: 1px solid var(--border-light);

        direction: rtl;
        text-align: right;
    }

    .sanad-message.ai .sanad-bubble {
        background: var(--bg-surface-elevated);
    }

    .sanad-bubble p {
        margin: 0;

        color: var(--text-primary);
        font-size: .88rem;
        line-height: 1.8;
    }

    .message-time {
        display: block;

        margin-top: 4px;

        color: var(--text-muted);
        font-size: .62rem;
    }

    .message-avatar {
        width: 28px;
        height: 28px;

        flex: 0 0 28px;

        display: grid;
        place-items: center;

        border-radius: 50%;

        background: var(--bg-secondary);
        color: var(--text-muted);

        border: 1px solid var(--border-light);
    }

    .sanad-message.ai .message-avatar {
        background: var(--primary-accent-soft);
        color: var(--primary-accent);
        border-color: var(--primary-accent-border);
    }

    .message-avatar svg {
        width: 15px;
        height: 15px;
    }


    /* =========================================================
       SUGGESTIONS
    ========================================================= */

    .sanad-suggestions {
        flex: 0 0 auto;

        display: flex;
        gap: 7px;

        padding: 9px 15px;

        border-top: 1px solid var(--border-light);

        overflow-x: auto;
        overflow-y: hidden;

        scrollbar-width: none;
    }

    .sanad-suggestions::-webkit-scrollbar {
        display: none;
    }

    .suggestion {
        flex: 0 0 auto;

        padding: 7px 11px;

        border: 1px solid var(--border-light);
        border-radius: 20px;

        background: var(--bg-secondary);
        color: var(--text-secondary);

        font-family: inherit;
        font-size: .72rem;

        cursor: pointer;

        white-space: nowrap;
    }

    .suggestion:hover {
        color: var(--primary-accent);
        border-color: var(--primary-accent);
    }


    /* =========================================================
       RECORDING
    ========================================================= */

    .recording {
        flex: 0 0 auto;

        display: flex;
        align-items: center;
        gap: 7px;

        padding: 7px 14px;

        border-top: 1px solid var(--border-light);

        color: var(--text-muted);
        font-size: .68rem;
    }

    .recording[hidden] {
        display: none;
    }

    .recording-dot {
        width: 7px;
        height: 7px;

        border-radius: 50%;

        background: var(--priority-high);

        animation: pulse 1s infinite;
    }


    /* =========================================================
       INPUT
    ========================================================= */

    .sanad-input-area {
        flex: 0 0 auto;

        display: flex;
        gap: 8px;

        padding: 11px 14px;

        border-top: 1px solid var(--border-light);
    }

    .sanad-input {
        flex: 1;
        min-width: 0;

        height: 44px;

        padding: 0 14px;

        border: 1px solid var(--border-medium);
        border-radius: 11px;

        background: var(--bg-secondary);
        color: var(--text-primary);

        outline: none;

        font-family: inherit;
        font-size: .86rem;
    }

    .sanad-input:focus {
        border-color: var(--primary-accent);

        box-shadow:
            0 0 0 3px var(--primary-accent-soft);
    }

    .sanad-input::placeholder {
        color: var(--text-muted);
    }

    .input-button {
        width: 44px;
        height: 44px;

        flex: 0 0 44px;

        display: grid;
        place-items: center;

        border: 1px solid var(--border-medium);
        border-radius: 11px;

        background: var(--bg-secondary);
        color: var(--text-secondary);

        cursor: pointer;
    }

    .input-button:hover {
        color: var(--primary-accent);
        border-color: var(--primary-accent);
    }

    .input-button:disabled {
        opacity: .55;
        cursor: not-allowed;
    }

    .input-button.send {
        background: var(--primary-accent);
        border-color: var(--primary-accent);
        color: #fff;
    }

    .input-button svg {
        width: 17px;
        height: 17px;
    }


    /* =========================================================
       ANALYSIS
    ========================================================= */

    .sanad-analysis {
        min-width: 0;
        min-height: 0;

        padding: 18px;

        overflow-y: auto;
        overflow-x: hidden;

        background: var(--bg-secondary);
        border-right: 1px solid var(--border-light);

        scrollbar-width: thin;
    }

    .sanad-analysis::-webkit-scrollbar {
        width: 5px;
    }

    .sanad-analysis::-webkit-scrollbar-track {
        background: transparent;
    }

    .sanad-analysis::-webkit-scrollbar-thumb {
        background: var(--border-medium);
        border-radius: 10px;
    }

    .sanad-analysis.hidden {
        display: none;
    }

    .analysis-heading {
        margin: 0 0 4px;

        color: var(--text-primary);
        font-size: .9rem;
        font-weight: 800;
    }

    .analysis-subtitle {
        margin: 0 0 15px;

        color: var(--text-muted);
        font-size: .68rem;
        line-height: 1.7;
    }

    .analysis-card {
        padding: 13px;
        margin-bottom: 9px;

        background: var(--bg-surface);
        border: 1px solid var(--border-light);
        border-radius: 12px;
    }

    .analysis-title {
        margin: 0 0 10px;

        color: var(--text-primary);
        font-size: .75rem;
        font-weight: 800;
    }

    .analysis-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 5px;
    }

    .analysis-tag {
        padding: 5px 8px;

        border-radius: 20px;

        background: var(--primary-accent-soft);
        color: var(--text-secondary);

        font-size: .64rem;
    }

    .analysis-level {
        display: flex;
        align-items: center;
        justify-content: space-between;

        gap: 8px;

        font-size: .68rem;
        color: var(--text-muted);
    }

    .analysis-badge {
        padding: 5px 8px;

        border-radius: 20px;

        background: var(--primary-accent-soft);
        color: var(--primary-accent);

        font-size: .64rem;
        white-space: nowrap;
    }

    .meter {
        margin-top: 10px;
    }

    .meter-header {
        display: flex;
        justify-content: space-between;

        margin-bottom: 4px;

        color: var(--text-muted);
        font-size: .64rem;
    }

    .meter-line {
        height: 4px;

        overflow: hidden;

        border-radius: 10px;
        background: var(--border-light);
    }

    .meter-line span {
        display: block;

        height: 100%;

        border-radius: inherit;

        background: var(--primary-accent);

        transition: width .3s ease;
    }

    .analysis-note {
        padding: 10px;

        color: var(--text-muted);
        font-size: .64rem;
        line-height: 1.7;

        background: var(--bg-surface);
        border: 1px solid var(--border-light);
        border-radius: 10px;
    }

    .analysis-actions {
        margin-top: 12px;
    }

    .analysis-actions a {
        display: flex;
        justify-content: center;

        width: 100%;
        margin-bottom: 6px;
    }


    /* =========================================================
       TYPING
    ========================================================= */

    .typing {
        display: flex;
        gap: 4px;

        padding: 3px 0;
    }

    .typing span {
        width: 5px;
        height: 5px;

        border-radius: 50%;

        background: var(--text-muted);

        animation: typing 1s infinite;
    }

    .typing span:nth-child(2) {
        animation-delay: .15s;
    }

    .typing span:nth-child(3) {
        animation-delay: .3s;
    }


    /* =========================================================
       ANIMATIONS
    ========================================================= */

    @keyframes typing {

        0%,
        60%,
        100% {
            transform: translateY(0);
            opacity: .4;
        }

        30% {
            transform: translateY(-3px);
            opacity: 1;
        }
    }

    @keyframes pulse {

        50% {
            transform: scale(1.5);
            opacity: .5;
        }
    }


    /* =========================================================
       MOBILE
    ========================================================= */

    @media (max-width: 900px) {

        .sanad-page {
            width: calc(100% - 16px);
            padding: 10px 0 20px;
        }

        .sanad-chat {
            height: calc(100dvh - 125px);
            min-height: 500px;

            display: block;
        }

        .sanad-main {
            height: 100%;
            min-height: 0;
        }

        .sanad-messages {
            min-height: 0;
            padding: 18px 12px;
        }

        .sanad-analysis {
            position: fixed;

            top: 0;
            right: 0;
            bottom: 0;

            z-index: 1000;

            width: min(310px, 88vw);

            overflow-y: auto;

            box-shadow: var(--shadow-card);
        }

        .sanad-bubble {
            max-width: 88%;
        }

        .sanad-header {
            padding: 0 12px;
        }

        .analysis-toggle span {
            display: none;
        }
    }


    @media (max-width: 600px) {

        .sanad-steps {
            justify-content: flex-start;
        }

        .sanad-step:not(.active) {
            display: none;
        }

        .sanad-arrow {
            display: none;
        }

        .sanad-chat {
            border-radius: 14px;
        }

        .sanad-avatar {
            width: 37px;
            height: 37px;
        }

        .sanad-name {
            font-size: .88rem;
        }

        .sanad-bubble {
            max-width: calc(100% - 36px);
        }

        .sanad-bubble p {
            font-size: .82rem;
        }

        .sanad-input {
            height: 42px;
        }

        .input-button {
            width: 42px;
            height: 42px;
            flex-basis: 42px;
        }
    }
</style>


<div class="sanad-page">

    {{-- =====================================================
         STEPS
    ====================================================== --}}

    <div class="sanad-steps">

    <a href="{{ url('/pages/anonymous-start') }}" class="sanad-step completed">
        <span class="sanad-step-number">✓</span>
        <span>البداية المجهولة</span>
    </a>

    <span class="sanad-arrow">←</span>

    <div class="sanad-step active">
        <span class="sanad-step-number">2</span>
        <span>محادثة سَنَد</span>
    </div>

    <span class="sanad-arrow">←</span>

    <div class="sanad-step">
        <span class="sanad-step-number">3</span>
        <span>تقييم الاحتياج</span>
    </div>

    <span class="sanad-arrow">←</span>

    <div class="sanad-step">
        <span class="sanad-step-number">4</span>
        <span>الدعم والمختص</span>
    </div>

</div>


    {{-- =====================================================
         CHAT
    ====================================================== --}}

    <div class="sanad-chat">

        {{-- =================================================
             MAIN CHAT
        ================================================== --}}

        <section class="sanad-main">


            {{-- HEADER --}}

            <header class="sanad-header">

                <div class="sanad-profile">

                    <div class="sanad-avatar">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                        >
                            <circle
                                cx="12"
                                cy="12"
                                r="9"
                            />

                            <path d="M12 7v5l3 2"/>
                        </svg>

                    </div>


                    <div>

                        <h2 class="sanad-name">
                            سَنَد AI
                        </h2>

                        <div class="sanad-status">

                            <span class="status-dot"></span>

                            جلسة مجهولة

                        </div>

                    </div>

                </div>


                <button
                    type="button"
                    id="toggleAnalysisBtn"
                    class="analysis-toggle"
                >

                    <svg
                        width="15"
                        height="15"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path d="M4 20V10"/>
                        <path d="M12 20V4"/>
                        <path d="M20 20v-7"/>
                    </svg>

                    <span>
                        تحليل الحالة
                    </span>

                </button>

            </header>


            {{-- =================================================
                 MESSAGES
            ================================================== --}}

            <div
                class="sanad-messages"
                id="chatMessages"
            >

                {{-- AI --}}

                <div class="sanad-message ai">

                    <div class="sanad-bubble">

                        <p>
                            مرحبًا، أنا سَنَد.
                            <br>
                            أنا هنا باش نسمعك بدون أحكام.
                            شن أكثر حاجة شاغلة بالك اليوم؟
                        </p>

                        <span class="message-time">
                            الآن
                        </span>

                    </div>


                    <div class="message-avatar">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                        >
                            <circle
                                cx="12"
                                cy="12"
                                r="9"
                            />
                        </svg>

                    </div>

                </div>


                {{-- USER --}}

                <div class="sanad-message user">

                    <div class="sanad-bubble">

                        <p>
                            الفترة الأخيرة حاس روحي مضغوط واجد
                            ومش قادر نركز في دراستي.
                        </p>

                        <span class="message-time">
                            الآن
                        </span>

                    </div>


                    <div class="message-avatar">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                        >
                            <circle
                                cx="12"
                                cy="7"
                                r="4"
                            />

                            <path d="M4 21c0-4 3-6 8-6s8 2 8 6"/>
                        </svg>

                    </div>

                </div>


                {{-- AI --}}

                <div class="sanad-message ai">

                    <div class="sanad-bubble">

                        <p>
                            نفهمك. الضغط المستمر ممكن يخلي التركيز أصعب.
                            لو تحب، نحاولوا نفهموا مع بعض شن أكثر شيء
                            مسبّبلك الضغط.
                        </p>

                        <span class="message-time">
                            الآن
                        </span>

                    </div>


                    <div class="message-avatar">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                        >
                            <circle
                                cx="12"
                                cy="12"
                                r="9"
                            />
                        </svg>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 SUGGESTIONS
            ================================================== --}}

            <div class="sanad-suggestions">

                <button
                    type="button"
                    class="suggestion js-suggestion"
                    data-text="الامتحانات والوقت ضاغط عليا واجد"
                >
                    ضغط الدراسة
                </button>

                <button
                    type="button"
                    class="suggestion js-suggestion"
                    data-text="عندي أرق ومش قادر نرقد كويس بالليل"
                >
                    مش قادر نرقد
                </button>

                <button
                    type="button"
                    class="suggestion js-suggestion"
                    data-text="حاس بتوتر وخوف كبير من المستقبل"
                >
                    توتر وخوف
                </button>

                <button
                    type="button"
                    class="suggestion js-suggestion"
                    data-text="نبي تمرين تنفس مهدئ توا"
                >
                    تمرين تنفس
                </button>

            </div>


            {{-- =================================================
                 RECORDING
            ================================================== --}}

            <div
                class="recording"
                id="voiceRecordingBox"
                hidden
            >

                <span class="recording-dot"></span>

                <span id="recordTimer">
                    00:00
                </span>

                <span>
                    جاري التسجيل...
                </span>

            </div>


            {{-- =================================================
                 INPUT
            ================================================== --}}

            <div class="sanad-input-area">

                <button
                    type="button"
                    id="chatMicBtn"
                    class="input-button"
                    title="تسجيل صوتي"
                >

                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <rect
                            x="9"
                            y="2"
                            width="6"
                            height="13"
                            rx="3"
                        />

                        <path d="M5 11a7 7 0 0014 0"/>

                        <path d="M12 18v4"/>

                        <path d="M8 22h8"/>
                    </svg>

                </button>


                <input
                    type="text"
                    id="chatInput"
                    class="sanad-input"
                    placeholder="احكي لسَنَد عن اللي حاس بيه..."
                    autocomplete="off"
                    maxlength="2000"
                >


                <button
                    type="button"
                    id="chatSendBtn"
                    class="input-button send"
                    title="إرسال"
                >

                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path d="M22 2L11 13"/>

                        <path d="M22 2l-7 20-4-9-9-4z"/>
                    </svg>

                </button>

            </div>

        </section>


        {{-- =====================================================
             ANALYSIS
        ====================================================== --}}

        <aside
            class="sanad-analysis"
            id="chatAnalysisPanel"
        >

            <h3 class="analysis-heading">
                تحليل سَنَد
            </h3>

            <p class="analysis-subtitle">
                مؤشرات مبدئية لفهم احتياجك.
            </p>


            {{-- INDICATORS --}}

            <div class="analysis-card">

                <h4 class="analysis-title">
                    المؤشرات
                </h4>

                <div
                    class="analysis-tags"
                    id="indicatorsList"
                >

                    <span class="analysis-tag">
                        ضغط نفسي
                    </span>

                    <span class="analysis-tag">
                        صعوبة في التركيز
                    </span>

                </div>

            </div>


            {{-- NEED LEVEL --}}

            <div class="analysis-card">

                <h4 class="analysis-title">
                    مستوى الاحتياج
                </h4>

                <div class="analysis-level">

                    <span>
                        تقدير مبدئي
                    </span>

                    <strong
                        class="analysis-badge"
                        id="needLevel"
                    >
                        يحتاج إلى متابعة
                    </strong>

                </div>

            </div>


            {{-- METERS --}}

            <div class="analysis-card">

                <h4 class="analysis-title">
                    المؤشرات اللحظية
                </h4>


                {{-- STRESS --}}

                <div class="meter">

                    <div class="meter-header">

                        <span>
                            الضغط
                        </span>

                        <span id="stressLabel">
                            متوسط
                        </span>

                    </div>

                    <div class="meter-line">

                        <span
                            id="stressMeter"
                            style="width:60%"
                        ></span>

                    </div>

                </div>


                {{-- ANXIETY --}}

                <div class="meter">

                    <div class="meter-header">

                        <span>
                            القلق
                        </span>

                        <span id="anxietyLabel">
                            منخفض
                        </span>

                    </div>

                    <div class="meter-line">

                        <span
                            id="anxietyMeter"
                            style="width:35%"
                        ></span>

                    </div>

                </div>


                {{-- FATIGUE --}}

                <div class="meter">

                    <div class="meter-header">

                        <span>
                            الإرهاق
                        </span>

                        <span id="fatigueLabel">
                            متوسط
                        </span>

                    </div>

                    <div class="meter-line">

                        <span
                            id="fatigueMeter"
                            style="width:45%"
                        ></span>

                    </div>

                </div>

            </div>


            {{-- NOTE --}}

            <div class="analysis-note">

                هذا ليس تشخيصًا طبيًا، بل مؤشر أولي
                للمساعدة في تحديد الدعم المناسب.

            </div>


            {{-- ACTIONS --}}

            <div class="analysis-actions">

                <a
                    href="{{ url('/pages/assessment') }}"
                    class="btn btn-primary"
                >
                    التقييم
                </a>

                <a
                    href="{{ url('/pages/specialists') }}"
                    class="btn btn-secondary"
                >
                    التحدث مع مختص
                </a>

            </div>

        </aside>

    </div>

</div>


<script>
document.addEventListener('DOMContentLoaded', () => {

    /* =========================================================
       ELEMENTS
    ========================================================= */

    const input =
        document.getElementById('chatInput');

    const sendButton =
        document.getElementById('chatSendBtn');

    const micButton =
        document.getElementById('chatMicBtn');

    const messages =
        document.getElementById('chatMessages');

    const analysis =
        document.getElementById('chatAnalysisPanel');

    const toggleAnalysis =
        document.getElementById('toggleAnalysisBtn');

    const recordingBox =
        document.getElementById('voiceRecordingBox');

    const recordTimer =
        document.getElementById('recordTimer');


    /* =========================================================
       STATE
    ========================================================= */

    let sending = false;

    let recorder = null;

    let stream = null;

    let recordingTime = 0;

    let timer = null;


    /* =========================================================
       HELPERS
    ========================================================= */

    function escapeHtml(text) {

        const div =
            document.createElement('div');

        div.textContent = text;

        return div.innerHTML;
    }


    function timeNow() {

        return new Intl.DateTimeFormat(
            'ar-LY',
            {
                hour: 'numeric',
                minute: '2-digit'
            }
        ).format(new Date());

    }


    /*
     * IMPORTANT:
     * الـ scroll هنا داخل الرسائل فقط.
     */

    function scrollBottom() {

        requestAnimationFrame(() => {

            messages.scrollTop =
                messages.scrollHeight;

        });

    }


    /* =========================================================
       ADD MESSAGE
    ========================================================= */

    function addMessage(text, type) {

        const message =
            document.createElement('div');

        message.className =
            `sanad-message ${type}`;


        const icon =
            type === 'ai'
                ? `
                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.7"
                    >
                        <circle
                            cx="12"
                            cy="12"
                            r="9"
                        />
                    </svg>
                `
                : `
                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.7"
                    >
                        <circle
                            cx="12"
                            cy="7"
                            r="4"
                        />

                        <path d="M4 21c0-4 3-6 8-6s8 2 8 6"/>
                    </svg>
                `;


        message.innerHTML = `

            <div class="sanad-bubble">

                <p>
                    ${escapeHtml(text)}
                </p>

                <span class="message-time">
                    ${timeNow()}
                </span>

            </div>


            <div class="message-avatar">

                ${icon}

            </div>

        `;


        messages.appendChild(message);

        scrollBottom();
    }


    /* =========================================================
       TYPING
    ========================================================= */

    function showTyping() {

        const element =
            document.createElement('div');

        element.className =
            'sanad-message ai';

        element.id =
            'sanadTyping';


        element.innerHTML = `

            <div class="sanad-bubble">

                <div class="typing">

                    <span></span>
                    <span></span>
                    <span></span>

                </div>

            </div>


            <div class="message-avatar">

                <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.7"
                >
                    <circle
                        cx="12"
                        cy="12"
                        r="9"
                    />
                </svg>

            </div>

        `;


        messages.appendChild(element);

        scrollBottom();

        return element;
    }


    /* =========================================================
       RESPONSE
    ========================================================= */

    function getResponse(text) {

        const value =
            text.toLowerCase();


        if (
            value.includes('امتحان') ||
            value.includes('دراسة') ||
            value.includes('جامعة')
        ) {

            return 'فاهمك. ضغط الدراسة والامتحانات ممكن يخلي الواحد يحس إن كل شيء متراكم عليه. شن أكثر شيء ضاغط عليك توا؟';

        }


        if (
            value.includes('نوم') ||
            value.includes('نرقد') ||
            value.includes('أرق')
        ) {

            return 'واضح إن النوم مأثر عليك. هل المشكلة بسبب التفكير الزائد، القلق، أو إنك مش قادر تهدأ قبل النوم؟';

        }


        if (
            value.includes('خوف') ||
            value.includes('خايف') ||
            value.includes('قلق') ||
            value.includes('توتر')
        ) {

            return 'نفهمك. الإحساس بالخوف والتوتر ممكن يكون متعب. احكيلي أكثر، شن أكثر فكرة قاعدة تدور في بالك؟';

        }


        if (
            value.includes('تنفس')
        ) {

            return 'أكيد. خذ شهيق بهدوء لمدة 4 ثواني، وبعدها أخرج النفس ببطء لمدة 6 ثواني. كررها عدة مرات.';

        }


        if (
            value.includes('ضغط') ||
            value.includes('مضغوط')
        ) {

            return 'نقدروا نفهموا الضغط خطوة خطوة. شن أكثر شيء واحد حاس إنه ضاغط عليك توا؟';

        }


        return 'وصلتني فكرتك، وأنا معاك. احكيلي أكثر عن الشيء اللي حاس إنه مأثر عليك توا.';
    }


    /* =========================================================
       LEVEL
    ========================================================= */

    function getLevel(value) {

        if (value >= 70) {
            return 'مرتفع';
        }

        if (value >= 50) {
            return 'متوسط';
        }

        return 'منخفض';
    }


    /* =========================================================
       UPDATE ANALYSIS
    ========================================================= */

    function updateAnalysis(text) {

        const value =
            text.toLowerCase();


        let stress = 35;
        let anxiety = 25;
        let fatigue = 25;

        const indicators = [];


        /* PRESSURE */

        if (
            value.includes('ضغط') ||
            value.includes('مضغوط') ||
            value.includes('امتحان') ||
            value.includes('دراسة')
        ) {

            stress += 30;

            indicators.push('ضغط نفسي');
            indicators.push('ضغط دراسي');
        }


        /* ANXIETY */

        if (
            value.includes('خوف') ||
            value.includes('خايف') ||
            value.includes('قلق') ||
            value.includes('توتر')
        ) {

            anxiety += 35;

            indicators.push('توتر وقلق');
        }


        /* FATIGUE */

        if (
            value.includes('نوم') ||
            value.includes('أرق') ||
            value.includes('تعب') ||
            value.includes('مرهق') ||
            value.includes('نرقد')
        ) {

            fatigue += 30;

            indicators.push(
                'إرهاق أو اضطراب نوم'
            );
        }


        /* FOCUS */

        if (
            value.includes('تركيز') ||
            value.includes('نركز')
        ) {

            stress += 15;

            indicators.push(
                'صعوبة في التركيز'
            );
        }


        stress =
            Math.min(stress, 100);

        anxiety =
            Math.min(anxiety, 100);

        fatigue =
            Math.min(fatigue, 100);


        /* METERS */

        document
            .getElementById('stressMeter')
            .style.width =
            `${stress}%`;

        document
            .getElementById('anxietyMeter')
            .style.width =
            `${anxiety}%`;

        document
            .getElementById('fatigueMeter')
            .style.width =
            `${fatigue}%`;


        /* LABELS */

        document
            .getElementById('stressLabel')
            .textContent =
            getLevel(stress);

        document
            .getElementById('anxietyLabel')
            .textContent =
            getLevel(anxiety);

        document
            .getElementById('fatigueLabel')
            .textContent =
            getLevel(fatigue);


        /* NEED LEVEL */

        const highest =
            Math.max(
                stress,
                anxiety,
                fatigue
            );


        document
            .getElementById('needLevel')
            .textContent =
            highest >= 80
                ? 'يحتاج إلى دعم قريب'
                : highest >= 55
                    ? 'يحتاج إلى متابعة'
                    : 'مؤشرات مستقرة';


        /* INDICATORS */

        if (indicators.length) {

            document
                .getElementById('indicatorsList')
                .innerHTML =

                [
                    ...new Set(indicators)
                ]

                .map(item => `
                    <span class="analysis-tag">
                        ${escapeHtml(item)}
                    </span>
                `)

                .join('');
        }
    }


    /* =========================================================
       SEND MESSAGE
    ========================================================= */

    async function sendMessage(text = null) {

        if (sending) {
            return;
        }


        const message =
            text !== null
                ? text.trim()
                : input.value.trim();


        if (!message) {
            return;
        }


        sending = true;


        sendButton.disabled = true;

        input.disabled = true;


        addMessage(
            message,
            'user'
        );


        input.value = '';


        updateAnalysis(message);


        const typing =
            showTyping();


        await new Promise(resolve => {

            setTimeout(
                resolve,
                700
            );

        });


        typing.remove();


        addMessage(
            getResponse(message),
            'ai'
        );


        sending = false;


        sendButton.disabled = false;

        input.disabled = false;

        input.focus();

    }


    /* =========================================================
       SEND BUTTON
    ========================================================= */

    sendButton.addEventListener(
        'click',
        () => sendMessage()
    );


    /* =========================================================
       ENTER
    ========================================================= */

    input.addEventListener(
        'keydown',
        event => {

            if (
                event.key === 'Enter' &&
                !event.shiftKey
            ) {

                event.preventDefault();

                sendMessage();
            }

        }
    );


    /* =========================================================
       SUGGESTIONS
    ========================================================= */

    document
        .querySelectorAll('.js-suggestion')
        .forEach(button => {

            button.addEventListener(
                'click',
                () => {

                    sendMessage(
                        button.dataset.text
                    );

                }
            );

        });


    /* =========================================================
       ANALYSIS TOGGLE
    ========================================================= */

    toggleAnalysis.addEventListener(
        'click',
        () => {

            analysis.classList.toggle(
                'hidden'
            );

        }
    );


    /* =========================================================
       VOICE RECORDING
    ========================================================= */

    micButton.addEventListener(
        'click',
        async () => {


            /* STOP */

            if (
                recorder &&
                recorder.state === 'recording'
            ) {

                recorder.stop();

                return;
            }


            /* SUPPORT */

            if (
                !navigator.mediaDevices ||
                !navigator.mediaDevices.getUserMedia
            ) {

                alert(
                    'التسجيل الصوتي غير متاح في هذا المتصفح.'
                );

                return;
            }


            try {

                stream =
                    await navigator.mediaDevices.getUserMedia({
                        audio: true
                    });


                recorder =
                    new MediaRecorder(stream);


                recorder.onstop = () => {

                    stream
                        ?.getTracks()
                        .forEach(
                            track =>
                                track.stop()
                        );


                    stream = null;

                    recorder = null;


                    clearInterval(timer);

                    timer = null;


                    recordingBox.hidden =
                        true;


                    addMessage(
                        'تم تسجيل رسالتك الصوتية.',
                        'ai'
                    );

                };


                recorder.start();


                recordingTime = 0;

                recordTimer.textContent =
                    '00:00';


                recordingBox.hidden =
                    false;


                timer =
                    setInterval(() => {

                        recordingTime++;


                        const minutes =
                            String(
                                Math.floor(
                                    recordingTime / 60
                                )
                            ).padStart(
                                2,
                                '0'
                            );


                        const seconds =
                            String(
                                recordingTime % 60
                            ).padStart(
                                2,
                                '0'
                            );


                        recordTimer.textContent =
                            `${minutes}:${seconds}`;

                    }, 1000);


            } catch (error) {

                console.error(error);

                alert(
                    'لم يتم السماح باستخدام الميكروفون.'
                );

            }

        }
    );


    /* =========================================================
       INITIAL SCROLL
    ========================================================= */

    requestAnimationFrame(() => {

        messages.scrollTop =
            messages.scrollHeight;

    });

});
</script>

@endsection