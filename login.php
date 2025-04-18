<!-- login.php -->

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF_8">
    <title>Login - Island AirLines</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div class="chat-container"> <!-- Riutilizziamo il contenitore bello -->
        <div class="chat-header">Accedi al tuo account</div>

        <form action="login_check.php" method="POST" class="chat-log">
            <input type="text" name="username" placeholder="Nome utente" required style="width: 100%; margin-bottom: 10px;">
            <input type="password" name="password" placeholder="Password" required style="width: 100%; margin-bottom: 10px;">
            <button type="submit">Accedi</button>
        </form>
    </div>
</body>

</html>