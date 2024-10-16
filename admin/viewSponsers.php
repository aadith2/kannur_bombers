<div >
<div class="header">
  <h2>Sponsers</h2>
  <button type="button" class="btn btn-success add-btn" data-toggle="modal" data-target="#myModal">
    Add Sponsers
  </button>
</div>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Name </th>
        <th class="text-center">Image</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from sponsers";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["name"]?> </td>
      <td><img height='100px' src='<?=$row["logo"]?>'></td>
      <td><button class="btn btn-primary" style="height:40px" onclick="sponserEditForm('<?=$row['sponser_id']?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="sponserDelete('<?=$row['sponser_id']?>')">Delete</button></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>


   <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Sponser</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addSponser()" method="POST">
            <div class="form-group">
              <label for="name">Sponser Name</label>
              <input type="text" class="form-control" id="name" required>
            </div>
          
            <div class="form-group">
                <label for="image">Choose Image:</label>
                <input type="file" class="form-control-file" id="image">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success" id="upload" style="height:40px">Add Sponser</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>