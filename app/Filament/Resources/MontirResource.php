<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MontirResource\Pages;
use App\Filament\Resources\MontirResource\RelationManagers;
use App\Models\Montir;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MontirResource extends Resource
{
    protected static ?string $model = Montir::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->label('Nama Montir')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nomor')
                    ->label('No Telepon')
                    ->required()
                    ->maxLength(15),
                Forms\Components\Select::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->options([
                        'L' => 'Laki-laki',
                        'P' => 'Perempuan',
                    ])
                    ->required(),
                Forms\Components\DatePicker::make('tgl_lahir')
                    ->label('Tanggal Lahir')
                    ->required(),
                Forms\Components\TextInput::make('tmp_lahir')
                    ->label('Tempat Lahir')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('kategori_montir_id')
                    ->label('Kategori Montir')
                    ->required()
                    ->relationship('kategoriMontir', 'nama'),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Montir')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('nomor')
                    ->label('No Telepon')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('kategoriMontir.nama')
                    ->label('Kategori Montir')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('deskripsi')
                    ->label('Deskripsi Montir')
                    ->limit(50)
                    ->sortable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageMontirs::route('/'),
        ];
    }
}
