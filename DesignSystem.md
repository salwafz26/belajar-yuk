# Design System — Portofolio
## UI/UX Specification & Frontend Implementation Guide

**Versi Dokumen:** 1.0
**Tema Visual:** Pixel-Fantasy Adventure (terinspirasi estetika pixel art bergaya petualangan/fantasi)
**Basis Pattern:** Vercel Design System / Material 3 / Tailwind UI
**Tanggal:** 18 Juli 2026

---

## 1. Overview & Tipografi

### Overview Brand
Design system ini mengusung konsep **"Pixel-Fantasy Adventure"** — memadukan nuansa pixel art bergaya petualangan/fantasi klasik (dunia hutan, gunung, perjalanan epik) dengan prinsip desain modern yang bersih, segar, dan fungsional ala Vercel/Stripe. Filosofinya: **portofolio bukan sekadar dokumen statis, melainkan sebuah "perjalanan"** yang dinarasikan — pengunjung diajak menjelajahi kompetensi, karya, dan pengalaman pemiliknya selayaknya menjelajah babak demi babak dalam sebuah petualangan.

Sentuhan pixel-art dihadirkan secara **halus dan selektif** (aksen ikonografi, garis pixel pada divider, badge bergaya "achievement unlocked", elemen dekoratif kecil) — bukan pada keseluruhan UI — agar kesan yang terbentuk tetap **bersih, modern, dan profesional**, alih-alih terlihat seperti game retro penuh sesak. Palet warna mengambil inspirasi dari suasana hutan dan pegunungan (hijau zamrud, cokelat kayu, emas pualam) yang dipadukan dengan warna netral modern (off-white, charcoal) sehingga tetap segar dan mudah dibaca di layar apa pun.

Prinsip inti: **"Crafted Journey, Modern Execution"** — narasi petualangan sebagai konsep, tapi eksekusi visual mengikuti kedisiplinan design system kelas industri: grid presisi, tipografi terukur, dan token warna yang konsisten.

### Font Family

| Font Role | Font Family | Fallback Stack | Penggunaan |
|---|---|---|---|
| **Font 1 — Fungsional/Heading** | **Outfit** | `'Outfit', 'Inter', system-ui, sans-serif` | Heading, Hero Headline, Judul Section, Tombol, Navigasi |
| **Font 2 — Sub-heading/Editorial** | **TT Commons Pro** | `'TT Commons Pro', 'Outfit', system-ui, sans-serif` | Sub-heading, Tagline, Label kategori, Kutipan singkat |
| **Font 3 — Body/UI (pendukung)** | **Inter** | `'Inter', system-ui, sans-serif` | Body text, paragraf, form, caption, teks panjang |

> **Catatan:** Outfit dipakai untuk kesan modern-geometris pada judul besar; TT Commons Pro memberi karakter yang sedikit lebih hangat/editorial pada sub-heading, sedangkan Inter dijaga sebagai font netral untuk keterbacaan body text panjang (studi kasus, deskripsi proyek).

### Hierarki Tipografi

| Token | Font Family | Ukuran (px/rem) | Weight | Line-height | Letter-spacing | Kegunaan |
|---|---|---|---|---|---|---|
| `display-xl` | Outfit | 64px / 4rem | 700 (Bold) | 1.05 | -0.02em | Hero headline halaman Beranda |
| `display-lg` | Outfit | 48px / 3rem | 700 (Bold) | 1.1 | -0.015em | Judul section utama (Studi Kasus, Proyek) |
| `heading-lg` | Outfit | 36px / 2.25rem | 600 (SemiBold) | 1.2 | -0.01em | Judul halaman detail |
| `heading-md` | Outfit | 28px / 1.75rem | 600 (SemiBold) | 1.25 | -0.01em | Judul card/subsection |
| `heading-sm` | Outfit | 22px / 1.375rem | 600 (SemiBold) | 1.3 | 0em | Judul komponen kecil (widget, modal) |
| `subheading-lg` | TT Commons Pro | 20px / 1.25rem | 500 (Medium) | 1.4 | 0em | Tagline hero, kutipan pembuka |
| `subheading-md` | TT Commons Pro | 16px / 1rem | 500 (Medium) | 1.5 | 0.01em | Label kategori, eyebrow text |
| `body-lg` | Inter | 18px / 1.125rem | 400 (Regular) | 1.6 | 0em | Paragraf deskripsi utama |
| `body-md` | Inter | 16px / 1rem | 400 (Regular) | 1.6 | 0em | Body text standar |
| `body-sm` | Inter | 14px / 0.875rem | 400 (Regular) | 1.55 | 0.005em | Teks pendukung, deskripsi kartu |
| `button-md` | Outfit | 15px / 0.9375rem | 600 (SemiBold) | 1 | 0.01em | Label tombol |
| `caption` | Inter | 12px / 0.75rem | 500 (Medium) | 1.4 | 0.02em | Metadata, timestamp, label kecil |
| `pixel-tag` | Outfit | 11px / 0.6875rem | 700 (Bold) | 1 | 0.06em (uppercase) | Badge/tag bergaya pixel-achievement |

