 <div class="row mx-sm-3 mt-2">
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
            <!-- Modal faculty-update-->
  <div class="modal fade" id="myModal5" role="dialog">
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
                                <input type="text" id="fuFaculty_ID" name="fuFaculty_ID" class="form-control" required="Please fill this"value="<?php if(isset($_POST['fuFaculty_ID'])){echo $_POST['fuFaculty_ID']; $tid=$_POST['fuFaculty_ID'];} ?>">
                                <div class="input-group-append">
                                <button class="btn btn-secondary" id="fuGetDATA" name="fuGetDATA" type="submit">
                                    Get DATA
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(isset($_POST['fuFaculty_ID']))
                        { ?> <script>
                         $(document).ready(function(){
                         $("#myModal5").modal('show');  });</script>
                     <?php }
                     ?>
                    <?php if(isset($tid))
                    {
                    $qe="SELECT * FROM `teacher` WHERE t_id='".$tid."'";
                    $tph="SELECT t_phone FROM `teacher_phone` WHERE t_id='".$tid."'";
                    $casu="SELECT * FROM `teaches` WHERE t_id='".$tid."'";
                    $tqe=mysqli_query($con,$qe);
                    $tphn=mysqli_query($con,$tph);
                    $tcasu=mysqli_query($con,$casu);
                    $val=mysqli_fetch_array($tqe);
                    if($val)
                    {
                    ?>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">First Name:</span>
                                </div>
                                <input type="text" id="fuF_Name" name="fuF_Name" class="form-control" required="Please fill this" value="<?php echo $val['fname'];?>">
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Middle Name:</span>
                                </div>
                                <input type="text" id="fuM_Name" name="fuM_Name" class="form-control" value="<?php echo $val['mname'];?>" >
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" >Last Name:</span>
                                </div>
                                <input type="text" id="fuL_Name" name="fuL_Name" class="form-control" required="Please fill this" value="<?php echo $val['lname'];?>">
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" >Gender:</span>
                                </div>
                                    <select class="form-control" id="suGender" name="fuGender" required="Please fill this">
                                    <option selected disabled>Select Gender</option>
                                    <option value="M" <?php if($val['gender']=='M'){echo "selected";}?>>Male</option>
                                    <option value="F" <?php if($val['gender']=='F'){echo "selected";}?>>Female</option>
                                    <option value="O" <?php if($val['gender']=='O'){echo "selected";}?>>Other</option>
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
                                 <select class="form-control" id="cuDepartment" name="cuDepartment" required="Please fill this" >
                                <option selected disabled>Select Department</option>
                                <?php 
                                $dept_="select d_id,d_name from department order by d_id";
                                $dept_query=mysqli_query($con,$dept_);
                                if(isset($dept_query))
                                {foreach($dept_query as $dep )
                                {?>
                                <option value="<?php echo $dep['d_id']; ?>" <?php if($dep['d_id']==$val['d_id']){ echo "selected";} ?>><?php echo $dep['d_name']; ?></option>;
                                <?php
                            
                                }}
                                ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <?php $i=0;
                     foreach($tcasu as $no)
                     {$tfeth="SELECT * FROM `subject`,class WHERE sub_id='".$no['sub_id']."' AND c_id='".$no['c_id']."';";
                        $tclsu=mysqli_fetch_array(mysqli_query($con,$tfeth));
                        if($i==0)
                         {?>
                    <div id="fuInputFormClass">
                        <div class="row mt-sm-2 justify-content-center">  
                            <div class="col-sm-12 ">
                                <div class="input-group mb-3 input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Class</span>
                                        <span class="input-group-text">Subject:</span>
                                    </div>
                                    <input type="text" id="fuClass" name="fuClass[0]" class="form-control fuFieldClass"  placeholder="Example:D7A" required="Please fill this" value="<?php echo $tclsu['c_name'];?>">
                                    <input type="text" id="fuSubject" name="fuSubject[0]" class="form-control fuFieldSubject"  placeholder="Example:DBMS" required="Please fill this" value="<?php echo $tclsu['sub_name'];?>">
                                    <div class="input-group-append">
                                        <button class="btn btn-success" id="fuAddClass" name="fuAddClass" >
                                            Add
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }else{?>
                      <div id="fuInputFormClass">
                         <div class="row mt-sm-2 justify-content-center">
                            <div class="col-sm-12 ">
                                <div class="input-group mb-3 input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Class</span>
                                        <span class="input-group-text">Subject:</span>
                                    </div>
                                    <input type="text" id="fuClass" name="fuClass[]" class="form-control fuFieldClass" required="Please fill this" placeholder="Example:D7A" required="Please fill this" value="<?php echo $tclsu['c_name'];?>">
                                    <input type="text" id="fuSubject" name="fuSubject[]" class="form-control fuFieldSubject"  placeholder="Example:DBMS" required="Please fill this" value="<?php echo $tclsu['sub_name'];?>">
                                    <div class="input-group-append">
                                        <button class="btn btn-danger " id="fuRemoveClass" name="fuRemoveClass">Remove
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    <?php }$i++;}?>
                    <div id="fuNewClass"></div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Email:</span>
                                </div>
                                <input type="email" id="fuEmail" name="fuEmail" class="form-control" required="Please fill this" placeholder="year.example@ves.ac.in" value="<?php echo $val['email'];?>">
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Password:</span>
                                </div>
                                <input type="password" id="fuPassword" name="fuPassword" class="form-control" required="Please fill this" value="<?php echo $val['password'];?>">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Address:</span>
                                </div>
                                <textarea type="text" id="fuAddress" name="fuAddress" class="form-control"  rows="3" ><?php echo $val['address'];?></textarea>
                            </div>
                        </div>
                    </div>
                    <?php $i=0;
                  foreach($tphn as $no)
                 { if($i==0)
                    {?>
                    <div id="fuInputFormRow">
                        <div class="row mt-sm-2 justify-content-center">
                            <div class="col-sm-12 ">
                                <div class="input-group mb-3 input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Phone Number:</span>
                                    </div>
                                    <input type="number" id="fuPhone" name="fuPhone[]" maxlength="10" autocomplete="off" class="form-control fuFieldGroup" required="Please fill this" value="<?php echo $no['t_phone'];?>">
                                    <div class="input-group-append">
                                        <button class="btn btn-success" id="fuAddRow" name="fuAdd">
                                            Add
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }else{?>
                        <div id="fuInputFormRow">
                              <div class="row mt-sm-2 justify-content-center">
                                  <div class="col-sm-12 ">
                                    <div class="input-group mb-3 input-group-sm">
                                      <div class="input-group-prepend">
                                       <span class="input-group-text">Phone Number:</span>
                                      </div>
                                        <input type="number" id="fuPhone" name="fuPhone[]" maxlength="10" autocomplete="off" class="form-control fuFieldGroup" required="Please fill this" value="<?php echo $no['t_phone'];?>">
                                    <div class="input-group-append">
                        <button class="btn btn-danger " id="fuRemoveRow" name="fuRemove">Remove
                        </button>
                                    </div>
                                    </div>
                                 </div>
                             </div>
                        </div>
                <?php }$i++;}}}?>
                    <div id="fuNewRow"></div>
                </div>
                <div  class="row mt-sm-3 justify-content-center">
                    <div class="col-sm-12">
                        <center><input type="Submit" class="btn btn-primary" name="fuSubmit" valu="submit"></center>
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

