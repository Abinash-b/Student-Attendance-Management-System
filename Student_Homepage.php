<?php session_start();
if(isset($_SESSION['sid']))
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
     height: 100%; 
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
            <a class="nav-link" href="Student_Homepage.php">HOME</a>
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
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFzmo3JquummKiRTU3gvVz2ANxDGXMsHRKZw&usqp=CAU" alt="Admin" style="width:40px;">
            </a>
            <div class="float-right"><a class="nav-link" href="logout.php">Logout</a></div>
        </li>
    </ul>
</nav>

<div class="bg-image bg-clr" >
<br>
<?php
$fclass="select student.c_id as c_id,c_name from student,class where student.c_id=class.c_id AND s_id='".$_SESSION['sid']."'";
$class=mysqli_fetch_array(mysqli_query($con,$fclass),MYSQLI_NUM);
$fsub="SELECT subject.sub_id as sub_id,sub_name FROM `teaches`,subject WHERE c_id='".$class[0]."' AND teaches.sub_id=subject.sub_id";
$num=mysqli_num_rows(mysqli_query($con,$fsub));
?>
<div class="col-sm-9">
            <div class="row mx-sm-3 mt-sm-1" >
                <div class="col-sm-12 " >
                   
                    <form method="POST">
                    <table class="table table-bordered table-responsive-xl" style="overflow-x:auto;">
                        <thead>
                            <tr>
                                <th colspan="<?php echo $num;?>"><?php echo $class[1];?></th>
                            </tr>
                            <tr>
                                <?php 
                                foreach (mysqli_query($con,$fsub) as $sub) {
                                echo "<th>{$sub['sub_name']}</th>";
                                }
                                ?>
                            </tr>
                        </thead>
                        <tbody id="AUmyTable">
                            <tr>
                            <?php 
                            foreach (mysqli_query($con,$fsub) as $sub) {
                                $present="select count(s_id) as present from record_attendance where s_id='".$_SESSION['sid']."' && status='P' && sub_id='".$sub['sub_id']."'";
                                    $countp=mysqli_fetch_array(mysqli_query($con,$present),MYSQLI_NUM);
                                $total="select count(s_id) as total from record_attendance where s_id='".$_SESSION['sid']."' && sub_id='".$sub['sub_id']."'";
                                    $countt=mysqli_fetch_array(mysqli_query($con,$total),MYSQLI_NUM);
                                   if($countt[0]!=0)
                                    {$per=$countp[0]/$countt[0]*100;
                                      echo "<td>$per%</td>";
                                    }
                                    else
                                    {
                                        echo "<td>NA</td>";
                                    }
                                }
                                ?>
                            </tr>
                        </tbody>
                    </table>
                    <div class="mt-sm-4"><center>
                    </center></div>
                    </form>
                </div>
            </div>
        </div>

</div>

</body>
</html>
<?php 
}
else{ header("Location:student_login.php");
     session_unset();
     session_destroy();
}
?>