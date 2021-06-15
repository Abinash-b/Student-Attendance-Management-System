 <div class="row mx-sm-3 " >
                <div class="col-sm-12 " >
                    <div>
                    <button type="button" class="w-100 btn btn-success" data-toggle="modal" data-target="#myModal13"  style="height:60px;font-size:21px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-plus" viewBox="0 0 16 16" style="float:left;">
                    <path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z"/>
                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/></svg>
                    Add New Subject Data</button>
                    </div>
                </div>

<?php
$stu="select max(sub_id) as number from subject;";
$res=mysqli_query($con,$stu);
$row=mysqli_fetch_array($res);
$var=$row['number'];
    $v=0;$c=0;
    for($i=1;$i<=3;$i++)
      {
      $v=10*$v+$var[$i+2];
      }
      $v++;
    $c=$v;
    $ct=0;
   
    while($c!=0)
    {   
        $ct++;
        $c=(int)($c/10);
    }
     
     $id="SUB";
     for($i=1;$i<=3-$ct;$i++)
    {
       $id=$id."0";
    }
    $id.=$v;
    ?>





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
                                <input readonly type="text" id="subaSubject_ID" name="subaSubject_ID" class="form-control" required="Please fill this" value="<?php echo $id;?>">
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

  <?php 
 if(isset($_POST['subaSubmit']))
{
 $sub_name=$_POST['subaSubject_Name'];
 $sub_credits=$_POST['subaCredits'];
 
 $cheq="select sub_name from subject where sub_name='".$sub_name."';";
 $cek=mysqli_query($con,$cheq);
 $res=mysqli_fetch_array($cek);
 if($res)
{  
    echo "<script> alert('Subject already exists')</script>";
}
else
{
    $subquery="INSERT INTO `subject`(`sub_id`, `sub_name`, `sub_credits` ) VALUES ('$id','$sub_name','$sub_credits');";
   
     if(mysqli_query($con,$subquery))
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

}
?>