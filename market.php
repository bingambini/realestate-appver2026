<!DOCTYPE html>
<html class="dark" lang="ka">
<?php include 'includes/head.php'; ?>
<body class="bg-surface text-on-surface font-body selection:bg-secondary/30">

<header class="fixed top-0 w-full z-50 bg-[#111223]/60 backdrop-blur-xl shadow-[0px_10px_40px_rgba(233,196,0,0.08)] flex justify-between items-center px-6 py-4">
    <div class="flex items-center gap-3">
        <span class="material-symbols-outlined text-[#c0c1ff]">location_city</span>
        <span class="text-xl font-black bg-gradient-to-r from-[#c0c1ff] to-[#66dd8b] bg-clip-text text-transparent font-headline tracking-wide uppercase">The Estate</span>
    </div>
    <div class="flex items-center gap-4">
        <button class="material-symbols-outlined text-[#c0c1ff] active:scale-95 duration-200">notifications</button>
        <div class="w-8 h-8 rounded-full bg-surface-container-high border border-outline-variant/20 overflow-hidden">
            <span class="material-symbols-outlined text-on-surface-variant flex items-center justify-center h-full">person</span>
        </div>
    </div>
</header>

<main class="pt-24 pb-32 px-6 max-w-7xl mx-auto">
    <section class="mb-10 flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div class="space-y-2">
            <div class="flex items-center gap-2 text-secondary font-headline font-bold">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">insights</span>
                <span class="uppercase tracking-widest text-[10px]">რეალურ დროში ანალიტიკა</span>
            </div>
            <h1 class="text-3xl md:text-5xl font-headline font-extrabold tracking-tight text-white">ბაზრის პულსი - <span class="text-primary">თბილისი</span></h1>
            <p class="text-on-surface-variant max-w-md text-sm">Geostat-სა და AI დამუშავებაზე დაფუძნებული უძრავი ქონების სრული მონაცემები.</p>
        </div>
        
        <div class="flex flex-wrap items-center gap-3">
            <div class="bg-surface-container-high p-1 rounded-full flex gap-1">
                <button class="px-4 py-1.5 rounded-full text-[10px] font-bold transition-all bg-secondary text-on-secondary-container uppercase">1თ</button>
                <button class="px-4 py-1.5 rounded-full text-[10px] font-bold transition-all text-on-surface-variant hover:bg-surface-variant uppercase">3თ</button>
                <button class="px-4 py-1.5 rounded-full text-[10px] font-bold transition-all text-on-surface-variant hover:bg-surface-variant uppercase">1წ</button>
            </div>
            <button class="bg-surface-container-high px-5 py-2.5 rounded-xl border border-outline-variant/10 flex items-center gap-2 hover:bg-surface-bright transition-colors">
                <span class="material-symbols-outlined text-sm">tune</span>
                <span class="text-[10px] font-bold uppercase tracking-wider">ქალაქის არჩევა</span>
            </button>
        </div>
    </section>

    <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
        
        <div class="md:col-span-4 space-y-6">
            <div class="bg-surface-container-low rounded-xl p-6 border-l-4 border-secondary/40 shadow-sm relative overflow-hidden">
                <div class="relative z-10">
                    <h3 class="text-[10px] font-bold text-secondary uppercase tracking-[0.2em] mb-4">საქსტატის მიმოხილვა</h3>
                    <div class="space-y-6">
                        <div>
                            <div class="flex justify-between items-end mb-1">
                                <span class="text-on-surface-variant text-xs">საშ. ფასი / კვ.მ</span>
                                <span class="text-secondary text-xs font-bold">+12.4%</span>
                            </div>
                            <div class="text-3xl font-headline font-bold text-white">$1,240 <span class="text-sm font-normal text-on-surface-variant uppercase">USD</span></div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-surface-container-highest/40 p-4 rounded-lg">
                                <div class="text-[9px] text-on-surface-variant uppercase font-bold mb-1">მოცულობა</div>
                                <div class="text-lg font-headline font-bold text-primary">$42M</div>
                            </div>
                            <div class="bg-surface-container-highest/40 p-4 rounded-lg">
                                <div class="text-[9px] text-on-surface-variant uppercase font-bold mb-1">აქტიური</div>
                                <div class="text-lg font-headline font-bold text-primary">1,842</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                <h4 class="text-xs font-bold font-headline px-2 flex items-center justify-between text-white uppercase tracking-wider">
                    პოპულარული უბნები
                    <span class="text-tertiary text-[9px]">LIVE</span>
                </h4>
                <div class="bg-surface-container-high/60 backdrop-blur-md p-4 rounded-lg flex items-center gap-4 group border border-outline-variant/5">
                    <div class="w-10 h-10 rounded-lg bg-primary-container flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-xl">apartment</span>
                    </div>
                    <div class="flex-1">
                        <div class="font-headline font-bold text-sm text-white">ვაკის რაიონი</div>
                        <div class="text-[10px] text-on-surface-variant">$2,100 საშ / კვ.მ</div>
                    </div>
                    <div class="text-right">
                        <div class="text-secondary text-[10px] font-bold">▲ 4.2%</div>
                    </div>
                </div>
                <button class="w-full py-3 rounded-lg border border-outline-variant/20 text-[10px] font-bold text-on-surface-variant uppercase tracking-widest hover:bg-surface-container-low transition-colors">
                    ყველა 12 რაიონი
                </button>
            </div>
        </div>

        <div class="md:col-span-8 space-y-6">
            <div class="bg-surface-container-low rounded-xl overflow-hidden relative h-[400px] shadow-2xl border border-outline-variant/10">
                <div class="absolute inset-0 bg-surface-container-highest flex items-center justify-center">
                    <span class="material-symbols-outlined text-6xl opacity-10">map</span>
                </div>
                
                <div class="absolute top-4 left-4">
                    <div class="glass-panel p-3 rounded-xl border border-outline-variant/20">
                        <div class="text-[9px] font-bold text-secondary uppercase tracking-widest mb-1">სიმჭიდროვე</div>
                        <div class="h-1.5 w-24 rounded-full bg-gradient-to-r from-primary to-secondary"></div>
                    </div>
                </div>

                <div class="absolute bottom-4 right-4 flex gap-2">
                    <button class="px-4 py-2 glass-panel rounded-lg text-[10px] font-bold text-secondary border border-secondary/30">HEATMAP</button>
                    <button class="px-4 py-2 glass-panel rounded-lg text-[10px] font-bold text-white border border-outline-variant/20">3D VIEW</button>
                </div>
            </div>

            <div class="bg-surface-container-low p-6 rounded-xl border border-outline-variant/10">
                <h5 class="text-sm font-bold font-headline mb-4 text-white uppercase tracking-widest">უბნების შედარება (ლიკვიდურობა)</h5>
                <div class="space-y-4">
                    <div class="flex items-center gap-4">
                        <div class="text-[10px] font-bold w-16 text-on-surface-variant">ვაკე</div>
                        <div class="flex-1 h-2 bg-surface-variant rounded-full overflow-hidden">
                            <div class="h-full bg-primary w-[88%]"></div>
                        </div>
                        <div class="text-[10px] font-bold w-10 text-right text-white">88%</div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="text-[10px] font-bold w-16 text-on-surface-variant">საბურთალო</div>
                        <div class="flex-1 h-2 bg-surface-variant rounded-full overflow-hidden">
                            <div class="h-full bg-secondary w-[65%]"></div>
                        </div>
                        <div class="text-[10px] font-bold w-10 text-right text-white">65%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="mt-12 bg-surface-container-highest/30 rounded-2xl p-8 border border-outline-variant/10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
            <div class="space-y-6">
                <h2 class="text-2xl font-headline font-bold text-white">ფინანსური კალკულატორი</h2>
                <div class="space-y-4">
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">ქონების ღირებულება</label>
                        <input class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-sm font-bold text-white focus:ring-2 focus:ring-secondary/50" type="text" value="$250,000"/>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">თანამონაწილეობა</label>
                            <input class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-sm font-bold text-white" type="text" value="20%"/>
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">საპროცენტო განაკვეთი</label>
                            <input class="w-full bg-surface-container-low border-none rounded-xl px-4 py-3 text-sm font-bold text-white" type="text" value="8.5%"/>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="flex flex-col items-center text-center">
                <div class="w-40 h-40 rounded-full border-[10px] border-surface-container-high relative flex items-center justify-center">
                    <div class="flex flex-col items-center">
                        <span class="text-[9px] font-bold uppercase text-on-surface-variant">ყოველთვიური</span>
                        <span class="text-2xl font-headline font-black text-secondary">$1,537</span>
                    </div>
                </div>
                <button class="mt-8 w-full py-4 rounded-xl bg-gradient-to-r from-primary to-secondary text-surface-dim font-headline font-bold uppercase tracking-widest text-xs shadow-lg active:scale-95 transition-all">
                    წინასწარი დამტკიცება
                </button>
            </div>
        </div>
    </section>
</main>

<button class="fixed bottom-28 right-6 w-14 h-14 rounded-full bg-tertiary text-on-tertiary flex items-center justify-center shadow-2xl active:scale-95 transition-all z-40 group">
    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">bolt</span>
</button>

<?php include 'includes/navbar.php'; ?>

</body>
</html>
