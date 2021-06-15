<?php session_start();
include 'connection.php';

if(isset($_SESSION['tid']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Record Attendance</title>
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
            <a class="nav-link" href="fac_home.php">HOME</a>
        </li>
        
    </ul>
 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="Faculty_Record_Attendance.php">RECORD ATTENDANCE</a>
            </li>
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
<?php 
$c_="select c_id,c_name from class where c_id  IN (select c_id from teaches where t_id ='".$_SESSION["tid"]."')";
                    $c_query=mysqli_query($con,$c_);

                    $sub_="select sub_id,sub_name from subject where sub_id IN (select sub_id from teaches where t_id ='".$_SESSION["tid"]."')";
                    $sub_query=mysqli_query($con,$sub_);
                ?>
<div class="container-fluid ">
    <div class="row ml-sm-3 ">
        <div class="col-sm-3 " style="background-color:lavender; height:600px; font-size:30px;">
            
            <form method="POST">
            <div class="row mx-sm-3 mt-sm-5" >
                <div class="col-sm-12 "  >
                    <div class="input-group mb-3 input-group-sm" style="height:40px;">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Class:</span>
                        </div>
                        <select class="form-control" id="FRClass" name="FRClass" required="Please fill this" style="height:40px;" required="Please fill this">
                        <option selected disabled>Select Class</option>
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
                        <select class="form-control" id="FRSubject" name="FRSubject" required="Please fill this" style="height:40px;" required="Please fill this">
                        <option selected disabled>Select Subject</option>
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
                        <textarea type="text" id="datereal" name="FRDate" rows="1" class="form-control" required="Please fill this" disabled style="height:40px;font-size:18px;"></textarea>
                    </div>
                </div>
            </div>

            <div class="row mx-sm-3 mt-sm-3" >
                <div class="col-sm-12 "  >
                    <div class="input-group mb-3 input-group-sm" style="height:40px;">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Time:</span>
                        </div>
                        <select class="form-control" id="FRTime" name="FRTime" required="Please fill this" style="height:40px;" >
                        <option selected disabled>Select Time Slot</option>
                        <option value="1" <?php if(isset($_SESSION['time'])&&($_SESSION['time']==1)){echo "selected";} ?>>10:30-11:29</option>
                            <option value="2" <?php if(isset($_SESSION['time'])&&($_SESSION['time']==2)){echo "selected";} ?>>11:30-12:29</option>
                            <option value="3" <?php if(isset($_SESSION['time'])&&($_SESSION['time']==3)){echo "selected";} ?>>2:00-2:59</option>
                            <option value="4" <?php if(isset($_SESSION['time'])&&($_SESSION['time']==4)){echo "selected";} ?>>3:00-3:59</option>
                            <option value="5" <?php if(isset($_SESSION['time'])&&($_SESSION['time']==5)){echo "selected";} ?>>4:00-4:59</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row mx-sm-3 mt-sm-3" >
                <div class="col-sm-12 "  >
                    <input type="submit" class="btn btn-secondary btn-block" name="FRGetData" value="GET CLASS DATA">
                </div>
            </div>
            </form>
        </div>
         <?php 
        if(isset($_POST['FRGetData']))
         { 
        if(isset($_POST['FRClass'])&&isset($_POST['FRSubject'])&&($_POST['FRTime']))
            {
            $_SESSION['class']=$_POST['FRClass']; $_SESSION['subject']=$_POST['FRSubject']; $_SESSION['time']=$_POST['FRTime'];
                    echo("<meta http-equiv='refresh' content='1'>");
            }


        }
        if(isset($_SESSION['class'])&&isset($_SESSION['tid'])&&isset($_SESSION['subject']))
           {  
              $checkquery="select * from teaches where t_id='".$_SESSION["tid"]."' AND sub_id='".$_SESSION['subject']."' AND c_id='".$_SESSION['class']."';"; 
              $flag=mysqli_fetch_array(mysqli_query($con,$checkquery));
            $selectquery="select s_id,roll_no,fname,mname,lname from student where c_id ='".$_SESSION['class']."' order by roll_no";

            $query=mysqli_query($con,$selectquery);
            
            if($flag)
            { 
        ?>
        <div class="col-sm-9">
            <div class="row mx-sm-3 mt-sm-1" >
                <div class="col-sm-12 " >
                    <div class="row">
                    <input class="form-control" id="FRmyInput" type="text" placeholder="Search...">
                    <br>
                    </div>
                    <form method="POST" >
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
                        <tbody id="FRmyTable">
                            <?php 
            
                                if(isset($_SESSION['class'])&&isset($_SESSION['tid'])&&isset($_SESSION['subject']))  
                                { $cquery="";
                                $i=0;
                                    foreach($query as $values)
                                {
                                    echo "<tr>
                                    <td>{$values['s_id']}</td>
                                    <td>{$values['roll_no']}</td>
                                    <td>{$values['fname']} {$values['mname']} {$values['lname']}</td>
                
                                    <td><textarea style=\"resize:none;\" readonly type=\"button\" class=\"btn btn-success mybutton\" name=\"stat_$i\" onclick=\"myFunction($i)\" value=\"P\" rows=\"1\">Present</textarea></td>
                                    <td><textarea name=\"nota_$i\"  type=\"text\" class=\"form-control\" rows=\"1\" id=\"comment\" ></textarea></td>
                                    </tr>";
                
                                    $i++;
                                }}
            
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
        <?php }else
                 {echo "<script>alert('invalid class and subject')</script>";
                 foreach($_SESSION as $key => $val)
                {

                    if ($key !== 'tid')
                     {

                         unset($_SESSION[$key]);

                     }

                }
                 echo("<meta http-equiv='refresh' content='1'>");
               }
       }?>
    </div>
</div>
<br><br>

<script>
$(document).ready(function(){
  $("#FRmyInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#FRmyTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});


var dt = new Date();
document.getElementById("datereal").innerHTML = (("0"+dt.getDate()).slice(-2)) +"-"+ (("0"+(dt.getMonth()+1)).slice(-2)) +"-"+ (dt.getFullYear());
document.getElementById("timereal").innerHTML = (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+(dt.getMinutes()+1)).slice(-2)) +":"+ (dt.getSeconds());

</script> 



</body>
</html>
<?php      
            if(isset($_POST['confirm']))
            {$i=0; $cquery="";
            $selectquery="select s_id, roll_no,fname,mname,lname from student where c_id ='".$_SESSION['class']."' order by roll_no";

            $query=mysqli_query($con,$selectquery);
            foreach($query as $values)
            {   
              
            $status=$_POST["stat_$i"];
            $index=$_POST["nota_$i"];
            $cquery=$cquery."INSERT INTO record_attendance VALUES ('{$index}','{$status[0]}',curdate(),'".$_SESSION['time']."','{$values['s_id']}','".$_SESSION["tid"]."','".$_SESSION["subject"]."');";
            
             
                $i++;
            }
            $ros=mysqli_multi_query($con,$cquery);
            if($ros)
            {
              echo"<script>alert('Data was successfully inserted');</script>";
              foreach($_SESSION as $key => $val)
                {

                    if ($key !== 'tid')
                     {

                         unset($_SESSION[$key]);

                     }

                }
              
               echo("<meta http-equiv='refresh' content='1'>");
            }
            else
            {
                 echo "<script>alert('Data was not inserted');</script>";
                 foreach($_SESSION as $key => $val)
                {

                    if ($key !== 'tid')
                     {

                         unset($_SESSION[$key]);

                     }

                }
                 
                 echo("<meta http-equiv='refresh' content='1'>");
            }  
            }    
        ?>
<?php 
}else{ header("Location:teacher_login.php");
}
?>