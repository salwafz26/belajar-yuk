<?php
$pageTitle = 'Keterampilan';
$skills = require __DIR__ . '/data/skills.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>
<main class="container py-12">
    <section>
        <p class="text-sm font-semibold uppercase tracking-[0.24em] text-primary">Keterampilan Teknis</p>
        <h1 class="mt-4 text-3xl font-heading text-ink">Tools dan kompetensi yang mendukung setiap proyek.</h1>
        <p class="mt-4 max-w-2xl text-body leading-7">Dari desain antarmuka hingga pengembangan web dan analisis data, setiap tool yang dipilih membantu menciptakan solusi yang fungsional, estetis, dan mudah dipahami.</p>
    </section>

    <div class="mt-10 grid gap-6 md:grid-cols-3">
        <?php foreach ($skills as $group): ?>
            <section class="section-card p-6">
                <h2 class="text-lg font-heading text-ink"><?php echo $group['category']; ?></h2>
                <div class="mt-6 grid gap-4">
                    <?php foreach ($group['skills'] as $skill): ?>
                        <div class="skill-badge">
                            <div class="skill-badge-icon text-2xl text-primary">
                                <i class="<?php echo $skill['icon']; ?>"></i>
                            </div>
                            <div class="skill-badge-label"><?php echo $skill['name']; ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endforeach; ?>
    </div>
</main>

<?php require_once __DIR__ . '/includes/footer.php';
