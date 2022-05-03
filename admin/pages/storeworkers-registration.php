<?php include_once("../header-admin.php") ?>

<body>
    <div class="admin-content storeworkers-registration">
        <section class="registration-form">
            <div class="container">
                <h3>Register New Store Worker</h3>
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputFname" class="form-label">First name</label>
                        <input type="text" class="form-control" id="inputFname">
                    </div>
                    <div class="col-md-6">
                        <label for="inputLname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="inputLname">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPhone" class="form-label">Phone No</label>
                        <input type="text" class="form-control" id="inputPhone">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Create Account</button>
                    </div>
                </form>
            </div>
        </section>

        <section class="storeworkers-data">
            <div class="container">
                <h3>View and Update Store Workers Details</h3>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>First name</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tamara Steeves</td>
                            <td>tamara.steeves@example.com</td>
                            <td>(129)-558-0207</td>
                            <td>8476 E Center St</td>
                        </tr>
                        <tr>
                            <td>Brad Duncan</td>
                            <td>brad.duncan@example.com</td>
                            <td>(256)-107-8896</td>
                            <td>4701 Hogan St</td>
                        </tr>
                        <tr>
                            <td>Holly Wells</td>
                            <td>holly.wells@example.com</td>
                            <td>(582)-587-1228</td>
                            <td>4635 Depaul Dr</td>
                        </tr>
                        <tr>
                            <td>Brandy Vasquez</td>
                            <td>brandy.vasquez@example.com</td>
                            <td>(077)-339-9240</td>
                            <td>9995 Lakeshore Rd</td>
                        </tr>
                        <tr>
                            <td>Tanya Gardner</td>
                            <td>tanya.gardner@example.com</td>
                            <td>(717)-327-0655</td>
                            <td>4674 Parker Rd</td>
                        </tr>
                </table>
            </div>
        </section>

    </div>
    <?php include_once("../footer-admin.php")  ?>