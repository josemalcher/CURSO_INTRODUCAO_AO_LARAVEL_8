@extends('admin.layouts.app')

@section('title', 'Criar Post')

@section('content')
<h1>Cadastrar Novo Post</h1>

<div>
    <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
        {{--<input type="text" name="_token" value="{{ csrf_token() }}">--}}
        @include('admin.posts._partiais.form')
    </form>
    <a href="{{route('posts.index')}}">Voltar a Litagem</a>
</div>
@endsection
