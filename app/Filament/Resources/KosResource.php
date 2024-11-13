<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KosResource\Pages;
use App\Filament\Resources\KosResource\RelationManagers;
use App\Models\Kos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KosResource extends Resource
{
    protected static ?string $model = Kos::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('no_kamar'),
                Forms\Components\TextInput::make('harga_sewa'),
                Forms\Components\TextInput::make('nama_siswa'),
                Forms\Components\Select::make('fasilitas_id')
                ->relationship('fasilitas','name')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('no_kamar')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('harga_sewa')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('nama_siswa')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('fasilitas.name')->searchable()->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('fasilitas_id')
                ->relationship('fasilitas','name'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListKos::route('/'),
            'create' => Pages\CreateKos::route('/create'),
            'edit' => Pages\EditKos::route('/{record}/edit'),
        ];
    }
}
