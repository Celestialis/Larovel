@extends('layouts.admin')

@section('content')
    <h2>Список категорий</h2>
    <div>
        <a href="{{ route('categories.create') }}">Добавить категорию</a>
    </div>
@endsection