### Prinsip Tipografi (Do's & Don'ts)

**Do's:**
* Gunakan `display-xl`/`display-lg` **hanya satu kali per halaman** sebagai focal point utama.
* Terapkan tracking negatif (`letter-spacing` negatif) pada seluruh token `display` dan `heading` untuk kesan tipografi modern yang rapat dan tegas.
* Gunakan huruf kapital (uppercase) khusus untuk `pixel-tag` dan label kategori kecil guna memunculkan aksen gaya "game badge" secara konsisten.
* Jaga rasio kontras minimal 1.25× antar level heading yang berdekatan agar hierarki tetap jelas.

**Don'ts:**
* Jangan gunakan lebih dari 3 family font berbeda dalam satu halaman.
* Jangan terapkan huruf kapital penuh pada paragraf `body-*` — hanya untuk label/tag pendek.
* Jangan gunakan tracking positif besar pada teks panjang; hanya cocok untuk teks pendek/eyebrow.
* Jangan mencampur weight Bold dan Light secara acak dalam satu blok paragraf yang sama.

---

## 2. Sistem Warna (Colors Token)

### Brand & Aksen

| Token | Hex | Keterangan |
|---|---|---|
| `color-primary` | `#1F7A4D` | Hijau zamrud hutan — warna utama brand, dipakai pada CTA utama dan aksen navigasi |
| `color-primary-deep` | `#155C39` | Hover/active state dari primary, digunakan pada tombol saat ditekan |
| `color-primary-soft` | `#E4F3EA` | Soft highlight/background lembut untuk badge, chip aktif, section alternate |
| `color-accent-gold` | `#C9A24B` | Aksen emas pualam — dipakai untuk elemen "achievement/highlight" khas tema pixel-fantasy |
| `color-accent-gold-deep` | `#A17F34` | Hover state dari aksen emas |
| `color-accent-terracotta` | `#B5613F` | Aksen cokelat-terracotta — dipakai sebagai warna sekunder pada ilustrasi/dekorasi pixel |

### Surface

| Token | Hex | Keterangan |
|---|---|---|
| `color-canvas` | `#FAFAF7` | Latar belakang utama halaman — off-white hangat, terasa "segar" tanpa silau |
| `color-canvas-soft` | `#F1F1EC` | Latar belakang section alternate/zebra-striping antar section |
| `color-surface-card` | `#FFFFFF` | Warna dasar kartu/modal |
| `color-surface-elevated` | `#FFFFFF` | Warna modal/popover dengan elevasi tinggi (dipasangkan dengan shadow level tinggi) |
| `color-hairline` | `#E3E2DB` | Warna border/divider tipis antar elemen |
| `color-hairline-strong` | `#CFCEC4` | Border lebih tegas untuk input focus/outline card penting |

### Teks

| Token | Hex | Keterangan |
|---|---|---|
| `color-ink` | `#1C1B17` | Warna teks heading utama — hampir hitam dengan sedikit undertone hangat |
| `color-body` | `#3F3E37` | Warna teks paragraf sekunder |
| `color-mute` | `#7A7969` | Warna teks redup — caption, placeholder, metadata |
| `color-on-primary` | `#FFFFFF` | Warna teks di atas latar `color-primary`/tombol solid |
| `color-on-gold` | `#1C1B17` | Warna teks di atas latar `color-accent-gold` (kontras lebih baik dengan gelap) |

### Semantik & Status

| Token | Hex | Keterangan |
|---|---|---|
| `color-success` | `#2E8B57` | Status berhasil (form terkirim, validasi sukses) |
| `color-warning` | `#D3922A` | Status peringatan/proses (loading, draft) |
| `color-error` | `#C6473B` | Status gagal/ditolak (validasi form gagal) |
| `color-info` | `#3B7DBF` | Status informasi umum (tooltip, notifikasi netral) |

