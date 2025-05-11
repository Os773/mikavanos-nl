<ul class="{{ $type }}">
    <x-navigation.item route="welcome">Home</x-navigation.item>
    <x-navigation.item route="about">About Me</x-navigation.item>
    <x-navigation.item route="blogs.index">Blog</x-navigation.item>
    <li class="mr-3">
        @auth()
            <a href="{{ route('dashboard') }}" class="inline-block border text-2xl my-1 md:my-auto {{ Request::url() == route('dashboard') ?
'border-purple-700 rounded py-1 px-3 bg-purple-700 text-white' :
 'border-green-300 bg-green-300 rounded hover:border-purple-200 text-black hover:bg-purple-200 py-1 px-3'
 }}">
                Dashboard
            </a>
            @can('delete-post')
                <a href="{{ route('admin.dashboard') }}" class="inline-block border text-2xl my-1 md:my-auto {{ Request::url() == route('admin.dashboard') ?
'border-purple-700 rounded py-1 px-3 bg-purple-700 text-white' :
 'border-green-300 bg-green-300 rounded hover:border-purple-200 text-black hover:bg-purple-200 py-1 px-3'
 }}">
                    Admin Dashboard
                </a>
            @endcan
        @else
            <a href="{{ route('login') }}" class="inline-block border text-2xl my-1 md:my-auto {{ Request::url() == route('login') ?
'border-purple-700 rounded py-1 px-3 bg-purple-700 text-white' :
 'border-green-300 bg-green-300 rounded hover:border-purple-200 text-black hover:bg-purple-200 py-1 px-3'
 }}">
                Log In
            </a>
        @endif
    </li>
</ul>
