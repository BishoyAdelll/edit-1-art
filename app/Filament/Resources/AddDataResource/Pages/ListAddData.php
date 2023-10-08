<?php

namespace App\Filament\Resources\AddDataResource\Pages;

use App\Filament\Resources\AddDataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAddData extends ListRecords
{
    protected static string $resource = AddDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
