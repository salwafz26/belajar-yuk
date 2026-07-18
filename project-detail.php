<?php
$pageTitle = 'Detail Proyek';
$projects = require __DIR__ . '/data/projects.php';
$projectId = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$currentProject = null;
foreach ($projects as $project) {
    if ($project['id'] === $projectId) {
        $currentProject = $project;
        break;
    }
}
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>
<main class="container py-12">
    <?php if (!$currentProject): ?>
        <section class="section-card p-10 text-center">
            <h1 class="text-2xl font-heading text-ink">Proyek tidak ditemukan</h1>
            <p class="mt-4 text-body leading-7">Silakan kembali ke halaman proyek untuk memilih item lain.</p>
            <a href="projects.php" class="mt-6 inline-flex btn-primary">Kembali ke Proyek</a>
        </section>
    <?php else: ?>
        <section class="section-card p-8">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.24em] text-primary">Proyek Web</p>
                    <h1 class="mt-4 text-3xl font-heading text-ink"><?php echo $currentProject['title']; ?></h1>
                    <p class="mt-4 max-w-2xl text-body leading-7"><?php echo $currentProject['summary']; ?></p>
                </div>
                <span class="tag-status success">Selesai</span>
            </div>

            <div class="mt-10 grid gap-6 lg:grid-cols-[1.2fr_0.8fr]">
                <div>
                    <div class="gallery-item rounded-3xl bg-canvas-soft p-6 text-center">
                        <div class="mx-auto mb-4 flex h-52 w-full items-center justify-center rounded-3xl bg-white text-primary shadow-1">
                            <span class="text-sm text-mute">Screenshot Proyek</span>
                        </div>
                        <p class="text-sm text-mute">Ilustrasi tampilan proyek.</p>
                    </div>
                    <div class="mt-8 section-card p-6">
                        <h2 class="text-xl font-heading text-ink">Deskripsi lengkap</h2>
                        <p class="mt-4 text-body leading-7"><?php echo $currentProject['description']; ?></p>
                        <div class="mt-6 grid gap-3">
                            <div class="rounded-3xl bg-canvas-soft p-4">
                                <p class="text-sm uppercase tracking-[0.24em] text-mute">Tech stack</p>
                                <div class="mt-3 flex flex-wrap gap-2">
                                    <?php foreach ($currentProject['tech_stack'] as $tech): ?>
                                        <span class="rounded-full bg-white px-3 py-2 text-sm text-mute border border-hairline"><?php echo $tech; ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="rounded-3xl bg-white p-4 border border-hairline">
                                <p class="text-sm uppercase tracking-[0.24em] text-mute">Tautan</p>
                                <div class="mt-3 flex flex-wrap gap-3">
                                    <a href="<?php echo $currentProject['demo_url']; ?>" class="text-primary hover:underline">Demo</a>
                                    <a href="<?php echo $currentProject['repo_url']; ?>" class="text-primary hover:underline">Repo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="space-y-6">
                    <div class="section-card p-6">
                        <h3 class="text-lg font-heading text-ink">Fitur utama</h3>
                        <ul class="mt-4 list-disc space-y-3 pl-5 text-body leading-7 text-body">
                            <li>Desain responsif yang bersih dan mudah dinavigasi.</li>
                            <li>Struktur konten yang fokus pada storytelling dan hasil kerja.</li>
                            <li>Integrasi CTA proyek dengan demo dan repositori code.</li>
                        </ul>
                    </div>
                    <div class="section-card p-6">
                        <h3 class="text-lg font-heading text-ink">Nilai tambah</h3>
                        <p class="mt-4 text-body leading-7">Pendekatan pixel-fantasy menciptakan pengalaman brand yang berbeda namun tetap profesional.</p>
                    </div>
                </aside>
            </div>

            <a href="projects.php" class="mt-10 inline-flex btn-primary">Kembali ke Proyek</a>
        </section>
    <?php endif; ?>
</main>

<?php require_once __DIR__ . '/includes/footer.php';
