@extends('layouts.main')

@section('title', 'test')


@section('content')
    <li>
        {{ $user->name }}
    </li>
@endsection
