<div class="row mx-sm-3 " >
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
<?php
$stu="select max(s_id) as number from student;";
$res=mysqli_query($con,$stu);
$row=mysqli_fetch_array($res);
$var=$row['number'];
    $v=0;$c=0;
    for($i=1;$i<=7;$i++)
      {
      $v=10*$v+$var[$i];
      }
      $v++;
    $c=$v;
    $ct=0;
   
    while($c!=0)
    {   
        $ct++;
        $c=(int)($c/10);
    }
     
     $id="S";
     for($i=1;$i<=7-$ct;$i++)
    {
       $id=$id."0";
    }
    $id.=$v;
?>
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
                                <input readonly id="saStudent_ID" name="saStudent_ID" class="form-control" required="Please fill this" value="<?php echo $id;?>">
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
                                <input type="number" id="saRollNumber" name="saRollNumber" class="form-control" required="Please fill this" placeholder="Example:34">
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
                                    <input type="number"  name="saPhone[0]" maxlength="10" autocomplete="off" class="form-control saFieldGroup" required="Please fill this" >
                                    <div class="input-group-append">
                                        <button class="btn btn-success" id="saAddRow" name="saAdd">
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
 <?php 
 if(isset($_POST['saSubmit']))
{
 $fname=$_POST['saF_Name'];
 $mname=$_POST['saM_Name'];
 $lname =$_POST['saL_Name'];
 $gender=$_POST['saGender'];
 $class=$_POST['saClass'];
 $dob=$_POST['saDOB'];
 $roll= $_POST['saRollNumber'];
 $email=$_POST['saEmail'];
 $password=$_POST['saPassword'];
 $address=$_POST['saAddress'];
 $phone=$_POST['saPhone'];
 $count=count($phone);
 $cheq="select c_id from class where c_name='".$class."';";
 $cek=mysqli_query($con,$cheq);
 $res=mysqli_fetch_array($cek);
 if($res)
{   $sphone="";
    $c_id=$res['c_id'];
     $squery="INSERT INTO `student`(`s_id`, `fname`, `mname`, `lname`, `gender`, `address`, `password`, `email`, `dob`, `c_id`, `roll_no`) VALUES ('$id','$fname','$mname','$lname','$gender','$address','$password','$email','$dob','$c_id',$roll);";
     for($i=0;$i<$count;$i++)
     {
        $sphone.="INSERT INTO `student_phone`(`s_id`, `s_phone`) VALUES ('$id',$phone[$i]);";
     }


     if(mysqli_multi_query($con,$squery.$sphone))
    {
        echo("<meta http-equiv='refresh' content='1'>");
        echo "<script> alert('success')</script>";
    }
    else
    {   echo("<meta http-equiv='refresh' content='1'>");
        echo "<script> alert('unsuccessful')</script>";
    }
}
else
{
    echo "<script> alert('invalid class name')</script>";
}

}
?>

