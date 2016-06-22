<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dairy Farm</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <!-- Bootstrap Core CSS -->

    {!! Html::style( 'assets/css/bootstrap.min.css' ) !!}

    

    <!-- Custom Fonts -->
    
    {!! Html::style( 'assets/css/font-awesome.min.css' ) !!}
   
    {!! Html::style( 'assets/css/ionicons.css' ) !!}

    <!-- main CSS -->
    {!! Html::style( 'assets/css/AdminLTE.css' ) !!}
    
    <!-- Skin blue css-->
    {!! Html::style( 'assets/css/skin-blue.min.css' ) !!}

     

   

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body class="hold-transition login-page" style="background-image: url({{ URL::asset('images/cow-banner.jpg') }}); background-size:cover; background-position:top;">
    <div class="login-box">
      <div class="login-logo login_logo">
        <a href="#">Welcome To Farm</a>
      </div><!-- /.login-logo -->

    </div><!-- /.login-box -->

	<div class="content">
		<div class="row">

           @yield('content')


         </div>
	</div>
   
  

</body>
    