**Tabel Pemetaan Status "Progres Studi Kasus/Proyek"**

| Status | Token Warna | Background Chip | Keterangan |
|---|---|---|---|
| Draft | `color-mute` | `#EFEFE9` | Studi kasus/proyek belum dipublikasikan |
| Sedang Dikerjakan | `color-warning` | `#FBEDD9` | Proyek dalam progres aktif |
| Selesai | `color-success` | `#E1F2E8` | Studi kasus/proyek rampung dan siap ditampilkan |
| Unggulan (Featured) | `color-accent-gold` | `#F7EFDC` | Ditandai sebagai proyek/case study unggulan di beranda |

### Brand Gradient

```css
/* Gradient utama — hero section, tombol unggulan */
--gradient-brand: linear-gradient(135deg, #1F7A4D 0%, #2E8B57 45%, #C9A24B 100%);

/* Gradient lembut — background section alternate */
--gradient-soft: linear-gradient(180deg, #FAFAF7 0%, #E4F3EA 100%);

/* Gradient radial — spotlight dekoratif di belakang avatar/hero image */
--gradient-spotlight: radial-gradient(circle at 50% 40%, rgba(31,122,77,0.18) 0%, rgba(31,122,77,0) 70%);
```

---

## 3. Layout, Elevasi, & Bentuk

### Sistem Spacing
Skala berbasis kelipatan **4px**, konsisten dengan pendekatan Vercel/Tailwind default namun diberi penamaan token kustom:

| Token | Nilai | Kegunaan |
|---|---|---|
| `space-xxs` | 4px | Gap ikon-teks, padding chip kecil |
| `space-xs` | 8px | Padding tombol kecil, gap antar elemen inline |
| `space-sm` | 12px | Padding internal card kecil |
| `space-md` | 16px | Padding standar card, gap antar form field |
| `space-lg` | 24px | Padding card besar, gap antar elemen dalam section |
| `space-xl` | 32px | Margin antar blok konten dalam satu section |
| `space-2xl` | 48px | Padding vertikal section pada mobile |
| `space-3xl` | 64px | Padding vertikal section pada desktop |
| `space-4xl` | 96px | Jarak antar section besar |
| `space-5xl` / `section` | 128px | Jarak section hero ke section berikutnya |

### Grid & Container

| Breakpoint | Lebar Viewport | Max-width Container | Kolom Grid |
|---|---|---|---|
| Mobile | 0–639px | 100% (padding 16px) | 4 kolom |
| Tablet | 640–1023px | 640px–960px (padding 24px) | 8 kolom |
| Desktop | 1024–1439px | 1120px (padding 32px) | 12 kolom |
| Wide | ≥1440px | 1280px (centered) | 12 kolom |

Gutter antar kolom: 16px (mobile), 20px (tablet), 24px (desktop/wide).

### Elevasi & Bayangan (Elevation)
Menggunakan teknik **stacked shadows** (beberapa layer offset tipis) dipadukan **inset hairline ring** agar tepi elemen tetap tajam meski bayangan lembut.

```css
--shadow-0: none; /* Flat — elemen menyatu dengan canvas */

--shadow-1:
  0 0 0 1px rgba(28,27,23,0.04),
  0 1px 2px rgba(28,27,23,0.06);
/* Card list item, chip */

--shadow-2:
  0 0 0 1px rgba(28,27,23,0.05),
  0 2px 4px rgba(28,27,23,0.06),
  0 4px 8px rgba(28,27,23,0.05);
/* Card marketing, card dashboard */

--shadow-3:
  0 0 0 1px rgba(28,27,23,0.06),
  0 4px 8px rgba(28,27,23,0.07),
  0 8px 16px rgba(28,27,23,0.06);
/* Dropdown, popover */

--shadow-4:
  0 0 0 1px rgba(28,27,23,0.06),
  0 8px 16px rgba(28,27,23,0.08),
  0 16px 32px rgba(28,27,23,0.08);
/* Modal window, lightbox gambar */

--shadow-5:
  0 0 0 1px rgba(28,27,23,0.07),
  0 16px 32px rgba(28,27,23,0.10),
  0 24px 48px rgba(28,27,23,0.12);
/* Elemen paling tinggi: onboarding modal, command palette */
```

