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
        <li>
          <label for="" class="control-label">Program</label>
          <div class="control-field">
            <span class="select-wrap">
              <select id="Program" data-source="/admin/program/values" data-create-btn="#programCreateBtn" data-edit-btn="#programEditBtn" data-delete-btn="#programDeleteBtn" data-text-target="#programName"><option value="">-- Select a Program --</option><option value="3">Bachelor of Arts (B.A.)</option><option value="4">Masters of Arts (M.A.)</option><option value="5">Master of Divinity (M.Div.)</option><option value="6">Doctor of Ministry (D.Min.)</option></select>
              <span class="abc-caret-down"></span>
            </span>
          </div>
        </li>
        <li>
          <span class="control-label">&nbsp;</span>
          <div class="control-field">
            <input id="programName" placeholder="Program Name">
          </div>
        </li>
        <li>
          <span class="control-label">&nbsp;</span>
          <div class="control-field">
            <button class="button button-secondary">Create</button>
            <button class="button button-success" disabled=""><span class="abc-pencil"></span>Edit</button>
            <button class="button button-danger" disabled=""><span class="abc-delete"></span>Delete</button>
          </div>
        </li>
        <li>
          <label for="" class="control-label">Major</label>
          <div class="control-field">
            <span class="select-wrap">
              <select id="Major" data-create-btn="#majorCreateBtn" data-edit-btn="#majorEditBtn" data-delete-btn="#majorDeleteBtn" data-text-target="#majorName" data-source="/admin/major/values"><option value="">-- Select a Major --</option><option value="5">Theology</option><option value="6">Music</option><option value="7">Business</option></select>
              <span class="abc-caret-down"></span>
            </span>
          </div>
        </li>
        <li>
          <span class="control-label">&nbsp;</span>
          <div class="control-field">
            <input id="majorName" placeholder="Major Name">
          </div>
        </li>
        <li>
          <span class="control-label">&nbsp;</span>
          <div class="control-field">
            <button class="button button-secondary">Create</button>
            <button class="button button-success" disabled=""><span class="abc-pencil"></span>Edit</button>
            <button class="button button-danger" disabled=""><span class="abc-delete"></span>Delete</button>
          </div>
        </li>
        <li>
          <label for="" class="control-label">Location</label>
          <div class="control-field">
            <span class="select-wrap">
              <select id="Location" data-source="/admin/location/values" data-create-btn="#locationCreateBtn" data-edit-btn="#locationEditBtn" data-delete-btn="#locationDeleteBtn" data-text-target="#locationName"><option value="">-- Select a Location --</option><option value="4">USA</option><option value="5">Europe</option></select>
              <span class="abc-caret-down"></span>
            </span>
          </div>
        </li>
        <li>
          <span class="control-label">&nbsp;</span>
          <div class="control-field">
            <input id="locationName" placeholder="Location Name">
          </div>
        </li>
        <li>
          <span class="control-label">&nbsp;</span>
          <div class="control-field">
            <button class="button button-secondary">Create</button>
            <button class="button button-success" disabled=""><span class="abc-pencil"></span>Edit</button>
            <button class="button button-danger" disabled=""><span class="abc-delete"></span>Delete</button>
          </div>
        </li>
        <li>
          <label for="" class="control-label">Term</label>
          <div class="control-field">
            <span class="select-wrap">
              <select id="Term" data-source="/admin/term/values" data-create-btn="#termCreateBtn" data-edit-btn="#termEditBtn" data-delete-btn="#termDeleteBtn" data-value-source="/admin/termspan" data-date-begin="#beginDate" data-date-end="#endDate" data-text-target="#termName"><option value="">-- Select a Term --</option><option value="6">Fall 2014</option></select>
              <span class="abc-caret-down"></span>
            </span>
          </div>
        </li>
        <li>
          <span class="control-label">&nbsp;</span>
          <div class="control-field">
            <input id="termName" placeholder="Term Name">
          </div>
        </li>
        <li>
          <label for="" class="control-label">Date Begin</label>
          <div class="control-field">
            <input type="text" class="" id="datepicker-begin">
          </div>
        </li>
        <li>
          <label for="" class="control-label">Date End</label>
          <div class="control-field">
            <input type="text" class="" id="datepicker-end">
          </div>
        </li>
        <li>
          <span class="control-label">&nbsp;</span>
          <div class="control-field">
            <button class="button button-secondary">Create</button>
            <button class="button button-success" disabled=""><span class="abc-pencil"></span>Edit</button>
            <button class="button button-danger" disabled=""><span class="abc-delete"></span>Delete</button>
          </div>
        </li>
        <li>
          <label for="" class="control-label">GPA</label>
          <div class="control-field">
            <span class="select-wrap">
              <select id="GPA" data-create-btn="#gpaCreateBtn" data-edit-btn="#gpaEditBtn" data-delete-btn="#gpaDeleteBtn" data-text-target="#gpaName" data-value="#gpaValue" data-value-source="/admin/gpavalue" data-source="/admin/gpa/values"><option value="">-- Select a GPA --</option><option value="7">A</option><option value="8">B</option><option value="9">C</option><option value="10">D</option><option value="11">A-</option></select>
              <span class="abc-caret-down"></span>
            </span>
          </div>
        </li>
        <li>
          <span class="control-label">&nbsp;</span>
          <div class="control-field">
            <input id="gpaName" placeholder="GPA Name">
          </div>
        </li>
        <li>
          <span class="control-label">&nbsp;</span>
          <div class="control-field">
            <input id="gpaValue" placeholder="GPA Value" name="gpaValue" data-bv-message="The gpa value is not valid" pattern="^(\d+)(\.\d{1,})?$" data-bv-regexp-message="The gpa value can only consist of digits such as '5.0' or '5.00'">
          </div>
        </li>
        <li>
          <span class="control-label">&nbsp;</span>
          <div class="control-field">
            <button class="button button-secondary">Create</button>
            <button class="button button-success" disabled=""><span class="abc-pencil"></span>Edit</button>
            <button class="button button-danger" disabled=""><span class="abc-delete"></span>Delete</button>
          </div>
        </li>
      </ol>
    </form>
  </div>
</div>
<?php include 'part/footer.php'; ?>
<script src="assets/js/pikaday.js"></script>
<script>
  var begin = new Pikaday({ field: document.getElementById('datepicker-begin') });
  var end = new Pikaday({ field: document.getElementById('datepicker-end') });
  begin.toString('YYYY-MM-DD');
</script>
</body>
</html>