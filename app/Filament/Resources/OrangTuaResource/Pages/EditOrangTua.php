<?php

namespace App\Filament\Resources\OrangTuaResource\Pages;

use App\Filament\Resources\OrangTuaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrangTua extends EditRecord
{
    protected static string $resource = OrangTuaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
