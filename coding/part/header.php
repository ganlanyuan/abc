<header class="head <?php if ($category == 'mailbox') {echo 'head-mailbox'; } ?>">
  <div class="container">
    <div class="branding"><a href=""><img src="assets/img/logo.png" alt="ABC Institue"></a></div>
    <nav class="head-nav">
      <ul>
        <li class="my-homepage"><a href="">
          <span class="abc-home icons-circle icons-md"></span>
          <span><span class="nav-title">My Homepage</span></span>
        </a></li>
        <li class="my-login dropdown">
          <?php if ($category == 'mailbox') {
            echo '<a href=""><span class="abc-email icons-circle icons-md" data-unread="' . $unread . '"></span></a>';
          } ?>
          <span class="abc-user icons-circle icons-md"></span>
          <span class="user-name">
            <span class="nav-title"><small>Logged in as</small><br />Michael Jones</span>
          </span>
          <input type="checkbox" name="" id="user-panel-checkbox" class="hidden-checkbox">
          <label for="user-panel-checkbox"><span class="abc-caret-down icons-rect"></span></label>
          <div class="user-panel">
            <a href="">Lorem ipsum</a>
            <a href="">Architecto quaerat</a>
            <a href="">Sunt tempore</a>
            <a href="">Quibusdam harum</a>
          </div>
        </li>
      </ul>
    </nav>
  </div>
</header>