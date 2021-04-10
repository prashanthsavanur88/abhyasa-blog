<div id="footer_upper"></div>
<div id="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="brand">
        </div>
      </div>
      <div class="col-sm-3">
        
		<div class="intro">
          <div class="head">
            <h3>find <span>us</span> on</h3>
          </div>
          <p>
           
          </p>
        </div>
        <div class="social">
          <div class="icon">
            <img src="assets/img/social/facebook.png" alt="">
          </div>
          <div class="icon">
            <img src="assets/img/social/gp.png" alt="">
          </div>
          <div class="icon">
            <img src="assets/img/social/pinterest.png" alt="">
          </div>
          <div class="icon">
            <img src="assets/img/social/twitter.png" alt="">
          </div>
        </div>
		<br>
		<br>
		<br>
		<div class="head">
          <h3>Keep <span>in touch</span></h3>
        </div>
        <div class="infobox">
          <div class="icon">
            <img src="assets/img/icons/mail.png" alt="">
          </div>
          <div class="text">
            <p>
              contact@abhyasayogaretreat.com
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="head">
          <h3>Contact <span>us</span></h3>
        </div>
        <div class="form">
          <form id="contact" action="query.php" method="post">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <input class="input" type="text" name="nicename" value="" placeholder="your name">
                </div>
                <div class="col-sm-6">
                  <input class="input" type="text" name="contact" value="" placeholder="contact number">
                </div>
                <div class="col-sm-6">
                  <input class="input" type="text" name="email" value="" placeholder="email">
                </div>
                <div class="col-sm-6">
                  <input class="input" type="text" name="subject" value="" placeholder="subject">
                </div>
                <div class="col-sm-12">
                  <textarea class="input" name="message" rows="5" cols="80"></textarea>
                </div>
              </div>
            </div>
            <input class="button" type="submit" name="" value="send">
          </form>
          <div class="intro">
            <?php
              if (isset($_GET['t'])) {
                echo '<div class="head">
                  <h3><span>thank you for contacting us</span></h3>
                </div>';
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="footer_strip">
  <div class="container">
    <div class="row">
      <div class="copyright pull-left">
        <h3>Copyright © 2018 abhyasayoga, All Rights Reserved.</h3>
      </div>
     
    </div>
  </div>
</div>
