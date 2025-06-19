@extends('frontlayout')
@section('content')
<!-- Slider Section Start -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">  <div class="carousel-inner">    @foreach($banners as $index => $banner)
    <div class="carousel-item @if($index==0) active @endif">
      <img src="{{asset($banner->banner_src)}}" class="d-block w-100" alt="{{$banner->alt_text}}">
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Slider Section End -->

<!-- Fasilitas Section Start -->
<div class="container my-5">
  <h1 class="text-center border-bottom pb-3" id="services">Fasilitas Kami</h1>
  <p class="text-center text-muted mb-5">Experience the best facilities crafted for your comfort and convenience.</p>
  
  <div class="row g-4">
    @foreach($services as $service)
    <div class="col-lg-3 col-md-4 col-sm-6">      <div class="facility-card text-center p-4 rounded shadow-sm position-relative">        <div class="icon-wrapper d-flex align-items-center justify-content-center mx-auto mb-3">
          <img src="{{asset($service->photo)}}" alt="{{$service->title}}" class="icon-img">
        </div>
        <h5 class="fw-semibold text-brown">{{$service->title}}</h5>
      </div>
    </div>
    @endforeach
  </div>
</div>
<!-- Fasilitas Section End -->

<!-- CSS Styling -->
<style>
  .facility-card {
    background: #fff;
    border: 1px solid #f1f1f1;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  
  .facility-card:hover {
    transform: translateY(-10px);
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
  }
  
  .icon-wrapper {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background-color: #fdfdfd;
    border: 1px solid #ececec;
  }
  
  .icon-img {
    width: 50%;
    height: 50%;
    object-fit: contain;
  }
  
  .text-brown {
    color: #6c4e3f;
  }
</style>


<!-- Jenis Kamar Section Start -->
<div class="container my-5">
  <h1 class="text-center border-bottom pb-3" id="gallery">Jenis Kamar</h1>
  <div class="row g-4">
    @foreach($roomTypes as $rtype)
    <div class="col-lg-4 col-md-6">
      <div class="room-card rounded shadow-sm overflow-hidden">
        <div class="room-header bg-brown text-white p-3">
          <h5>{{$rtype->title}}</h5>
        </div>
        <div class="room-body">          <div class="gallery-images d-flex flex-wrap mb-3">
            @foreach($rtype->roomtypeimgs as $index => $img)
            <a href="{{asset($img->img_src)}}" data-lightbox="rgallery{{$rtype->id}}" class="m-1">
              <img class="img-fluid @if($index > 0) hide @endif rounded" src="{{asset($img->img_src)}}" alt="Gallery image">
            </a>
            @endforeach
          </div>
          <div class="room-info p-3">
            <p class="text-muted mb-3">{{$rtype->description}}</p> <!-- Deskripsi Ditampilkan -->
            <div class="d-flex justify-content-between align-items-center">
              <span class="text-brown fw-bold">{{ number_format($rtype->price, 0, ',', '.') }} IDR</span>
              <span class="badge bg-success">Available</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
<!-- Jenis Kamar Section End -->

<!-- CSS Styling -->
<style>
  .room-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .room-card:hover {
    transform: translateY(-10px);
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
  }

  .room-header {
    background-color: #6c4e3f; /* Coklat */
    color: #fff;
    text-align: center;
    font-weight: bold;
  }

  .room-body {
    background-color: #f9f9f9;
    padding: 15px;
  }

  .gallery-images a {
    position: relative;
    display: block;
    width: 100%;
    height: auto;
    margin-bottom: 10px;
  }

  .gallery-images img {
    max-height: 200px;
    object-fit: cover;
    width: 100%;
    transition: opacity 0.3s ease;
  }

  .room-info {
    background-color: #fff;
    border-top: 1px solid #ddd;
    padding: 10px;
  }

  .room-info p {
    font-size: 0.9rem;
    color: #555;
  }

  .badge {
    padding: 5px 10px;
    font-size: 0.875rem;
    font-weight: 500;
  }

  .text-brown {
    color: #6c4e3f;
  }
</style>



<!-- Testimonial Section Start -->
<div class="bg-light py-5">
  <div class="container">
    <h1 class="text-center border-bottom pb-3" id="testimonials">Testimoni</h1>
    <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        @foreach($testimonials as $index => $testi)
        <div class="carousel-item @if($index==0) active @endif">
          <div class="text-center">
            <blockquote class="blockquote">
              <p class="mb-4 text-brown">{{$testi->testi_cont}}</p>
            </blockquote>
            <figcaption class="blockquote-footer text-muted">
              {{$testi->customer->full_name}}
            </figcaption>
          </div>
        </div>
        @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>
<!-- Testimonial Section End -->

<!-- Map Section Start -->
<div class="container my-5">
  <h1 class="text-center border-bottom pb-3" id="location">Lokasi Kami</h1>
  <div class="map-container" style="position: relative; height: 400px;">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7931.190300909107!2d105.24031462511847!3d-5.364534666579672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40dbf6df69b6b7%3A0x5027e79d75e7370!2sUniversitas%20Lampung!5e0!3m2!1sen!2sid!4v1634550177598!5m2!1sen!2sid" 
      style="border:0; width: 100%; height: 100%;" 
      allowfullscreen="" 
      loading="lazy"></iframe>
  </div>
</div>
<!-- Map Section End -->

<!-- Footer Section Start -->
<footer class="bg-brown text-white py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h5 class="text-white">Tentang Kami</h5>
        <p>We provide top-notch services and an unforgettable experience for our guests. Contact us for more details.</p>
      </div>
      <div class="col-md-6 text-md-end">
        <h5 class="text-white">Hubungi Kami</h5>
        <p>Email: info@hotelku.com | Phone: +123 456 7890</p>
        <p>Follow us on:</p>
        <a href="#" class="text-white me-3"><i class="fab fa-facebook"></i></a>
        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
        <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </div>
</footer>
<!-- Footer Section End -->

<!-- CSS Styling -->
<style>
  .bg-brown {
    background-color: #6c4e3f; /* Warna coklat */
  }
</style>


<!-- LightBox css -->
<link rel="stylesheet" type="text/css" href="{{asset('public/vendor')}}/lightbox2-2.11.3/dist/css/lightbox.min.css" />
<!-- LightBox Js -->
<script type="text/javascript" src="{{asset('public/vendor')}}/lightbox2-2.11.3/dist/js/lightbox.min.js"></script>
<style type="text/css">
  .hide {
    display: none;
  }
  .text-brown {
    color: #8B4513; /* Brown color */
  }
  .bg-brown {
    background-color: #8B4513; /* Brown background */
  }
  .btn-outline-brown {
    color: #8B4513;
    border-color: #8B4513;
  }
  .btn-outline-brown:hover {
    background-color: #8B4513;
    color: #fff;
  }
</style>
@endsection
