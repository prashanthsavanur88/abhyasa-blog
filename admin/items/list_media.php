      <div id="wrapper_card" class="wrapper_card">
        <table class="table table-striped">
              <thead>
                  <tr>
                    <th>image</th>
                    <th>title</th>
                    <th>description</th>
                    <th>category</th>
                  </tr>
              </thead>
                <tbody>
                  <?php
                  if ($type=='media') { ?>
                    <?php
                      $sql = "SELECT * FROM media where not cat='addon' ORDER BY id DESC";
                      $result = mysqli_query($link, $sql);
                            while($row = mysqli_fetch_array($result)){
                            $permalink=$row[0];
                            $name=$row['image_name'];
                            $image=$row['image'];
                            if ($image=="") {
                              $image_final=0;
                            }
                            else {
                              $image_final='uploads/'.$row['image'];
                          }
                    ?>
                    <tr>
                      <td>
                        <div class="thumbnail">
                          <img class="img img-responsive" src="<?php echo $image_final; ?>" alt="" />
                        </div>
                        <br>
                        <div class="title">
                          <p>
                            <?php echo $name; ?>
                          </p>
                        </div>
                        <div class="buttons">
                          <a class="anchor danger" href="delete.php?id=<?php echo $permalink ?>&tbl=media&file=1&back=list&backid=media">delete</a>
                        </div>
                      </td>

                        <td><?php echo get_snippet($row['caption'],10)  ?></td>
                        <td><?php echo get_snippet($row['text'],10)  ?></td>
                        <td><?php echo $row['cat']; ?></td>
                    </tr>
                    <?php }?>
                <?php  }
                  ?>
                </tbody>
              </table>
      </div>
    </div>
  </div>
</div>
