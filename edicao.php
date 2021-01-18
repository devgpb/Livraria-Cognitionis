
<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edição</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/styleexibicao.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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
        <button class="btn btn-secundario btn-edicao btn-esquerda">Pesquisar</button>
        <button class="btn btn-secundario btn-exibicao "
        onclick= "window.location.href = 'adicionar.html'">
          <i class="fas fa-plus-circle"></i> Adcionar</button>
        <button  class="btn btn-secundario btn-exibicao "  onclick="window.location.href = 'Exibicao.php'">Voltar</button>
        
        </div>
        <div class="Div_Barra">
          <table class="table table-striped">
            <thead class="thead-dark">
              <tr>
                <th>
                  <span class="custom-checkbox">
                    <input type="checkbox" id="selectAll">
                    <label for="selectAll"></label>
                  </span>
                </th>
                <th>#</th>
                <th>Nome</th>
                <th>Autor</th>
                <th>Gênero</th>
                
                <th>Ações</th>
              </tr>
              <tbody>

              <?php
              while($result = mysqli_fetch_assoc($query)){
                echo('<tr> <td>
                   <span class="custom-checkbox">
                  <input type="checkbox" id="checkbox1" name="options[]" value="1">
                  <label for="checkbox1"></label>
                   </span>
                    </td>  
                    <td >'.$result['id'].'</td> <td>' .$result['nome']. '</td> <td>' .$result['autor'].'</td> <td>'.
                $result['genero'] .'</td>                   <td>
                <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons"
                    data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons"
                    data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                  </td> </tr>' );
               

              }
              ?>




              <!--
                <tr>
                  <td>
                    <span class="custom-checkbox">
                      <input type="checkbox" id="checkbox1" name="options[]" value="1">
                      <label for="checkbox1"></label>
                    </span>
                  </td>
                  <td>1</td>
                  <td>One Piece </td>
                  <td>Junki Takegami</td>
                  <td>Anime</td>
                  <td>...</td>
                  <td>
                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons"
                        data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons"
                        data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                  </td>
                </tr>
                -->
              </tbody>
          </table>
          </thead>
          </table>
        </div>
    </div>
  </div>
  <script 
  src="js/bootstrap.js"
  src="js/links.js">

 </script>
  
</body>


</html>