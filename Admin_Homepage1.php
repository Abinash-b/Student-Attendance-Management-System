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
    max-width: 80% !important;
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
<body style="overflow-y: scroll; overflow-x: hidden;">

<div class="container-sm " style="font-size:40px;">
    <div class="mx-auto">
        <p><img src="VesitLogo.png" alt="Vesit Logo" height="80" width="80"> Vivekanad Education Society's Institute of Technology</p>
    </div>
</div>

        
 <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top" style="font-size:20px;">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="Admin_Homepage.php">HOME</a>
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
            <div class="float-right"><a class="nav-link" href="#">Logout</a></div>
        </li>
    </ul>
</nav>
<br>

<div class="container-fluid">
    <div class="row ml-sm-3 mt-sm-3">
        <div class="col-sm-8" style="background-color:lavender; height:200px; font-size:30px;"><p>STUDENT</p></div>

        <div class="col-sm-4">
            <div class="row mx-sm-3 mt-sm-1" >
                <div class="col-sm-12 " >
                    <div>
                    <button type="button" class="w-100 btn btn-success" data-toggle="modal" data-target="#myModal1"  style="height:60px;font-size:21px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16" style="float:left;">
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/></svg>
                    Add New Student Data</button>
                    </div>
                </div>
            </div>
            <div class="row mx-sm-3 mt-sm-2">
                <div class="col-sm-12" >
                    <div >
                    <button type="button" class="w-100 btn btn-warning" data-toggle="modal" data-target="#myModal2" style="height:60px;font-size:21px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16" style="float:left;">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                    Update Student Data</button>
                    </div>
                </div>
            </div>
            <div class="row mx-sm-3 mt-sm-2">
                <div class="col-sm-12" >
                    <div >
                    <button type="button" class="w-100 btn btn-info" data-toggle="modal" data-target="#myModal3" style="height:60px;font-size:21px;">
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

<div class="container-fluid">
    <div class="row ml-sm-3">
        <div class="col-sm-8" style="background-color:lavender; height:200px; font-size:30px;"><p>TEACHER</p></div>

        <div class="col-sm-4">
            <div class="row mx-sm-3 mt-sm-1" >
                <div class="col-sm-12 " >
                    <div>
                    <button type="button" class="w-100 btn btn-success" data-toggle="modal" data-target="#myModal4" style="height:60px;font-size:21px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16" style="float:left;">
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/></svg>
                    Add New Teacher Member</button>
                    </div>
                </div>
            </div>
            <div class="row mx-sm-3 mt-sm-2">
                <div class="col-sm-12" >
                    <div >
                    <button type="button" class="w-100 btn btn-warning" data-toggle="modal" data-target="#myModal5" style="height:60px;font-size:21px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16" style="float:left;">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                    Update Teacher Data</button>
                    </div>
                </div>
            </div>
            <div class="row mx-sm-3 mt-sm-2">
                <div class="col-sm-12" >
                    <div >
                    <button type="button" class="w-100 btn btn-info" data-toggle="modal" data-target="#myModal6" style="height:60px;font-size:21px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16" style="float:left;">
                    <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                    </svg>
                    Teacher List</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>

<div class="container-fluid">
    <div class="row ml-sm-3">
        <div class="col-sm-3" style="background-color:lavender; height:200px; font-size:30px;"><p>DEPARTMENT</p></div>

        <div class="col-sm-3">
            <div class="row mx-sm-3 mt-sm-1" >
                <div class="col-sm-12 " >
                    <div>
                    <button type="button" class="w-100 btn btn-success" data-toggle="modal" data-target="#myModal7"  style="height:60px;font-size:21px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-plus" viewBox="0 0 16 16" style="float:left;">
                    <path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z"/>
                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/></svg>
                    Add New Department</button>
                    </div>
                </div>
            </div>
            <div class="row mx-sm-3 mt-sm-2">
                <div class="col-sm-12" >
                    <div >
                    <button type="button" class="w-100 btn btn-warning" data-toggle="modal" data-target="#myModal8" style="height:60px;font-size:21px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16" style="float:left;">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                    Update Department Data</button>
                    </div>
                </div>
            </div>
            <div class="row mx-sm-3 mt-sm-2">
                <div class="col-sm-12" >
                    <div >
                    <button type="button" class="w-100 btn btn-info" data-toggle="modal" data-target="#myModal9" style="height:60px;font-size:21px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16" style="float:left;">
                    <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                    </svg>
                    Department List</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-sm-3" style="background-color:lavender; height:200px; font-size:30px;"><p>CLASS</p></div>

        <div class="col-sm-3">
            <div class="row mx-sm-3 mt-sm-1" >
                <div class="col-sm-12 " >
                    <div>
                    <button type="button" class="w-100 btn btn-success" data-toggle="modal" data-target="#myModal10"  style="height:60px;font-size:21px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-plus" viewBox="0 0 16 16" style="float:left;">
                    <path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z"/>
                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/></svg>
                    Add New Class</button>
                    </div>
                </div>
            </div>
            <div class="row mx-sm-3 mt-sm-2">
                <div class="col-sm-12" >
                    <div >
                    <button type="button" class="w-100 btn btn-warning" data-toggle="modal" data-target="#myModal11" style="height:60px;font-size:21px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16" style="float:left;">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                    Update Class Data</button>
                    </div>
                </div>
            </div>
            <div class="row mx-sm-3 mt-sm-2">
                <div class="col-sm-12" >
                    <div >
                    <button type="button" class="w-100 btn btn-info" data-toggle="modal" data-target="#myModal12" style="height:60px;font-size:21px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16" style="float:left;">
                    <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                    </svg>
                    Class List</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>

