<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon/favicon.ico">

    <title>DS2</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="css/starter-template.css" rel="stylesheet">

    <!-- Fonte ícones -->
    <script src="js/fontawesome.js"></script>

</head>

<body cz-shortcut-listen="true" class="bg-light">

    <main role="main" class="container">

        <div class="row">
            <div class="col-sm-4 offset-sm-4 border shadow bg-white rounded">
                <h1 class="text-center">
                    <a href="index.php">DS2</a>
                </h1>
                <p class="text-center">Crie sua conta gratuita</p>

                <form id="formCriaConta">

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-friends"></i></span>
                        </div>
                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome Completo" aria-label="E-mail" aria-describedby="basic-addon1">
                    </div>




                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="text" name="email" class="form-control" id="email" placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" aria-label="Senha" aria-describedby="basic-addon1">
                    </div>


                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="confirmasenha" id="confirmasenha" class="form-control" placeholder=" Repita a Senha" aria-label="Senha" aria-describedby="basic-addon1">
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" name="termos" class="form-check-input" id="termos">
                        <label class="form-check-label" for="1111">
                            Aceitar os <a href="#" data-toggle="modal" data-target="#modaltermos">termos</a>
                        </label>
                    </div>

                    <div class="form-group text-right">
                        <button class="btn btn-primary">Cadastrar</button>
                    </div>

                </form>

                <p>
                    <a href="login.php">Já tenho uma conta</a>
                </p>

            </div>
        </div>

    </main><!-- /.container -->

    

    <!-- Modal -->
    <div class="modal fade" id="modaltermos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Termos DS2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <h1 class="h5">Nossos termos </h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus repellat exercitationem numquam repellendus quisquam, architecto natus aut aspernatur eligendi eaque deserunt molestias dolore, nam earum voluptas harum ad impedit tempore?</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum obcaecati incidunt facilis odit officiis magnam maiores nulla non at ratione repudiandae optio eos, quod quaerat minus, quibusdam ea. Inventore, in?</p>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                 
                </div>
            </div>
        </div>
    </div>



    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="js/jquery-3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="jquery-validation/dist/jquery.validate.js"></script>

</body>
    
    <script>
        $(document).ready(function()){

        $("formCriaconta").validate({
        
            rules: {
                nome : 'required'
                email: {
                    required : true,
                    email: true
                }
                senha: {
                    required : true,
                    minlength :5
                }
                confirmasenha : {required: true
                                minlength : 5
                                equalto: "senha"                
                }
                
            },
            message: {
                nome: 'O campo Nome Completo é obritorio'
                email: {required: 'O campo E-mail é obritorio'
                        email: 'informe um email valido'
                }
                senha: {required:'O campo senha é obritorio'
                        minlength: 'insira no minimo 5 caracteres'
                confirmasenha : 'O campo Confirmar senha é obritorio'
            },
            
            errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `invalid-feedback` class to the error element
					error.addClass( "invalid-feedback" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.next( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
				}


        })
    }
    </script>
</html>