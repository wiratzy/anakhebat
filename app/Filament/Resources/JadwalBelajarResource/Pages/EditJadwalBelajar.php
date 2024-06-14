<?php

namespace App\Filament\Resources\JadwalBelajarResource\Pages;

use App\Filament\Resources\JadwalBelajarResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJadwalBelajar extends EditRecord
{
    protected static string $resource = JadwalBelajarResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
