<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class EventsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('Name')
                    ->required()
                    ->columnSpanFull(),
                DatePicker::make('Date')
                    ->required(),
                TimePicker::make('Start Time')
                    ->required(),
                TimePicker::make('End Time')
                    ->required(),
            ]);
    }
}
