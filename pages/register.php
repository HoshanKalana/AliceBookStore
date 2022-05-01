<?php include_once("../site-components/header.php") ?>

<body>
    <div class="page-content register-page">
        <section class="hero-banner">
            <div class="img-wrap" style="background-image: url('../assets/images/slider-img-5.jpg')">
                <div class="overlay"></div>
                <div class="page-title">
                    <h2>Register</h2>
                </div>
            </div>
        </section>

        <section class="register-link">
            <div class="container">
                <div class="link-wrap">
                    <h4>Already have an account? Please <a href="/pages/login.php">Login</a></h4>
                </div>
            </div>
        </section>

        <section class="registration-form">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-2"></div>
                    <div class="col-12 col-md-12 col-lg-8">
                        <div class="section-heading">
                            <h4>User Registertion</h4>
                        </div>
                        <div class="form-section">
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">First Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword"
                                            placeholder="Password">
                                        <label for="floatingPassword">Last Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword"
                                            placeholder="Password">
                                        <label for="floatingPassword">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword"
                                            placeholder="Password">
                                        <label for="floatingPassword">Comapny Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword"
                                            placeholder="Password">
                                        <label for="floatingPassword">Phone No</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <textarea type="password" class="form-control" id="floatingPassword"
                                            placeholder="Password"></textarea>
                                        <label for="floatingPassword">Address</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword"
                                            placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword"
                                            placeholder="Password">
                                        <label for="floatingPassword">Confirm Password</label>
                                    </div>
                                </div>
                                <div class="col-12 button-col">
                                    <button type="submit" class="btn btn-submit">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-2"></div>
                </div>
            </div>
        </section>

    </div>

    <?php include_once("../site-components/footer.php")  ?>