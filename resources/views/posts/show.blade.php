@extends('layouts.posts')
@section('title','Single record')
@section('content')
@component('components.message')
This is slot
@endcomponent
{{ $data['name'] }} <br>
{{ $data['age'] }}
@endsection
