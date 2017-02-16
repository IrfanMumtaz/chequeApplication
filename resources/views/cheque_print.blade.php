<!DOCTYPE html>
<html>
<head>
	<title>Print Cheque</title>
	<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/custom.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/app.css')}}">
</head>
<body>




	<div class="image">
		<img src="{{URL::asset('assets/images/blank_cheque.jpg')}}" class="img-responsive">
		<div class="text_wrap">
			<p class="date">{{$results->date}}</p>
			<div>
				<p class="name">{{$results->name}}</p>
				<p class="amount">PKR {{$results->amount}}/-</p>
			</div>
			<p class="amountIW">{{$results->amount_inwords}}</p>
		</div>

	</div>


</body>
</html>

