<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>@yield('movie_pub')</title>
</head>
<body>
  <header>
    <div class="logo">
      <img src="{{asset('images/hotpopcornmovie.svg')}}" alt="">
    </div>
    <div class="brand-wrapper">
      <h2>The Movie Pub</h2>
    </div>
  </header>
    <main>
      <div class="container">
      @yield('content')
      </div>
    </main> 
</body>
</html>