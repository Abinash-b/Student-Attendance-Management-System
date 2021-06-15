<!-- Modal Subject-list-->
<div class="modal fade" id="Assigned" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title text-left" style="position:absolute;float:left;">CLASS ALLOTMENT DETAILS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
            
            <div class="container-fluid justify-content-center">
                <div class="row">
                <input class="form-control" id="TCSListmyInput" type="text" placeholder="Search...">
                <br>
                </div>
                <div class="row">
                    <table class="table table-bordered table-responsive-xl" style="overflow-x:auto;">
                    <thead>
                        <tr>
                        <th>Teacher Id</th>
                        <th>Full Name</th>
                        <th>Class</th>
                        <th>Subject</th>
                        
                        </tr>
                    </thead>
                    <tbody id="TCSListmyTable">
                        
                        <?php
                            $selectlistquery="select * from teaches,class,subject,teacher where teaches.c_id=class.c_id and teaches.sub_id=subject.sub_id and teaches.t_id=teacher.t_id order by class.c_id;";

                            $query=mysqli_query($con,$selectlistquery);
                            if(isset($query))    
                            { $cquery="";
                            $i=0;
                                foreach($query as $values)
                            {
                                echo "<tr>
                                <td>{$values['t_id']}</td>
                                <td>{$values['fname']} {$values['mname']} {$values['lname']}</td>
                                <td>{$values['c_name']}</td>
                                <td>{$values['sub_name']}</td>
                                ";
                            }}

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
  $("#TCSListmyInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#TCSListmyTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> 