<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive admin dashboard and web application ui kit. Sidebar is the main navigation for most of admin templates and web apps.">
    <meta name="keywords" content="sidebar, iconic">

    <title>E-assist &mdash; About US</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.4.0/main.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.4.0/main.min.js"></script>
    <!-- Styles -->
    <link href="assets/css/core.min.css" rel="stylesheet">
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>

  <body>
  <div class="img1" id="bg"></div>
  <div id="wrapper">
   


    <!-- Preloader -->
    <div class="preloader">
      <div class="spinner-dots">
        <span class="dot1"></span>
        <span class="dot2"></span>
        <span class="dot3"></span>
      </div>
    </div>


    <!-- Sidebar -->
    <aside class="topbar topbar-expand-lg topbar-iconic">

<!--
      <header class="sidebar-header">
        
        <span class="logo">
          <a href="index.html"><img src="assets/img/logo-light.png" alt="logo"></a>
        </span>
        
      </header>
      
-->

      <nav class="topbar-navigation">
        <!--
        <div class="sidebar-profile">
          <div class="dropdown">
            <span class="dropdown-toggle no-caret" data-toggle="dropdown"><img class="avatar" src="assets/img/avatar/1.jpg" alt="..."></span>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#"><i class="ti-user"></i> Profile</a>
              <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
              <a class="dropdown-item" href="#"><i class="ti-help"></i> Help</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><i class="ti-power-off"></i> Logout</a>
            </div>
          </div>
        </div>-->

        <ul class="menu">

          <li class="menu-item">
            <a class="menu-link" href="dashboard2.php">
              <span class="icon ti-home"></span>
              <span class="title">Home</span>
            </a>
          </li>

          <li class="menu-item active">
            <a class="menu-link" href="about.php">
              <span class="icon ti-target"></span>
              <span class="title">About<small>What is e-Assist</small></span>
            </a>
          </li>

          <li class="menu-item">
            <a class="menu-link" href="reminder.php">
              <span class="icon ti-book"></span>
              <span class="title">Reminders<small>Details <span class="badge badge-pill badge-success" id="remnum3"><small> </small> </span> </small></span>  
            </a>
          </li>

          <li class="menu-item">
            <a class="menu-link" href="finder.php">
              <span class="icon ti-write"></span>
              <span class="title">Finder<small>Objects</small></span>
       
            </a>
          </li>

  
          <li class="menu-item">
            <a class="menu-link" href="contactus.php">
              <span class="icon ti-email"></span>
              <span class="title">Contact <small>Talk To Us</small></span>
            </a>
          </li>

        </ul>
      </nav>

    </aside>
    <!-- END Sidebar -->
    
    



       


    <center>



 <div id="hide1">
    <div class="itemsPerPage" >
      <span>items per page</span>
      <select id="itemsPerPageSelectElem" >
        <option>5</option>
        <option>10</option>
        <option>20</option>
      </select>
    </div>
</div>

    <div data-aos="fade-up">
    <div class="card-deck">
          <div class="card">
          <div class="todoTable-block" id="hide5">
 
    <table id="todoTable" style="display:none">
      <tr>
        <td></td>
       <th id="sortBtn">Date</th> 
       <td>Time</td> 
        <td>To-do</td> 
        <td>
          <select id="categoryFilter">
          </select>
        </td>
        <td></td>
        <td></td>
      </tr>
    </table>


    <div class="pagination-pages" id="hide4"> 
       
    </div>

  </div>
</div>
          </div>

     



<div data-aos="fade-up" class="divider fs-16">About us</div>




        <div class="card-deck" style="width:75%">
          <div class="card">
            <img class="card-img-top" src="pictures/handv2.png" alt="Card image cap" style="height:35%" >
            <div class="card-body">
            
              <h4 class="card-title b-0 px-0">E-Assist</h4>
              <p align="left">Providing assistance to day to day people through our website by giving them activities that will help them manage their reminders and even find their items</p>
             <!--  <p align="left"><small>Posted by: Author Name</small></p>  -->
            </div>
            <footer class="card-footer">
      
                <a href="learn/isms.php" class="btn btn-primary" role="button">Learn More</a>
            </footer>
          </div>

          
</center>








    <!-- Main container -->
    


      <!-- Footer
      <footer class="site-footer">
        <div class="row">
          <div class="col-md-6">
            <p class="text-center text-md-left">Copyright © 2018 <a href="http://thetheme.io/theadmin">TheAdmin</a>. All rights reserved.</p>
          </div>

          <div class="col-md-6">
            <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
              <li class="nav-item">
                <a class="nav-link" href="help/articles.html">Documentation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="help/faq.html">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://themeforest.net/item/theadmin-responsive-bootstrap-4-admin-dashboard-webapp-template/20475359?license=regular&amp;open_purchase_for_item_id=20475359&amp;purchasable=source&amp;ref=thethemeio">Purchase Now</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
       -->


    <!-- END Main container -->



    <!-- Global quickview -->
    <div id="qv-global" class="quickview" data-url="assets/data/quickview-global.html">
      <div class="spinner-linear">
        <div class="line"></div>
      </div>
    </div>
    <!-- END Global quickview -->



    <!-- Scripts -->
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/script.min.js"></script>
    <script src="assets/js/script2.js"></script>

</div>
  </body>
</html>
