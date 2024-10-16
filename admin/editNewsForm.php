
<div class="container p-5">

<h4>Edit News Detail</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * FROM club_news WHERE news_id='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
      // $catID=$row1["cate_id"];
      
?>
<form id="update-player" onsubmit="updateNews()">
	<div class="form-group">
      <input type="text" class="form-control" id="news_id" value="<?=$row1['news_id']?>" hidden>
    </div>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" value="<?=$row1['title']?>">
    </div>
    <div class="form-group">
      <label for="content">Content</label>
      <input type="text" class="form-control" id="content" value="<?=$row1['content']?>">
    </div>
    <div class="form-group">
      <label for="publication_date">Publication Date</label>
      <input type="datetime-local" class="form-control" id="publication_date" value="<?=$row1['publication_date']?>">
    </div>
    <div class="form-group">
      <label for="author">Author</label>
      <input type="text" class="form-control" id="author" value="<?=$row1['author']?>">
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