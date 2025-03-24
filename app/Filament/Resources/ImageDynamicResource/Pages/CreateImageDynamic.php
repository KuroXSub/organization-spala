<?php

namespace App\Filament\Resources\ImageDynamicResource\Pages;

use App\Filament\Resources\ImageDynamicResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateImageDynamic extends CreateRecord
{
    protected static string $resource = ImageDynamicResource::class;
}
