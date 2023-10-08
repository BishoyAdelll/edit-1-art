<?php

namespace App\Filament\Resources\AddDataResource\Pages;

use App\Filament\Resources\AddDataResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAddData extends ViewRecord
{
    protected static string $resource = AddDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
