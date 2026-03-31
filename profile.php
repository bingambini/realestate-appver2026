<!DOCTYPE html>
<html class="dark" lang="ka">
<?php include 'includes/head.php'; ?>
<body class="bg-surface text-on-surface font-body selection:bg-secondary/30">

<header class="fixed top-0 w-full z-50 bg-[#111223]/60 backdrop-blur-xl flex justify-between items-center px-6 py-4 shadow-[0px_10px_40px_rgba(233,196,0,0.08)]">
    <div class="flex items-center gap-3">
        <span class="material-symbols-outlined text-[#c0c1ff] text-2xl">location_city</span>
        <h1 class="font-headline font-black bg-gradient-to-r from-[#c0c1ff] to-[#66dd8b] bg-clip-text text-transparent text-lg uppercase tracking-wide">The Estate</h1>
    </div>
    <div class="flex items-center gap-4">
        <button class="material-symbols-outlined text-[#c0c1ff]/70 hover:opacity-80 transition-opacity active:scale-95">notifications</button>
    </div>
</header>

<main class="pt-20 pb-32 px-4 max-w-lg mx-auto space-y-6">
    <section class="grid grid-cols-1 gap-4">
        <div class="glass-panel p-6 rounded-xl relative overflow-hidden border border-white/5">
            <div class="flex items-center justify-between mb-6">
                <h3 class="font-headline font-bold text-[10px] uppercase tracking-widest text-primary">RE Points ლოიალობა</h3>
                <div class="flex items-center gap-1 text-tertiary font-bold">
                    <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">stars</span>
                    <span class="text-[10px] uppercase">Elite სტატუსი</span>
                </div>
            </div>

            <div class="flex items-center gap-6 relative z-10">
                <div class="relative w-24 h-24 flex items-center justify-center flex-shrink-0">
                    <svg class="w-full h-full transform -rotate-90 absolute top-0 left-0">
                        <circle class="text-surface-container-highest" cx="48" cy="48" fill="transparent" r="42" stroke="currentColor" stroke-width="5"></circle>
                        <circle cx="48" cy="48" fill="transparent" r="42" stroke="url(#profile_grad)" stroke-dasharray="264" stroke-dashoffset="60" stroke-linecap="round" stroke-width="6"></circle>
                        <defs>
                            <linearGradient id="profile_grad" x1="0%" x2="100%" y1="0%" x2="100%" y1="0%" y2="100%">
                                <stop offset="0%" stop-color="#c0c1ff" />
                                <stop offset="100%" stop-color="#66dd8b" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <div class="relative w-[72px] h-[72px] rounded-full overflow-hidden border-2 border-surface/50 bg-surface-container-high">
                        <img id="user-photo" src="" alt="" class="w-full h-full object-cover hidden">
                        <span id="user-placeholder" class="material-symbols-outlined text-4xl flex items-center justify-center h-full text-on-surface-variant">person</span>
                    </div>
                </div>

                <div class="flex-1 space-y-2">
                    <div>
                        <div class="flex items-center gap-1.5">
                            <h2 id="user-name" class="font-headline text-lg font-bold text-white">სტუმარი</h2>
                            <span class="material-symbols-outlined text-tertiary text-base" style="font-variation-settings: 'FILL' 1;">verified</span>
                        </div>
                        <p class="text-on-surface-variant text-[10px] font-medium">+995 5xx xx xx xx</p>
                    </div>
                    <div class="space-y-1">
                        <span class="text-on-surface-variant text-[9px] font-semibold uppercase tracking-wider">მიმდინარე რანგი</span>
                        <div class="font-headline text-md font-bold text-secondary tracking-tight">Gold წევრი</div>
                    </div>
                </div>
            </div>
            
            <div class="mt-4 bg-surface-container-high/60 rounded-full px-4 py-2 flex items-center justify-between border border-white/5">
                <span class="text-[10px] font-bold text-white uppercase">2,450 ქულა</span>
                <span class="text-[9px] font-black text-primary uppercase">კიდევ 550 XP</span>
            </div>
        </div>
    </section>

    <section class="grid grid-cols-4 gap-2 px-1">
        <?php
        $quick_links = [
            ['icon' => 'domain', 'label' => 'ჩემი განცხ.', 'color' => 'text-primary'],
            ['icon' => 'favorite', 'label' => 'შენახული', 'color' => 'text-secondary'],
            ['icon' => 'search_check', 'label' => 'მოთხოვნები', 'color' => 'text-tertiary'],
            ['icon' => 'analytics', 'label' => 'ანალიტიკა', 'color' => 'text-on-surface-variant'],
        ];
        foreach ($quick_links as $link): ?>
        <div class="flex flex-col items-center gap-2 group cursor-pointer">
            <div class="w-14 h-14 glass-panel rounded-2xl flex items-center justify-center <?php echo $link['color']; ?> group-hover:scale-105 transition-transform border border-white/5 shadow-lg">
                <span class="material-symbols-outlined text-2xl"><?php echo $link['icon']; ?></span>
            </div>
            <span class="font-headline text-[9px] font-bold text-on-surface/80 uppercase tracking-tighter text-center leading-none"><?php echo $link['label']; ?></span>
        </div>
        <?php endforeach; ?>
    </section>

    <section class="space-y-1 overflow-hidden rounded-xl border border-white/5">
        <div class="bg-surface-container-high/40 p-4 flex items-center justify-between group cursor-pointer hover:bg-surface-container-high/60 transition-colors">
            <div class="flex items-center gap-4">
                <span class="material-symbols-outlined text-primary">notifications_active</span>
                <span class="text-sm font-medium text-white">შეტყობინებები</span>
            </div>
            <span class="material-symbols-outlined text-on-surface-variant text-sm group-hover:translate-x-1 transition-transform">chevron_right</span>
        </div>
        <div class="bg-surface-container-high/40 p-4 flex items-center justify-between group cursor-pointer hover:bg-surface-container-high/60 transition-colors">
            <div class="flex items-center gap-4">
                <span class="material-symbols-outlined text-primary">language</span>
                <span class="text-sm font-medium text-white">ენა</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="text-xs text-on-surface-variant">ქართული</span>
                <span class="material-symbols-outlined text-on-surface-variant text-sm">chevron_right</span>
            </div>
        </div>
        <div class="bg-surface-container-high/40 p-4 flex items-center justify-between group cursor-pointer">
            <div class="flex items-center gap-4">
                <span class="material-symbols-outlined text-primary">dark_mode</span>
                <span class="text-sm font-medium text-white">ბნელი რეჟიმი</span>
            </div>
            <div class="w-10 h-5 bg-secondary rounded-full relative flex items-center px-1">
                <div class="w-3.5 h-3.5 bg-white rounded-full ml-auto shadow-sm"></div>
            </div>
        </div>
    </section>

    <button onclick="if(window.Telegram) window.Telegram.WebApp.close();" class="w-full py-4 text-error font-headline font-bold text-xs tracking-[0.2em] flex items-center justify-center gap-2 hover:bg-error/10 rounded-xl transition-colors">
        <span class="material-symbols-outlined text-lg">logout</span>
        აპლიკაციის დახურვა
    </button>
</main>

<?php include 'includes/navbar.php'; ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (window.Telegram && window.Telegram.WebApp) {
            const user = window.Telegram.WebApp.initDataUnsafe?.user;
            if (user) {
                // სახელის ჩანაცვლება
                const fullName = (user.first_name || '') + ' ' + (user.last_name || '');
                document.getElementById('user-name').innerText = fullName.trim() || user.username || 'მომხმარებელი';
                
                // ფოტოს ჩანაცვლება
                if (user.photo_url) {
                    const img = document.getElementById('user-photo');
                    const placeholder = document.getElementById('user-placeholder');
                    img.src = user.photo_url;
                    img.classList.remove('hidden');
                    placeholder.classList.add('hidden');
                }
            }
        }
    });
</script>

</body>
</html>
