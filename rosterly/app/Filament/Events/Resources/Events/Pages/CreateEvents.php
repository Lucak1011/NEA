<?php

namespace App\Filament\Events\Resources\Events\Pages;

use App\Filament\Events\Resources\Events\EventsResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEvents extends CreateRecord
{
    protected static string $resource = EventsResource::class;
}
