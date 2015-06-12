<?php include 'part/head.php'; ?>
<body class="database with-main-nav">
<?php include 'part/helper/no-js.php'; ?>
<?php include 'part/helper/browsehappy.php'; ?>
<?php include 'part/header.php'; ?>
<?php include 'part/main-nav.php'; ?>

<div class="container">
  <div class="panel">
    <div class="panel-head clearfix">
      <form action="" class="search-students">
        <h4 class="heading4">Search Student</h4>
        <input type="search" name="" id="" placeholder="Search Student Name or ID" class="button button-search">
        <input type="submit" value="go!" class="button button-danger">
      </form>
      <div class="actions">
        <div class="button button-danger"><span class="abc-list-nested"></span>list all students</div>
        <div class="button button-secondary"><span class="abc-user-add"></span>create student</div>
      </div>
    </div>
    <div class="panel-pure">
      <form action="">
        <ol class="form-aligned">
          <li>
            <label for="" class="control-label">First Name</label>
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
</div>
<?php include 'part/footer.php'; ?>
</body>
</html>