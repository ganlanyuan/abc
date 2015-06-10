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
          <span class="abc-home icons-lg"></span>
          <h3 class="heading3">course home: <span class="small">economics 302: global trends</span></h3>
        </div>
        <div class="panel-body inner">
          <div class="icons">
            <button class="button button-success"><span class="abc-pencil"></span>Edit</button>
            <button class="button button-danger"><span class="abc-delete"></span>Delete</button>
            <span class="abc-arrow-down"></span>
            <span class="abc-arrow-up"></span>
          </div>
          <h4 class="heading4 minor"><span class="abc-speaker icons-fill icons-sm"></span>economics 302: global trends</h4>
          <p>Dear Students:</p>
          <p>The midterm will be next Wednesday. Remember, it counts for 30% of your grade. If you have any questions, please visit my office hours at 2PM on Tuesday.</p>
          <p>Good luck!</p>
          <div><a href="" class="file-name">GarlicFries_927x365.jpg</a></div>
        </div>
        <div class="panel-body inner">
          <header>
            <div class="icons">
              <button class="button button-success"><span class="abc-pencil"></span>Edit</button>
              <button class="button button-danger"><span class="abc-delete"></span>Delete</button>
              <span class="abc-arrow-down"></span>
              <span class="abc-arrow-up"></span>
            </div>
          </header>
          <h4 class="heading4 minor"><span class="abc-speaker icons-fill icons-sm"></span>welcome to week 1</h4>
          <p>Welcome Analyzing Global Trends students!</p>
          <p>You will be starting a journey around the world in pursuit of global trends that are fundamentally reshaping the economic, political, and social landscape.</p>
          <p>On monday, beginning at 12:01 EST, you will be able to access the videos for the first week. Watch the videos, complete the opinion surveys, take the quizzes, and interact with one another on our social media sites and discussion forum. Focus your attention on the big changes taking place in the world. Try to understand their causes, and their consequences.</p>
          <p>And please remember take our Global Literacy Test and the first week's opinion survey.</p>
          <p>Enjoy!</p>

        </div>
        <div class="panel-body inner">
          <header>
            <div class="icons">
              <button class="button button-success"><span class="abc-pencil"></span>Edit</button>
              <button class="button button-danger"><span class="abc-delete"></span>Delete</button>
              <span class="abc-arrow-down"></span>
              <span class="abc-arrow-up"></span>
            </div>
          </header>
          <h4 class="heading4 minor"><span class="abc-speaker icons-fill icons-sm"></span>welcome to week 1</h4>
          <p>Welcome Analyzing Global Trends students!</p>
          <p>You will be starting a journey around the world in pursuit of global trends that are fundamentally reshaping the economic, political, and social landscape.</p>
          <p>On monday, beginning at 12:01 EST, you will be able to access the videos for the first week. Watch the videos, complete the opinion surveys, take the quizzes, and interact with one another on our social media sites and discussion forum. Focus your attention on the big changes taking place in the world. Try to understand their causes, and their consequences.</p>
          <p>And please remember take our Global Literacy Test and the first week's opinion survey.</p>
          <p>Enjoy!</p>

        </div>
      </div>
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
