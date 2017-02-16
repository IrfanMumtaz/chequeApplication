@extends('layouts.dashboard')
@section('page_heading','Cheques List')
@section('section')
    <div class="pull-left margin-bottom">
    	<a href="create_cheque" class="btn btn-primary">Create</a>
    </div>
           
	<table class="table table-striped table-bordered ">
		<thead>
			<tr>
				<th>S. No</th>
				<th>Name</th>
				<th>Amount In Words</th>
				<th>Amount In Counting</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php $sno = 1?>
			@foreach ($data as $da)
		     <tr>
		     	<td>{{ $sno++ }}</td>
		     	<td>{{ $da->name }}</td>
		     	<td>{{ $da->amount_inwords }}</td>
		     	<td>{{ $da->amount }}</td>
		     	<td>
		     		@if($da->approved == 1)
		     			<span class="status-success">Approved</span>
		     			<form method="post" action="/cheque_print" id="print_form">
		     				<input type="hidden" name="cheque_id" value="{{ $da->id }}">
		     				<input type="hidden" name="_token" value="{{ csrf_token() }}">
		     				<button type="submit" class="btn btn-success btn-xs">Print</button>
		     			</form>
		     		@else
		     			<span class="status-failed">Pending</span>
		     		@endif
		     	</td>
		     </tr>
		    @endforeach
		</tbody>
	</table>
	    
	</div>

	{{ $data->links() }}
@stop
