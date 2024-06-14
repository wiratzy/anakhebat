<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use App\Models\JadwalBelajar;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\JadwalBelajarResource\Pages;
use App\Filament\Resources\JadwalBelajarResource\RelationManagers;

class JadwalBelajarResource extends Resource
{
    protected static ?string $model = JadwalBelajar::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('hari')
                ->options([
                'senin' => 'Senin',
                'selasa' => 'Selasa',
                'rabu' => 'Rabu',
                'kamis' => 'Kamis',
                'jumat' => 'Jumat',
                ])->required(),
                TextInput::make('jam')->required(),
                TextInput::make('durasi')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('hari')->sortable()->searchable(),
                TextColumn::make('jam')->sortable()->searchable(),
                TextColumn::make('durasi')->sortable()->searchable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJadwalBelajars::route('/'),
            'create' => Pages\CreateJadwalBelajar::route('/create'),
            'edit' => Pages\EditJadwalBelajar::route('/{record}/edit'),
        ];
    }
}
