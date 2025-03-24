<?php

namespace App\Filament\Resources\AboutOrganizationResource\Pages;

use App\Filament\Resources\AboutOrganizationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutOrganization extends EditRecord
{
    protected static string $resource = AboutOrganizationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
