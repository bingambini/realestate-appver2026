<nav class="fixed bottom-0 left-0 w-full z-50 rounded-t-[2.5rem] bg-[#111223]/90 backdrop-blur-2xl px-4 pb-8 pt-4 flex justify-around items-center border-t border-white/5 shadow-2xl">
    
    <a href="index.php" class="flex flex-col items-center gap-1 <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'text-secondary' : 'text-on-surface-variant/40' ?>">
        <div class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'bg-secondary/10 p-2 rounded-2xl' : '' ?> flex flex-col items-center">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? '1' : '0' ?>">home</span>
            <span class="font-bold text-[9px] tracking-widest uppercase mt-1">Home</span>
        </div>
    </a>

    <a href="ai-chat.php" class="flex flex-col items-center gap-1 <?= basename($_SERVER['PHP_SELF']) == 'ai-chat.php' ? 'text-secondary' : 'text-on-surface-variant/40' ?>">
        <span class="material-symbols-outlined">smart_toy</span>
        <span class="font-bold text-[9px] tracking-widest uppercase">AI</span>
    </a>

    <a href="market.php" class="flex flex-col items-center gap-1 <?= basename($_SERVER['PHP_SELF']) == 'market.php' ? 'text-secondary' : 'text-on-surface-variant/40' ?>">
        <span class="material-symbols-outlined">explore</span>
        <span class="font-bold text-[9px] tracking-widest uppercase">Market</span>
    </a>

    <a href="listings.php" class="flex flex-col items-center gap-1 <?= basename($_SERVER['PHP_SELF']) == 'listings.php' ? 'text-secondary' : 'text-on-surface-variant/40' ?>">
        <span class="material-symbols-outlined">domain</span>
        <span class="font-bold text-[9px] tracking-widest uppercase">Listings</span>
    </a>

    <a href="profile.php" class="flex flex-col items-center gap-1 <?= basename($_SERVER['PHP_SELF']) == 'profile.php' ? 'text-secondary' : 'text-on-surface-variant/40' ?>">
        <span class="material-symbols-outlined">person</span>
        <span class="font-bold text-[9px] tracking-widest uppercase">Profile</span>
    </a>
</nav>
