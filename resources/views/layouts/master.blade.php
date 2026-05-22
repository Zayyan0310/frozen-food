<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Ipi Frozen Food - Kelezatan Praktis & Higienis</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .glass-card { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.3); }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary-container": "#bd1e1e", "tertiary": "#733900", "surface-bright": "#f9f9fc",
                        "secondary-fixed-dim": "#88d982", "surface-container-lowest": "#ffffff", "outline": "#8f6f6c",
                        "primary": "#97000c", "surface-variant": "#e2e2e5", "on-background": "#1a1c1e",
                        "tertiary-fixed-dim": "#ffb783", "surface-container": "#eeeef0", "error-container": "#ffdad6",
                        "on-tertiary-fixed-variant": "#713700", "on-error": "#ffffff", "secondary": "#1b6d24",
                        "surface-container-high": "#e8e8ea", "surface-dim": "#dadadc", "on-error-container": "#93000a",
                        "on-tertiary-fixed": "#301400", "error": "#ba1a1a", "on-secondary-container": "#217128",
                        "tertiary-container": "#974c00", "surface": "#f9f9fc", "surface-container-highest": "#e2e2e5",
                        "outline-variant": "#e4beb9", "surface-tint": "#ba1b1c", "on-tertiary": "#ffffff",
                        "on-secondary-fixed-variant": "#005312", "inverse-primary": "#ffb4ab", "on-primary-fixed-variant": "#93000b",
                        "on-surface": "#1a1c1e", "on-primary": "#ffffff", "secondary-container": "#a0f399",
                        "on-primary-container": "#ffd2cc", "surface-container-low": "#f3f3f6", "background": "#f9f9fc",
                        "on-secondary": "#ffffff", "on-primary-fixed": "#410002", "tertiary-fixed": "#ffdcc5",
                        "on-surface-variant": "#5b403d", "primary-fixed": "#ffdad6", "inverse-surface": "#2f3133",
                        "inverse-on-surface": "#f0f0f3", "secondary-fixed": "#a3f69c", "primary-fixed-dim": "#ffb4ab",
                        "on-secondary-fixed": "#002204", "on-tertiary-container": "#ffd3b6"
                    },
                    "spacing": {
                        "gutter-desktop": "24px", "gutter-mobile": "16px", "margin-mobile": "20px",
                        "stack-sm": "8px", "unit": "8px", "stack-md": "16px", "margin-desktop": "64px", "stack-lg": "32px"
                    },
                    "fontFamily": {
                        "body-lg": ["Inter"], "label-sm": ["Inter"], "headline-lg-mobile": ["Montserrat"],
                        "label-lg": ["Inter"], "headline-lg": ["Montserrat"], "body-md": ["Inter"],
                        "headline-md": ["Montserrat"], "display-lg": ["Montserrat"]
                    },
                    "fontSize": {
                        "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                        "label-sm": ["12px", {"lineHeight": "16px", "fontWeight": "500"}],
                        "headline-lg-mobile": ["24px", {"lineHeight": "32px", "fontWeight": "700"}],
                        "label-lg": ["14px", {"lineHeight": "20px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                        "headline-lg": ["32px", {"lineHeight": "40px", "fontWeight": "700"}],
                        "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                        "display-lg": ["56px", {"lineHeight": "64px", "letterSpacing": "-0.02em", "fontWeight": "700"}]
                    }
                },
            },
        }
    </script>
</head>
<body class="bg-background text-on-surface font-body-md overflow-x-hidden">

    @include('partials.navbar')

    <main class="pt-20">
        @yield('content')
    </main>

    @include('partials.footer')

    <script>
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 20) {
                nav.classList.add('py-2', 'bg-surface/95', 'backdrop-blur-md');
                nav.classList.remove('py-4');
            } else {
                nav.classList.remove('py-2', 'bg-surface/95', 'backdrop-blur-md');
                nav.classList.add('py-4');
            }
        });
    </script>
</body>
</html>