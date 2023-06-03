<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>
<script type="text/javascript">
$(document).ready(function(){
    $("a[rel='colorbox']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});
});
</script>

<div id="background-container">
  <div id="content">
    <h1>Gallery</h1>
    <p>Check in regularly as we update this page!</p>
    <div class="jarvis-gallery">
      <?php include_once('resources/UberGallery.php'); $gallery = UberGallery::init()->createGallery('images/gallery'); ?>
    </div>

  </div>
<?php include 'footer.php'; ?>
