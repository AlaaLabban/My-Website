<!DOCTYPE html>
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php");
include($_SERVER['DOCUMENT_ROOT'] . "/includes/links.php");
?>
<div class='content'>
  <h2>Contact Me</h2>
  <p>You can reach me via email:</p>

  <p id="email-placeholder">[Loading email address...]</p>

  <script>
    // Scramble your email address safely
    const parts = ['alabban0016', '@', 'stu.kau.edu.sa'];
    const email = parts.join('');
    const emailLink = `<a href="mailto:${email}">${email}</a>`;
    document.getElementById('email-placeholder').innerHTML = emailLink;
  </script>
</div>
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php");
?>
