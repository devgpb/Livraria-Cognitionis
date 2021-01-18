<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cognitionis</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleexibicao.css">
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <?php
      include_once('./funcoes/listagem_l.php');
    ?>
</head>
<body>
    <div class="conteiner_exibicao">
        <img class="logo" src="img/Art1.png" alt="" srcset="">
        <div class="content_exibicao">
            <div class="formulario_exibicao">
                <label class="label-input icone-mod" for=""> 
                    <i class="fas fa-search"></i>
                    <input class="inputs_exibicao" type="" placeholder="  Pesquisar">
                    
                </label>
                <button class="btn btn-secundario btn-exibicao btn-esquerda">Pesquisar</button>
                   
                <button class="btn btn-secundario btn-exibicao " onclick="window.location.href = 'edicao.html'">Editar</button>
              </div>
        <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Autor</th>
              <th scope="col">Gênero</th>
              <th scope="col">...</th>
            </tr>
            <tbody>
              <?php
              while($result = mysqli_fetch_assoc($query)){
                echo('<tr> <th scope="row" >' .$result['id'].'</th> <td>' .$result['nome']. '</td> <td>' .$result['autor'].'</td> <td>'.
                $result['genero'] .'</td> <td> ... </td> </td>' );
               

              }
              ?>

              <!--
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>...</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                  <td>...</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                  <td>...</td>
                </tr>
              -->
              </tbody>
            </table>
          </thead>
        </table>
    </div>
</div>

  <script src="js/bootstrap.js"></script>

</body>
</html>