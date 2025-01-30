<?php

namespace App\Filament\Resources\SapphireResource\Pages;

use App\Filament\Resources\SapphireResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSapphires extends ListRecords
{
    protected static string $resource = SapphireResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