### Border Radius Scale

| Token | Nilai | Komponen Pencocokan |
|---|---|---|
| `radius-none` | 0px | Divider, garis pixel dekoratif |
| `radius-sm` | 6px | Input field, chip kecil, badge |
| `radius-md` | 10px | Card standar, tombol sekunder |
| `radius-lg` | 16px | Card marketing besar, modal |
| `radius-pill` | 999px | Tombol utama (pill button), tag status |
| `radius-full` | 50% | Avatar, ikon bulat, dot indicator |

---

## 4. Spesifikasi Komponen UI Standar

### Tombol (Buttons)

| Komponen | Ukuran (H×Padding) | Radius | Warna Default | Hover | Active | Focus Ring |
|---|---|---|---|---|---|---|
| **Primary Marketing Pill** | 48px, padding 24px | `radius-pill` | Background `--gradient-brand`, teks `color-on-primary` | Background `color-primary-deep` solid | Scale 0.98 + shadow-1 | 2px `color-primary-soft` outline offset 2px |
| **Secondary Pill** | 44px, padding 20px | `radius-pill` | Border 1.5px `color-primary`, teks `color-primary`, background transparan | Background `color-primary-soft` | Border `color-primary-deep` | 2px `color-primary-soft` |
| **Small Nav Button** | 36px, padding 14px | `radius-md` | Teks `color-ink`, background transparan | Background `color-canvas-soft` | Background `color-hairline` | 2px `color-primary-soft` |
| **Danger Button** | 44px, padding 20px | `radius-pill` | Background `color-error`, teks `#FFFFFF` | Background `#A83A2F` | Scale 0.98 | 2px rgba error 30% |
| **Tab Ghost/Chip** | 32px, padding 12px | `radius-pill` | Teks `color-mute`, background transparan | Background `color-canvas-soft`, teks `color-ink` | Background `color-primary-soft`, teks `color-primary-deep` | — |

### Kartu (Cards)

| Komponen | Padding | Radius | Shadow | Keterangan |
|---|---|---|---|---|
| **Card Marketing** | 32px | `radius-lg` | `shadow-2` | Hero feature card di Beranda; border hairline + gambar/ilustrasi di atas |
| **Card Dashboard/Statistik** | 20px | `radius-md` | `shadow-1` | Menampilkan angka ringkas (jumlah proyek, tools dikuasai) |
| **Card List Item** | 16px | `radius-md` | `shadow-1` (hover → `shadow-2`) | Item dalam daftar studi kasus/proyek, seluruh card clickable |
| **Card Soft** | 24px | `radius-lg` | `shadow-0` (flat, hanya background `color-canvas-soft`) | Card testimonial/kutipan ringan tanpa bayangan |

### Form Input

| Komponen | Ukuran | Radius | Border Default | Focus State | Error State |
|---|---|---|---|---|---|
| **Input Teks Standar** | H 44px, padding 14px | `radius-sm` | 1px `color-hairline` | Border `color-primary` + ring 3px `color-primary-soft` | Border `color-error` + ring 3px rgba error 15% |
| **Textarea** | Min-height 120px, padding 14px | `radius-sm` | 1px `color-hairline` | Sama seperti input teks | Sama seperti input teks |
| **Dropdown Select** | H 44px, padding 14px | `radius-sm` | 1px `color-hairline` + chevron icon `color-mute` | Border `color-primary` | Border `color-error` |
| **Label Input** | `caption` token, margin-bottom 6px | — | Teks `color-body`, weight 500 | — | — |
| **Pesan Error** | `caption` token | — | Teks `color-error`, icon warning kecil di depan teks | — | — |

### Navigasi

| Komponen | Spesifikasi |
|---|---|
| **Sticky Navbar Atas** | Height 72px, background `color-canvas` dengan opacity 92% + backdrop-blur 8px saat scroll, border-bottom 1px `color-hairline`, shadow `shadow-1` muncul setelah scroll > 40px |
| **Sidebar Navigasi** (opsional, untuk layout dashboard/admin) | Lebar 240px, background `color-surface-card`, border-right 1px `color-hairline`, padding 16px |
| **Item Menu — Hover** | Background `color-canvas-soft`, radius `radius-sm`, transisi 150ms ease |
| **Item Menu — Active** | Background `color-primary-soft`, teks `color-primary-deep`, indikator garis kiri 3px `color-primary` |
| **Footer Halaman** | Background `color-ink` (dark), teks `color-canvas` 80% opacity, padding vertikal `space-3xl`, link hover underline `color-accent-gold` |

