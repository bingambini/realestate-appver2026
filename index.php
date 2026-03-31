<!DOCTYPE html>
<html class="dark" lang="ka">
<?php include 'includes/head.php'; ?>
<body class="bg-surface text-on-surface font-body selection:bg-secondary/30">

<header class="fixed top-0 w-full z-50 bg-[#111223]/60 backdrop-blur-xl shadow-[0px_10px_40px_rgba(233,196,0,0.08)] flex justify-between items-center px-6 py-4">
    <div class="flex items-center gap-3">
        <span class="material-symbols-outlined text-[#c0c1ff]">location_city</span>
        <div class="flex flex-col">
            <h1 class="text-xl font-black bg-gradient-to-r from-[#c0c1ff] to-[#66dd8b] bg-clip-text text-transparent font-headline tracking-wide uppercase">The Estate</h1>
            <div class="flex items-center gap-1 text-[10px] text-on-surface-variant font-bold uppercase tracking-widest">
                <span>თბილისი, საქართველო</span>
                <span class="material-symbols-outlined text-[12px]">expand_more</span>
            </div>
        </div>
    </div>
    <div class="flex items-center gap-2">
        <button class="w-10 h-10 flex items-center justify-center rounded-full bg-surface-container-high text-[#66dd8b] active:scale-95 duration-200">
            <span class="material-symbols-outlined">auto_awesome</span>
        </button>
        <button class="w-10 h-10 flex items-center justify-center rounded-full bg-surface-container-high text-[#c0c1ff] active:scale-95 duration-200">
            <span class="material-symbols-outlined">notifications</span>
        </button>
    </div>
</header>

<main class="pt-24 pb-32 px-4 space-y-6 max-w-lg mx-auto">
    <section class="grid grid-cols-2 gap-3">
        <div class="glass-panel p-4 rounded-lg flex flex-col gap-1 border border-outline-variant/15">
            <span class="text-[10px] font-bold text-on-surface-variant uppercase tracking-wider">ბაზრის ზრდა</span>
            <div class="flex items-baseline gap-1">
                <span class="text-lg font-headline font-bold text-secondary">+2.4%</span>
                <span class="material-symbols-outlined text-secondary text-sm">trending_up</span>
            </div>
        </div>
        <div class="glass-panel p-4 rounded-lg flex flex-col gap-1 border border-outline-variant/15">
            <span class="text-[10px] font-bold text-on-surface-variant uppercase tracking-wider">საშ. ფასი</span>
            <span class="text-lg font-headline font-bold text-primary">1,920₾</span>
        </div>
        <div class="glass-panel p-4 rounded-lg flex flex-col gap-1 border border-outline-variant/15">
            <span class="text-[10px] font-bold text-on-surface-variant uppercase tracking-wider">განცხადებები</span>
            <span class="text-lg font-headline font-bold text-on-surface">1,345</span>
        </div>
        <div class="glass-panel p-4 rounded-lg flex flex-col gap-1 border border-outline-variant/15">
            <span class="text-[10px] font-bold text-on-surface-variant uppercase tracking-wider">ვეძებ</span>
            <span class="text-lg font-headline font-bold text-tertiary">124</span>
        </div>
    </section>

    <section>
        <div class="flex justify-between items-center mb-4 px-2">
            <h2 class="font-headline font-bold text-lg text-white">შემოთავაზებული</h2>
            <span class="text-tertiary text-xs font-bold uppercase tracking-wider">ყველა</span>
        </div>
        <div class="flex overflow-x-auto gap-4 custom-scrollbar pb-2 no-scrollbar">
            <div class="min-w-[280px] bg-surface-container-high rounded-xl overflow-hidden relative border border-white/5">
                <div class="h-40 bg-surface-container-highest flex items-center justify-center">
                     <span class="material-symbols-outlined text-4xl opacity-20">image</span>
                </div>
                <div class="absolute top-3 left-3 bg-surface/80 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-bold text-secondary">PREMIUM</div>
                <div class="p-4">
                    <h3 class="font-headline font-bold text-on-surface truncate">Vake Luxury Penthouse</h3>
                    <p class="text-xs text-on-surface-variant mb-3">Chavchavadze Ave, Tbilisi</p>
                    <div class="flex justify-between items-center">
                        <span class="text-xl font-headline font-black text-primary">450,000₾</span>
                        <span class="material-symbols-outlined text-on-surface-variant">bookmark</span>
                    </div>
                </div>
            </div>
            <div class="min-w-[280px] bg-surface-container-high rounded-xl overflow-hidden relative border border-white/5">
                <div class="h-40 bg-surface-container-highest flex items-center justify-center">
                     <span class="material-symbols-outlined text-4xl opacity-20">image</span>
                </div>
                <div class="p-4">
                    <h3 class="font-headline font-bold text-on-surface truncate">Saburtalo Garden House</h3>
                    <p class="text-xs text-on-surface-variant mb-3">Nutsubidze Plateau, Tbilisi</p>
                    <div class="flex justify-between items-center">
                        <span class="text-xl font-headline font-black text-primary">320,000₾</span>
                        <span class="material-symbols-outlined text-on-surface-variant">bookmark</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="flex justify-between items-center mb-4 px-2">
            <h2 class="font-headline font-bold text-lg text-white">ცხელი განცხადებები</h2>
            <div class="flex gap-1">
                <div class="w-2 h-2 rounded-full bg-secondary"></div>
                <div class="w-2 h-2 rounded-full bg-surface-container-highest"></div>
            </div>
        </div>
        <div class="flex overflow-x-auto gap-4 custom-scrollbar no-scrollbar">
            <div class="min-w-[140px] aspect-[4/5] bg-surface-container-high rounded-lg overflow-hidden relative group border border-white/5">
                <div class="absolute inset-0 bg-gradient-to-t from-surface to-transparent"></div>
                <div class="absolute bottom-2 left-2 right-2">
                    <p class="text-[10px] font-bold text-tertiary">SOLOLAKI</p>
                    <p class="font-bold text-xs truncate">Studio Loft</p>
                </div>
            </div>
            <div class="min-w-[140px] aspect-[4/5] bg-surface-container-high rounded-lg overflow-hidden relative group border border-white/5">
                <div class="absolute inset-0 bg-gradient-to-t from-surface to-transparent"></div>
                <div class="absolute bottom-2 left-2 right-2">
                    <p class="text-[10px] font-bold text-tertiary">MTATSMINDA</p>
                    <p class="font-bold text-xs truncate">Modern Apt</p>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-8">
        <h2 class="font-headline font-bold text-lg mb-4 px-2 text-white">ბოლოს დამატებული (ვეძებ)</h2>
        <div class="space-y-2">
            <div class="bg-surface-container-low p-3 rounded-lg flex items-center gap-4 border-l-4 border-secondary/50">
                <div class="w-10 h-10 rounded-full bg-surface-container-highest flex items-center justify-center">
                    <span class="material-symbols-outlined text-secondary">search</span>
                </div>
                <div class="flex-1">
                    <h4 class="font-bold text-sm">2BR ვაკეში</h4>
                    <p class="text-[10px] text-on-surface-variant font-medium uppercase">ბიუჯეტი: 1,500$-მდე • 2სთ წინ</p>
                </div>
                <span class="material-symbols-outlined text-on-surface-variant text-lg">chevron_right</span>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/navbar.php'; ?>

</body>
</html>
