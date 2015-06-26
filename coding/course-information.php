<?php include 'part/head.php'; ?>
<body class="subpage classroom">
<?php include 'part/helper/no-js.php'; ?>
<?php include 'part/helper/browsehappy.php'; ?>
<?php include 'part/header.php'; ?>

<div class="container">
  <div class="content nav-left clearfix">
    <?php include 'part/sub-nav.php'; ?>
    <div class="main">
      <div class="panel panel-table">
        <div class="panel-head">
          <div class="summary clearfix">
            <div class="right">
              <?php include 'part/button/edit.php'; ?>
            </div>
            <h3 class="heading3">COURSE INFORMATION: <span class="small">New Testment 101 - Sample Class</span></h3>
          </div>
        </div>
        <div class="panel-body inner">
          <p>The letters to Hebrews and by James, John, Peter and Jude show that Paul was not the only early theologian. The Revelation to John, properly handled, gives a uniquely valuable, though challenging perspective. <br />Download the syllabus below.</p>
        </div>
        <div class="panel-body inner">
          <h4 class="heading4">Files</h4>
          <div class="line clearfix"><a href="" class="file-name">New Testment 101 - Sample Class</a> 
            <div class="line-actions">
              <?php include 'part/button/delete.php'; ?>
            </div>
          </div>
          <div class="line clearfix"><a href="" class="file-name">Old Testament 101</a> 
            <div class="line-actions">
              <?php include 'part/button/delete.php'; ?>
            </div>
          </div>
          <div class="line clearfix"><a href="" class="file-name">Missions 101</a> 
            <div class="line-actions">
              <?php include 'part/button/delete.php'; ?>
            </div>
          </div>
          <div class="line clearfix"><a href="" class="file-name">Release 101</a> 
            <div class="line-actions">
              <?php include 'part/button/delete.php'; ?>
            </div>
          </div>
        </div>
        <div class="panel-body inner">
          <form action="">
            <strong>Upload File:</strong>
            <?php include 'part/upload-base.php'; ?>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'part/footer.php'; ?>
</body>
</html>