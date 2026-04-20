<?php
/**
 * Campus Tour Bookings - Midas Touch Admin
 */
require_once __DIR__ . '/includes/auth-check.php';
require_once __DIR__ . '/../config/database.php';

// Fetch all bookings
$stmt = $pdo->query("SELECT * FROM campus_tour_bookings ORDER BY submitted_at DESC");
$bookings = $stmt->fetchAll();
$totalBookings = count($bookings);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../images/fav.png">
    <title>Campus Tour Bookings - Midas Touch Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8fafc; color: #1e293b; }
        [x-cloak] { display: none !important; }
        .navy-brand-bg { background-color: #1b3666; }
        .navy-brand-text { color: #1b3666; }
        .navy-brand-border { border-color: #1b3666; }
        .custom-scroll::-webkit-scrollbar { width: 4px; }
        .custom-scroll::-webkit-scrollbar-track { background: transparent; }
        .custom-scroll::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }
        .table-row-hover:hover { background-color: rgba(241, 245, 249, 0.5); }

        /* Animation Primitives */
        .reveal-item { opacity: 0; transform: translateY(20px); transition: all 0.7s cubic-bezier(0.16, 1, 0.3, 1); }
        .reveal-left { opacity: 0; transform: translateX(-30px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
        .revealed .reveal-item { opacity: 1; transform: translateY(0); }
        .revealed .reveal-left { opacity: 1; transform: translateX(0); }
    </style>
</head>
<body class="flex flex-col h-screen overflow-hidden" x-data="bookingManager()" x-init="init()" @keydown.escape="closeModal()" :class="{ 'revealed': revealed }">
    
    <?php 
    $currentPageTitle = 'Tour Bookings';
    $currentPageSubtitle = 'Campus Visits';
    require_once 'includes/navbar.php'; 
    ?>

    <div class="flex flex-1 overflow-hidden">
        
        <!-- Sidebar -->
        <aside class="w-72 bg-white border-r-2 navy-brand-border flex flex-col shrink-0 reveal-left" style="transition-delay: 100ms;">
            <div class="p-8 space-y-8">
                <div>
                    <h2 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-6 px-4">Registry Filter</h2>
                    <nav class="space-y-1">
                        <button class="w-full bg-slate-900 text-white flex items-center justify-between px-5 py-3 rounded-lg text-[11px] font-bold uppercase tracking-widest transition-all">
                            <span>All Bookings</span>
                            <span class="opacity-80" x-text="bookings.length"><?php echo $totalBookings; ?></span>
                        </button>
                        
                        <div class="pt-4 mt-4 border-t border-gray-100">
                            <a href="dashboard.php" class="w-full flex items-center px-5 py-3 rounded-lg text-[11px] font-bold text-gray-500 hover:text-gray-900 hover:bg-gray-50 uppercase tracking-widest transition-all">
                                <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                                Back to Dashboard
                            </a>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="mt-auto p-6 bg-gray-50/50 border-t border-gray-100">
                <p class="text-[9px] text-gray-400 font-bold uppercase tracking-widest mb-1">Midas Touch School</p>
                <p class="text-[10px] text-gray-600 font-medium leading-relaxed">Portal version 2.5.1 Stable</p>
                <p class="text-[8px] text-gray-400 font-bold uppercase tracking-widest mt-2">developed by LearnLike</p>
            </div>
        </aside>

        <!-- Main Workspace -->
        <main class="flex-1 overflow-hidden flex flex-col bg-white reveal-item" style="transition-delay: 200ms;">
            
            <!-- List Header -->
            <div class="px-10 py-6 border-b border-gray-100 bg-gray-50/30 flex justify-between items-center">
                <h2 class="text-xs font-black text-gray-900 uppercase tracking-[0.3em]">Comprehensive Registry</h2>
                <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">
                    Detection: <span class="text-gray-900" x-text="bookings.length"></span> Records
                </div>
            </div>

            <!-- Scrollable List Area -->
            <div class="flex-1 overflow-y-auto custom-scroll">
                <table class="w-full text-left border-collapse">
                    <thead class="sticky top-0 bg-white z-10">
                        <tr class="border-b border-gray-100">
                            <th class="px-10 py-5 text-[10px] font-black text-gray-400 uppercase tracking-widest">Parent Identity</th>
                            <th class="px-10 py-5 text-[10px] font-black text-gray-400 uppercase tracking-widest">Children Info</th>
                            <th class="px-10 py-5 text-[10px] font-black text-gray-400 uppercase tracking-widest">System Date</th>
                            <th class="px-10 py-5 text-[10px] font-black text-gray-400 uppercase tracking-widest">Callback</th>
                            <th class="px-10 py-5 text-[10px] font-black text-gray-400 uppercase tracking-widest text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        <template x-for="item in bookings" :key="item.id">
                            <tr class="table-row-hover transition-colors group cursor-pointer" @click="openModal(item)">
                                <td class="px-10 py-6">
                                    <div class="flex items-center space-x-4">
                                        <div class="w-8 h-8 rounded bg-gray-100 flex items-center justify-center text-[9px] font-black text-gray-400 border border-gray-200" x-text="(item.parent_first_name[0] || '') + (item.parent_last_name[0] || '')"></div>
                                        <div>
                                            <p class="text-sm font-bold text-gray-900 leading-none mb-1" x-text="item.parent_first_name + ' ' + item.parent_last_name"></p>
                                            <p class="text-[10px] font-medium text-gray-400" x-text="item.email"></p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-10 py-6">
                                    <p class="text-[11px] font-bold text-gray-700 uppercase tracking-tight max-w-xs" x-text="item.child1_first_name + ' ' + item.child1_last_name"></p>
                                </td>
                                <td class="px-10 py-6">
                                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest" x-text="formatDate(item.submitted_at)"></p>
                                </td>
                                <td class="px-10 py-6">
                                    <span :class="item.callback_request === 'Yes' ? 'bg-amber-50 text-amber-600 border-amber-100' : 'bg-emerald-50 text-emerald-600 border-emerald-100'" class="px-3 py-1 text-[9px] font-black uppercase rounded-full tracking-widest border" x-text="item.callback_request === 'Yes' ? 'Requested' : 'None'"></span>
                                </td>
                                <td class="px-10 py-6 text-right">
                                    <button class="text-[10px] font-black text-blue-600 uppercase tracking-[0.2em] opacity-0 group-hover:opacity-100 transition-opacity">Open Record</button>
                                </td>
                            </tr>
                        </template>
                    </tbody>
                </table>

                <!-- Empty State -->
                <div x-show="bookings.length === 0" class="py-40 text-center">
                    <p class="text-[10px] font-bold text-gray-300 uppercase tracking-[0.6em] mb-4">Registry Clear</p>
                    <p class="text-xs text-gray-400 italic">No bookings have been made yet.</p>
                </div>
            </div>
        </main>
    </div>

    <!-- Centralized Detail Modal -->
    <div 
        x-show="isModalOpen" 
        class="fixed inset-0 z-50 flex items-center justify-center p-6 bg-slate-900/40 backdrop-blur-sm"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        x-cloak
    >
        <div 
            class="bg-white w-full max-w-3xl rounded-2xl shadow-2xl overflow-hidden flex flex-col max-h-[90vh]"
            @click.away="closeModal()"
            x-transition:enter="transition ease-out duration-300 scale-95"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
        >
            <!-- Modal Header -->
            <div class="p-8 border-b border-gray-100 flex justify-between items-start shrink-0">
                <div>
                    <p class="text-[10px] font-black text-blue-600 uppercase tracking-[0.4em] mb-3">Booking Identity</p>
                    <h3 class="text-2xl font-bold text-gray-900 tracking-tight" x-text="selectedBooking?.parent_first_name + ' ' + selectedBooking?.parent_last_name"></h3>
                    <div class="flex items-center space-x-3 mt-2 text-[10px] font-bold text-gray-400 uppercase tracking-widest">
                        <span x-text="selectedBooking?.email"></span>
                        <span class="w-1 h-1 bg-gray-200 rounded-full"></span>
                        <span x-text="selectedBooking?.phone"></span>
                        <span class="w-1 h-1 bg-gray-200 rounded-full"></span>
                        <span x-text="selectedBooking ? formatDate(selectedBooking.submitted_at) : ''"></span>
                    </div>
                </div>
                <button @click="closeModal()" class="p-2 hover:bg-gray-100 rounded-xl transition-colors">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="flex-1 overflow-y-auto p-10 space-y-8 custom-scroll bg-gray-50/30">
                
                <!-- Child Details -->
                <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm">
                    <p class="text-[9px] font-black text-gray-300 uppercase tracking-[0.3em] mb-6">Child Information</p>
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1">Name</p>
                            <p class="text-sm font-semibold text-gray-800" x-text="selectedBooking?.child1_first_name + ' ' + selectedBooking?.child1_last_name"></p>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1">Date of Birth</p>
                            <p class="text-sm font-semibold text-gray-800" x-text="selectedBooking?.child1_dob"></p>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1">Target Entry Year</p>
                            <p class="text-sm font-semibold text-gray-800" x-text="selectedBooking?.child1_year"></p>
                        </div>
                        <div class="col-span-2 space-y-2 mt-2">
                             <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1">Interests</p>
                             <p class="text-sm text-gray-700" x-text="selectedBooking?.child1_interests || 'None specified'"></p>
                        </div>
                    </div>
                </div>
                
                <!-- Additional Child Details -->
                <div x-show="selectedBooking?.additional_children === 'Yes'" class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm">
                    <p class="text-[9px] font-black text-gray-300 uppercase tracking-[0.3em] mb-6">Additional Child Information</p>
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1">Name</p>
                            <p class="text-sm font-semibold text-gray-800" x-text="selectedBooking?.child2_first_name + ' ' + selectedBooking?.child2_last_name"></p>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1">Date of Birth</p>
                            <p class="text-sm font-semibold text-gray-800" x-text="selectedBooking?.child2_dob"></p>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1">Target Entry Year</p>
                            <p class="text-sm font-semibold text-gray-800" x-text="selectedBooking?.child2_year"></p>
                        </div>
                        <div class="col-span-2 space-y-2 mt-2">
                             <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1">Interests</p>
                             <p class="text-sm text-gray-700" x-text="selectedBooking?.child2_interests || 'None specified'"></p>
                        </div>
                    </div>
                </div>

                <!-- Address Information -->
                <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm">
                    <p class="text-[9px] font-black text-gray-300 uppercase tracking-[0.3em] mb-6">Address Profile</p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="col-span-2">
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1">Address Line 1</p>
                            <p class="text-sm font-semibold text-gray-800" x-text="selectedBooking?.address1"></p>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1">City</p>
                            <p class="text-sm font-semibold text-gray-800" x-text="selectedBooking?.city"></p>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1">Postal Code</p>
                            <p class="text-sm font-semibold text-gray-800" x-text="selectedBooking?.zip"></p>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1">State / Province</p>
                            <p class="text-sm font-semibold text-gray-800" x-text="selectedBooking?.state"></p>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1">Country</p>
                            <p class="text-sm font-semibold text-gray-800" x-text="selectedBooking?.country"></p>
                        </div>
                    </div>
                </div>

                <!-- Response Actions -->
                <div class="pt-4 flex gap-4 border-t border-gray-100">
                    <a :href="'mailto:' + selectedBooking?.email" class="flex-1 flex items-center justify-center space-x-3 navy-brand-bg text-white py-3 rounded-xl text-[10px] font-black uppercase tracking-widest hover:opacity-90 transition-all shadow-lg shadow-blue-900/20">
                        <span>Initiate Email</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </a>
                    <a :href="'tel:' + selectedBooking?.phone" class="flex-1 flex items-center justify-center space-x-3 bg-gray-900 text-white py-3 rounded-xl text-[10px] font-black uppercase tracking-widest hover:opacity-90 transition-all">
                        <span>Call Contact</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function bookingManager() {
            return {
                bookings: <?php echo json_encode($bookings); ?>,
                isModalOpen: false,
                selectedBooking: null,
                revealed: false,

                init() {
                    setTimeout(() => this.revealed = true, 100);
                },

                formatDate(dateStr) {
                    if(!dateStr) return '';
                    const date = new Date(dateStr);
                    return date.toLocaleDateString('en-GB', { day: '2-digit', month: 'short', year: 'numeric' }).toUpperCase();
                },

                openModal(booking) {
                    this.selectedBooking = booking;
                    this.isModalOpen = true;
                },

                closeModal() {
                    this.isModalOpen = false;
                    setTimeout(() => { this.selectedBooking = null; }, 300);
                }
            }
        }
    </script>
</body>
</html>
