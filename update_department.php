<div class="row mx-sm-3 mt-2">
                <div class="col-sm-12" >
                    <div >
                    <button type="button" class="w-100 btn btn-warning" data-toggle="modal" data-target="#myModal8" style="height:60px;font-size:21px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16" style="float:left;">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                    Update Department Data</button>
                    </div>
                </div>
            </div>
            
  <!-- Modal Department-update-->
  <div class="modal fade" id="myModal8" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title text-left" style="position:absolute;float:left;">DEPARTMENT DETAILS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
       <div class="modal-body">
            <form method="POST">
                <div class="container-fluid">
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Department ID:</span>
                                </div>
                                <input type="text" id="duDepartment_ID" name="duDepartment_ID" class="form-control" required="Please fill this" value="<?php if(isset($_POST['duDepartment_ID'])){echo $_POST['duDepartment_ID']; $did=$_POST['duDepartment_ID'];} ?>">
                                <div class="input-group-append">
                                <button class="btn btn-secondary" id="duGetDATA" name="duGetDATA" type="submit">
                                    Get DATA
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(isset($_POST['duDepartment_ID']))
                        { ?> <script>
                         $(document).ready(function(){
                         $("#myModal8").modal('show');  });</script>
                     <?php }
                     ?>
					<?php if(isset($did))
                    {
                    $qe="SELECT * FROM `department` WHERE d_id='".$did."' ";
                    $dqe=mysqli_query($con,$qe);
                    $val=mysqli_fetch_array($dqe);
                    if($val)
                    {
                    ?>
                    <div class="row mt-sm-2 justify-content-center">
                        <div class="col-sm-12 ">
                            <div class="input-group mb-3 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Department Name:</span>
                                </div>
                                <input type="text" id="duDepartment_Name" name="duDepartment_Name" class="form-control" required="Please fill this" value="<?php echo $val['d_name'];?>">>
                            </div>
                        </div>
                    </div>
					<?php }}?>
                </div>
                <div  class="row mt-sm-3 justify-content-center">
                    <div class="col-sm-12">
                        <center><button type="Submit" class="btn btn-primary" name="duSubmit">Submit</button></center>
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
 if(isset($_POST['duSubmit'])&&$did)
{
    $dep_name=$_POST['duDepartment_Name'];
            $dquery=" UPDATE `department` SET `d_name`='$dep_name' WHERE d_id='$did';";


            if(mysqli_query($con,$dquery))
        {   
            echo("<meta http-equiv='refresh' content='1'>");
            echo "<script> alert('Subject data successfully updated')</script>";

        }
        else
        {
            echo "<script> alert('unsuccessful')</script>";
        }
       

}
?>
