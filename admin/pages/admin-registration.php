<?php include_once("../header-admin.php") ?>

<body>
    <div class="admin-content admin-registration">
        <section class="registration-form">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <h3>Admin Registration</h3>
                        <form class="row g-3">
                            <div class="col-md-12">
                                <label for="inputlname" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="inputname">
                            </div>
                            <div class="col-md-12">
                                <label for="inputemail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputemail">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Address</label>
                                <input type="text" class="form-control" id="inputAddress">
                            </div>
                            <div class="col-12">
                                <label for="inputPhone" class="form-label">Phone No</label>
                                <input type="text" class="form-control" id="inputPhone">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Create Account</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">

                    </div>
                </div>
            </div>
        </section>

    </div>
    <?php include_once("../footer-admin.php")  ?>