### Tabel Data & Modal

| Komponen | Spesifikasi |
|---|---|
| **Header Tabel** | Background `color-canvas-soft`, teks `subheading-md` uppercase, padding 12px 16px, border-bottom 1px `color-hairline-strong` |
| **Cell Padding** | 12px vertikal, 16px horizontal, border-bottom 1px `color-hairline` |
| **Hover Row** | Background `color-canvas-soft`, transisi 100ms |
| **Anatomi Modal** | Overlay backdrop `rgba(28,27,23,0.45)`, panel modal `radius-lg`, `shadow-5`, padding 32px, max-width 560px, tombol close pojok kanan atas 24×24px |

---

## 5. Komponen Khusus & Unik Produk

Komponen berikut bersifat **khas** untuk Portofolio bertema pixel-fantasy adventure ini:

### a. Skill Badge — "Achievement Unlocked"
Ikon tools (Laravel, Figma, Flutter, SPSS, dll.) ditampilkan dalam bentuk **badge bergaya pixel/game-achievement**: kotak `radius-md` 64×64px dengan border 2px bergaya "pixel outline" (`box-shadow` bertingkat solid tanpa blur untuk kesan pixel-art), background `color-canvas-soft`, dan label `pixel-tag` di bawahnya. Saat hover, badge sedikit "terangkat" (translateY -2px) dan border berubah menjadi `color-accent-gold`, menyerupai efek "item ter-unlock".

### b. Journey Timeline — Pengalaman Organisasi & Sosial
Timeline vertikal (mobile) / horizontal (desktop) menyerupai **peta perjalanan (quest map)**: setiap titik kegiatan direpresentasikan sebagai node bulat `radius-full` 16px dengan garis penghubung putus-putus bergaya pixel (`border-style: dashed`, 2px, warna `color-hairline-strong`). Node yang sudah "dilewati" berwarna `color-primary`, node aktif/terbaru berwarna `color-accent-gold` dengan efek glow tipis `--gradient-spotlight`.

### c. Case Study Reveal Card
Kartu studi kasus UI/UX menggunakan **efek "before-after slider"** ringan (dua gambar wireframe vs mockup final yang bisa digeser dengan drag handle bergaya pixel — ikon kecil 24×24px dengan sudut tegas `radius-sm`). Digunakan untuk menunjukkan progres dari wireframe kasar menuju desain final secara interaktif.

### d. Quest Log — Ringkasan Proyek (Project Summary Stepper)
Pada halaman detail proyek, proses pengerjaan (Riset → Desain → Development → Deploy) ditampilkan sebagai **stepper horizontal bergaya "quest log"**: setiap tahap adalah chip `radius-pill` dengan ikon kecil, tahap yang selesai memiliki checkmark dan warna `color-success`, tahap aktif memiliki border animasi tipis `color-accent-gold` (pulse halus 2 detik), tahap belum dimulai berwarna `color-mute` dengan opacity 50%.

---

## 6. Implementasi Tailwind CSS

### Konfigurasi `tailwind.config.js`

