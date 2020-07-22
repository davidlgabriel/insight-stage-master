@extends('layouts.app')

@section('content')

<form action="/article" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="text" name="name" placeholder="name">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="message" placeholder="message">
    <input type="file" name="file">
    <input type="submit" value="Submit">
</form>

@endsection