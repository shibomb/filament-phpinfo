<?php

namespace Shibomb\FilamentPhpinfoWidget;

use DOMDocument;
use Filament\Widgets\Widget;

class FilamentPhpinfoWidget extends Widget
{
    protected static string $view = 'filament-phpinfo-widget::widget';

    protected function getViewData(): array
    {
        // get phpinfo() output
        ob_start();
        phpinfo();
        $output = ob_get_contents();
        ob_clean();
        // Log::debug($output);

        // create xml document object
        $dom = new DOMDocument();
        $invalid_characters = '&nbsp;';
        $output = str_replace($invalid_characters, ' ', $output);
        $dom->loadXML($output);
        $dom->formatOutput = true;

        // update class attribute
        $classes = [
            'table' => 'table-fixed border-collapse w-full border border-slate-400 dark:border-slate-500 text-sm shadow-sm',
            'th' => 'border border-slate-300 dark:border-slate-600 font-semibold p-2 text-left break-all w-1/3 max-w-1/3',
            'td' => 'border border-slate-300 dark:border-slate-700 p-2 break-all w-1/3 max-w-1/3',
            'h1' => 'text-3xl pt-4',
            'h2' => 'text-2xl pt-4'
        ];

        foreach ($classes as $key => $value) {
            $tables = $dom->getElementsByTagName($key);
            foreach ($tables as $table) {
                $table->setAttribute("class", $table->getAttribute() . ' ' . $value);
            }
        }

        // use under body tag
        $body = $dom->getElementsByTagName('body');
        $data = $dom->saveXML($body[0]);

        return [
            'data' => $data
        ];
    }
}
