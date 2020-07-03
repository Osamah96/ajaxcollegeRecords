   <?php
        include 'db.php';
        if($_REQUEST['edit_id'] != ''){
            $sel_sql= "select * from students_data where id = '$_REQUEST[edit_id]'";
            $run_sql =mysqli_query($conn,$sel_sql);
            while ($rows =mysqli_fetch_assoc($run_sql)) { ?>

            <!-- name -->
            <div class="form-group">
                   <label class="control-label col-md-2">Student name</label>
                   <div class="col-md-8">
                       <input  type="text" value="<?php  echo $rows['student_name'];?>" id="student-name" class="form-control">
                   </div>
               </div>
         
               <!-- Subject -->
             <div class="form-group">
                 <label  class="control-label col-md-2" >Student Subject</label>
                 <div class="col-md-8">
                    <select id="student-subject" class="form-control">
                        <?php 
                            if($rows['student_subject'] == 'Programming'){
                              echo '
                              <option value="Programming" selected >Programing</option>
                              <option value="Networking">Networking</option>
                              <option value="Android">Android</option>
                              <option value="Web">Web</option>' ;
                            }

                            elseif($rows['student_subject'] == 'Web'){
                                echo '
                                <option value="Programming"  >Programing</option>
                                <option value="Networking">Networking</option>
                                <option value="Android">Android</option>
                                <option value="Web" selected >Web</option>' ;
                              }

                              
                            elseif($rows['student_subject'] == 'Networking'){
                                echo '
                                <option value="Programming"  >Programing</option>
                                <option value="Networking" selected>Networking</option>
                                <option value="Android">Android</option>
                                <option value="Web"  >Web</option>' ;
                              }
                              elseif($rows['student_subject'] == 'Android'){
                                echo '
                                <option value="Programming"  >Programing</option>
                                <option value="Networking" >Networking</option>
                                <option value="Android"selected>Android</option>
                                <option value="Web"  >Web</option>' ;
                              }
                        ?>
                      
                        
                        </select>
                 </div>
             </div>
      
   
   
  

      <!-- Fees -->
    <div class="form-group">
        <label  class="control-label col-md-2" >Student Fees</label>
        <div class="col-md-8" >
          
            <input type="number" value="<?php  echo $rows['student_fees'];?>" id="student-fees" class="form-control">
        </div>
    </div>
     
     <!-- button add -->
    <div class="form-group">
        <div class="col-md-8 col-md-offset-2" >
            <button class="btn btn-danger btn-block" onclick="ajax_request('create_new_student');"> Add new Record</button>
        </div>
    </div>

    <?php }
        }   
        ?>