@extends('layouts.app')

@section('content')
<script>
    function getFile() {
  document.getElementById("upfile").click();
}

function sub(obj) {
  var file = obj.value;
  var fileName = file.split("\\");
  document.getElementById("yourBtn").innerHTML = fileName[fileName.length - 1];
  document.myForm.submit();
  event.preventDefault();
}
</script>
<style>
input[type="submit"] {
    
}
label{
    color:black;
}
#yourBtn {
  font-family: "Open Sans";
  width: 250px;
  padding: 10px;
  -webkit-border-radius: 20px;
  color: black;
  font-weight: bold;
  -moz-border-radius: 20px;
  border: 1px Solid White;
  text-align: center;
  background-color: #E1A042;
  cursor: pointer;
}
.form-control{
    font-size:15px;
  font-family: "Open Sans";
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border: 1px solid black;
  text-align: left;
  background-color: white;
}
.form-control:focus {
   box-shadow:none;
   border:1px solid #E1A042
}
.title{
    text-align:center;
}
.col-4{
    text-align:center;
}
.sub{
    font-family: "Open Sans";
    width: 150px;
    -webkit-border-radius: 10px;
    color: black;
    font-weight: bold;
    -moz-border-radius: 20px;
    border: 1px Solid black;
    text-align: center;
    background-color: white;
}
</style>
<section>
    <div class="title" style="border-bottom:1px solid rgb(247, 247, 247);padding-top:30px;">
        <div class="row">
            <div class="col-4" style="float:right;">
            <img src="{{asset('img/lines.png')}}" alt="">
            </div>
            <div class="col-4" style="font-family: 'Open Sans'; color:black;">
            <h3 style="font-weight: bold;">Submit</h3>
            </div>
             <div class="col-4" style="float:left;">
             <img src="{{asset('img/lines.png')}}" alt="">
            </div>
        </div>       
    </div>
    
<div class="container" style="padding-top:20px;">
<div class="row">
<div class="col">
<form action="/article" method="POST" enctype="multipart/form-data">
   {{csrf_field()}}
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" name="name" class="form-control" placeholder="Alex Pine">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email</label>
    <input type="email" name="email" class="form-control" placeholder="example@is.pt">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Theme of your article</label>
    <select class="form-control">
      <option disabled selected>Select Theme</option>
      <option>Scientific</option>
      <option>Quotidian</option>
      <option>Math</option>
      <option>Economic</option>
      <option>Management</option>
    </select>
  </div>
  <div class="form-group">
  <div id="yourBtn" onclick="getFile()">Click to upload a file</div>
  <!-- this is your file input tag, so i hide it!-->
  <!-- i used the onchange event to fire the form submission-->
  <div style='height: 0px;width: 0px; overflow:hidden;'><input id="upfile" type="file" value="upload" name="file" onchange="sub(this)" /></div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="4"></textarea>
  </div>
  <input type="submit"  class="sub" value="Submit">
</form>
</div>
<div class="col-5">
    <div>
        <img src="{{asset('img/re.jpg')}}" alt="" style="height:500px; width:450px;">
    </div>
</div>
</div>
</div>

</section>


@endsection