<?php

namespace App\Filament\Resources\AddDataResource\Pages;

use App\Filament\Resources\AddDataResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAddData extends EditRecord
{
    protected static string $resource = AddDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
