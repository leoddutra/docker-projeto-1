<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - My PHP App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="assets/images/logo.png" alt="Logo">
        <h1>Fale Conosco</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>
    </nav>
    <main>
        <h2>Formulário de Contato</h2>
        <form action="contato.php" method="post">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="message">Mensagem:</label><br>
            <textarea id="message" name="message" rows="5" cols="40" required></textarea><br><br>
            <input type="submit" value="Enviar">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);

            echo "<h3>Obrigado, $name! Sua mensagem foi recebida.</h3>";
        }
        ?>
    </main>
    <footer>
        <p>&copy; 2024 Minha Aplicação PHP</p>
    </footer>
</body>
</html>
