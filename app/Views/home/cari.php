<?= $this->extend('layout/base'); ?>

<?= $this->section('content'); ?>

<!-- Jumbotron -->
<section class="home jumbotron jumbotron-fluid">
    <div class="container">
        <div class=" row align-items-center justify-content-center" style="position: relative; top: 200px;">
            <div class="text-center" style="width: 75%; padding: 10px;">
                <h2 class="py-3 text-center text-light">Aktual Faktual dan Kompherensip</h2>
                <div class="input-group class-10" style="align-content: center;">
                    <input type="text" name="imput-cari" value="" class="form-control form-control-lg border-start-1" id="imput-cari" placeholder="Cari Lowongan Pekerjaan" />
                    <button type="submit" class="btn btn-info btn-lg"><i class="fas fa-search">&ensp;</i></button>
                </div>
            </div>
        </div>
</section>
<!-- End jumbotron -->

<!--info lowongan-->
<section class="container-fluid py-4">
    <div class="container">
        <h4>Ditemukan 309 Lowongan Kerja</h4>
        <div class="row ml-1 bg border rounded" style=" background-color: rgba(0, 0, 0, 0.1)">
            <div class="d-flex flex-column mx-2">
                <div class="py-2">
                    <label for="lokasi" class="visually-hidden">Tipe Pekerjaan</label>
                    <select name="lokasi" class="form-select&#x20;form-select-lg mr-3">
                        <option value="" selected="selected">Tipe Pekerjaan</option>
                        <option value="bantul">Magang</option>
                        <option value="sleman">Part Time</option>
                        <option value="yogyakarta">Full Time</option>
                        <option value="kulon+progo">Freelance</option>
                    </select>
                    <label for="pendidikan" class="visually-hidden">Pendidikan</label>
                    <select name="pendidikan" class="form-select&#x20;form-select-lg mr-3">
                        <option value="" selected="selected">Semua Lulusan</option>
                        <option value="sma">SMA</option>
                        <option value="d3">D3</option>
                        <option value="s1">S1</option>
                        <option value="s2">S2</option>
                        <option value="umum">Umum</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-4 py-1">
                <div class="card" style="width: 23rem;">
                    <div class="card-body border border-info rounded">
                        <div class="d-flex mb-2">
                            <div class="border">
                                <a href="#"><img src="/assets/img/home.jpg" width="100px" height="80px" /></a>
                            </div>
                            <div class="m-2">
                                <h5 class="card-title">Marketing</h5>
                                <h6 class="card-subtitle mb-2 fs-6">CV. Bunga mekar indonesia</h6>
                            </div>
                        </div>
                        <dl>
                            <dt><span class="fas fa-graduation-cap">&ensp;Umum</span></dt>
                            <dt><span class="fas fa-map-marker-alt">&ensp;&ensp;Lokasi</span></dt>
                            <dt><span class="far fa-clock">&ensp; Diperbaharui 1 jam yang lalu</span></dt>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 py-1">
                <div class="card" style="width: 23rem;">
                    <div class="card-body border border-info rounded-3">
                        <div class="d-flex mb-2">
                            <div class="border">
                                <a href="#"><img src="/assets/img/home.jpg" width="100px" height="80px" /></a>
                            </div>
                            <div class="m-2">
                                <h5 class="card-title">Marketing</h5>
                                <h6 class="card-subtitle mb-2 fs-6">CV. Bunga mekar indonesia</h6>
                            </div>
                        </div>
                        <dl>
                            <dt><span class="fas fa-graduation-cap">&ensp;Umum</span></dt>
                            <dt><span class="fas fa-map-marker-alt">&ensp;&ensp;Lokasi</span></dt>
                            <dt><span class="far fa-clock">&ensp; Diperbaharui 1 jam yang lalu</span></dt>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 py-1">
                <div class="card" style="width: 23rem;">
                    <div class="card-body border border-info rounded-3">
                        <div class="d-flex mb-2">
                            <div class="border">
                                <a href="#"><img src="/assets/img/home.jpg" width="100px" height="80px" /></a>
                            </div>
                            <div class="m-2">
                                <h5 class="card-title">Marketing</h5>
                                <h6 class="card-subtitle mb-2 fs-6">CV. Bunga mekar indonesia</h6>
                            </div>
                        </div>
                        <dl>
                            <dt><span class="fas fa-graduation-cap">&ensp;Umum</span></dt>
                            <dt><span class="fas fa-map-marker-alt">&ensp;&ensp;Lokasi</span></dt>
                            <dt><span class="far fa-clock">&ensp; Diperbaharui 1 jam yang lalu</span></dt>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-12 col-md-4 py-1">
                <div class="card" style="width: 23rem;">
                    <div class="card-body border border-info rounded-3">
                        <div class="d-flex mb-2">
                            <div class="border">
                                <a href="#"><img src="/assets/img/home.jpg" width="100px" height="80px" /></a>
                            </div>
                            <div class="m-2">
                                <h5 class="card-title">Marketing</h5>
                                <h6 class="card-subtitle mb-2 fs-6">CV. Bunga mekar indonesia</h6>
                            </div>
                        </div>
                        <dl>
                            <dt><span class="fas fa-graduation-cap">&ensp;Umum</span></dt>
                            <dt><span class="fas fa-map-marker-alt">&ensp;&ensp;Lokasi</span></dt>
                            <dt><span class="far fa-clock">&ensp; Diperbaharui 1 jam yang lalu</span></dt>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 py-1">
                <div class="card" style="width: 23rem;">
                    <div class="card-body border border-info rounded-3">
                        <div class="d-flex mb-2">
                            <div class="border">
                                <a href="#"><img src="/assets/img/home.jpg" width="100px" height="80px" /></a>
                            </div>
                            <div class="m-2">
                                <h5 class="card-title">Marketing</h5>
                                <h6 class="card-subtitle mb-2 fs-6">CV. Bunga mekar indonesia</h6>
                            </div>
                        </div>
                        <dl>
                            <dt><span class="fas fa-graduation-cap">&ensp;Umum</span></dt>
                            <dt><span class="fas fa-map-marker-alt">&ensp;&ensp;Lokasi</span></dt>
                            <dt><span class="far fa-clock">&ensp; Diperbaharui 1 jam yang lalu</span></dt>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 py-1">
                <div class="card" style="width: 23rem;">
                    <div class="card-body border border-info rounded-3">
                        <div class="d-flex mb-2">
                            <div class="border">
                                <a href="#"><img src="/assets/img/home.jpg" width="100px" height="80px" /></a>
                            </div>
                            <div class="m-2">
                                <h5 class="card-title">Marketing</h5>
                                <h6 class="card-subtitle mb-2 fs-6">CV. Bunga mekar indonesia</h6>
                            </div>
                        </div>
                        <dl>
                            <dt><span class="fas fa-graduation-cap">&ensp;Umum</span></dt>
                            <dt><span class="fas fa-map-marker-alt">&ensp;&ensp;Lokasi</span></dt>
                            <dt><span class="far fa-clock">&ensp; Diperbaharui 1 jam yang lalu</span></dt>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right-aligned -->
        <div class="row">
            <div class="container">
                <nav aria-label="...">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled">
                            <span class="page-link">Previous</span>
                        </li>
                        <li class="page-item">
                            <a class="page-link active" href="#">1</a>
                        </li>
                        <li class="page-item " aria-current="page">
                            <span class="page-link">2</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--info lowongan-->
<?= $this->endSection(); ?>