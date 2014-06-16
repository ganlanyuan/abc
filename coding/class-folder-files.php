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
          <div class="summary float-button clearfix">
            <?php include 'part/button/edit.php'; ?>
            This folder contains resources for New Testament 101
          </div>
        </div>
        <div class="panel-body">
          <table class="table-striped table-responsive table-class-files">
            <thead>
              <tr>
                <th>
                  File Name
                  <div class="icons">
                    <span class="abc-arrow-down"></span>
                    <span class="abc-arrow-up"></span>
                  </div>
                </th>
                <th>
                  File Extension
                  <div class="icons">
                    <span class="abc-arrow-down"></span>
                    <span class="abc-arrow-up"></span>
                  </div>
                </th>
                <th>
                  Uploaded By
                </th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td><a class="file-name" id="file20" href="/course/26/class/folder/9/file/20?r=Math.random()">
                      cccutil64
                  </a></td>
                  <td>.txt</td>
                  <td>Walker Tzeng</td>
                  <td>
                    <?php include 'part/button/edit.php'; ?>                    
                    <?php include 'part/button/delete.php'; ?>
                  </td>
                </tr><tr>
              
                </tr><tr>
                  <td><a class="file-name" id="file21" href="/course/26/class/folder/9/file/21?r=Math.random()">
                      g2mchat
                  </a></td>
                  <td>.exe</td>
                  <td>Walker Tzeng</td>
                  <td>
                    <?php include 'part/button/edit.php'; ?>                    
                    <?php include 'part/button/delete.php'; ?>
                  </td>
                </tr><tr>
            </tr></tbody>
          </table>
        </div>
        <div class="panel-body inner">
          <strong>Upload File:</strong>
          <?php include 'part/upload-base.php'; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'part/footer.php'; ?>
</body>
</html>