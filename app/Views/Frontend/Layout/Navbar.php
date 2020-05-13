<!-- Header section -->
<header class="header-section">
    <nav class="bg-warning py-2">
        <div class="container">
            <div class="user-panel">
                <div class="up-item mx-3">
                    <h6>
                        <a href="#">
                            <i class="flaticon-map"></i>
                            Lokasi</a>
                    </h6>
                </div>
                <div class="up-item mx-3">
                    <h6>
                        <a href="#">
                            <i class="flaticon-envelope"></i>
                            Email</a>
                    </h6>
                </div>
                <div class="up-item mx-3">
                    <h6>
                        <a href="#">
                            <i class="flaticon-bell"></i>
                            <?= $identitas->no_hp;?></a>
                    </h6>
                </div>
                <div class="up-item mx-3">
                    <h6>
                        <a href="#">
                            <i class="flaticon-clock"></i>
                            07.00 - 17.00</a>
                    </h6>
                </div>
            </div>
        </div>
    </nav>
    <nav class="">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 text-center text-lg-left">
                        <!-- logo -->
                        <a href="<?= base_url()?>" class="site-logo">
                            <img src="<?= base_url()?>/divisima/img/logo.png" alt=""></a>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <form class="header-search-form">
                            <input type="text" placeholder="Search on divisima ....">
                            <button>
                                <i class="flaticon-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="user-panel">
                            <div class="up-item">
                                <ul class="main-menu">
                                    <li>
                                        <i class="flaticon-profile"></i>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="<?= base_url('Profile') ?>">Profile</a>
                                            </li>
                                            <li>
                                                <a href="#">Status</a>
                                            </li>
                                            <li>
                                                <a href="#">Riwayat</a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#modalLogout">Logout</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="up-item">
                                <div class="shopping-card">
                                    <a href="<?= base_url('Permintaan/Member')?>">
                                        <i class="flaticon-bag"></i>
                                    </a>
                                    <span class="text-dark">0</span>
                                </div>
                            </div>
                            <div class="up-item ml-4">
                                <a href="<?= base_url('Home')?>" class="font-weight-bold">Beranda</a>
                            </div>
                            <div class="up-item ml-3">
                                <a href="<?= base_url('Home/Layanan')?>" class="font-weight-bold">Layanan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- Header section end -->

<div class="modal fade" id="modalLogout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm modal-notify modal-danger" role="document">
        <div class="modal-content text-center">
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">Apakah Anda Yakin ?</p>
            </div>
            <div class="modal-body">
                <i class="fa fa-times fa-4x animated rotateIn text-danger"></i>
            </div>
            <div class="modal-footer flex-center">
                <a href="" class="btn  btn-outline-danger">Yes</a>
                <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">No</a>
            </div>
        </div>
    </div>
</div>