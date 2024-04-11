<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Agenda de contatos</h1>
    <?php
    //teste do php
    echo"PHP funcionando!"."<br>";
    ?>
    <a href="cadastrar.php">Cadastrar</a><br><br>
    <?php

    //inclui um arquivo php
    include 'conecta.php';
  
   

    $sql = "SELECT * FROM agenda";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Nome</th><th>Telefone</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["Nome"]."</td><td>".$row["Telefone"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum contato encontrado";
    }
    $conn->close();
    ?>
    <p>produzido por: Tatiane Muniz</p>
</body>
</html>