<?php

namespace Shibomb\FilamentPhpinfoWidget;

use DateTime;
use Filament\Widgets\Widget;

class FilamentPhpinfoWidget extends Widget
{
    protected static string $view = 'filament-phpinfo-widget::widget';

    protected function getViewData(): array
    {
        $date = new DateTime();
        return [
            'date' => $date
        ];
    }
}
