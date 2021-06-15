<div class="row mx-sm-3 mt-2">
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
                                <input type="text" id="suStudent_ID" name="suStudent_ID" class="form-control" required="Please fill this" value="<?php if(isset($_POST['suStudent_ID'])){echo $_POST['suStudent_ID']; $sid=$_POST['suStudent_ID'];} ?>">
                                <div class="input-group-append">
                                <input  class="btn btn-secondary" id="suGetDATA"  name="suGetDATA" type="submit" value="Get Data">
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(isset($_POST['suStudent_ID']))
                        { ?> <script>
                         $(document).ready(function(){
                         $("#myModal2").modal('show');  });</script>
                     <?php }
                     ?>
                    <?php if(isset($sid))
                    {
                    $qe="SELECT * FROM `student`,class WHERE s_id='".$sid."' AND student.c_id=class.c_id";
                    $sph="SELECT s_phone FROM `student_phone` WHERE s_id='".$sid."'";
                    $sqe=mysqli_query($con,$qe);
                    $sphn=mysqli_query($con,$sph);
                    $val=mysqli_fetch_array($sqe);
                    if($val)
                    {
                    ?>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">First Name:</span>
                                </div>
                                <input type="text" id="suF_Name" name="suF_Name" class="form-control" required="Please fill this"
                                value="<?php echo $val['fname'];?>">
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Middle Name:</span>
                                </div>
                                <input type="text" id="suM_Name" name="suM_Name" class="form-control"  value="<?php echo $val['mname'];?>" >
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Last Name:</span>
                                </div>
                                <input type="text" id="suL_Name" name="suL_Name" class="form-control" required="Please fill this"  value="<?php echo $val['lname'];?>">
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Gender:</span>
                                </div>
                                    <select class="form-control" id="suGender" name="suGender" required="Please fill this">
                                    <option selected disabled>Select Gender</option>
                                    <option value="M" <?php if($val['gender']=='M'){echo "selected";}?>>Male</option>
                                    <option value="F" <?php if($val['gender']=='F'){echo "selected";}?>>Female</option>
                                    <option value="O" <?php if($val['gender']=='O'){echo "selected";}?>>Other</option>
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
                                <input type="date" id="suDOB" name="suDOB" class="form-control" required="Please fill this"  value="<?php echo $val['dob'];?>">
                            </div>
                        </div>
                        <div class="col-sm-3 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Class:</span>
                                </div>
                                <input type="text" id="suClass" name="suClass" class="form-control" required="Please fill this" placeholder="Example:D7A"  value="<?php echo $val['c_name'];?>">
                            </div>
                        </div>
                        <div class="col-sm-3 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Roll Number:</span>
                                </div>
                                <input type="number" id="suRollNumber" name="suRollNumber" class="form-control" required="Please fill this" placeholder="Example:34"  value="<?php echo $val['roll_no'];?>">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Email:</span>
                                </div>
                                <input type="email" id="suEmail" name="suEmail" class="form-control" required="Please fill this" placeholder="year.example@ves.ac.in"  value="<?php echo $val['email'];?>">
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Password:</span>
                                </div>
                                <input type="password" id="suPassword" name="suPassword" class="form-control" required="Please fill this"  value="<?php echo $val['password'];?>">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Address:</span>
                                </div>
                                <textarea type="text" id="suAddress" name="suAddress" class="form-control"  rows="3" ><?php echo $val['address'];?></textarea>
                            </div>
                        </div>
                    </div>
                 <?php $i=0;
                  foreach($sphn as $no)
                 { if($i==0)
                    {?>
                    <div id="suInputFormRow">
                        <div class="row mt-sm-2 justify-content-center">
                            <div class="col-sm-12 ">
                                <div class="input-group mb-3 input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Phone Number:</span>
                                    </div>
                                    <input type="number" name="suPhone[]" maxlength="10" autocomplete="off" class="form-control suFieldGroup" required="Please fill this" value="<?php echo $no['s_phone'];?>">
                                    <div class="input-group-append">
                                        <button class="btn btn-success" id="suAddRow" name="suAdd" >
                                            Add
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }else{?>
                    <div id="suNewRow">
                        <div id="suInputFormRow">
                            <div class="row mt-sm-2 justify-content-center">
                                <div class="col-sm-12 ">
                                    <div class="input-group mb-3 input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Phone Number:</span>
                                    </div>
                                        <input type="number" name="suPhone[]" maxlength="10" autocomplete="off" class="form-control suFieldGroup" required="Please fill this" value="<?php echo $no['s_phone'];?>">
                                     <div class="input-group-append">
                                    <button class="btn btn-danger " id="suRemoveRow" name="suRemove" >Remove
                                    </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                <?php }$i++;}}}?>
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
 

$("#suAddRow").click(function () {
        if($('body').find('.suFieldGroup').length < maxGroup){           
            
            var html = '';
            html += '<div id="suInputFormRow">';
            html += '<div class="row mt-sm-2 justify-content-center">';
            html += '<div class="col-sm-12 ">';
            html += '<div class="input-group mb-3 input-group-sm">';
            html += '<div class="input-group-prepend">';
            html += '<span class="input-group-text">Phone Number:</span>';
            html += '</div>';
            html += '<input type="number" name="suPhone[]" maxlength="10" autocomplete="off" class="form-control suFieldGroup" required="Please fill this">';
            html += '<div class="input-group-append">';
            html += '<button class="btn btn-danger " id="suRemoveRow" name="suRemove" type="submit">Remove';
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
 <?php 
 if(isset($_POST['suSubmit'])&&$sid)
{
 $fname=$_POST['suF_Name'];
 $mname=$_POST['suM_Name'];
 $lname =$_POST['suL_Name'];
 $gender=$_POST['suGender'];
 $class=$_POST['suClass'];
 $dob=$_POST['suDOB'];
 $roll= $_POST['suRollNumber'];
 $email=$_POST['suEmail'];
 $password=$_POST['suPassword'];
 $address=$_POST['suAddress'];
 $phone=$_POST['suPhone'];
 $count=count($phone);
 $cheq="select c_id from class where c_name='".$class."';";
 $cek=mysqli_query($con,$cheq);
 $res=mysqli_fetch_array($cek);
 if($res)
{   $sphone="DELETE FROM `student_phone` WHERE s_id='$sid';";
    $c_id=$res['c_id'];
     $squery=" UPDATE `student` SET `fname`='$fname',`mname`='$mname',`lname`='$lname',`gender`='$gender',`address`='$address',`password`='$password',`email`='$email',`dob`= '$dob',`c_id`='$c_id',`roll_no`=$roll WHERE s_id='$sid';";

     for($i=0;$i<$count;$i++)
     {
        $sphone.="INSERT INTO `student_phone`(`s_id`, `s_phone`) VALUES ('$sid',$phone[$i]);";
     }


     if(mysqli_multi_query($con,$squery.$sphone))
    {   
        echo("<meta http-equiv='refresh' content='1'>");
        echo "<script> alert('success')</script>";

    }
    else
    {   
        echo("<meta http-equiv='refresh' content='1'>");
        echo "<script> alert('unsuccessful')</script>";
    }
}
else
{
    echo "<script> alert('invalid class name')</script>";
}

}
?>