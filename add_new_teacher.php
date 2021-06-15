
      
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
<?php
$stu="select max(t_id) as number from teacher;";
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
     
     $id="T";
     for($i=1;$i<=7-$ct;$i++)
    {
       $id=$id."0";
    }
    $id.=$v;
?>

<!-- Modal faculty-add-->
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
                                    <span class="input-group-text">Faculty ID:</span>
                                </div>
                                <input type="text" readonly id="faFaculty_ID" name="faFaculty_ID" class="form-control" required="Please fill this" value="<?php echo $id;?>">
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
                                 <select class="form-control" id="caDepartment" name="caDepartment" required="Please fill this" >
                                <option selected disabled>Select Department</option>
                                <?php 
                                $dept_="select d_id,d_name from department order by d_id";
                                $dept_query=mysqli_query($con,$dept_);
                                if(isset($dept_query))
                                {foreach($dept_query as $dep )
                                {?><option value="<?php echo $dep['d_id']; ?>"><?php echo $dep['d_name']; ?></option>;
                                <?php
                            
                                }}
                                ?>
                                </select>
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
                                        <button class="btn btn-success" id="faAddClass" name="faAddClass">
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
                                <textarea type="text" id="faAddress" name="faAddress" class="form-control"  rows="3"></textarea>
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
                                    <input type="number" name="faPhone[]" maxlength="10" autocomplete="off" class="form-control faFieldGroup" required="Please fill this">
                                    <div class="input-group-append">
                                        <button class="btn btn-success" id="faAddRow" name="faAdd" >
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
                        <center><input type="Submit" class="btn btn-primary" name="faSubmit" value=Submit></center>
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
 
$("#faAddRow").click(function () {
        if($('body').find('.faFieldGroup').length <3)
        {           
            x++;
            var html = '';
            html += '<div id="faInputFormRow">';
            html += '<div class="row mt-sm-2 justify-content-center">';
            html += '<div class="col-sm-12 ">';
            html += '<div class="input-group mb-3 input-group-sm">';
            html += '<div class="input-group-prepend">';
            html += '<span class="input-group-text">Phone Number:</span>';
            html += '</div>';
            html += '<input type="text" name="faPhone[]" maxlength="10" autocomplete="off" class="form-control faFieldGroup" required="Please fill this">';
            html += '<div class="input-group-append">';
            html += '<button class="btn btn-danger " id="faRemoveRow" name="faRemove" >Remove';
            html += '</button>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            $('#faNewRow').append(html);
        }
        else{
            alert('Maximum '+3+' Phone Numbers are allowed.');
        }
        });

        // remove row
        $(document).on('click', '#faRemoveRow', function () {
            $(this).closest('#faInputFormRow').remove();
        });

$("#faAddClass").click(function () {
        if($('body').find('.faFieldClass').length < 5){           
            
            var html = '';
            html += '<div id="faInputFormClass">';
            html += '<div class="row mt-sm-2 justify-content-center">';
            html += '<div class="col-sm-12 ">';
            html += '<div class="input-group mb-3 input-group-sm">';
            html += '<div class="input-group-prepend">';
            html += '<span class="input-group-text">Class</span>';
            html += '<span class="input-group-text">Subject:</span>';
            html += '</div>';
            html += '<input type="text" name="faClass[]" class="form-control faFieldClass"  placeholder="Example:D7A" required="Please fill this">';
            html += '<input type="text" name="faSubject[]" class="form-control faFieldSubject"  placeholder="Example:DBMS" required="Please fill this">';
            html += '<div class="input-group-append">';
            html += '<button class="btn btn-danger " id="faRemoveClass" name="faRemoveClass" >Remove';
            html += '</button>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            $('#faNewClass').append(html);
        }else{
            alert('Maximum '+5+' Classes are allowed.');
        }
        });

        // remove row
        $(document).on('click', '#faRemoveClass', function () {
            $(this).closest('#faInputFormClass').remove();
        });

 </script>
<?php 
 if(isset($_POST['faSubmit']))
{
 $fname=$_POST['faF_Name'];
 $mname=$_POST['faM_Name'];
 $lname =$_POST['faL_Name'];
 $gender=$_POST['faGender'];
 $depart= $_POST['caDepartment'];
 $email=$_POST['faEmail'];
 $password=$_POST['faPassword'];
 $address=$_POST['faAddress'];
 $class=$_POST['faClass'];
 $subject=$_POST['faSubject'];
 $phone=$_POST['faPhone'];
 $count=count($phone);
 $numb=count($class);
 $cheq="";
 $ches="";
 for($i=0;$i<$numb;$i++)
{
 $cheq="select c_id from class where c_name='".$class[$i]."';";
 $ches="SELECT sub_id from subject where sub_name='".$subject[$i]."';";
 if(!(mysqli_query($con,$cheq)&&mysqli_query($con,$ches)))
{break;}

}

 
 
 if($i==$numb)
{   $tphone="";$tcs="";
    
     $tquery="INSERT INTO `teacher`(`t_id`, `fname`, `mname`, `lname`, `gender`, `address`, `password`, `email`, `d_id`) VALUES ('$id','$fname','$mname','$lname','$gender','$address','$password','$email','$depart');";
     for($i=0;$i<$count;$i++)
     {
        $tphone.="INSERT INTO `teacher_phone`(`t_id`, `t_phone`) VALUES ('$id',$phone[$i]);";
     }
     for($i=0;$i<$numb;$i++)
     {  $cheq="select c_id from class where c_name='".$class[$i]."';";
        $ches="SELECT sub_id from subject where sub_name='".$subject[$i]."'";
        $rek=mysqli_fetch_array(mysqli_query($con,$ches));
        $cek=mysqli_fetch_array(mysqli_query($con,$cheq));
        $tcs.="INSERT INTO `teaches`(`t_id`, `c_id`, `sub_id`) VALUES ('$id','".$cek['c_id']."','".$rek['sub_id']."');";
     }
     if(mysqli_multi_query($con,$tquery.$tphone.$tcs))
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
    echo "<script> alert('invalid class name or subject')</script>";
}

}
?>
