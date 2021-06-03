@extends('layouts.admin')

@section('content')
    <h2>Список новостей</h2>
    <div>
        <a href="{{ route('news.create') }}">Добавить новость</a>
    </div>
@endsection
