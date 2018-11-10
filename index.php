<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Crud Ajax</title>
  </head>

  <body>
    <p> <br></p>

  <div class='container'>


    <button class='btn btn-primary'  data-toggle="modal" data-target="#addData"> Inserir dados </button>

    <!-- Modal -->
    <div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close pull-left" style="margin-left:0px !important;" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-center" style="text-align:center !important;" id="myModalLabel">Cadastro</h4>
          </div>
          <div class="modal-body">
          <form>
          
          <!-- Formulários do modal  -->
            <div class="form-group">
            <label for="nm">nome</label>
            <input type="text" class="form-control" id="nm" name="nm" placeholder="nome completo">
            </div>

            <div class="form-group">
            <label for="em">email</label>
            <input type="email" class="form-control" id="em"  name="em" placeholder="email@email.com">
            </div>

            <div class="form-group">
            <label for="hp">telefone</label>
            <input type="text" class="form-control" id="hp" name="hp" placeholder="(11) 9999-9999">
            </div>
          
            <div class="form-group">
            <label for="al">endereco</label>
            <textarea type="text" class="form-control" name="al" id="al"> </textarea>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            <button type="button" onclick="saveData()" class="btn btn-primary">Salvar</button>
          </div>
          </form>
        </div>
      </div>
    </div>

  </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
    
    function saveData(){
      var name = $('#nm').val();
      var email = $('#em').val();
      var phone = $('#ph').val();
      var address = $('#al').val();
      alert(name);

      $.ajax({
        type: "POST",
        url: "server.php?p=add",
        data: 'nm='+name+'&em='+email+'&ph='+phone+'&al='+address,
        success: function(msg){
          alert('Ta salvo! :D');
        }
      });


    }
    
    </script>


  </body>




</html>