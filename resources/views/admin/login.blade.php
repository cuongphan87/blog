<?php
use PhpParser\Node\Stmt\Echo_;
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Login</title>
    <meta name="description" content="T">
    <meta name="keywords" content="">
    <meta name="author" content="cvtsoft.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href=" {{asset('/admin/style.css')}}">	


    <!-- Favicon and touch icons  -->
    <link rel="shortcut icon" href="assets/icon/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/icon/apple-touch-icon-158-precomposed.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="front-page">
	<div class="container" >
		<div class="row">
			<div class="col-md-12">
				<div class="wrap text-center">
					<h3>Login Information</h3>
					
					<form action="/login" method="POST">
						{{ csrf_field ()}}
					
						<fieldset class="wrap_info">
							<div class="user_name">
								<label>Usename:</label>
								<input type="text" name="user" id="user_login">
							</div>
							
							<div class="user_pass">
								<label>Password:</label>
								<input type="password" name="password" id="pass_login">
							</div>
						</fieldset>
						
						<fieldset class="wrap_btn">
							<input type="submit" class="btn btn-success" value="Login" id="btn_login">
						</fieldset>
					</form>
					
					@if (count($errors) > 0 ) 
						@foreach($errors->all() as  $error)
							<p class="errors"> {!!$error!!} </p>
						@endforeach
					@endif
				</div>
			</div>
		</div>
	</div>
    
<!-- <!-- Java Script --> 
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	
</body>
</html>
