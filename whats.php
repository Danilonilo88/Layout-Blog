<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balão do WhatsApp</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <style>
        .whatsapp-button {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            z-index: 1000;
            animation: float 3s ease-in-out infinite;
        }

        .whatsapp-button i {
            margin-top: 16px;
        }

        @keyframes float {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <!-- <a href="https://wa.me/5519981385919?text=Olá, gostaria%20de%20mais%20informações." class="whatsapp-button" target="_blank">
        <i class="fa fa-whatsapp"></i>
    </a> -->
    <a href="https://wa.me/5519993669811?text=Olá, gostaria%20de%20mais%20informações." class="whatsapp-button" target="_blank">
        <img src="imagens/whatsapp.svg">
    </a>
</body>

</html>