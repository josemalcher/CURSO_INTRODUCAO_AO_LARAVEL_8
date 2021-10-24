<h1>Cadastrar Novo Post</h1>
<div>
    <form action="{{route('posts.store')}}" method="post">
        {{--<input type="text" name="_token" value="{{ csrf_token() }}">--}}
        @csrf
        <p><input type="text" name="title" id="title" placeholder="Título"></p>
        <p><textarea name="content" id="content" cols="30" rows="10" placeholder="Conteúdo"></textarea></p>
        <button type="submit">Enviar</button>
    </form>
    <a href="{{route('posts.index')}}">Voltar a Litagem</a>
</div>
