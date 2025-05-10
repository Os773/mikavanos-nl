<li class="mr-3">
    <a href="{{ route($route) }}" class="inline-block border {{ Request::url() == route($route) ?
'border-blue-500 rounded py-1 px-3 bg-blue-500 text-white' :
 'border-white rounded hover:border-gray-200 text-blue-500 hover:bg-gray-200 py-1 px-3'
 }}">
        {{ $slot }}
    </a>
</li>
