<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body>
  <div class="container mx-auto" p-4>
<!-- header.php -->
 <div class="w-full mb-4">
<?php include_once 'header.php';?>
</div>

<div class="grid md:grid-cols-4 grid-cols-1">
<!-- home.php -->
 <div class="col-span-3">
 <?php include_once 'home.php';?>

 </div>


<!-- footer.php --> 
  <div class="w-full">
  <?php include_once 'footer.php';?>

  </div>



<!-- sidebar.php --> 
 <div class="col-span-1">
 <?php include_once 'sidebar.php';?> 

 </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>