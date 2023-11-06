<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $products = file_get_contents("http://localhost/api/products.php");
    $products = json_decode($products);
    ?>

    <table border=1>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Brand</th>
            </tr>
        </thead>
        <?php
            foreach($products as $product){
                echo '<tr>';
                echo '<td>'.$product->id.'</td>';
                echo '<td>'.$product->name.'</td>';
                echo '<td>'.$product->brand.'</td>';
            }
        ?>
    </table>
</body>
</html>
