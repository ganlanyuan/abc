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
        <h4 class="heading4">Search Student</h4>
        <input type="search" name="" id="" placeholder="Search Student Name or ID" class="button button-search">
        <input type="submit" value="go!" class="button button-danger">
      </form>
      <div class="actions">
        <div class="button button-danger"><span class="abc-list-nested"></span>list all students</div>
        <div class="button button-secondary"><span class="abc-user-add"></span>create student</div>
      </div>
    </div>
    <div class="panel-body">
      <table class="table-striped table-responsive table-student">
        <thead>
          <tr>
            <th>first name</th>
            <th>last name</th>
            <th>student id</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Peter</td>
            <td>Bosworth</td>
            <td>258291</td>
            <td>
              <?php include 'part/button/edit.php'; ?>
            </td>
          </tr>
          <tr>
            <td>Jane</td>
            <td>Doe</td>
            <td>988382</td>
            <td>
              <?php include 'part/button/edit.php'; ?>
            </td>
          </tr>
          <tr>
            <td>Lisa</td>
            <td>Gandy</td>
            <td>740382</td>
            <td>
              <?php include 'part/button/edit.php'; ?>
            </td>
          </tr>
          <tr>
            <td>Leann</td>
            <td>Goatley</td>
            <td>532850</td>
            <td>
              <?php include 'part/button/edit.php'; ?>
            </td>
          </tr>
          <tr>
            <td>Edward</td>
            <td>Jones</td>
            <td>493829</td>
            <td>
              <?php include 'part/button/edit.php'; ?>
            </td>
          </tr>
          <tr>
            <td>Gabriel</td>
            <td>Jones</td>
            <td>111999</td>
            <td>
              <?php include 'part/button/edit.php'; ?>
            </td>
          </tr>
          <tr>
            <td>Mary</td>
            <td>Kingsley</td>
            <td>194023</td>
            <td>
              <?php include 'part/button/edit.php'; ?>
            </td>
          </tr>
          <tr>
            <td>Michael</td>
            <td>Lin</td>
            <td>494821</td>
            <td>
              <?php include 'part/button/edit.php'; ?>
            </td>
          </tr>
          <tr>
            <td>Allie</td>
            <td>Luper</td>
            <td>598503</td>
            <td>
              <?php include 'part/button/edit.php'; ?>
            </td>
          </tr>
          <tr>
            <td>Vicky</td>
            <td>Paro</td>
            <td>102948</td>
            <td>
              <?php include 'part/button/edit.php'; ?>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="panel-foot clearfix">
      <div class="button button-danger" data-aside>total number of students: <span>24</span></div>
      <?php include 'part/pagination.php'; ?>
    </div>
  </div>
</div>
<?php include 'part/footer.php'; ?>
</body>
</html>
