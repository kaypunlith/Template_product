<?php
include("./components/header.php");
include("./components/sidebar.php");
?>
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between shadow p-3">
        <h1 class="">Create User</h1>
        <a href="DisplayUser.php" class="btn btn-primary">View user</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 shadow p-5">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="form-group">
                                <label for="" class="form-label"><span style="font-weight:800">User name</span></label>
                                <input type="text" class="form-control shadow-none username"
                                    placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label"><span style="font-weight:800">User Email</span></label>
                                <input type="email" class="form-control shadow-none useremail"
                                    placeholder="Enter Useremail">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label"><span style="font-weight:800">User
                                        Password</span></label>
                                <input type="password" class="form-control shadow-none userpassword"
                                    placeholder="Enter Userpassword">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label"><span style="font-weight:800">Role User</span></label>
                                <input type="number" class="form-control shadow-none userrole"
                                    placeholder="Enter Role User">
                            </div>
                        </div>
                        <div class="col-xl-5">
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