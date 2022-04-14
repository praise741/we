<?php

namespace App\Filament\Widgets;

use App\Models\comments;
use App\Models\movies;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total movies', movies::count()),
            Card::make('total comments', comments::count()),
            Card::make('Users', User::count())
            ->color('success'),
        ];
    }
}
