<?php
$pageTitle = 'Proyek';
$projects = require __DIR__ . '/data/projects.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>
<main class="container py-12">
    <section>
        <p class="text-sm font-semibold uppercase tracking-[0.24em] text-primary">Proyek Web Development</p>
        <h1 class="mt-4 text-3xl font-heading text-ink">Solusi digital yang ramping, cepat, dan estetis.</h1>
        <p class="mt-4 max-w-2xl text-body leading-7">Dari portofolio personal hingga dashboard analisis, setiap proyek menggabungkan tata letak bersih dan fungsionalitas nyata.</p>
    </section>

    <div class="mt-10 grid gap-6 lg:grid-cols-2">
        <?php foreach ($projects as $project): ?>
            <article class="section-card p-6">
                <div class="flex items-center justify-between gap-4">
                    <div>
                        <h2 class="text-xl font-heading text-ink"><?php echo $project['title']; ?></h2>
                        <p class="mt-2 text-sm text-mute"><?php echo $project['summary']; ?></p>
                    </div>
                    <span class="tag-status success">Selesai</span>
                </div>
                <p class="mt-4 text-body leading-7"><?php echo $project['description']; ?></p>
                <div class="mt-5 flex flex-wrap gap-2">
                    <?php foreach ($project['tech_stack'] as $tech): ?>
                        <span class="rounded-full bg-canvas-soft px-3 py-2 text-sm text-mute"><?php echo $tech; ?></span>
                    <?php endforeach; ?>
                </div>
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="<?php echo $project['demo_url']; ?>" class="text-primary hover:underline">Demo</a>
                    <a href="<?php echo $project['repo_url']; ?>" class="text-primary hover:underline">Repo</a>
                </div>
                <a href="project-detail.php?id=<?php echo $project['id']; ?>" class="mt-6 inline-flex items-center font-semibold text-primary hover:underline">Buka Detail →</a>
            </article>
        <?php endforeach; ?>
    </div>
</main>

<?php require_once __DIR__ . '/includes/footer.php';
