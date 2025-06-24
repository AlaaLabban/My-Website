<!DOCTYPE html>
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php");
include($_SERVER['DOCUMENT_ROOT'] . "/includes/links.php");
?>
<div class='content'>
  <h2>My Resume</h2>
  <p>You can view my resume directly below:</p>

  <object data="/resume/alaa-labban-resume.pdf" type="application/pdf" width="100%" height="700px">
    <p>Your browser does not support embedded PDF files. 
    You can <a href="/resume/alaa-labban-resume.pdf" target="_blank">view it here</a>.</p>
  </object>
</div>
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php");
?>
