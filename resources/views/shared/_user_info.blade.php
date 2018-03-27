<a href="{{ route('users.show', $user->id) }}">
    <img src="{{ $user->gravatar('80') }}" alt="{{ $user->firstname }}" class="gravatar"/>
</a>
  <h1>{{ $user->firstname }}</h1>