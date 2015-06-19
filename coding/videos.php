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
        <div class="panel-head float-button clearfix">
          <?php include 'part/button/edit.php'; ?>
          <h3 class="heading3">STUDENT LIST: <span class="small">New Testment 101 - Sample Class</span></h3>
        </div>
        <div class="panel-body inner">
          <h4 class="heading4">Videos section description:</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <ul class="file-list">
            <li><a class="file-name" href="file/download/18">M.txt</a></li>
            <li><a class="file-name" href="file/download/26">pdfurl-guide.pdf</a></li>
          </ul>
        </div>
        <div class="panel-body inner">
          <ul class="video-list">
            <li>
              <div class="line clearfix">
                <span class="toggle">Week 1 Lecture: 1, 2, 3 John
                  <span class="abc-caret-down"></span>
                </span>
                <div class="line-actions icons">
                  <?php include 'part/button/delete.php'; ?>
                  <span class="abc-arrow-down"></span>
                  <span class="abc-arrow-up"></span>
                </div>
              </div>
              <div class="video-wrapper">
                <div class="flex-video">
                  <iframe src="//www.youtube.com/embed/CPQ1od-gbkw" allowfullscreen="" frameborder="0" height="315" width="420"></iframe>
                </div>
                <a class="file-name" href="">View video in new window</a>
              </div>
            </li>
            <li>
              <div class="line clearfix">
                <span class="toggle">Revelation 5-22
                  <span class="abc-caret-down"></span>
                </span>
                <div class="line-actions icons">
                  <?php include 'part/button/delete.php'; ?>
                  <span class="abc-arrow-down"></span>
                  <span class="abc-arrow-up"></span>
                </div>
              </div>
              <div class="video-wrapper">
                <div class="flex-video">
                  <iframe src="//www.youtube.com/embed/CPQ1od-gbkw" allowfullscreen="" frameborder="0" height="315" width="420"></iframe>
                </div>
                <a class="file-name" href="">View video in new window</a>
              </div>
            </li>
            <li>
              <div class="line clearfix">
                <span class="toggle">WETIA's Education Technology Video
                  <span class="abc-caret-down"></span>
                </span>
                <div class="line-actions icons">
                  <?php include 'part/button/delete.php'; ?>
                  <span class="abc-arrow-down"></span>
                  <span class="abc-arrow-up"></span>
                </div>
              </div>
              <div class="video-wrapper">
                <div class="flex-video">
                  <iframe src="//www.youtube.com/embed/CPQ1od-gbkw" allowfullscreen="" frameborder="0" height="315" width="420"></iframe>
                </div>
                <a class="file-name" href="">View video in new window</a>
              </div>
            </li>
            <li>
              <div class="line clearfix">
                <span class="toggle">Youku Video Example
                  <span class="abc-caret-down"></span>
                </span>
                <div class="line-actions icons">
                  <?php include 'part/button/delete.php'; ?>
                  <span class="abc-arrow-down"></span>
                  <span class="abc-arrow-up"></span>
                </div>
              </div>
              <div class="video-wrapper">
                <div class="flex-video">
                  <iframe src="//www.youtube.com/embed/CPQ1od-gbkw" allowfullscreen="" frameborder="0" height="315" width="420"></iframe>
                </div>
                <a class="file-name" href="">View video in new window</a>
              </div>
            </li>
          </ul>
        </div>
        <div class="panel-body">
          <form action="">
            <ol class="form-aligned">
              <li>
                <label for="video-title" class="control-label">New Video Title</label>
                <div class="control-field"><input type="text" name="" class="full" id="video-title" placeholder="Title"></div>
              </li>
              <li>
                <label for="video-link" class="control-label">External Link</label>
                <div class="control-field"><input type="url" name="" class="full" id="video-link" placeholder="External Link"></div>
              </li>
              <li>
                <label for="video-code" class="control-label">Embed Code</label>
                <div class="control-field"><input type="text" name="" class="full" id="video-code" placeholder="Title"></div>
              </li>
              <li>
                <span class="control-label">&nbsp;</span>
                <div class="control-field"><span class="button button-danger">Create</span></div>
              </li>
            </ol>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'part/footer.php'; ?>
</body>
</html>