@extends('layouts.app')

@section('content')

<style>
/* =========================================================
   SANAD WIZARD - MAIN LAYOUT & DESIGN SYSTEM
========================================================= */

body {
    background: var(--bg-secondary, #f8fafc);
    color: var(--text-primary, #0f172a);
    font-family: inherit;
}

.sanad-page {
    width: min(1000px, calc(100% - 32px));
    margin: 0 auto;
    padding: 24px 0 60px;
}

/* =========================================================
   STEPS HEADER BAR
========================================================= */

.sanad-steps {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    margin-bottom: 32px;
    padding: 12px 16px;
    background: var(--bg-surface, #ffffff);
    border: 1px solid var(--border-light, #e2e8f0);
    border-radius: 18px;
    box-shadow: 0 4px 20px -5px rgba(0, 0, 0, 0.03);
    overflow-x: auto;
    scrollbar-width: none;
}

.sanad-steps::-webkit-scrollbar {
    display: none;
}

.sanad-step {
    display: flex;
    align-items: center;
    gap: 8px;
    flex: 0 0 auto;
    color: var(--text-muted, #94a3b8);
    font-size: 0.82rem;
    font-weight: 700;
    cursor: pointer;
    background: transparent;
    border: none;
    outline: none;
    padding: 6px 12px;
    border-radius: 12px;
    transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
}

.sanad-step:hover {
    color: var(--primary-accent, #2563eb);
    background: var(--primary-accent-soft, rgba(37, 99, 235, 0.05));
}

.sanad-step.active {
    color: var(--primary-accent, #2563eb);
    background: var(--primary-accent-soft, rgba(37, 99, 235, 0.08));
}

.sanad-step.completed {
    color: var(--text-primary, #1e293b);
}

.sanad-step-number {
    width: 26px;
    height: 26px;
    display: grid;
    place-items: center;
    border-radius: 50%;
    border: 1.5px solid var(--border-light, #cbd5e1);
    background: var(--bg-surface, #ffffff);
    color: var(--text-muted, #64748b);
    font-size: 0.72rem;
    font-weight: 800;
    transition: all 0.25s ease;
}

.sanad-step.active .sanad-step-number {
    background: var(--primary-accent, #2563eb);
    border-color: var(--primary-accent, #2563eb);
    color: #ffffff;
    box-shadow: 0 0 12px rgba(37, 99, 235, 0.35);
}

.sanad-step.completed .sanad-step-number {
    background: var(--primary-accent-soft, rgba(37, 99, 235, 0.15));
    border-color: var(--primary-accent, #2563eb);
    color: var(--primary-accent, #2563eb);
}

.sanad-arrow {
    flex: 0 0 auto;
    color: var(--border-medium, #cbd5e1);
    font-size: 0.85rem;
}

/* =========================================================
   STEP SECTIONS & ANIMATION CONTAINERS
========================================================= */

.wizard-step-content {
    display: none;
    opacity: 0;
    transform: translateY(16px);
    transition: opacity 0.35s ease, transform 0.35s ease;
}

.wizard-step-content.active {
    display: block;
    opacity: 1;
    transform: translateY(0);
}

/* Hero Section */
.sanad-hero {
    text-align: center;
    max-width: 680px;
    margin: 0 auto 28px;
}

.sanad-badge {
    display: inline-flex;
    align-items: center;
    padding: 6px 14px;
    margin-bottom: 14px;
    border-radius: 20px;
    background: var(--primary-accent-soft, rgba(37, 99, 235, 0.1));
    color: var(--primary-accent, #2563eb);
    font-size: 0.75rem;
    font-weight: 700;
}

.sanad-hero h1 {
    margin: 0 0 12px;
    color: var(--text-primary, #0f172a);
    font-size: clamp(1.75rem, 4vw, 2.3rem);
    line-height: 1.3;
    font-weight: 850;
}

.sanad-hero p {
    color: var(--text-secondary, #475569);
    font-size: 0.95rem;
    line-height: 1.8;
}

/* =========================================================
   CARDS & FORMS
========================================================= */

.sanad-card {
    padding: 24px;
    background: var(--bg-surface, #ffffff);
    border: 1px solid var(--border-light, #e2e8f0);
    border-radius: 20px;
    box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.04);
    margin-bottom: 20px;
}

/* Privacy Grid */
.sanad-privacy-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 20px;
}

.sanad-privacy-icon {
    width: 42px;
    height: 42px;
    flex: 0 0 42px;
    display: grid;
    place-items: center;
    border-radius: 12px;
    background: var(--primary-accent-soft, rgba(37, 99, 235, 0.1));
    color: var(--primary-accent, #2563eb);
}

.sanad-privacy-title {
    margin: 0;
    font-size: 1.05rem;
    font-weight: 800;
}

.sanad-privacy-subtitle {
    margin: 2px 0 0;
    color: var(--text-muted, #64748b);
    font-size: 0.75rem;
}

.sanad-privacy-list {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
}

.sanad-privacy-item {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 10px 12px;
    border-radius: 10px;
    background: var(--bg-secondary, #f8fafc);
    color: var(--text-secondary, #334155);
    font-size: 0.78rem;
    font-weight: 600;
}

.sanad-privacy-check {
    width: 20px;
    height: 20px;
    flex: 0 0 20px;
    display: grid;
    place-items: center;
    border-radius: 50%;
    background: var(--primary-accent-soft, rgba(37, 99, 235, 0.12));
    color: var(--primary-accent, #2563eb);
}

/* Form Controls */
.sanad-form-section {
    margin-bottom: 24px;
}

.sanad-label {
    display: block;
    margin-bottom: 8px;
    color: var(--text-primary, #0f172a);
    font-size: 0.9rem;
    font-weight: 800;
}

.sanad-hint {
    margin: -4px 0 12px;
    color: var(--text-muted, #64748b);
    font-size: 0.72rem;
}

.sanad-mode-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 12px;
}

.sanad-option {
    position: relative;
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 14px;
    cursor: pointer;
    background: var(--bg-secondary, #f8fafc);
    border: 1.5px solid var(--border-light, #e2e8f0);
    border-radius: 14px;
    transition: all 0.2s ease;
}

.sanad-option:hover {
    border-color: var(--primary-accent, #2563eb);
    transform: translateY(-2px);
}

.sanad-option.selected {
    background: var(--primary-accent-soft, rgba(37, 99, 235, 0.08));
    border-color: var(--primary-accent, #2563eb);
}

.sanad-option input {
    position: absolute;
    opacity: 0;
}

.sanad-option-radio {
    width: 20px;
    height: 20px;
    flex: 0 0 20px;
    border: 2px solid var(--border-medium, #cbd5e1);
    border-radius: 50%;
    display: grid;
    place-items: center;
    transition: all 0.2s ease;
}

.sanad-option.selected .sanad-option-radio {
    border-color: var(--primary-accent, #2563eb);
}

.sanad-option.selected .sanad-option-radio::after {
    content: "";
    width: 9px;
    height: 9px;
    border-radius: 50%;
    background: var(--primary-accent, #2563eb);
}

.sanad-region-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 10px;
}

.sanad-region-btn {
    padding: 10px 12px;
    border: 1px solid var(--border-light, #e2e8f0);
    border-radius: 10px;
    background: var(--bg-secondary, #f8fafc);
    color: var(--text-secondary, #475569);
    font-size: 0.75rem;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.2s ease;
}

.sanad-region-btn:hover,
.sanad-region-btn.active {
    background: var(--primary-accent-soft, rgba(37, 99, 235, 0.1));
    border-color: var(--primary-accent, #2563eb);
    color: var(--primary-accent, #2563eb);
}

/* =========================================================
   STEP 2: CHAT INTERFACE SIMULATION
========================================================= */

.sanad-chat-card {
    display: flex;
    flex-direction: column;
    height: 520px;
    background: var(--bg-surface, #ffffff);
    border: 1px solid var(--border-light, #e2e8f0);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.05);
}

.chat-header {
    padding: 16px 20px;
    background: var(--bg-surface, #ffffff);
    border-bottom: 1px solid var(--border-light, #e2e8f0);
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.chat-user-info {
    display: flex;
    align-items: center;
    gap: 12px;
}

.chat-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: var(--primary-accent, #2563eb);
    color: white;
    display: grid;
    place-items: center;
    font-weight: 800;
}

.chat-body {
    flex: 1;
    padding: 20px;
    overflow-y: auto;
    display: flex;
    flex-direction: column;
    gap: 14px;
    background: var(--bg-secondary, #f8fafc);
}

.msg {
    max-width: 80%;
    padding: 12px 16px;
    border-radius: 16px;
    font-size: 0.88rem;
    line-height: 1.6;
    animation: fadeInMsg 0.3s ease;
}

@keyframes fadeInMsg {
    from { opacity: 0; transform: translateY(6px); }
    to { opacity: 1; transform: translateY(0); }
}

.msg-bot {
    align-self: flex-start;
    background: var(--bg-surface, #ffffff);
    border: 1px solid var(--border-light, #e2e8f0);
    color: var(--text-primary, #0f172a);
    border-top-right-radius: 4px;
}

.msg-user {
    align-self: flex-end;
    background: var(--primary-accent, #2563eb);
    color: #ffffff;
    border-top-left-radius: 4px;
}

.chat-footer {
    padding: 14px;
    background: var(--bg-surface, #ffffff);
    border-top: 1px solid var(--border-light, #e2e8f0);
    display: flex;
    gap: 10px;
}

.chat-input {
    flex: 1;
    border: 1px solid var(--border-light, #cbd5e1);
    border-radius: 12px;
    padding: 10px 14px;
    font-size: 0.88rem;
    outline: none;
}

.chat-input:focus {
    border-color: var(--primary-accent, #2563eb);
}

/* =========================================================
   STEP 3: ASSESSMENT SELECTION CHIPS
========================================================= */

.assessment-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 20px;
}

.assessment-chip {
    padding: 10px 18px;
    border-radius: 30px;
    border: 1.5px solid var(--border-light, #cbd5e1);
    background: var(--bg-surface, #ffffff);
    color: var(--text-secondary, #475569);
    font-size: 0.82rem;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.2s ease;
}

.assessment-chip.selected {
    background: var(--primary-accent, #2563eb);
    color: #ffffff;
    border-color: var(--primary-accent, #2563eb);
}

/* =========================================================
   STEP 4: SPECIALISTS GRID
========================================================= */

.specialists-filters {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 24px;
    overflow-x: auto;
    padding-bottom: 6px;
}

.filter-chip {
    padding: 8px 16px;
    border-radius: 20px;
    border: 1px solid var(--border-light, #cbd5e1);
    background: var(--bg-surface, #ffffff);
    color: var(--text-muted, #64748b);
    font-size: 0.78rem;
    font-weight: 700;
    cursor: pointer;
    white-space: nowrap;
    transition: all 0.2s ease;
}

.filter-chip.active {
    background: var(--primary-accent, #2563eb);
    color: #ffffff;
    border-color: var(--primary-accent, #2563eb);
}

.specialists-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 16px;
}

.specialist-card {
    background: var(--bg-surface, #ffffff);
    border: 1px solid var(--border-light, #e2e8f0);
    border-radius: 18px;
    padding: 20px;
    box-shadow: 0 4px 15px -3px rgba(0,0,0,0.03);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.specialist-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px -5px rgba(0,0,0,0.08);
}

.specialist-head {
    display: flex;
    gap: 12px;
    margin-bottom: 14px;
}

.specialist-avatar-placeholder {
    width: 48px;
    height: 48px;
    border-radius: 14px;
    display: grid;
    place-items: center;
    font-weight: 800;
    font-size: 0.95rem;
}

.specialist-meta h3 {
    margin: 0;
    font-size: 0.95rem;
    font-weight: 800;
}

.specialist-title {
    font-size: 0.75rem;
    color: var(--text-muted, #64748b);
    margin: 2px 0 6px;
}

.badge {
    padding: 3px 8px;
    border-radius: 6px;
    font-size: 0.68rem;
    font-weight: 700;
}

.badge-online {
    background: rgba(34, 197, 94, 0.12);
    color: #16a34a;
}

.specialist-details-list {
    border-top: 1px solid var(--border-light, #f1f5f9);
    border-bottom: 1px solid var(--border-light, #f1f5f9);
    padding: 10px 0;
    margin-bottom: 16px;
    font-size: 0.78rem;
    display: flex;
    flex-direction: column;
    gap: 6px;
}

.detail-line {
    display: flex;
    justify-content: space-between;
}

/* BUTTONS */
.btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 10px 20px;
    border-radius: 12px;
    font-size: 0.85rem;
    font-weight: 800;
    cursor: pointer;
    border: none;
    transition: all 0.2s ease;
}

.btn-primary {
    background: var(--primary-accent, #2563eb);
    color: #ffffff;
}

.btn-primary:hover {
    opacity: 0.92;
    transform: translateY(-1px);
}

.btn-secondary {
    background: var(--bg-secondary, #f1f5f9);
    color: var(--text-primary, #1e293b);
}

.btn-secondary:hover {
    background: #e2e8f0;
}

.sanad-action-nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 24px;
    gap: 12px;
}

/* =========================================================
   RESPONSIVE DESIGN
========================================================= */

@media (max-width: 768px) {
    .sanad-privacy-list,
    .sanad-region-grid,
    .sanad-mode-grid {
        grid-template-columns: 1fr;
    }

    .specialists-grid {
        grid-template-columns: 1fr;
    }
}

/* =========================================================
   BOOKING MODAL
========================================================= */

.booking-modal-overlay {
    position: fixed;
    inset: 0;
    z-index: 9999;

    display: flex;
    align-items: center;
    justify-content: center;

    padding: 20px;

    background: rgba(39, 30, 25, 0.42);
    backdrop-filter: blur(7px);
    -webkit-backdrop-filter: blur(7px);

    opacity: 0;
    visibility: hidden;
    pointer-events: none;

    transition:
        opacity 0.25s ease,
        visibility 0.25s ease;
}

.booking-modal-overlay.open {
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
}

.booking-modal {
    width: min(520px, 100%);

    max-height: calc(100vh - 40px);
    overflow-y: auto;

    background: var(--bg-surface, #ffffff);
    border: 1px solid var(--border-light, #e2e8f0);
    border-radius: 24px;

    padding: 26px;

    box-shadow:
        0 30px 80px rgba(39, 30, 25, 0.18);

    transform: translateY(18px) scale(.98);

    transition:
        transform 0.28s cubic-bezier(.16,1,.3,1);
}

.booking-modal-overlay.open .booking-modal {
    transform: translateY(0) scale(1);
}

/* Header */

.booking-modal-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 20px;

    margin-bottom: 22px;
}

.booking-modal-eyebrow {
    display: block;

    margin-bottom: 5px;

    color: var(--primary-accent);
    font-size: .72rem;
    font-weight: 700;
}

.booking-modal-header h2 {
    margin: 0;

    color: var(--text-primary);
    font-size: 1.25rem;
    font-weight: 800;
}

.booking-modal-close {
    width: 34px;
    height: 34px;

    display: grid;
    place-items: center;

    flex: 0 0 34px;

    border: 1px solid var(--border-light);
    border-radius: 10px;

    background: var(--bg-secondary);
    color: var(--text-secondary);

    font-size: 1.4rem;
    line-height: 1;

    cursor: pointer;

    transition: all .2s ease;
}

.booking-modal-close:hover {
    background: var(--primary-accent-soft);
    color: var(--primary-accent);
}

/* Specialist */

.booking-specialist {
    display: flex;
    align-items: center;
    gap: 13px;

    padding: 14px;

    background: var(--bg-secondary);
    border: 1px solid var(--border-light);
    border-radius: 16px;
}

.booking-avatar {
    width: 48px;
    height: 48px;

    flex: 0 0 48px;

    display: grid;
    place-items: center;

    border-radius: 14px;

    background: var(--primary-accent-soft);
    color: var(--primary-accent);

    font-size: .9rem;
    font-weight: 800;
}

.booking-specialist strong {
    display: block;

    margin-bottom: 2px;

    color: var(--text-primary);
    font-size: .9rem;
    font-weight: 800;
}

.booking-specialist > div:last-child > span:not(.booking-online) {
    display: block;

    margin-bottom: 5px;

    color: var(--text-muted);
    font-size: .72rem;
}

.booking-online {
    display: inline-flex;
    align-items: center;
    gap: 5px;

    color: var(--wellness-green);
    font-size: .68rem;
    font-weight: 700;
}

.booking-online > span {
    width: 6px;
    height: 6px;

    border-radius: 50%;

    background: var(--wellness-green);
}

/* Divider */

.booking-divider {
    height: 1px;

    margin: 20px 0;

    background: var(--border-light);
}

/* Sections */

.booking-section {
    margin-bottom: 20px;
}

.booking-section > label {
    display: flex;
    align-items: center;
    justify-content: space-between;

    margin-bottom: 9px;

    color: var(--text-primary);
    font-size: .82rem;
    font-weight: 800;
}

.booking-section > label span {
    color: var(--text-muted);
    font-size: .68rem;
    font-weight: 500;
}

/* Booking options */

.booking-options {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
}

.booking-option {
    display: flex;
    align-items: center;
    gap: 10px;

    padding: 12px;

    border: 1.5px solid var(--border-light);
    border-radius: 14px;

    background: var(--bg-surface);

    cursor: pointer;

    transition: all .2s ease;
}

.booking-option:hover {
    border-color: var(--primary-accent);
}

.booking-option.selected {
    border-color: var(--primary-accent);
    background: var(--primary-accent-soft);
}

.booking-option input {
    display: none;
}

.booking-option-icon {
    width: 34px;
    height: 34px;

    flex: 0 0 34px;

    display: grid;
    place-items: center;

    border-radius: 10px;

    background: var(--bg-secondary);
    color: var(--text-muted);
}

.booking-option.selected .booking-option-icon {
    background: var(--bg-surface);
    color: var(--primary-accent);
}

.booking-option-icon svg {
    width: 18px;
    height: 18px;
}

.booking-option strong {
    display: block;

    color: var(--text-primary);
    font-size: .76rem;
    font-weight: 800;
}

.booking-option small {
    display: block;

    margin-top: 2px;

    color: var(--text-muted);
    font-size: .63rem;
}

/* Textarea */

.booking-section textarea {
    width: 100%;
    min-height: 90px;

    resize: vertical;

    padding: 12px 14px;

    border: 1px solid var(--border-light);
    border-radius: 13px;

    background: var(--bg-surface);
    color: var(--text-primary);

    font-family: inherit;
    font-size: .78rem;
    line-height: 1.7;

    outline: none;

    transition: border-color .2s ease, box-shadow .2s ease;
}

.booking-section textarea::placeholder {
    color: var(--text-muted);
}

.booking-section textarea:focus {
    border-color: var(--primary-accent);

    box-shadow: 0 0 0 3px var(--primary-accent-soft);
}

/* Privacy */

.booking-privacy {
    display: flex;
    align-items: flex-start;
    gap: 10px;

    padding: 13px;

    margin-bottom: 20px;

    border-radius: 13px;

    background: var(--wellness-green-soft);
    border: 1px solid var(--wellness-green-border);
}

.booking-privacy > svg {
    width: 20px;
    height: 20px;

    flex: 0 0 20px;

    color: var(--wellness-green);
}

.booking-privacy strong {
    display: block;

    margin-bottom: 2px;

    color: var(--wellness-green);
    font-size: .75rem;
    font-weight: 800;
}

.booking-privacy p {
    margin: 0;

    color: var(--text-secondary);
    font-size: .68rem;
    line-height: 1.6;
}

/* Actions */

.booking-actions {
    display: grid;
    grid-template-columns: .7fr 1.3fr;
    gap: 10px;
}

.booking-actions .btn {
    min-height: 44px;
}

/* Mobile */

@media (max-width: 560px) {

    .booking-modal {
        padding: 20px;
        border-radius: 20px;
    }

    .booking-options {
        grid-template-columns: 1fr;
    }

    .booking-actions {
        grid-template-columns: 1fr;
    }

}

</style>

<div class="sanad-page">

    {{-- =====================================================
         STEPS HEADER BAR (WIZARD CONTROL)
    ====================================================== --}}
    <div class="sanad-steps">
        <button class="sanad-step active" onclick="goToStep(1)" id="nav-step-1">
            <span class="sanad-step-number" id="num-step-1">1</span>
            <span>البداية المجهولة</span>
        </button>

        <span class="sanad-arrow">←</span>

        <button class="sanad-step" onclick="goToStep(2)" id="nav-step-2">
            <span class="sanad-step-number" id="num-step-2">2</span>
            <span>محادثة سَنَد</span>
        </button>

        <span class="sanad-arrow">←</span>

        <button class="sanad-step" onclick="goToStep(3)" id="nav-step-3">
            <span class="sanad-step-number" id="num-step-3">3</span>
            <span>تقييم الاحتياج</span>
        </button>

        <span class="sanad-arrow">←</span>

        <button class="sanad-step" onclick="goToStep(4)" id="nav-step-4">
            <span class="sanad-step-number" id="num-step-4">4</span>
            <span>الدعم والمختص</span>
        </button>
    </div>


    {{-- =====================================================
         STEP 1: ANONYMOUS START
    ====================================================== --}}
    <div class="wizard-step-content active" id="wizard-step-1">
        <section class="sanad-hero">
            <span class="sanad-badge">خطوة 1 من 4 · خصوصية كاملة</span>
            <h1>ابدأ بدون اسم</h1>
            <p>مساحة هادئة وآمنة تقدر تبدأ فيها بدون إنشاء حساب، وبدون الحاجة لمشاركة اسمك أو بياناتك الشخصية.</p>
        </section>

        <section class="sanad-card">
            <div class="sanad-privacy-header">
                <div class="sanad-privacy-icon">
                    <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <div>
                    <h2 class="sanad-privacy-title">خصوصيتك أولًا</h2>
                    <p class="sanad-privacy-subtitle">قبل أن تبدأ، هذه أهم الأشياء التي تحتاج تعرفها.</p>
                </div>
            </div>

            <div class="sanad-privacy-list">
                <div class="sanad-privacy-item"><span class="sanad-privacy-check">✓</span> لا نطلب اسمك</div>
                <div class="sanad-privacy-item"><span class="sanad-privacy-check">✓</span> لا نطلب رقم هاتفك</div>
                <div class="sanad-privacy-item"><span class="sanad-privacy-check">✓</span> لا نطلب بريدك الإلكتروني</div>
                <div class="sanad-privacy-item"><span class="sanad-privacy-check">✓</span> جلسة بدون هوية</div>
                <div class="sanad-privacy-item"><span class="sanad-privacy-check">✓</span> إنهاء الجلسة متى شئت</div>
                <div class="sanad-privacy-item"><span class="sanad-privacy-check">✓</span> بدون إنشاء حساب</div>
            </div>
        </section>

        <section class="sanad-card">
            <div class="sanad-form-section">
                <label class="sanad-label">كيف تفضل أن تتحدث مع سَنَد؟</label>
                <p class="sanad-hint">اختر الطريقة الأكثر راحة بالنسبة لك.</p>

                <div class="sanad-mode-grid">
                    <label class="sanad-option selected" data-mode-option>
                        <input type="radio" name="chatMode" value="text" checked>
                        <span class="sanad-option-radio"></span>
                        <div>
                            <div style="font-weight:800; font-size:.85rem;">كتابة</div>
                            <div style="font-size:.7rem; color:var(--text-muted);">اكتب براحتك وباللهجة الليبية.</div>
                        </div>
                    </label>

                    <label class="sanad-option" data-mode-option>
                        <input type="radio" name="chatMode" value="voice">
                        <span class="sanad-option-radio"></span>
                        <div>
                            <div style="font-weight:800; font-size:.85rem;">صوت</div>
                            <div style="font-size:.7rem; color:var(--text-muted);">تحدث بصوتك بدل الكتابة.</div>
                        </div>
                    </label>
                </div>
            </div>

            <div class="sanad-form-section">
                <label class="sanad-label">المنطقة (اختياري)</label>
                <div class="sanad-region-grid">
                    <button type="button" class="sanad-region-btn active js-region-btn" data-region="ليبيا (عام)">ليبيا (عام)</button>
                    <button type="button" class="sanad-region-btn js-region-btn" data-region="المنطقة الغربية">المنطقة الغربية</button>
                    <button type="button" class="sanad-region-btn js-region-btn" data-region="المنطقة الشرقية">المنطقة الشرقية</button>
                    <button type="button" class="sanad-region-btn js-region-btn" data-region="المنطقة الجنوبية">المنطقة الجنوبية</button>
                </div>
            </div>

            <div style="text-align: center; margin-top:20px;">
                <button type="button" class="btn btn-primary" style="width:100%; max-width:380px;" onclick="goToStep(2)">
                    الانتقال للمحادثة
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                </button>
            </div>
        </section>
    </div>


    {{-- =====================================================
         STEP 2: CHAT WITH SANAD
    ====================================================== --}}
    <div class="wizard-step-content" id="wizard-step-2">
        <section class="sanad-hero">
            <span class="sanad-badge">خطوة 2 من 4 · محادثة مباشرة</span>
            <h1>محادثة سَنَد</h1>
            <p>مساحة آمنة للتعبير والتحدث بحرية تامّة. نحن هنا لسماعك وتفهمك.</p>
        </section>

        <div class="sanad-chat-card">
            <div class="chat-header">
                <div class="chat-user-info">
                    <div class="chat-avatar">س</div>
                    <div>
                        <div style="font-weight:800; font-size:0.9rem;">مساعد سَنَد الذكي</div>
                        <div style="font-size:0.7rem; color:#22c55e;">● نشط الآن (مجهول الهوية)</div>
                    </div>
                </div>
            </div>

            <div class="chat-body" id="chatBody">
                <div class="msg msg-bot">
                    مرحباً بك! أنا سَنَد. يمكنك التحدث معي بحرية وتفريغ ما بداخل دون أي قلق، جميع المحادثات سرية ومجهولة بالكامل. كيف تشعر اليوم؟
                </div>
            </div>

            <div class="chat-footer">
                <input type="text" id="chatInput" class="chat-input" placeholder="اكتب رسالتك هنا..." onkeydown="if(event.key === 'Enter') sendMessage()">
                <button class="btn btn-primary" onclick="sendMessage()">إرسال</button>
            </div>
        </div>

        <div class="sanad-action-nav">
            <button class="btn btn-secondary" onclick="goToStep(1)">السابق</button>
            <button class="btn btn-primary" onclick="goToStep(3)">الانتقال لتقييم الاحتياج ←</button>
        </div>
    </div>


    {{-- =====================================================
         STEP 3: ASSESSMENT
    ====================================================== --}}
    <div class="wizard-step-content" id="wizard-step-3">
        <section class="sanad-hero">
            <span class="sanad-badge">خطوة 3 من 4 · تقييم الذات</span>
            <h1>تقييم الاحتياج</h1>
            <p>ساعدنا بفرز نوع الدعم الذي تبحث عنه لمساعدتك في التوجيه بالشكل الصحيح.</p>
        </section>

        <section class="sanad-card">
            <label class="sanad-label">ما الذي تشعر به أو تعاني منه مؤخراً؟ (يمكنك اختيار أكثر من خيار)</label>
            <div class="assessment-tags">
                <div class="assessment-chip" onclick="toggleAssessment(this)">القلق والتوتر</div>
                <div class="assessment-chip" onclick="toggleAssessment(this)">اضطرابات النوم</div>
                <div class="assessment-chip" onclick="toggleAssessment(this)">الضغوطات الدراسية/المهنية</div>
                <div class="assessment-chip" onclick="toggleAssessment(this)">الحزن والإنهاك</div>
                <div class="assessment-chip" onclick="toggleAssessment(this)">مشاكل العلاقات والحياة</div>
                <div class="assessment-chip" onclick="toggleAssessment(this)">الرغبة في التحدث فقط</div>
            </div>

            <div class="sanad-form-section">
                <label class="sanad-label">ملاحظات إضافية تريد مشاركتها (اختياري)</label>
                <textarea class="chat-input" style="width:100%; height:100px; resize:none;" placeholder="اكتب أي تفاصيل أخرى ترغب في ذكرها..."></textarea>
            </div>
        </section>

        <div class="sanad-action-nav">
            <button class="btn btn-secondary" onclick="goToStep(2)">السابق</button>
            <button class="btn btn-primary" onclick="goToStep(4)">عرض المختصين الموصى بهم ←</button>
        </div>
    </div>


    {{-- =====================================================
         STEP 4: SPECIALISTS AND SUPPORT
    ====================================================== --}}
    <div class="wizard-step-content" id="wizard-step-4">
        <section class="sanad-hero">
            <span class="sanad-badge">خطوة 4 من 4 · المختصين المعتمدين</span>
            <h1>مختصون جاهزون لسماعك</h1>
            <p>عندما تشعر بالحاجة لمساعدة بشرية متخصصة، يمكنك حجز جلسة استشارية سرية وآمنة مع أخصائيين ومعالجين نفسيين معتمدين.</p>
        </section>

        <!-- Filters -->
        <div class="specialists-filters">
            <button class="filter-chip active" onclick="filterSpecialists('all', this)">جميع المختصين</button>
            <button class="filter-chip" onclick="filterSpecialists('available', this)">متاح الآن</button>
            <button class="filter-chip" onclick="filterSpecialists('west', this)">المنطقة الغربية</button>
            <button class="filter-chip" onclick="filterSpecialists('east', this)">المنطقة الشرقية</button>
            <button class="filter-chip" onclick="filterSpecialists('south', this)">المنطقة الجنوبية</button>
        </div>

        <!-- Specialists Grid -->
        <div class="specialists-grid">
            <!-- Doctor 1 -->
            <div class="specialist-card" data-available="true" data-region="west">
                <div class="specialist-head">
                    <div class="specialist-avatar-placeholder" style="background:#e0e7ff; color:#3730a3;">أ.م</div>
                    <div class="specialist-meta">
                        <h3>د. أحمد محمد</h3>
                        <div class="specialist-title">أخصائي نفسي إكلينيكي</div>
                        <span class="badge badge-online">متاح الآن</span>
                    </div>
                </div>
                
                <div class="specialist-details-list">
                    <div class="detail-line"><span>الخبرة:</span> <strong>8 سنوات</strong></div>
                    <div class="detail-line"><span>المنطقة:</span> <strong>طرابلس (الغربية)</strong></div>
                    <div class="detail-line"><span>التركيز:</span> <strong>إدارة الضغوط، القلق</strong></div>
                </div>
                <button
                    type="button"
                    class="btn btn-primary"
                    style="width:100%;"
                    onclick="openBookingModal('د. أحمد محمد', 'أخصائي نفسي إكلينيكي')"
                >
                    طلب جلسة استشارية
                </button>
            </div>

            <!-- Doctor 2 -->
            <div class="specialist-card" data-available="true" data-region="east">
                <div class="specialist-head">
                    <div class="specialist-avatar-placeholder" style="background:#dcfce7; color:#166534;">س.ع</div>
                    <div class="specialist-meta">
                        <h3>أ. سارة علي</h3>
                        <div class="specialist-title">أخصائية دعم نفسي وأسري</div>
                        <span class="badge badge-online">متاحة الآن</span>
                    </div>
                </div>
                <div class="specialist-details-list">
                    <div class="detail-line"><span>الخبرة:</span> <strong>6 سنوات</strong></div>
                    <div class="detail-line"><span>المنطقة:</span> <strong>بنغازي (الشرقية)</strong></div>
                    <div class="detail-line"><span>التركيز:</span> <strong>دعم الشباب، العلاقات</strong></div>
                </div>
                
                 <button
                      type="button"
                      class="btn btn-primary"
                      style="width:100%;"
                      onclick="openBookingModal('أ. سارة علي', 'أخصائية دعم نفسي وأسري')"
                  >
                      طلب جلسة استشارية
                  </button>

            </div>

            <!-- Doctor 3 -->
            <div class="specialist-card" data-available="false" data-region="south">
                <div class="specialist-head">
                    <div class="specialist-avatar-placeholder" style="background:#fef3c7; color:#92400e;">ف.ع</div>
                    <div class="specialist-meta">
                        <h3>د. فاطمة العبيدي</h3>
                        <div class="specialist-title">أخصائية علاج الصدمات النفسية</div>
                        <span class="badge" style="background:#f1f5f9; color:#475569;">متاح غداً</span>
                    </div>
                </div>
                <div class="specialist-details-list">
                    <div class="detail-line"><span>الخبرة:</span> <strong>7 سنوات</strong></div>
                    <div class="detail-line"><span>المنطقة:</span> <strong>سبها (الجنوبية)</strong></div>
                    <div class="detail-line"><span>التركيز:</span> <strong>الصدمات، الإنهاك</strong></div>
                </div>
                
                <button
                    type="button"
                    class="btn btn-secondary"
                    style="width:100%;"
                >
                    حجز موعد
                </button>

            </div>
        </div>

        <div class="sanad-action-nav">
            <button class="btn btn-secondary" onclick="goToStep(3)">السابق</button>
            <button class="btn btn-primary" onclick="goToStep(1)">العودة للبداية ↺</button>
        </div>
    </div>

</div>
{{-- =====================================================
     BOOKING MODAL
===================================================== --}}
<div class="booking-modal-overlay" id="bookingModal">

    <div class="booking-modal">

        <div class="booking-modal-header">

            <div>
                <span class="booking-modal-eyebrow">
                    جلسة استشارية سرية
                </span>

                <h2>طلب جلسة مع المختص</h2>
            </div>

            <button
                type="button"
                class="booking-modal-close"
                onclick="closeBookingModal()"
                aria-label="إغلاق"
            >
                &times;
            </button>

        </div>

        <div class="booking-specialist">

            <div class="booking-avatar" id="bookingAvatar">
                أ
            </div>

            <div>
                <strong id="bookingSpecialistName">
                    د. أحمد محمد
                </strong>

                <span id="bookingSpecialistTitle">
                    أخصائي نفسي إكلينيكي
                </span>

                <span class="booking-online">
                    <span></span>
                    متاح الآن
                </span>
            </div>

        </div>

        <div class="booking-divider"></div>

        <div class="booking-section">

            <label>طريقة الجلسة</label>

            <div class="booking-options">

                <label class="booking-option selected">
                    <input
                        type="radio"
                        name="bookingType"
                        value="text"
                        checked
                    >

                    <span class="booking-option-icon">
                        <svg viewBox="0 0 24 24" fill="none"
                             stroke="currentColor"
                             stroke-width="1.8">
                            <path d="M21 11.5a8.38 8.38 0 0 1-9 8.5
                                     8.7 8.7 0 0 1-4-.9L3 21l1.9-4.1
                                     A8.3 8.3 0 0 1 3 11.5
                                     8.5 8.5 0 1 1 21 11.5Z"/>
                        </svg>
                    </span>

                    <span>
                        <strong>محادثة نصية</strong>
                        <small>جلسة خاصة ومجهولة</small>
                    </span>
                </label>

                <label class="booking-option">
                    <input
                        type="radio"
                        name="bookingType"
                        value="voice"
                    >

                    <span class="booking-option-icon">
                        <svg viewBox="0 0 24 24" fill="none"
                             stroke="currentColor"
                             stroke-width="1.8">
                            <path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"/>
                            <path d="M19 10v2a7 7 0 0 1-14 0v-2"/>
                            <path d="M12 19v3"/>
                            <path d="M8 22h8"/>
                        </svg>
                    </span>

                    <span>
                        <strong>مكالمة صوتية</strong>
                        <small>مكالمة خاصة ومشفرة</small>
                    </span>
                </label>

            </div>

        </div>

        <div class="booking-section">

            <label for="bookingNote">
                ملاحظة للمختص
                <span>اختياري</span>
            </label>

            <textarea
                id="bookingNote"
                placeholder="اكتب باختصار ما الذي ترغب في الحصول على مساعدة فيه..."
            ></textarea>

        </div>

        <div class="booking-privacy">

            <svg viewBox="0 0 24 24" fill="none"
                 stroke="currentColor"
                 stroke-width="1.8">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"/>
                <path d="m9 12 2 2 4-4"/>
            </svg>

            <div>
                <strong>جلسة مجهولة وسرية</strong>
                <p>
                    لن يظهر اسمك للمختص. سيتم ربط الجلسة بمعرّفك المجهول فقط.
                </p>
            </div>

        </div>

        <div class="booking-actions">

            <button
                type="button"
                class="btn btn-secondary"
                onclick="closeBookingModal()"
            >
                إلغاء
            </button>

            <button
                type="button"
                class="btn btn-primary"
                onclick="confirmBooking()"
            >
                إرسال طلب الجلسة
            </button>

        </div>

    </div>

</div>


<script>
let currentStep = 1;

/* =====================================================
   WIZARD STEP NAVIGATION WITH ANIMATIONS
===================================================== */
function goToStep(stepNumber) {
    if (stepNumber < 1 || stepNumber > 4) return;

    // Hide all contents
    document.querySelectorAll('.wizard-step-content').forEach(el => {
        el.classList.remove('active');
    });

    // Deactivate nav buttons
    for (let i = 1; i <= 4; i++) {
        const navItem = document.getElementById(`nav-step-${i}`);
        const numItem = document.getElementById(`num-step-${i}`);

        if (i < stepNumber) {
            navItem.className = 'sanad-step completed';
            numItem.innerHTML = '✓';
        } else if (i === stepNumber) {
            navItem.className = 'sanad-step active';
            numItem.innerHTML = i;
        } else {
            navItem.className = 'sanad-step';
            numItem.innerHTML = i;
        }
    }

    // Show target step
    const target = document.getElementById(`wizard-step-${stepNumber}`);
    target.classList.add('active');

    currentStep = stepNumber;
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

/* =====================================================
   STEP 1: MODE & REGION SELECTION
===================================================== */
document.addEventListener('DOMContentLoaded', function () {
    const modeOptions = document.querySelectorAll('[data-mode-option]');
    modeOptions.forEach(option => {
        option.addEventListener('click', function () {
            modeOptions.forEach(item => item.classList.remove('selected'));
            this.classList.add('selected');
            const radio = this.querySelector('input[type="radio"]');
            if (radio) radio.checked = true;
        });
    });

    const regionButtons = document.querySelectorAll('.js-region-btn');
    regionButtons.forEach(button => {
        button.addEventListener('click', function () {
            regionButtons.forEach(item => item.classList.remove('active'));
            this.classList.add('active');
        });
    });
});

/* =====================================================
   STEP 2: CHAT SIMULATION
===================================================== */
function sendMessage() {
    const input = document.getElementById('chatInput');
    const text = input.value.trim();
    if (!text) return;

    const chatBody = document.getElementById('chatBody');

    // Add user message
    const userMsg = document.createElement('div');
    userMsg.className = 'msg msg-user';
    userMsg.textContent = text;
    chatBody.appendChild(userMsg);

    input.value = '';
    chatBody.scrollTop = chatBody.scrollHeight;

    // Simulated Bot Reply
    setTimeout(() => {
        const botMsg = document.createElement('div');
        botMsg.className = 'msg msg-bot';
        botMsg.textContent = 'شكراً لمشاركتك معي. أنا هنا دائماً للاستماع إليك وتفهم ما تمر به.';
        chatBody.appendChild(botMsg);
        chatBody.scrollTop = chatBody.scrollHeight;
    }, 1000);
}

/* =====================================================
   STEP 3: ASSESSMENT TAG TOGGLE
===================================================== */
function toggleAssessment(el) {
    el.classList.toggle('selected');
}

/* =====================================================
   STEP 4: SPECIALIST FILTERING
===================================================== */
function filterSpecialists(filter, btn) {
    document.querySelectorAll('.filter-chip').forEach(c => c.classList.remove('active'));
    btn.classList.add('active');

    const cards = document.querySelectorAll('.specialist-card');
    cards.forEach(card => {
        if (filter === 'all') {
            card.style.display = 'flex';
        } else if (filter === 'available') {
            card.style.display = card.dataset.available === 'true' ? 'flex' : 'none';
        } else {
            card.style.display = card.dataset.region === filter ? 'flex' : 'none';
        }
    });
}
</script>

<script>
  /* =====================================================
   BOOKING MODAL
===================================================== */

function openBookingModal(name, title) {

    const modal = document.getElementById('bookingModal');

    const nameElement =
        document.getElementById('bookingSpecialistName');

    const titleElement =
        document.getElementById('bookingSpecialistTitle');

    const avatarElement =
        document.getElementById('bookingAvatar');

    nameElement.textContent = name;
    titleElement.textContent = title;

    // أول حرفين من اسم المختص
    avatarElement.textContent = name.replace('د. ', '').replace('أ. ', '').substring(0, 2);

    modal.classList.add('open');

    document.body.style.overflow = 'hidden';
}


function closeBookingModal() {

    const modal = document.getElementById('bookingModal');

    modal.classList.remove('open');

    document.body.style.overflow = '';
}


function confirmBooking() {

    const name =
        document.getElementById('bookingSpecialistName').textContent;

    const bookingType =
        document.querySelector('input[name="bookingType"]:checked').value;

    const note =
        document.getElementById('bookingNote').value.trim();

    closeBookingModal();

    // حالياً تجريبي
    // لاحقاً هنا نرسل الطلب إلى Laravel

    setTimeout(() => {

        alert(
            `تم إرسال طلب الجلسة إلى ${name} بنجاح.`
        );

    }, 250);
}


/* Close by clicking outside */

document.getElementById('bookingModal')
    .addEventListener('click', function (event) {

        if (event.target === this) {
            closeBookingModal();
        }

    });


/* Close with Escape */

document.addEventListener('keydown', function (event) {

    if (event.key === 'Escape') {
        closeBookingModal();
    }

});


/* Booking type selection */

document.querySelectorAll('.booking-option')
    .forEach(option => {

        option.addEventListener('click', function () {

            document
                .querySelectorAll('.booking-option')
                .forEach(item =>
                    item.classList.remove('selected')
                );

            this.classList.add('selected');

            const radio =
                this.querySelector('input[type="radio"]');

            if (radio) {
                radio.checked = true;
            }

        });

    });
</script>
@endsection