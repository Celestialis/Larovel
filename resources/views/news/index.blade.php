@extends('layouts.main')
@section('content')
    @foreach ($newsList as $key => $news)
        @php ++$key; @endphp
        {{ $news }} &nbsp;
        <a href='{{ route('news.show', ['id' => $key]) }}'>К новости</a>
        <br>
    @endforeach
@endsection
