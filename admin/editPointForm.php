
<div class="container p-5">

<h4>Edit Point Detail</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * FROM points_table WHERE points_table_id='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
      // $catID=$row1["cate_id"];
      
?>
<form id="update-point" onsubmit="updatePoint()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="points_table_id" value="<?=$row1['points_table_id']?>" hidden>
    </div>
    <div class="form-group">
      <label for="matches_played">Matches</label>
      <input type="number" class="form-control" id="matches_played" value="<?=$row1['matches_played']?>">
    </div>
    <div class="form-group">
      <label for="wins">Wins</label>
      <input type="number" class="form-control" id="wins" value="<?=$row1['wins']?>">
    </div>
    <div class="form-group">
      <label for="draws">Draws</label>
      <input type="text" class="form-control" id="draws" value="<?=$row1['draws']?>">
    </div>
    <div class="form-group">
      <label for="losses">Loss</label>
      <input type="number" class="form-control" id="losses" value="<?=$row1['losses']?>">
    </div>
    <div class="form-group">
      <label for="points">Points</label>
      <input type="number" class="form-control" id="points" value="<?=$row1['points']?>">
    </div>
    <div class="form-group">
      <label for="goals_scored">Goal Scored</label>
      <input type="number" class="form-control" id="goals_scored" value="<?=$row1['goals_scored']?>">
    </div>
    <div class="form-group">
      <label for="goals_conceded">Goals Conceded</label>
      <input type="number" class="form-control" id="goals_conceded" value="<?=$row1['goals_conceded']?>">
    </div>
    <div class="form-group">
      <label for="goal_difference">Goal Difference</label>
      <input type="number" class="form-control" id="goal_difference" value="<?=$row1['goal_difference']?>">
    </div>
      
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update Item</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

    </div>