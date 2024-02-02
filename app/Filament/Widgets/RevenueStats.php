<?php

namespace App\Filament\Widgets;

use App\Models\Ticket;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class RevenueStats extends BaseWidget
{
    protected function getStats(): array
    {
        $quantity = Ticket::where('paid', 1)->whereMonth('created_at', now()->month)->sum('quantity');
        $lastMonthQuantity = Ticket::where('paid', 1)->whereMonth('created_at', now()->month - 1)->sum('quantity');
        $revenue = $quantity * 100;
        $lastMonthRevenue = $lastMonthQuantity * 100;
        $diff = $revenue - $lastMonthRevenue;
        $user=User::where('type','user')->count();
        $userThisMonth=User::where('type','user')->whereMonth('created_at',now()->month)->count();
        return [
            Stat::make('Revenue This Month', $revenue)
                ->description((abs($diff) > 1000 ? number_format(round(abs($diff) / 1000, 1), 1) . 'k' : abs($diff)) . ' ' . ($diff >= 0 ? 'increase' : 'decrease'))
                ->descriptionIcon($diff > 0 ? 'heroicon-m-arrow-trending-up' : ($diff < 0 ? 'heroicon-m-arrow-trending-down' : ''))
                ->chart($diff >= 0 ? [7, 2, 10, 3, 15, 4, 17] : [17, 16, 14, 15, 14, 13, 12])
                ->color($diff >= 0 ? 'success' : 'danger'),

            Stat::make('Total Users', User::where('type', 'user')->count())
                ->description(($user > 0 ? ($userThisMonth / $user * 100) : '0') . '% increase')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
        ];
    }
}