```javascript
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php", "./assets/js/**/*.js"],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: '#1F7A4D',
          deep: '#155C39',
          soft: '#E4F3EA',
        },
        accent: {
          gold: '#C9A24B',
          'gold-deep': '#A17F34',
          terracotta: '#B5613F',
        },
        canvas: {
          DEFAULT: '#FAFAF7',
          soft: '#F1F1EC',
        },
        surface: {
          card: '#FFFFFF',
          elevated: '#FFFFFF',
        },
        hairline: {
          DEFAULT: '#E3E2DB',
          strong: '#CFCEC4',
        },
        ink: '#1C1B17',
        body: '#3F3E37',
        mute: '#7A7969',
        'on-primary': '#FFFFFF',
        'on-gold': '#1C1B17',
        success: '#2E8B57',
        warning: '#D3922A',
        error: '#C6473B',
        info: '#3B7DBF',
      },
      fontFamily: {
        heading: ['Outfit', 'Inter', 'system-ui', 'sans-serif'],
        sub: ['TT Commons Pro', 'Outfit', 'system-ui', 'sans-serif'],
        body: ['Inter', 'system-ui', 'sans-serif'],
      },
      fontSize: {
        'display-xl': ['4rem', { lineHeight: '1.05', letterSpacing: '-0.02em', fontWeight: '700' }],
        'display-lg': ['3rem', { lineHeight: '1.1', letterSpacing: '-0.015em', fontWeight: '700' }],
        'heading-lg': ['2.25rem', { lineHeight: '1.2', letterSpacing: '-0.01em', fontWeight: '600' }],
        'heading-md': ['1.75rem', { lineHeight: '1.25', letterSpacing: '-0.01em', fontWeight: '600' }],
        'heading-sm': ['1.375rem', { lineHeight: '1.3', fontWeight: '600' }],
        'subheading-lg': ['1.25rem', { lineHeight: '1.4', fontWeight: '500' }],
        'subheading-md': ['1rem', { lineHeight: '1.5', letterSpacing: '0.01em', fontWeight: '500' }],
        'body-lg': ['1.125rem', { lineHeight: '1.6', fontWeight: '400' }],
        'body-md': ['1rem', { lineHeight: '1.6', fontWeight: '400' }],
        'body-sm': ['0.875rem', { lineHeight: '1.55', letterSpacing: '0.005em', fontWeight: '400' }],
        'button-md': ['0.9375rem', { lineHeight: '1', letterSpacing: '0.01em', fontWeight: '600' }],
        caption: ['0.75rem', { lineHeight: '1.4', letterSpacing: '0.02em', fontWeight: '500' }],
        'pixel-tag': ['0.6875rem', { lineHeight: '1', letterSpacing: '0.06em', fontWeight: '700' }],
      },
      spacing: {
        xxs: '4px',
        xs: '8px',
        sm: '12px',
        md: '16px',
        lg: '24px',
        xl: '32px',
        '2xl': '48px',
        '3xl': '64px',
        '4xl': '96px',
        '5xl': '128px',
      },
      borderRadius: {
        none: '0px',
        sm: '6px',
        md: '10px',
        lg: '16px',
        pill: '999px',
      },
      boxShadow: {
        1: '0 0 0 1px rgba(28,27,23,0.04), 0 1px 2px rgba(28,27,23,0.06)',
        2: '0 0 0 1px rgba(28,27,23,0.05), 0 2px 4px rgba(28,27,23,0.06), 0 4px 8px rgba(28,27,23,0.05)',
        3: '0 0 0 1px rgba(28,27,23,0.06), 0 4px 8px rgba(28,27,23,0.07), 0 8px 16px rgba(28,27,23,0.06)',
        4: '0 0 0 1px rgba(28,27,23,0.06), 0 8px 16px rgba(28,27,23,0.08), 0 16px 32px rgba(28,27,23,0.08)',
        5: '0 0 0 1px rgba(28,27,23,0.07), 0 16px 32px rgba(28,27,23,0.10), 0 24px 48px rgba(28,27,23,0.12)',
      },
      backgroundImage: {
        'gradient-brand': 'linear-gradient(135deg, #1F7A4D 0%, #2E8B57 45%, #C9A24B 100%)',
        'gradient-soft': 'linear-gradient(180deg, #FAFAF7 0%, #E4F3EA 100%)',
        'gradient-spotlight': 'radial-gradient(circle at 50% 40%, rgba(31,122,77,0.18) 0%, rgba(31,122,77,0) 70%)',
      },
      maxWidth: {
        container: '1120px',
        'container-wide': '1280px',
      },
    },
  },
  plugins: [],
};
```

### Penggunaan Kelas Tailwind (Utility Classes)

**Button Primary**
```html
<button class="inline-flex items-center justify-center h-12 px-6 rounded-pill
  bg-gradient-brand text-on-primary font-heading text-button-md
  shadow-1 hover:brightness-95 active:scale-[0.98]
  focus:outline-none focus:ring-2 focus:ring-primary-soft focus:ring-offset-2
  transition-all duration-150">
  Lihat Studi Kasus
</button>
```

**Badge Status (Skill Badge Achievement)**
```html
<div class="flex flex-col items-center gap-xs w-16">
  <div class="w-16 h-16 rounded-md bg-canvas-soft shadow-1 flex items-center justify-center
    border-2 border-hairline-strong hover:border-accent-gold hover:-translate-y-0.5
    transition-all duration-150">
    <img src="/assets/images/skills-icons/laravel.svg" alt="Laravel" class="w-8 h-8">
  </div>
  <span class="font-heading text-pixel-tag uppercase text-mute">Laravel</span>
</div>
```

