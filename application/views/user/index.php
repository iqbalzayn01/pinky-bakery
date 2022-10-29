                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><i><?= $title; ?></i></h1>

                    <!-- List Products: Start -->
                    <section class="list-products p-5" style="height: 100vh;">

                        <div id="carouselExampleIndicators" class="carousel slide carousel-fade mt-5" data-bs-ride="true">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <!-- Carousel Items 1: Start -->
                                <div class="carousel-item d-flex flex-row align-items-center justify-content-evenly active">
                                    <div class="card" style="width: 18rem;">
                                        <img src="<?= base_url('assets/img/blackforest-cake.jpg'); ?>" class="card-img-top" />
                                        <div class="card-body">
                                            <h5 class="card-title">Black Forest</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn c-btn">Go somewhere</a>
                                        </div>
                                    </div>

                                    <div class="card" style="width: 18rem;">
                                        <img src="<?= base_url('assets/img/redvelvet-cake.jpg'); ?>" class="card-img-top" />
                                        <div class="card-body">
                                            <h5 class="card-title">Red Velvet</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn c-btn">Go somewhere</a>
                                        </div>
                                    </div>

                                    <div class="card" style="width: 18rem;">
                                        <img src="<?= base_url('assets/img/chocodevila-cake.jpg'); ?>" class="card-img-top" />
                                        <div class="card-body">
                                            <h5 class="card-title">Choco Devila</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn c-btn">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Carousel Items 1: End -->

                                <!-- Carousel Items 2: Start -->
                                <div class="carousel-item d-flex flex-row align-items-center justify-content-evenly">
                                    <div class="card" style="width: 18rem;">
                                        <img src="<?= base_url('assets/img/chocomaltine-cake.jpg'); ?>" class="card-img-top" />
                                        <div class="card-body">
                                            <h5 class="card-title">Choco Maltine</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn c-btn">Go somewhere</a>
                                        </div>
                                    </div>

                                    <div class="card" style="width: 18rem;">
                                        <img src="<?= base_url('assets/img/klasikopera-cake.jpg'); ?>" class="card-img-top" />
                                        <div class="card-body">
                                            <h5 class="card-title">Klasik Opera</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn c-btn">Go somewhere</a>
                                        </div>
                                    </div>

                                    <div class="card" style="width: 18rem;">
                                        <img src="<?= base_url('assets/img/matchaopera-cake.jpg'); ?>" class="card-img-top" />
                                        <div class="card-body">
                                            <h5 class="card-title">Matcha Opera</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn c-btn">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Carousel Items 2: End -->

                                <!-- Carousel Items 3: Start -->
                                <div class="carousel-item d-flex flex-row align-items-center justify-content-evenly">
                                    <div class="card" style="width: 18rem;">
                                        <img src="<?= base_url('assets/img/cokelatregal-cake.jpg'); ?>" class="card-img-top" />
                                        <div class="card-body">
                                            <h5 class="card-title">Cokelat Regal</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn c-btn">Go somewhere</a>
                                        </div>
                                    </div>

                                    <div class="card" style="width: 18rem;">
                                        <img src="<?= base_url('assets/img/strawberrykeju-cake.jpg'); ?>" class="card-img-top" />
                                        <div class="card-body">
                                            <h5 class="card-title">Strawberry Keju</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn c-btn">Go somewhere</a>
                                        </div>
                                    </div>

                                    <div class="card" style="width: 18rem;">
                                        <img src="<?= base_url('assets/img/vanilafruit-cake.jpg'); ?>" class="card-img-top" />
                                        <div class="card-body">
                                            <h5 class="card-title">Vanila Fruit</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn c-btn">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Carousel Items 3: End -->
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        
                    </section>
                    <!-- List Products: End -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->