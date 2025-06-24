<!DOCTYPE html>
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php");
include($_SERVER['DOCUMENT_ROOT'] . "/includes/links.php");
?>
<div class='content'>
  <h2>Amazing photos of advanced fighter jets</h2>
  <div id="gallery">
    <div id="main-image">
      <img src="/images/image1.jpg" id="current-image" alt="Gallery Image" width="370px" height="700px">
    </div>
    <div id="thumbnails">
      <img src="/images/thumb1.jpg" class="thumbnail" onclick="showImage('/images/image1.jpg')" alt="">
      <img src="/images/thumb2.jpg" class="thumbnail" onclick="showImage('/images/image2.jpg')" alt="">
      <img src="/images/thumb3.jpg" class="thumbnail" onclick="showImage('/images/image3.jpg')" alt="">
      <img src="/images/thumb4.jpg" class="thumbnail" onclick="showImage('/images/image4.jpg')" alt="">
      <img src="/images/thumb5.jpg" class="thumbnail" onclick="showImage('/images/image5.jpg')" alt="">
      <img src="/images/thumb6.jpg" class="thumbnail" onclick="showImage('/images/image6.jpg')" alt="">
      <img src="/images/thumb7.jpg" class="thumbnail" onclick="showImage('/images/image7.jpg')" alt="">
      <img src="/images/thumb8.jpg" class="thumbnail" onclick="showImage('/images/image8.jpg')" alt="">
      <img src="/images/thumb9.jpg" class="thumbnail" onclick="showImage('/images/image9.jpg')" alt="">
      <img src="/images/thumb10.jpg" class="thumbnail" onclick="showImage('/images/image10.jpg')" alt="">
    </div>
    <div id="controls">
      <button onclick="prevImage()">Previous</button>
      <button onclick="nextImage()">Next</button>
    </div>
  </div>
  <h3> Special Thanks to Mohammed Abunawas for collecting these stunning fighter jet photos</h3>
</div>
<script src="/js/gallery.js"></script>
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php");
?>
