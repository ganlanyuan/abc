<?php include 'part/head.php'; ?>
<body class="database with-main-nav">
<?php include 'part/helper/no-js.php'; ?>
<?php include 'part/helper/browsehappy.php'; ?>
<?php include 'part/header.php'; ?>
<?php include 'part/main-nav.php'; ?>

<div class="container">
  <div class="panel-pure panel-paster">
    <form action="">
      <ol class="form-aligned">
        <li class="form-head">
          <span class="control-label">&nbsp;</span>
          <div class="control-field">
            <h3 class="heading3">Student List <br /><small class="small">(Filter By)</small></h3>
          </div>
        </li>
        <li>
          <label for="" class="control-label">Term</label>
          <div class="control-field">
            <span class="select-wrap">
              <select class="form-control" name="termId">
                <option value="6">Fall 2014</option>
              </select>
              <span class="abc-caret-down"></span>
            </span>
          </div>
        </li>
        <li>
          <label for="" class="control-label">Status</label>
          <div class="control-field">
            <span class="select-wrap">
              <select id="status" class="full" name="status" data-bv-notempty-message="The status is required">
                <option value="">-- Select a Status --</option>
                <option value="1" selected="">Active</option><option value="2">Inactive</option><option value="3">Graduated</option>
              </select>
              <span class="abc-caret-down"></span>
            </span>
          </div>
        </li>
        <li>
          <label for="" class="control-label">Program</label>
          <div class="control-field">
            <span class="select-wrap">
              <select id="program" name="program">
                <option value="">-- Select a Program --</option>
                <option value="3">Bachelor of Arts (B.A.)</option><option value="4">Masters of Arts (M.A.)</option><option value="5">Master of Divinity (M.Div.)</option><option value="6">Doctor of Ministry (D.Min.)</option>
              </select>
              <span class="abc-caret-down"></span>
            </span>
          </div>
        </li>
        <li>
          <label for="" class="control-label">Major</label>
          <div class="control-field">
            <span class="select-wrap">
              <select id="major" name="major">
                <option value="">-- Select a Major --</option>
                <option value="5">Theology</option><option value="6">Music</option><option value="7">Business</option>
              </select>
              <span class="abc-caret-down"></span>
            </span>
          </div>
        </li>
        <li>
          <span class="control-label">&nbsp;</span>
          <div class="control-field"><a href="" class="button button-info">View / Print Report</a></div>
        </li>
      </ol>
    </form>
  </div>
  <div class="panel-pure panel-paster">
    <form action="">
      <ol class="form-aligned">
        <li class="form-head">
          <span class="control-label">&nbsp;</span>
          <div class="control-field">
            <h3 class="heading3">Instructor List <br /><small class="small">(Filter By)</small></h3>
          </div>
        </li>
        <li>
          <label for="" class="control-label">Term</label>
          <div class="control-field">
            <span class="select-wrap">
              <select class="form-control" name="termId">
                <option value="6">Fall 2014</option>
              </select>
              <span class="abc-caret-down"></span>
            </span>
          </div>
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
          <span class="control-label">&nbsp;</span>
          <div class="control-field"><a href="" class="button button-info">View / Print Report</a></div>
        </li>
      </ol>
    </form>
  </div>
  <div class="panel-pure panel-paster">
    <form action="">
      <ol class="form-aligned">
        <li class="form-head">
          <span class="control-label">&nbsp;</span>
          <div class="control-field">
            <h3 class="heading3">Course List <br /><small class="small">(Filter By)</small></h3>
          </div>
        </li>
        <li>
          <label for="" class="control-label">Term</label>
          <div class="control-field">
            <span class="select-wrap">
              <select class="form-control" name="termId">
                <option value="6">Fall 2014</option>
              </select>
              <span class="abc-caret-down"></span>
            </span>
          </div>
        </li>
        <li>
          <label for="" class="control-label">Program</label>
          <div class="control-field">
            <span class="select-wrap">
              <select id="program" name="program">
                <option value="">-- Select a Program --</option>
                <option value="3">Bachelor of Arts (B.A.)</option><option value="4">Masters of Arts (M.A.)</option><option value="5">Master of Divinity (M.Div.)</option><option value="6">Doctor of Ministry (D.Min.)</option>
              </select>
              <span class="abc-caret-down"></span>
            </span>
          </div>
        </li>
        <li>
          <label for="" class="control-label">Major</label>
          <div class="control-field">
            <span class="select-wrap">
              <select id="major" name="major">
                <option value="">-- Select a Major --</option>
                <option value="5">Theology</option><option value="6">Music</option><option value="7">Business</option>
              </select>
              <span class="abc-caret-down"></span>
            </span>
          </div>
        </li>
        <li>
          <label for="" class="control-label">Location</label>
          <div class="control-field">
            <span class="select-wrap">
              <select name="locationId">
                <option value=""></option>
                <option value="4">USA</option><option value="5">Europe</option>
              </select>
              <span class="abc-caret-down"></span>
            </span>
          </div>
        </li>
        <li>
          <label for="" class="control-label">Days</label>
          <div class="control-field">
            <span class="select-wrap">
              <select name="day">
                <option value=""></option>
                <option value="1">Monday</option>
                <option value="2">Tuesday</option>
                <option value="3">Wednesday</option>
                <option value="4">Thursday</option>
                <option value="5">Friday</option>
                <option value="6">Saturday</option>
                <option value="7">Sunday</option>
              </select>
              <span class="abc-caret-down"></span>
            </span>
          </div>
        </li>
        <li>
          <span class="control-label">&nbsp;</span>
          <div class="control-field"><a href="" class="button button-info">View / Print Report</a></div>
        </li>
      </ol>
    </form>
  </div>
</div>
<?php include 'part/footer.php'; ?>
</body>
</html>