<div class="container-fluid">
    <div class="row ml-sm-3">
        <div class="col-sm-8" style="background-color:lavender; height:200px; font-size:30px;"><p>SUBJECT</p></div>

        <div class="col-sm-4">
            <div class="row mx-sm-3 mt-sm-1" >
                <div class="col-sm-12 " >
                    <div>
                    <button type="button" class="w-100 btn btn-success" data-toggle="modal" data-target="#myModal13"  style="height:60px;font-size:21px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-plus" viewBox="0 0 16 16" style="float:left;">
                    <path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z"/>
                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/></svg>
                    Add New Subject Data</button>
                    </div>
                </div>
            </div>
            <div class="row mx-sm-3 mt-sm-2">
                <div class="col-sm-12" >
                    <div >
                    <button type="button" class="w-100 btn btn-warning" data-toggle="modal" data-target="#myModal14" style="height:60px;font-size:21px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16" style="float:left;">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                    Update Subject Data</button>
                    </div>
                </div>
            </div>
            <div class="row mx-sm-3 mt-sm-2">
                <div class="col-sm-12" >
                    <div >
                    <button type="button" class="w-100 btn btn-info" data-toggle="modal" data-target="#myModal15" style="height:60px;font-size:21px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16" style="float:left;">
                    <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                    </svg>
                    Subject List</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>

<div class="container-fluid">
    <div class="row ml-sm-3">
        <div class="col-sm-8" style="background-color:lavender; height:200px; font-size:30px;"><p>ATTENDANCE</p>
            <div class="mt-sm-5 col-sm-4 float-sm-right" >
                <button type="button" class="btn btn-danger w-100 " onclick="document.location='Admin_Defaulter_List.php'" style="height:60px;font-size:21px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16" style="float:left;">
                <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                </svg>
                Defaulter List</button>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="row mx-sm-3 my-sm-3" >
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
            <div class="row mx-sm-3 my-sm-3" >
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
        <br><br>
        </div>
    </div>
    </div>
</div>



<!-- Modal student-add-->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-xl modal-dialog-centered" >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title text-left" style="position:absolute;float:left;">STUDENT DETAILS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>  
        </div>

        <div class="modal-body">
            <form method="POST">
                <div class="container-fluid">
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Student ID:</span>
                                </div>
                                <input type="text" id="saStudent_ID" name="saStudent_ID" class="form-control" required="Please fill this">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">First Name:</span>
                                </div>
                                <input type="text" id="saF_Name" name="saF_Name" class="form-control" required="Please fill this">
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Middle Name:</span>
                                </div>
                                <input type="text" id="saM_Name" name="saM_Name" class="form-control" >
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Last Name:</span>
                                </div>
                                <input type="text" id="saL_Name" name="saL_Name" class="form-control" required="Please fill this">
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Gender:</span>
                                </div>
                                    <select class="form-control" id="saGender" name="saGender" required="Please fill this">
                                    <option selected disabled>Select Gender</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                    <option value="O">Other</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Date Of Birth:</span>
                                </div>
                                <input type="date" id="saDOB" name="saDOB" class="form-control" required="Please fill this">
                            </div>
                        </div>
                        <div class="col-sm-3 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Class:</span>
                                </div>
                                <input type="text" id="saClass" name="saClass" class="form-control" required="Please fill this" placeholder="Example:D7A">
                            </div>
                        </div>
                        <div class="col-sm-3 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Roll Number:</span>
                                </div>
                                <input type="text" id="saRollNumber" name="saRollNumber" class="form-control" required="Please fill this" placeholder="Example:34">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Email:</span>
                                </div>
                                <input type="email" id="saEmail" name="saEmail" class="form-control" required="Please fill this" placeholder="year.example@ves.ac.in">
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Password:</span>
                                </div>
                                <input type="password" id="saPassword" name="saPassword" class="form-control" required="Please fill this">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Address:</span>
                                </div>
                                <textarea type="text" id="saAddress" name="saAddress" class="form-control" required="Please fill this" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div id="saInputFormRow">
                        <div class="row mt-sm-2 justify-content-center">
                            <div class="col-sm-12 ">
                                <div class="input-group mb-3 input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Phone Number:</span>
                                    </div>
                                    <input type="text"  name="saPhone[0]" maxlength="10" autocomplete="off" class="form-control saFieldGroup" required="Please fill this" >
                                    <div class="input-group-append">
                                        <button class="btn btn-success" id="saAddRow" name="saAdd" type="submit">
                                            Add
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="saNewRow"></div>
                </div>
                <div  class="row mt-sm-3 justify-content-center">
                    <div class="col-sm-12">
                        <center><button type="Submit" class="btn btn-primary" name="saSubmit">Submit</button></center>
                    </div>
                </div>
            </form>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

 <script type="text/javascript">
 var maxGroup = 3;
 var x = 0;

