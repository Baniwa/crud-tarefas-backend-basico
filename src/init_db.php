<?php
require_once 'db.php';

$sql = "CREATE TABLE IF NOT EXISTS tarefas (
    id INTEGER PRIMARY KEY AUTOINCREMENT, 
    titulo TEXT NOT NULL,
    descricao TEXT,
    criado_em TEXT DEFAUT CURRENT_TIMESTAMP 
)";

try {
  $pdo->exec($sql);
  echo "Tabela 'tarefas' criada ou já existe";
} catch (PDOException $e) {
  die("Erro ao criar tabela: " . $e->getMessage());
}