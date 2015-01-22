<!DOCTYPE html>
<html>
	<head>
		<title> {{ $title }}</title>
		{{ HTML::style('/css/main.css') }}
	</head>
	
	<body>	
		<div id="container">
		
			<div id="header">
				{{ HTML::link('/', 'Make it Snappy Q&A') }}
			</div><!-- end header -->
			
			<div id="nav">
				<ul>
					<li>{{ HTML::link('/', 'Home') }}</li>
					<li>{{ HTML::link('/', 'Register') }}</li>
					<li>{{ HTML::link('/', 'Login') }}</li>
				</ul>
			</div><!-- end nav -->
			
			<div id="content">
				@if(Session::has('message'))
					<p id="message">{{ Session::get('message') }}</p>
				@endif
				
				@yield('content')
			</div><!-- end content -->
			
			<div id="footer">
				&copy; Make It Snappy Q&A {{ date('Y') }}
			</div><!-- end footer -->
			
		</div><!-- end container -->
	</body>
	
</html>