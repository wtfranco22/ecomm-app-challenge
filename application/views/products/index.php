
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de productos</title>
</head>

<body>
<?php
foreach ($products as $producto){
	echo 'id'. $producto->id.'<br>';
	echo 'title'. $producto->title.'<br>';
	echo 'price'. $producto->price.'<br>';
	echo 'created_at'. $producto->created_at.'<br>';
}
?>    
</body>
</html>