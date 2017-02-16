@extends('layouts.dashboard')
@section('page_heading','Cheques Approval')
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
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($data as $da)
		     <tr>
		     	<td>{{ $da->id }}</td>
		     	<td>{{ $da->name }}</td>
		     	<td>{{ $da->amount_inwords }}</td>
		     	<td>{{ $da->amount }}</td>
		     	<td>
		     		@if($da->approved == 0)
		     		<span class="status{{ $da->id  }}">
			     		<form method="post">
			     			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			     			<input type="hidden" value="{{ $da->id  }}" name="cheque_id">
			     			<button type="submit" class="btn btn-info btn-xs ajax_form">Accept</button>
			     		</form>
		     		</span>
		     		@else
		     			<span class="status-success">Approved</span>
		     		@endif
		     	</td>
		     </tr>
		    @endforeach
		</tbody>
	</table>
	    
	</div>

	{{ $data->links() }}

<script type="text/javascript">
	$(document).ready(function(){
	    $('form').on('submit', function(e){
	        e.preventDefault(e);
	        var cheque_id = $(this).children("input[name=cheque_id]").val();
	        var _token = $(this).children("input[name=_token]").val();

	        $.ajax({
	            type: "post",
	            url: "/request_approve",
	            data: {
	                'cheque_id': cheque_id,
	                '_token': _token,
	            },
	            success: function(data){
	            	if(data == 1){
	                	$(".status"+cheque_id).html('<span class="status-success">Approved</span>');
	            	}
	            	else{
	            		alert('Invalid Request Made')
	            	}
	            },
	            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
			        console.log(JSON.stringify(jqXHR));
			        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
			    }
	        });
	    });
	});
</script>
@stop