<h1>Cadastrar Novo Post</h1>

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
    <form action="{{route('posts.store')}}" method="post">
        {{--<input type="text" name="_token" value="{{ csrf_token() }}">--}}
        @csrf
        <p><input type="text" name="title" id="title" placeholder="Título" value="{{old('title')}}"></p>
        <p><textarea name="content" id="content" cols="30" rows="10"
                     placeholder="Conteúdo">{{old('content')}}</textarea></p>
        <button type="submit">Enviar</button>
    </form>
    <a href="{{route('posts.index')}}">Voltar a Litagem</a>
</div>
