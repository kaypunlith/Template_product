  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">   
           <div class="d-flex justify-content-around align-items-center">
           <img src="assets/img/profile-img.jpg" alt="Profile" width="60" height="60" class="rounded-circle">
              <p style="font-weight:800">Kay punlith</p>
           </div>
           <hr>
      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
        
          
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>User</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="CreateUser.php">
              <i class="bi bi-circle"></i><span>Create User </span>
            </a>
          </li>
          <li>
            <a href="DisplayUser.php">
              <i class="bi bi-circle"></i><span>Display user</span>
            </a>
          </li>
        
        
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="Createcategory.php">
              <i class="bi bi-circle"></i><span>Create category</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>Display category</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>contents</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="CreateCOntents.php">
              <i class=""></i><span>Create contents</span>
            </a>
          </li>
          <li>  
            <a href="DisplayContents.php">
              <i class="bi bi-circle"></i><span>Display contents</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
    

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Menage slid </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="CreateCOntents.php">
              <i class=""></i><span>Create SLid</span>
            </a>
          </li>
          <li>  
            <a href="DisplayContents.php">
              <i class="bi bi-circle"></i><span>Display </span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Charts Nav -->
      

    
      <!-- </li><!-- End Register Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-drop" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span style="color:red;font-weight:800">LOGOUT </span><i class="bi bi-chevron-down ms-auto"></i>
        </a> 
        
     </li>


  

    </ul>

  </aside><!-- End Sidebar-->