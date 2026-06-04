<?php

namespace App\Filament\Resources\DetailLayananResource\Pages;

use App\Filament\Resources\DetailLayananResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageDetailLayanans extends ManageRecords
{
    protected static string $resource = DetailLayananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
