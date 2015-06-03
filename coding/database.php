<?php include 'part/head.php'; ?>
<body class="database">
<?php include 'part/helper/no-js.php'; ?>
<?php include 'part/helper/browsehappy.php'; ?>
<?php include 'part/header.php'; ?>
<?php include 'part/main-nav.php'; ?>

<div class="container">
  <div class="panel-head clearfix">
    <form action="" class="search-students">
      <h4 class="heading4">Search Student</h4>
      <input type="search" name="" id="" placeholder="Search Student Name or ID" class="button button-search">
      <input type="submit" value="go!" class="button button-alert">
    </form>
    <div class="actions">
      <div class="button button-alert"><span class=""></span>list all students</div>
      <div class="button button-secondary"><span class=""></span>create student</div>
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
          <td><span class="button button-normal">edit</span></td>
        </tr>
        <tr>
          <td>Jane</td>
          <td>Doe</td>
          <td>988382</td>
          <td><span class="button button-normal">edit</span></td>
        </tr>
        <tr>
          <td>Lisa</td>
          <td>Gandy</td>
          <td>740382</td>
          <td><span class="button button-normal">edit</span></td>
        </tr>
        <tr>
          <td>Leann</td>
          <td>Goatley</td>
          <td>532850</td>
          <td><span class="button button-normal">edit</span></td>
        </tr>
        <tr>
          <td>Edward</td>
          <td>Jones</td>
          <td>493829</td>
          <td><span class="button button-normal">edit</span></td>
        </tr>
        <tr>
          <td>Gabriel</td>
          <td>Jones</td>
          <td>111999</td>
          <td><span class="button button-normal">edit</span></td>
        </tr>
        <tr>
          <td>Mary</td>
          <td>Kingsley</td>
          <td>194023</td>
          <td><span class="button button-normal">edit</span></td>
        </tr>
        <tr>
          <td>Michael</td>
          <td>Lin</td>
          <td>494821</td>
          <td><span class="button button-normal">edit</span></td>
        </tr>
        <tr>
          <td>Allie</td>
          <td>Luper</td>
          <td>598503</td>
          <td><span class="button button-normal">edit</span></td>
        </tr>
        <tr>
          <td>Vicky</td>
          <td>Paro</td>
          <td>102948</td>
          <td><span class="button button-normal">edit</span></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="panel-foot clearfix">
    <div class="button button-alert" data-aside>total number of students: <span>24</span></div>
    <?php include 'part/pagination.php'; ?>
  </div>
</div>
<?php include 'part/footer.php'; ?>
</body>
</html>
