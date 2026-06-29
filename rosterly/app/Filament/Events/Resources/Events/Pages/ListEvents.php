<?php

namespace App\Filament\Events\Resources\Events\Pages;

use App\Filament\Events\Resources\Events\EventsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEvents extends ListRecords
{
    protected static string $resource = EventsResource::class;

}
