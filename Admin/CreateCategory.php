<?php
include("./components/header.php");
include("./components/sidebar.php");
?>
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between shadow p-3">
        <h1 class="">Create Category</h1>
        <a href="DisplayUser.php" class="btn btn-primary">View Category</a>
    </div>
    <div class="container">
        <div class="row">

            <form action="" method="post">
                <div class="row shadow p-4">
                    <div class="col-xl-8">
                        <div class="form-group">
                            <label for="" class="form-label"><span style="font-weight:800">Category name</span></label>
                            <input type="text" class="form-control shadow-none category_name" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label"><span style="font-weight:800">Category
                                    status</span></label>
                            <input type="password" class="form-control shadow-none category_status"
                                placeholder="Enter Userpassword">
                        </div>  
                      
                    </div>
                    <div class="col-xl-4">
                    <div class="form-group">
                            <label for="" class="form-label"><span style="font-weight:800">Category Image</span></label>
                           <div class="d-flex justify-content-between">
                           <input type="file" class="form-control shadow-none category_img"
                           placeholder="Enter Useremail">
                           <button class="btn btn-info">Uploade</button>
                           </div>
                        </div>
                        <div class="priview_img"></div>
                       
                    </div>
                    <div class="form-footer">
                    <div class="mt-3 float-end">
                        <button type="button" class="btn btn-danger">Close</button>
                        <button type="button" class="btn btn-success">Create</button>
                    </div>

                </div>
                

            </form>
        </div>
    </div>
    </div>


</main <?php
include("./components/footer.php");
?>