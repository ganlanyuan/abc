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
      <div class="panel panel-table">
        <div class="panel-head">
          <h3 class="heading3">Quizzes</h3>
        </div>
        <div class="panel-body">
          <table class="table table-striped table-responsive table-quiz-grades">
            <thead>
              <th>Name</th>
              <th>Score</th>
              <th>Response</th>
              <th>Submit Time</th>
              <th>Grade</th>
              <th>&nbsp;</th>
            </thead>
            <tbody>
              <tr>
                <td>John Smith</td>
                <td>2/5</td>
                <td><a href="" class="file-name">view response</a></td>
                <td>2014-11-11 12:06</td>
                <td>
                  <div class="input-group">
                    <input type="number" name="" id="" value="30">
                    <span class="input">%</span>
                  </div>
                </td>
                <td>
                  <span class="button button-normal">Post Grade</span>
                  <span class="button button-danger">Reset Quiz</span>
                </td>
              </tr>
              <tr>
                <td>Edward Jones</td>
                <td>0/3</td>
                <td><a href="" class="file-name">view response</a></td>
                <td>2014-11-11 12:06</td>
                <td>
                  <div class="input-group">
                    <input type="number" name="" id="" value="20">
                    <span class="input">%</span>
                  </div>
                </td>
                <td>
                  <span class="button button-normal">Post Grade</span>
                  <span class="button button-danger">Reset Quiz</span>
                </td>
              </tr>
              <tr>
                <td>Mary Smith</td>
                <td>N/A</td>
                <td><a href="" class="file-name">view response</a></td>
                <td>2014-11-11 12:06</td>
                <td>
                  <div class="input-group">
                    <input type="number" name="" id="" value="50">
                    <span class="input">%</span>
                  </div>
                </td>
                <td>
                  <span class="button button-normal">Post Grade</span>
                  <span class="button button-danger">Reset Quiz</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'part/footer.php'; ?>
</body>
</html>