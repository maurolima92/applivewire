<div>
    <h2>Show Tweets</h2>

    <p>{{ $content }}</p>

    <hr>
    <form method="post" wire:submit.prevent="create">
        <input type="text" id="content" name="content" wire:model="content">
            @error('content')
                {{ $message }}
            @enderror
        <button type="submit">Criar Tweet</button>
    </form>
    <hr>
    @foreach ($tweets as $tweet)
       <p>{{$tweet->id}} - {{ $tweet->user->name}} - {{ $tweet->content }}</p>
    @endforeach

    <hr>
    <div class="paginacao">
        {{ $tweets->links() }}
    </div>
</div>