$("#saAddRow").click(function () {
        if($('body').find('.saFieldGroup').length < maxGroup){           
            x++;
            var html = '';
            html += '<div id="saInputFormRow">';
            html += '<div class="row mt-sm-2 justify-content-center">';
            html += '<div class="col-sm-12 ">';
            html += '<div class="input-group mb-3 input-group-sm">';
            html += '<div class="input-group-prepend">';
            html += '<span class="input-group-text">Phone Number:</span>';
            html += '</div>';
            html += '<input type="text"  name="saPhone['+x+']" maxlength="10" autocomplete="off" class="form-control saFieldGroup" required="Please fill this">';
            html += '<div class="input-group-append">';
            html += '<button class="btn btn-danger " id="saRemoveRow" name="saRemove" type="submit">Remove';
            html += '</button>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            $('#saNewRow').append(html);
        }else{
            alert('Maximum '+maxGroup+' Phone Numbers are allowed.');
        }
        });

        // remove row
        $(document).on('click', '#saRemoveRow', function () {
            $(this).closest('#saInputFormRow').remove();
        });

 </script>


  <!-- Modal student-update-->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-xl modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title text-left" style="position:absolute;float:left;">STUDENT DETAILS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
            <form method="POST">
                <div class="container-fluid">
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Student ID:</span>
                                </div>
                                <input type="text" id="suStudent_ID" name="suStudent_ID" class="form-control" required="Please fill this">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" id="suGetDATA" name="suGetDATA" type="submit">
                                        Get DATA
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">First Name:</span>
                                </div>
                                <input type="text" id="suF_Name" name="suF_Name" class="form-control" required="Please fill this">
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Middle Name:</span>
                                </div>
                                <input type="text" id="suM_Name" name="suM_Name" class="form-control" >
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Last Name:</span>
                                </div>
                                <input type="text" id="suL_Name" name="suL_Name" class="form-control" required="Please fill this">
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Gender:</span>
                                </div>
                                    <select class="form-control" id="suGender" name="suGender" required="Please fill this">
                                    <option selected disabled>Select Gender</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                    <option value="O">Other</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Date Of Birth:</span>
                                </div>
                                <input type="date" id="suDOB" name="suDOB" class="form-control" required="Please fill this">
                            </div>
                        </div>
                        <div class="col-sm-3 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Class:</span>
                                </div>
                                <input type="text" id="suClass" name="suClass" class="form-control" required="Please fill this" placeholder="Example:D7A">
                            </div>
                        </div>
                        <div class="col-sm-3 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Roll Number:</span>
                                </div>
                                <input type="text" id="suRollNumber" name="suRollNumber" class="form-control" required="Please fill this" placeholder="Example:34">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Email:</span>
                                </div>
                                <input type="email" id="suEmail" name="suEmail" class="form-control" required="Please fill this" placeholder="year.example@ves.ac.in">
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Password:</span>
                                </div>
                                <input type="password" id="suPassword" name="suPassword" class="form-control" required="Please fill this">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Address:</span>
                                </div>
                                <textarea type="text" id="suAddress" name="suAddress" class="form-control" required="Please fill this" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div id="suInputFormRow">
                        <div class="row mt-sm-2 justify-content-center">
                            <div class="col-sm-12 ">
                                <div class="input-group mb-3 input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Phone Number:</span>
                                    </div>
                                    <input type="text" name="suPhone[0]" maxlength="10" autocomplete="off" class="form-control suFieldGroup" required="Please fill this">
                                    <div class="input-group-append">
                                        <button class="btn btn-success" id="suAddRow" name="suAdd" type="submit">
                                            Add
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="suNewRow"></div>
                </div>
                <div  class="row mt-sm-3 justify-content-center">
                    <div class="col-sm-12">
                        <center><button type="Submit" class="btn btn-primary" name="suSubmit">Submit</button></center>
                    </div>
                </div>
            </form>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

 <script type="text/javascript">
 var maxGroup = 3;
 var x = 0;

