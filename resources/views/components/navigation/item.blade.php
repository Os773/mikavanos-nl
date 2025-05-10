<li class="mr-3">
    <a href="{{ route($route) }}" class="inline-block border text-2xl my-1 md:my-auto {{ Request::url() == route($route) ?
'border-purple-700 rounded py-1 px-3 bg-purple-700 text-white' :
 'border-green-300 rounded hover:border-b-purple-200 hover:text-black hover:bg-purple-200 py-1 px-3'
 }}">
        {{ $slot }}
    </a>
</li>
