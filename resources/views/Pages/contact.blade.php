@extends('Layouts.master')

@section('title', 'Kontak Kami')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <h1 class="mb-4">Hubungi Kami</h1>
        
        <div class="row g-4">
            <!-- Kartu Informasi Kontak -->
            <div class="col-md-5">
                <div class="card h-100 shadow-sm border-0 bg-light">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Informasi Kontak</h4>
                        
                        <div class="d-flex align-items-start mb-3">
                            <i class="bi bi-geo-alt-fill text-primary fs-4 me-3"></i>
                            <div>
                                <h6 class="mb-0 fw-bold">Alamat:</h6>
                                <p class="text-muted mb-0">Jl. Telekomunikasi No. 1, Terusan Buahbatu, Bandung, Jawa Barat</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-3">
                            <i class="bi bi-envelope-fill text-primary fs-4 me-3"></i>
                            <div>
                                <h6 class="mb-0 fw-bold">Email:</h6>
                                <p class="text-muted mb-0">info@belajarlaravel.com</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-3">
                            <i class="bi bi-telephone-fill text-primary fs-4 me-3"></i>
                            <div>
                                <h6 class="mb-0 fw-bold">Telepon / Whatsapp:</h6>
                                <p class="text-muted mb-0">+62 812-3456-7890</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start">
                            <i class="bi bi-clock-fill text-primary fs-4 me-3"></i>
                            <div>
                                <h6 class="mb-0 fw-bold">Jam Operasional:</h6>
                                <p class="text-muted mb-0">Senin - Jumat: 08:00 - 17:00 WIB</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Kirim Pesan -->
            <div class="col-md-7">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h4 class="card-title mb-3">Kirim Pesan</h4>
                        <p class="text-muted mb-4">Ada pertanyaan atau masukan? Silakan isi formulir di bawah ini.</p>

                        <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Pesan Anda berhasil dikirim!');">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" id="email" placeholder="nama@example.com" required>
                            </div>

                            <div class="mb-3">
                                <label for="subjek" class="form-label">Subjek</label>
                                <input type="text" class="form-control" id="subjek" placeholder="Topik pesan" required>
                            </div>

                            <div class="mb-3">
                                <label for="pesan" class="form-label">Pesan</label>
                                <textarea class="form-control" id="pesan" rows="4" placeholder="Tuliskan pesan Anda di sini..." required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection