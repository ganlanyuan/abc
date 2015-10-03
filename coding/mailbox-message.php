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
        <article class="full-email">
          <header class="">
            <h2 class="email-title">My homework due to tomorrow</h2>
            <div class="clearfix">
              <div class="email-buttons">
                <a href="" class="button button-secondary"><span class="abc-pencil"></span> Reply</a>
                <a href="" class="button button-danger"><span class="abc-delete"></span>Delete</a>
              </div>
              <div class="fromline">
                <a href="" class="from">Michael Jones</a> <br>
                to <a href="" class="to">John Smih</a>
              </div>
            </div>
          </header>
          <section>
            <p>Hi, John</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis recusandae deserunt aspernatur odit neque tempore exercitationem est sapiente quisquam, accusamus non nemo voluptatum placeat reiciendis molestias ut doloribus quae rerum?</p>
            <p>Soluta dolore fuga eum laboriosam magnam voluptates autem neque odio odit expedita voluptate, accusantium dolorem distinctio sed officiis hic architecto quos corporis, ullam illo, quasi ipsum facilis voluptas voluptatibus. Magnam.</p>
            <p>Consequatur rerum recusandae, in blanditiis maxime iusto dolores eveniet consequuntur tempora ut eos adipisci modi tempore distinctio maiores impedit animi dicta, illo doloribus, ipsum labore tenetur! Repellat, illum, beatae! Sed!</p>
            <p>Commodi nemo ratione aperiam nesciunt laboriosam ut at excepturi perferendis voluptatum distinctio eos quam, reiciendis necessitatibus quasi ducimus adipisci quis atque, officia eveniet eius numquam error quae magnam. Nisi, magnam!</p>
            <p>Michael</p>
          </section>
        </article>
      </div>
    </div>
  </div>
</div>

<?php include 'part/footer.php'; ?>
</body>
</html>