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
            <div class="control-field"><input class="full" type="text" value="New Testment"></div>
          </li>
          <li>
            <label for="" class="control-label">Term</label>
            <div class="control-field">
              <span class="select-wrap full">
                <select id="termId" name="termId">
                  <option value="">-- Select a Term --</option>
                  <option value="6" selected="">Fall 2014</option>
                </select>
                <span class="abc-caret-down"></span>
              </span>
            </div>
          </li>
          <li>
            <label for="" class="control-label">Program</label>
            <div class="control-field">
              <span class="select-wrap full">
                <select id="programId" name="programId">
                  <option value="">-- Select a Program --</option>
                  <option value="3" selected="">Bachelor of Arts (B.A.)</option><option value="4">Masters of Arts (M.A.)</option><option value="5">Master of Divinity (M.Div.)</option><option value="6">Doctor of Ministry (D.Min.)</option>
                </select>
                <span class="abc-caret-down"></span>
              </span>
            </div>
          </li>
          <li>
            <label for="" class="control-label">Major</label>
            <div class="control-field">
              <span class="select-wrap full">
                <select id="majorId" name="majorId">
                  <option value="">-- Select a Major --</option>
                  <option value="5" selected="">Theology</option><option value="6">Music</option><option value="7">Business</option>
                </select>
                <span class="abc-caret-down"></span>
              </span>
            </div>
          </li>
          <li>
            <label for="" class="control-label">Location</label>
            <div class="control-field">
              <span class="select-wrap full">
                <select id="locationId" name="locationId">
                  <option value="">-- Select a Location --</option>
                  <option value="4" selected="">USA</option><option value="5">Europe</option>
                </select>
                <span class="abc-caret-down"></span>
              </span>
            </div>
          </li>
          <li>
            <label for="" class="control-label">Units</label>
            <div class="control-field"><input class="full" type="number" value="3"></div>
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
      <h3 class="heading3 title">Add Instructors</h3>
      <form action="" class="search-students">
        <input type="search" name="" id="" placeholder="Search Instructor Name or ID" class="button button-search">
        <input type="submit" value="add" class="button button-danger">
      </form>
      <div class="actions button-toggle">
        <span class="abc-angle-up alone icons-lg"></span>
      </div>
    </div>
    <div class="panel-body inner">
      <div class="line clearfix">New Testment 101 - Sample Class 
        <div class="line-actions">
          <?php include 'part/button/delete.php'; ?>
        </div>
      </div>
      <div class="line clearfix">Old Testament 101 
        <div class="line-actions">
          <?php include 'part/button/delete.php'; ?>
        </div>
      </div>
      <div class="line clearfix">Missions 101 
        <div class="line-actions">
          <?php include 'part/button/delete.php'; ?>
        </div>
      </div>
      <div class="line clearfix">Release 101 
        <div class="line-actions">
          <?php include 'part/button/delete.php'; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="panel-pure">
    <span class="button button-normal">Close</span>
    <span class="button button-info">Save Change</span>
  </div>
</div>
<?php include 'part/footer.php'; ?>
</body>
</html>