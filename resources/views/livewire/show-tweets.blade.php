<div>
    <h2>Show Tweets</h2>

    <p>{{ $mensage }}</p>

    <input type="text" id="mensage" name="mensage" wire:model="mensage">
    <hr>
    @foreach ($tweets as $tweet)
       <p>{{$tweet->id}} - {{ $tweet->user->name}} - {{ $tweet->content }}</p>
    @endforeach
</div>
