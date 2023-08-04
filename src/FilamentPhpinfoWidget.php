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
            'table' => 'table-fixed text-sm my-4',
            'th' => 'p-2',
            'td' => 'p-2',
            'h1' => 'text-3xl pt-4',
            'h2' => 'text-2xl pt-4'
        ];

        foreach ($classes as $key => $value) {
            $elements = $dom->getElementsByTagName($key);
            foreach ($elements as $element) {
                $element->setAttribute('class', trim($element->getAttribute('class') . ' ' . $value));
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
