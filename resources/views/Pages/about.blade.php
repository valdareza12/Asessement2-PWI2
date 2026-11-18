@extends('Layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="card-title text-primary fw-bold mb-3">Tentang Kami</h2>
                <p class="card-text lead">
                    Selamat datang di aplikasi platform mahasiswa sederhana berbasis Laravel.
                </p>
                <hr>
                <p>
                    Aplikasi ini dirancang untuk mengelola dan menampilkan data mahasiswa secara terstruktur, cepat, dan modern dengan mengimplementasikan arsitektur MVC (Model-View-Controller) serta antarmuka intuitif menggunakan Bootstrap 5.
                </p>
                
                <h5 class="mt-4 fw-bold">Fitur Utama:</h5>
                <ul>
                    <li>Manajemen tampilan data mahasiswa yang responsif.</li>
                    <li>Sistem layout dinamis menggunakan Blade Templating Engine.</li>
                    <li>Routing yang efisien dan struktur kode yang rapi.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection