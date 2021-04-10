<style media="screen">
  .table-striped .title{
    margin-top:0;
  }
</style>
<div id="wrapper_card" class="wrapper_card">
  <table class="table table-striped">
        <thead>
            <tr>
              <th>name</th>
              <th>message</th>
              <th>contact</th>
              <th>email</th>              <th>subject</th>

            </tr>
        </thead>
          <tbody>
            <?php
                require_once('inc/db.php');
                $sql = "SELECT * FROM messages ORDER BY id DESC";
                $result = mysqli_query($link, $sql);
                while($row = mysqli_fetch_array($result)){
                $permalink=$row[0];
                $read_message=0;
              ?>
              <tr>
                <td>
                  <div class="title">
                    <p>
                      <?php echo $row['name']; ?>
                    </p>
                  </div>
                  <div class="buttons">
                    <?php
                      if ($read_message==0) {?>
                        <a class="anchor unread_message" href="view_message.php?id=<?php echo $permalink; ?>">view</a>
                    <?php }
                      elseif ($read_message==1) { ?>
                        <a class="anchor normal" href="view_message.php?id=<?php echo $permalink; ?>">view</a>
                    <?php }
                     ?>
                    <a class="anchor danger" href="delete.php?id=<?php echo $permalink ?>&tbl=messages&file=0&back=messages&backid=">delete</a>
                  </div>
                </td>

                <td>
                  <?php echo get_snippet($row['message'],10) ?>
                </td>
                <td>
                  <?php echo $row['contact'] ?>
                </td>
                <td>
                  <?php echo $row['email'] ?>
                </td>                <td>
                  <?php echo $row['subject'] ?>
                </td>
              </tr>
              <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
