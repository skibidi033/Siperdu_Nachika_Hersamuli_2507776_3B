@extends('layout.admin')
 
@section('title', 'Data Buku')
@section('subtitle', 'Data-data buku yang tersedia di perpustakaan')
 
@section('content')
  <div class="table-card-custom">
    <div class="table-responsive">
      <table class="table-custom">
        <thead>
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Kategori</th>
            <th>Tahun</th>
            <th>Stok</th>
            <th>Status</th>
            <th class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($buku as $item)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td class="table-product-name">{{ $item->judul }}</td>
              <td>{{ $item->penulis }}</td>
              <td>{{ $item->kategori->nama_kategori }}</td>
              <td>{{ $item->tahun_terbit }}</td>
              <td>{{ $item->stok }}</td>
              <td>
                @if ($item->stok > 0)
                  <span class="badge-table success">Tersedia</span>
                @else
                  <span class="badge-table failed">Habis</span>
                @endif
              </td>
              <td>
                <div class="d-flex justify-content-center gap-2">
                  <a href="#" class="btn-custom btn-custom-warning btn-custom-sm"><i class="bi bi-pencil"></i> Edit</a>
                  <a href="#" class="btn-custom btn-custom-danger btn-custom-sm"><i class="bi bi-trash"></i> Hapus</a>
                </div>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="8" class="text-center">Belum ada data buku.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
@endsection
