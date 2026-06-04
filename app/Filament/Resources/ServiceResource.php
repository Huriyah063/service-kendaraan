<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->label('User')
                    ->required()
                    ->relationship('user', 'name'),
                Forms\Components\Select::make('layanan_id')
                    ->label('Layanan ID')
                    ->required()
                    ->relationship('layanan', 'nama'),
                Forms\Components\TextInput::make('kendaraan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('model')
                    ->label('Model Kendaraan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kelurahan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal')
                    ->required(),
                Forms\Components\TimePicker::make('waktu')
                    ->required(),
                Forms\Components\Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'in_progress' => 'In Progress',
                        'completed' => 'Completed',
                    ])
                    ->default('pending')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('User ID')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('layanan.nama')
                    ->label('Layanan ID')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('kendaraan')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('model')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('kelurahan')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('waktu')
                    ->time()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
            
                    ->sortable(),
            ])->filters([
                //
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
            'index' => Pages\ManageServices::route('/'),
        ];
    }
}
