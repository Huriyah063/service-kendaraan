<?php

namespace App\Filament\Resources\KategoriLayananResource\Pages;

use App\Filament\Resources\KategoriLayananResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageKategoriLayanans extends ManageRecords
{
    protected static string $resource = KategoriLayananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
