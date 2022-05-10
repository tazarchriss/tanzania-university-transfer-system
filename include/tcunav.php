
  <!-- Navbar -->
  <div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
   
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    
    </ul>
  </nav>
  <!-- /.navbar -->
   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4">
   

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="image">
         <img src="user.svg" class="img-circle elevation-2" alt="User Image">
       </div>
       <div class="info">
         <a href="#" class="d-block"><?php echo $_SESSION['sname'].' ',$_SESSION['fname']; ?></a>
       </div>
     </div>

     
     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
         <li class="nav-item menu-open">
           <a href="tcu.php" class="nav-link active">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             <p>
               Dashboard
               <i class="right"></i>
             </p>
           </a>
          
         </li>
         <!-- Manage Universities -->
         <li class="nav-item ">
           <a href="#" class="nav-link active">
             <i class="nav-icon fa fa-school"></i>
             <p>
               Manage University
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="adduniversity.php" class="nav-link active">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Add University</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="universityprofile.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>View Universities</p>
               </a>
             </li>
             </ul>
             </li>
           <!-- Announcements management -->
           <li class="nav-item ">
               <a href="#" class="nav-link active">
                 <i class="nav-icon fa fa-bell"></i>
                 <p>
                   Announcements
                   <i class="right fas fa-angle-left"></i>
                 </p>
               </a>
               <ul class="nav nav-treeview">
                 <li class="nav-item">
                   <a href="addannouncement.php" class="nav-link active">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Add Announcement</p>
                   </a>
                 </li>
                 <li class="nav-item">
                   <a href="editannouncement.php" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Edit Announcement</p>
                   </a>
                 </li>
                 <li class="nav-item">
                   <a href="viewannouncement.php" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>View Announcements</p>
                   </a>
                 </li>
               </ul>
             </li>
         <!-- Viewing Transfer List -->
         <li class="nav-item ">
           <a href="transferlist.php" class="nav-link active">
             <i class="nav-icon fa fa-download"></i>
             <p>
               Transfers List
            
             </p>
           </a>
           
         </li>
                <!-- Viewing Selection List -->
                <li class="nav-item ">
           <a href="selectionlist.php" class="nav-link active">
             <i class="nav-icon fa fa-file"></i>
             <p>
               Selection List
            
             </p>
           </a>
           
         </li>
        
    
       
        <!-- profile management -->
        <li class="nav-item ">
           <a href="officerprofile.php" class="nav-link active">
             <i class="nav-icon fa fa-user"></i>
             <p>
               View Profile
          
             </p>
           </a>
         
         </li>
       <!-- logout button -->
       <li class="nav-item ">
           <a href="config/logout.php" class="nav-link active">
             <i class="nav-icon fa fa-power-off"></i>
             <p>
               Log Out
             
             </p>
           </a>
           
         </li>
        
        
        
       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>
