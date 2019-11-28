<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <script src="{{ asset('js/app.js') }}"></script> --}}
    {{-- Bootsrap 4 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    {{-- Bootstrap and Data Table --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
    <script src="{{ asset('/js/custom.js') }}"></script>
    <script type="text/javascript">
      $(document).ready(function(){
          $('.table').DataTable();
      });

      $(function(){
          $('.datepicker').datepicker({
              format: 'yyyy-mm-dd',
              autoclose: true,
              todayHighlight: true,
              startDate: '0d'
          });
      });
  </script>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-info mx-auto">
      <a class="navbar-brand" href="/">rent-Us</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="{{ Request::is('/') ? 'active' : '' }}">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="{{ Request::is('movie') ? 'active' : '' }}">
              <a class="nav-link" href="/movie/">Movie</a>
          </li>
          <li class="{{ Request::is('member') ? 'active' : '' }}">
              <a class="nav-link" href="/member/">Member</a>
          </li>
          <li class="{{ Request::is('rent') ? 'active' : '' }}">
              <a class="nav-link" href="/rent/">Rent</a>
          </li>
          <li class="{{ Request::is('return') ? 'active' : '' }}">
              <a class="nav-link" href="/return/">Return</a>
          </li>
        </ul>
      </div>
    </nav>


      <div class="container">

            @yield('content')

      </div>

      <footer class="container m-5">
        <p style="text-align: center;">&copy; 2019 <span class="badge badge-dark">rent-Us</span> </p>
      </footer>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
      @include('sweet::alert')
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>