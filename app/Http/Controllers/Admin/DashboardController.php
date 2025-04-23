<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $orders = Order::latest()->paginate(10);

        $totalOrders = Order::count();
        $confirmedOrders = Order::whereIn('status', ['confirmed', 'paid', 'cash_on_delivery'])->count();
        $pendingOrders = Order::whereIn('status', ['awaiting_bank_transfer', 'pending'])->count();
        $rejectedOrders = Order::where('status', 'rejected')->count();

        // Current month orders
        $currentMonth = now()->month;
        $previousMonth = now()->subMonth()->month;

        $currentTotal = Order::whereMonth('created_at', $currentMonth)->count();
        $previousTotal = Order::whereMonth('created_at', $previousMonth)->count();

        $currentConfirmed = Order::whereMonth('created_at', $currentMonth)
            ->whereIn('status', ['confirmed', 'paid'])->count();
        $previousConfirmed = Order::whereMonth('created_at', $previousMonth)
            ->whereIn('status', ['confirmed', 'paid'])->count();

        $currentPending = Order::whereMonth('created_at', $currentMonth)
            ->whereIn('status', ['awaiting_bank_transfer', 'pending'])->count();
        $previousPending = Order::whereMonth('created_at', $previousMonth)
            ->whereIn('status', ['awaiting_bank_transfer', 'pending'])->count();

        $currentRejected = Order::whereMonth('created_at', $currentMonth)
            ->where('status', 'rejected')->count();
        $previousRejected = Order::whereMonth('created_at', $previousMonth)
            ->where('status', 'rejected')->count();

        // Calculate percentage change
        $percentages = [
            'total' => $this->calculatePercentageChange($previousTotal, $currentTotal),
            'confirmed' => $this->calculatePercentageChange($previousConfirmed, $currentConfirmed),
            'pending' => $this->calculatePercentageChange($previousPending, $currentPending),
            'rejected' => $this->calculatePercentageChange($previousRejected, $currentRejected),
        ];

        $monthlyOrders = Order::selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->whereIn('status', ['confirmed', 'paid', 'cash_on_delivery'])
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month')
            ->mapWithKeys(function ($item, $key) {
                return [(int) $key => $item];
            })
            ->toArray();

        // Fill missing months with 0
        $monthlyOrders = array_replace(array_fill(1, 12, 0), $monthlyOrders);


        return view('admin.home', compact(
            'orders',
            'totalOrders',
            'confirmedOrders',
            'pendingOrders',
            'rejectedOrders',
            'monthlyOrders',
            'percentages'
        ));
    }

    private function calculatePercentageChange($previous, $current)
    {
        if ($previous == 0) {
            return $current > 0 ? 100 : 0; 
        }
        return (($current - $previous) / $previous) * 100;
    }


    public function productList()
    {
        return view('admin.admin-product.product-list');
    }

    public function categoryAdd()
    {
        return view('admin.admin-category.category-create');
    }
}
