<?php
$alunos = [
    ["nome" => "Ana", "idade" => 18, "nota" => 8.5],
    ["nome" => "Bruno", "idade" => 20, "nota" => 7.0],
    ["nome" => "Carlos", "idade" => 19, "nota" => 9.2],
    ["nome" => "Daniela", "idade" => 21, "nota" => 6.8],
    ["nome" => "Eduardo", "idade" => 22, "nota" => 5.9],
    ["nome" => "Fernanda", "idade" => 18, "nota" => 7.8],
    ["nome" => "Gabriel", "idade" => 20, "nota" => 8.1],
    ["nome" => "Helena", "idade" => 19, "nota" => 9.0],
    ["nome" => "Igor", "idade" => 23, "nota" => 6.4],
    ["nome" => "Juliana", "idade" => 21, "nota" => 7.5],
    ["nome" => "Lucas", "idade" => 20, "nota" => 8.9],
    ["nome" => "Mariana", "idade" => 18, "nota" => 9.4],
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Tabela de Alunos</title>
  <style>
    table { border-collapse: collapse; width: 100%; max-width: 720px; }
    th, td { border: 1px solid #ccc; padding: 8px 10px; text-align: left; }
    thead th { background: #f3f3f3; }
  </style>
</head>
<body>

<table>
  <thead>
    <tr>
      <th>Nome</th>
      <th>Idade</th>
      <th>Nota</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($alunos as $aluno): ?>
      <tr>
        <td><?= htmlspecialchars($aluno['nome'], ENT_QUOTES, 'UTF-8') ?></td>
        <td><?= (int) $aluno['idade'] ?></td>
        <td><?= number_format((float) $aluno['nota'], 1, ',', '') ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    
</body>
</html>
