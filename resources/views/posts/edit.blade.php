    <form method="POST" action="/posts/{{ $post->id }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="comment" value="{{ $post->comment }}">
        <input type="submit">
    </form> 
