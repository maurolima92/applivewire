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

        <div class="flex">
            <div class="w-1/8">
                @if ($tweet->user->photo)
                    <img src="{{ url("storage/{$tweet->user->photo}") }}" alt="{{ $tweet->user->name}}" class="rounded-full h-8 w-8">
                @else
                    <img src="{{ url('images/profiles/sem-foto.png') }}" alt="{{ $tweet->user->name}}" class="rounded-full h-8 w-8">
                @endif
            </div>
            <div class=" w-7/8">
                <p>{{$tweet->id}} - {{ $tweet->user->name}} - {{ $tweet->content }}
            </div>
        </div>

        @if ($tweet->likes->count())
            <a href="" wire:click.prevent="unlike({{ $tweet->id }})">Descurtir</a>
        @else
            <a href="#" wire:click.prevent="like({{ $tweet->id }})">Curtir</a>
        @endif
    </p>
    @endforeach

    <hr>
    <div class="paginacao">
        {{ $tweets->links() }}
    </div>
</div>
