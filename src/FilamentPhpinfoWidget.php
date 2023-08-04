<?php

namespace Shibomb\FilamentPhpinfoWidget;

use DateTime;
use Filament\Widgets\Widget;

class FilamentPhpinfoWidget extends Widget
{
    protected static string $view = 'filament-phpinfo-widget::widget';

    protected function getViewData(): array
    {
        ob_start();
        phpinfo();
        $data = ob_get_contents();
        ob_clean();

        $date = new DateTime();
        return [
            'data' => $data
        ];
    }
}
