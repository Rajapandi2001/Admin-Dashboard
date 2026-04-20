<?php
/**
 * Professional Admin Dashboard - Midas Touch 
 * High-contrast Navy Blue branding and icon-free UI.
 */
require_once __DIR__ . '/includes/auth-check.php';
require_once __DIR__ . '/../config/database.php';

// Fetch stats for dashboard
$stmt = $pdo->query("SELECT COUNT(*) FROM media_items");
$totalMedia = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT COUNT(*) FROM enquiries WHERE status = 'new'");
$newEnquiries = $stmt->fetchColumn();

// Pending campus tour bookings count (handles missing table gracefully)
try {
    $stmt = $pdo->query("SELECT COUNT(*) FROM campus_tour_bookings WHERE status = 'pending'");
    $pendingBookings = $stmt->fetchColumn();
} catch (PDOException $e) {
    $pendingBookings = 0;
}

$stmt = $pdo->query("SELECT * FROM enquiries ORDER BY submitted_at DESC LIMIT 6");
$recentEnquiries = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../images/fav.png">
    <title>Dashboard - Midas Touch Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f3f4f6; color: #111827; }
        .navy-brand-bg { background-color: #1b3666; }
        .stat-card { transition: all 0.3s ease; border-radius: 1rem; }
        .stat-card:hover { transform: translateY(-4px); border-color: #1b3666; box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1); }
        .sidebar { background-color: #ffffff; border-right: 2px solid #1b3666; }
        .nav-link { transition: all 0.2s; color: #6b7280; }
        .nav-link:hover { color: #111827; background-color: #f9fafb; }
        .nav-link.active { color: #ffffff; background-color: #1b3666; }

        /* Animation Primitives */
        .reveal-item { opacity: 0; transform: translateY(20px); transition: all 0.7s cubic-bezier(0.16, 1, 0.3, 1); }
        .reveal-left { opacity: 0; transform: translateX(-30px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
        .revealed .reveal-item { opacity: 1; transform: translateY(0); }
        .revealed .reveal-left { opacity: 1; transform: translateX(0); }
    </style>
</head>
<body class="flex flex-col h-screen overflow-hidden" x-data="{ revealed: false }" x-init="setTimeout(() => revealed = true, 100)" :class="{ 'revealed': revealed }">
    
    <?php 
    $currentPageTitle = 'Admin Dashboard';
    $currentPageSubtitle = 'Management Suite';
    require_once 'includes/navbar.php'; 
    ?>

    <div class="flex flex-1 overflow-hidden">
        
        <!-- Sidebar -->
        <aside class="w-64 sidebar flex flex-col shrink-0 reveal-left" style="transition-delay: 100ms;">
            <div class="p-4 mt-6">
                <nav class="space-y-1">
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em] mb-4 px-4">Navigation</p>
                    
                    <a href="dashboard.php" class="nav-link active flex items-center px-4 py-3 rounded-lg text-sm font-semibold shadow-lg shadow-blue-900/10">
                        Main Dashboard
                    </a>
                    
                    <a href="media.php" class="nav-link flex items-center px-4 py-3 rounded-lg text-sm font-semibold">
                        Media Manager
                    </a>
                    
                    <a href="enquiries.php" class="nav-link flex items-center px-4 py-3 rounded-lg text-sm font-semibold">
                        Inbox Console
                    </a>

                    <a href="bookings.php" class="nav-link flex items-center justify-between px-4 py-3 rounded-lg text-sm font-semibold">
                        <span>Tour Bookings</span>
                        <?php if ($pendingBookings > 0): ?>
                            <span class="ml-auto text-[9px] font-black bg-blue-600 text-white rounded-full px-2 py-0.5 leading-none"><?php echo $pendingBookings; ?></span>
                        <?php endif; ?>
                    </a>

                    <div class="pt-8 mt-8 border-t border-gray-100">
                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em] mb-4 px-4">Session</p>
                        <a href="logout.php" class="flex items-center px-4 py-3 rounded-lg text-sm font-bold text-red-600 hover:bg-red-50 transition-colors">
                            Sign Out
                        </a>
                    </div>
                </nav>
            </div>

            <div class="mt-auto p-6 bg-gray-50/50 border-t border-gray-100">
                <p class="text-[9px] text-gray-400 font-bold uppercase tracking-widest mb-1">Midas Touch School</p>
                <p class="text-[10px] text-gray-600 font-medium leading-relaxed">Portal version 2.5.1 Stable</p>
                <p class="text-[8px] text-gray-400 font-bold uppercase tracking-widest mt-2">developed by LearnLike</p>
            </div>
        </aside>

        <!-- Main Workspace -->
        <main class="flex-1 overflow-y-auto p-12 space-y-10">
            
            <!-- High-Density Status Console -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <!-- Media Inventory Module (Static) -->
                <div class="group relative bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden reveal-item" style="transition-delay: 200ms;">
                    <div class="absolute top-0 left-0 w-1.5 h-full navy-brand-bg opacity-20"></div>
                    <div class="p-10">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-[0.4em] mb-3">Asset Inventory</p>
                                <h3 class="text-4xl font-bold text-gray-900 tracking-tighter">Site Media</h3>
                                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-6 flex items-center space-x-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                    <span>Database Synchronized</span>
                                </p>
                            </div>
                            <div class="bg-gray-50 p-6 rounded-2xl border border-gray-100 text-center min-w-[100px]">
                                <span class="text-xs font-bold text-gray-400 uppercase block mb-1">Total</span>
                                <span class="text-4xl font-bold tracking-tighter text-gray-900"><?php echo $totalMedia; ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Enquiry Intelligence Module (Static) -->
                <div class="group relative bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden reveal-item" style="transition-delay: 300ms;">
                    <div class="absolute top-0 left-0 w-1.5 h-full bg-blue-600 <?php echo $newEnquiries > 0 ? 'opacity-100' : 'opacity-20'; ?>"></div>
                    <div class="p-10">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-[0.4em] mb-3">Communication Registry</p>
                                <h3 class="text-4xl font-bold text-gray-900 tracking-tighter">Inquiries</h3>
                                
                                <div class="mt-6">
                                    <?php if ($newEnquiries > 0): ?>
                                        <div class="inline-flex items-center space-x-2 px-3 py-1 bg-blue-600 text-white rounded-full">
                                            <span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span>
                                            <span class="text-[9px] font-black uppercase tracking-widest">Priority Actions Required</span>
                                        </div>
                                    <?php else: ?>
                                        <div class="inline-flex items-center space-x-2 px-3 py-1 bg-gray-100 text-gray-400 rounded-full">
                                            <span class="w-1.5 h-1.5 rounded-full bg-gray-300"></span>
                                            <span class="text-[9px] font-black uppercase tracking-widest">All Records Processed</span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="p-6 rounded-2xl border text-center min-w-[100px] <?php echo $newEnquiries > 0 ? 'bg-blue-50 border-blue-100 text-blue-900' : 'bg-gray-50 border-gray-100 text-gray-400'; ?>">
                                <span class="text-xs font-bold uppercase block mb-1">New</span>
                                <span class="text-4xl font-bold tracking-tighter"><?php echo $newEnquiries; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="bg-white border border-gray-200 shadow-sm rounded-xl overflow-hidden reveal-item" style="transition-delay: 400ms;">
                <div class="px-8 py-6 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
                    <h3 class="text-xs font-bold text-gray-900 uppercase tracking-[0.2em] leading-none">Activity Feed</h3>
                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Consolidated Table</span>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <tbody class="divide-y divide-gray-50 text-sm">
                            <?php foreach ($recentEnquiries as $enquiry): ?>
                            <tr class="hover:bg-gray-50/50 transition-colors">
                                <td class="px-8 py-6">
                                    <p class="text-sm font-bold text-gray-900 leading-none mb-1"><?php echo $enquiry['first_name'] . ' ' . $enquiry['last_name']; ?></p>
                                    <p class="text-[10px] font-bold text-gray-300 uppercase tracking-tight"><?php echo $enquiry['email']; ?></p>
                                </td>
                                <td class="px-8 py-6">
                                    <p class="text-xs font-bold text-gray-500 uppercase tracking-widest truncate max-w-xs"><?php echo $enquiry['subject']; ?></p>
                                </td>
                                <td class="px-8 py-6">
                                    <div class="flex items-center space-x-3">
                                        <?php if ($enquiry['status'] === 'new'): ?>
                                            <span class="px-2 py-1 navy-bg text-white text-[9px] font-bold uppercase rounded leading-none transition-all">New Entry</span>
                                        <?php else: ?>
                                            <span class="px-2 py-1 bg-gray-100 text-gray-500 text-[9px] font-bold uppercase rounded leading-none">Processed</span>
                                        <?php endif; ?>
                                        <span class="text-[10px] font-bold text-gray-300 uppercase"><?php echo date('M d, H:i', strtotime($enquiry['submitted_at'])); ?></span>
                                    </div>
                                </td>
                                <td class="px-8 py-6 text-right">
                                    <a href="enquiries.php" class="text-xs font-bold text-gray-400 hover:text-gray-900 uppercase tracking-widest transition-colors">View Details</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php if (empty($recentEnquiries)): ?>
                            <tr>
                                <td colspan="4" class="px-8 py-20 text-center">
                                    <p class="text-[10px] font-bold text-gray-300 uppercase tracking-[0.3em]">System Registry Empty</p>
                                </td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>


        </main>
    </div>
</body>
</html>
