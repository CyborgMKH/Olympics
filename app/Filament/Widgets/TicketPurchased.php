<?php

namespace App\Filament\Widgets;

use App\Models\Ticket;
use Filament\Widgets\ChartWidget;

class TicketPurchased extends ChartWidget
{
    protected static ?string $heading = 'Ticekts Purchased';

    protected function getData(): array
    {
        $year=now()->year;
        $month=now()->month;
        $data=[];
        for ($i=1; $i <=$month ; $i++) { 
            $data[]=Ticket::whereYear('created_at',$year)->whereMonth('created_at',$i)->where('paid',1)->sum('quantity');
        }
        return [
            'datasets' => [
                [
                    'label' => 'Tickets Purchased',
                    'data' => $data,
                    'fill' => 'start',
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
