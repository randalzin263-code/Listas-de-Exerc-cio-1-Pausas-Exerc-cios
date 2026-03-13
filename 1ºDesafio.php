<?php

$carrinho = [
    ["id" => 1, "nome" => "SSD 512GB",        "preco" => 280.00, "quantidade" => 1],
    ["id" => 2, "nome" => "Memória RAM 8GB",  "preco" => 150.00, "quantidade" => 2],
    ["id" => 3, "nome" => "Cabo HDMI 2.0",    "preco" => 25.00,  "quantidade" => 4],
    ["id" => 4, "nome" => "Mouse Gamer",      "preco" => 120.00, "quantidade" => 1],
    ["id" => 5, "nome" => "Teclado Mecânico", "preco" => 350.00, "quantidade" => 1],
    ["id" => 6, "nome" => "Fonte 600W",       "preco" => 420.00, "quantidade" => 1],
    ["id" => 7, "nome" => "HD Externo 1TB",   "preco" => 390.00, "quantidade" => 1],
    ["id" => 8, "nome" => "Headset USB",      "preco" => 180.00, "quantidade" => 2],
];

$totalCompra = 0;

echo "<h2>Resumo do Pedido:</h2>";

foreach ($carrinho as $item) {
    $subtotal = $item["preco"] * $item["quantidade"];
    $totalCompra += $subtotal;

    echo "<strong>{$item['nome']}</strong><br>";
    echo "Quantidade: {$item['quantidade']}<br>";
    echo "Subtotal: R$ " . number_format($subtotal, 2, ',', '.') . "<br><br>";
}

echo "<hr>";

echo "<strong>Subtotal da Compra:</strong> R$ " . number_format($totalCompra, 2, ',', '.') . "<br>";

if ($totalCompra > 200) {
    $desconto = $totalCompra * 0.10;
    $totalFinal = $totalCompra - $desconto;

    echo "<strong>Desconto Aplicado (10%):</strong> R$ " . number_format($desconto, 2, ',', '.') . "<br>";
    echo "<strong>Total Final a Pagar:</strong> R$ " . number_format($totalFinal, 2, ',', '.') . "<br>";
} else {
    echo "<strong>Nenhum desconto aplicado.</strong><br>";
    echo "<strong>Total Final:</strong> R$ " . number_format($totalCompra, 2, ',', '.') . "<br>";
}

?>
