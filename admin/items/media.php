<div class="container-fluid">
  <div class="col-sm-6 col-sm-offset-1">
    <form action="upload/media.php" method="post" enctype="multipart/form-data">
      <div style="padding:25px;" class="sidebar_card">
        <div class="head">
          <h4>media information</h4>
        </div>
        <div class="content">
          <div class="input_group">
            <label for="">image title<br><span class="small">choose a title, leave balank for default name</span></label>
            <input class="input_control" type="text" name="name" value="" placeholder="title">
          </div>
          <div class="input_group">
            <label for="">image description<br><span class="small">enter description for your image, optional</span></label>
            <input class="input_control" type="text" name="des" value="" placeholder="description">
          </div>
          <div class="input_group">
            <label for="">category<br><span class="small">choose a location for your image</span></label>
            <select class="input_control" name="cat">
              <option value="">select category</option>
              <option value="banner">banner</option>
              <option value="partners">partners</option>
              <option value="gallery">gallery</option>
            </select>
          </div>
          <div class="input_group">

            <label for="">enter event date</label>

            <input class="input_control" type="text" name="event_date" value="">

          </div>

          <div class="input_group">
            <label for="">select image <br><span class="small">choose a file u want to upload</span></label>
            <input class="button theme" type="file" name="image_file" value="" required="required">
          </div>
          <div class="input_group">
            <input class="button ground" type="submit" name="submit" value="submit">
          </div>
        </div>
        <div class="footer">
        </div>
      </div>
    </form>
  </div>
</div>