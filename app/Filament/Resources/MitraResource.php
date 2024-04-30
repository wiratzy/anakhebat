<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Mitra;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\MitraResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MitraResource\RelationManagers;

class MitraResource extends Resource
{
    protected static ?string $model = Mitra::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('nomor_unit')->required()->unique(ignorable: fn($record) => $record),
                        TextInput::make('nama_pemilik')->required(),
                        TextInput::make('nomor_hp')->required(),
                        TextInput::make('provinsi')->required(),
                        TextInput::make('kabupaten')->required(),
                        TextInput::make('kecamatan')->required(),
                        TextInput::make('kelurahan')->required(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nomor_unit')->sortable()->searchable(),
                TextColumn::make('nama_pemilik')->sortable()->searchable(),
                TextColumn::make('nomor_hp')->sortable()->searchable(),
                TextColumn::make('provinsi')->sortable()->searchable(),
                TextColumn::make('kabupaten')->sortable()->searchable(),
                TextColumn::make('kecamatan')->sortable()->searchable(),
                TextColumn::make('kelurahan')->sortable()->searchable(),
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
            // //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMitras::route('/'),
            'create' => Pages\CreateMitra::route('/create'),
            'edit' => Pages\EditMitra::route('/{record}/edit'),
        ];
    }
}
