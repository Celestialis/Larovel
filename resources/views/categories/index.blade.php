@extends('layouts.main')
@section('content')
    @foreach ($categoriesList as $key => $categories)
        @php ++$key; @endphp
        {{ $categories }} &nbsp;
        <a href='{{ route('categories.show', ['id' => $key]) }}'>К категории</a>
        <br>
    @endforeach
@endsection