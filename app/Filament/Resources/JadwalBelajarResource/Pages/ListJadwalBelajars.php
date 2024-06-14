<?php

namespace App\Filament\Resources\JadwalBelajarResource\Pages;

use App\Filament\Resources\JadwalBelajarResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJadwalBelajars extends ListRecords
{
    protected static string $resource = JadwalBelajarResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
