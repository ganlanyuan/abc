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
        <span class="abc-read icons-lg"></span>
          <h3 class="heading3">Edit course announcements</h3>
        </div>
        <div class="panel-body inner">
          <form action="">
            <ul>
              <li><input type="text" name="" id="" placeholder="Title" class="full"></li>
              <li></li>
              <li><textarea name="editor" id="editor" cols="30" rows="10" class="full">Sample text goes here ...</textarea></li>
              <li><button class="button button-normal">Back</button> <button class="button button-danger">Save change</button></li>
              <li>
                <?php include 'part/upload-standard.php'; ?>
              </li>
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