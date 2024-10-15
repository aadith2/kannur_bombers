<div >
<div class="header">
  <h2>Players</h2>
  <button type="button" class="btn btn-success add-btn" data-toggle="modal" data-target="#myModal">
    Add Player
  </button>
</div>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Image</th>
        <th class="text-center">Name </th>
        <th class="text-center">Position</th>
        <th class="text-center">Date of Birth</th>
        <th class="text-center">Nationality</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from players";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><img height='100px' src='<?=$row["image"]?>'></td>
      <td><?=$row["name"]?> </td>
      <td><?=$row["position"]?></td>
      <td><?=$row["dob"]?></td>
      <td><?=$row["nationality"]?></td>
      <td><button class="btn btn-primary" style="height:40px" onclick="playerEditForm('<?=$row['player_id']?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="playerDelete('<?=$row['player_id']?>')">Delete</button></td>
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
          <h4 class="modal-title">New Player</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addPlayer()" method="POST">
            <div class="form-group">
              <label for="player_name">Player Name:</label>
              <input type="text" class="form-control" id="player_name" required>
            </div>
            <div class="form-group">
              <label for="position">Position:</label>
              <input type="text" class="form-control" id="position" required>
            </div>
            <div class="form-group">
              <label for="nationality">Nationality:</label>
              <input type="text" class="form-control" id="nationality" required>
            </div>
            <div class="form-group">
              <label for="dob">Date of Birth:</label>
              <input type="date" class="form-control" id="dob" required>
            </div>
          
            <div class="form-group">
                <label for="image">Choose Image:</label>
                <input type="file" class="form-control-file" id="image">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Add player</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>