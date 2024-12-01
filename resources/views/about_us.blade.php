@extends('frontlayout')
@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg border-0">
                <div class="card-header" style="background-color: #7C6A46; color: white; text-align: center;">
                    <h2>About Us</h2>
                </div>
                <div class="card-body p-4">
                    <div class="row">
                        <!-- Gambar -->
                        <div class="col-md-6">
                            <img src="{{asset('public/img/about.svg')}}" alt="About Us" class="img-fluid rounded"> 
                        </div>
                        <!-- Deskripsi -->
                        <div class="col-md-6">
                            <h3 class="mb-3" style="color: #7C6A46;">Selamat datang di HotelKu</h3>
                            <p>			
Di HotelKu, kami berkomitmen untuk memberikan pengalaman menginap yang mewah dan tak terlupakan bagi setiap tamu. Dengan layanan luar biasa dan fasilitas kelas dunia, kami memastikan bahwa setiap detik yang Anda habiskan di sini menjadi sempurna.
                            </p>
                            <p>
							Apakah Anda datang untuk bisnis atau rekreasi, tim kami akan selalu siap untuk membuat kunjungan Anda nyaman dan berkesan. Temukan perpaduan sempurna antara keanggunan, kenyamanan, dan keramahan di HotelKu.
                            </p>
							<p>
							Kami juga menyediakan berbagai layanan khusus untuk memenuhi kebutuhan Anda, termasuk restoran gourmet, pusat kebugaran yang modern, serta layanan spa untuk relaksasi maksimal. Setiap aspek penginapan dirancang untuk menciptakan pengalaman yang menyenangkan dan penuh kepuasan, menjadikan HotelKu pilihan utama untuk setiap perjalanan Anda.
							</>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
