@extends('layouts.master')
@section('page_content')
<div class="card">
	<div class="card-block">
    <!--Header-->
    <div class="text-xs-center">
        <h3><i class="fa fa-envelope"></i>FEEDBACK:</h3>
        <hr class="m-t-2 m-b-2">
    </div>

    <!--Body-->
    
		<div class="md-form">
			<i class="fa fa-envelope prefix"></i>
			<input type="name" id="form9" class="form-control validate">
			<label for="form9" data-error="wrong" date-success="right">Name: </label>
		</div>
		<div class="md-form">
			<i class="fa fa-envelope prefix"></i>
			<input type="email" id="form9" class="form-control validate">
			<label for="form9" data-error="wrong" data-success="right">Email:</label>
		</div>
		<label for="reason">Have a question or a feedback?</label>
		  <select class="form-control" id="sel1">
			 	<option></option>
				<option>Do you have a comment or concern?</option>
			  	<option>How can I become a provider?</option>
				<option>would you like to leave a feedback?</option>
		  </select>
	     <br>
	    <div class="md-form">
	        <i class="fa fa-pencil prefix"></i>
	        <textarea type="text" id="form8" class="md-textarea"></textarea>
	        <label for="form8">Comment</label>
	    </div>
		<center>
			<a  href="{{ action('PagesController@thankyou') }}" class="btn btn-primary" type="submit" >Submit</a>
		</center>
		</div>
  </div>
@stop

