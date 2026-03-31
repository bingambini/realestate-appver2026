<!DOCTYPE html>
<html class="dark" lang="ka">
<?php include 'includes/head.php'; ?>
<body class="bg-background text-on-surface font-body selection:bg-secondary/30 min-h-screen flex flex-col">

<header class="fixed top-0 w-full z-50 bg-[#111223]/80 backdrop-blur-xl border-b border-white/5 flex justify-between items-center px-4 py-3">
    <div class="flex items-center gap-3">
        <button class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-surface-variant transition-colors active:scale-90">
            <span class="material-symbols-outlined text-on-surface">arrow_back</span>
        </button>
        <div>
            <h1 class="font-headline font-bold text-base text-[#c0c1ff]">AI ასისტენტი</h1>
            <div class="flex items-center gap-1">
                <div class="w-1.5 h-1.5 rounded-full bg-secondary animate-pulse"></div>
                <span class="text-[10px] text-secondary font-bold uppercase tracking-wider">ონლაინ</span>
            </div>
        </div>
    </div>
    <div class="flex items-center gap-3">
        <span class="material-symbols-outlined text-[#c0c1ff]/70">more_vert</span>
    </div>
</header>

<main class="flex-1 pt-16 pb-44 px-4 flex flex-col max-w-lg mx-auto w-full gap-6">
    <div class="flex flex-col gap-6 mt-4">
        
        <div class="flex flex-col items-start max-w-[90%] group">
            <div class="flex items-center gap-2 mb-1.5 ml-1">
                <div class="w-5 h-5 rounded-full bg-gradient-to-br from-primary to-secondary flex items-center justify-center shadow-lg">
                    <span class="material-symbols-outlined text-[12px] text-surface-dim" style="font-variation-settings: 'FILL' 1;">smart_toy</span>
                </div>
                <span class="text-[10px] text-on-surface-variant uppercase tracking-widest font-bold">Estate AI</span>
            </div>
            <div class="bg-surface-container-high/40 backdrop-blur-lg border border-white/10 p-4 rounded-2xl rounded-tl-none shadow-xl">
                <p class="text-[15px] leading-relaxed">მოგესალმები! გავაანალიზე <span class="text-secondary font-bold underline decoration-secondary/30 underline-offset-2">საბურთალოს რაიონის</span> ტრენდები. ფასები ამ თვეში 4%-ით გაიზარდა. გსურთ ახალი განცხადებების ნახვა თუ საინვესტიციო პოტენციალის შემოწმება?</p>
            </div>
            <span class="text-[9px] text-on-surface-variant/60 mt-1 ml-1 font-medium tracking-tighter">10:42 AM</span>
        </div>

        <div class="flex flex-col items-end self-end max-w-[90%]">
            <div class="bg-gradient-to-br from-primary to-primary-container p-4 rounded-2xl rounded-tr-none shadow-lg border border-white/10">
                <p class="text-[15px] font-medium text-white leading-snug">მაჩვენე 3-საძინებლიანი ბინები ტერასით, 200კ$-მდე პარკთან ახლოს.</p>
            </div>
            <span class="text-[9px] text-on-surface-variant/60 mt-1 mr-1 font-medium tracking-tighter">10:43 AM</span>
        </div>

        <div class="flex flex-col items-start max-w-[90%]">
            <div class="flex items-center gap-2 mb-1.5 ml-1">
                <div class="w-5 h-5 rounded-full bg-gradient-to-br from-primary to-secondary flex items-center justify-center">
                    <span class="material-symbols-outlined text-[12px] text-surface-dim" style="font-variation-settings: 'FILL' 1;">smart_toy</span>
                </div>
                <span class="text-[10px] text-on-surface-variant uppercase tracking-widest font-bold">Estate AI</span>
            </div>
            <div class="bg-surface-container-high/40 backdrop-blur-lg border border-white/10 p-4 rounded-2xl rounded-tl-none shadow-xl">
                <p class="text-[15px] leading-relaxed">ვიპოვე 3 შესაბამისი ვარიანტი <span class="text-secondary font-bold">ვაკის პარკის</span> მიმდებარედ. გსურთ ვირტუალური ტურის ნახვა თუ დავგეგმოთ დათვალიერება შაბათ-კვირას?</p>
            </div>
            <span class="text-[9px] text-on-surface-variant/60 mt-1 ml-1 font-medium tracking-tighter">10:44 AM</span>
        </div>
    </div>
</main>

<div class="fixed bottom-0 left-0 w-full z-40 bg-gradient-to-t from-background via-background/95 to-transparent pt-6">
    <div class="max-w-lg mx-auto flex flex-col gap-3 px-4 pb-24">
        <div class="overflow-x-auto hide-scrollbar -mx-4 px-4 flex gap-2 no-scrollbar">
            <button class="flex-none bg-surface-container-low/60 backdrop-blur-md border border-outline-variant/15 px-4 py-2 rounded-full hover:bg-surface-container-high transition-all active:scale-95">
                <span class="text-xs font-semibold text-on-surface-variant whitespace-nowrap">ფასები საბურთალოზე?</span>
            </button>
            <button class="flex-none bg-surface-container-low/60 backdrop-blur-md border border-outline-variant/15 px-4 py-2 rounded-full hover:bg-surface-container-high transition-all active:scale-95">
                <span class="text-xs font-semibold text-on-surface-variant whitespace-nowrap">იპოთეკა 150კ-მდე</span>
            </button>
            <button class="flex-none bg-surface-container-low/60 backdrop-blur-md border border-outline-variant/15 px-4 py-2 rounded-full hover:bg-surface-container-high transition-all active:scale-95">
                <span class="text-xs font-semibold text-on-surface-variant whitespace-nowrap">ახალი გადასახადები</span>
            </button>
        </div>

        <div class="bg-surface-container-highest/90 backdrop-blur-2xl rounded-2xl p-2.5 shadow-[0px_-10px_40px_rgba(0,0,0,0.5)] flex items-center gap-2 border border-white/10">
            <button class="w-10 h-10 flex items-center justify-center rounded-xl text-on-surface-variant hover:text-secondary hover:bg-white/5 transition-colors">
                <span class="material-symbols-outlined">mic</span>
            </button>
            <div class="flex-1 bg-surface-dim/40 rounded-xl px-4 py-2.5 border border-outline-variant/20 focus-within:border-secondary/50 focus-within:bg-surface-dim/60 transition-all">
                <input class="bg-transparent border-none focus:ring-0 text-[15px] w-full text-white placeholder:text-on-surface-variant/40" placeholder="დაწერე შეტყობინება..." type="text"/>
            </div>
            <button class="w-10 h-10 bg-gradient-to-br from-primary to-secondary rounded-xl flex items-center justify-center text-surface-dim shadow-[0px_4px_15px_rgba(102,221,139,0.3)] active:scale-90 transition-transform">
                <span class="material-symbols-outlined font-bold">send</span>
            </button>
        </div>
    </div>
</div>

<?php include 'includes/navbar.php'; ?>

</body>
</html>
