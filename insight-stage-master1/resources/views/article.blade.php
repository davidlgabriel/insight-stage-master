@extends('layouts.app')

@section('content')


<div class="container">

    <div class="submit-title" >
            <h1> Submit your Article </h1>
    <div>
    <div class="submit-form">
        <form action="/article" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" placeholder="name" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="text" name="email" placeholder="email" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Message</label>
        <input type="text" name="message" placeholder="message" value="" >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">File</label>
            <input type="file" name="file" required>
        </div>
        <input type="submit" value="Submit">
        </form>
    </div>
</div>


@endsection

