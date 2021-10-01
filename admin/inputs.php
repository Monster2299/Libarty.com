<ul>
    <li><div class="announcements">
    <form action="uploadpage.php" method="post">
        <label for="announcements">Announcements</label><br>
       <textarea name="announcement" id="ann" cols="30" rows="5" required></textarea>
        <input type="submit" name="an" value="submit">
        <?php 
     
        if(isset($_POST['an'])){
            $now = date_create()->format('y-m-d H:i:s');
            $now = mysqli_real_escape_string($connection,  $now);
          $annon = $_POST['announcement'];
          $annon = mysqli_real_escape_string($connection,$annon);
          
          $query_an ="INSERT INTO `anc` (`id`, `announcements`, `date`) VALUES (NULL, '$annon', '$now');";

          $result = mysqli_query($connection,$query_an);
        if(!$result){
            echo "error in res";
        }
        else{
            echo "submitted";
        }
        }
        
        ?>
    </form>
</div></li>
    <li><div class="announcements">
    <form action="uploadpage.php" method="post">
        <label for="information">information</label><br>
       <textarea name="information" id="inf" cols="30" rows="5" required></textarea>
        <input type="submit" name="inf" value="submit">
        <?php 
       
        if(isset($_POST['inf'])){
            $now = date_create()->format('y-m-d H:i:s');
            $now = mysqli_real_escape_string($connection,  $now);
          $info = $_POST['information'];
          $info = mysqli_real_escape_string($connection,$info);
          
          $query_inf ="INSERT INTO `inf` (`id`, `inform`, `date`) VALUES (NULL, '$info', '$now');";

          $result = mysqli_query($connection,$query_inf);
        if(!$result){
            echo "error in res";
        }
        else{
            echo "submitted";
        }
        }
        
        ?>
    </form>
</div></li>
    <li>
<div class="announcements">
    <form action="uploadpage.php" method="post">
        <label for="news">News</label><br>
       <textarea name="news" id="news" cols="30" rows="5" required></textarea>
        <input type="submit" name="ns" value="submit"><br>
        <?php 
       
       if(isset($_POST['ns'])){
           $now = date_create()->format('y-m-d H:i:s');
           $now = mysqli_real_escape_string($connection,  $now);
         $news = $_POST['news'];
         $news = mysqli_real_escape_string($connection,$news);
        
         $query_ns ="INSERT INTO `news` (`id`, `news`, `date`) VALUES (NULL, '$news', '$now');";

         $result = mysqli_query($connection,$query_ns);
       if(!$result){
           echo "error in res";
       }
       else{
           echo "submitted";
       }
       }
    
       ?>
    </form>
</div></li>
    <li>
<div class="announcements">
<form action="uploadpage.php" method="post" enctype="multipart/form-data">

<label for="pdf">upload a pdf</label><br>
<input type="file" name="pdf" placeholder="select a pdf" id="file" style="margin-left:0px;margin-top:30px" required>
<input type="submit" name="file" value="upload" style="margin-left:0px;width:100px;height:25px">

<?php
 if(isset($_POST['file'])){
    $now = date_create()->format('y-m-d H:i:s');
    $now = mysqli_real_escape_string($connection,  $now);
     $post_pdf = $_FILES['pdf']['name'];
     $post_pdf = str_replace(' ','_',$post_pdf);
    $post_pdf_temp = $_FILES['pdf']['tmp_name'];
    move_uploaded_file($post_pdf_temp,"codes/$post_pdf" );
    $news = mysqli_real_escape_string($connection,$post_pdf);

  $query_pdf ="INSERT INTO `pdf` (`id`, `pdf`, `date`) VALUES (NULL, '$post_pdf', '$now');";

  $result = mysqli_query($connection,$query_pdf);
if(!$result){
    echo "error in res";
}
else{
    echo "submitted";
}
}

?>
</form>
</div>
</li>
<li>
<div class="announcements">
<form action="uploadpage.php" method="post" enctype="multipart/form-data">

<label for="image">upload a image</label><br>
<input type="file" name="image" placeholder="select a image" id="file" style="margin-left:0px;margin-top:30px" required>
<input type="submit" name="img" value="upload" style="margin-left:0px;width:100px;height:25px">

<?php
 if(isset($_POST['img'])){
    $now = date_create()->format('y-m-d H:i:s');
    $now = mysqli_real_escape_string($connection,  $now);
     $post_image = $_FILES['image']['name'];
     $post_image = str_replace(' ','_',$post_image);
    $post_pdf_temp = $_FILES['image']['tmp_name'];
    move_uploaded_file($post_pdf_temp,"images/$post_image" );
    $news = mysqli_real_escape_string($connection,$post_image);

  $query_pdf ="INSERT INTO `image` (`id`, `image`, `date`) VALUES (NULL, '$post_image', '$now');";

  $result = mysqli_query($connection,$query_pdf);
if(!$result){
    echo "error in res";
}
else{
    echo "submitted";
}
}

?>
</form>
</div>
</li>
<li>
<div class="announcements">
    <form action="uploadpage.php" method="post">
        <label for="bulletine">Bulletine</label><br>
       <textarea name="bulletine" id="bulletine" cols="30" rows="5" required></textarea>
        <input type="submit" name="bt" value="submit"><br>
        <?php 
       
       if(isset($_POST['bt'])){
           $now = date_create()->format('y-m-d H:i:s');
           $now = mysqli_real_escape_string($connection,  $now);
         $bt = $_POST['bulletine'];
         $bt = mysqli_real_escape_string($connection,$bt);
        
         $query_ns ="INSERT INTO `blt` (`id`, `bt`, `date`) VALUES (NULL, '$bt', '$now');";

         $result = mysqli_query($connection,$query_ns);
       if(!$result){
           echo "error in res";
       }
       else{
           echo "submitted";
       }
       }
    
       ?>
    </form>
</div></li>
</ul>
