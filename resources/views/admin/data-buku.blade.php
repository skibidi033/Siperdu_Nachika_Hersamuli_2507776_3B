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
            <th>Status</th>
            <th class="text-center">Aksi</th>
        </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td class="table-product-name">Laskar Pelangi</td>
            <td>Andrea Hirata</td>
            <td><span class="badge-table success">Tersedia</span></td>
            <td>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn-custom btn-custom-warning btn-custom-sm"><i class="bi bi-pencil"></i> Edit</a>
                <a href="#" class="btn-custom btn-custom-danger btn-custom-sm"><i class="bi bi-trash"></i> Hapus</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td class="table-product-name">Bumi Manusia</td>
            <td>Pramoedya Ananta Toer</td>
            <td><span class="badge-table success">Tersedia</span></td>
            <td>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn-custom btn-custom-warning btn-custom-sm"><i class="bi bi-pencil"></i> Edit</a>
                <a href="#" class="btn-custom btn-custom-danger btn-custom-sm"><i class="bi bi-trash"></i> Hapus</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td class="table-product-name">Filosofi Teras</td>
            <td>Henry Manampiring</td>
            <td><span class="badge-table failed">Habis</span></td>
            <td>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" class="btn-custom btn-custom-warning btn-custom-sm"><i class="bi bi-pencil"></i> Edit</a>
                <a href="#" class="btn-custom btn-custom-danger btn-custom-sm"><i class="bi bi-trash"></i> Hapus</a>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