$("#fuAddRow").click(function () {
        if($('body').find('.fuFieldGroup').length < 3){           
            
            var html = '';
            html += '<div id="fuInputFormRow">';
            html += '<div class="row mt-sm-2 justify-content-center">';
            html += '<div class="col-sm-12 ">';
            html += '<div class="input-group mb-3 input-group-sm">';
            html += '<div class="input-group-prepend">';
            html += '<span class="input-group-text">Phone Number:</span>';
            html += '</div>';
            html += '<input type="number" id="fuPhone" name="fuPhone[]" maxlength="10" autocomplete="off" class="form-control fuFieldGroup" required="Please fill this">';
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
            alert('Maximum '+3+' Phone Numbers are allowed.');
        }
        });

        // remove row
        $(document).on('click', '#fuRemoveRow', function () {
            $(this).closest('#fuInputFormRow').remove();
        });

$("#fuAddClass").click(function () {
        if($('body').find('.fuFieldClass').length < 5){           
         
            var html = '';
            html += '<div id="fuInputFormClass">';
            html += '<div class="row mt-sm-2 justify-content-center">';
            html += '<div class="col-sm-12 ">';
            html += '<div class="input-group mb-3 input-group-sm">';
            html += '<div class="input-group-prepend">';
            html += '<span class="input-group-text">Class</span>';
            html += '<span class="input-group-text">Subject:</span>';
            html += '</div>';
            html += '<input type="text" id="fuClass" name="fuClass[]" class="form-control fuFieldClass" required="Please fill this" placeholder="Example:D7A" required="Please fill this">';
            html += '<input type="text" id="fuSubject" name="fuSubject[]" class="form-control fuFieldSubject"  placeholder="Example:DBMS" required="Please fill this">';
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
            alert('Maximum '+5+' Classes are allowed.');
        }
        });

        // remove row
        $(document).on('click', '#fuRemoveClass', function () {
            $(this).closest('#fuInputFormClass').remove();
        });

 </script>
 <?php 
 if(isset($_POST['fuSubmit']))
{
 $fname=$_POST['fuF_Name'];
 $mname=$_POST['fuM_Name'];
 $lname =$_POST['fuL_Name'];
 $gender=$_POST['fuGender'];
 $depart= $_POST['cuDepartment'];
 $email=$_POST['fuEmail'];
 $password=$_POST['fuPassword'];
 $address=$_POST['fuAddress'];
 $class=$_POST['fuClass'];
 $subject=$_POST['fuSubject'];
 $phone=$_POST['fuPhone'];
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
{   $tphone="DELETE FROM `teacher_phone` WHERE t_id='".$tid."';";
    $tcs="DELETE FROM `teaches` WHERE t_id='".$tid."';";
    
     $tquery="UPDATE `teacher` SET `fname`='$fname',`mname`='$mname',`lname`='$lname',`gender`='$gender',`address`='$address',`password`='$password',`email`='$email',`d_id`='$depart' WHERE t_id='".$tid."';";
     for($i=0;$i<$count;$i++)
     {
        $tphone.="INSERT INTO `teacher_phone`(`t_id`, `t_phone`) VALUES ('$tid',$phone[$i]);";
     }
     for($i=0;$i<$numb;$i++)
     {  $cheq="select c_id from class where c_name='".$class[$i]."';";
        $ches="SELECT sub_id from subject where sub_name='".$subject[$i]."'";
        $rek=mysqli_fetch_array(mysqli_query($con,$ches));
        $cek=mysqli_fetch_array(mysqli_query($con,$cheq));
        $tcs.="INSERT INTO `teaches`(`t_id`, `c_id`, `sub_id`) VALUES ('$tid','".$cek['c_id']."','".$rek['sub_id']."');";
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