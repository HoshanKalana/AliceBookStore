<?php include_once("../site-components/header.php") ?>

<body>
    <div class="page-content login-page">

        <section class="hero-banner">
            <div class="img-wrap" style="background-image: url('../assets/images/slider-img-5.jpg')">
                <div class="overlay"></div>
                <div class="page-title">
                    <h2>Login</h2>
                </div>
            </div>
        </section>

        <section class="signup-link">
            <div class="container">
                <div class="link-wrap">
                    <h4>If you dont't have account. Please <a href="/pages/register.php">Sign Up</a></h4>
                </div>
            </div>
        </section>

        <section class="login-form">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-2"></div>
                    <div class="col-12 col-md-12 col-lg-8">
                        <div class="section-heading">
                            <h4>User Login</h4>
                        </div>
                        <div class="form-section">
                            <form class="row g-3 m-0">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">Email address</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword"
                                            placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                </div>
                                <div class="col-12 button-col">
                                    <a href="#">Froget Password?</a>
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