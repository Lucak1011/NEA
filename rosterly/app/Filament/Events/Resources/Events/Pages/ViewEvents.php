<?php

namespace App\Filament\Events\Resources\Events\Pages;

use App\Filament\Events\Resources\Events\EventsResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewEvents extends ViewRecord
{
    protected static string $resource = EventsResource::class;

    protected function getHeaderActions(): array
    {
        return [
        ];
    }
}
