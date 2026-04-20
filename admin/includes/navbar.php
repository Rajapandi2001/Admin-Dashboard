<?php
/**
 * Shared Admin Navbar Component
 * Implements the refined #1b3666 branding.
 */
$currentPageTitle = $currentPageTitle ?? 'Admin Console';
$currentPageSubtitle = $currentPageSubtitle ?? 'Management Suite';
?>
<style>
    .navy-brand-bg { background-color: #1b3666; }
    
    /* Navbar Top Reveal */
    .nav-reveal { 
        transform: translateY(-100%); 
        transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1); 
    }
    .revealed .nav-reveal { 
        transform: translateY(0); 
    }
</style>

<header class="h-16 navy-brand-bg flex items-center justify-between px-10 shrink-0 z-40 shadow-xl border-b border-white/5 nav-reveal">
    <div class="flex items-center">
        <!-- School Logo -->
        <div class="flex items-center space-x-4">
            <img src="../images/tree-midas.svg" class="h-10 w-auto" alt="Midas Logo">
            <img src="../images/logo-name.svg" class="h-8 w-auto" alt="Midas Touch School">
        </div>
        
        <!-- Divider -->
        <div class="ml-10 h-6 w-px bg-white/10"></div>
        
        <!-- Page Identity -->
        <div class="ml-10 flex flex-col">
            <span class="text-[9px] font-bold text-white/40 uppercase tracking-[0.3em] leading-none mb-1"><?php echo $currentPageSubtitle; ?></span>
            <span class="text-lg font-bold text-white tracking-tight"><?php echo $currentPageTitle; ?></span>
        </div>
    </div>

    <div class="flex items-center space-x-8">
        <!-- System Status -->
        <div class="hidden lg:flex items-center space-x-3 text-[10px] font-bold text-white/40 uppercase tracking-[0.2em] border-r border-white/10 pr-8 mr-2">
            <span class="w-2.5 h-2.5 bg-green-500 rounded-full shadow-[0_0_10px_rgba(34,197,94,0.4)]"></span>
            <span>Live System</span>
        </div>
        
        <!-- Dashboard Link (if not on dashboard) -->
        <?php if (basename($_SERVER['PHP_SELF']) !== 'dashboard.php'): ?>
            <a href="dashboard.php" class="text-[10px] font-bold text-white/60 hover:text-white uppercase tracking-[0.2em] transition-all py-2 border-b border-transparent hover:border-white/20">Back to Dashboard</a>
        <?php endif; ?>

        <!-- Admin Profile & Quick Nav -->
        <div class="flex items-center space-x-5 relative" x-data="{ open: false }" @click.away="open = false">
            <div class="text-right hidden sm:block">
                <p class="text-xs font-bold text-white leading-none">Super Admin</p>
                <p class="text-[9px] font-bold text-white/30 uppercase tracking-widest mt-1">Level 1 Access</p>
            </div>
            
            <button 
                @click="open = !open"
                class="w-11 h-11 bg-white/10 text-white rounded-xl flex items-center justify-center text-[10px] font-black border border-white/20 shadow-inner group hover:bg-white/20 transition-all focus:outline-none"
                :class="{ 'bg-white/20 border-white/40': open }"
            >
                SA
            </button>

            <!-- Dropdown Menu -->
            <div 
                x-show="open"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 scale-95 -translate-y-2"
                x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                x-transition:leave-end="opacity-0 scale-95 -translate-y-2"
                class="absolute right-0 top-full mt-4 w-56 bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden z-50 py-2"
                x-cloak
            >
                <p class="px-5 py-3 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] border-b border-gray-50 mb-1">Quick Navigation</p>
                
                <a href="dashboard.php" class="flex items-center px-5 py-3 text-[11px] font-bold text-gray-700 uppercase tracking-widest hover:bg-gray-50 transition-colors">
                    Dashboard
                </a>
                <a href="media.php" class="flex items-center px-5 py-3 text-[11px] font-bold text-gray-700 uppercase tracking-widest hover:bg-gray-50 transition-colors">
                    Media Manager
                </a>
                <a href="enquiries.php" class="flex items-center px-5 py-3 text-[11px] font-bold text-gray-700 uppercase tracking-widest hover:bg-gray-50 transition-colors">
                    Inbox Console
                </a>
                <a href="bookings.php" class="flex items-center px-5 py-3 text-[11px] font-bold text-gray-700 uppercase tracking-widest hover:bg-gray-50 transition-colors">
                    Tour Bookings
                </a>

                <div class="mt-2 pt-2 border-t border-gray-50">
                    <a href="logout.php" class="flex items-center px-5 py-3 text-[11px] font-black text-red-600 uppercase tracking-widest hover:bg-red-50 transition-colors">
                        Sign Out
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
