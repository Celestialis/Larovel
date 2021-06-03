@extends('layouts.admin')

@section('content')
    <h2>Добавить новость</h2>
    <div>
        <form method="post" action="{{ route('news.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Заголовок *</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="form-group">
                <label for="logo">Логотип</label>
                <input type="file" class="form-control" name="logo" id="logo">
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea name="form-control" name="description" id="description"></textarea>
            </div>
            <div class="form-feedback">
                <label>Ваше имя: <input type="text" name="name"></label><br>
                <label>Ваша фамилия: <input type="text" name="lastname"></label><br>
                <label>Ваш email: <input type="text" name="email"></label><br>
                <label>Ваш номер: <input type="number" name="number"></label>
            </div>
        <br>
            <button class="btn btn-success" type="submit">Добавить новость</button>
        </form>
    </div>
@endsection
