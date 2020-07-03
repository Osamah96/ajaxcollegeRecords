
<?php
    include 'db.php';

    //receiving ajax insert request 
    if($_REQUEST['req'] !=''){
      if($_REQUEST['req']=='create_new_student'){
        $student_name=$_REQUEST['stu_name'];
        $student_subject=$_REQUEST['stu_subject'];
        $student_fee=$_REQUEST['stu_fee'];

       $ins_sql="INSERT INTO  students_data (student_name,student_subject,student_fees)
         values('$student_name','$student_subject',$student_fee)";
        $run_sql=mysqli_query($conn, $ins_sql);

      }
      elseif($_REQUEST['req']=='delete_request'){
        
        $delete_id= $_REQUEST['id'];
        $delete_sql=" delete  from students_data where id ='$delete_id' ";
        $run_sql=mysqli_query($conn,$delete_sql);



      }
       
      

    }
    $sql= "select * from students_data";
    $run=mysqli_query($conn,$sql);
    while($rows =mysqli_fetch_assoc($run)){ ?>

        <tr>

                <td>1</td>
                <td><?php echo $rows['student_name'];?></td>
                <td><?php echo $rows['student_subject'];?></td>
                <td><?php echo $rows['student_fees'];?></td>
                <td>
                    <div class="dropdown">
                      <button class="btn btn-primary" data-toggle="dropdown">Actions <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                      <li><a href="javascript:void(0);" onclick="edit_request(<?php echo $rows['id'];?>);">Edit</a></li>
                        <li><a href="javascript:void(0);" onclick="ajax_request('delete_request',<?php echo $rows['id'];?>);">Delete</a></li>
                    </ul>
                   </div>
            </td>
            </tr>
            
    
    <?php }?>




                <!-- <td>2</td>
                <td>Mohammed</td>
                <td>Networking</td>
                <td>20000</td>
                <td>
                    <div class="dropdown">
                      <button class="btn btn-primary" data-toggle="dropdown">Actions <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Edit </a></li>
                        <li><a href="#">Delete</a> </li>
                    </ul>
                   </div>
            </td>
               
            </tr>
 -->
