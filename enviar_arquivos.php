<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $file = $_FILES['pasta'];

    $uploadDir = 'C:\Users\ana.carolina\Desktop\NOVO TESTE';

    $uploadFile = $uploadDir . basename($file['name']);

    if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
        echo "Arquivo '$nome' enviado com sucesso para a pasta.";
    } else {
        echo "Erro ao enviar o arquivo.";
    }
}
?>
