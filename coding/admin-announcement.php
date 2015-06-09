<?php include 'part/head.php'; ?>
<body class="database with-main-nav">
<?php include 'part/helper/no-js.php'; ?>
<?php include 'part/helper/browsehappy.php'; ?>
<?php include 'part/header.php'; ?>
<?php include 'part/main-nav.php'; ?>

<div class="container">
  <div class="panel">
    <div class="panel-head">
    <span class="abc-read icons-lg"></span>
      <h3 class="heading3">create new course announcements</h3>
    </div>
    <div class="panel-body inner">
      <form action="">
        <ul>
          <li><input type="text" name="" id="" placeholder="Title" class="full"></li>
          <li></li>
          <li><textarea name="editor" id="editor" cols="30" rows="10" class="full">Sample text goes here ...</textarea></li>
          <li><?php include 'part/upload-base.php'; ?></li>
          <li><button class="button button-alert">Create</button></li>
        </ul>
      </form>
    </div>
  </div>
  <div class="panel panel-table">
    <div class="panel-head"><h3 class="heading3">Announcements</h3></div>
    <div class="panel-body">
      <table class="table-striped table-responsive table-student">
        <thead>
          <tr>
            <th>Announcements</th>
            <th>Operations</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><span class="abc-speaker icons-fill icons-sm"></span> new announcement 3</td>
            <td><span class="button button-normal"><span class="abc-pencil"></span>Edit</span> <span class="button button-alert"><span class="abc-delete"></span>Delete</span></td>
          </tr>
          <tr>
            <td><span class="abc-speaker icons-fill icons-sm"></span> new announcement 2</td>
            <td><span class="button button-normal"><span class="abc-pencil"></span>Edit</span> <span class="button button-alert"><span class="abc-delete"></span>Delete</span></td>
          </tr>
          <tr>
            <td><span class="abc-speaker icons-fill icons-sm"></span> new announcement 1</td>
            <td><span class="button button-normal"><span class="abc-pencil"></span>Edit</span> <span class="button button-alert"><span class="abc-delete"></span>Delete</span></td>
          </tr>
          <tr>
            <td><span class="abc-speaker icons-fill icons-sm"></span> Welcome</td>
            <td><span class="button button-normal"><span class="abc-pencil"></span>Edit</span> <span class="button button-alert"><span class="abc-delete"></span>Delete</span></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="panel-foot clearfix">
      <div class="button button-alert" data-aside>Total Number of Courses: <span>4</span></div>
      <?php include 'part/pagination.php'; ?>
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