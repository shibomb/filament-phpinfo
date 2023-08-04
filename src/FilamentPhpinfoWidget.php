<?php

namespace Shibomb\FilamentPhpinfoWidget;

use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Date;

class FilamentPhpinfoWidget extends Widget
{
    protected static string $view = 'filament-phpinfo-widget::widget';

    protected function getViewData(): array
    {
        $date = new Date();
        return [
            'date' => $date
        ];
    }
}
