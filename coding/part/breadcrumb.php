<div class="breadcrumb">
  <a href="">
    <?php 
      if ($pagename == 'class-folder-files') {
        echo "Classfiles";
      } else if ($pagename == 'submission-uploads') {
        echo "Submissions";
      } else if ($pagename == 'quiz-grades') {
        echo "Quizzes";
      } else if ($pagename == 'quiz-response') {
        echo "Quizzes";
      }
    ?>
  </a>
  <?php
    if ($pagename == 'quiz-response') {
      echo "<a href=''>1, 2, 3 John Quiz</a>";
    }
  ?>
  <span>
    <?php 
      if ($pagename == 'class-folder-files') {
        echo "Class Resources";
      } else if ($pagename == 'submission-uploads') {
        echo "Homework Week 1: 1, 2, 3 John";
      } else if ($pagename == 'quiz-grades') {
        echo "Grades: 1, 2, 3 John Quiz";
      } else if ($pagename == 'quiz-response') {
        echo "Responses:John Smith";
      }
    ?>
  </span>
</div>