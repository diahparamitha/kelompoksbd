<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title> playdot | {{ $title }}</title>

    <link href="{{ asset('img/logo.png')}}" rel="icon" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">

    <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

  </head>
  <body>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

      @include('layouts/partials/navbar')

      

      @yield('content')

      @include('layouts/partials/footer')


      <script type="text/javascript">
        $(document).ready(function() {
    $('#myCarousel').carousel({
      interval: 10000
  })
});
      </script>

  </body>
</html>