<div >
<div class="header">
  <h2>Point Table</h2>
  <button type="button" class="btn btn-success add-btn" data-toggle="modal" data-target="#myModal">
    Add Points
  </button>
</div>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Matches Played</th>
        <th class="text-center">Wins </th>
        <th class="text-center">Draw</th>
        <th class="text-center">Loss</th>
        <th class="text-center">Points</th>
        <th class="text-center">Goals Scored</th>
        <th class="text-center">Goals Conceded</th>
        <th class="text-center">Goal Difference</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from points_table";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["matches_played"]?> </td>
      <td><?=$row["wins"]?></td>
      <td><?=$row["draws"]?></td>
      <td><?=$row["losses"]?></td>
      <td><?=$row["points"]?></td>
      <td><?=$row["goals_scored"]?></td>
      <td><?=$row["goals_conceded"]?></td>
      <td><?=$row["goal_difference"]?></td>
      <td><button class="btn btn-primary" style="height:40px" onclick="pointEditForm('<?=$row['points_table_id']?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="pointDelete('<?=$row['points_table_id']?>')">Delete</button></td>
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
          <h4 class="modal-title">New Points</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addPoint()" method="POST">
            <div class="form-group">
              <label for="matches_played">Matches</label>
              <input type="number" class="form-control" id="matches_played" required>
            </div>
            <div class="form-group">
              <label for="wins">Wins</label>
              <input type="number" class="form-control" id="wins" required>
            </div>
            <div class="form-group">
              <label for="draws">draws</label>
              <input type="number" class="form-control" id="draws" required>
            </div>
            <div class="form-group">
              <label for="losses">Loss</label>
              <input type="number" class="form-control" id="losses" required>
            </div>
            <div class="form-group">
              <label for="points">Points</label>
              <input type="number" class="form-control" id="points" required>
            </div>
            <div class="form-group">
              <label for="goals_scored">Goal Scored</label>
              <input type="number" class="form-control" id="goals_scored" required>
            </div>
            <div class="form-group">
              <label for="goals_conceded">Goal Conceded</label>
              <input type="number" class="form-control" id="goals_conceded" required>
            </div>
            <div class="form-group">
              <label for="goal_difference">Goal Difference</label>
              <input type="number" class="form-control" id="goal_difference" required>
            </div>
            
            <div class="form-group">
              <button type="submit" class="btn btn-success" id="upload" style="height:40px">Add Points</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>