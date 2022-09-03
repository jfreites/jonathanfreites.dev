<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRINTEE.mx | Printing Marketplace & Print on Demand Service</title>

    <link rel="stylesheet" href="/css/main.css" type="text/css">

    <script src="/js/ajax.js"></script>
    <script>
		function saveToFile() {
            var userInput = document.getElementById("email").value;
            ajax.post('/php/process.php', {email: userInput}, function (data) {
                response = JSON.parse(data);
                alert(response.message);
                document.getElementById("email").value = '';
            });
        }
    </script>
</head>
<body>
    <div class="center">
        <img width="400" src="/images/logo.png">
    </div>

    <div class="center">
        <input id="email" type="email" name="email" placeholder="Deja tu e-mail para enterarte del lanzamiento...">
        <input type="submit" onclick="saveToFile();" value="Enviar">
    </div>
</body>
</html>