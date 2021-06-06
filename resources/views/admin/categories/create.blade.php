@extends('layouts.admin')

@section('content')
    <h2>Добавить категорию</h2>
    <div>
        <form method="post" action="{{ route('categories.store') }}">
            @csrf
            <div class="form-feedback">
                <label>Ваше имя: <input type="text" name="name"></label><br>
                <label>Ваш email: <input type="text" name="email"></label><br>
                <label>Ваш номер: <input type="number" name="number"></label><br>
                <label for="description">Пожелание</label>
                <textarea name="form-control" name="description" id="description"></textarea>
            </div>
        <br>
            <button class="btn btn-success" type="submit">Добавить категорию</button>
        </form>
    </div>
@endsection
