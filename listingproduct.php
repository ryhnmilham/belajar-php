<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listing Produk | Tugas Arkatama</title>
    <link rel="stylesheet" href="style5.css" />
</head>
<body>
    <h2>Daftar Produk Kami</h2>
    <div class="container">
        <?php
        
        $products = array(
            array(
                'image' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/96/MTA-124940650/nike_sepatu-nike-dunk-low-michigan_full01.jpg',
                'name' => 'Nike Dunk Low Black Yellow',
                'price' => 'Rp 2.224.964,00'
            ),
            array(
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhzOJoIqzBix4zvjjc-CUtchnbjk9GCAjVra1tphYwmgSsXY-qM2LoqbxiXm0jAau-ZU4&usqp=CAU',
                'name' => 'Nike Dunk Low Black White',
                'price' => 'Rp 2.179.365,00'
            ),
            array(
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDExEnVTV1-sbAXcrGS5dWHoY0tVuH13OAPw&usqp=CAU',
                'name' => 'Nike Dunk Low Red Yellow',
                'price' => 'Rp 1.829.354,00'
            ),
            array(
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTx8nAih8NKvWJadkS9PPamWk4z8nge8WtDxQ&usqp=CAU',
                'name' => 'Nike Dunk High LX',
                'price' => 'Rp 2.667.378,00'
            ),
        );

        foreach ($products as $product) {
            echo '<div class="card">';
            echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '" />';
            echo '<div class="card-body">';
            echo '<p>' . $product['name'] . '</p>';
            echo '<p>' . $product['price'] . '</p>';
            echo '<button onclick="fetchDetail(\'' . $product['name'] . '\')">Selengkapnya</button>';
            echo '</div></div>';
        }
        ?>
    </div>
</body>
</html>
