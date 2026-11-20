@extends('layouts.app')

@section('content')
    <x-common.page-breadcrumb pageTitle="Shipment Trackers" />

    <div class="space-y-6">
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4 md:gap-6">
            <!-- Metric 1 -->
            <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
                <div class="flex items-center justify-center w-12 h-12 bg-gray-100 rounded-xl dark:bg-gray-800 text-primary">
                    <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H7c0-2.76 2.24-5 5-5s5 2.24 5 5c0 1.03-.42 1.98-1.07 2.75z"/></svg>
                </div>
                <div class="mt-4 flex items-end justify-between">
                    <div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Active Shipments</span>
                        <h4 class="text-title-sm font-bold text-gray-800 dark:text-white mt-1">24 Voyages</h4>
                    </div>
                    <span class="inline-flex items-center gap-1.5 text-xs font-medium text-success">
                        <svg class="fill-current" width="10" height="10" viewBox="0 0 10 10"><path d="M5 0L0 5h3v5h4V5h3L5 z"/></svg>
                        +4.5%
                    </span>
                </div>
            </div>

            <!-- Metric 2 -->
            <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
                <div class="flex items-center justify-center w-12 h-12 bg-gray-100 rounded-xl dark:bg-gray-800 text-success">
                    <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                </div>
                <div class="mt-4 flex items-end justify-between">
                    <div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">On Time Arrival</span>
                        <h4 class="text-title-sm font-bold text-gray-800 dark:text-white mt-1">92.8%</h4>
                    </div>
                    <span class="inline-flex items-center gap-1.5 text-xs font-medium text-success">
                        +1.2%
                    </span>
                </div>
            </div>

            <!-- Metric 3 -->
            <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
                <div class="flex items-center justify-center w-12 h-12 bg-gray-100 rounded-xl dark:bg-gray-800 text-warning">
                    <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24"><path d="M1 21h22L12 2 1 21zm12-3h-2v-2h2v2zm0-4h-2v-4h2v4z"/></svg>
                </div>
                <div class="mt-4 flex items-end justify-between">
                    <div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Delayed / Weather</span>
                        <h4 class="text-title-sm font-bold text-gray-800 dark:text-white mt-1">2 Vessels</h4>
                    </div>
                    <span class="inline-flex items-center gap-1.5 text-xs font-medium text-error">
                        -1 alert
                    </span>
                </div>
            </div>

            <!-- Metric 4 -->
            <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
                <div class="flex items-center justify-center w-12 h-12 bg-gray-100 rounded-xl dark:bg-gray-800 text-info">
                    <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                </div>
                <div class="mt-4 flex items-end justify-between">
                    <div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Total Cargo Tonnage</span>
                        <h4 class="text-title-sm font-bold text-gray-800 dark:text-white mt-1">145,820 MT</h4>
                    </div>
                    <span class="inline-flex items-center gap-1.5 text-xs font-medium text-success">
                        +12.4%
                    </span>
                </div>
            </div>
        </div>

        <!-- Shipment Table Component -->
        <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
            <div class="px-6 py-5 flex flex-col sm:flex-row sm:items-center sm:justify-between border-b border-gray-200 dark:border-gray-800 gap-4">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Active Shipment Tracking Registry</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Real-time marine voyage monitoring and cargo logistics status</p>
                </div>
                <div class="flex items-center gap-3">
                    <input type="text" placeholder="Search vessel or voyage..." class="px-4 py-2 text-sm rounded-lg border border-gray-300 dark:border-gray-700 bg-transparent text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50">
                    <button class="inline-flex items-center gap-2 px-4 py-2 text-sm font-medium text-white bg-primary rounded-lg hover:bg-primary/90 transition">
                        + New Shipment
                    </button>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-gray-200 dark:border-gray-800 text-xs font-semibold uppercase text-gray-500 dark:text-gray-400 bg-gray-50 dark:bg-white/[0.02]">
                            <th class="py-3 px-6">Vessel Name / Voyage</th>
                            <th class="py-3 px-6">Cargo Type</th>
                            <th class="py-3 px-6">Origin & Destination</th>
                            <th class="py-3 px-6">ETD / ETA</th>
                            <th class="py-3 px-6">Status</th>
                            <th class="py-3 px-6 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-800 text-sm text-gray-700 dark:text-gray-300">
                        <!-- Row 1 -->
                        <tr class="hover:bg-gray-50 dark:hover:bg-white/[0.01]">
                            <td class="py-4 px-6 font-medium text-gray-900 dark:text-white">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-primary/10 text-primary flex items-center justify-center font-bold">MV</div>
                                    <div>
                                        <div class="font-bold">MV Srikandi Express</div>
                                        <div class="text-xs text-gray-500">Voyage #SE-2026-089</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-6">Frozen Prawns (Export)</td>
                            <td class="py-4 px-6">
                                <div class="font-medium">Surabaya (ID SUB)</div>
                                <div class="text-xs text-gray-500">to Tokyo (JP TYO)</div>
                            </td>
                            <td class="py-4 px-6">
                                <div>22 Nov 2026</div>
                                <div class="text-xs text-success">ETA: 02 Dec 2026</div>
                            </td>
                            <td class="py-4 px-6">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-success/10 text-success">On Schedule</span>
                            </td>
                            <td class="py-4 px-6 text-right">
                                <button class="text-primary hover:underline font-medium text-xs">Track Map</button>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr class="hover:bg-gray-50 dark:hover:bg-white/[0.01]">
                            <td class="py-4 px-6 font-medium text-gray-900 dark:text-white">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-warning/10 text-warning flex items-center justify-center font-bold">TB</div>
                                    <div>
                                        <div class="font-bold">TB Nusantara Power IX</div>
                                        <div class="text-xs text-gray-500">Voyage #NP-2026-142</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-6">Bulk Coal / Bunkers</td>
                            <td class="py-4 px-6">
                                <div class="font-medium">Balikpapan (ID BPN)</div>
                                <div class="text-xs text-gray-500">to Semarang (ID SRG)</div>
                            </td>
                            <td class="py-4 px-6">
                                <div>18 Nov 2026</div>
                                <div class="text-xs text-warning">ETA: 24 Nov 2026</div>
                            </td>
                            <td class="py-4 px-6">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-warning/10 text-warning">Weather Delay</span>
                            </td>
                            <td class="py-4 px-6 text-right">
                                <button class="text-primary hover:underline font-medium text-xs">Track Map</button>
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr class="hover:bg-gray-50 dark:hover:bg-white/[0.01]">
                            <td class="py-4 px-6 font-medium text-gray-900 dark:text-white">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-info/10 text-info flex items-center justify-center font-bold">KM</div>
                                    <div>
                                        <div class="font-bold">KM Logistik Nusantara 3</div>
                                        <div class="text-xs text-gray-500">Voyage #LN-2026-301</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-6">General Cargo & Provisions</td>
                            <td class="py-4 px-6">
                                <div class="font-medium">Jakarta (ID JKT)</div>
                                <div class="text-xs text-gray-500">to Makassar (ID UPG)</div>
                            </td>
                            <td class="py-4 px-6">
                                <div>20 Nov 2026</div>
                                <div class="text-xs text-success">ETA: 23 Nov 2026</div>
                            </td>
                            <td class="py-4 px-6">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-success/10 text-success">On Schedule</span>
                            </td>
                            <td class="py-4 px-6 text-right">
                                <button class="text-primary hover:underline font-medium text-xs">Track Map</button>
                            </td>
                        </tr>

                        <!-- Row 4 -->
                        <tr class="hover:bg-gray-50 dark:hover:bg-white/[0.01]">
                            <td class="py-4 px-6 font-medium text-gray-900 dark:text-white">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-purple-500/10 text-purple-600 flex items-center justify-center font-bold">MT</div>
                                    <div>
                                        <div class="font-bold">MT Marina Star</div>
                                        <div class="text-xs text-gray-500">Voyage #MS-2026-077</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-6">Marine Gas Oil (MGO)</td>
                            <td class="py-4 px-6">
                                <div class="font-medium">Singapore (SG SIN)</div>
                                <div class="text-xs text-gray-500">to Banjarmasin (ID BJM)</div>
                            </td>
                            <td class="py-4 px-6">
                                <div>19 Nov 2026</div>
                                <div class="text-xs text-success">ETA: 22 Nov 2026</div>
                            </td>
                            <td class="py-4 px-6">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-success/10 text-success">On Schedule</span>
                            </td>
                            <td class="py-4 px-6 text-right">
                                <button class="text-primary hover:underline font-medium text-xs">Track Map</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination Footer -->
            <div class="px-6 py-4 flex items-center justify-between border-t border-gray-200 dark:border-gray-800 text-sm text-gray-500 dark:text-gray-400">
                <div>Showing <span class="font-medium text-gray-800 dark:text-white">1</span> to <span class="font-medium text-gray-800 dark:text-white">4</span> of <span class="font-medium text-gray-800 dark:text-white">24</span> voyages</div>
                <div class="flex items-center gap-2">
                    <button class="px-3 py-1.5 rounded-lg border border-gray-300 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-white/[0.05] disabled:opacity-50" disabled>Previous</button>
                    <button class="px-3 py-1.5 rounded-lg border border-gray-300 dark:border-gray-700 bg-primary text-white">1</button>
                    <button class="px-3 py-1.5 rounded-lg border border-gray-300 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-white/[0.05]">2</button>
                    <button class="px-3 py-1.5 rounded-lg border border-gray-300 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-white/[0.05]">3</button>
                    <button class="px-3 py-1.5 rounded-lg border border-gray-300 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-white/[0.05]">Next</button>
                </div>
            </div>
        </div>
    </div>
@endsection
