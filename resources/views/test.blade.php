<div class="container">
    @foreach ($users as $user)
        {{ $user->id }}
        <br>
    @endforeach
</div>

{{ $users->links() }}
