<?php include 'part/head.php'; ?>
<body class="subpage classroom">
<?php include 'part/helper/no-js.php'; ?>
<?php include 'part/helper/browsehappy.php'; ?>
<?php include 'part/header.php'; ?>

<div class="container">
  <div class="content nav-left clearfix">
    <?php include 'part/sub-nav.php'; ?>
    <div class="main">
      <div class="panel">
        <div class="panel-head">
          <!-- <span class="abc-home icons-lg"></span> -->
          <h3 class="heading3">CLASS FILES: <span class="small">New Testment 101 - Sample Class</span></h3>
        </div>
        <div class="panel-body inner">
          <h4 class="heading4">Folder Name</h4>
          <div class="line clearfix">
            <span class="abc-folder gray"> </span>
            <a href="" class="file-name">New Testment 101 - Sample Class</a> 
            <div class="line-actions">
              <?php include 'part/button/edit.php'; ?>
              <?php include 'part/button/delete.php'; ?>
            </div>
          </div>
          <div class="line clearfix">
            <span class="abc-folder gray"> </span>
            <a href="" class="file-name">Old Testament 101</a> 
            <div class="line-actions">
              <?php include 'part/button/edit.php'; ?>
              <?php include 'part/button/delete.php'; ?>
            </div>
          </div>
          <div class="line clearfix">
            <span class="abc-folder gray"> </span>
            <a href="" class="file-name">Missions 101</a> 
            <div class="line-actions">
              <?php include 'part/button/edit.php'; ?>
              <?php include 'part/button/delete.php'; ?>
            </div>
          </div>
          <div class="line clearfix">
            <span class="abc-folder gray"> </span>
            <a href="" class="file-name">Release 101</a> 
            <div class="line-actions">
              <?php include 'part/button/edit.php'; ?>
              <?php include 'part/button/delete.php'; ?>
            </div>
          </div>
        </div>
        <div class="panel-body inner">
          <form action="">
            <ul>
              <li>
                <h4 class="heading4">Folder Name</h4>
                <input type="text" name="" id="" placeholder="Title" class="full">
              </li>
              <li>
                <label for=""><input type="checkbox" name="" id="">Click this box to limit upload access to Instructors only </label>
              </li>
              <li>
                <h4 class="heading4">Folder Description</h4>
                <textarea name="editor" id="editor" cols="30" rows="10" class="full">Sample text goes here ...</textarea></li>
              <li>
                <?php include 'part/upload-base.php'; ?>
              </li>
              <li><button class="button button-danger">Create</button></li>
            </ul>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'part/footer.php'; ?>
<!-- CKEditor 
    http://ckeditor.com/
    http://docs.ckeditor.com/#!/guide
    /*1. full version
    /*2. basic version
    -->
<!-- <script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script> /*1 -->
<!-- <script src="//cdn.ckeditor.com/4.4.7/basic/ckeditor.js"></script> /*2 -->
<script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace('editor');
</script>
</body>
</html>
