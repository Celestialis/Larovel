@extends('layouts.main')
@section('content')
    @foreach ($aboutList as $key => $about)
        @php ++$key; @endphp
        {{ $about }} &nbsp;
        <a href='{{ route('about.show', ['id' => $key]) }}'></a>
        <br>
    @endforeach
@endsection