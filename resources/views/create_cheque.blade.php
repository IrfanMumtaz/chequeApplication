@extends('layouts.dashboard')
@section('page_heading','Create Cheque')
@section('section')
           
           
	<ul>
	    @foreach($errors->all() as $error)
	        <li>{{ $error }}</li>
	    @endforeach
	</ul>
	
	@if(session('success') == 1)
		<div class="alert alert-success">
		  <strong>Success!</strong> Cheques has been sent for approval.
		</div>
	@elseif(session('success') == -1)
		<div class="alert alert-danger">
		  <strong>Failed!</strong> Operation failed. Please try again.
		</div>
	@endif

	<form role="form" method="POST" action="create_cheque/store">
		<div class="form-group">
            <label>Name</label>
            <input class="form-control" type="text" name="name" pattern="[a-zA-Z\s]{1,50}" title="Input Accepts Alphabets Only" required="">
        </div>
        <div class="form-group">
            <label>Date</label>
            <input class="form-control" type="date" name="date" required="">
        </div>
        <div class="form-group">
            <label>Amount In Counting</label>
            <input class="form-control" type="text" name="amountIC" pattern="[0-9.,]{1,18}" title="Input Accepts Numbers Only" required="">
        </div>
        <div class="form-group">
            <label>Amount In Words</label>
            <input class="form-control" type="text" name="amountIW" pattern="[a-zA-Z\s]{1,255}" title="Input Accepts Alphabets Only" required="">
        </div>
        <div class="form-group">
        	<input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input class="form-control" type="submit" name="submit" value="submit">
        </div>
	</form>
@stop