$("#suAddRow").click(function () {
        if($('body').find('.suFieldGroup').length < maxGroup){           
            x++;
            var html = '';
            html += '<div id="suInputFormRow">';
            html += '<div class="row mt-sm-2 justify-content-center">';
            html += '<div class="col-sm-12 ">';
            html += '<div class="input-group mb-3 input-group-sm">';
            html += '<div class="input-group-prepend">';
            html += '<span class="input-group-text">Phone Number:</span>';
            html += '</div>';
            html += '<input type="text" name="suPhone['+x+']" maxlength="10" autocomplete="off" class="form-control suFieldGroup" required="Please fill this">';
            html += '<div class="input-group-append">';
            html += '<button class="btn btn-danger " id="suRemoveRow" name="saRemove" type="submit">Remove';
            html += '</button>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            $('#suNewRow').append(html);
        }else{
            alert('Maximum '+maxGroup+' Phone Numbers are allowed.');
        }
        });

        // remove row
        $(document).on('click', '#suRemoveRow', function () {
            $(this).closest('#suInputFormRow').remove();
        });

 </script>

  <!-- Modal student-list-->
 <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title text-left" style="position:absolute;float:left;">STUDENT DETAILS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
            
            <div class="container-fluid justify-content-center">
                <div class="row">
                <input class="form-control" id="slmyInput" type="text" placeholder="Search...">
                <br>
                </div>
                <div class="row">
                    <table class="table table-bordered table-responsive-xl" style="overflow-x:auto;">
                    <thead>
                        <tr>
                        <th>Student Id</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Class</th>
                        <th>Roll Number</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody id="slmyTable">
                        <tr>
                        <td>S00001</td>
                        <td>Nihar</td>
                        <td>Hemantkumar</td>
                        <td>Kenny</td>
                        <td>Male</td>
                        <td>D7A</td>
                        <td>34</td>
                        <td>nihar@ves.ac.in</td>
                        <td>1000100099</td>
                        <td> <div class="btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-dash-circle" style="color:red;" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                        </svg></div></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<script>
