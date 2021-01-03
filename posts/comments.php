<iframe src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Flocalhost%2Fblog%2Fposts%2Fposts.php&width=450&layout=standard&action=like&size=small&share=true&height=35&appId" width="450" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
<?php
    /* fetch comments from db */
      $query="SELECT * FROM comments WHERE postID='$id'  ";
      $result=mysqli_query($conn , $query);

      if($result) {
        echo "
        <div class='panel-footer'>
        Comments
        </div>
        ";
          if(mysqli_num_rows($result) > 0) {
            while($comment=mysqli_fetch_assoc($result)) {
                include("../include/frame_comment.php");
            }
          }
      } else {
        echo "Query failed";
      }
?>

