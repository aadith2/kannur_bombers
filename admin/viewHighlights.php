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
        <th class="text-center">URL</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from club_highlights";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["url"]?></td>
      <td><button class="btn btn-primary" style="height:40px" onclick="HighlightsEditForm('<?=$row['highlights_id']?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="HighlightsDelete('<?=$row['highlights_id']?>')">Delete</button></td>
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
          <h4 class="modal-title">New Highlight</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addHighlight()" method="POST">
            <div class="form-group">
              <label for="Highlight_url">Highlight Url</label>
              <input type="text" class="form-control" id="Highlight_url" required>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>