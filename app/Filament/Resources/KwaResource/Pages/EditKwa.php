<?php

namespace App\Filament\Resources\KwaResource\Pages;

use App\Filament\Resources\KwaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKwa extends EditRecord
{
    protected static string $resource = KwaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
