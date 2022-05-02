<?php include_once("../header-admin.php"); 
    require '../../DBConnect.php'; 

    if(isset($_POST['submit']))
    {	 
         $product_name = $_POST['pname'];

         $filename = $_FILES["productimg"]["name"];
         $tempname = $_FILES["productimg"]["tmp_name"];    
        $folder = "../../assets/images/".$filename;
               

         $sql = "INSERT INTO product (ProductName,ProductImage) VALUES ('$product_name ', '$filename')";
         if (mysqli_query($conn, $sql)) {
            echo "New record created successfully !";
         } else {
            echo "Error: " . $sql . " " . mysqli_error($conn);
         }
         mysqli_close($conn);

                 // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";


      }
    }
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
                <?php
                $data = '';
                $result = mysqli_query($conn, "SELECT * FROM product");
                while($data = mysqli_fetch_array($result))
                {
  
                ?>
                <img src="<?php echo $data['Filename']; ?>">

                <?php
                }
                ?>
            </div>
        </section>

    </div>
    <?php include_once("../footer-admin.php")  ?>