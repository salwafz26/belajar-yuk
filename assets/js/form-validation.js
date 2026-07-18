const contactForm = document.getElementById('contact-form');
const feedback = document.getElementById('contact-feedback');

if (contactForm) {
    contactForm.addEventListener('submit', async (event) => {
        event.preventDefault();

        const formData = new FormData(contactForm);
        const email = formData.get('email') || '';
        const name = formData.get('name') || '';
        const message = formData.get('message') || '';

        if (!name.trim() || !email.trim() || !message.trim()) {
            feedback.textContent = 'Nama, email, dan pesan wajib diisi.';
            feedback.className = 'form-note text-error';
            return;
        }

        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            feedback.textContent = 'Format email tidak valid.';
            feedback.className = 'form-note text-error';
            return;
        }

        feedback.textContent = 'Mengirim pesan...';
        feedback.className = 'form-note text-info';

        try {
            const response = await fetch('api/send-message.php', {
                method: 'POST',
                body: formData,
            });
            const result = await response.json();
            if (result.status === 'success') {
                feedback.textContent = result.message;
                feedback.className = 'form-note text-success';
                contactForm.reset();
            } else {
                feedback.textContent = result.message;
                feedback.className = 'form-note text-error';
            }
        } catch (error) {
            feedback.textContent = 'Terjadi kesalahan saat mengirim pesan.';
            feedback.className = 'form-note text-error';
        }
    });
}
