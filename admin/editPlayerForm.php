
<div class="container p-5">

<h4>Edit Player Detail</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * FROM players WHERE player_id='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
      // $catID=$row1["cate_id"];
      
?>
<form id="update-player" onsubmit="updatePlayer()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="player_id" value="<?=$row1['player_id']?>" hidden>
    </div>
    <div class="form-group">
      <label for="player_name">Name:</label>
      <input type="text" class="form-control" id="player_name" value="<?=$row1['name']?>">
    </div>
    <div class="form-group">
      <label for="position">Position</label>
      <input type="text" class="form-control" id="position" value="<?=$row1['position']?>">
    </div>
    <div class="form-group">
      <label for="nationality">Nationality</label>
      <input type="text" class="form-control" id="nationality" value="<?=$row1['nationality']?>">
    </div>
    <div class="form-group">
      <label for="dob">Date of Birth</label>
      <input type="date" class="form-control" id="dob" value="<?=$row1['dob']?>">
    </div>
      <div class="form-group">
         <img width='200px' height='150px' src='<?=$row1["image"]?>'>
         <div>
            <label for="existingImage">Choose Image:</label>
            <input type="text" id="existingImage" class="form-control" value="<?=$row1['image']?>" hidden>
            <input type="file" id="newImage" value="">
         </div>
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