<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading>
            {{ __('filament-phpinfo::filament-phpinfo.title') }}
        </x-slot>

        <div
            x-ignore
            ax-load
            ax-load-src=" {{ \Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('filament-phpinfo', 'shibomb/filament-phpinfo') }}" x-data="filamentPhpinfo()" class="text-center">
            <p>{{ __('filament-phpinfo::filament-phpinfo.description') }}</p>
            <p class="text-xl" x-text="time"></p>
            </div>
    </x-filament::section>
</x-filament-widgets::widget>