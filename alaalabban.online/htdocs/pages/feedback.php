<!DOCTYPE html>
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php");
include($_SERVER['DOCUMENT_ROOT'] . "/includes/links.php");
?>
<div class='content'>
  <h2>Feedback Form</h2>
  <form id="feedbackForm" action="/pages/save_feedback.php" method="POST">
    <fieldset>
      <legend>Personal Info</legend>

      <label for="fname">First Name:</label>
      <input type="text" id="fname" name="fname" required>

      <label for="lname">Last Name:</label>
      <input type="text" id="lname" name="lname" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="phone">Phone:</label>
      <input type="text" id="phone" name="phone">

      <label for="university">University:</label>
      <input type="text" id="university" name="university">

      <label for="address">Address:</label>
      <input type="text" id="address" name="address">

      <label for="id_number">ID Number:</label>
      <input type="text" id="id_number" name="id_number">

      <label for="city">City:</label>
      <select name="city" id="city" required>
        <option value="">--Select a City--</option>
        <option value="Jeddah">Jeddah</option>
        <option value="Riyadh">Riyadh</option>
        <option value="Makkah">Makkah</option>
        <option value="Madinah">Madinah</option>
        <option value="Dammam">Dammam</option>
        <option value="Khobar">Khobar</option>
        <option value="Tabuk">Tabuk</option>
        <option value="Abha">Abha</option>
        <option value="Taif">Taif</option>
        <option value="Hail">Hail</option>
        <option value="Najran">Najran</option>
        <option value="Jazan">Jazan</option>
        <option value="Buraidah">Buraidah</option>
        <option value="Al Qassim">Al Qassim</option>
        <option value="Al Ahsa">Al Ahsa</option>
      </select>
    </fieldset>

    <fieldset>
      <legend>More Info</legend>

      <label>Gender:</label>
      <input type="radio" name="gender" value="Male"> 👨 Male
      <input type="radio" name="gender" value="Female"> 👩 Female

      <label>Hobbies:</label>
      <input type="checkbox" name="hobbies[]" value="Reading"> 📖 Reading
      <input type="checkbox" name="hobbies[]" value="Football"> ⚽ Football

      <label for="feedback">Your Feedback:</label>
      <textarea id="feedback" name="feedback" rows="5" required></textarea>
    </fieldset>

    <input type="submit" value="Submit">
  </form>
</div>
<script src="/js/validation.js"></script>
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php");
?>
