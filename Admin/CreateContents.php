<?php
include("./components/header.php");
include("./components/sidebar.php");
?>
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between shadow p-3">
        <h1 class="">Create Contents</h1>
        <a href="DisplayContents.php" class="btn btn-primary">View Contents</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 shadow p-5">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="form-group">
                                <label for="" class="form-label"><span style="font-weight:800">Title</span></label>
                                <input type="text" class="form-control shadow-none title"
                                    placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label"><span
                                        style="font-weight:800">Description</span></label>
                                <textarea name="" id="" class="form-control" role="100" col=""></textarea>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label"><span style="font-weight:800">Qty</span></label>
                                <input type="password" class="form-control shadow-none userpassword"
                                    placeholder="Enter Userpassword">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label"><span style="font-weight:800">Price</span></label>
                                <input type="number" class="form-control shadow-none userrole"
                                    placeholder="Enter Role User">
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label"><span style="font-weight:800">Active</span></label>
                                <input type="number" class="form-control shadow-none userrole"
                                    placeholder="Enter Role User">
                            </div>
                        </div>

                        <div class="col-xl-4">
                        <div class="form-group">
                                <label for="" class="form-label"><span style="font-weight:800">Cateogy</span></label>
                                  <select name="category" id="" class="form-control">
                                    <option value="">Category1</option>
                                    <option value="">Category2</option>

                                  </select>
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label"><span style="font-weight:800">User
                                        Profile</span></label>
                                <div class="d-flex justify-content-between">
                                    <input type="file" class="form-control shadow-none useremail"
                                        placeholder="Enter Useremail">
                                    <button class="btn btn-info">Uploade</button>
                                </div>
                            </div>
                            <div class="priview_img"></div>
                        </div>
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