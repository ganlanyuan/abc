<?php include 'part/head.php'; ?>
<body class="subpage classroom">
<?php include 'part/helper/no-js.php'; ?>
<?php include 'part/helper/browsehappy.php'; ?>
<?php include 'part/header.php'; ?>

<div class="container">
  <div class="content nav-left clearfix">
    <?php include 'part/sub-nav.php'; ?>
    <div class="main">
      <div class="panel">
        <div class="panel-head clearfix">
          <div class="right">
            <?php include 'part/button/edit.php'; ?>
          </div>
          <h3 class="heading3">STUDENT LIST: <span class="small">New Testment 101 - Sample Class</span></h3>
        </div>
        <div class="panel-body inner">
          <ul class="file-list">
            <li><a class="file-name" href="file/download/18">M.txt</a></li>
            <li><a class="file-name" href="file/download/26">pdfurl-guide.pdf</a></li>
          </ul>
        </div>
        <div class="panel-body inner">
          <h4 class="heading4">Click to hide from student-view: </h4>
          <label for=""><input data-remote="/instructor/course/26/editHideEmail?r=Math.random()" checked="" type="checkbox">E-mail</label>
          <label for=""><input data-remote="/instructor/course/26/editHideEmail?r=Math.random()" checked="" type="checkbox">Phone Number</label>
        </div>
        <div class="panel-body">
          <table class="table table-striped table-responsive table-student-list">
            <thead>
              <tr>
                <th>
                  <font class="bold" style="color:#2c3754; font-size:16px; padding-bottom:8px;">Student Name</font>
                </th>
                <th>
                  <font class="bold" style="color:#2c3754; font-size:16px; padding-bottom:8px;">E-mail</font>&nbsp;&nbsp;
                </th>
                <th>
                  <font class="bold" style="color:#2c3754; font-size:16px; padding-bottom:8px;">Phone Number</font>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Leann Goatley</td>
                <td>leann@edbrite.com</td>
                <td>&nbsp;</td>
              </tr><tr>
                <td>Edward Jones</td>
                <td>edward@edbrite.com</td>
                <td>&nbsp;</td>
              </tr><tr>
                <td>Mary Kingsley </td>
                <td>mary@edbrite.com </td>
                <td>&nbsp; </td>
              </tr><tr>
                <td>Michael Lin </td>
                <td>michael@edbrite.com </td>
                <td>&nbsp; </td>
              </tr><tr>
                <td>John Smith </td>
                <td>john@edbrite.com /john@yahoo.com </td>
                <td>(415) 383-39483 </td>
              </tr><tr>
                <td>Antione Stoops </td>
                <td>antione@edbrite.com </td>
                <td>&nbsp; </td>
              </tr><tr>
                <td>Royal Streetman </td>
                <td>royal@edbrite.com </td>
                <td>&nbsp; </td>
              </tr><tr>
                <td>Elmira Thach </td>
                <td>elmira@edbrite.com </td>
                <td>&nbsp; </td>
              </tr><tr>
                <td>Marco Vail </td>
                <td>marco@edbrite.com </td>
                <td>&nbsp; </td>
              </tr><tr>
                <td>Karie Willetts </td>
                <td>karie@edbrite.com </td>
                <td>&nbsp; </td>
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