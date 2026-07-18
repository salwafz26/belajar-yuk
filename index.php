<?php
$pageTitle = 'Beranda';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>
<main class="container py-12">
    <section class="grid gap-10 lg:grid-cols-[1.2fr_0.8fr] items-center">
        <div>
            <p class="text-sm font-semibold uppercase tracking-[0.24em] text-primary">Pixel-Fantasy Adventure</p>
            <h1 class="mt-4 text-4xl font-heading text-ink">Menceritakan perjalanan kreatif melalui desain dan kode.</h1>
            <p class="mt-6 max-w-xl text-lg leading-8 text-body">Saya adalah desainer UI/UX dan developer web yang membangun portofolio interaktif, studi kasus berstruktur, dan pengalaman digital berbasis storytelling agar setiap proyek terasa seperti misi yang jelas dan berkesan.</p>
            <div class="mt-8 flex flex-wrap gap-4">
                <a href="about.php" class="btn-primary">Tentang Saya</a>
                <a href="case-studies.php" class="inline-flex items-center justify-center min-h-[48px] px-6 rounded-full border border-primary text-primary font-semibold hover:bg-primary-soft transition">Lihat Studi Kasus</a>
            </div>
        </div>

        <div class="hero-illustration section-card p-8">
            <div class="rounded-[28px] bg-gradient-brand/10 p-8 text-center">
                <div class="mx-auto mb-6 inline-flex h-32 w-32 items-center justify-center rounded-full bg-primary text-on-primary text-4xl font-heading shadow-2">P</div>
                <p class="text-sm uppercase tracking-[0.3em] text-mute">Adventure Portfolio</p>
                <h2 class="mt-4 text-2xl font-heading text-ink">Design system yang sadar cerita dan profil yang mudah dinavigasi.</h2>
                <p class="mt-4 text-body leading-7">Navigasi modern, konsep pixel-art halus, dan struktur konten yang membantu recruiter atau klien memahami keahlian dengan cepat.</p>
            </div>
        </div>
    </section>

    <section class="mt-16">
        <div class="flex flex-col gap-3">
            <p class="text-sm font-semibold uppercase tracking-[0.24em] text-mute">Iringan perjalanan</p>
            <h2 class="text-3xl font-heading text-ink">Highlight karya & proses</h2>
        </div>

        <div class="mt-8 grid gap-6 md:grid-cols-2">
            <article class="section-card p-6">
                <div class="flex items-center justify-between gap-4">
                    <div>
                        <p class="text-sm uppercase tracking-[0.24em] text-mute">Studi Kasus Unggulan</p>
                        <h3 class="mt-3 text-xl font-heading text-ink">Quest Map UI/UX</h3>
                    </div>
                    <span class="tag-status featured">Unggulan</span>
                </div>
                <p class="mt-4 text-body leading-7">Pengalaman yang dirancang sebagai peta perjalanan digital dengan sistem badge dan elemen naratif untuk menavigasi user goals.</p>
                <div class="mt-6 flex flex-wrap gap-3">
                    <span class="rounded-full bg-canvas-soft px-3 py-2 text-sm text-mute">Figma</span>
                    <span class="rounded-full bg-canvas-soft px-3 py-2 text-sm text-mute">Miro</span>
                </div>
                <a href="case-study-detail.php?id=1" class="mt-6 inline-flex items-center font-semibold text-primary hover:underline">Buka Detail →</a>
            </article>

            <article class="section-card p-6">
                <div class="flex items-center justify-between gap-4">
                    <div>
                        <p class="text-sm uppercase tracking-[0.24em] text-mute">Proyek Web</p>
                        <h3 class="mt-3 text-xl font-heading text-ink">Portfolio Website Dynamic</h3>
                    </div>
                    <span class="tag-status success">Selesai</span>
                </div>
                <p class="mt-4 text-body leading-7">Website portofolio responsif dengan tampilan bersih, navigasi intuitif, dan struktur halaman yang mudah dijelajahi.</p>
                <div class="mt-6 flex flex-wrap gap-3">
                    <span class="rounded-full bg-canvas-soft px-3 py-2 text-sm text-mute">PHP</span>
                    <span class="rounded-full bg-canvas-soft px-3 py-2 text-sm text-mute">Tailwind CSS</span>
                </div>
                <a href="project-detail.php?id=1" class="mt-6 inline-flex items-center font-semibold text-primary hover:underline">Buka Detail →</a>
            </article>
        </div>
    </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php';
