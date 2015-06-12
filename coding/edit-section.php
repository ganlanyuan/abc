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
        <span class="abc-pencil icons-lg"></span>
          <h3 class="heading3">Edit Section: <span class="small">New Testment 101 - Sample Class</span></h3>
        </div>
        <div class="panel-body inner">
          <form action="" class="checkbox-list">
            <ul>
              <li>
                <label><input value="1" name="section" checked="" type="checkbox">Course Information</label>
              </li>
              <li>
                <label><input value="2" name="section" checked="" type="checkbox">Discussions</label>
              </li>
              <li>
                <label><input value="3" name="section" checked="" type="checkbox">Videos</label>
              </li>
              <li>
                <label><input value="4" name="section" checked="" type="checkbox">Quizzes</label>
              </li>
              <li>
                <label><input value="5" name="section" checked="" type="checkbox">Class Files</label>
              </li>
              <li>
                <label><input value="6" name="section" checked="" type="checkbox">Submissions</label>
              </li>
              <li>
                <label><input value="7" name="section" checked="" type="checkbox">Grades</label>
              </li>
              <li>
                <label><input value="8" name="section" checked="" type="checkbox">Student List</label>
              </li>
              <li><button class="button button-secondary">Save</button></li>
            </ul>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'part/footer.php'; ?>
</body>
</html>