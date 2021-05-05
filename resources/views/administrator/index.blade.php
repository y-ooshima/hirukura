<div class="container-fluid">
<div class="row">

<h1>峠データ</h1>
<!-- <a href="/administrator/create">New Post</a></br> -->

@foreach($hillclimb_locations as $post)
    <a href="/administrator/{{ $post->id }}">{{ $post->name }}</a></br>
@endforeach

  </div>
</div>