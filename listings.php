<!DOCTYPE html>
<html class="dark" lang="ka">
<?php include 'includes/head.php'; ?>
<body class="bg-surface text-on-surface font-body selection:bg-secondary/30">

<header class="fixed top-0 w-full z-50 bg-[#111223]/80 backdrop-blur-xl flex justify-between items-center px-5 py-3 border-b border-outline/5">
    <div class="flex items-center gap-2.5">
        <span class="material-symbols-outlined text-[#c0c1ff] scale-90">location_city</span>
        <h1 class="font-headline font-extrabold tracking-tight text-lg bg-gradient-to-r from-[#c0c1ff] to-[#66dd8b] bg-clip-text text-transparent uppercase">The Estate</h1>
    </div>
    <div class="flex items-center gap-3">
        <button class="active:scale-95 duration-200">
            <span class="material-symbols-outlined text-[#c0c1ff]/80">notifications</span>
        </button>
    </div>
</header>

<main class="pt-20 pb-28 px-4 max-w-2xl mx-auto">
    <div class="mb-6 space-y-4">
        <div class="flex flex-col gap-3">
            <h2 class="font-headline font-extrabold text-2xl tracking-tight text-on-surface">განცხადებები</h2>
            <div class="relative group">
                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline/60 text-xl">search</span>
                <input class="w-full bg-surface-container-highest/50 rounded-xl py-3 pl-11 pr-4 border-none focus:ring-1 focus:ring-secondary/40 placeholder:text-outline-variant/60 text-sm font-medium transition-all" placeholder="მოძებნე უბნის მიხედვით..." type="text"/>
            </div>
        </div>

        <div class="space-y-3">
            <div class="flex items-center justify-between">
                <span class="font-label font-bold text-[10px] tracking-[0.08em] uppercase text-outline/80">ფილტრები</span>
                <div class="flex items-center gap-1 text-secondary font-label font-bold text-[11px] cursor-pointer">
                    <span>პოპულარული</span>
                    <span class="material-symbols-outlined text-xs">expand_more</span>
                </div>
            </div>
            <div class="flex gap-2 overflow-x-auto pb-1 custom-scrollbar">
                <div class="bg-secondary text-on-secondary px-4 py-1.5 rounded-full font-label font-bold text-[11px] shadow-lg shadow-secondary/10 whitespace-nowrap">ვილა</div>
                <div class="bg-surface-container-high/60 text-on-surface-variant px-4 py-1.5 rounded-full font-label font-bold text-[11px] whitespace-nowrap">ფასი</div>
                <div class="bg-surface-container-high/60 text-on-surface-variant px-4 py-1.5 rounded-full font-label font-bold text-[11px] whitespace-nowrap">უბანი</div>
                <div class="bg-surface-container-high/60 text-on-surface-variant px-4 py-1.5 rounded-full font-label font-bold text-[11px] whitespace-nowrap">3+ საძინებელი</div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-3">
        <?php
        $listings = [
            ['price' => '$2.4M', 'area' => 'ვაკე', 'sq' => '420', 'beds' => '4', 'type' => 'ვილა', 'img' => '3', 'fav' => true],
            ['price' => '$1.8M', 'area' => 'საბურთალო', 'sq' => '185', 'beds' => '3', 'type' => 'პენტჰაუსი', 'img' => '4', 'fav' => false],
            ['price' => '$3.1M', 'area' => 'წყნეთი', 'sq' => '550', 'beds' => '6', 'type' => 'ვილა', 'img' => '5', 'fav' => false],
            ['price' => '$890K', 'area' => 'ძველი თბილისი', 'sq' => '120', 'beds' => '2', 'type' => 'ბინა', 'img' => '6', 'fav' => false],
        ];

        foreach ($listings as $item): ?>
        <div class="flex flex-col bg-surface-container-low rounded-lg overflow-hidden card-depth group cursor-pointer border border-outline/5">
            <div class="relative aspect-[4/3]">
                <img alt="Property" class="w-full h-full object-cover" src="https://picsum.photos/seed/<?php echo $item['img']; ?>/400/300"/>
                <div class="absolute top-2 right-2 bg-surface-dim/60 backdrop-blur-md p-1 rounded-full <?php echo $item['fav'] ? 'text-secondary' : 'text-white/50'; ?>">
                    <span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' <?php echo $item['fav'] ? '1' : '0'; ?>;">favorite</span>
                </div>
                <div class="absolute bottom-0 left-0 w-full glass-overlay px-2.5 py-1.5 flex justify-between items-center">
                    <div class="flex items-center gap-2 text-[9px] text-on-surface/90 font-bold uppercase tracking-wider">
                        <div class="flex items-center gap-0.5"><span class="material-symbols-outlined text-[10px]">square_foot</span> <?php echo $item['sq']; ?></div>
                        <div class="flex items-center gap-0.5"><span class="material-symbols-outlined text-[10px]">bed</span> <?php echo $item['beds']; ?></div>
                    </div>
                    <span class="bg-secondary/20 text-secondary text-[8px] font-black px-1.5 py-0.5 rounded uppercase"><?php echo $item['type']; ?></span>
                </div>
            </div>
            <div class="p-3 flex flex-col">
                <span class="font-headline font-black text-base text-primary"><?php echo $item['price']; ?></span>
                <span class="font-body font-semibold text-[10px] text-on-surface-variant mb-3"><?php echo $item['area']; ?></span>
                <button class="w-full bg-surface-container-highest hover:bg-surface-container-high py-2 rounded-lg font-label font-bold text-[10px] text-on-surface border border-outline/10 active:scale-95 transition-all uppercase">
                    დეტალები
                </button>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="mt-6 px-4 py-3 bg-surface-container-high rounded-xl border border-outline/10 flex items-center justify-between shadow-lg">
        <div class="flex items-center gap-3">
            <div class="h-8 w-8 signature-glow rounded-lg flex items-center justify-center shadow-inner">
                <span class="material-symbols-outlined text-on-secondary-container text-lg">compare_arrows</span>
            </div>
            <div class="flex flex-col">
                <span class="font-bold text-xs">შედარება</span>
                <span class="text-[9px] text-on-surface-variant font-medium">2 არჩეული ობიექტი</span>
            </div>
        </div>
        <span class="material-symbols-outlined text-secondary text-sm">arrow_forward_ios</span>
    </div>
</main>

<?php include 'includes/navbar.php'; ?>

</body>
</html>
