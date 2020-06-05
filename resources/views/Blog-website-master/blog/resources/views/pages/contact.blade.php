@extends('layouts.app')
@section('title','|Contact page')
@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
  <div class="panel-heading" style="background-color: #A9F967;font-size: 30px;">Contact Us</div>
  <div class="panel-body">
    <div class="col-md-8 col-md-offset-2">
           <form action="{{url('contact')}}" method="POST">
              {{csrf_field()}}
                 <div class="form-group">
                   <label name="email">Email:</label>
                   <input id="email" name="email" class="form-control" >
                 </div>
                 <div class="form-group">
                   <label  name="subject">Subject:</label>
                   <input  id="subject" name="subject"class="form-control">
                 </div>
                 <div class="form-group">
                   <label name="message" >Messege:</label>
                   <textarea id="message"name="message" class="form-control" ></textarea> 
                 </div>
                 
                 <button type="submit" value="Send Message" class="btn btn-success">Send Message</button>
               </form>
           </div>
  </div>
</div>
        
     </div>
</div>
@endsection
