<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	
    @include('partials._head')
</head>

<body>

    <div id="app">
        
         @include('partials._nav')
                   
              <div class="container">
       
                   @include('partials._messages')
                   @yield('content')
    
                 </div>
     </div>


   @include('partials._footer')


    <!-- Scripts -->
 @include('partials._javascript')
 @yield('scripts')

 <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
