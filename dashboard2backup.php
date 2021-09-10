<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive admin dashboard and web application ui kit. Sidebar is the main navigation for most of admin templates and web apps.">
    <meta name="keywords" content="sidebar, iconic">

    <title>InfoSec Awareness Program &mdash; Dashboard</title>

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
  </head>

  <body data-provide="pace">

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
            <a class="menu-link" href="dashboard.php">
              <span class="icon ti-home"></span>
              <strong class="title">Home</strong>
            </a>
          </li>

          <li class="menu-item">
            <a class="menu-link" href="about.php">
              <span class="icon ti-target"></span>
              <strong  class="title" data-provide="tooltip" data-placement="bottom" title="" data-original-title="Fill up form first!" >About<u><small>e-Assist</small></u></strong>
            </a>
          </li>

          <li class="menu-item">
            <a class="menu-link" href="learn.php">
              <span class="icon ti-book"></span>
              <span class="title" data-provide="tooltip" data-placement="bottom" title="" data-original-title="Fill up form first!"><strong>Reminders</strong></span>
              <!-- <span class="badge badge-pill badge-info">0</span> -->

              <!-- this part is just for the arrow for the dropdown
              <span class="arrow"></span>
              -->
            </a>

            <!-- this part doesn't work yet aaaaaa
            <ul class="menu-submenu">
                    <li class="menu-item">
                      <a class="menu-link" href="#">
                        <span class="title">Blank page</span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a class="menu-link" href="#">
                        <span class="title">Topbar</span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a class="menu-link" href="#">
                        <span class="title">Sidebar</span>
                      </a>
                    </li>
                  </ul>
            -->
          </li>

          <li class="menu-item">
            <a class="menu-link" href="test.php">
              <span class="icon ti-write"></span>
              <strong class="title" data-provide="tooltip" data-placement="bottom" title="" data-original-title="Fill up form first!" >Objects<strong>Finder</strong></strong>
            </a>
          </li>


        </ul>
      </nav>

    </aside>
    <!-- END Sidebar -->


    


    <!-- Main container -->

  <main class="main-container">
  <div class="img1" id="bg"></div>
<header class="header">
  <div class="header-info">
    <h1 class="header-title">
    <strong>Welcome!</strong><nobr id=hname> cunt</nobr>
 
    </h1>
  </div>


    <!-- <div class="buttons">
      <div class="fab fab-dir-left">
        <button class="btn btn-float btn-primary" data-toggle="button">
          <i class="fab-icon-default ti-plus"></i>
          <i class="fab-icon-active ti-close"></i>
        </button>

        <ul class="fab-buttons">
          <li><a class="btn btn-float btn-sm btn-info" href="#"><i class="fa fa-calendar"></i></a></li>
          <li><a class="btn btn-float btn-sm btn-info" href="#"><i class="fa fa-music"></i></a></li>
          <li><a class="btn btn-float btn-sm btn-info" href="#"><i class="fa fa-video-camera"></i></a></li>
        </ul>
      </div>
    </div>
  </div> -->
</header>


<div class="main-content">


</div>

<div class="row">


<div class="col-lg-3">
            <div class="card">
              <h4 class="card-title"><strong>Your</strong>name</h4>

              <div class="card-body">

              <div class="form-group">
                      <input type="text" class="form-control" placeholder="Name" id="nData"></input>
                   
                
              </div>
            </div>
          </div>
</div>




<div class="col-lg-2">
            <div class="card">
              <h4 class="card-title"><strong>Birthday</strong> card</h4>
        

              <div class="card-body">
                

              <div class="form-group">
                      <input type="date" class="form-control" placeholder="Year" id="dData" pattern="\d{4}" >
                  
              </div>
        
              </div>
            
            
            </div>
            
          </div>

          <div class="col-lg-2">
            <div class="card">
            <h4 class="card-title"><strong>Gender</strong> card</h4>
            <div class="card-body">
            <div class="form-group do-float">
                      <select class="form-control" id="gData">
                        <option>Male</option>
                        <option>Female</option>
                        

</select>

                    </div>
                    
                    
</div>
          
</div>


<table id="todoTable">
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

<div>
  <div class="todo-input todo-block">
    <span>To-do: </span>
    <input type="text" placeholder="Enter new to-do">
    <span>Category: </span>
    <input type="text" placeholder="Enter category" list="categoryList">
    <datalist id="categoryList">
      <option value="Personal"></option>
      <option value="Work"></option>
    </datalist>
    <span>Date:</span>
    <input type="date" id="dateInput">
    <span>Time:</span>
    <input type="time" id="timeInput">
    <span></span>
    <button id="addBtn">Add</button>
    <span></span>
    <button id="sortBtn">Sort by Date</button>
    <span></span>
    <label><input type="checkbox" id="shortlistBtn"> Incomplete First </label>
  
  </div>
<button id="button2" class="btn btn-w-md btn-round btn-secondary" >Submit</button>
</div>
<div>
  <p></p>

</div>


</div><!--/.main-content -->

<!-- <button onclick="createFile()">add name on the data file</button> -->


<!-- Footer -->
<footer class="site-footer">
</footer>
<!-- END Footer -->



<div id="result"></div>


<style>
  a {
    font-size: 25px;
  }
  </style>

    </main>
    <!-- END Main container -->

  
    <!-- Global quickview -->
    <div id="qv-global" class="quickview" data-url="assets/data/quickview-global.html">
      <div class="spinner-linear">
        <div class="line"></div>
      </div>
    </div>
    <!-- END Global quickview -->



    <!-- Scripts -->

    <script> document.addEventListener("DOMContentLoaded", function() 
  {
  checkPageData();
    });
  </script>

    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/script.min.js"></script>
    <script src="assets/js/script2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </body>
</html>
