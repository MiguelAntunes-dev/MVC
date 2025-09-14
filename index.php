<?php
include 'generic/Autoload.php';

use generic\Controller;

if (isset($_GET["param"])){
    $controller = new Controller();
    $controller->verificarChamadas($_GET["param"]);
}

require_once 'DatabaseConnection.php';

echo "--- Tentando obter a primeira instância ---\n";

$db1 = DatabaseConnection::getInstance();

try {
    
    $stmt = $db1->query("SELECT * FROM TABELA");

   
    echo "\n--- Resultados da Consulta ---\n";
    $results = $stmt->fetchAll();

    if (count($results) > 0) {
        foreach ($results as $row) {
            echo "Nome: " . htmlspecialchars($row["nome"]) . "\n";
        }
    } if (count($results)<=0) {
        echo "Nenhum usuário encontrado na tabela.\n";
    }

} catch (PDOException $e) {
    echo "Erro ao executar a consulta: " . $e->getMessage() . "\n";
    echo "DICA: Verifique se a tabela 'usuarios' e a coluna 'nome' existem no seu banco de dados 'test'.\n";
}

echo "\n--- Tentando obter a segunda instância para provar o Singleton ---\n";
$db2 = DatabaseConnection::getInstance();


$db2->connect();

// Verificando se as duas variáveis apontam para o mesmo objeto
if ($db1 === $db2) {
    echo "\nAs variáveis \$db1 e \$db2 apontam para a MESMA instância. O Singleton funciona!\n";
} if ($db1 <> $db2) {
    echo "\nAs variáveis \$db1 e \$db2 são diferentes. Algo deu errado no Singleton.\n";
}

?>