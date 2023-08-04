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
        $output = ob_get_contents();
        ob_clean();

        $data = simplexml_load_string($output);

        return [
            'data' => $data
        ];
    }
}
