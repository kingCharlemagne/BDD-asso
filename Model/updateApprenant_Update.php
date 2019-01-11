<?php
$updateApprenant=$bdd->prepare('UPDATE apprenant SET first_lesson = :a1, second_lesson= :a2, last_lesson= :a3 WHERE id=:id');
$updateApprenant->bindValue(':a1',strip_tags($_POST['lessonOne']));
$updateApprenant->bindValue(':a2',strip_tags($_POST['lessonTwo']));
$updateApprenant->bindValue(':a3',strip_tags($_POST['lessonThree']));
$updateApprenant->bindValue(':id',strip_tags($_GET['id']));

