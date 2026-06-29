<?php

namespace App\Filament\Events\Resources\Events;

use App\Filament\Events\Resources\Events\Pages\CreateEvents;
use App\Filament\Events\Resources\Events\Pages\EditEvents;
use App\Filament\Events\Resources\Events\Pages\ListEvents;
use App\Filament\Events\Resources\Events\Pages\ViewEvents;
use App\Filament\Events\Resources\Events\Schemas\EventsForm;
use App\Filament\Events\Resources\Events\Schemas\EventsInfolist;
use App\Filament\Events\Resources\Events\Tables\EventsTable;
use App\Models\Events;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EventsResource extends Resource
{
    protected static ?string $model = Events::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return EventsForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return EventsInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EventsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEvents::route('/'),
            'create' => CreateEvents::route('/create'),
            'view' => ViewEvents::route('/{record}'),
            'edit' => EditEvents::route('/{record}/edit'),
        ];
    }
}
