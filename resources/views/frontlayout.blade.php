<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
	<link href="{{asset('public/bs5/bootstrap.min.css')}}" rel="stylesheet" />
	<script type="text/javascript" src="{{asset('public/vendor/jquery/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/bs5/bootstrap.bundle.min.js')}}"></script>
	<style>
		.navbar {
			background-color: white;
		}
		.navbar .navbar-brand, 
		.navbar .nav-link {
			color: #7C6A46;
		}
		.navbar .nav-link:hover {
			color: #5c4f35; /* Warna lebih gelap untuk efek hover */
		}
		.navbar .btn-danger {
			background-color: #7C6A46;
			border-color: #7C6A46;
			color: white;
		}
		.navbar .btn-danger:hover {
			background-color: #5c4f35; /* Warna lebih gelap saat hover */
			border-color: #5c4f35;
		}
	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
  <div class="container">
  <a class="navbar-brand fw-bold text-uppercase" href="{{url('/')}}" style="font-size: 1.5rem; letter-spacing: 0.5px;">
        HotelKu
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <!-- Elemen teks di tengah -->
      <div class="navbar-nav mx-auto">
        <a class="nav-link" aria-current="page" href="#services">Fasilitas</a>
        <a class="nav-link" href="#gallery">Jenis Kamar</a>
        <a class="nav-link" href="{{url('page/about-us')}}">Tentang Kami</a>
        <a class="nav-link" href="{{url('page/contact-us')}}">Hubungi Kami</a>
        @if(Session::has('customerlogin'))
        <a class="nav-link" href="{{url('customer/add-testimonial')}}">Testimonial</a>
        @else
        <a class="nav-link" href="{{url('login')}}">Login</a>
        <a class="nav-link" href="{{url('register')}}">Register</a>
        @endif
      </div>
      <!-- Tombol Booking di kanan -->
      <div class="navbar-nav ms-auto">
        <a class="nav-link btn btn-sm btn-danger" href="{{url('booking')}}">Booking</a>
        @if(Session::has('customerlogin'))
        <a class="nav-link" href="{{url('logout')}}">Logout</a>
        @endif
      </div>
    </div>
  </div>
</nav>
<main>
  @yield('content')
</main>
</body>
</html>
