<div class="row mx-sm-3 " >
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

<?php
$stu="select max(c_id) as number from class;";
$res=mysqli_query($con,$stu);
$row=mysqli_fetch_array($res);
$var=$row['number'];
    $v=0;$c=0;
    for($i=1;$i<=3;$i++)
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
     
     $id="C";
     for($i=1;$i<=3-$ct;$i++)
    {
       $id=$id."0";
    }
    $id.=$v;
    ?>


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
                                <input readonly type="text" id="caClass_ID" name="caClass_ID" class="form-control" required="Please fill this" value="<?php echo $id;?>">
                                
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
                                <select class="form-control" id="caDepartment" name="caDepartment" required="Please fill this" >
                                <option selected disabled>Select Department</option>
                                <?php 
                                $dept_="select d_id,d_name from department order by d_id";
                                $dept_query=mysqli_query($con,$dept_);
                                if(isset($dept_query))
                                {foreach($dept_query as $dep )
                                {?><option value="<?php echo $dep['d_id'] ?>"><?php echo $dep['d_name'] ?></option>;
                                <?php
                            
                                }}
                                ?>
                                </select>
                                
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

   <?php 
 if(isset($_POST['caSubmit']))
{
 $c_name=$_POST['caClass_Name'];
 $semester=$_POST['caSemester'];
 $d_id=$_POST['caDepartment'];
 
 $cheq="select c_name from class where c_name='".$c_name."';";
 $cek=mysqli_query($con,$cheq);
 $res=mysqli_fetch_array($cek);
 if($res)
{  
    echo "<script> alert('Class already exists')</script>";
}
else
{
    $subquery="INSERT INTO `class`(`c_id`, `c_name`, `semester`, `d_id` ) VALUES ('$id','$c_name','$semester','$d_id');";
   
     if(mysqli_query($con,$subquery))
    {
        echo "<script> alert('success')</script>";
    }
    else
    {
        echo "<script> alert('unsuccessful')</script>";
    }
    
}

}
?>