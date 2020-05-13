<!-- <Breadcrumb> -->
    <?= view('Frontend/Layout/Breadcrumb.php'); ?>
    <!-- </Breadcrumb> -->

    <!-- cart section end -->
    <section class="cart-section spad">
        <div class="container">
            <div class="container emp-profile card shadow">
                <form method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-img">
                                <img src="<?= base_url('/divisima/img/blog-thumbs/male-default.png') ?>" alt=""/>
                                <div class="file btn btn-lg btn-primary">
                                    Change Photo
                                    <input type="file" name="file"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-head">
                                
                                <p class="proile-rating">&nbsp <span>&nbsp</span></p>
                                <h3>
                                    Kshiti Ghelani
                                </h3>
                                <p class="proile-rating">&nbsp <span>&nbsp</span></p>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2">                     
                            <a href="#" data-toggle="modal" data-target="#modalEditProfile" class="site-btn sb-dark">Edit Profile</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-work">
                                <p>AKSES CEPAT</p>
                                <a href="">Riwayat Transaksi</a><br/>
                                <a href="">Status</a><br/>
                                <a href="">Keranjang (1)</a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Nama Lengkap</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Kshiti Ghelani</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>kshitighelani@gmail.com</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Nomor HP</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>123 456 7890</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Jenis kelamin</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Web Developer and Designer</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Tanggal Lahir</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Kshiti123</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Experience</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Expert</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Hourly Rate</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>10$/hr</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Total Projects</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>230</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>English Level</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Expert</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Availability</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>6 months</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>           
            </div>
        </div>
    </section>
    <!-- cart section end -->

    <div class="modal fade" id="modalEditProfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Edit Profile</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="checkout-form">
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <input type="text" id="orangeForm-name" class="form-control validate" placeholder="Your Name">
                        </div>

                        <div class="md-form mb-5">
                            <input type="text" id="orangeForm-name" class="form-control validate" placeholder="Your Name">
                        </div>

                        <div class="md-form mb-5">
                            <input type="text" id="orangeForm-name" class="form-control validate" placeholder="Your Name">
                        </div>

                        <div class="md-form mb-5">
                            <input type="text" id="orangeForm-name" class="form-control validate" placeholder="Your Name">
                        </div>
                    
        
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-warning">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>