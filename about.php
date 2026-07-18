<?php
$pageTitle = 'Tentang Saya';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>
<main class="container py-12">
    <section class="grid gap-10 lg:grid-cols-[0.9fr_0.8fr] items-center">
        <div>
            <p class="text-sm font-semibold uppercase tracking-[0.24em] text-primary">Tentang Saya</p>
            <h1 class="mt-4 text-3xl font-heading text-ink">Membawa konsep petualangan ke dalam setiap desain dan pengalaman digital.</h1>
            <p class="mt-6 text-lg leading-8 text-body">Saya menggabungkan keahlian UI/UX, web development, dan analisis data untuk menciptakan portofolio yang bukan hanya menampilkan karya, tetapi juga memandu pengunjung seperti sebuah perjalanan. Setiap proyek dirancang untuk komunikatif, profesional, dan sangat mudah diikuti.</p>
            <div class="mt-8 grid gap-4 sm:grid-cols-3">
                <div class="section-card p-5">
                    <p class="text-sm uppercase tracking-[0.24em] text-mute">Keahlian</p>
                    <p class="mt-3 text-lg font-semibold text-ink">UI/UX & Code</p>
                </div>
                <div class="section-card p-5">
                    <p class="text-sm uppercase tracking-[0.24em] text-mute">Pengalaman</p>
                    <p class="mt-3 text-lg font-semibold text-ink">Desain, Web, Data</p>
                </div>
                <div class="section-card p-5">
                    <p class="text-sm uppercase tracking-[0.24em] text-mute">Pendekatan</p>
                    <p class="mt-3 text-lg font-semibold text-ink">Storytelling</p>
                </div>
            </div>
        </div>

        <div class="section-card p-8">
            <div class="mb-6 rounded-3xl bg-gradient-brand/10 p-6 text-center">
                <div class="mx-auto mb-4 inline-flex h-24 w-24 items-center justify-center rounded-full bg-primary text-on-primary text-3xl font-heading shadow-2">A</div>
                <p class="text-sm uppercase tracking-[0.24em] text-mute">Profil singkat</p>
                <p class="mt-4 text-body leading-7">Saya fokus pada pembuatan produk digital yang bersih, dapat diukur, dan menyenangkan untuk digunakan. Saya percaya bahwa desain baik adalah desain yang mendukung tujuan pengguna dan mendongkrak profesionalisme pemilik produk.</p>
            </div>
            <div class="grid gap-4">
                <div class="rounded-3xl bg-canvas-soft p-5">
                    <p class="text-sm uppercase tracking-[0.24em] text-mute">Tools favorit</p>
                    <p class="mt-2 text-body">Figma, Laravel, Tailwind CSS, SPSS</p>
                </div>
                <div class="rounded-3xl bg-canvas-soft p-5">
                    <p class="text-sm uppercase tracking-[0.24em] text-mute">Nilai kerja</p>
                    <p class="mt-2 text-body">Keteraturan, konsistensi visual, pengalaman pengguna bermakna.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-16">
        <div class="flex flex-col gap-3">
            <p class="text-sm font-semibold uppercase tracking-[0.24em] text-mute">Pendekatan desain</p>
            <h2 class="text-3xl font-heading text-ink">Bagaimana saya membentuk alur kerja yang jelas.</h2>
        </div>
        <div class="mt-8 grid gap-6 md:grid-cols-3">
            <div class="section-card p-6">
                <h3 class="text-xl font-heading text-ink">Riset</h3>
                <p class="mt-4 text-body leading-7">Memahami kebutuhan pengguna, konteks bisnis, dan tujuan utama sebelum merancang setiap interaksi.</p>
            </div>
            <div class="section-card p-6">
                <h3 class="text-xl font-heading text-ink">Desain</h3>
                <p class="mt-4 text-body leading-7">Membuat antarmuka yang bersih, naratif, dan mudah dinavigasi dengan estetika pixel-fantasy yang halus.</p>
            </div>
            <div class="section-card p-6">
                <h3 class="text-xl font-heading text-ink">Implementasi</h3>
                <p class="mt-4 text-body leading-7">Membangun hasil desain menjadi situs web responsif menggunakan PHP, Tailwind CSS, dan JavaScript ringan.</p>
            </div>
        </div>
    </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php';