**Card Utama (Card Marketing — Studi Kasus)**
```html
<article class="bg-surface-card rounded-lg shadow-2 p-xl hover:shadow-3
  transition-shadow duration-200">
  <img src="/assets/images/case-studies/preview-01.jpg" alt="Studi Kasus UI/UX"
    class="w-full h-48 object-cover rounded-md mb-md">
  <span class="font-sub text-subheading-md uppercase text-accent-gold-deep">UI/UX Case Study</span>
  <h3 class="font-heading text-heading-md text-ink mt-xs">Redesain Aplikasi Kasir Digital</h3>
  <p class="font-body text-body-sm text-body mt-xs">
    Proses riset hingga high-fidelity mockup untuk aplikasi kasir UMKM.
  </p>
</article>
```

**Input Form**
```html
<div class="flex flex-col gap-xs">
  <label class="font-body text-caption text-body" for="email">Email</label>
  <input id="email" type="email" placeholder="nama@email.com"
    class="h-11 px-sm rounded-sm border border-hairline bg-surface-card
    font-body text-body-md text-ink placeholder:text-mute
    focus:outline-none focus:border-primary focus:ring-3 focus:ring-primary-soft
    transition-all duration-150">
  <span class="font-body text-caption text-error hidden">Format email tidak valid</span>
</div>
```

**Hero Headline**
```html
<section class="bg-gradient-soft py-5xl px-md text-center relative">
  <div class="absolute inset-0 bg-gradient-spotlight pointer-events-none"></div>
  <span class="font-sub text-subheading-lg text-accent-gold-deep">Halo, saya seorang</span>
  <h1 class="font-heading text-display-xl text-ink mt-sm">
    UI/UX Designer &amp; Web Developer
  </h1>
  <p class="font-body text-body-lg text-body mt-md max-w-2xl mx-auto">
    Merancang pengalaman digital yang bersih, fungsional, dan penuh cerita.
  </p>
</section>
```

---

## 7. Do's and Don'ts (Aturan Mutlak)

### Do's
1. **Gunakan sentuhan pixel-fantasy secara selektif** — cukup pada badge, divider, dan timeline, bukan pada seluruh layout.
2. **Jaga rasio kontras teks minimal 4.5:1** (WCAG AA) antara `color-ink`/`color-body` dengan `color-canvas`.
3. **Konsisten gunakan token spacing** kelipatan 4px — hindari nilai margin/padding acak seperti `padding: 13px`.
4. **Gunakan `shadow-1`/`shadow-2` untuk kartu di alur konten utama**, simpan `shadow-4`/`shadow-5` khusus untuk modal/lightbox.
5. **Selalu sertakan focus ring yang terlihat jelas** (`ring-2 ring-primary-soft`) pada seluruh elemen interaktif demi aksesibilitas keyboard.
6. **Gunakan gradient brand (`gradient-brand`) hanya pada 1–2 elemen fokus per halaman** (misal hero button atau hero background) agar tetap terasa istimewa, bukan berulang di semua tempat.

### Don'ts
1. **Jangan gunakan efek pixel-art literal** (seperti font pixel 8-bit penuh atau ikon pixelated kasar) pada teks body — cukup pada elemen dekoratif kecil.
2. **Jangan mencampur radius tajam (`radius-none`) dan radius sangat bulat (`radius-pill`) dalam satu grup komponen yang sama** tanpa alasan visual yang jelas.
3. **Jangan gunakan warna `color-accent-gold` sebagai warna teks body panjang** — kontrasnya terlalu rendah terhadap `color-canvas`.
4. **Jangan membuat shadow custom di luar skala `shadow-0` hingga `shadow-5`** yang telah didefinisikan — akan merusak konsistensi elevasi.
5. **Jangan gunakan lebih dari satu gradient berbeda dalam satu viewport yang sama** — akan membuat halaman terlihat ramai dan tidak fokus.
6. **Jangan mengabaikan status hover/focus/active pada tombol dan input** — setiap komponen interaktif wajib memiliki ketiga state tersebut sesuai spesifikasi Bagian 4.

---

*Dokumen ini merupakan bagian dari sistem desain hidup (living design system) dan akan diperbarui seiring evolusi visual produk Portofolio.*
