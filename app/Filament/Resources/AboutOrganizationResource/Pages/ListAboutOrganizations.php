<?php

namespace App\Filament\Resources\AboutOrganizationResource\Pages;

use App\Filament\Resources\AboutOrganizationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutOrganizations extends ListRecords
{
    protected static string $resource = AboutOrganizationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
