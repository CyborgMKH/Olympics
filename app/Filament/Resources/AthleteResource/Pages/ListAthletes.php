<?php

namespace App\Filament\Resources\AthleteResource\Pages;

use App\Filament\Resources\AthleteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAthletes extends ListRecords
{
    protected static string $resource = AthleteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
