<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<title>{{ config('app.name', 'Laravel') }}</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta content="" name="description"/>
	<meta content="" name="author"/>


	<link href="/css/app.css" rel="stylesheet">
	<link rel="stylesheet" href="/assets/stylesheets/styles.css" />
	<link rel="stylesheet" href="/assets/stylesheets/custom.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="/js/jquery.printPage.js"></script>
	

	<script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body>
	@yield('body')
	<script src="{{ asset('assets/scripts/frontend.js') }}" type="text/javascript"></script>
	<!-- <script type="text/javascript">
		$(document).ready(function(){
			$('#print_cheque').printPage();
		})
	</script> -->
</body>
</html>