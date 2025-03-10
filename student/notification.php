<?php include("../include/header.php");?>
<?php include("../include/authentication.php")?>
<?php include('../config/db_conn.php'); ?>
<?php include("../include/navbar_student.php");?>
       
<style>
    .bg{
        background-image: url("../assets/images/logo/Untitled design (2).png");

/* Full height */
height: 100%;

/* Center and scale the image nicely */
background-position: center;
background-repeat: no-repeat;
background-size: cover;
    }

</style>
        <div class="container">
            <div class="section-body mt-3">
                <div class="container-fluid">
                    <div class="fs-2 fw-bold pb-3"> <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-megaphone me-3" viewBox="0 0 16 16">
  <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0m-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065m-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z"/>
</svg></i>Announcement</div>
                </div>
            </div>



<!-- Notification List -->
<div class="list-group">
  <!-- Example Notification 1 -->
  <?php  
                                               
                                                $items="SELECT * FROM announcement";
                                                $items_run=mysqli_query($con,$items);
                                                if(mysqli_num_rows($items_run)>0)
                
                                                {
                                                     foreach($items_run as $item) {   ?>
  <div class="list-group-item border rounded m-3">
    <div class="d-flex justify-content-between">
 
    <small class="fw-bold fs-5 mb-2">
     <?= date('F j, Y', strtotime($item['date'])) ?>
     
</small>
    </div>
    
    <textarea disabled class="message-textarea" rows="15" cols="110" style="width: 1200px; margin: auto; border: none; border-radius: 10px; resize: none; background-color: transparent;"><?= $item['message'];?></textarea>

    
    
 

  <!-- Example Notification 2 -->

  <!-- Add more notifications as needed -->

</div>
<?php }}?>
        </div>
      
        <?php include ("../include/footer.php");?>