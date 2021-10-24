<a href="{{route('posts.create')}}">Criar Novo Post</a>
<hr>
@if(session('message'))
    <div>
        {{session('message')}}
    </div>
    <hr>
@endif
<h1>Posts</h1>

@foreach($posts as $post)
    <p>{{$post->title}} [ <a href="{{route('post.show', $post->id)}}">Ver</a> |
        <a href="{{route('post.edit', $post->id)}}">Editar</a>]</p>
@endforeach
<hr>
{{$posts->links()}}
