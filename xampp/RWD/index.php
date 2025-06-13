<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href=/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
            <?php include_once 'header.php'; ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
            <?php include_once 'menu.php'; ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
        <?php include_once 'home.php'; ?>
		</div>
		<div class="col-md-4">
        <?php include_once 'sidebar.php'; ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
        <?php include_once 'footer.php'; ?> 
		</div>
	</div>
</div>
    <h1></h1>
    <script src="/js/bootstrap.bundle.min.js"></script>
  </body>
</html>