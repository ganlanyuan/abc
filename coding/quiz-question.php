<?php include 'part/head.php'; ?>
<body class="subpage classroom">
<?php include 'part/helper/no-js.php'; ?>
<?php include 'part/helper/browsehappy.php'; ?>
<?php include 'part/header.php'; ?>

<div class="container">
  <div class="content nav-left clearfix">
    <?php include 'part/sub-nav.php'; ?>
    <div class="main">
      <div class="panel-pure">
        <form action="" class="form-question">
          <ol>
            <li>
              <input class="full" type="text" value="1, 2, 3, John Quize">
            </li>
            <li>
              <textarea class="full" name="" id="" cols="30" rows="7">Due by the end of this week.</textarea>
            </li>
          </ol>
        </form>
      </div>
      <div class="panel panel-pure">
        <h4>Questions <span class="abc-caret-down"></span></h4>
        <ol class="quiz-response-list quiz-question-list">
          <li>
            <div class="question clearfix">
              <div class="right">
                <?php include 'part/button/delete.php'; ?>
              </div>
              <p>Duvall and Hays suggest adding an outline of the passage as part of preparing a research paper.</p>
            </div>
            <div class="tips tips-success"><span class="abc-check"> </span>True</div>
            <div class="tips tips-danger"><span class="abc-close"> </span>False</div>
          </li>
          <li>
            <div class="question clearfix">
              <div class="right">
                <?php include 'part/button/delete.php'; ?>
              </div>
              <p>Duvall and Hays suggest adding an outline of the passage as part of preparing a research paper.</p>
            </div>
            <div class="tips tips-success"><span class="abc-check"> </span>True</div>
            <div class="tips tips-danger"><span class="abc-close"> </span>False</div>
          </li>
          <li>
            <div class="question clearfix">
              <div class="right">
                <?php include 'part/button/delete.php'; ?>
              </div>
              <p>Duvall and Hays suggest adding an outline of the passage as part of preparing a research paper.</p>
            </div>
            <div class="tips tips-success"><span class="abc-check"> </span>True</div>
            <div class="tips tips-danger"><span class="abc-close"> </span>False</div>
          </li>
          <li>
            <div class="question clearfix">
              <div class="right">
                <?php include 'part/button/delete.php'; ?>
              </div>
              <p>How many chapters does Mark have? </p>
            </div>
            <div class="tips tips-success">Fill in the blank</div>
          </li>
        </ol>
      </div>
      <div class="panel-pure">
        <form action="">
          <ol class="quiz-question-add">
            <li>
              <h4 class="heading4">Add New Question</h4>
              <textarea class="full" name="" id="" cols="30" rows="7"></textarea>
            </li>
            <li>
              <label for=""><input type="checkbox" name="" id="">Fill in the blank</label>
            </li>
            <li>
              <div class="input-group">
                <span class="input"><input type="checkbox" name="" id=""></span>
                <input type="text" name="" id="">
              </div>
            </li>
            <li>
              <div class="input-group">
                <span class="input"><input type="checkbox" name="" id=""></span>
                <input type="text" name="" id="">
              </div>
            </li>
            <li>
              <div class="input-group">
                <span class="input"><input type="checkbox" name="" id=""></span>
                <input type="text" name="" id="">
              </div>
            </li>
            <li>
              <div class="button button-secondary">Go Back</div>
              <div class="button button-danger">Add question</div>
              <div class="button button-danger">Save Quiz</div>
            </li>
            <li></li>
          </ol>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include 'part/footer.php'; ?>
</body>
</html>