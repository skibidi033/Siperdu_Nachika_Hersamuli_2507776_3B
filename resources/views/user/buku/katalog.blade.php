@extends('layout.user')
 
@section('title', 'Katalog Buku - Sistem Perpustakaan Terpadu')
 
@section('content')
    <!-- START SECTION TOP -->
    <section class="section-top">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <h1>Katalog Buku</h1>
                    <ul>
                        <li><a href="{{ route('user.beranda') }}">Home</a></li>
                        <li> / Katalog Buku</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION TOP -->
 
    <!-- START KATALOG BUKU -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                @forelse ($buku as $item)
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="single_course">
                            <div class="single_c_img">
                                <img src="{{ asset('assetsUser/img/' . $item->cover) }}" class="img-fluid" alt="{{ $item->judul }}" />
                                <span>{{ $item->kategori->nama_kategori }}</span>
                            </div>
                            <h4><a href="#">{{ $item->judul }}</a></h4>
                            <p><span class="ti-user"> </span> {{ $item->penulis }}</p>
                            <p><span class="ti-book"> </span> {{ $item->penerbit }}, {{ $item->tahun_terbit }}</p>
                            @if ($item->stok > 0)
                                <div class="price">Status - Tersedia ({{ $item->stok }})</div>
                            @else
                                <div class="price text-danger">Status - Habis</div>
                            @endif
                        </div>
                    </div><!-- END COL -->
                @empty
                    <div class="col-12 text-center">
                        <p>Belum ada buku pada katalog.</p>
                    </div>
                @endforelse
            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </section>
    <!-- END KATALOG BUKU -->
@endsection
