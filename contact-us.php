<?php include_once("./site-components/header.php") ?>

<body>
    <div class="page-content contact-page">
        <section class="hero-banner">
            <div class="img-wrap" style="background-image: url('./assets/images/slider-img-5.jpg')">
                <div class="overlay"></div>
                <div class="page-title">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </section>

        <section class="inquries">
            <div class="container">
                <div class="section-heading">
                    <h4>Inquries and feedback</h4>
                </div>

                <div class="row form-row">
                    <div class="col-12 col-md-6 col-lg-7">
                        <div class="form-wrap">
                            <form class="row g-3">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingName" placeholder="Full Name">
                                    <label for="floatingName">Full Name</label>
                                </div>
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="floatingEmail" placeholder="Email">
                                    <label for="floatingPassword">Email</label>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" id="floatingTextarea"
                                        placeholder="Inquries and feedback"></textarea>
                                    <label for="floatingTextarea">Inquries and feedback</label>
                                </div>
                                <div class="col-12 button-col">
                                    <button type="submit" class="btn btn-submit">submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="img-wrap">
                            <img class="img-fluid" src="./assets/images/slider-img-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="conatct-wrap">
                            <div class="contact-info">
                                <div class="icon">
                                    <i class="ri-map-pin-line"></i>
                                </div>
                                <div class="text">
                                    <p>42 Bideford Ave,Greenford,<br>United Kingdom</p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="icon">
                                    <i class="ri-mail-open-line"></i>
                                </div>
                                <div class="text">
                                    <p>info@alicebookstore.uk</p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="icon">
                                    <i class="ri-phone-line"></i>
                                </div>
                                <div class="text">
                                    <p>+44 1632 960112</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="map-wrap">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d38472.56328405345!2d-1.2331246208984057!3d52.938792199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4879c274ccd0ff2f%3A0xdfb0ab46a504ed52!2sUniversity%20of%20Nottingham!5e0!3m2!1sen!2slk!4v1650132213005!5m2!1sen!2slk"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <?php include_once("./site-components/footer.php")  ?>