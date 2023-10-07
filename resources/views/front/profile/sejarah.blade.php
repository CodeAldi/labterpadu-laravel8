@extends('layouts.front.main')

@section('content')
<main>
    <div class="container mt-4">
        <div class="row">
            <div class="col-9">
                <h1 class="text-center">Sejarah Singkat Laboratorium Terpadu<br/>Universitas Negeri Padang</h1>
                <article>
                    <img src="{{ asset('images/labor.jpg') }}" class="img-thumbnail" width="100%" alt="">
                    <p class="pt-2" style="text-align: justify; text-justify: inter-word">
                    Laboratorium Terpadu Universitas Negeri Padang merupakan salah satu divisi pada Pusat Pengembangan Laboratorium Terpadu
                    di lingkungan UNP yang berdiri berdasarkan Surat Keputusan Rektor No. 3509 Tahun 2017 tentang Standar Pelayanan Publik
                    Universitas Negeri Padang, dan Surat Keputusan Rektor No. 143 Tahun 2021 tentang Penunjukkan Tim Pengelola Laboratorium
                    Terpadu Universitas Negeri Padang.<br/><br/>Laboratorium Terpadu dipimpin oleh seorang Kepala Pusat Pengembangan Laboratorium
                    Terpadu dan bertanggung jawab kepada Rektor melalui Penanggungjawab sekaligus Ketua Lembaga Pengembangan Pembelajaran
                    dan Penjaminan Mutu (LP3M). Laboratorium Terpadu Universitas Negeri Padang mempunyai tugas melaksanakan layanan
                    laboratorium untuk kegiatan pengujian dan kalibrasi, pendidikan, penelitian dan pengabdian kepada masyarakat.
                    Panduan Mutu Laboratorium Terpadu Universitas Negeri Padang disusun berdasarkan ISO/IEC 17025:2017 mengenai Persyaratan
                    Umum Kompetensi Laboratorium Pengujian dan Kalibrasi sesuai dengan ruang lingkup laboratorium. Panduan Mutu ini dibuat
                    dengan tujuan agar digunakan sebagai:
                    <ol>
                        <li>Acuan dalam penerapan sistem manajemen berdasarkan ISO/IEC 17025:2017.</li>
                        <li>Acuan dalam pelaksanaan audit implementasi sistem manajemen baik audit internal maupun audit yang dilakukan oleh pihak
                        ketiga (audit eksternal).</li>
                        <li>Acuan dalam upaya peningkatan dan pemeliharaan kinerja.</li>
                        <li>Bukti telah menerapkan Sistem Manajemen Mutu laboratorium berdasarkan ISO/IEC 17025:2017</li>
                    </ol>
                    </p>
                </article>
            </div>
            <div class="col-3">
                <h2>Menu</h2>
                @include('front.partials.sidebar')
            </div>
        </div>
    </div>
</main>
@endsection