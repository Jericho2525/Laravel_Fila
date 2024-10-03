<?php

namespace App\Filament\Resources\KwaResource\Pages;

use App\Filament\Resources\KwaResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKwa extends ViewRecord
{
    protected static string $resource = KwaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
