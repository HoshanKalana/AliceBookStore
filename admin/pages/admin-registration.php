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
                        <div class="table-wrap">
                            <table id="admintable" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Phone No</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>John Fisher</td>
                                        <td>aiden.fisher@example.com</td>
                                        <td>(225)-707-6430</td>
                                        <td>5216 Camden Ave</td>
                                    </tr>
                                    <tr>
                                        <td>Melissa Wade</td>
                                        <td>melissa.wade@example.com</td>
                                        <td>(840)-784-9613</td>
                                        <td>8546 Avondale Ave</td>
                                    </tr>
                                    <tr>
                                        <td>Ethan Martin</td>
                                        <td>ethan.martin@example.com</td>
                                        <td>(992)-205-8926</td>
                                        <td>247 W Dallas St</td>
                                    </tr>
                                    <tr>
                                        <td>Jennie Fletcher</td>
                                        <td>jennie.fletcher@example.com</td>
                                        <td>(021)-490-6366</td>
                                        <td>6179 Fairview St</td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="admin-details">

        </section>

    </div>
    <?php include_once("../footer-admin.php")  ?>