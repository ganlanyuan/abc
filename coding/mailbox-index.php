<?php 
  $category = 'mailbox'; 
  $unread = 3; 
?>
<?php include 'part/head.php'; ?>
<body class="subpage classroom">
<?php include 'part/helper/no-js.php'; ?>
<?php include 'part/helper/browsehappy.php'; ?>
<?php include 'part/header.php'; ?>

<div class="container">
  <div class="content nav-left clearfix">
    <?php include 'part/sub-nav-mailbox.php'; ?>
    <div class="main-mailbox">
      <div class="panel panel-pure discussion-post">
        <div class="discussion-post-head clearfix">
          <button class="button button-danger right">Compose new message</button>
          <div>
            <label for="selected-message">Selected messages</label>
            <span class="select-wrap">
              <select name="" id="selected-message">
                <option value="Move to folder">Move to folder</option>
                <option value="Delete">Delete</option>
                <option value="Mark as read">Mark as read</option>
              </select>
              <span class="abc-caret-down"></span>
            </span>
            <span class="select-wrap">
              <select name="" id="move-to">
                <option value="Archive">Archive</option>
                <option value="Course one">Course one</option>
                <option value="Course two">Course two</option>
              </select>
              <span class="abc-caret-down"></span>
            </span>
          </div>
        </div>
        <table class="table table-striped table-mailbox">
          <thead>
            <th><input type="checkbox" name="select-all" id="select-all"></th>
            <th>From</th>
            <th>Subject</th>
            <th>Date</th>
          </thead>
          <tbody>
            <tr>
              <td><input type="checkbox" name="select" id=""></td>
              <td>John Smith</td>
              <td><a href="">My homework due tomorrow</a></td>
              <td>
                <time><span class="date-m">Oct 4</span><span class="date-y">, 2015</span> <span class="date-t">11:40 AM</span></time>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" name="select" id=""></td>
              <td>John Smith</td>
              <td><a href="">My homework due tomorrow</a></td>
              <td>
                <time><span class="date-m">Oct 4</span><span class="date-y">, 2015</span> <span class="date-t">11:40 AM</span></time>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" name="select" id=""></td>
              <td>John Smith</td>
              <td><a href="">My homework due tomorrow</a></td>
              <td>
                <time><span class="date-m">Oct 4</span><span class="date-y">, 2015</span> <span class="date-t">11:40 AM</span></time>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" name="select" id=""></td>
              <td>John Smith</td>
              <td><a href="">My homework due tomorrow</a></td>
              <td>
                <time><span class="date-m">Oct 4</span><span class="date-y">, 2015</span> <span class="date-t">11:40 AM</span></time>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" name="select" id=""></td>
              <td>John Smith</td>
              <td><a href="">My homework due tomorrow</a></td>
              <td>
                <time><span class="date-m">Oct 4</span><span class="date-y">, 2015</span> <span class="date-t">11:40 AM</span></time>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" name="select" id=""></td>
              <td>John Smith</td>
              <td><a href="">My homework due tomorrow</a></td>
              <td>
                <time><span class="date-m">Oct 4</span><span class="date-y">, 2015</span> <span class="date-t">11:40 AM</span></time>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" name="select" id=""></td>
              <td>John Smith</td>
              <td><a href="">My homework due tomorrow</a></td>
              <td>
                <time><span class="date-m">Oct 4</span><span class="date-y">, 2015</span> <span class="date-t">11:40 AM</span></time>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" name="select" id=""></td>
              <td>John Smith</td>
              <td><a href="">My homework due tomorrow</a></td>
              <td>
                <time><span class="date-m">Oct 4</span><span class="date-y">, 2015</span> <span class="date-t">11:40 AM</span></time>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" name="select" id=""></td>
              <td>John Smith</td>
              <td><a href="">My homework due tomorrow</a></td>
              <td>
                <time><span class="date-m">Oct 4</span><span class="date-y">, 2015</span> <span class="date-t">11:40 AM</span></time>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" name="select" id=""></td>
              <td>John Smith</td>
              <td><a href="">My homework due tomorrow</a></td>
              <td>
                <time><span class="date-m">Oct 4</span><span class="date-y">, 2015</span> <span class="date-t">11:40 AM</span></time>
              </td>
            </tr>
          </tbody>
        </table>
        <?php include 'part/pagination.php'; ?>
      </div>
    </div>
  </div>
</div>

<?php include 'part/footer.php'; ?>
</body>
</html>