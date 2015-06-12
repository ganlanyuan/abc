<?php include 'part/head.php'; ?>
<body class="database with-main-nav">
<?php include 'part/helper/no-js.php'; ?>
<?php include 'part/helper/browsehappy.php'; ?>
<?php include 'part/header.php'; ?>
<?php include 'part/main-nav.php'; ?>

<div class="container">
  <div class="panel">
    <div class="panel-head">
      <h3 class="heading3">Edit Course</h3>
    </div>
    <div class="panel-pure">
      <form action="">
        <ol class="form-aligned">
          <li>
            <label for="" class="control-label">Course Title</label>
            <div class="control-field"><input type="text"></div>
          </li>
          <li class="required">
            <label for="" class="control-label">Last Name</label>
            <div class="control-field">
              <input type="text" data-notempty-message="The Last Name is Required">
              <small class="help-inline">The Last Name is Required</small>
            </div>
          </li>
          <li>
            <label for="" class="control-label">Student Id</label>
            <div class="control-field"><input type="number"></div>
          </li>
          <li>
            <label for="" class="control-label">Login E-mail</label>
            <div class="control-field"><input type="email"></div>
          </li>
          <li>
            <label for="" class="control-label">Temporary Password</label>
            <div class="control-field"><input type="password" required=""></div>
          </li>
          <li>
            <label for="" class="control-label">Status</label>
            <div class="control-field">
              <span class="select-wrap">
                <select id="status" name="status" data-bv-notempty-message="The status is required">
                  <option value="">-- Select a Status --</option>
                  <option value="1" selected="">Active</option><option value="2">Inactive</option><option value="3">Graduated</option>
                </select>
                <span class="abc-caret-down"></span>
              </span>
            </div>
          </li>
          <li>
            <label for="" class="control-label label-empty">&nbsp;</label>
            <div class="control-field"><a href="" class="button button-secondary">Submit</a></div>
          </li>
        </ol>
      </form>
    </div>
  </div>
  <div class="panel panel-table">
    <div class="panel-head clearfix">
      <h3 class="heading3">Add Instructors</h3>
      <form action="" class="search-students">
        <input type="search" name="" id="" placeholder="Search Instructor Name or ID" class="button button-search">
        <input type="submit" value="add" class="button button-danger">
      </form>
      <div class="actions">
        <div class="button button-secondary">hide</div>
      </div>
    </div>
    <div class="panel-body">
      <table class="table-striped table-responsive table-student">
        <tbody>
          <tr>
            <td>New Testment 101 - Sample Class</td>
            <td><span class="button button-danger"><span class="abc-delete"></span>Delete</span></td>
          </tr>
          <tr>
            <td>Old Testament 101</td>
            <td><span class="button button-danger"><span class="abc-delete"></span>Delete</span></td>
          </tr>
          <tr>
            <td>Missions 101</td>
            <td><span class="button button-danger"><span class="abc-delete"></span>Delete</span></td>
          </tr>
          <tr>
            <td>Release 101</td>
            <td><span class="button button-danger"><span class="abc-delete"></span>Delete</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include 'part/footer.php'; ?>
</body>
</html>