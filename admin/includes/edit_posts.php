



<?php 

if(isset($_GET['post_id'])) {

    $the_post_id = $_GET['post_id'];
}


$query = "SELECT * FROM posts WHERE post_id = $the_post_id";
$select_posts_by_id = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_posts_by_id)) {
    $post_id = $row["post_id"];
    $post_author = $row["post_author"];
    $post_title = $row["post_title"];
    $post_category_id = $row["post_category_id"];
    $post_status = $row["post_status"];
    $post_img = $row["post_img"];
    $post_content = $row["post_content"];
    $post_tags = $row["post_tags"];
    $post_comment = $row["post_comment_count"];
    $post_date = $row["post_date"];

}



?>

<html>

<body>


<?php insert_posts(); ?>






                        <form action="" method="post" enctype="multipart/form-data">    
     
     
     <div class="form-group">
        <label for="title">Post Title</label>
         <input value="<?php echo $post_title ?>" type="text" class="form-control" name="post_title">
     </div>

     <div class="form-group">
         
         <label for="post_category">Post Category ID</label>
         <input value="<?php echo $post_category_id ?>" type="text" class="form-control" name="post_category_id">
         
     </div>
     
    <div class="form-group">
        <label for="title">Post Author</label>
        <input value="<?php echo $post_author ?>" type="text" class="form-control" name="post_author">
    </div>
    
   <div class="form-group">
        <label for="post_status">Post Status</label>
        <input value="<?php echo $post_status ?>" type="text" class="form-control" name="post_status">
    </div>
    
   <div class="form-group">
        <label for="post_image">Post Image</label>
        <img width="100" src="../images/<?php echo $post_img; ?>" >

    </div>
  
    <div class="form-group">
        <label for="post_tags">Post Tags</label>
        <input value="<?php echo $post_tags ?>" type="text" class="form-control" name="post_tags">
    </div>
     
     <div class="form-group">
        <label for="post_content">Post Content</label>
        <textarea  name="post_content" id="" cols="30" rows="10" class="form-control">
        <?php echo $post_content ?>
        </textarea>
    </div>
    
    <div class="form-group">
    
    <input type="submit" class="btn btn-primary" name="create_post" value="Publish">
    
    </div>
    
    
    
</form>










                 

</body>

</html>
