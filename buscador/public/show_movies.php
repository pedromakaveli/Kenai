<?php 
    session_start();
    
    function show_movie($movie){
        $url = "https://www.omdbapi.com/?s={$movie}&apikey=be7603a2";
        $response = file_get_contents($url);

        if($response !== false){
            $data = json_decode($response, true);

            if(isset($data['Search'])){
                foreach($data['Search'] as $result){
                    $poster = $result['Poster'];
                    $title = $result['Title'];
                    $year = $result['Year'];
                    $genre = $result['imdbRating'];
                    $imdb = $result['imdbID'];

                    echo "
                    <div class='filme'>
                        <div class='img-poster'>
                            <a href='https://www.imdb.com/title/{$imdb}'>
                               <img class='poster' src='{$poster}'/>
                            </a>
                        </div>
                    </div>
                        ";
                }
            }
            
            else{
                echo "
                <div style='padding: 2rem'>
                    <div style='background: #d63c3e; color: #f9f9f9; font-size: 1rem; border-radius: 15px; padding: 15px 30px'>
                        <p>O filme não foi encontrado :(</p>
                    </div>
                </div>";
            }
        }

        else{
            echo 'Falha ao fazer a requisição';
        }
    }

    // Verifica se a variável de busca foi definida na sessão
    if (isset($_SESSION['Search'])) {
        // Obtém o valor da variável de busca
        $search = $_SESSION['Search'];

        echo show_movie($search);

        // Limpa a variável da sessão para não interferir futuramente
        unset($_SESSION['Search']);

    } else {
        // Caso a variável de busca não esteja definida na sessão, faça algo aqui (por exemplo, redirecionar novamente)
        header('Location: ../search_index.php');
        exit;
    }
?>