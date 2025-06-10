<x-layouts.app.sidebar :title="$title ?? null">
    <flux:main>
        {{ $slot }}
    </flux:main>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>

</x-layouts.app.sidebar>

<head>
    @livewireStyles
</head>

<body>
    {{ $slot ?? '' }}
    @livewireScripts
</body>