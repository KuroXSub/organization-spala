<?php

namespace App\Filament\Resources\ImageDynamicResource\Pages;

use App\Filament\Resources\ImageDynamicResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListImageDynamics extends ListRecords
{
    protected static string $resource = ImageDynamicResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
