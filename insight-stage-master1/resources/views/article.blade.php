@extends('layouts.app')

@section('content')


<section class="submit" >
    <div class="container">
        <div class="title" >
            <div style="margin-bottom:6%;margin-right:10%;">
             <h1> Submit your Article </h1>
            </div>
        <div>
        
        <div class="form">
            <form action="/article" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
              
                
                    
                    <div class="sub" style="margin-right:10%;">
                        
                        <div class="form-group" >
                            <label for="exampleInputEmail1" style="line-height:20px;">Name</label>
                        </div>

                        <div class="form-group clor" style="margin-bottom:5%;">
                            <input type="text" name="name"  required>
                        </div>
                  
                        <div class="form-group" >
                            <label for="exampleInputEmail1">Email address</label>
                        </div>

                        <div class="form-group">
                            <input type="text" name="email" required>
                        </div>
                        
                        </div>
                        <div class="form-group" style="margin-top:10%;margin-right:10%;">
                            <label for="exampleInputEmail1">Message</label>
                        </div>

                        <div class="" style="margin-right:10%;">
                            <textarea type="text" class="messaging" name="message" value="" style="width:50%;text-align:left;"></textarea>
                        
                        </div>
                        
                

                        <div class="form-group" style="margin-right:10%;">
                            <label class="file" style="margin-top:5%";>
                            <input type="file"  name="file" required>
                            Add a file
                            </label>
                        </div>

                        <div class="submit" style="line-height:200%;margin-right:10%;">
                            <input type="submit" value="Submit">
                        </div>

              
                  
                
            </form>
        
        </div>
    </div>
</section>


@endsection

