@extends('admin.layouts.app')

@section('title', 'Listagem dos Post')

@section('content')
    <a href="{{route('posts.create')}}">Criar Novo Post</a>
    <hr>
    @if(session('message'))
        <div>
            {{session('message')}}
        </div>
        <hr>
    @endif
    <h4>Pesquisar</h4>
    <form action="{{ route('post.search') }}" method="post">
        @csrf
        <input type="text" name="search" placeholder="Filtrar:">
        <button type="submit">Filtrar</button>
    </form>
    <hr>
    <h1>Posts</h1>

    @foreach($posts as $post)
        <img src="{{ url("storage/{$post->image}") }}" alt="{{ $post->title }}" style="max-width: 100px">
        <p>{{$post->title}} [ <a href="{{route('post.show', $post->id)}}">Ver</a> |
            <a href="{{route('post.edit', $post->id)}}">Editar</a>]</p>
    @endforeach
    <hr>
    @if(isset($filters))
        {{$posts->appends($filters)->links()}}
    @else
        {{$posts->links()}}
    @endif
@endsection
