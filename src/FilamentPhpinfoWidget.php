<?php

namespace Shibomb\FilamentPhpinfoWidget;

use DOMDocument;
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

        // Log::debug($output);

        $dom = new DOMDocument();
        $invalid_characters = '&nbsp;';
        $output = str_replace($invalid_characters, ' ', $output);
        $dom->loadXML($output);
        $dom->formatOutput = true;
        // $data = $dom->saveXML();
        $body = $dom->getElementsByTagName('body');
        $tables = $dom->getElementsByTagName('table');
        foreach ($tables as $table) {
            $table->setAttribute("class", "fi-ta-table w-full table-auto divide-y divide-gray-200 text-start dark:divide-white/5");
        }

        $data = $dom->saveXML($body[0]);

        return [
            'data' => $data
        ];
    }
}
