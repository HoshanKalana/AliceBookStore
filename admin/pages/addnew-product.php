<?php include_once("../header-admin.php"); 
    //require '../../DBConnect.php'; 
    ?>

<body>

    <div class="admin-content addnew-product">
        <section class="registration-form">
            <div class="container">
                <h3>Add New Product</h3>
                <form class="row g-3" method="POST" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <label for="inputFname" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="pname" name="pname">
                    </div>
                    <div class="col-md-6">
                        <label for="formFile" class="form-label">Product Image</label>
                        <input class="form-control" type="file" id="productimg" name="productimg">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail" class="form-label">Product Category</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select Category</option>
                            <option value="1">Education</option>
                            <option value="2">Novels</option>
                            <option value="3">Stationary</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" name="submit" class="btn btn-success">Create Account</button>
                    </div>
                </form>
            </div>
        </section>

        <section class="product-table pt-5">
            <div class="container">
                <table id="product-table" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Price</th>
                            <th>Product Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Club A4 Refill Pad Red 160 Pages/80 Leaves</td>
                            <td><img width="100px" src="/../assets/images/b46.jpg" alt=""></td>
                            <td>£1.99</td>
                            <td>stationary</td>
                        </tr>
                        <tr>
                            <td>Ryman Multi Premium Copy Ream of Paper A4 100gsm 500 Sheets</td>
                            <td><img width="100px" src="/../assets/images/b54.jpg" alt=""></td>
                            <td>12.99</td>
                            <td>stationary</td>
                        </tr>
                        <tr>
                            <td>Ryman Bank Typing Paper A4 45gsm 100 Sheets</td>
                            <td><img width="100px" src="/../assets/images/b55.jpg" alt=""></td>
                            <td>£1.99</td>
                            <td>stationary</td>
                        </tr>
                        <tr>
                            <td>AS and A-Level Psychology</td>
                            <td><img width="100px" src="/../assets/images/b9.jpg" alt=""></td>
                            <td>19.99</td>
                            <td>school books</td>
                        </tr>
                        <tr>
                            <td>A-Level Biology: AQA Year 1 & 2 Complete Revision & Practice with Online Edition</td>
                            <td><img width="100px" src="/../assets/images/b14.jpg" alt=""></td>
                            <td>£1.99</td>
                            <td>school books</td>
                        </tr>
                        <tr>
                            <td>The Atlas Six - Atlas series</td>
                            <td><img width="100px" src="/../assets/images/b34.jpg" alt=""></td>
                            <td>14.99</td>
                            <td>novels</td>
                        </tr>
                        <tr>
                            <td>The Age of The Strongman</td>
                            <td><img width="100px" src="/../assets/images/b40.jpg" alt=""></td>
                            <td>£17.99</td>
                            <td>novels</td>
                        </tr>
                </table>
            </div>
        </section>

    </div>
    <?php include_once("../footer-admin.php")  ?>