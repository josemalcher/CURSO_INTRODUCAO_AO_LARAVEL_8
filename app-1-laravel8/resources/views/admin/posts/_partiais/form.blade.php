@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif

@csrf
<p><input type="text" name="title" id="title" placeholder="Título" value="{{$post->title ?? old('title')}}"></p>
<p><textarea name="content" id="content" cols="30" rows="10"
             placeholder="Conteúdo">{{$post->content ?? old('content')}}</textarea></p>
<button type="submit">Enviar</button>
