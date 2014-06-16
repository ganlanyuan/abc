<div class="breadcrumb">
  <a href="">
    <?php 
      if ($pagename == 'class-folder-files') {
        echo "Classfiles";
      } else if ($pagename == 'submission-uploads') {
        echo "Submissions";
      } else if ($pagename == 'quiz-grades') {
        echo "Quizzes";
      }
    ?>
  </a>
  <span>
    <?php 
      if ($pagename == 'class-folder-files') {
        echo "Class Resources";
      } else if ($pagename == 'submission-uploads') {
        echo "Homework Week 1: 1, 2, 3 John";
      } else if ($pagename == 'quiz-grades') {
        echo "Grades: 1, 2, 3 John Quiz";
      }
    ?>
  </span>
</div>