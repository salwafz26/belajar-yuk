<?php
$pageTitle = 'Studi Kasus';
$caseStudies = require __DIR__ . '/data/case-studies.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>
<main class="container py-12">
    <section>
        <p class="text-sm font-semibold uppercase tracking-[0.24em] text-primary">Studi Kasus UI/UX</p>
        <h1 class="mt-4 text-3xl font-heading text-ink">Cerita desain yang terstruktur dan mudah dinavigasi.</h1>
        <p class="mt-4 max-w-2xl text-body leading-7">Setiap studi kasus menampilkan latar belakang, proses, tooling yang digunakan, dan tema visual petualangan yang kuat.</p>
    </section>

    <div class="mt-10 grid gap-6 lg:grid-cols-2">
        <?php foreach ($caseStudies as $case): ?>
            <article class="section-card p-6">
                <div class="flex items-center justify-between gap-4">
                    <div>
                        <h2 class="text-xl font-heading text-ink"><?php echo $case['title']; ?></h2>
                        <p class="mt-2 text-sm text-mute uppercase tracking-[0.24em]"><?php echo $case['status']; ?></p>
                    </div>
                    <span class="tag-status <?php echo $case['status'] === 'Unggulan' ? 'featured' : 'success'; ?>"><?php echo $case['status']; ?></span>
                </div>
                <p class="mt-4 text-body leading-7"><?php echo $case['summary']; ?></p>
                <div class="mt-5 flex flex-wrap gap-2">
                    <?php foreach ($case['tools'] as $tool): ?>
                        <span class="rounded-full bg-canvas-soft px-3 py-2 text-sm text-mute"><?php echo $tool; ?></span>
                    <?php endforeach; ?>
                </div>
                <a href="case-study-detail.php?id=<?php echo $case['id']; ?>" class="mt-6 inline-flex items-center font-semibold text-primary hover:underline">Buka Detail →</a>
            </article>
        <?php endforeach; ?>
    </div>
</main>

<?php require_once __DIR__ . '/includes/footer.php';
