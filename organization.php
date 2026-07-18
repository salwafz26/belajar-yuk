<?php
$pageTitle = 'Organisasi';
$activities = require __DIR__ . '/data/organization.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>
<main class="container py-12">
    <section>
        <p class="text-sm font-semibold uppercase tracking-[0.24em] text-primary">Pengalaman Organisasi & Sosial</p>
        <h1 class="mt-4 text-3xl font-heading text-ink">Perjalanan kontribusi yang terstruktur seperti peta misi.</h1>
        <p class="mt-4 max-w-2xl text-body leading-7">Kegiatan organisasi dan proyek sosial ditampilkan sebagai cerita perjalanan dengan timeline yang jelas dan mudah diikuti.</p>
    </section>

    <div class="mt-10 timeline">
        <?php foreach ($activities as $index => $activity): ?>
            <div class="timeline-item <?php echo $index % 2 === 0 ? 'timeline-left' : 'timeline-right'; ?>">
                <div class="timeline-dot"></div>
                <div class="timeline-card section-card p-6">
                    <p class="text-sm uppercase tracking-[0.24em] text-mute"><?php echo $activity['year']; ?></p>
                    <h2 class="mt-2 text-xl font-heading text-ink"><?php echo $activity['title']; ?></h2>
                    <p class="mt-2 text-sm text-mute"><?php echo $activity['organization']; ?></p>
                    <p class="mt-4 text-body leading-7"><?php echo $activity['description']; ?></p>
                    <p class="mt-4 text-sm font-semibold text-primary"><?php echo $activity['status']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php require_once __DIR__ . '/includes/footer.php';
