<?php 
	
    $teach="select * from teacher;";
    $result=mysqli_query($con,$teach);
    ?>
<div class="row mx-sm-3 mt-2">
                <div class="col-sm-12" >
                    <div >
                    <button type="button" class="w-100 btn btn-info" data-toggle="modal" data-target="#myModal6" style="height:60px;font-size:21px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16" style="float:left;">
                    <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                    </svg>
                    Teacher List</button>
                    </div>
                </div>
            </div>
             <!-- Modal faculty-list-->
 <div class="modal fade" id="myModal6" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title text-left" style="position:absolute;float:left;">FACULTY DETAILS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
            
            <div class="container-fluid justify-content-center">
                <div class="row">
                <input class="form-control" id="flmyInput" type="text" placeholder="Search...">
                <br>
                </div>
                <div class="row">
                    <table class="table table-bordered table-responsive-xl" style="overflow-x:auto;">
                    <thead>
                        <tr>
                        <th>Faculty Id</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Department</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        </tr>
                    </thead>
					<?php foreach ($result as $var)
					{ $tdep="SELECT d_name FROM department WHERE d_id='".$var['d_id']."';";
					$dep_query=mysqli_query($con,$tdep);
					$dep=mysqli_fetch_array($dep_query);
					$phno="SELECT t_phone FROM teacher_phone WHERE t_id='".$var['t_id']."';";
					$ph_query=mysqli_query($con,$phno);
					
					$num=mysqli_num_rows($ph_query);
					?>
                    <tbody id="flmyTable">
                        <?php $u=0;
                        foreach($ph_query as $tph)
                                {?>
                        <tr>
                            <?php if($u==0)
                            {?>
                        <td rowspan=<?php echo $num;?>><?php echo $var["t_id"];?></td>
                        <td rowspan=<?php echo $num;?>><?php echo $var["fname"];?></td>
                        <td rowspan=<?php echo $num;?>><?php echo $var["mname"];?></td>
                        <td rowspan=<?php echo $num;?>><?php echo $var["lname"];?></td>
                        <td rowspan=<?php echo $num;?>><?php echo $var["gender"];?></td>
						<td rowspan=<?php echo $num;?>><?php echo $dep["d_name"];?></td>
                        <td rowspan=<?php echo $num;?>><?php echo $var["email"];?></td>
						   <?php }   
							echo"<td>{$tph['t_phone']}</td>";									
						    ?>
                        </tr>
                       <?php $u++; }?>
                        </tbody>
					<?php }?>
                    
                    </table>
                </div>
            </div>

            <form method="POST">
            <div class="row mt-sm-2 justify-content-center">
                <div class="col-sm-12 ">
                    <div class="input-group mb-3 input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Teacher ID:</span>
                        </div>
                        <input type="text" id="tlTeacher_ID" name="tlTeacher_ID" class="form-control" required="Please fill this">
                        <div class="input-group-append">
                        <input  class="btn btn-danger" id="tlRemove"  name="tlRemove" type="submit" value="Remove">
                                          
                        </div>
                    </div>
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

<script>
$(document).ready(function(){
  $("#flmyInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#flmyTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> 

<?php
if(isset($_POST['tlRemove'])&&isset($_POST['tlTeacher_ID']))
{
 $tl_id=$_POST['tlTeacher_ID'];

 $cheq="select * from teacher where t_id='".$tl_id."';";
 $cek=mysqli_query($con,$cheq);
 $res=mysqli_fetch_array($cek);
 if($res)
{   $t_data="DELETE FROM `teacher` WHERE t_id='$tl_id';";
    

     if(mysqli_query($con,$t_data))
    {   
        echo("<meta http-equiv='refresh' content='1'>");
        echo "<script> alert('Teacher data successfully deleted')</script>";

    }
    else
    {
        echo "<script> alert('unsuccessful')</script>";
    }
}
else
{
    echo "<script> alert('Invalid Teacher ID!!')</script>";
}

}

    

?>