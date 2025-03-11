<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeknisiResource\Pages;
use App\Filament\Resources\TeknisiResource\RelationManagers;
use App\Models\Teknisi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;

class TeknisiResource extends Resource
{
    protected static ?string $model = Teknisi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_teknisi')->required(),
                Forms\Components\TextInput::make('kontak')->required(),
                Forms\Components\Select::make('status') // Perbaikan disini
                    ->options([
                        'tersedia' => 'Tersedia',
                        'sibuk' => 'Sibuk',
                    ])
                    ->default('tersedia')
                    ->required(),
                       ]);
                    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_teknisi'),
                TextColumn::make('kontak'),
                TextColumn::make('status'),
            ])
            ->filters([
                //
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
            'index' => Pages\ListTeknisis::route('/'),
            'create' => Pages\CreateTeknisi::route('/create'),
            'edit' => Pages\EditTeknisi::route('/{record}/edit'),
        ];
    }
}
