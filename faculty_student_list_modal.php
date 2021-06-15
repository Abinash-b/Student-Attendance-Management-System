 <!-- Modal student-list-->
 <div class="modal fade" id="myModal1" role="dialog">
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