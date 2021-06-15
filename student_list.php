
            <div class="row mx-sm-3 mt-2">
                <div class="col-sm-12" >
                    <div >
                    <button type="button" class="w-100 btn btn-info" data-toggle="modal" data-target="#myModal3" style="height:60px;font-size:21px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16" style="float:left;">
                    <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                    </svg>
                    Student List</button>
                    </div>
                </div>
                <!-- Modal student-list-->
 <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title text-left" style="position:absolute;float:left;">STUDENT DETAILS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
            
            <div class="container-fluid justify-content-center">
                <div class="row">
                <input class="form-control" id="slmyInput" type="text" placeholder="Search...">
                <br>
                </div>
                <div class="row">
                    <table class="table table-bordered table-responsive-xl" style="overflow-x:auto;">
                    <thead>
                        <tr>
                        <th>Student Id</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Class</th>
                        <th>Roll Number</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        </tr>
                    </thead>
                    <tbody id="slmyTable">
                        <?php
                            
                            $selectlistquery="select * from student,class where student.c_id=class.c_id order by student.s_id;";

                            $query=mysqli_query($con,$selectlistquery);
                          ;
                            if(isset($query))    
                            { $cquery="";
                            $i=0;
                                foreach($query as $values)
                            {     $phno="SELECT s_phone FROM student_phone WHERE s_id='".$values['s_id']."';";
                                 $ph_query=mysqli_query($con,$phno);
                                 $num=mysqli_num_rows($ph_query);
                                 $u=0;
                                 foreach($ph_query as $tph)
                                { 
                                echo "<tr>";
                                if($u==0)
                                 {echo
                                "<td rowspan=$num>{$values['s_id']}</td>
                                <td rowspan=$num>{$values['fname']}</td>
                                <td rowspan=$num>{$values['mname']}</td>
                                <td rowspan=$num>{$values['lname']}</td>
                                <td rowspan=$num>{$values['gender']}</td>
                                <td rowspan=$num>{$values['c_name']}</td>
                                <td rowspan=$num>{$values['roll_no']}</td>
                                <td rowspan=$num>{$values['email']}</td>";
                                }
                                echo "<td>{$tph['s_phone']}</td>";
                                $u++;
                                echo"</tr>";

                            }}}

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
                            <span class="input-group-text">Student ID:</span>
                        </div>
                        <input type="text" id="slStudent_ID" name="slStudent_ID" class="form-control" required="Please fill this">
                        <div class="input-group-append">
                        <input  class="btn btn-danger" id="slRemove"  name="slRemove" type="submit" value="Remove">
                                          
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
  $("#slmyInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#slmyTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> 

<?php
if(isset($_POST['slRemove'])&&isset($_POST['slStudent_ID']))
{
 $sl_id=$_POST['slStudent_ID'];

 $cheq="select * from student where s_id='".$sl_id."';";
 $cek=mysqli_query($con,$cheq);
 $res=mysqli_fetch_array($cek);
 if($res)
{   $s_data="DELETE FROM `student` WHERE s_id='$sl_id';";
    

     if(mysqli_query($con,$s_data))
    {   
        echo("<meta http-equiv='refresh' content='1'>");
        echo "<script> alert('Student data successfully deleted')</script>";

    }
    else
    {
        echo "<script> alert('unsuccessful')</script>";
    }
}
else
{
    echo "<script> alert('Invalid Student ID!!')</script>";
}

}

    

?>