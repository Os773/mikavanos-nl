<x-layout.main title="Admin Dashboard">
    <div class="container">
        <h1 class="text-2xl font-bold">Admin Dashboard</h1>

        <div class="contain-content">
            <div class="card-header">
                <h3 class="text-lg">Manage Users</h3>
            </div>
            <div class="card-body">
                <section class="grid grid-cols-4 gap-3">

                    <div class="font-bold">Name</div>
                    <div class="font-bold">Email</div>
                    <div class="font-bold">Roles</div>
                    <div class="font-bold">Actions</div>

                    @foreach($users as $user)

                        <div>{{ $user->name }}</div>
                        <div>{{ $user->email }}</div>
                        <div>
                            @foreach($user->roles as $role)
                                <span class="badge bg-primary">{{ $role->name }}</span>
                            @endforeach
                        </div>
                        <div>
                            <a href="{{ route('admin.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        </div>

                    @endforeach

                </section>
            </div>
        </div>
    </div>
</x-layout.main>
