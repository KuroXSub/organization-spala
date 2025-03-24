<?php

namespace App\Filament\Resources\MaterialResource\Pages;

use App\Filament\Resources\MaterialResource;
use Filament\Resources\Pages\Page;
use pxlrbt\FilamentActivityLog\Pages\ListActivities;

class ActivityLogPage extends ListActivities
{
    protected static string $resource = MaterialResource::class;

    // protected static string $view = 'filament.resources.material-resource.pages.activity-log-page';
}
