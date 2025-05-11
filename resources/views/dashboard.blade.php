<x-layout.main title=" {{ Auth::user()->name }}'s Dashboard">
    <p>Welcome {{ Auth::user()->name }}!</p>

    <p>You are logged in.</p>

    <form action="{{ route('logout') }}" method="post">
        @csrf
        <input type="submit" value="Log out" class="border-green-300 bg-green-300 rounded text-black p-2 font-bold">
    </form>
</x-layout.main>
