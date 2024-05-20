<!DOCTYPE html>
<html lang="en">
@include('partials.header')
<body>
    <script src="{{ asset('assets/static/js/initTheme.js') }}"></script>
    <div id="app">
        @include('partials.sidebar')
        <div id="main">
            @include('partials.topbar')

            <div class="page-heading">
                <h3>Profile Statistics</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="card">
                        <div class="card-body">
                                        <form action="{{ route('produks.update', $produk->id) }}" method="POST">
                                            @csrf
                                            <label for="nama_produk" class = "form-label">Nama Produk</label>
                                            <input type="text" value="{{$produk->nama_produk}}" class="form-control" name="nama_produk">
                                        <div class="mb-3">
                                            <label for="deskripsi_produk" class = "form-label">Deskripsi Produk</label>
                                            <input type="text" value="{{$produk->deskripsi_produk}}" class="form-control" name="deskripsi_produk">
                                        </div>
                                        <div class="mb-3">
                                            <label for="harga_produk" class = "form-label">Harga Produk</label>
                                            <input type="number" value="{{$produk->harga_produk}}" class="form-control" name="harga_produk">
                                        </div>
                                        <div class="mb-3">
                                            <label for="stok_produk" class = "form-label">Stok Produk</label>
                                            <input type="number" value="{{$produk->stok_produk}}" class="form-control" name="stok_produk">
                                        </div>
                                        <div class="mb-3">
                                            <label for="kategori_produk" value="{{$produk->kategori_produk}}" class = "form-label">Kategori Produk</label>
                                            <select name="kategori_produk" id="" class="form-control">
                                            <option value="elektronik">Elektronik</option>
                                            <option value="komputer">Komputer</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="berat_produk" value="{{$produk->berat_produk}}" class = "form-label">Berat Produk</label>
                                            <input type="number" class="form-control" name="berat_produk">
                                        </div>
                                        
                                        <button type ="submit" class="btn btn-primary">Submit</button></button>
                                        </form>
                        </div>         
                    </div>
                </section>
                
            </div>

            @include('partials.footer')
        </div>
    </div>
    @include('partials.scripts')
</body>

</html>