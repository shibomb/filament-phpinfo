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

        $classes = [
            'table' => "border-collapse w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm",
            'th' => "w-1/3 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left",
            'td' => "w-1/3 border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400"
        ];

        foreach ($classes as $key => $value) {
            $tables = $dom->getElementsByTagName($key);
            foreach ($tables as $table) {
                $table->setAttribute("class", $value);
            }
        }

        $data = $dom->saveXML($body[0]);

        return [
            'data' => $data
        ];
    }
}
