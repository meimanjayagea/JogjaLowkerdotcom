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

<!--tentang kami-->
<section class="container pt-5">
    <div class="row">
        <h4 class="pl-3">Mengapa Memilih Kami?</h4>
        <a style="padding-left: 756px;" class="text-info" href="#">selengkapnya</a>
    </div>
    <div class="row pt-2">
        <div class="col-12 col-md-4">
            <div class="card" style="width: 23rem;">
                <div class="card-body bg-info">
                    <h5><span class="badge btn-light">Aktual</span></h5>
                    <p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card" style="width: 23rem;">
                <div class="card-body bg-info">
                    <h5><span class="badge btn-light">Faktual</span></h5>
                    <p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card" style="width: 23rem;">
                <div class="card-body bg-info">
                    <h5><span class="badge btn-light">Kompherensif</span></h5>
                    <p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--tentang kami-->

<!--pasang Lowongan-->
<section class="container-fluid my-5  plowo">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 py-5">
                <h2 class="card-title text-light">Bergabunglah Bersama Kami <i>Employers.</i></h2>
                <p class="text-light">Temukan Pekerjaan Dengan Cepat <br>
                    Jangkauan bombastis<br>
                    Biaya dan waktu efisien.</p>
                <a href="#" class="btn btn-info"> Pasang Lowongan</a>
            </div>
        </div>
    </div>
</section>
<!--pasang Lowongan-->

<!--info lowongan-->
<section class="container-fluid">
    <div class="container">
        <h4>Pekerjaan Terbaru</h4>
        <div class="row py-3">
            <div class="col-12 col-md-4 py-1">
                <div class="card" style="width: 23rem;">
                    <div class="card-body border border-info rounded-3">
                        <div class="d-flex mb-2">
                            <div class="border">
                                <a href="/home/detail"><img src="/assets/img/home.jpg" width="100px" height="80px" /></a>
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
    </div>
</section>
<!--info lowongan-->
<?= $this->endSection(); ?>