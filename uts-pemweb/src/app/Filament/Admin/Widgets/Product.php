<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Beasiswa as ModelsBeasiswa;

class Beasiswa extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Beasiswa', ModelsBeasiswa::count())
                ->label('Total Beasiswa')
                ->icon('heroicon-o-shopping-bag')
                ->chart([10, 4, 10, 3, 15, 4, 17])
                ->color('danger')
                ->description('Total Beasiswa'),
        ];
    }
}
