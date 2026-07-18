<?php
function page_title($title = '') {
    return $title ? "$title | Portofolio" : 'Portofolio';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Portofolio pribadi dengan fokus UI/UX, web development, dan data analysis." />
    <title><?php echo page_title($pageTitle ?? 'Beranda'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1F7A4D',
                        'primary-deep': '#155C39',
                        'primary-soft': '#E4F3EA',
                        accent: {
                            gold: '#C9A24B',
                            'gold-deep': '#A17F34',
                            terracotta: '#B5613F',
                        },
                        canvas: '#FAFAF7',
                        'canvas-soft': '#F1F1EC',
                        surface: {
                            card: '#FFFFFF',
                        },
                        hairline: '#E3E2DB',
                        'hairline-strong': '#CFCEC4',
                        ink: '#1C1B17',
                        body: '#3F3E37',
                        mute: '#7A7969',
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
                },
            },
        };
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Tx5QwQH0L2H4Ad6H+G2gOkXm0nI4DS1w5x2V/5hDGA77uzxj43Jyjq6c5grS7ZRfZohgWxoWf6fT8f8aIX5owA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body class="bg-canvas text-body font-body">
    <div class="page-wrapper min-h-screen bg-canvas">
