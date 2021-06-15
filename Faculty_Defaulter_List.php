<?php session_start();
include 'connection.php';

if(isset($_SESSION['tid']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Defaulter List</title>
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
            <form method="POST"><a class="nav-link" href="fac_home.php" name="anchor">HOME</a></form>
        </li>
        
    </ul>
 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="Faculty_Defaulter_List.php">DEFAULTER LIST</a>
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


<div class="container-fluid ">
    <div class="row ml-sm-3 ">
        <div class="col-sm-3 " style="background-color:lavender; height:600px; font-size:30px;">
            <form method="POST">

            <?php 
             if(isset($_POST['anchor']))
              {
                foreach($_SESSION as $key => $val)
                {

                    if ($key !== 'tid')
                     {

                         unset($_SESSION[$key]);

                     }

                }

              }
              $dept_="select d_id from teacher WHERE t_id='".$_SESSION['tid']."'";
              $depart=mysqli_fetch_array(mysqli_query($con,$dept_));
              $_SESSION['depart']=$depart[0];
              if(isset($_SESSION["depart"]))
                    {
                        
                    
              ?>
            <div class="row mx-sm-3 mt-sm-5" >
                <div class="col-sm-12 "  >
                    <div class="input-group mb-3 input-group-sm" style="height:40px;">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Class:</span>
                        </div>
                        <select class="form-control" id="FDClass" name="FDClass" required="Please fill this" style="height:40px;" required="Please fill this">
                        <option selected disabled>Select Class</option>
                        <?php 
                                
                                if(isset($_SESSION["depart"]))
                                {
                                $c_="select c_id,c_name from class where d_id='".$_SESSION["depart"]."' order by c_id";
                                $c_query=mysqli_query($con,$c_);
                                if(isset($c_query))
                                {foreach($c_query as $_class_ )
                                {?><option value="<?php echo $_class_['c_id'] ?>" <?php if(isset($_SESSION['class'])&&($_SESSION['class']==$_class_['c_id'])){echo "selected";} ?>><?php echo $_class_['c_name'] ?></option>;
                                <?php
                            
                                }}}
                        ?>
                        </select>
                        <div class="input-group-append">
                            <input class="btn btn-secondary" id="FDClassSelect" name="FDClassSelect" type="submit" value="SELECT">
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <?php
            if(isset($_POST['FDClassSelect']))
                 {
                                  $_SESSION["class"]=$_REQUEST['FDClass'];
                                  echo("<meta http-equiv='refresh' content='1'>");
                   }
                  if(isset($_SESSION['class']))
                  { 
                ?>
            <form method="POST">

            <div class="row mx-sm-3 mt-sm-3" >
                <div class="col-sm-12 "  >
                    <div class="input-group mb-3 input-group-sm" style="height:40px;">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Subject:</span>
                        </div>
                        <select class="form-control" id="FDSubject" name="FDSubject" required="Please fill this" style="height:40px;" required="Please fill this">
                        <option selected disabled>Select Subject</option>
                        <option value="All" <?php if(isset($_SESSION['subject'])&&($_SESSION['subject']=="All")){ echo "selected";}?>>All Subjects</option>
                        <?php 
                                
                                if(isset($_SESSION["class"]))
                                {
                                $sub_="select subject.sub_id,subject.sub_name from subject,teaches where subject.sub_id=teaches.sub_id and teaches.c_id='".$_SESSION["class"]."' order by subject.sub_id";
                                $sub_query=mysqli_query($con,$sub_);
                                if(isset($sub_query))
                                {foreach($sub_query as $_sub_ )
                                {?><option value="<?php echo $_sub_['sub_id']; ?>" <?php if(isset($_SESSION['subject'])&&($_SESSION['subject']==$_sub_['sub_id'])){ echo "selected";}?>><?php echo $_sub_['sub_name'] ?></option>;
                                <?php
                            
                                }}}

                        ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row mx-sm-3 mt-sm-3" style="border:3px solid black ">
                <div class="col-sm-12 "  >
                    <div class="text-center mt-sm-1"><h4>TIME SPAN</h4>
                    </div>
                
                    <div class="input-group mb-3 input-group-sm mt-sm-3" style="height:40px;">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Start Date:</span>
                        </div>
                        <input type="date" id="FDStartDate" name="FDStartDate" class="form-control" required="Please fill this" style="height:40px;" value="<?php if(isset($_SESSION['start_date'])){echo $_SESSION['start_date']; }?>">
                    </div>
                    <div class="input-group mb-3 input-group-sm mt-sm-3" style="height:40px;">
                        <div class="input-group-prepend">
                            <span class="input-group-text">End Date:</span>
                        </div>
                        <input type="date" id="FDEndDate" name="FDEndDate" class="form-control" required="Please fill this" style="height:40px;"value="<?php if(isset($_SESSION['end_date'])){echo $_SESSION['end_date']; }?>">
                    </div>
                </div>
            </div>

            <div class="row mx-sm-3 mt-sm-4" >
                <div class="col-sm-12 "  >
                    <div class="input-group mb-3 input-group-sm" style="height:40px;">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Minimum Attendance :</span>
                        </div>
                        <input type="number" id="FDPercentage" name="FDPercentage" class="form-control" required="Please fill this" placeholder="Example:75" min="0" max="100" style="height:40px;" 
                        value="<?php if(isset($_SESSION['percentage'])){echo $_SESSION['percentage']; }?>">
                        <div class="input-group-append">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mx-sm-3 mt-sm-5" >
                <div class="col-sm-12 "  >
                    <input type="submit" class="btn btn-secondary btn-block" name="FDGetData" value="GET DEFAULTER DATA">
                </div>
            </div>
            </form>
            <?php }}?>
        </div>

        <?php 
        if(isset($_POST['FDGetData']))
         { 
        if(isset($_POST['FDSubject'])&&isset($_POST['FDStartDate'])&&isset($_POST['FDEndDate'])&&isset($_POST['FDPercentage']))
            {
                $_SESSION['subject']=$_POST['FDSubject']; $_SESSION['start_date']=$_POST['FDStartDate']; $_SESSION['end_date']=$_POST['FDEndDate']; $_SESSION['percentage']=$_POST['FDPercentage'];
                echo("<meta http-equiv='refresh' content='1'>");
            }


        }
        if(isset($_SESSION['subject'])&&isset($_SESSION['start_date'])&&isset($_SESSION['end_date'])&&isset($_SESSION['percentage']))
           {  
              
            
            if($_SESSION['end_date']>=$_SESSION['start_date'])
            { 
        ?>
        <div class="col-sm-9">
            <div class="row mx-sm-3 mt-sm-1" >
                <div class="col-sm-12 " >
                        <input class="form-control" id="FDmyInput" type="text" placeholder="Search...">
                    <br>
                <div>
                    <table class="table table-bordered table-responsive-xl" id="tblList" style="overflow-x:auto;">
                        <thead>
                            <tr>
                                <th>Student Id</th>
                                <th>Roll Number</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Class</th>
                                <th>Subject</th>
                                <th>Attendance</th>
                            </tr>
                        </thead>
                        <tbody id="FDmyTable">
                            <?php
                                $query_for_class="select c_name from class where c_id='".$_SESSION["class"]."' ";
                                $value_of_c=mysqli_fetch_array(mysqli_query($con,$query_for_class));
                                
                                if($_SESSION['subject']=="All")
                                {}
                                else{
                                $query_for_sub="select sub_name from subject where sub_id='".$_SESSION['subject']."' ";
                                $value_of_sub=mysqli_fetch_array(mysqli_query($con,$query_for_sub));
                                }

                                $emails="";
                                $stid_query="select * from student where c_id='".$_SESSION["class"]."' ";
                                $stu_id=mysqli_query($con,$stid_query);
                                foreach($stu_id as $id)
                                {   
                                    if($_SESSION['subject']=="All")
                                    {
                                    $present="select count(s_id) as present from record_attendance where s_id='".$id['s_id']."' && status='P' && date BETWEEN '".$_SESSION['start_date']."' AND '".$_SESSION['end_date']."';";
				                    $countp=mysqli_fetch_array(mysqli_query($con,$present),MYSQLI_NUM);
				                    $total="select count(s_id) as total from record_attendance where s_id='".$id['s_id']."' && date BETWEEN '".$_SESSION['start_date']."' AND '".$_SESSION['end_date']."';";
				                    $countt=mysqli_fetch_array(mysqli_query($con,$total),MYSQLI_NUM);
                                    }
                                    else{
                                    $present="select count(s_id) as present from record_attendance where s_id='".$id['s_id']."' && status='P' && sub_id='".$_SESSION['subject']."' && date BETWEEN '".$_SESSION['start_date']."' AND '".$_SESSION['end_date']."';";
                                    $countp=mysqli_fetch_array(mysqli_query($con,$present),MYSQLI_NUM);
                                    $total="select count(s_id) as total from record_attendance where s_id='".$id['s_id']."' && sub_id='".$_SESSION['subject']."' && date BETWEEN '".$_SESSION['start_date']."' AND '".$_SESSION['end_date']."';";
                                    $countt=mysqli_fetch_array(mysqli_query($con,$total),MYSQLI_NUM);
                                    }

                                    if($countt[0]!=0)
                                    {$per=$countp[0]/$countt[0]*100;
                                    if($per<$_SESSION['percentage'])
                                    {
                                        ?>
                                        <tr>
                                            <td><?php echo$id['s_id']; ?></td>
                                            <td><?php echo$id['roll_no']; ?></td>
                                            <td><?php echo$id['fname']." ".$id['mname']." ".$id['lname']; ?></td>
                                            <td><?php echo$id['email'];$emails=$emails.$id['email'].","; ?></td>
                                            <td><?php echo$value_of_c[0]; ?></td>
                                            <td><?php if($_SESSION['subject']=="All")
                                                        {echo "All Subjects";}
                                                        else{ echo$value_of_sub[0];} ?></td>
                                            <td><?php echo round($per,2);?></td>
                        
                                        </tr>                   
                                        <?php
                                    }
                                    }
                                }
                            
                            ?>
                        </tbody>
                    </table>
                     <div class="mt-sm-4"><center>
                    <a style="text-decoration:none;color:black;" href="mailto:<?php echo $emails;?>?subject=Warning%20regarding%20attendance%20shortfall.&body=This%20mail%20is%20written%20to%20you%20in%20order%20to%20warn%20you%20that%20your%20attendance%20does%20not%20meet%20the%20standard%20requirements%20of%20attendance%20for%20college.%0D%0A%0D%0AYour%20attendance%20record%20for%20<?php if($_SESSION['subject']=="All"){echo"all%20subjects";} else{echo$value_of_sub[0]."%20classes";}?>%20is%20less%20than%20the%20standard%20requirement%20of%20college%20for%20qualifying%20to%20sit%20in%20exams%20which%20is%20<?php echo $_SESSION['percentage'];?>%25.%0D%0A%0D%0AThe%20college%20would%20like%20to%20notify%20you%20that%20if%20you%20are%20not%20able%20to%20improve%20your%20attendance%20record%20for%20future%20academic%20sessions%20then%20you%20would%20not%20qualify%20to%20sit%20in%20upcoming%20examination.">
                    <button class="btn btn-danger btn-lg mx-sm-3" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16" style="float:left;">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                    </svg>
                    <span class="ml-sm-3">GENERATE MAIL</span></button>
                    </a>   
                    <a style="text-decoration:none;color:black;" download><button type="button" class="btn btn-success btn-lg mx-sm-3" onclick="exportData()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16" style="float:left;">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                    </svg>
                    <span class="ml-sm-3">DOWNLOAD DEFAULTER'S LIST</span></button></a>
                    </center></div>
                    
                </div>
            </div>
        </div>
         <?php }else
                 {echo "<script>alert('invalid date span entered.!!')</script>";
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
  $("#FDmyInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#FDmyTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
var dt = new Date();
document.getElementById("datereal").innerHTML = (("0"+dt.getDate()).slice(-2)) +"-"+ (("0"+(dt.getMonth()+1)).slice(-2)) +"-"+ (dt.getFullYear());
document.getElementById("timereal").innerHTML = (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+(dt.getMinutes()+1)).slice(-2)) +":"+ (dt.getSeconds());
</script> 


<script>
        function exportData(){
        /* Get the HTML data using Element by Id */
        var table = document.getElementById("tblList");
 
        /* Declaring array variable */
        var rows =[];
 
         //iterate through rows of table
        for(var i=0,row; row = table.rows[i];i++){
            //rows would be accessed using the "row" variable assigned in the for loop
            //Get each cell value/column from the row
            column1 = row.cells[0].innerText;
            column2 = row.cells[1].innerText;
            column3 = row.cells[2].innerText;
            column4 = row.cells[3].innerText;
            column5 = row.cells[4].innerText;
            column6 = row.cells[5].innerText;
            column7 = row.cells[6].innerText;
 
        /* add a new records in the array */
            rows.push(
                [
                    column1,
                    column2,
                    column3,
                    column4,
                    column5,
                    column6,
                    column7
                ]
            );
 
            }
            csvContent = "data:text/csv;charset=utf-8,";
             /* add the column delimiter as comma(,) and each row splitted by new line character (\n) */
            rows.forEach(function(rowArray){
                row = rowArray.join(",");
                csvContent += row + "\r\n";
            });
 
            /* create a hidden <a> DOM node and set its download attribute */
            var encodedUri = encodeURI(csvContent);
            var link = document.createElement("a");
            link.setAttribute("href", encodedUri);
            link.setAttribute("download", "Defaulter_List.csv");
            document.body.appendChild(link);
             /* download the data file named "Stock_Price_Report.csv" */
            link.click();
        }
       
</script>




</body>
</html>
<?php 
}else{ header("Location:teacher_login.php");
}
?>