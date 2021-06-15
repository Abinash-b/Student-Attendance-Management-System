<?php session_start();
if(isset($_SESSION['aid']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
  <style>
    .tab{
        display:inline-block;
        margin-left:300px;
    }
    table{
        width:92%;
        
        margin-top:20px;
    }

    table,th,td{
        border:1px solid black;
        border-collapse:collapse;
        text-align:center;
        
        font-size:23px;
    }
            
    .modal-lg {
    max-width: 90% !important;
    }

    .bg-image
    {
     background-image:url(backimg.jpg); 
     background-repeat:no-repeat;
     background-position: center;
     background-size:cover;
     height: 150%; 
    } 


  </style>
</head>
<?php
include 'connection.php';

    
?>
<body style="overflow-y: scroll; overflow-x: hidden;background-color: #d9d9d9;">

<div class="container-sm " style="font-size:40px;">
    <div class="mx-auto">
        <p><img src="VesitLogo.png" alt="Vesit Logo" height="80" width="80"> Vivekanad Education Society's Institute of Technology</p>
    </div>
</div>

        
 <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top" style="font-size:20px;">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="admin_home.php">HOME</a>
        </li>
    </ul>
 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          
        </ul>
    </div>

    <ul class="navbar-nav">
        <li class="nav-item ">
            <a class="navbar-brand" href="#">
                <img src="Admin.jpeg" alt="Admin" style="width:40px;">
            </a>
            <div class="float-right"><a class="nav-link" href="logout.php">Logout</a></div>
        </li>
    </ul>
</nav>

<div class="bg-image " >
<br>

<div class="container-fluid">
    <div class="row ml-sm-3 mt-sm-3">
        <div class="col-sm-8" style="background-image:url(student2.png);  background-repeat: no-repeat;
          
          background-size: 100% 100%;
          height:auto; 
          font-size:70px;">
        <div class="row ">
                <div class="col-sm-3"  >
                    
                </div>
                <div class="col-sm-5 mt-3" >
                    <div class="mt-1 mt-sm-4 mx-2" style="font-weight: 500;">
                    <p>STUDENT</p>
                    </div>
                </div>
                <div class="col-sm-4"  >
                    
                </div>
        </div>
       
        </div>

        <div class="col-sm-4 mt-1">
            <?php include 'add_new_student.php' ?>
            <?php include 'update_student.php' ?>
            <?php include 'student_list.php' ?>

            </div>
        </div>
    </div>
</div>
<br><br>

<div class="container-fluid">
    <div class="row ml-sm-3">
        <div class="col-sm-8" style="background-image:url(teacher1.png);  background-repeat: no-repeat;
          
          background-size: 100% 100%;
          height:auto; 
          font-size:70px;">

        <div class="row ">
                <div class="col-sm-3"  >
                    
                </div>
                <div class="col-sm-5 mt-sm-3" >
                    <div class="mt-sm-4 mx-3" style="color:white;">
                    <p>TEACHER</p>
                    </div>
                </div>
                <div class=" mt-sm-5 col-sm-4 float-sm-right" >
                    <div class="row ">
                        <div class="mt-sm-3 mb-3 col-sm-12 float-sm-right" >
                        <button type="button" class="btn btn-info w-100 " data-toggle="modal" data-target="#Assigned" style="height:60px;font-size:21px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16" style="float:left;">
                            <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                            <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                            <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>
                            Assigned</button>
                        </div>
                    </div>
                </div>
        
            
            
            
        </div>        
        </div>
        <div class="col-sm-4 mt-1">
            <?php include 'add_new_teacher.php' ?>
            <?php include 'update_teacher.php' ?>
            <?php include 'teacher_list.php' ?>


        </div>
    </div>
</div>
<br><br>

<?php include 'assigned.php' ?>

<div class="container-fluid">
    <div class="row ml-sm-3">
        <div class="col-sm-3" style="background-image:url(department.jpg);  background-repeat: no-repeat;
          
          background-size: 100% 100%;
          height:auto; 
          font-size:52px;">
            <div class="row ">
                     <div class="col-sm-1 mt-2" >
                        <div class="mt-4 mx-1" style="font-weight: 500;">
                       
                        </div>
                    </div>
                    <div class="col-sm-10 mt-2" >
                        <div class="mt-3 mt-sm-5" style="font-weight: 500;">
                        <p>DEPARTMENT</p>
                        </div>
                    </div>
                    <div class="col-sm-1 mt-2" >
                        <div class="mt-4" style="font-weight: 500;">
                       
                        </div>
                    </div>
                
            </div>
        </div>

        <div class="col-sm-3 mt-1">
            <?php include 'add_department.php' ?>
            <?php include 'update_department.php' ?>
            <?php include 'department_list.php' ?> 
        </div>


        <div class="col-sm-3 mt-1" style="background-image:url(class1.png);  background-repeat: no-repeat;
          
          background-size: 100% 100%;
          height:auto; 
          font-size:70px;">
            <div class="row ">
                    <div class="col-sm-2 mt-2 " >
                        
                    </div> 
                    <div class="col-sm-8 mt-1 ml-3 ml-sm-1" >
                        <div class="mt-2 mt-sm-3 ml-5 ml-sm-5" style="color: white;">
                            <p>CLASS</p>
                        </div>
                    </div>
                    
                
            </div>
        </div>

        <div class="col-sm-3 mt-1">
            <?php include 'add_class.php' ?> 
            <?php include 'update_class.php' ?> 
            <?php include 'class_list.php' ?> 
        </div>
    </div>

</div>
<br><br>

<div class="container-fluid">
    <div class="row ml-sm-3">
        <div class="col-sm-8" style="background-image:url(subject2.jpg);  background-repeat: no-repeat;
          
          background-size: 100% 100%;
          height:auto; 
          font-size:70px;">
          <div class="row ">
                <div class="col-sm-3"  >
                    
                </div>
                <div class="col-sm-5 mt-3" >
                    <div class="mt-4 mx-2" style="color: #e6e6e6;">
                    <p>SUBJECT</p>
                    </div>
                </div>
                <div class="col-sm-4"  >
                    
                </div>
        </div>
        
        </div>

        <div class="col-sm-4 mt-1">
            <?php include 'add_subject.php' ?> 
            </div>
            <?php include 'update_subject.php' ?>
            <?php include 'subject_list.php' ?>

        </div>
    </div>
</div>
<br><br>

<div class="container-fluid">
    <div class="row ml-sm-3">
        <div class="col-sm-8" style="background-image:url(attend1.png);  background-repeat: no-repeat;
          
          background-size: 100% 100%;
          height:200px; 
          font-size:50px;">
          <div class="row ">
                <div class="col-sm-3"  >
                    
                </div>
                <div class="col-sm-5 mt-sm-3" >
                    <div class="mt-sm-4 ml-2" style="font-weight: 600;">
                    <p>ATTENDANCE</p>
                    </div>
                </div>
                <div class=" mt-sm-5 col-sm-4 float-sm-right" >
                    <div class="row ">
                        <div class="mt-sm-4 mb-3 col-sm-12 float-sm-right" >
                            <button type="button" class="btn btn-danger w-100 " onclick="document.location='Admin_Defaulter_List.php'" style="height:80px;font-size:25px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16" style="float:left;">
                            <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                            <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                            <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>
                            Defaulter List</button>
                        </div>
                    </div>
                </div>
        
            </div>        
       
        </div>

        <div class="col-sm-4">
            <div class="row mx-sm-3 mt-3" >
                <div class="col-sm-12 " >
                    <div>
                    <button type="button" class="w-100 btn btn-success" onclick="document.location='Admin_Record_Attendance.php'"  style="height:80px;font-size:25px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-file-plus" viewBox="0 0 16 16" style="float:left;">
                    <path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z"/>
                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/></svg>
                    Record Attendance</button>
                    </div>
                </div>
            </div>
            <div class="row mx-sm-3 mt-2 mb-3" >
                <div class="col-sm-12" >
                    <div >
                    <button type="button" class="w-100 btn btn-warning" onclick="document.location='Admin_Update_Attendance.php'"  style="height:80px;font-size:25px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16" style="float:left;">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                    Update Attendance Data</button>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
</body>
</html>
<?php 
}
else{ header("Location:admin_login.php");
}
?>