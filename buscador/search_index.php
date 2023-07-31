<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kenai - Plataforma de streaming, assista seus filmes aqui">
    <link rel="stylesheet" href="../principal/css/style.css">
    <link rel="stylesheet" href="search.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet"> 
    <title>Kenai</title>
</head>
<body>
        <header class="cabecalho">
            <img src="../principal/img/Kenai-rodape.svg" alt="Kenai">
    
                <nav aria-label="Primária">
                    <ul class="cabecalho-menu">
                        <li>
                            <a href="#">
                                <img src="../principal/img/icones/search.svg" alt="Pesquisar">
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
                                    <img src="../principal/img/icones/user.svg" alt="Usuário">
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="../principal/img/icones/bell.svg" alt="Usuário">
                                </a>
                            </li>
                        </ul>               
                    </ul>
                </nav>
        </header>

        
        <form class="container" action="public/search.php" method="POST">
            <input type="text" name="search" id="" placeholder="Pesquisar">
        </form>

        <?php 
            session_start();

            if($_SESSION['Warning']){
                $warning = $_SESSION['Warning'];

                $warning_box = "
                    <div style='padding: 2rem'>
                        <div style='background: #d63c3e; color: #f9f9f9; font-size: 1rem; border-radius: 15px; padding: 15px 30px'>
                            <p>{$warning}</p>
                        </div>
                    </div>
                ";
                echo $warning_box;

                unset($_SESSION['Warning']);
            }
        ?>
    </div>

</body>
</html>
