
<div class="container p-5">

<h4>Edit Sponser Detail</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * FROM sponsers WHERE sponser_id='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
      // $catID=$row1["cate_id"];
      
?>
<form id="update-player" onsubmit="updateSponser()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="sponser_id" value="<?=$row1['sponser_id']?>" hidden>
    </div>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" value="<?=$row1['name']?>">
    </div>
      <div class="form-group">
         <img width='200px' height='150px' src='<?=$row1["logo"]?>'>
         <div>
            <label for="existingImage">Choose Image:</label>
            <input type="text" id="existingImage" class="form-control" value="<?=$row1['logo']?>" hidden>
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