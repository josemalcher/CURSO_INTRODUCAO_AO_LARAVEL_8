<h1>Editar o Post <strong>{{$post->title}}</strong></h1>

<div>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
</div>

<div>
    <form action="{{route('post.update', $post->id)}}" method="post">
        {{--<input type="text" name="_token" value="{{ csrf_token() }}">--}}
        @csrf
        @method('put')
        <p><input type="text" name="title" id="title" placeholder="Título" value="{{$post->title}}"></p>
        <p><textarea name="content" id="content" cols="30" rows="10"
                     placeholder="Conteúdo">{{$post->content}}</textarea></p>
        <button type="submit">Enviar</button>
    </form>
    <a href="{{route('posts.index')}}">Voltar a Litagem</a>
</div>
