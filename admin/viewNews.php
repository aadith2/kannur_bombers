<div >
<div class="header">
  <h2>News</h2>
  <button type="button" class="btn btn-success add-btn" data-toggle="modal" data-target="#myModal">
    Add News
  </button>
</div>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Title</th>
        <th class="text-center">Content</th>
        <th class="text-center">Publication Date</th>
        <th class="text-center">Author</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from club_news";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["title"]?> </td>
      <td><?=$row["content"]?></td>
      <td><?=$row["publication_date"]?></td>
      <td><?=$row["author"]?></td>
      <td><button class="btn btn-primary" style="height:40px" onclick="NewsEditForm('<?=$row['news_id']?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="NewsDelete('<?=$row['news_id']?>')">Delete</button></td>
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
          <h4 class="modal-title">New News</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form   onsubmit="addNews()" method="POST">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" required>
            </div>
            <div class="form-group">
              <label for="content">Content</label>
              <input type="text" class="form-control" id="content" required>
            </div>
            <div class="form-group">
              <label for="publication_date">Published Date</label>
              <input type="datetime-local" class="form-control" id="publication_date" required>
            </div>
            <div class="form-group">
              <label for="author">Author</label>
              <input type="text" class="form-control" id="author" required>
            </div>
          
            <div class="form-group">
              <button type="submit" class="btn btn-success" id="upload" style="height:40px">Add News</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>