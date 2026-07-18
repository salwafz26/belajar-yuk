<?php
$pageTitle = 'Kontak';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>
<main class="container py-12">
    <section class="grid gap-10 lg:grid-cols-[0.9fr_0.8fr] items-start">
        <div>
            <p class="text-sm font-semibold uppercase tracking-[0.24em] text-primary">Kontak</p>
            <h1 class="mt-4 text-3xl font-heading text-ink">Mari mulai percakapan berikutnya.</h1>
            <p class="mt-4 text-body leading-7">Isi formulir di samping untuk mengirim pesan. Saya biasanya membalas dalam 1-2 hari kerja.</p>
            <div class="mt-8 grid gap-4">
                <div class="section-card p-6">
                    <p class="text-sm uppercase tracking-[0.24em] text-mute">Email</p>
                    <p class="mt-2 text-body">halo@portofolio.dev</p>
                </div>
                <div class="section-card p-6">
                    <p class="text-sm uppercase tracking-[0.24em] text-mute">Panggilan</p>
                    <p class="mt-2 text-body">+62 812 3456 7890</p>
                </div>
            </div>
        </div>

        <div class="section-card p-8">
            <form id="contact-form" class="space-y-6" method="post" action="api/send-message.php">
                <input type="text" name="website" class="hidden" style="display:none!important;" autocomplete="off" tabindex="-1">
                <div>
                    <label class="block text-sm font-medium text-body" for="name">Nama</label>
                    <input id="name" name="name" type="text" class="input-field mt-2" placeholder="Nama lengkap" required />
                </div>
                <div>
                    <label class="block text-sm font-medium text-body" for="email">Email</label>
                    <input id="email" name="email" type="email" class="input-field mt-2" placeholder="email@domain.com" required />
                </div>
                <div>
                    <label class="block text-sm font-medium text-body" for="subject">Subjek</label>
                    <input id="subject" name="subject" type="text" class="input-field mt-2" placeholder="Contoh: Permintaan kolaborasi" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-body" for="message">Pesan</label>
                    <textarea id="message" name="message" rows="5" class="textarea-field mt-2" placeholder="Tulis pesan Anda di sini..." required></textarea>
                </div>
                <button type="submit" class="btn-primary">Kirim Pesan</button>
                <p id="contact-feedback" class="form-note"></p>
            </form>
        </div>
    </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php';
