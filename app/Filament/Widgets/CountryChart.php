<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\ChartWidget;

class CountryChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';
    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $data = User::where('type', 'user')->get();
        $array = [];
        foreach ($data as $value) {
            $country = $value->country;

            // Check if the country key already exists in the array
            if (array_key_exists($country, $array)) {
                // Increment the existing value by 1
                $array[$country]++;
            } else {
                // If the country key doesn't exist, create it and set its value to 1
                $array[$country] = 1;
            }
        }
        $countries = array_keys($array);
        $values = array_values($array);
        return [
            'datasets' => [
                [
                    'label' => 'Blog posts created',
                    'data' => $values,
                ],
            ],
            'labels' => $countries,
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
