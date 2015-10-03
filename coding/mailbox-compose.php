<?php 
  $category = 'mailbox'; 
  $unread = 3; 
?>
<?php include 'part/head.php'; ?>
<body class="subpage classroom">
<?php include 'part/helper/no-js.php'; ?>
<?php include 'part/helper/browsehappy.php'; ?>
<?php include 'part/header.php'; ?>

<div class="container">
  <div class="content nav-left clearfix">
    <?php include 'part/sub-nav-mailbox.php'; ?>
    <div class="main-mailbox">
      <div class="panel panel-pure discussion-post">
        <div class="full-email">
          <h2 class="email-title">Compose message</h2>
          <form action="">
            <ol class="form-aligned form-compose">
              <li>
                <label for="" class="control-label">From</label>
                <div class="control-field"><input type="email"></div>
              </li>
              <li>
                <label for="" class="control-label">To</label>
                <div class="control-field"><input type="email"></div>
              </li>
              <li>
                <label for="" class="control-label">Subject</label>
                <div class="control-field"><input type="text"></div>
              </li>
              <li>
                <label for="" class="control-label">&nbsp;</label>
                <div class="control-field"><textarea name="" id="" cols="50" rows="4"></textarea></div>
              </li>
              <li>
                <label for="" class="control-label">&nbsp;</label>
                <input type="submit" value="Send Message" class="button-danger">
              </li>
            </ol>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'part/footer.php'; ?>
</body>
</html>