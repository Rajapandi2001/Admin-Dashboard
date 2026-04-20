<?php
/**
 * Professional Enquiry Manager - Midas Touch Admin
 * High-density Registry List with Modal Detail Flow and DB-Aligned States.
 */
require_once __DIR__ . '/includes/auth-check.php';
require_once __DIR__ . '/../config/database.php';

// Fetch stats for the sidebar (Aligning with DB Enum: new, read, replied, archived)
$statsStmt = $pdo->query("SELECT status, COUNT(*) as count FROM enquiries GROUP BY status");
$stats = $statsStmt->fetchAll(PDO::FETCH_KEY_PAIR);
$totalEnquiries = array_sum($stats);

// Fetch all enquiries
$stmt = $pdo->query("SELECT * FROM enquiries ORDER BY submitted_at DESC");
$enquiries = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../images/fav.png">
    <title>Enquiry Console - Midas Touch Admin</title>
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
        .navy-brand-border { border-color: #1b3666; }

        /* Animation Primitives */
        .reveal-item { opacity: 0; transform: translateY(20px); transition: all 0.7s cubic-bezier(0.16, 1, 0.3, 1); }
        .reveal-left { opacity: 0; transform: translateX(-30px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
        .revealed .reveal-item { opacity: 1; transform: translateY(0); }
        .revealed .reveal-left { opacity: 1; transform: translateX(0); }
    </style>
</head>
<body class="flex flex-col h-screen overflow-hidden" x-data="enquiryManager()" x-init="init()" @keydown.escape="closeModal()" :class="{ 'revealed': revealed }">
    
    <?php 
    $currentPageTitle = 'Enquiry Console';
    $currentPageSubtitle = 'Registry List';
    require_once 'includes/navbar.php'; 
    ?>

    <div class="flex flex-1 overflow-hidden">
        
        <!-- Sidebar: Status Protocols -->
        <aside class="w-72 bg-white border-r-2 navy-brand-border flex flex-col shrink-0 reveal-left" style="transition-delay: 100ms;">
            <div class="p-8 space-y-8">
                <div>
                    <h2 class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-6 px-4">Registry Filter</h2>
                    <nav class="space-y-1">
                        <button @click="filter = 'all'" :class="filter === 'all' ? 'bg-slate-900 text-white' : 'text-gray-500 hover:bg-gray-50'" class="w-full flex items-center justify-between px-5 py-3 rounded-lg text-[11px] font-bold uppercase tracking-widest transition-all">
                            <span>All Inquiries</span>
                            <span class="opacity-40" x-text="stats.total"><?php echo $totalEnquiries; ?></span>
                        </button>
                        <button @click="filter = 'new'" :class="filter === 'new' ? 'bg-blue-600 text-white' : 'text-gray-500 hover:bg-gray-50'" class="w-full flex items-center justify-between px-5 py-3 rounded-lg text-[11px] font-bold uppercase tracking-widest transition-all">
                            <span class="flex items-center">
                                <span class="w-1.5 h-1.5 rounded-full bg-white mr-2" x-show="filter === 'new'"></span>
                                New Priority
                            </span>
                            <span class="opacity-80" x-text="stats.new"><?php echo $stats['new'] ?? 0; ?></span>
                        </button>
                        <button @click="filter = 'read'" :class="filter === 'read' ? 'bg-amber-500 text-white' : 'text-gray-500 hover:bg-gray-50'" class="w-full flex items-center justify-between px-5 py-3 rounded-lg text-[11px] font-bold uppercase tracking-widest transition-all">
                            <span>Processing</span>
                            <span class="opacity-80" x-text="stats.read"><?php echo $stats['read'] ?? 0; ?></span>
                        </button>
                        <button @click="filter = 'replied'" :class="filter === 'replied' ? 'bg-emerald-600 text-white' : 'text-gray-500 hover:bg-gray-50'" class="w-full flex items-center justify-between px-5 py-3 rounded-lg text-[11px] font-bold uppercase tracking-widest transition-all">
                            <span>Completed</span>
                            <span class="opacity-80" x-text="stats.replied"><?php echo $stats['replied'] ?? 0; ?></span>
                        </button>
                        <div class="pt-4 mt-4 border-t border-gray-50">
                            <button @click="filter = 'archived'" :class="filter === 'archived' ? 'bg-gray-200 text-gray-700' : 'text-gray-400 hover:bg-gray-50'" class="w-full flex items-center justify-between px-5 py-3 rounded-lg text-[11px] font-bold uppercase tracking-widest transition-all">
                                <span>Archive</span>
                                <span class="opacity-60" x-text="stats.archived"><?php echo $stats['archived'] ?? 0; ?></span>
                            </button>
                        </div>
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

        <!-- Main Workspace: HD List View -->
        <main class="flex-1 overflow-hidden flex flex-col bg-white reveal-item" style="transition-delay: 200ms;">
            
            <!-- List Header -->
            <div class="px-10 py-6 border-b border-gray-100 bg-gray-50/30 flex justify-between items-center">
                <h2 class="text-xs font-black text-gray-900 uppercase tracking-[0.3em]" x-text="filterTitle"></h2>
                <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">
                    Detection: <span class="text-gray-900" x-text="filteredEnquiries.length"></span> Records
                </div>
            </div>

            <!-- Scrollable List Area -->
            <div class="flex-1 overflow-y-auto custom-scroll">
                <table class="w-full text-left border-collapse">
                    <thead class="sticky top-0 bg-white z-10">
                        <tr class="border-b border-gray-100">
                            <th class="px-10 py-5 text-[10px] font-black text-gray-400 uppercase tracking-widest">Identity</th>
                            <th class="px-10 py-5 text-[10px] font-black text-gray-400 uppercase tracking-widest">Protocol / Subject</th>
                            <th class="px-10 py-5 text-[10px] font-black text-gray-400 uppercase tracking-widest">System Date</th>
                            <th class="px-10 py-5 text-[10px] font-black text-gray-400 uppercase tracking-widest">Status</th>
                            <th class="px-10 py-5 text-[10px] font-black text-gray-400 uppercase tracking-widest text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        <template x-for="item in filteredEnquiries" :key="item.id">
                            <tr class="table-row-hover transition-colors group cursor-pointer" @click="openModal(item)">
                                <td class="px-10 py-6">
                                    <div class="flex items-center space-x-4">
                                        <div class="w-8 h-8 rounded bg-gray-100 flex items-center justify-center text-[9px] font-black text-gray-400 border border-gray-200" x-text="item.first_name[0] + item.last_name[0]"></div>
                                        <div>
                                            <p class="text-sm font-bold text-gray-900 leading-none mb-1" x-text="item.first_name + ' ' + item.last_name"></p>
                                            <p class="text-[10px] font-medium text-gray-400" x-text="item.email"></p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-10 py-6">
                                    <p class="text-[11px] font-bold text-gray-700 uppercase tracking-tight truncate max-w-xs" x-text="item.subject"></p>
                                </td>
                                <td class="px-10 py-6">
                                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest" x-text="formatDate(item.submitted_at)"></p>
                                </td>
                                <td class="px-10 py-6">
                                    <span :class="getStatusClass(item.status)" class="px-3 py-1 text-[9px] font-black uppercase rounded-full tracking-widest border" x-text="displayStatus(item.status)"></span>
                                </td>
                                <td class="px-10 py-6 text-right">
                                    <button class="text-[10px] font-black text-blue-600 uppercase tracking-[0.2em] opacity-0 group-hover:opacity-100 transition-opacity">Open Record</button>
                                </td>
                            </tr>
                        </template>
                    </tbody>
                </table>

                <!-- Empty State -->
                <div x-show="filteredEnquiries.length === 0" class="py-40 text-center">
                    <p class="text-[10px] font-bold text-gray-300 uppercase tracking-[0.6em] mb-4">Registry Clear</p>
                    <p class="text-xs text-gray-400 italic">No enquiries match the current filter protocol.</p>
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
            class="bg-white w-full max-w-2xl rounded-2xl shadow-2xl overflow-hidden flex flex-col max-h-[90vh]"
            @click.away="closeModal()"
            x-transition:enter="transition ease-out duration-300 scale-95"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
        >
            <!-- Modal Header -->
            <div class="p-8 border-b border-gray-100 flex justify-between items-start shrink-0">
                <div>
                    <p class="text-[10px] font-black text-blue-600 uppercase tracking-[0.4em] mb-3">Record Identity</p>
                    <h3 class="text-2xl font-bold text-gray-900 tracking-tight" x-text="selectedEnquiry?.first_name + ' ' + selectedEnquiry?.last_name"></h3>
                    <div class="flex items-center space-x-3 mt-2 text-[10px] font-bold text-gray-400 uppercase tracking-widest">
                        <span x-text="selectedEnquiry?.email"></span>
                        <span class="w-1 h-1 bg-gray-200 rounded-full"></span>
                        <span x-text="selectedEnquiry ? formatDate(selectedEnquiry.submitted_at) : ''"></span>
                    </div>
                </div>
                <button @click="closeModal()" class="p-2 hover:bg-gray-100 rounded-xl transition-colors">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="flex-1 overflow-y-auto p-10 space-y-10 custom-scroll bg-gray-50/30">
                
                <!-- Subject Header -->
                <div>
                    <p class="text-[9px] font-black text-gray-300 uppercase tracking-[0.3em] mb-4">Transmission Subject</p>
                    <p class="text-xl font-bold text-gray-800 tracking-tight" x-text="selectedEnquiry?.subject"></p>
                </div>

                <!-- Message Content -->
                <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm">
                    <p class="text-[9px] font-black text-gray-300 uppercase tracking-[0.3em] mb-6">Information Payload</p>
                    <p class="text-base text-gray-700 leading-relaxed font-medium whitespace-pre-wrap" x-text="selectedEnquiry?.message"></p>
                </div>

                <!-- Protocol Actions -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pt-6 border-t border-gray-100">
                    <!-- Status Management -->
                    <div>
                        <p class="text-[9px] font-black text-gray-400 uppercase tracking-[0.3em] mb-4">Registry Status</p>
                        <div class="flex gap-2">
                            <button @click="updateStatus(selectedEnquiry.id, 'read')" :class="selectedEnquiry?.status === 'read' ? 'bg-amber-500 text-white border-amber-500' : 'bg-white text-gray-400 border-gray-200 hover:border-amber-500 hover:text-amber-500'" class="flex-1 py-3 text-[10px] font-black uppercase tracking-widest border rounded-xl transition-all">Process</button>
                            <button @click="updateStatus(selectedEnquiry.id, 'replied')" :class="selectedEnquiry?.status === 'replied' ? 'bg-emerald-600 text-white border-emerald-600' : 'bg-white text-gray-400 border-gray-200 hover:border-emerald-600 hover:text-emerald-600'" class="flex-1 py-3 text-[10px] font-black uppercase tracking-widest border rounded-xl transition-all">Complete</button>
                            <button @click="updateStatus(selectedEnquiry.id, 'archived')" :class="selectedEnquiry?.status === 'archived' ? 'bg-slate-900 text-white border-slate-900' : 'bg-white text-gray-400 border-gray-200 hover:border-slate-900 hover:text-slate-900'" class="flex-1 py-3 text-[10px] font-black uppercase tracking-widest border rounded-xl transition-all">Archive</button>
                        </div>
                    </div>
                    <!-- Rapid Response -->
                    <div>
                        <p class="text-[9px] font-black text-gray-400 uppercase tracking-[0.3em] mb-4">Rapid Response</p>
                        <a :href="'mailto:' + selectedEnquiry?.email + '?subject=Re: ' + selectedEnquiry?.subject" class="flex items-center justify-center space-x-3 w-full navy-brand-bg text-white py-3 rounded-xl text-[10px] font-black uppercase tracking-widest hover:opacity-90 transition-all shadow-lg shadow-blue-900/20">
                            <span>Initiate Transmission</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function enquiryManager() {
            return {
                filter: 'all',
                enquiries: <?php echo json_encode($enquiries); ?>,
                stats: {
                    total: <?php echo $totalEnquiries; ?>,
                    new: <?php echo $stats['new'] ?? 0; ?>,
                    read: <?php echo $stats['read'] ?? 0; ?>,
                    replied: <?php echo $stats['replied'] ?? 0; ?>,
                    archived: <?php echo $stats['archived'] ?? 0; ?>
                },
                isModalOpen: false,
                selectedEnquiry: null,
                revealed: false,

                init() {
                    setTimeout(() => this.revealed = true, 100);
                },

                get filterTitle() {
                    const titles = {
                        all: 'Comprehensive Registry',
                        new: 'Priority Protocols',
                        read: 'Active Processing',
                        replied: 'Finalized Records',
                        archived: 'Information Archive'
                    };
                    return titles[this.filter];
                },

                get filteredEnquiries() {
                    if (this.filter === 'all') return this.enquiries;
                    return this.enquiries.filter(e => e.status === this.filter);
                },

                formatDate(dateStr) {
                    const date = new Date(dateStr);
                    return date.toLocaleDateString('en-GB', { day: '2-digit', month: 'short', year: 'numeric' }).toUpperCase();
                },

                displayStatus(status) {
                    const mapping = {
                        new: 'New',
                        read: 'Processing',
                        replied: 'Completed',
                        archived: 'Archived'
                    };
                    return mapping[status] || status.toUpperCase();
                },

                getStatusClass(status) {
                    const classes = {
                        new: 'bg-blue-50 text-blue-600 border-blue-100',
                        read: 'bg-amber-50 text-amber-600 border-amber-100', // Processing
                        replied: 'bg-emerald-50 text-emerald-600 border-emerald-100', // Completed
                        archived: 'bg-gray-50 text-gray-400 border-gray-100'
                    };
                    return classes[status] || 'bg-gray-100 text-gray-500';
                },

                openModal(enquiry) {
                    this.selectedEnquiry = enquiry;
                    this.isModalOpen = true;
                },

                closeModal() {
                    this.isModalOpen = false;
                    setTimeout(() => { this.selectedEnquiry = null; }, 300);
                },

                async updateStatus(id, status) {
                    try {
                        const response = await fetch('update-enquiry-status.php', {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/json' },
                            body: JSON.stringify({ id, status })
                        });
                        const result = await response.json();
                        if (result.success) {
                            const index = this.enquiries.findIndex(e => e.id === id);
                            if (index !== -1) {
                                const oldStatus = this.enquiries[index].status;
                                this.enquiries[index].status = status;
                                
                                // Update stats reactive object
                                if (this.stats[oldStatus] !== undefined) this.stats[oldStatus]--;
                                if (this.stats[status] !== undefined) this.stats[status]++;
                                
                                // Update selected enquiry if open
                                if (this.selectedEnquiry && this.selectedEnquiry.id === id) {
                                    this.selectedEnquiry.status = status;
                                }
                            }
                        } else {
                            alert('Network Protocol Error: ' + result.message);
                        }
                    } catch (e) {
                        console.error(e);
                        alert('Fatal Error: Connectivity Lost.');
                    }
                }
            }
        }
    </script>
</body>
</html>
