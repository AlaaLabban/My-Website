<!DOCTYPE html>
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php");
include($_SERVER['DOCUMENT_ROOT'] . "/includes/links.php");
?>
<div class='content'>
  <h2>My Weekly Schedule</h2>

  <table class="schedule-table">
    <caption>9 Am --> 1 PM Schedule</caption>
    <thead>
      <tr>
        <th>Day</th>
        <th>9–10 AM</th>
        <th>10–11 AM</th>
        <th>11–12 PM</th>
        <th>12–1 PM</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Sunday</th>
        <td>CPCS403</td>
        <td colspan="2">FUT Champions</td>
        <td>AI</td>
      </tr>
      <tr>
        <th>Monday</th>
        <td>Math</td>
        <td>Study</td>
        <td>Free Time</td>
        <td rowspan="2">Lunch</td>
      </tr>
      <tr>
        <th>Tuesday</th>
        <td colspan="3">FUT Rivals</td>
      </tr>
      <tr>
        <th>Wednesday</th>
        <td>Networking</td>
        <td colspan="2">Research</td>
        <td>GYM</td>
      </tr>
      <tr>
        <th>Thursday</th>
        <td colspan="2">Workshop</td>
        <td>AI Lab</td>
        <td>Ethics</td>
      </tr>
      <tr>
        <th>Friday</th>
        <td colspan="4">Off / Review</td>
      </tr>
      <tr>
        <th>Saturday</th>
        <td colspan="4">No Classes</td>
      </tr>
    </tbody>
  </table>
</div>
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php");
?>
