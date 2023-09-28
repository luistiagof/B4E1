<?php
if (isset($_POST['produtoId'])) {
    $produtoId = $_POST['produtoId'];

    // Produtos e valores
    $produtos = [
        1 => ['LEITE', 4.50],
        2 => ['BOLACHA', 2.00],
        3 => ['MIOJO', 3.50],
        4 => ['SALGADINHO', 2.50],
        5 => ['VINHO', 12.00],
        6 => ['CREME DE LEITE', 4.00],
        7 => ['REFRIGERANTE', 8.00],
        8 => ['BARRA DE CHOCOLATE', 11.00],
        9 => ['FARINHA DE TRIGO', 4.50],
        10 => ['LEITE CONDENSADO', 6.00]
    ];

    // Verifique se o produtoId existe na lista de produtos
    if (isset($produtos[$produtoId])) {
        list($nome, $valor) = $produtos[$produtoId];
        echo $nome . ': R$ ' . number_format($valor, 2, ',', '.');
    } else {
        echo 'Produto não encontrado';
    }
}
?>
