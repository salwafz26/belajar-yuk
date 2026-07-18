<?php
$current = basename($_SERVER['PHP_SELF']);
$navItems = [
    ['href' => 'index.php', 'label' => 'Beranda'],
    ['href' => 'about.php', 'label' => 'Tentang'],
    ['href' => 'skills.php', 'label' => 'Keterampilan'],
    ['href' => 'case-studies.php', 'label' => 'Studi Kasus'],
    ['href' => 'projects.php', 'label' => 'Proyek'],
    ['href' => 'organization.php', 'label' => 'Organisasi'],
    ['href' => 'contact.php', 'label' => 'Kontak'],
];
?>
<header class="sticky top-0 z-40 w-full border-b border-hairline bg-canvas/95 backdrop-blur-md shadow-sm">
    <div class="mx-auto flex max-w-container items-center justify-between px-4 py-4 md:px-6">
        <a href="index.php" class="flex items-center gap-3 text-ink no-underline">
            <div class="inline-flex h-11 w-11 items-center justify-center rounded-full bg-primary text-on-primary shadow-1">
                <span class="text-lg font-heading">P</span>
            </div>
            <div>
                <p class="text-sm font-semibold uppercase tracking-[0.24em] text-mute">Portofolio</p>
                <p class="text-lg font-heading text-ink">Pixel Adventure</p>
            </div>
        </a>

        <nav class="hidden items-center gap-5 lg:flex">
            <?php foreach ($navItems as $item): ?>
                <a href="<?php echo $item['href']; ?>" class="text-sm font-medium text-body hover:text-primary <?php echo $current === basename($item['href']) ? 'text-primary' : ''; ?>">
                    <?php echo $item['label']; ?>
                </a>
            <?php endforeach; ?>
        </nav>

        <button id="mobile-menu-button" class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-hairline bg-white text-ink lg:hidden">
            <i class="fas fa-bars"></i>
        </button>
    </div>
    <div id="mobile-menu" class="hidden border-t border-hairline bg-canvas/98 lg:hidden">
        <div class="flex flex-col gap-1 px-4 py-4">
            <?php foreach ($navItems as $item): ?>
                <a href="<?php echo $item['href']; ?>" class="rounded-lg px-3 py-3 text-sm font-medium text-body hover:bg-canvas-soft hover:text-primary">
                    <?php echo $item['label']; ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</header>
