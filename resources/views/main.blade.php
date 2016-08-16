<!DOCTYPE html>
<html lang="en">
<head>	
	<title>Blog @yield('title')</title>
	@include('partials._head')
</head>
<body>
@include('partials._nav')
<!-- container -->
<div class="container">
@include('partials._messages')

@yield('content')

@include('partials._footer')
</div><!-- /container -->

@include('partials._js')
@yield('scripts')	
</body>
</html>