<?php session_start();
if(isset($_SESSION['tid']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include 'connection.php';
    ?>
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
        width:100%;
        
        margin-top:20px;
    }

    table,th,td{
        border:1px solid black;
        border-collapse:collapse;
        text-align:center;
        padding:10px;
        font-size:23px;
    }
            
    td{
        padding:7px;
    }

    .modal-lg {
    max-width: 80% !important;
    }
    
    .bg-image
    {
     background-image:url(backimg.jpg); 
     background-repeat:no-repeat;
     background-position: center;
     background-size:cover;
     height: auto; 
    } 

    .bg-clr
    {
     background-color:#4d4d4d;
    }

  </style>
</head>
<body style="overflow-y: scroll; overflow-x: hidden; background-color: #d9d9d9;">

<div class="container-sm " style="font-size:40px;">
    <div class="mx-auto">
        <p><img src="VesitLogo.png" alt="Vesit Logo" height="80" width="80"> Vivekanad Education Society's Institute of Technology</p>
    </div>
</div>

        
 <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top" style="font-size:20px;">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="fac_home.php">HOME</a>
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
                <img src="Teacher.jpeg" alt="Admin" style="width:40px;">
            </a>
            <div class="float-right"><a class="nav-link" href="logout.php">Logout</a></div>
        </li>
    </ul>
</nav>

<div class="bg-image bg-clr" >
<br>




<div class="container-fluid">
    <div class="row mx-sm-5 mt-3">
        

        <div class="col-sm-12" style="background-color:white; height:auto; font-size:30px;">
            <div class="row ">
                <div class="col-sm-4" style="background-image:url(record.png);  background-repeat: no-repeat; background-size: 100% 100%; height:200px;" >
                    
                </div>
                <div class=" col-sm-4" >
                    
                </div>
                <div class="mt-sm-5  col-sm-4 float-sm-right" >
                    <div class="row ">
                        <div class="mt-sm-3 mb-3  col-sm-12 float-sm-right" >
                            <button type="button" class="w-100 btn btn-success" onclick="document.location='Faculty_Record_Attendance.php'"  style="height:80px;font-size:25px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-file-plus" viewBox="0 0 16 16" style="float:left;">
                            <path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z"/>
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/></svg>
                            Record Attendance</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>

<div class="container-fluid">
    <div class="row mx-sm-5 mt-3">
        <div class="col-sm-12" style="background-color:white; height:auto; font-size:30px;">
            <div class="row ">
                <div class=" col-sm-3" style="background-image:url(update.jpg);  background-repeat: no-repeat; background-size: 100% 100%; height:200px;" >
                    
                </div>
                <div class=" col-sm-5" >
                    
                </div>
                <div class="mt-3 mt-sm-5 col-sm-4 float-sm-right" >
                    <div class="row ">
                        <div class="mt-sm-3 mb-3 col-sm-12 float-sm-right" >
                            <button type="button" class="w-100 btn btn-warning" onclick="document.location='Faculty_Update_Attendance.php'"  style="height:80px;font-size:25px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16" style="float:left;">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                            Update Attendance Data</button>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</div>
<br><br>

<div class="container-fluid">
    <div class="row mx-sm-5 mt-3">
        <div class="col-sm-12" style="background-color:white; height:auto; font-size:30px;">
            <div class="row ">
                <div class=" col-sm-3" style="background-image:url(defaulter.jpg);  background-repeat: no-repeat; background-size: 100% 100%; height:200px;" >
                    
                </div>
                <div class=" col-sm-5" >
                    
                </div>
                <div class="mt-3 mt-sm-5 col-sm-4 float-sm-right" >
                    <div class="row ">
                        <div class="mt-sm-3 mb-3  col-sm-12 float-sm-right" >
                            <button type="button" class="btn btn-danger w-100 " onclick="document.location='Faculty_Defaulter_List.php'" style="height:80px;font-size:25px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16" style="float:left;">
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
    </div>
</div>
<br><br>

<div class="container-fluid">
    <div class="row mx-sm-5 mt-3">
        <div class="col-sm-12" style="background-color:white; height:auto; font-size:30px;">
            <div class="row ">
                <div class="col-sm-3" style="background-image:url(studentlist.jpeg);  background-repeat: no-repeat; background-size: 100% 100%; height:200px;" >
                    
                </div>
                <div class="col-sm-5" >
                    
                </div>
                <div class="mt-3 mt-sm-5  col-sm-4 float-sm-right" >
                    <div class="row ">
                        <div class="mt-sm-3 mt-2 mb-3  col-sm-12 float-sm-right" >
                            <button type="button" class="w-100 btn btn-info" data-toggle="modal" data-target="#myModal1" style="height:80px;font-size:25px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16" style="float:left;">
                            <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                            <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                            <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>
                            Student List</button>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            
        </div>
        
    </div>
    <br><br>
</div>
</div>




 <?php
 include 'faculty_student_list_modal.php';
 ?>

</body>
</html>
<?php 
}
else{ header("Location:teacher_login.php");
}
?>