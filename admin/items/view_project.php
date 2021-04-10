<form class="" action="upload/updatepost.php?id=<?php echo $post_id; ?>" method="post" enctype="multipart/form-data">

<div class="container-fluid">

  <div class="row">

    <div class="col-sm-8">

        <div class="sidebar_card">

          <div class="head">

            <h4>Post's Information</h4>

          </div>

          <div class="content">

            <div class="input_group">

              <label for="">title<br><span class="small">choose a title for your new post</span></label>

              <input class="input_control" type="text" name="title" value="<?php echo $row['title']; ?>" placeholder="title">

            </div>

            <div class="input_group">

              <label for="">Post's description<br><span class="small">enter description for your post, optional</span></label>

              <textarea name="description"><?php echo $row['text']; ?></textarea>

            </div>

          </div>

          <div class="footer">

          </div>

        </div>
        <div id="thumbs" class="sidebar_card">
          <div class="head">
            <h4>thumbnails</h4>
          </div>
          <div class="content">
            <div class="input_group">
                <label for="">choose file<br><span class="small">choose files of your project</span></label>
                <input style="float:left;margin-left:8px" class="button theme" type="file" name="image_thumbs" value="">
                <input style="float:left;margin-left:8px;margin-top:-2px;" class="button ground" type="submit" name="submit" value="submit">
            </div>
          </div>
          <div class="container-fluid">
            <div class="row">
            <ul class="thumbnails">
              <?php
                  $sql="select * from media where project_id='$post_id'";
                  $result = mysqli_query($link, $sql);
                  while($row = mysqli_fetch_array($result)){ ?>
                    <li><span style="background:url('uploads/<?php echo $row['image'] ?>');
                      background-size:cover;
                      background-repeat:no-repeat;
                      background-position:center;
                      "></span></li>
              <?php    }; ?>
            </ul>
            </div>
          </div>
        </div>
    </div>

    <div class="col-sm-4">

      <div class="sidebar_card">

        <div class="head">

          <h4>update</h4>

        </div>

        <div class="content">

          <div class="input_group">

            <label for="">Status<br><span class="small">current is - <b><?php echo $row['status'] ?></b></span></label>



            <select class="input_control" name="status">

              <option value="<?php echo $row['status'] ?>">select</option>

              <option value="active">active</option>

              <option value="draft">draft</option>

              <option value="featured">featured</option>

            </select>

          </div>

          <div class="input_group">

            <input class="button ground" type="submit" name="submit" value="submit">

          </div>

        </div>

      </div>

      <div class="sidebar_card">

        <div class="head">

          <h4>Image</h4>

        </div>

        <div class="content">

          <div class="thumbnail">

            <img class="img img-responsive" src="<?php echo $image_final; ?>" alt="" />

          </div>

          <div class="input_group">

            <label for="">select image <br><span class="small">choose a file u want to upload</span></label>

            <input class="button theme" type="file" name="image_file" value="">

          </div>

      </div>

    </div>

      <div class="sidebar_card">

        <div class="head">

          <h4>update</h4>

        </div>

        <div class="content">

          <div class="input_group">

            <label for="">category<br><span class="small">choose category of your post <br> current is - <b><?php echo $row['cat']; ?></b></span></label>

            <select class="input_control" name="cat">
              <option value="<?php echo $row['cat']; ?>">select</option>
              <option value="features">feature</option>
              <option value="general">general</option>
            </select>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>

</form>
