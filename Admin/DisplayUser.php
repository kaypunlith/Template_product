<?php
include("./components/header.php");
include("./components/sidebar.php");
?>
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between shadow p-3">
        <h1 class="">Display User</h1>
        <a href="CreateUser.php" class="btn btn-primary">Create user</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 shadow p-3">
                <table class="table table-striped table-hover align-middle ">
                    <thead>
                        <tr class="table-dark">
                            <th>User ID</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>User Password</th>
                            <th>User Profile</th>
                            <th>User Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="align-item:center">
                        <tr>
                            <td>1</td>
                            <td>kay punlith</td>
                            <td>kaypinlith@gmail.con</td>
                            <td>112233</td>
                            <td>
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4YreOWfDX3kK-QLAbAL4ufCPc84ol2MA8Xg&s" height="60" width="60" alt="">
                            </td>
                            <td>User && Admin</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>kay punlith</td>
                            <td>kaypinlith@gmail.con</td>
                            <td>112233</td>
                            <td>
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4YreOWfDX3kK-QLAbAL4ufCPc84ol2MA8Xg&s" height="60" width="60" alt="">
                            </td>
                            <td>User && Admin</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
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