<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kenai - Plataforma de streaming, assista seus filmes aqui">
    <link rel="stylesheet" href="../../principal/css/style.css">
    <link rel="stylesheet" href="../search.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet"> 
    <title>Kenai</title>
</head>
<body>
<header class="cabecalho">
        <a href="../../principal/">
            <img src="../../principal/img/Kenai-rodape.svg" alt="Kenai">
        </a>
    
                <nav aria-label="Primária">
                    <ul class="cabecalho-menu">
                        <li>
                            <a href="../search_index.php">
                                <img src="../../principal/img/icones/search.svg" alt="Pesquisar">
                            </a>
                        </li>
                        
                        <li>
                            <a href="#introducao">Ínicio</a>
                        </li>
                        
                        <li>
                            <a href="#introducao">Minha lista</a>
                        </li>
    
                        <ul class="user-alert">
                            <li>
                                <a href="#">
                                    <img src="../../principal/img/icones/user.svg" alt="Usuário">
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="../../principal/img/icones/bell.svg" alt="Usuário">
                                </a>
                            </li>
                        </ul>               
                    </ul>
                </nav>
        </header>

        <form class="container" action="./search.php" method="POST">
                <input type="text" name="search" id="" placeholder="Pesquisar">
        </form>

        <main class="resultado-principal container">

            <section class="populares">
                <h2 class="titulo-2">Resultados para <?php session_start(); echo ucfirst($_SESSION['Search'])?></h2>
                
                <div class="filmes-grid">
                    
                    <?php 
                        session_start();
                        include_once('./show_movies.php');

                    ?>
                    
                </div>
            </section>
        </main>

        <footer class="rodape container">
            <svg width="95" height="30" viewBox="0 0 95 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.76 29V3.8H6.24V14.4L14.92 3.8H21.72L12.32 14.8L22.52 29H15.76L8.32 18.24L6.24 20.44V29H0.76ZM41.8922 20.84H29.2122V21C29.2122 22.52 29.7455 23.6533 30.8122 24.4C31.8789 25.1467 33.2522 25.52 34.9322 25.52C35.9989 25.52 36.9322 25.4133 37.7322 25.2C38.5589 24.9867 39.3055 24.7333 39.9722 24.44L40.9322 28.16C40.2122 28.5067 39.3055 28.8 38.2122 29.04C37.1189 29.3067 35.8255 29.44 34.3322 29.44C32.8922 29.44 31.5322 29.2533 30.2522 28.88C28.9989 28.48 27.8922 27.88 26.9322 27.08C25.9989 26.28 25.2522 25.2667 24.6922 24.04C24.1322 22.8133 23.8522 21.3467 23.8522 19.64C23.8522 18.12 24.0789 16.7467 24.5322 15.52C24.9855 14.2667 25.6255 13.2 26.4522 12.32C27.3055 11.44 28.3189 10.76 29.4922 10.28C30.6655 9.77333 31.9722 9.52 33.4122 9.52C35.9989 9.52 38.0522 10.3067 39.5722 11.88C41.1189 13.4533 41.8922 15.6533 41.8922 18.48V20.84ZM36.4522 17.2C36.4522 16.6933 36.3855 16.2 36.2522 15.72C36.1455 15.24 35.9589 14.8267 35.6922 14.48C35.4255 14.1067 35.0922 13.8133 34.6922 13.6C34.2922 13.3867 33.7989 13.28 33.2122 13.28C32.1455 13.28 31.2655 13.64 30.5722 14.36C29.8789 15.08 29.4655 16.0533 29.3322 17.28L36.4522 17.2ZM50.9544 29H45.6344V9.92H49.7944L50.4344 12.36C51.3144 11.4533 52.2744 10.76 53.3144 10.28C54.381 9.77333 55.5544 9.52 56.8344 9.52C58.941 9.52 60.5544 10.0933 61.6744 11.24C62.7944 12.3867 63.3544 14.0533 63.3544 16.24V29H58.0344V16.8C58.0344 15.8133 57.7944 15.04 57.3144 14.48C56.8344 13.8933 56.1277 13.6 55.1944 13.6C54.501 13.6 53.7677 13.8 52.9944 14.2C52.2477 14.5733 51.5677 15.0933 50.9544 15.76V29ZM68.3372 11.6C69.4839 10.9333 70.6972 10.4267 71.9772 10.08C73.2572 9.70667 74.6172 9.52 76.0572 9.52C77.2039 9.52 78.2439 9.65333 79.1772 9.92C80.1372 10.1867 80.9505 10.6133 81.6172 11.2C82.3105 11.76 82.8305 12.4933 83.1772 13.4C83.5505 14.28 83.7372 15.3467 83.7372 16.6V29H79.6172L79.1372 27.04H78.9772C78.3639 27.7867 77.5772 28.3733 76.6172 28.8C75.6839 29.2267 74.5905 29.44 73.3372 29.44C72.2972 29.44 71.3772 29.2933 70.5772 29C69.7772 28.68 69.0972 28.2667 68.5372 27.76C67.9772 27.2267 67.5505 26.6 67.2572 25.88C66.9905 25.16 66.8572 24.3867 66.8572 23.56C66.8572 22.4667 67.0839 21.5333 67.5372 20.76C68.0172 19.96 68.6705 19.3067 69.4972 18.8C70.3239 18.2933 71.2839 17.92 72.3772 17.68C73.4972 17.44 74.6972 17.32 75.9772 17.32H78.3772V16.16C78.3772 15.28 78.0972 14.64 77.5372 14.24C77.0039 13.8133 76.2439 13.6 75.2572 13.6C74.4839 13.6 73.6839 13.72 72.8572 13.96C72.0572 14.2 71.1639 14.5867 70.1772 15.12L68.3372 11.6ZM78.4172 20.64L76.6972 20.68C75.0705 20.7333 73.9372 21.0133 73.2972 21.52C72.6572 22 72.3372 22.5867 72.3372 23.28C72.3372 24.1867 72.6039 24.8133 73.1372 25.16C73.6972 25.48 74.3239 25.64 75.0172 25.64C75.7105 25.64 76.3639 25.44 76.9772 25.04C77.6172 24.64 78.0972 24.1733 78.4172 23.64V20.64ZM88.6916 29V9.92H94.0116V29H88.6916ZM91.3716 5.84C90.4649 5.84 89.7582 5.58666 89.2516 5.08C88.7449 4.54667 88.4916 3.89333 88.4916 3.12C88.4916 2.34666 88.7449 1.70666 89.2516 1.2C89.7582 0.666665 90.4649 0.399999 91.3716 0.399999C92.2516 0.399999 92.9449 0.666665 93.4516 1.2C93.9849 1.70666 94.2516 2.34666 94.2516 3.12C94.2516 3.89333 93.9982 4.54667 93.4916 5.08C92.9849 5.58666 92.2782 5.84 91.3716 5.84Z" fill="#F9F9F9"/>
                </svg>
            
                
            <ul class="rodape-social">
                <li><a href="#"><img src="../../principal/img/icones/instagram.svg" height="25" width="25" alt="Instagram"> </a></li>
                <li><a href="#"><img src="../../principal/img/icones/twitter.svg" height="25" width="25" alt="Twitter"> </a></li>
                <li><a href="#"><img src="../../principal/img/icones/facebook.svg" height="25" width="25" alt="Facebook"> </a></li>
            </ul>
        </footer>
    </div>

</body>
</html>
