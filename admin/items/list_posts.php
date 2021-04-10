<div id="wrapper_card" class="wrapper_card">
  <table class="table table-striped">
        <thead>
            <tr>
              <th>title</th>
              <th>description</th>
              <th>parent</th>
              <th>type</th>
              <th>status</th>
            </tr>
        </thead>
          <tbody>
            <?php
            if ($type=='posts') { ?>
              <?php
                $sql = "SELECT * FROM posts ORDER BY id DESC";
                $result = mysqli_query($link, $sql);
                      while($row = mysqli_fetch_array($result)){                      $permalink=$row[0];                      $name=$row['title'];                      $image=$row['image'];                      $type=$row['type'];                      if ($image=="") {                        $image_final='assets/img/demopost.png';                      }
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
                  <div class="buttons">                    <a class="anchor normal" href="view.php?id=<?php echo $permalink; ?>">edit</a>                    <?php                      if ($type=='project') { ?>                        <a class="anchor danger" href="delete.php?id=<?php echo $permalink ?>&tbl=posts&file=2&back=list&backid=posts">delete </a>                      <?php }                      else { ?>                        <a class="anchor danger" href="delete.php?id=<?php echo $permalink ?>&tbl=posts&file=1&back=list&backid=posts">delete</a>                      <?php } ?>                  </div>
                </td>
                  <td><?php echo get_snippet($row['text'],5); ?></td>
                  <td><?php echo $row['parent']; ?></td>
                  <td><?php echo $row['type']; ?></td>
                  <td><?php echo $row['status']; ?></td>
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