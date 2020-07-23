@extends('layouts.app')

@section('content')

<form action="/article" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="text" name="name" placeholder="name" required>
    <input type="text" name="email" placeholder="email" required>
    <input type="text" name="message" placeholder="message" value="" >
    <input type="file" name="file" required>
    <input type="submit" value="Submit">
</form>

@endsection