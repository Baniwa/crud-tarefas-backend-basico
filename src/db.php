<?php 
  // src/db.php
  $dbFile = __DIR__ . '/../database.sqlite';                                     // 1. Defirni o caminho relativo para o DB 

try {
    $pdo = new PDO('sqlite:' . $dbFile);                              // 2. Criar uma nova conexão PDO com driver SQLite 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);             // 3.  (melhor para depuração)
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);         // 4. Opcional: configurar fetch mode padrão para objetos 
} catch (PDOException $e) {
     die("Erro na conexão ao banco de dados: " . $e->getMessage());             // 5. Captura e exibe erros caso a conexão falhe 
}      
