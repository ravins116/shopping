<html>

<head>
     <title>PHP Test task</title>
</head>

<body>
     <h1>Hello world</h1>
     <h2></h2>
     <h3>Your Cart:</h3>
     <?php require_once __DIR__ . '/app/Shopping/View.php'; ?>
     <hr>
     <h3>Your Order summary:</h3>
     <?php require_once __DIR__ . '/app/Purchase/View.php'; ?>
     <hr>
</body>

</html>