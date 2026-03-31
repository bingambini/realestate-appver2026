<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <title>The Estate - RE Assistant GE</title>
    
    <script src="https://cdn.jsdelivr.net/npm/eruda"></script>
    <script>eruda.init();</script>

    <script src="https://telegram.org/js/telegram-web-app.js"></script>
    <script>
        // ინიციალიზაცია დაუყოვნებლივ
        (function() {
            if (window.Telegram && window.Telegram.WebApp) {
                const tele = window.Telegram.WebApp;
                tele.ready();
                tele.expand();
                tele.setHeaderColor('secondary_bg_color');
                // სტატუს ბარის ფერი რომ არ იყოს თეთრი
                tele.setBackgroundColor('#111223');
            }
        })();
    </script>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;600;700;800;900&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    
    <script id="tailwind-config">
          tailwind.config = {
            darkMode: "class",
            theme: {
              extend: {
                colors: {
                  "on-secondary-container": "#003115",
                  "on-secondary": "#003919",
                  "primary-container": "#0a0676",
                  "error-container": "#93000a",
                  "surface-dim": "#111223",
                  "surface-container-low": "#191a2c",
                  "on-primary-fixed-variant": "#373a9b",
                  "tertiary-fixed-dim": "#e9c400",
                  "primary-fixed-dim": "#c0c1ff",
                  "tertiary": "#e9c400",
                  "primary-fixed": "#e1e0ff",
                  "on-error": "#690005",
                  "error": "#ffb4ab",
                  "surface": "#111223",
                  "on-tertiary-container": "#4c3f00",
                  "inverse-on-surface": "#2e2f41",
                  "outline-variant": "#46464f",
                  "outline": "#918f9a",
                  "background": "#111223",
                  "tertiary-container": "#c9a900",
                  "tertiary-fixed": "#ffe16d",
                  "surface-container-high": "#28283b",
                  "secondary-fixed-dim": "#66dd8b",
                  "on-primary": "#1e2084",
                  "surface-variant": "#323346",
                  "primary": "#c0c1ff",
                  "on-surface": "#e1e0f9",
                  "on-surface-variant": "#c8c5d0",
                  "on-tertiary-fixed-variant": "#544600",
                  "on-secondary-fixed": "#00210c",
                  "on-error-container": "#ffdad6",
                  "secondary": "#66dd8b",
                  "on-primary-container": "#7a7fe2",
                  "inverse-primary": "#4f54b4",
                  "on-tertiary-fixed": "#221b00",
                  "surface-container-highest": "#323346",
                  "secondary-container": "#25a55a",
                  "inverse-surface": "#e1e0f9",
                  "on-tertiary": "#3a3000",
                  "on-primary-fixed": "#04006d",
                  "secondary-fixed": "#83fba5",
                  "surface-tint": "#c0c1ff",
                  "surface-container": "#1d1e30",
                  "surface-container-lowest": "#0c0d1d",
                  "surface-bright": "#37384b",
                  "on-secondary-fixed-variant": "#005227",
                  "on-background": "#e1e0f9"
                },
                fontFamily: {
                  "headline": ["Lexend"],
                  "body": ["Inter"],
                  "label": ["Inter"]
                },
                borderRadius: {"DEFAULT": "1rem", "lg": "2rem", "xl": "3rem", "full": "9999px"},
              },
            },
          }
    </script>
    <style>
          .glass-panel {
            background: rgba(50, 51, 70, 0.6);
            backdrop-filter: blur(20px);
          }
          .ai-orb {
            background: radial-gradient(circle at 30% 30%, #c0c1ff, #66dd8b);
            box-shadow: 0 0 40px rgba(102, 221, 139, 0.4), inset -5px -5px 15px rgba(0,0,0,0.3);
          }
          .custom-scrollbar::-webkit-scrollbar { display: none; }
          .custom-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
          body { min-height: max(884px, 100dvh); }
    </style>
</head>
