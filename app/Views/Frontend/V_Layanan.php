<!-- <Breadcrumb> -->
<?= view('Frontend/Layout/Breadcrumb.php'); ?>
<!-- </Breadcrumb> -->

<!-- Category section -->
<section class="category-section spad">
    <div class="container">
        <div class="row">
            <?php foreach ($layanan as $result) { ?>
            <div class="col-xl-4">
                <div class="product-item">
                    <div class="card shadow">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img class="card-img-top p-4" width="280" height="259" src="<?= base_url()?>/global_assets/images/<?= $result->image ?>">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Card content -->
                            <div class="card-body bg-warning white-text rounded-bottom">

                                <!-- Title -->
                                <h4 class="card-title"><?= $result->nama_kategori ?></h4>
                                <hr class="hr-light">
                                    <!-- Text -->
                                    <p class="card-text text-white mb-5"><?= $result->deskripsi ?></p>
                                    <!-- Link -->
                                    <div class="pi-links mt-5 pt-5">
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
                    <?php } ?>

                    

                                    <!-- Pagination -->
                                    <nav class="my-5 mx-auto d-block">
                                        <ul class="pagination pagination-circle pg-blue mb-0">

                                            <!-- First -->
                                            <li class="page-item disabled">
                                                <a class="page-link">First</a>
                                            </li>

                                            <!-- Arrow left -->
                                            <li class="page-item disabled">
                                                <a class="page-link" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>

                                            <!-- Numbers -->
                                            <li class="page-item active">
                                                <a class="page-link">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link">4</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link">5</a>
                                            </li>

                                            <!-- Arrow right -->
                                            <li class="page-item">
                                                <a class="page-link" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>

                                            <!-- First -->
                                            <li class="page-item">
                                                <a class="page-link">Last</a>
                                            </li>

                                        </ul>
                                    </nav>
                                    <!-- /Pagination -->

                                </div>
                            </div>
                        </section>
                        <!-- Category section end -->

        