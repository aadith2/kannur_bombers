
<div class="container p-5">

<h4>Edit Highlight Detail</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * FROM club_highlights WHERE highlights_id='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
      // $catID=$row1["cate_id"];
      
?>
<form id="update-player" onsubmit="updateHighlight()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="highlights_id" value="<?=$row1['highlights_id']?>" hidden>
    </div>
    <div class="form-group">
      <label for="url">URL</label>
      <input type="text" class="form-control" id="url" value="<?=$row1['url']?>">
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