<!-- Main: Start -->
<main class="content">

    <!-- Hero: Start -->
    <section class="hero d-flex align-items-center justify-content-between">

        <div class="hero-title d-flex text-center flex-column align-items-center justify-content-center">
            <h1 class="px-2">
                Kelezatan, Kenikmatan & Kelembutan Cinta
            </h1>

            <button class="btn c-btn mt-3">shop now</button>
        </div>

        <figure class="hero-figure">
            <img src="<?= base_url("assets/img/hero.jpg"); ?>" alt="" srcset="">
        </figure>

    </section>
    <!-- Hero: Start -->


    <!-- Desc Products: Start -->
    <section class="desc mt-5 p-5">

        <div class="container d-flex flex-row align-items-center justify-content-between">
            <div class="desc-items text-center">
                <h1>Product Toko Kue</h1>
                <p class="px-5 py-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis.
                </p>
            </div>
        </div>

    </section>
    <!-- Desc Products: End -->


    <!-- List Products: Start -->
    <section class="list-products mt-5 p-5" style="height: 100vh;">

        <div class="container d-flex flex-row align-items-center justify-content-between ">
            <figure class="img-product position-relative">
                <img src="<?= base_url('assets/img/img-product1.jpg'); ?>" alt="" class="img-item open">
                <img src="<?= base_url('assets/img/img-product2.jpg'); ?>" alt="" class="img-item">
                <img src="<?= base_url('assets/img/img-product3.jpg'); ?>" alt="" class="img-item">
            </figure>

            <div class="desc-products text-center">
                <h1>List Product Toko Kue</h1>
                <p class="py-3">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae, aperiam? Officia sapiente placeat accusantium tempore dolore nesciunt quod laboriosam, necessitatibus ut illo et, temporibus facilis. Fugit molestias dignissimos dolorem aspernatur?
                </p>
                <div class="btn-control">
                    <button class="btn btn-prev" id="prev">
                        <svg width="35" height="35" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1" y="1" width="53" height="53" rx="13" stroke="black" stroke-width="2"/>
                            <path d="M36.75 48L16.75 28L36.75 8L39.55 10.85L22.4 28L39.55 45.15L36.75 48Z" fill="black"/>
                        </svg>
                    </button>
                    
                    <button class="btn btn-next" id="next">
                        <svg width="35" height="35" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1" y="1" width="53" height="53" rx="13" stroke="black" stroke-width="2"/>
                            <path d="M19.2 47.9L16.4 45.05L33.55 27.9L16.4 10.75L19.2 7.90002L39.2 27.9L19.2 47.9Z" fill="black"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

    </section>
    <!-- List Products: End -->


    <!-- Comment: Start -->
    <section class="comment mt-5 py-5 position-relative">

        <div class="mt-5 d-flex flex-row align-items-center justify-content-between">
            <!-- Card Item 1: Start -->
            <div class="card c-card">
                <div class="card-body">
                    <h5 class="card-title">Card title 1</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- Card Item 1: End -->

            <!-- Card Item 2: Start -->
            <div class="card c-card">
                <div class="card-body">
                    <h5 class="card-title">Card title 2</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- Card Item 2: End -->

            <!-- Card Item 3: Start -->
            <div class="card c-card">
                <div class="card-body">
                    <h5 class="card-title">Card title 3</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- Card Item 3: End -->

            <!-- Card Item 4: Start -->
            <div class="card c-card">
                <div class="card-body">
                    <h5 class="card-title">Card title 4</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- Card Item 4: End -->

            <!-- Card Item 5: Start -->
            <div class="card c-card">
                <div class="card-body">
                    <h5 class="card-title">Card title 5</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- Card Item 5: End -->

            <!-- Card Item 6: Start -->
            <div class="card c-card">
                <div class="card-body">
                    <h5 class="card-title">Card title 6</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- Card Item 6: End -->
        </div>

    </section>
    <!-- Comment: End -->


    <!-- Email Newsletter: Start -->
    <section class="email-newsletter mt-5 py-5">

        <div class="container d-flex flex-row align-items-center justify-content-center">
            <div class="signup-newsletter">
                <h1>Sign up to our newsletter</h1>
                <p>Plus get the inside scoop about exclusive offers & news!</p>
            </div>

            <form action="#" method="post" class="email-address">
                <input type="email" name="email" id="email" placeholder="Email address">
                <button type="submit" id="submit" class="btn c-btn">
                    <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="44" height="44" rx="13.5" fill="#D9D9D9" stroke="black"/>
                        <path d="M9.375 34.1666V10.8333L37.0833 22.4999L9.375 34.1666ZM11.5625 30.776L31.3958 22.4999L11.5625 14.1145V20.2395L20.3854 22.4999L11.5625 24.6874V30.776ZM11.5625 30.776V14.1145V24.6874V30.776Z" fill="black"/>
                    </svg>
                </button>
            </form>
        </div>

    </section>
    <!-- Email Newsletter: End -->

</main>
<!-- Main: End -->



<!-- Footer: Start -->
<footer class="footer container mt-5 py-5">
    
    <div class="d-flex align-items-start justify-content-evenly">
        <a class="navbar-brand" href="<?= base_url(); ?>">
            <h1 class="brand"><i>TokoKue</i></h1>
            <p>© 2022 by Coding!Kelompok3</p>
        </a>

        <div class="d-flex align-items-start justify-content-between">
            <ul class="navbar-nav mx-4">
                <h3 class="mb-4">Learn</h3>
                <li class="nav-item mb-3">
                    <a class="nav-link" href="#">our story</a>
                </li>
                <li class="nav-item mb-3">
                    <a class="nav-link" href="#">contact</a>
                </li>
            </ul>

            <ul class="navbar-nav mx-4">
                <h3 class="mb-4">Connect</h3>
                <li class="nav-item mb-3">
                    <a class="nav-link" href="#">instagram</a>
                </li>
                <li class="nav-item mb-3">
                    <a class="nav-link" href="#">facebook</a>
                </li>
                <li class="nav-item mb-3">
                    <a class="nav-link" href="#">twitter</a>
                </li>
            </ul>

            <ul class="navbar-nav mx-4">
                <h3 class="mb-4">Legal</h3>
                <li class="nav-item mb-3">
                    <a class="nav-link" href="#">term of service</a>
                </li>
                <li class="nav-item mb-3">
                    <a class="nav-link" href="#">privacy policy</a>
                </li>
            </ul>
        </div>
    </div>

</footer>
<!-- Footer: End -->