<?php

namespace App\Filament\Resources\KwaResource\Pages;

use App\Filament\Resources\KwaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKwas extends ListRecords
{
    protected static string $resource = KwaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
