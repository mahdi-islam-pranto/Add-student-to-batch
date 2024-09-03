<?php include 'header.php'; ?>
<?php include 'db_connect.php'; ?>


<div class="container" style="margin-bottom: 20px;">
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
    if (!$result) {
      die("query failed" . mysqli_error($db_connection));
    } else {
      while ($row = mysqli_fetch_assoc($result)) {            // fetch data as each row in db 
    ?>

        <tr>
          <td><?php echo $row['id']; ?></td> <!-- fetch db table row data -->
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

<!-- modal form -->
<form>

<div class="modal fade" id="addStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">ADD STUDENT</h5>
        <button type="button" class="close" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <!-- First name -->
          <div class="form-group pt-3">
            <label for="exampleInputEmail1" Name="f_name">First Name:</label>
            <input type="text" Name="f_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter First Name">
          </div>
          <!-- last name -->
          <div class="form-group pt-3">
            <label for="exampleInputEmail1" Name="l_name">Last Name:</label>
            <input type="text" Name="l_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Last Name">
          </div>

          <!-- Class Select -->

          <div class="form-group pt-3">
            <label for="exampleFormControlSelect1">Select Class:</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Class: 1</option>
              <option>Class: 2</option>
              <option>Class: 3</option>
              <option>Class: 4</option>
              <option>Class: 5</option>
              <option>Class: 6</option>
              <option>Class: 7</option>
              <option>Class: 8</option>
              <option>Class: 9</option>
              <option>Class: 10 1st</option>
              <option>Class: 10 2nd</option>
            </select>
          </div>

          <!-- Batch Select -->

          <div class="form-group pt-3">
            <label for="exampleFormControlSelect1">Select Batch:</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Morning</option>
              <option>Evening</option>
              
            </select>
          </div>

          <!--Phone-->
          <div class="form-group pt-3">
            <label for="exampleInputEmail1" Name="phone">Phone No:</label>
            <input type="number" Name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter First Name">
          </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save Student</button>
      </div>
    </div>
  </div>
</div>
</form>


<?php include 'footer.php'; ?>