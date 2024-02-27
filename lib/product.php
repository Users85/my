<?php
// Подключение к базе данных
require
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'hell';

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

// Вывод списка товаров
$stmt = $pdo->query('SELECT * FROM `admin`');
$products = $stmt->fetchAll();

foreach ($products as $product) {
    echo '<div class="product-card">';
    echo '<img src="' . $product['image_url'] . '" alt="' . $product['name'] . '">';
    echo '<h2>' . $product['name'] . '</h2>';
    echo '<p>Price: $' . $product['price'] . '</p>';
    echo '<p>Category: ' . $product['category'] . '</p>';
    echo '</div>';
}

// Добавление нового товара
$stmt = $pdo->prepare('INSERT INTO `admib` (name, price, category, image_url) VALUES (:name, :price, :category, :image_url)');
$stmt->execute([
    'name' => 'New Product',
    'price' => 9.99,
    'category' => 'New Category',
    'image_url' => 'img/new-product.jpg'
]);
?>