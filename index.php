<!DOCTYPE html>
<html>
<head>
    <title>Envio de Mensagem</title>
</head>
<body>

<?php
    // Verifica se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica se o campo de mensagem não está vazio
        if (!empty($_POST["mensagem"])) {
            // Captura a mensagem do formulário
            $mensagem = $_POST["mensagem"];
            
            // Exibe a mensagem
            echo "<h2>Sua mensagem:</h2>";
            echo "<p>" . $mensagem . "</p>";
        } else {
            echo "<p>Por favor, insira uma mensagem.</p>";
        }
    }
?>

<!-- Formulário para enviar mensagem -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="mensagem">Mensagem:</label><br>
    <textarea id="mensagem" name="mensagem" rows="4" cols="50"></textarea><br>
    <input type="submit" value="Enviar">
</form>

</body>
</html>
