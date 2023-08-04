<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading>
            {{ __('filament-phpinfo-widget::filament-phpinfo-widget.title') }}
        </x-slot>

        <div x-ignore ax-load ax-load-src=" {{ \Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('filament-phpinfo-widget', 'shibomb/filament-phpinfo-widget') }}" x-data="filamentPhpinfo()" class="text-center">
            <p>{{ __('filament-phpinfo-widget::filament-phpinfo-widget.description') }}</p>
            <p class="text-xl" x-text="time"></p>
            <p>{{$date->format('Y-m-d')}}</p>
            </div>
    </x-filament::section>
</x-filament-widgets::widget>