@extends('layouts.front.main')

@section('content')
    <main>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6">
                <h1>Laboratorium Terpadu Universitas Negeri Padang</h1>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d498.6659797974023!2d100.34992823213197!3d-0.8984150953064531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b9f839a0dba3%3A0x8d3048bab8b8a904!2sUPT.%20Laboratorium%20Terpadu%20Universitas%20Negeri%20Padang!5e0!3m2!1sid!2sid!4v1690997237753!5m2!1sid!2sid"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <address>
                            <i class="fa-solid fa-location-dot me-2"></i>Jl. Prof. Dr. Hamka, Air Tawar Bar., Kec. Padang Utara, Kota Padang, Sumatera Barat 25171 <br>
                            <i class="fa-solid fa-headset me-2"></i>0812-3456-7890 <br>
                            <i class="fa-solid fa-envelope me-2"></i>email@labdu.unp.ac.id <br>
                            <i class="fa-solid fa-globe me-2"></i>labdu.unp.ac.id

                        </address>
                </div>
                <div class="col-md-6">
                    <h2>Hubungi Kami</h2>
                    <form class="form">
                        <div class="mb-3">
                            <label for="#nama" class="form-label">
                                Nama
                            </label>
                            <input type="text" class="form-control" id="nama">
                            <div class="form-text"><span class="text-danger fs-5">*</span>wajib diisi</div>
                        </div>
                        <div class="mb-3">
                            <label for="#instansi" class="form-label">
                                Instansi
                            </label>
                            <input type="text" class="form-control" id="instansi">
                            <div class="form-text">tidak wajib diisi</div>
                        </div>
                        <div class="mb-3">
                            <label for="#email" class="form-label">
                                Email
                            </label>
                            <input type="email" class="form-control" id="email">
                            <div class="form-text"><span class="text-danger fs-5">*</span>wajib diisi</div>
                        </div>
                        <div class="mb-3">
                            <label for="#pesan" class="form-label">
                                Pesan
                            </label>
                            <textarea class="form-control" id="pesan" rows="5"></textarea>
                            <div class="form-text"><span class="text-danger fs-5">*</span>wajib diisi</div>
                        </div>
                        <div class="mb-3 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection