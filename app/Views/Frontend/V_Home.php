<!-- Hero section -->
<section class="hero-section">
    <div class="hero-slider owl-carousel">
        <?php foreach ($banner as $key) {?>
        <div
            class="hs-item set-bg"
            data-setbg="<?= base_url()?>/divisima/img/<?= $key->gambar;?>">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 text-white">
                        <h2><?= $key->judul;?></h2>
                        <p><?= $key->deskripsi;?>
                        </p>
                    </div>
                </div>
                <div class="offer-card text-white bg-warning">
                    <span>Kualitas</span>
                    <h3>Terjamin</h3>
                    <span>100%</span>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <div class="container">
        <div class="slide-num-holder" id="snh-1"></div>
    </div>
</section>
<!-- Hero section end -->

<!-- Features section -->
<section class="features-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 p-0 feature">
                <div class="feature-inner">
                    <div class="feature-icon">
                        <img src="<?= base_url()?>/divisima/img/icons/1.png" alt="#"></div>
                    <h2>Tim Profesional</h2>
                </div>
            </div>
            <div class="col-md-4 p-0 feature bg-warning">
                <div class="feature-inner">
                    <div class="feature-icon">
                        <img src="<?= base_url()?>/divisima/img/icons/2.png" alt="#"></div>
                    <h2>Harga Terjangkau</h2>
                </div>
            </div>
            <div class="col-md-4 p-0 feature">
                <div class="feature-inner">
                    <div class="feature-icon">
                        <img src="<?= base_url()?>/divisima/img/icons/3.png" alt="#"></div>
                    <h2>Hasil Terbaik</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features section end -->

<!-- letest product section -->
<section class="top-letest-product-section">
    <div class="container">
        <div class="col-xl-12">
            <div class="card shadow">
                <div class="card-header bg-warning">
                    <h3>Selamat Datang</h3>
                </div>
                <div class="card-body">
                    <div class="section-title">
                        <h2><?= $identitas->nama_perusahaan;?></h2>
                        <hr>
                        <p class="text-center"><?= $identitas->deskripsi_perusahaan;?></p>
                    </div>
                    <div class="text-center">
                        <a href="" class="btn btn-warning">Hubungi Kami</a>
                        <a href="" class="btn btn-warning">Konsultasi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- letest product section end -->

<!-- Product filter section -->
<section class="product-filter-section">
    <div class="container">
        <div class="section-title">
            <h2 class="pt-4">LAYANAN KAMI</h2>
            <hr class="mt-2 mb-5">
        </div>
        <div class="row">
            <?php foreach ($layanan as $result) { ?>
            <div class="col-lg-6 my-2">
                <div class="product-item">
                    <div class="card shadow">
                        <div class="row">
                            <div class="col-5 my-auto d-flex p-3">
                                <img
                                    src="<?= base_url()?>/global_assets/images/<?= $result->image ?>"
                                    class="img-thumbnail shadow ml-3"
                                    style="height: 200px;width: 300px;"
                                    alt="">
                            </div>
                            <div class="col-7 p-5">
                                <h4><?= $result->nama_kategori ?></h4>
                                <p><?= $result->deskripsi ?></p>
                                <div class="pi-links mr-5 mt-4">
                                    <a href="#" class="add-card mx-2">
                                        <i class="flaticon-bag"></i>
                                        <span>ADD TO CART</span>
                                    </a>
                                    <a href="#" class="add-card mx-2">
                                        <i class="flaticon-bell"></i>
                                        <span>CALL NOW</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="text-center pt-5">
            <button class="site-btn sb-line sb-dark">Selengkapnya</button>
        </div>
    </div>
</section>
<!-- Product filter section end -->

<!-- Banner section -->
<section class="banner-section">
    <div class="container">
        <div class="col-xl-12 mb-5">
            <div class="card shadow">
                <div class="row">
                    <div class="col p-5 text-center">
                        <h2>Sekilas Kami</h2>
                        <h2>"<?= $identitas->nama_perusahaan;?>"</h2>
                        <p><?= $identitas->tentang_kami;?></p>
                    </div>
                    <div class="col">
                        <img src="<?= base_url()?>/divisima/img/blog-thumbs/gambar4.png" class="img-fluid mx-auto d-block"width="400">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner section end -->

<section class="product-filter-section">
    <!-- Page Content -->
    <div class="container">
        <div class="section-title">
            <h2 class="pt-4">GALERI TEKNISI JABAR</h2>
            <hr class="mt-2 mb-5">
        </div>
        <div class="row text-center text-lg-left">
            <div class="col-lg-3 col-md-4 col-6">
              <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
                  </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
              <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
                  </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
              <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/EUfxH-pze7s/400x300" alt="">
                  </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
              <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/M185_qYH8vg/400x300" alt="">
                  </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
              <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/sesveuG_rNo/400x300" alt="">
                  </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
              <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/AvhMzHwiE_0/400x300" alt="">
                  </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
              <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/2gYsZUmockw/400x300" alt="">
                  </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
              <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/EMSDtjVHdQ8/400x300" alt="">
                  </a>
            </div>
        </div>
        <div class="text-center pt-5">
            <button class="site-btn sb-line sb-dark">Selengkapnya</button>
        </div>
    </div>
<!-- /.container -->
</section>