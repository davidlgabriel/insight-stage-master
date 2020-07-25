@extends('layouts.app')

@section('content')


<section class="submit">
    <div class="container">
        <div class="title" >
            <div style="margin-bottom:6%;">
             <h1> Submit your Article </h1>
            </div>
        <div>
        
        <div class="form">
            <form action="/article" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                    
                    <div class="">
                        <div class="form-group" >
                            <label for="exampleInputEmail1" style="line-height:30px;">Name</label>
                        </div>
                        <div class="form-group clor">
                            <input type="text" name="name"  required>
                    </div>

                    <div class="">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" required>
                        </div>
                    </div>

                    <div class="">
                        <div class="form-group">
                            <label class="file">
                            <input type="file" name="file" required>
                            Add a file
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="" style="margin-left:60%;margin-top:0%;line-height:200%;">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Message</label>
                        </div>
                        <div class="form-group" >
                            <input type="text" name="message" value="" style="padding-top:47%;width:210%;">
                        
                        </div>
                        <div class="">
                            <input type="submit" value="Submit">
                        </div>
                    </div>
                </div>
            </form>
        
        </div>
    </div>
</section>


@endsection

