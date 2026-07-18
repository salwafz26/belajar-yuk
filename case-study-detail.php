<?php
$pageTitle = 'Detail Studi Kasus';
$caseStudies = require __DIR__ . '/data/case-studies.php';
$caseId = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$currentCase = null;
foreach ($caseStudies as $case) {
    if ($case['id'] === $caseId) {
        $currentCase = $case;
        break;
    }
}
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>
<main class="container py-12">
    <?php if (!$currentCase): ?>
        <section class="section-card p-10 text-center">
            <h1 class="text-2xl font-heading text-ink">Studi kasus tidak ditemukan</h1>
            <p class="mt-4 text-body leading-7">Silakan kembali ke halaman studi kasus untuk memilih item lain.</p>
            <a href="case-studies.php" class="mt-6 inline-flex btn-primary">Kembali ke Studi Kasus</a>
        </section>
    <?php else: ?>
        <section class="section-card p-8">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.24em] text-primary">Studi Kasus</p>
                    <h1 class="mt-4 text-3xl font-heading text-ink"><?php echo $currentCase['title']; ?></h1>
                    <p class="mt-4 max-w-2xl text-body leading-7"><?php echo $currentCase['summary']; ?></p>
                </div>
                <div class="tag-status featured"><?php echo $currentCase['status']; ?></div>
            </div>

            <div class="mt-10 grid gap-6 lg:grid-cols-[1.2fr_0.8fr]">
                <div>
                    <div class="gallery-grid">
                        <?php foreach ($currentCase['images'] as $image): ?>
                            <div class="gallery-item rounded-3xl bg-canvas-soft p-6 text-center">
                                <div class="mx-auto mb-4 flex h-44 w-44 items-center justify-center rounded-3xl bg-white text-primary shadow-1">
                                    <span class="text-sm text-mute"><?php echo htmlspecialchars($image); ?></span>
                                </div>
                                <p class="text-sm text-mute">Ilustrasi <?php echo htmlspecialchars($currentCase['title']); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="mt-8 section-card p-6">
                        <h2 class="text-xl font-heading text-ink">Ringkasan Proses</h2>
                        <p class="mt-4 text-body leading-7"><?php echo $currentCase['description']; ?></p>
                    </div>
                </div>
                <aside class="space-y-6">
                    <div class="section-card p-6">
                        <h3 class="text-lg font-heading text-ink">Tools yang digunakan</h3>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <?php foreach ($currentCase['tools'] as $tool): ?>
                                <span class="rounded-full bg-canvas-soft px-3 py-2 text-sm text-mute"><?php echo $tool; ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="section-card p-6">
                        <h3 class="text-lg font-heading text-ink">Meta proyek</h3>
                        <p class="mt-4 text-body leading-7">Desain yang fokus pada narasi visual, interaksi intuitif, dan nilai brand yang jelas.</p>
                    </div>
                </aside>
            </div>

            <a href="case-studies.php" class="mt-10 inline-flex btn-primary">Kembali ke Studi Kasus</a>
        </section>
    <?php endif; ?>
</main>

<?php require_once __DIR__ . '/includes/footer.php';
