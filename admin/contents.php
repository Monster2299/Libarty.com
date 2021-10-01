<div class="tables">
<ul>
    <li><table class="announcementst">
                            <thead>
                                <tr>
                                <th>Id</th>
                                <th>announcements</th>
                                <th>Date</th>
                                </tr>
                            </thead>
                            <hr>
                            <tbody>
                                <tr>
                                    <?php
                                  
                                    $queryanc = "SELECT * FROM anc";
                                    $seq = mysqli_query($connection,$queryanc);
                                    while($row = mysqli_fetch_assoc($seq)){
                                        $announcements = $row['announcements'];
                                        $date = $row['date'];
                                        $id = $row['id'];
                                     echo "<td>$id</td>";
                                     echo "<td>$announcements</td>";
                                     echo "<td>$date</td>";
                                     echo "<td><a href='uploadpage.php?deletean={$id}'</a>Delete</td>";
                                     echo "<td><a href='uploadpage.php?editan={$id}'</a>Edit</td>";
                                     
                                        
                                    echo "</tr>";
                                echo "</tbody>";
                                    }
                                    ?>
                                        <?php
                                if(isset($_GET['deletean'])){
                                 $an_delete = $_GET['deletean'];
                                 $query= "DELETE FROM `anc` WHERE id = {$an_delete}";
                                    $delete_query = mysqli_query($connection,$query);
                                 header("Location:uploadpage.php");
                                 if(!$delete_query){
                                 die(mysqli_error($connection)); 
                                 }


                                  }
              
            
                                 ?>
                            
                             <div class="append">
                                 <?php
                                  if(isset($_GET['editan'])){
                                    $an_edit = $_GET['editan'];
                                     $queryanc = "SELECT * FROM anc where id =  $an_edit";
                                     $seq = mysqli_query($connection,$queryanc);
                                     while($row = mysqli_fetch_assoc($seq)){
                                         $announcements = $row['announcements'];
                                    ?>
                                 
                                 <form action="uploadpage.php" method="post">
                                 <label for="announcements">Announcements</label>
                                 <textarea name="anu" id="" cols="50" rows="2"><?php echo $announcements; ?>
                                 </textarea>
                                 <input type="submit" name="anupdate" value="update">
                                 
                                 </form>
                                 <?php }
                                     } ?> 
                                 </div>
                                  <?php
                                   if(isset($_GET['editan'])){
                                    $an_edit = $_GET['editan'];
                                 if(isset($_POST['anupdate'])){
                                $anu = $_POST['anu'];
                                $now = date_create()->format('y-m-d H:i:s');
                                $now = mysqli_real_escape_string($connection,  $now);
                                $query4edit ="UPDATE `anc` SET `announcements` = '$anu' WHERE `anc`.`id` = $an_edit";

                              $res = mysqli_query($connection,$query4edit);
                                if(!$res){
                                    echo "error in res";
                                }
                                }   
                            }



                              
                                ?>
                                

</div>


</li>
<hr>
    <li><table class="posts" >
                            <thead>
                                <tr>
                                <th>Id</th>
                                <th>Informations</th>
                                <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                  
                                    $queryanc = "SELECT * FROM inf";
                                    $seq = mysqli_query($connection,$queryanc);
                                    while($row = mysqli_fetch_assoc($seq)){
                                        $inf = $row['inform'];
                                        $date = $row['date'];
                                        $id = $row['id'];
                                     echo "<td>$id</td>";
                                     echo "<td>$inf</td>";
                                     echo "<td>$date</td>";
                                     echo "<td><a href='uploadpage.php?deleteinf={$id}'</a>Delete</td>";
                                     echo "<td><a href='uploadpage.php?edit={$id}'</a>Edit</td>";
                                    
                                        
                                    echo "</tr>";
                                echo "</tbody>";
                                    }
                                    ?>
                                        <?php
                                if(isset($_GET['deleteinf'])){
                                 $inf_delete = $_GET['deleteinf'];
                                 $query= "DELETE FROM `inf` WHERE id = {$inf_delete}";
                                    $delete_query = mysqli_query($connection,$query);
                                 header("Location:uploadpage.php");
                                 if(!$delete_query){
                                 die(mysqli_error($connection)); 
                                 }


                                  }
              
            
                                 ?>
                                  <div class="append">
                                 <?php
                                  if(isset($_GET['edit'])){
                                    $inf_edit = $_GET['edit'];
                                     $queryinf = "SELECT * FROM inf where id =  $inf_edit";
                                     $seq = mysqli_query($connection,$queryanc);
                                     while($row = mysqli_fetch_assoc($seq)){
                                         $inf = $row['inform'];
                                    ?>
                                 
                                 <form action="uploadpage.php" method="post">
                                 <label for="information">information</label>
                                 <textarea name="infu" id="" cols="50" rows="2"><?php echo $inf; ?>
                                 </textarea>
                                 <input type="submit" name="infupdate" value="update">
                                 
                                 </form>
                                     <?php }
                                     } ?>
                                 </div>
                                  <?php
                                 if(isset($_POST['infupdate'])){
                                 $anu = $_POST['infu'];
                                $query4edit ="UPDATE `inf` SET `inform` = '$inf' WHERE `inf`.`id` = $inf_edit;";
                              $res = mysqli_query($connection,$query4edit);
                                if(!$res){
                                    echo "error in res";
                                }
                                }
                                   
                                   
                                   
                                   
                                ?>
                                   

