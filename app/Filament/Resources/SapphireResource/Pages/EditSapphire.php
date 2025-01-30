<?php

namespace App\Filament\Resources\SapphireResource\Pages;

use App\Filament\Resources\SapphireResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSapphire extends EditRecord
{
    protected static string $resource = SapphireResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
