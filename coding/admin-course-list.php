<?php include 'part/head.php'; ?>
<body class="database with-main-nav">
<?php include 'part/helper/no-js.php'; ?>
<?php include 'part/helper/browsehappy.php'; ?>
<?php include 'part/header.php'; ?>
<?php include 'part/main-nav.php'; ?>

<div class="container">
  <div class="panel panel-table">
    <div class="panel-head clearfix">
      <form action="" class="search-students">
        <h4 class="heading4">Courses</h4>
        <form action="">
          <span class="select-wrap">
            <select name="" id="">
              <option value="Winter 2015">Winter 2015</option>
              <option value="Spring 2016">Spring 2016</option>
              <option value="Summer 2016">Summer 2016</option>
            </select>
            <span class="abc-caret-down"></span>
          </span>
          <input type="submit" value="Go!" class="button button-alert">
        </form>
      </form>
      <div class="actions">
        <div class="button button-secondary"><span class="abc-page-add"></span>Create New Course</div>
      </div>
    </div>
    <div class="panel-body">
      <table class="table-striped table-responsive table-student">
        <thead>
          <tr>
            <th>Course Title</th>
            <th>Operations</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>New Testment 101 - Sample Class</td>
            <td><span class="button button-normal"><span class="abc-pencil"></span>Edit</span> <span class="button button-alert"><span class="abc-delete"></span>Delete</span></td>
          </tr>
          <tr>
            <td>Old Testament 101</td>
            <td><span class="button button-normal"><span class="abc-pencil"></span>Edit</span> <span class="button button-alert"><span class="abc-delete"></span>Delete</span></td>
          </tr>
          <tr>
            <td>Missions 101</td>
            <td><span class="button button-normal"><span class="abc-pencil"></span>Edit</span> <span class="button button-alert"><span class="abc-delete"></span>Delete</span></td>
          </tr>
          <tr>
            <td>Release 101</td>
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
</body>
</html>