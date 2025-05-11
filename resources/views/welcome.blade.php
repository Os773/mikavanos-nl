<x-layout.main title="Home">
    <p>hello world</p>

    @can('create-post')
        You can make posts!
        @endcan
</x-layout.main>
