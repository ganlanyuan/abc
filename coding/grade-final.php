<?php include 'part/head.php'; ?>
<body class="subpage classroom">
<?php include 'part/helper/no-js.php'; ?>
<?php include 'part/helper/browsehappy.php'; ?>
<?php include 'part/header.php'; ?>

<div class="container">
  <div class="content nav-left clearfix">
    <?php include 'part/sub-nav.php'; ?>
    <div class="main">
      <?php include 'part/breadcrumb.php'; ?>
      <div class="panel-pure panel-grade-final">
        <table class="table table-responsive table-grade">
          <thead>
            <th>Items</th>
            <th>Grades</th>
            <th></th>
          </thead>
          <tbody>
            <tr>
              <td>A</td>
              <td>B</td>
              <td>
                <?php include 'part/button/edit.php'; ?>
                <?php include 'part/button/delete.php'; ?>
              </td>
            </tr>
            <tr>
              <td>B</td>
              <td>a</td>
              <td>
                <?php include 'part/button/edit.php'; ?>
                <?php include 'part/button/delete.php'; ?>
              </td>
            </tr>
            <tr>
              <td>1, 2, 3 John Quiz 1, 2, 3 John Quiz 1, 2, 3 John Quiz 1, 2, 3 John Quiz 1, 2, 3 John Quiz 1, 2, 3 John Quiz 1, 2, 3 John Quiz 1, 2, 3 John Quiz</td>
              <td>50</td>
              <td>
                <?php include 'part/button/edit.php'; ?>
                <?php include 'part/button/delete.php'; ?>
              </td>
            </tr>
            <tr>
              <td><input type="text" class="full" placeholder="Add New Grade Type"></td>
              <td><input type="text" class="full" placeholder="Grade"></td>
              <td><button class="button button-secondary">Add Grade</button></td>
            </tr>
            <tr>
              <td class="grade-result" colspan="3">Final Grade
                <input type="text" class="grade-result-output" value="B">
              </td>
            </tr>
            <tr>
              <td colspan="2">Final Grade 
                <span class="select-wrap">
                  <select id="finalGrade" name="finalGrade">
                    <option value="7">A</option><option value="8" selected="">B</option><option value="9">C</option><option value="10">D</option><option value="11">A-</option>
                  </select>
                  <span class="abc-caret-down"></span>
                </span>
              </td>
              <td><button class="button button-danger">Submit</button></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="panel">
        <div class="panel-head">
          <h4 class="heading4">Instructor Comments</h4>
        </div>
        <div class="panel-body inner">
          <p>Good Job</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod empor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <?php include 'part/button/edit.php'; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'part/footer.php'; ?>
</body>
</html>