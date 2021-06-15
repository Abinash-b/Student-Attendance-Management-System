 <div class="row mx-sm-3 mt-2">
                <div class="col-sm-12" >
                    <div >
                    <button type="button" class="w-100 btn btn-info" data-toggle="modal" data-target="#myModal12" style="height:60px;font-size:21px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16" style="float:left;">
                    <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                    </svg>
                    Class List</button>
                    </div>
                </div>
            </div>
            <!-- Modal Class-list-->
<div class="modal fade" id="myModal12" role="dialog">
    <div class="modal-dialog modal-xl modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title text-left" style="position:absolute;float:left;">CLASS DETAILS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
            
            <div class="container-fluid justify-content-center">
                <div class="row">
                <input class="form-control" id="clmyInput" type="text" placeholder="Search...">
                <br>
                </div>
                <div class="row">
                    <table class="table table-bordered table-responsive-xl" style="overflow-x:auto;">
                    <thead>
                        <tr>
                        <th>Class Id</th>
                        <th>Class Name</th>
                        <th>Semester</th>
                        <th>Department</th>
                        </tr>
                    </thead>
                    <tbody id="clmyTable">
                       <?php
                            include 'connection.php';
                            $selectlistquery="select * from department,class where class.d_id=department.d_id order by class.c_id;";

                            $query=mysqli_query($con,$selectlistquery);
                            if(isset($query))    
                            { $cquery="";
                            $i=0;
                                foreach($query as $values)
                            {
                                echo "<tr>
                                <td>{$values['c_id']}</td>
                                <td>{$values['c_name']}</td>
                                <td>{$values['semester']}</td>
                                <td>{$values['d_name']}</td>
                                
                                </tr>
                                ";
                            }}

                        ?>
                    
                    
                    </tbody>
                    </table>
                </div>
            </div>

            <form method="POST">
            <div class="row mt-sm-2 justify-content-center">
                <div class="col-sm-12 ">
                    <div class="input-group mb-3 input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Class ID:</span>
                        </div>
                        <input type="text" id="clClass_ID" name="clClass_ID" class="form-control" required="Please fill this">
                        <div class="input-group-append">
                        <input  class="btn btn-danger" id="clRemove"  name="clRemove" type="submit" value="Remove">
                                          
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
  $("#clmyInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#clmyTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> 

<?php
if(isset($_POST['clRemove'])&&isset($_POST['clClass_ID']))
{
 $cl_id=$_POST['clClass_ID'];

 $cheq="select * from class where c_id='".$cl_id."';";
 $cek=mysqli_query($con,$cheq);
 $res=mysqli_fetch_array($cek);
 if($res)
{   $class_data="DELETE FROM `class` WHERE c_id='$cl_id';";
    

     if(mysqli_query($con,$class_data))
    {   
        echo("<meta http-equiv='refresh' content='1'>");
        echo "<script> alert('Class Data successfully deleted')</script>";

    }
    else
    {
        echo "<script> alert('unsuccessful')</script>";
    }
}
else
{
    echo "<script> alert('Invalid class ID!!')</script>";
}

}

    

?>