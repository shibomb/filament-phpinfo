<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading>
            {{ __('phpinfo::phpinfo.title') }}
        </x-slot>

        <div
            x-ignore
            ax-load
            ax-load-src="{{ \Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('phpinfo', 'shibomb/phpinfo') }}"
            x-data="phpinfo()"
            class="text-center"
        >
            <p>{{ __('phpinfo::phpinfo.description') }}</p>
            <p class="text-xl" x-text="time"></p>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
