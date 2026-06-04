<?php

namespace App\Filament\Resources\MontirResource\Pages;

use App\Filament\Resources\MontirResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageMontirs extends ManageRecords
{
    protected static string $resource = MontirResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
