<?php include 'header.php'; ?>
<?php include 'db_connect.php'; ?>


    <div class="container" style="margin-bottom: 20px; margin-top: 20px; background-color: silver;">
      <h3 style="float: left;">LIST OF STUDENTS:</h3>
      <button class="btn btn-primary" style="float: right;" data-bs-toggle="modal" data-bs-target="#addStudent">ADD STUDENT</button>
    </div>

    
    

    <table class="table table-bordered table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Class</th>
      <th scope="col">Batch</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
    <?php 
         $query = "SELECT * FROM `students`";                   // select query
         $result = mysqli_query($db_connection, $query);        // execute query
         if(!$result){
          die("query failed".mysqli_error($db_connection));
         }
         else{
          while($row = mysqli_fetch_assoc($result)){            // fetch data as each row in db 
            ?>

              <tr>
                  <td><?php echo $row['id']; ?></td>           <!-- fetch db table row data -->
                  <td><?php echo $row['first_name']; ?></td>
                  <td><?php echo $row['last_name']; ?></td>
                  <td><?php echo $row['class']; ?></td>
                  <td><?php echo $row['batch']; ?></td>
                  <td><?php echo $row['phone']; ?></td>
              </tr>

    <?php
            
          }
         }
    
    ?>
    


  
  </tbody>
</table>

   

<?php include 'footer.php'; ?>
