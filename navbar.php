<?php
session_start();
 
if (!isset($_SESSION['user'])) 
{
  header('location:register.php');
}
?>
<div class="container">
  <div class="row">
   <div class="col-lg-10 col-sm-10 col-12 offset-lg-1 offset-sm-1">
    <nav class="navbar navbar-expand-lg bg-info rounded">
     <a class="navbar-brand text-light" href="#">Navbar</a>
     <div class="collapse navbar-collapse" id="navbarSupportedContent" style="display: unset !important;">
        <ul class="nav nav-pills mr-auto justify-content-end">
         <li class="nav-item active">
           <a class="nav-link text-light" href="logout.php">logout</a>
         </li>

         <li class="nav-item active">
           <a class="nav-link text-light" href="profile.php">Profile (<?php echo $_SESSION['user'];?>)</a>
         </li>

         <li class="nav-item">
         <!--<a class="nav-link text-light" href="#">**</a>-->
        </li>
      </ul>
     </div>
    </nav> 
   </div>
  </div>
 </div>