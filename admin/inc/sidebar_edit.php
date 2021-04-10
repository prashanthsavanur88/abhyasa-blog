<div class="col-sm-4">
<div class="col-sm-12">
  <div class="sidebar_card">
    <div class="head">
      <h4>Publish</h4>
    </div>
    <div class="content">
      <input class="button reveal" type="submit" value="save draft"></input>
      <input class="button themedark reveal pull-right" type="submit" value="Publish"></input>
      <div style="display:none;" class="values">
        <div class="name">
          status
        </div>
        <div class="name">
          values
        </div>
      </div>
    </div>
    <div class="footer">
      <a class="anchor danger" href="#">trash</a>
      <i></i>
      <a class="anchor normal  pull-right" href="#">publish delay</a>
    </div>
  </div>
</div>
<div class="col-sm-12">
  <div class="sidebar_card">
    <div class="head">
      <h4>Categories</h4>
    </div>
    <div class="content">
      <div class="values">
        <div class="name">
          <?php echo $post_cat; ?>
        </div>
      </div>
      <div class="input_group">
        <select class="input_control" name="cat">
          <?php include("cats.php") ?>
        </select>
      </div>
      </div>
    <div class="footer">
      <a class="anchor normal" href="#">add category</a>
    </div>
  </div>
</div>
<div class="col-sm-12">
  <div class="sidebar_card">
    <div class="head">
      <h4>Duration</h4>
    </div>
    <div class="content">
      <div class="input_group">
        <input class="input_control" type="text" name="duration" value="<?php echo $post_duration; ?>" placeholder="duration">
      </div>
    </div>
    <div class="footer">
      <a class="anchor normal" href="#">add category</a>
    </div>
  </div>
</div>
<div class="col-sm-12">
  <div class="sidebar_card">
    <div class="head">
      <h4>Itinerary</h4>
    </div>
    <div class="content">
      <div class="values">
        <?php echo get_snippet($post_iti); echo '.....';?>
      </div>
    </div>
    <div class="footer">
      <a class="anchor normal" href="edit_sub_cat.php?id=<?php echo $permalink; ?>&sub=iti">edit</a>
    </div>
  </div>
</div>
<div class="col-sm-12">
  <div class="sidebar_card">
    <div class="head">
      <h4>Includes</h4>
    </div>
    <div class="content">
      <div class="values">
        <?php echo get_snippet($post_inc); echo '.....';?>
      </div>
    </div>
    <div class="footer">
      <a class="anchor normal" href="edit_sub_cat.php?id=<?php echo $permalink; ?>&sub=inc">edit</a>
    </div>
  </div>
</div>
<div class="col-sm-12">
  <div class="sidebar_card">
    <div class="head">
      <h4>Pricing</h4>
    </div>
    <div class="content">
      <div class="values">
        <?php echo get_snippet($post_inc); echo '.....';?>
      </div>
    </div>
    <div class="footer">
      <a class="anchor normal" href="edit_sub_cat.php?id=<?php echo $permalink; ?>&sub=price">edit</a>
    </div>
  </div>
</div>
</div>
<div class="">
  <input type="hidden" name="page" value="no">
</div>
</form>
