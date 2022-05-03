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
                        <button type="submit" name="submit" class="btn btn-primary">Create Account</button>
                    </div>
                </form>
            </div>
        </section>

        <section class="product-table pt-5">
            <div class="container">
                <table id="product-table" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td>$86,000</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                            <td>$433,060</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008/11/28</td>
                            <td>$162,700</td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2012/12/02</td>
                            <td>$372,000</td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                            <td>2012/08/06</td>
                            <td>$137,500</td>
                        </tr>
                </table>
            </div>
        </section>

    </div>
    <?php include_once("../footer-admin.php")  ?>