$(document).ready(function(){
  $("#slmyInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#slmyTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> 


<!-- Modal Faculty-add-->
  <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog modal-xl modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title text-left" style="position:absolute;float:left;">FACULTY DETAILS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>  
        </div>

        <div class="modal-body">
            <form method="POST">
                <div class="container-fluid">
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Teacher ID:</span>
                                </div>
                                <input type="text" id="faTeacher_ID" name="faTeacher_ID" class="form-control" required="Please fill this">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">First Name:</span>
                                </div>
                                <input type="text" id="faF_Name" name="faF_Name" class="form-control" required="Please fill this">
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Middle Name:</span>
                                </div>
                                <input type="text" id="faM_Name" name="faM_Name" class="form-control" >
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Last Name:</span>
                                </div>
                                <input type="text" id="faL_Name" name="faL_Name" class="form-control" required="Please fill this">
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Gender:</span>
                                </div>
                                    <select class="form-control" id="faGender" name="faGender" required="Please fill this">
                                    <option selected disabled>Select Gender</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                    <option value="O">Other</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Department:</span>
                                </div>
                                <input type="text" id="faDepartment" name="faDepartment" class="form-control" required="Please fill this" placeholder="Example:CMPN">
                            </div>
                        </div>
                    </div>
                    <div id="faInputFormClass">
                        <div class="row mt-sm-2 justify-content-center">  
                            <div class="col-sm-12 ">
                                <div class="input-group mb-3 input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Class</span>
                                        <span class="input-group-text">Subject:</span>
                                    </div>
                                    <input type="text" name="faClass[0]" class="form-control faFieldClass"  placeholder="Example:D7A" required="Please fill this">
                                    <input type="text" name="faSubject[0]" class="form-control faFieldSubject"  placeholder="Example:DBMS" required="Please fill this">
                                    <div class="input-group-append">
                                        <button class="btn btn-success" id="faAddClass" name="faAddClass" type="submit">
                                            Add
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="faNewClass"></div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Email:</span>
                                </div>
                                <input type="email" id="faEmail" name="faEmail" class="form-control" required="Please fill this" placeholder="year.example@ves.ac.in">
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Password:</span>
                                </div>
                                <input type="password" id="faPassword" name="faPassword" class="form-control" required="Please fill this">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Address:</span>
                                </div>
                                <textarea type="text" id="faAddress" name="faAddress" class="form-control" required="Please fill this" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div id="faInputFormRow">
                        <div class="row mt-sm-2 justify-content-center">
                            <div class="col-sm-12 ">
                                <div class="input-group mb-3 input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Phone Number:</span>
                                    </div>
                                    <input type="text" name="faPhone[0]" maxlength="10" autocomplete="off" class="form-control faFieldGroup" required="Please fill this">
                                    <div class="input-group-append">
                                        <button class="btn btn-success" id="faAddRow" name="faAdd" type="submit">
                                            Add
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="faNewRow"></div>
                </div>
                <div  class="row mt-sm-3 justify-content-center">
                    <div class="col-sm-12">
                        <center><button type="Submit" class="btn btn-primary" name="faSubmit">Submit</button></center>
                    </div>
                </div>
            </form>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

 <script type="text/javascript">
 var maxGroup = 3;
 var x = 0;

$("#faAddRow").click(function () {
        if($('body').find('.faFieldGroup').length < maxGroup){           
            x++;
            var html = '';
            html += '<div id="faInputFormRow">';
            html += '<div class="row mt-sm-2 justify-content-center">';
            html += '<div class="col-sm-12 ">';
            html += '<div class="input-group mb-3 input-group-sm">';
            html += '<div class="input-group-prepend">';
            html += '<span class="input-group-text">Phone Number:</span>';
            html += '</div>';
            html += '<input type="text" name="faPhone['+x+']" maxlength="10" autocomplete="off" class="form-control faFieldGroup" required="Please fill this">';
            html += '<div class="input-group-append">';
            html += '<button class="btn btn-danger " id="faRemoveRow" name="faRemove" type="submit">Remove';
            html += '</button>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            $('#faNewRow').append(html);
        }else{
            alert('Maximum '+maxGroup+' Phone Numbers are allowed.');
        }
        });

        // remove row
        $(document).on('click', '#faRemoveRow', function () {
            $(this).closest('#faInputFormRow').remove();
        });

var maxClass = 3;
var y = 0;
$("#faAddClass").click(function () {
        if($('body').find('.faFieldClass').length < maxClass){           
            y++;
            var html = '';
            html += '<div id="faInputFormClass">';
            html += '<div class="row mt-sm-2 justify-content-center">';
            html += '<div class="col-sm-12 ">';
            html += '<div class="input-group mb-3 input-group-sm">';
            html += '<div class="input-group-prepend">';
            html += '<span class="input-group-text">Class</span>';
            html += '<span class="input-group-text">Subject:</span>';
            html += '</div>';
            html += '<input type="text" name="faClass['+y+']" class="form-control faFieldClass"  placeholder="Example:D7A" required="Please fill this">';
            html += '<input type="text" name="faSubject['+y+']" class="form-control faFieldSubject"  placeholder="Example:DBMS" required="Please fill this">';
            html += '<div class="input-group-append">';
            html += '<button class="btn btn-danger " id="faRemoveClass" name="faRemoveClass" type="submit">Remove';
            html += '</button>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            $('#faNewClass').append(html);
        }else{
            alert('Maximum '+maxClass+' Classes are allowed.');
        }
        });

        // remove row
        $(document).on('click', '#faRemoveClass', function () {
            $(this).closest('#faInputFormClass').remove();
        });

 </script>


  <!-- Modal faculty-update-->
  <div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog modal-xl modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title text-left" style="position:absolute;float:left;">TEACHER DETAILS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>  
        </div>
        
        <div class="modal-body">
            <form method="POST">
                <div class="container-fluid">
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Teacher ID:</span>
                                </div>
                                <input type="text" id="fuTeacher_ID" name="fuTeacher_ID" class="form-control" required="Please fill this">
                                <div class="input-group-append">
                                <button class="btn btn-secondary" id="fuGetDATA" name="fuGetDATA" type="submit">
                                    Get DATA
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">First Name:</span>
                                </div>
                                <input type="text" id="fuF_Name" name="fuF_Name" class="form-control" required="Please fill this">
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Middle Name:</span>
                                </div>
                                <input type="text" id="fuM_Name" name="fuM_Name" class="form-control" >
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Last Name:</span>
                                </div>
                                <input type="text" id="fuL_Name" name="fuL_Name" class="form-control" required="Please fill this">
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Gender:</span>
                                </div>
                                    <select class="form-control" id="fuGender" name="fuGender" required="Please fill this">
                                    <option selected disabled>Select Gender</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                    <option value="O">Other</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Department:</span>
                                </div>
                                <input type="text" id="fuDepartment" name="fuDepartment" class="form-control" required="Please fill this" placeholder="Example:CMPN">
                            </div>
                        </div>
                    </div>
                    <div id="fuInputFormClass">
                        <div class="row mt-sm-2 justify-content-center">  
                            <div class="col-sm-12 ">
                                <div class="input-group mb-3 input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Class</span>
                                        <span class="input-group-text">Subject:</span>
                                    </div>
                                    <input type="text" id="fuClass" name="fuClass[0]" class="form-control fuFieldClass"  placeholder="Example:D7A" required="Please fill this">
                                    <input type="text" id="fuSubject" name="fuSubject[0]" class="form-control fuFieldSubject"  placeholder="Example:DBMS" required="Please fill this">
                                    <div class="input-group-append">
                                        <button class="btn btn-success" id="fuAddClass" name="fuAddClass" type="submit">
                                            Add
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="fuNewClass"></div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Email:</span>
                                </div>
                                <input type="email" id="fuEmail" name="fuEmail" class="form-control" required="Please fill this" placeholder="year.example@ves.ac.in">
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Password:</span>
                                </div>
                                <input type="password" id="fuPassword" name="fuPassword" class="form-control" required="Please fill this">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Address:</span>
                                </div>
                                <textarea type="text" id="fuAddress" name="fuAddress" class="form-control" required="Please fill this" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div id="fuInputFormRow">
                        <div class="row mt-sm-2 justify-content-center">
                            <div class="col-sm-12 ">
                                <div class="input-group mb-3 input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Phone Number:</span>
                                    </div>
                                    <input type="text" id="fuPhone" name="fuPhone[0]" maxlength="10" autocomplete="off" class="form-control fuFieldGroup" required="Please fill this">
                                    <div class="input-group-append">
                                        <button class="btn btn-success" id="fuAddRow" name="fuAdd" type="submit">
                                            Add
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="fuNewRow"></div>
                </div>
                <div  class="row mt-sm-3 justify-content-center">
                    <div class="col-sm-12">
                        <center><button type="Submit" class="btn btn-primary" name="fuSubmit">Submit</button></center>
                    </div>
                </div>
            </form>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

   <script type="text/javascript">
 var maxGroup = 3;
 var x = 0;

$("#fuAddRow").click(function () {
        if($('body').find('.fuFieldGroup').length < maxGroup){           
            x++;
            var html = '';
            html += '<div id="fuInputFormRow">';
            html += '<div class="row mt-sm-2 justify-content-center">';
            html += '<div class="col-sm-12 ">';
            html += '<div class="input-group mb-3 input-group-sm">';
            html += '<div class="input-group-prepend">';
            html += '<span class="input-group-text">Phone Number:</span>';
            html += '</div>';
            html += '<input type="text" id="fuPhone" name="fuPhone['+x+']" maxlength="10" autocomplete="off" class="form-control fuFieldGroup" required="Please fill this">';
            html += '<div class="input-group-append">';
            html += '<button class="btn btn-danger " id="fuRemoveRow" name="fuRemove" type="submit">Remove';
            html += '</button>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            $('#fuNewRow').append(html);
        }else{
            alert('Maximum '+maxGroup+' Phone Numbers are allowed.');
        }
        });

        // remove row
        $(document).on('click', '#fuRemoveRow', function () {
            $(this).closest('#fuInputFormRow').remove();
        });

var maxClass = 3;
var y = 0;
$("#fuAddClass").click(function () {
        if($('body').find('.fuFieldClass').length < maxClass){           
            y++;
            var html = '';
            html += '<div id="fuInputFormClass">';
            html += '<div class="row mt-sm-2 justify-content-center">';
            html += '<div class="col-sm-12 ">';
            html += '<div class="input-group mb-3 input-group-sm">';
            html += '<div class="input-group-prepend">';
            html += '<span class="input-group-text">Class</span>';
            html += '<span class="input-group-text">Subject:</span>';
            html += '</div>';
            html += '<input type="text" id="fuClass" name="fuClass['+y+']" class="form-control fuFieldClass" required="Please fill this" placeholder="Example:D7A" required="Please fill this">';
            html += '<input type="text" id="fuSubject" name="fuSubject['+y+']" class="form-control fuFieldSubject"  placeholder="Example:DBMS" required="Please fill this">';
            html += '<div class="input-group-append">';
            html += '<button class="btn btn-danger " id="fuRemoveClass" name="fuRemoveClass" type="submit">Remove';
            html += '</button>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            $('#fuNewClass').append(html);
        }else{
            alert('Maximum '+maxClass+' Classes are allowed.');
        }
        });

        // remove row
        $(document).on('click', '#fuRemoveClass', function () {
            $(this).closest('#fuInputFormClass').remove();
        });

 </script>

  <!-- Modal faculty-list-->
 <div class="modal fade" id="myModal6" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title text-left" style="position:absolute;float:left;">FACULTY DETAILS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
            
            <div class="container-fluid justify-content-center">
                <div class="row">
                <input class="form-control" id="flmyInput" type="text" placeholder="Search...">
                <br>
                </div>
                <div class="row">
                    <table class="table table-bordered table-responsive-xl" style="overflow-x:auto;">
                    <thead>
                        <tr>
                        <th>Teacher Id</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Department</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody id="flmyTable">
                        <tr>
                        <td>F00001</td>
                        <td>Dhiren</td>
                        <td>Anil</td>
                        <td>Ganwani</td>
                        <td>Male</td>
                        <td>CMPN</td>
                        <td>Dhiren@ves.ac.in</td>
                        <td>1000100011</td>
                        <td> <div class="btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-dash-circle" style="color:red;" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                        </svg></div></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<script>
$(document).ready(function(){
  $("#flmyInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#flmyTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> 


<!-- Modal Department-add-->
  <div class="modal fade" id="myModal7" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title text-left" style="position:absolute;float:left;">DEPARTMENT DETAILS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>  
        </div>
        
        <div class="modal-body">
            <form method="POST">
                <div class="container-fluid">
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Department ID:</span>
                                </div>
                                <input type="text" id="daDepartment_ID" name="daDepartment_ID" class="form-control" required="Please fill this">
                                
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Department Name:</span>
                                </div>
                                <input type="text" id="daDepartment_Name" name="daDepartment_Name" class="form-control" required="Please fill this">
                            </div>
                        </div>
                    </div>
                </div>
                <div  class="row mt-sm-3 justify-content-center">
                    <div class="col-sm-12">
                        <center><button type="Submit" class="btn btn-primary" name="daSubmit">Submit</button></center>
                    </div>
                </div>
            </form>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Modal Department-update-->
  <div class="modal fade" id="myModal8" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title text-left" style="position:absolute;float:left;">DEPARTMENT DETAILS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
       <div class="modal-body">
            <form method="POST">
                <div class="container-fluid">
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Department ID:</span>
                                </div>
                                <input type="text" id="duDepartment_ID" name="duDepartment_ID" class="form-control" required="Please fill this">
                                <div class="input-group-append">
                                <button class="btn btn-secondary" id="duGetDATA" name="duGetDATA" type="submit">
                                    Get DATA
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Department Name:</span>
                                </div>
                                <input type="text" id="duDepartment_Name" name="duDepartment_Name" class="form-control" required="Please fill this">
                            </div>
                        </div>
                    </div>
                </div>
                <div  class="row mt-sm-3 justify-content-center">
                    <div class="col-sm-12">
                        <center><button type="Submit" class="btn btn-primary" name="duSubmit">Submit</button></center>
                    </div>
                </div>
            </form>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


 <!-- Modal Department-list-->
<div class="modal fade" id="myModal9" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title text-left" style="position:absolute;float:left;">DEPARTMENT DETAILS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
            
            <div class="container-fluid justify-content-center">
                <div class="row">
                <input class="form-control" id="dlmyInput" type="text" placeholder="Search...">
                <br>
                </div>
                <div class="row">
                    <table class="table table-bordered table-responsive-xl" style="overflow-x:auto;">
                    <thead>
                        <tr>
                        <th>Department Id</th>
                        <th>Department Name</th>
                        <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody id="dlmyTable">
                        <tr>
                        <td>D001</td>
                        <td>CMPN</td>
                        <td> <div class="btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-dash-circle" style="color:red;" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                        </svg></div></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<script>
$(document).ready(function(){
  $("#dlmyInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#dlmyTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> 

<!-- Modal Class-add-->
  <div class="modal fade" id="myModal10" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title text-left" style="position:absolute;float:left;">CLASS DETAILS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>  
        </div>
        
        <div class="modal-body">
            <form method="POST">
                <div class="container-fluid">
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Class ID:</span>
                                </div>
                                <input type="text" id="caClass_ID" name="caClass_ID" class="form-control" required="Please fill this">
                                
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Class Name:</span>
                                </div>
                                <input type="text" id="caClass_Name" name="caClass_Name" class="form-control" required="Please fill this">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Semester:</span>
                                </div>
                                <input type="text" id="caSemester" name="caSemester" class="form-control" required="Please fill this">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Department:</span>
                                </div>
                                <input type="text" id="caDepartment" name="caDepartment" class="form-control" required="Please fill this">
                            </div>
                        </div>
                    </div>
                </div>
                <div  class="row mt-sm-3 justify-content-center">
                    <div class="col-sm-12">
                        <center><button type="Submit" class="btn btn-primary" name="caSubmit">Submit</button></center>
                    </div>
                </div>
            </form>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Modal Class-update-->
  <div class="modal fade" id="myModal11" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title text-left" style="position:absolute;float:left;">CLASS DETAILS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
       <div class="modal-body">
            <form method="POST">
                <div class="container-fluid">
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Class ID:</span>
                                </div>
                                <input type="text" id="cuClass_ID" name="cuClass_ID" class="form-control" required="Please fill this">
                                <div class="input-group-append">
                                <button class="btn btn-secondary" id="cuGetDATA" name="cuGetDATA" type="submit">
                                    Get DATA
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Class Name:</span>
                                </div>
                                <input type="text" id="cuClass_Name" name="cuClass_Name" class="form-control" required="Please fill this">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Semester:</span>
                                </div>
                                <input type="text" id="caSemester" name="caSemester" class="form-control" required="Please fill this">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Department:</span>
                                </div>
                                <input type="text" id="caDepartment" name="caDepartment" class="form-control" required="Please fill this">
                            </div>
                        </div>
                    </div>
                </div>
                <div  class="row mt-sm-3 justify-content-center">
                    <div class="col-sm-12">
                        <center><button type="Submit" class="btn btn-primary" name="cuSubmit">Submit</button></center>
                    </div>
                </div>
            </form>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


 <!-- Modal Class-list-->
<div class="modal fade" id="myModal12" role="dialog">
    <div class="modal-dialog modal-xl modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title text-left" style="position:absolute;float:left;">CLASS DETAILS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
            
            <div class="container-fluid justify-content-center">
                <div class="row">
                <input class="form-control" id="clmyInput" type="text" placeholder="Search...">
                <br>
                </div>
                <div class="row">
                    <table class="table table-bordered table-responsive-xl" style="overflow-x:auto;">
                    <thead>
                        <tr>
                        <th>Class Id</th>
                        <th>Class Name</th>
                        <th>Semester</th>
                        <th>Department</th>
                        <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody id="clmyTable">
                        <tr>
                        <td>C001</td>
                        <td>D7A</td>
                        <td>4</td>
                        <td>CMPN</td>
                        <td> <div class="btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-dash-circle" style="color:red;" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                        </svg></div></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<script>
$(document).ready(function(){
  $("#clmyInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#clmyTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> 


<!-- Modal Subject-add-->
  <div class="modal fade" id="myModal13" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title text-left" style="position:absolute;float:left;">SUBJECT DETAILS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>  
        </div>
        
        <div class="modal-body">
            <form method="POST">
                <div class="container-fluid">
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Subject ID:</span>
                                </div>
                                <input type="text" id="subaSubject_ID" name="subaSubject_ID" class="form-control" required="Please fill this">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Subject Name:</span>
                                </div>
                                <input type="text" id="subaSubject_Name" name="subaSubject_Name" class="form-control" required="Please fill this">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Credits:</span>
                                </div>
                                <input type="text" id="subaCredits" name="subaCredits" class="form-control" required="Please fill this">
                            </div>
                        </div>
                    </div>
                </div>
                <div  class="row mt-sm-3 justify-content-center">
                    <div class="col-sm-12">
                        <center><button type="Submit" class="btn btn-primary" name="subaSubmit">Submit</button></center>
                    </div>
                </div>
            </form>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Modal Subject-update-->
  <div class="modal fade" id="myModal14" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title text-left" style="position:absolute;float:left;">SUBJECT DETAILS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
       <div class="modal-body">
            <form method="POST">
                <div class="container-fluid">
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Subject ID:</span>
                                </div>
                                <input type="text" id="subuSubject_ID" name="subuSubject_ID" class="form-control" required="Please fill this">
                                <div class="input-group-append">
                                <button class="btn btn-secondary" id="subuGetDATA" name="subuGetDATA" type="submit">
                                    Get DATA
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Subject Name:</span>
                                </div>
                                <input type="text" id="subuSubject_Name" name="subuSubject_Name" class="form-control" required="Please fill this">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Credits:</span>
                                </div>
                                <input type="text" id="subuCredits" name="subuCredits" class="form-control" required="Please fill this">
                            </div>
                        </div>
                    </div>
                </div>
                <div  class="row mt-sm-3 justify-content-center">
                    <div class="col-sm-12">
                        <center><button type="Submit" class="btn btn-primary" name="subuSubmit">Submit</button></center>
                    </div>
                </div>
            </form>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


 <!-- Modal Subject-list-->
<div class="modal fade" id="myModal15" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title text-left" style="position:absolute;float:left;">SUBJECT DETAILS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
            
            <div class="container-fluid justify-content-center">
                <div class="row">
                <input class="form-control" id="sublmyInput" type="text" placeholder="Search...">
                <br>
                </div>
                <div class="row">
                    <table class="table table-bordered table-responsive-xl" style="overflow-x:auto;">
                    <thead>
                        <tr>
                        <th>Subject Id</th>
                        <th>Subject Name</th>
                        <th>Credits</th>
                        <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody id="sublmyTable">
                        <tr>
                        <td>SUB001</td>
                        <td>DBMS</td>
                        <td>3.00</td>
                        <td> <div class="btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-dash-circle" style="color:red;" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                        </svg></div></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<script>
$(document).ready(function(){
  $("#sublmyInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#sublmyTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> 


</body>
</html>
