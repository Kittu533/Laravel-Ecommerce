<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">
        @include('partials.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>DataTable</h3>
                            <p class="text-subtitle text-muted">A sortable, searchable, paginated table without
                                dependencies thanks to simple-datatables.</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">
                                Simple Datatable
                            </h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <td>
                                        <tr>
                                            <th>Nama Produk</th>
                                            <th>Deskripsi Produk</th>
                                            <th>Harga Produk</th>
                                            <th>Kategori Produk</th>
                                            <th>Berat produk</th>
                                            <th>Stok Produk</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </td>


                                </thead>
                                <tbody>
                                    @foreach ($produk as $Produk)
                                        <tr>
                                            <td>{{$Produk->nama_produk }}</td>
                                            <td>{{$Produk->Deskripsi_Produk }}</td>
                                            <td>{{$Produk->harga_produk }}</td>
                                            <td>{{$Produk->kategori_produk}}</td>
                                            <td>{{$Produk->berat_produk }}</td>
                                            <td>{{$Produk->stok_produk}}</td>
                                            <td>
                                                <a href="{{route('product.edit', $Produk->id)}}"
                                                    class="btn btn-warning">Edit</a>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

            @include('partials.footer')
        </div>
    </div>
    @include('partials.scripts')
    <script src="{{ asset('assets/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{asset('assets/static/js/pages/simple-datatables.js') }}"></script>


</body>

</html>