</div>


</li>
<hr>
    <li><table class="posts" >
                            <thead>
                                <tr>
                                <th>Id</th>
                                <th>News</th>
                                <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                  
                                    $queryanc = "SELECT * FROM news";
                                    $seq = mysqli_query($connection,$queryanc);
                                    while($row = mysqli_fetch_assoc($seq)){
                                        $news = $row['news'];
                                        $date = $row['date'];
                                        $id = $row['id'];
                                     echo "<td>$id</td>";
                                     echo "<td>$news</td>";
                                     echo "<td>$date</td>";
                                     echo "<td><a href='uploadpage.php?deletens={$id}'</a>Delete</td>";
                                     echo "<td><a href='posts.php?source=edit_post&p_id={$id}'</a>Edit</td>";
                                        
                                    echo "</tr>";
                                echo "</tbody>";
                                    }
                                    ?>
                                        <?php
                                if(isset($_GET['deletens'])){
                                 $news_delete = $_GET['deletens'];
                                 $query= "DELETE FROM `news` WHERE id = {$news_delete}";
                                    $delete_query = mysqli_query($connection,$query);
                                 header("Location:uploadpage.php");
                                 if(!$delete_query){
                                 die(mysqli_error($connection)); 
                                 }


                                  }
              
            
                                 ?>
                                   

</div>


</li>
<hr>
    <li><table class="attachmentst" >
                            <thead>
                                <tr>
                                <th>Id</th>
                                <th>attachments</th>
                                <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                  
                                    $queryanc = "SELECT * FROM pdf";
                                    $seq = mysqli_query($connection,$queryanc);
                                    while($row = mysqli_fetch_assoc($seq)){
                                        $pdf = $row['pdf'];
                                        $date = $row['date'];
                                        $id = $row['id'];
                                     echo "<td>$id</td>";
                                     echo "<td>$pdf</td>";
                                     echo "<td>$date</td>";
                                     echo "<td><a href='posts.php?delete={$id}'</a>Delete</td>";
                                     echo "<td><a href='posts.php?source=edit_post&p_id={$id}'</a>Edit</td>";
                                        
                                    echo "</tr>";
                                echo "</tbody>";
                                    }
                                    ?>
                                   

</div>


</li>
<hr>
    <li><table class="posts" >
                            <thead>
                                <tr>
                                <th>Id</th>
                                <th>bulletine</th>
                                <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                  
                                    $queryanc = "SELECT * FROM blt";
                                    $seq = mysqli_query($connection,$queryanc);
                                    while($row = mysqli_fetch_assoc($seq)){
                                        $bt = $row['bt'];
                                        $date = $row['date'];
                                        $id = $row['id'];
                                     echo "<td>$id</td>";
                                     echo "<td>$bt</td>";
                                     echo "<td>$date</td>";
                                     echo "<td><a href='uploadpage.php?deletebt={$id}'</a>Delete</td>";
                                     echo "<td><a href='posts.php?source=edit_post&p_id={$id}'</a>Edit</td>";
                                        
                                    echo "</tr>";
                                echo "</tbody>";
                                    }
                                    ?>
                                     <?php
                                if(isset($_GET['deletebt'])){
                                 $bt_delete = $_GET['deletebt'];
                                 $query= "DELETE FROM `blt` WHERE id = {$bt_delete}";
                                    $delete_query = mysqli_query($connection,$query);
                                 header("Location:uploadpage.php");
                                 if(!$delete_query){
                                 die(mysqli_error($connection)); 
                                 }


                                  }
              
            
                                 ?>
                                   

</div>


</li>
<hr>
    <li><table class="posts" >
                            <thead>
                                <tr>
                                <th>Id</th>
                                <th>images</th>
                                <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                  
                                    $queryanc = "SELECT * FROM image";
                                    $seq = mysqli_query($connection,$queryanc);
                                    while($row = mysqli_fetch_assoc($seq)){
                                        $image = $row['image'];
                                        $date = $row['date'];
                                        $id = $row['id'];
                                     echo "<td>$id</td>";
                                     echo "<td>$image</td>";
                                     echo "<td>$date</td>";
                                     echo "<td><a href='uploadpage.php?delete={$id}'</a>Delete</td>";
                                     echo "<td><a href='posts.php?source=edit_post&p_id={$id}'</a>Edit</td>";
                                        
                                    echo "</tr>";
                                echo "</tbody>";
                                    }
                                    ?>
                              
                           
                                   

</div>


</li>
<hr>
</ul>