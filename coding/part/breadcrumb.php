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
      } else if ($pagename == 'grade-final') {
        echo "Grades";
      } else if ($pagename == 'discussion-post') {
        echo " New Testment 101 - Sample Class";
      }
    ?>
  </a>
  <?php
    if ($pagename == 'quiz-response') {
      echo "<a href=''>1, 2, 3 John Quiz</a>";
    } else if ($pagename == 'discussion-post') {
      echo "<a href=''>Week 1 Discussion: 1, 2, 3 John</a>";
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
      } else if ($pagename == 'grade-final') {
        echo "Leann Goatley";
      } else if ($pagename == 'discussion-post') {
        echo "Verses to choose";
      }
    ?>
  </span>
</div>