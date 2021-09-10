<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive admin dashboard and web application ui kit. Sidebar is the main navigation for most of admin templates and web apps.">
    <meta name="keywords" content="sidebar, iconic">

    <title>E-assist &mdash; Reminders</title>

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

          <li class="menu-item">
            <a class="menu-link" href="about.php">
              <span class="icon ti-target"></span>
              <span class="title">About<small>What is e-Assist</small></span>
            </a>
          </li>

          <li class="menu-item active">
            <a class="menu-link" href="learn.php">
              <span class="icon ti-book"></span>
              <span class="title">Reminders<small>Details</small></span>
            </a>
          </li>

          <li class="menu-item">
            <a class="menu-link" href="test.php">
              <span class="icon ti-write"></span>
              <span class="title">Finder<small>Objects</small></span>
              <span class="badge badge-pill badge-info">3</span>
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



    <!-- MAIN CONTENT CARDS -->
 
       
    <div data-aos="fade-up" class="divider fs-16">Reminders</div>

    <center>
 
    <div data-aos="fade-up">
    <div class="card-deck">

          <div class="card">
          <div class="todoTable-block">
 

    <div class="itemsPerPage">
      <span>items per page</span>
      <select id="itemsPerPageSelectElem">
        <option>5</option>
        <option>10</option>
        <option>20</option>
      </select>
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


    <div class="pagination-pages"> 
       
    </div>

  </div>
</div>
          </div>

          <div class="todo-calendar todo-block">
  <div id='calendar'></div>
</div>

<div class="todo-grid-parent">

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




          <div class="card">
            <img class="card-img-top" src="pictures/sun.jpg" alt="Card image cap" style="length:75%" >
            <div class="card-body">
              <h4 class="card-title b-0 px-0">Tuesday</h4>
              <p align="left">Clean yourself <br> Eat Breakfast <br> Take out the laundry <br></p>
              <p align="left"><small>Tomorrow</small></p>
            </div>
            <footer class="card-footer">
                <button class="btn btn-primary">Cancel</button>
            </footer>
          </div>

          <div class="card">
            <img class="card-img-top" src="pictures/wake.jpg" alt="Card image cap" >
            <div class="card-body">
              <h4 class="card-title b-0 px-0">Wednesday</h4>
              <p align="left">Clean yourself <br> Take a medicine Pill <br><br> </p>
              <p align="left"><small>in 2 days</small></p>
            </div>
            <footer class="card-footer">
                <button class="btn btn-primary">Cancel</button>
            </footer>
          </div>

           
        </div>
        </div>
        

    <br><br><br>
    <div data-aos="fade-up" class="divider fs-16">Advanced Courses</div>
    </br></br></br>



      
      <div data-aos="fade-up">
        <div class="card-deck" style="width:75%">
          <div class="card">
            <img class="card-img-top" src="pictures/isms.jpg" alt="Card image cap" >
            <div class="card-body">
              <h4 class="card-title b-0 px-0">Information Security Management System (ISMS)</h4>
              <p align="left">More than 90% businesses of all sizes suffer from information security threats – with impacts
ranging from minor data loss to complete shutdown. As technology becomes more powerful
and processes becomes more complex business risks have increased exponentially - the
need to ensure security has never been greater.</p>
              <p align="left"><small>Posted by: Author Name</small></p>
            </div>
            <footer class="card-footer">
                <a href="learn/isms.php" class="btn btn-primary" role="button">Learn More</a>
            </footer>
          </div>

          <div class="card">
            <img class="card-img-top" src="pictures/cybersecurity.jpg" alt="Card image cap" >
            <div class="card-body">
              <h4 class="card-title b-0 px-0">Cybersecurity Best Practices</h4>
              <p align="left">If you’re an employee, you are on the front lines of information security. Your company may have comprehensive cybersecurity policies for you and coworkers to follow. But even with these protections, it’s important to stay on guard to help assure your company’s data and network are safe and secure.</p>
              <p align="left"><small>Posted by: Author Name</small></p>
            </div>
            <footer class="card-footer">
                <button class="btn btn-primary">Learn More</button>
            </footer>
          </div>

          <div class="card">
            <img class="card-img-top" src="pictures/password.jpg" alt="Card image cap" >
            <div class="card-body">
              <h4 class="card-title b-0 px-0">Importance of Password Strength</h4>
              <p align="left">The strength of passwords as an authentication control is more important than ever before. Cyber-criminals are increasingly using automated password cracking tools to identify passwords in a matter of seconds.</p>
              <p align="left"><small>Posted by: Author Name</small></p>
            </div>
            <footer class="card-footer">
                <button class="btn btn-primary">Learn More</button>
            </footer>
          </div>

              
        </div>
        </div>

        <br><br><br><br>


       <!-- CALENDAR -->

 


</div> <!-- class="todo-grid-parent" -->

<div class="todo-overlay" id="todo-overlay">
<div class="todo-modal" id="todo-modal">
  <div class="todo-input">
    <span>To-do: </span>
    <input type="text" placeholder="Enter new to-do" id="todo-edit-todo">
    <span>Category: </span>
    <input type="text" placeholder="Enter category" list="categoryList" id="todo-edit-category">
    <datalist id="categoryList">
      <option value="Personal"></option>
      <option value="Work"></option>
    </datalist>
    <span>Date:</span>
    <input type="date" id="todo-edit-date">
    <span>Time:</span>
    <input type="time" id="todo-edit-time">
    <span></span>
    <button id="changeBtn">Save Change</button>
  </div>
</div>
<div class="todo-modal-close-btn" id="todo-modal-close-btn">X</div>
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
