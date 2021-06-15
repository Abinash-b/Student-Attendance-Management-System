<?php 
session_start();
include 'connection.php';
 function returntime(int $value)
           { if($value==1)       
              {    return"10:30-11:29";}
         else if($value==2)       
              {    return"11:30-12:29";}
         else if($value==3)       
              {   return"2:00-2:59";}
         else if($value==4)       
              {    return"3:00-3:59";}
         else if($value==5)       
              {    return"4:00-4:59";}

            }
if(isset($_SESSION['aid']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Attendance Data</title>
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
        <li class="nav-item ">
            <a class="nav-link" href="admin_home.php">HOME</a>
        </li>
        
    </ul>
 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="Admin_Update_Attendance.php">UPDATE ATTENDANCE</a>
            </li>
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
<br>

<script>
      
        function myFunction(index) {
        var x = document.getElementsByClassName("mybutton")
        if (x[index].innerHTML === "Present") {
            x[index].innerHTML = "Absent";
            x[index].style.backgroundColor = "red";
        } 
        else {
            x[index].innerHTML = "Present";
            x[index].style.backgroundColor = "green";
        }
        }
</script>

<div class="container-fluid ">
    <div class="row ml-sm-3 ">
        <div class="col-sm-3 " style="background-color:lavender; height:600px; font-size:30px;">
            
         <form method="POST">
            <div class="row mx-sm-3 mt-sm-5" >
                <div class="col-sm-12 "  >
                    <div class="input-group mb-3 input-group-sm" style="height:40px;">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Teacher ID:</span>
                        </div>
                        <input type="text" id="AUTeacher_ID" name="AUTeacher_ID" class="form-control" required="Please fill this" placeholder="Example:F00001" style="height:40px;"
                         value="<?php if(isset($_SESSION["teacher"])){echo $_SESSION["teacher"]; }?>">
                        <div class="input-group-append">
                            <input class="btn btn-secondary" id="AUSelect" name="AUSelect" type="submit" value="SELECT">
                        </div>
                    </div>
                </div>
            </div>

            </form>
                <form method="POST">
                <?php 
                
                if(isset($_POST['AUSelect'])||isset($_POST['AUTeacher_ID']))
                    {
                        $_SESSION["teacher"]=$_REQUEST['AUTeacher_ID'];
                         echo("<meta http-equiv='refresh' content='1'>");
                    }
               
                   if(isset($_SESSION["teacher"]))
                     {$c_="select c_id,c_name from class where c_id  IN (select c_id from teaches where t_id ='".$_SESSION["teacher"]."')";
                    $c_query=mysqli_query($con,$c_);

                    $sub_="select sub_id,sub_name from subject where sub_id IN (select sub_id from teaches where t_id ='".$_SESSION["teacher"]."')";
                    $sub_query=mysqli_query($con,$sub_);
                    }
                ?>

            <div class="row mx-sm-3 mt-sm-2" >
                <div class="col-sm-12 "  >
                    <button type="button" class="btn btn-secondary btn-block" data-toggle="modal" data-target="#Assigned" id="ARTCSList" name="ARTCSList" type="submit">
                        Allotment List
                    </button>
                </div>
            </div>

            <div class="row mx-sm-3 mt-sm-5" >
                <div class="col-sm-12 "  >
                    <div class="input-group mb-3 input-group-sm" style="height:40px;">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Class:</span>
                        </div>
                        <select class="form-control" id="AUClass" name="AUClass" required="Please fill this" style="height:40px;">
                       <?php 
                            if(isset($c_query))
                            {foreach($c_query as $c )
                            {?><option value="<?php echo $c['c_id'] ?>" <?php if(isset($_SESSION['class'])&&($_SESSION['class']==$c['c_id'])){echo "selected";} ?>><?php echo $c['c_name'] ?></option>;
                            <?php
                            }}
                            ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row mx-sm-3 mt-sm-3" >
                <div class="col-sm-12 "  >
                    <div class="input-group mb-3 input-group-sm" style="height:40px;">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Subject:</span>
                        </div>
                        <select class="form-control" id="AUSubject" name="AUSubject" required="Please fill this" style="height:40px;" >
                        <?php 
                            if(isset($sub_query))
                            {foreach($sub_query as $sub )
                            {?><option value="<?php echo $sub['sub_id'] ?>" <?php if(isset($_SESSION['subject'])&&($_SESSION['subject']==$sub['sub_id'])){echo "selected";} ?> ><?php echo $sub['sub_name'] ?></option>;
                            <?php
                            }}
                            ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row mx-sm-3 mt-sm-3" >
                <div class="col-sm-12 "  >
                    <div class="input-group mb-3 input-group-sm" style="height:40px;">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Date:</span>
                        </div>
                        <input type="date" id="datereal" name="AUDate" rows="1" class="form-control" required="Please fill this"  style="height:40px;font-size:18px;" value="<?php if(isset($_SESSION['date'])){echo $_SESSION['date'];}?>">
                        <div class="input-group-append">
                            <input class="btn btn-secondary" id="AUDateSelect" name="AUDateSelect" type="submit" value="SELECT">
                        </div>
                    </div>
                </div>
            </div>
                <?php if(isset($_POST['AUDateSelect']))
                {    $_SESSION['subject']=$_POST['AUSubject'];
                     $_SESSION['date']=$_POST['AUDate'];
                     $_SESSION['class']=$_POST['AUClass'];
                     echo("<meta http-equiv='refresh' content='1'>");

                }
                if(isset($_SESSION['subject'])&&isset($_SESSION['date'])&&isset($_SESSION['class']))
                {    
                     $check="SELECT `time-slot` from record_attendance WHERE t_id='".$_SESSION['teacher']."' AND sub_id='".$_SESSION['subject']."' AND date='".$_SESSION['date']."' GROUP BY `time-slot`";
                     $tame=mysqli_query($con,$check);
                      $ftime=mysqli_fetch_array($tame);

                if($ftime)
                { 
                ?>
            <div class="row mx-sm-3 mt-sm-3" >
                <div class="col-sm-12 "  >
                    <div class="input-group mb-3 input-group-sm" style="height:40px;">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Time:</span>
                        </div>
                        <select class="form-control" id="AUTime" name="AUTime" required="Please fill this" style="height:40px;" >
                        <option selected disabled>Select Time Slot</option>
                        <?php 
                            
                            foreach($tame as $val)
                            {?>
                        <option value="<?php echo $val['time-slot'];?>" <?php if(isset($_SESSION['time'])&&$_SESSION['time']==$val['time-slot']){echo "selected";}?>><?php echo returntime($val['time-slot']);?></option>
                        <?php
                             }
                        ?>
                        </select>
                    </div>
                </div>
            </div>
        <?php }else{ echo "<script>alert('please check your subject or date')</script>"; 
        echo("<meta http-equiv='refresh' content='1'>");
            foreach($_SESSION as $key => $val)
                {

                    if ($key !== 'aid')
                     {

                         unset($_SESSION[$key]);

                     }

                }
        }}?>

            <div class="row mx-sm-3 mt-sm-3" >
                <div class="col-sm-12 "  >
                    <input type="submit" class="btn btn-secondary btn-block" name="AUGetData" value="GET CLASS DATA">
                </div>
            </div>
            </form>
        </div>

        <?php 
        if(isset($_POST['AUGetData']))
         {
        if(isset($_POST['AUClass'])&&isset($_POST['AUSubject'])&&($_POST['AUTime']))
            {             
             $_SESSION['class']=$_POST['AUClass']; $_SESSION['subject']=$_POST['AUSubject'];
              $_SESSION['time']=$_POST['AUTime'];
                echo("<meta http-equiv='refresh' content='1'>");
             }}
        if(isset($_SESSION['class'])&&isset($_SESSION['teacher'])&&isset($_SESSION['subject'])&&isset($_SESSION['time']))
           {
            $selectquery="SELECT * FROM `record_attendance`,student WHERE t_id='".$_SESSION['teacher']."' AND sub_id='".$_SESSION['subject']."' AND date='".$_SESSION['date']."' AND `time-slot`=".$_SESSION['time']." AND c_id='".$_SESSION['class']."' AND record_attendance.s_id=student.s_id;";

            $query=mysqli_query($con,$selectquery);
            
           if(mysqli_fetch_array($query))
           {
        ?>

        <div class="col-sm-9">
            <div class="row mx-sm-3 mt-sm-1" >
                <div class="col-sm-12 " >
                    <div class="row">
                    <input class="form-control" id="AUmyInput" type="text" placeholder="Search...">
                    <br>
                    </div>
                    <form method="POST">
                    <table class="table table-bordered table-responsive-xl" style="overflow-x:auto;">
                        <thead>
                            <tr>
                                <th>Student Id</th>
                                <th>Roll Number</th>
                                <th>Full Name</th>
                                <th>Status</th>
                                <th>Note</th>
                            </tr>
                        </thead>
                        <tbody id="AUmyTable">
                            <?php 
            
                                 $cquery="";
                                $i=0;
                                    foreach($query as $values)
                                {
                                    echo "<tr>
                                    <td>{$values['s_id']}</td>
                                    <td>{$values['roll_no']}</td>
                                    <td>{$values['fname']} {$values['mname']} {$values['lname']}</td>";
                                    if($values['status']=='P'){
                                    echo"           
                                    <td><textarea style=\"resize:none;\" readonly type=\"button\" class=\"btn btn-success mybutton\" name=\"stat_$i\" onclick=\"myFunction($i)\" value=\"".$values['status']."\" rows=\"1\">Present</textarea></td>";
                                     }else {
                                     echo"           
                                    <td><textarea style=\"resize:none;\" readonly type=\"button\" class=\"btn btn-danger mybutton\" name=\"stat_$i\" onclick=\"myFunction($i)\" value=\"".$values['status']."\" rows=\"1\">Absent</textarea></td>";}
                                    echo"
                                    <td><textarea name=\"nota_$i\"  type=\"text\" class=\"form-control\" rows=\"1\" id=\"comment\" >{$values['note']}</textarea></td>
                                    </tr>";
                
                                    $i++;
                                }
            
                                ?>
                        </tbody>
                    </table>
                    <div class="mt-sm-4"><center>
                    
                    <input type="submit" class="btn btn-primary btn-lg " name="confirm" value="Submit">
                    </center></div>
                    </form>
                </div>
            </div>
        </div>
        <?php 
       }
        else
                 {echo "<script>alert('there is no Attendance on provided credetial')</script>";
                 foreach($_SESSION as $key => $val)
                {

                    if ($key !== 'aid')
                     {

                         unset($_SESSION[$key]);

                     }

                }
                 echo("<meta http-equiv='refresh' content='1'>");
               }
            }
       ?>

    </div>
</div>
<br><br>

<script>
$(document).ready(function(){
  $("#AUmyInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#AUmyTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});


</script> 


 <?php
 include 'assigned.php';
 ?>



</body>
</html>


<?php      
            if(isset($_POST['confirm']))
            {$i=0; $cquery="";
               $selectquery="SELECT * FROM `record_attendance`,student WHERE t_id='".$_SESSION['teacher']."' AND sub_id='".$_SESSION['subject']."' AND date='".$_SESSION['date']."' AND `time-slot`=".$_SESSION['time']." AND c_id='".$_SESSION['class']."' AND record_attendance.s_id=student.s_id;";

            $query=mysqli_query($con,$selectquery);
            foreach($query as $values)
            {   
              
            $status=$_POST["stat_$i"];
            $index=$_POST["nota_$i"];
            
            $cquery.="UPDATE `record_attendance` SET `note`='".$index."',`status`='".$status[0]."' WHERE `time-slot`=".$_SESSION['time']." AND `s_id`='".$values['s_id']."' AND `t_id`='".$_SESSION['teacher']."' AND `sub_id`='".$_SESSION['subject']."' AND `date`='".$_SESSION['date']."';";
             
                $i++;
            }
            $ros=mysqli_multi_query($con,$cquery);
            if($ros)
            {
              echo"<script>alert('Data was successfully updated');</script>";
              foreach($_SESSION as $key => $val)
                {

                    if ($key !== 'aid')
                     {

                         unset($_SESSION[$key]);

                     }

                }
              echo("<meta http-equiv='refresh' content='1'>");
               
               
            }
            else
            {
                 echo "<script>alert('Data was not updated ');</script>";
                 foreach($_SESSION as $key => $val)
                {

                    if ($key !== 'aid')
                     {

                         unset($_SESSION[$key]);

                     }

                }
                 echo("<meta http-equiv='refresh' content='1'>");
                 
            }  
            }    
           
        ?>

<?php 
}
else{ header("Location:admin_login.php");
}
?>