<?php
include("./components/header.php");
include("./components/sidebar.php");
?>
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between shadow p-3">
        <h1 class="">Display slid</h1>
        <a href="Create_slid.php" class="btn btn-primary">Create Slid</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 shadow p-3">
                <table class="table table-striped table-hover align-middle ">
                    <thead>
                        <tr class="table-dark">
                            <th>ID</th>
                            <th>Slid Name</th>
                            <th>status</th>
                            <th>Image</th>
                            <th>Action</th>
                          
                        </tr>
                    </thead>
                    <tbody class="align-item:center">
                        <tr>
                            <td>1</td>
                            <td>Electronect</td>
                            <td>Active</td>
                           
                            <td>
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4YreOWfDX3kK-QLAbAL4ufCPc84ol2MA8Xg&s" height="60" width="60" alt="">
                            </td>
                            <td>
                                <button type="button" class="btn btn-warning">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                            
                        </tr>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</main <?php
include("./components/footer.php");
?>