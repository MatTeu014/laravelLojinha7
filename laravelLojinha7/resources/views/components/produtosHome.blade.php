<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
    </head>
    <body>
        
        <style>
            body{
                margin: auto;
                height: 100vh;
                width: 100%;
            }
            .cabecalho{
                background-color: #F0D53B;
                height: 15%;
                width: 100%;
                align-content: center;
            }  
            .secao{
                height: 70%;
                width: 80%;
                float: right;
            }
            #aside{
                background-color: #A9A9A9;
                height: 70%;
                width: 15%;
                float:left
            }
            .rodape{
                margin: auto;
                background-color: #A9A9A9;
                height: 15%;
                width: 100%;
                align-content: center;
            }
            #botaoVoltar{
            height: 40px;
            width: 100px;
            border-radius: 2px;
            border-style: none; 
            background-color: #A9A9A9;
            font-size:17px;
        }
            a{
                text-decoration: none;
                color: black;
            }
            .blocoPainelControle{           
                border-style: solid; 
                border-radius: 2px;
                border-color: #FFBE50;
                border-width: 2px;
                width: 80%;         
                height: 70%;
                margin: auto;
                margin-top: 2%;
            }
            .inputs{
                background-color: #D9D9D9;
                border-style: none;
                height: 30px;
                width: 90%;
                border-radius: 2px;
            }
            button:hover{
                background-color:rgb(58, 58, 58);
            }
            button:active{
                background-color:#A9A9A9;
            }
            #botaoColorido{
                background-color: #F0D53B;
            }
            #botaoColorido:hover{
                background-color:rgb(199, 187, 107);
            }
            #botaoColorido:active{
                background-color:#E1D27B;
            }
        </style>

        <header class="cabecalho">

            <div style="float:right; margin-right: 10%;">
            
            </div>

        </header>

        

        <section class="secao">

            <h1 style="font-size: 250%; text-align: center; margin-top: 2%;">Produtos</h1>

            <div class="blocoPainelControle">

                <div style="float: left; width: 50%;">
                   
                </div>    

                <div style="float: right; width: 50%;">
                    
                </div>  

            </div>
                    
        </section>

        <div class="flex-shrink-0 p-3" style="width: 280px; float: left;">
            <a class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
            <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-5 fw-semibold">Menu</span>
            </a>
            <ul class="list-unstyled ps-0" style="">
            <li class="mb-1">
                <a href="homeLogado"><button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                Painel de Controle
                </button></a>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                    Funcionário
                </button>
                <div  class="collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="funcionarioEditar" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Editar</a></li>
                    <li><a href="funcionarioAdicionar" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Adicionar</a></li>
                </ul>
                </div>
            </li>
            <li class="mb-1">
                <button style="background-color: #F0D53B;" class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                    Produtos
                </button>
                <div>
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="" class="link-body-emphasis d-inline-flex text-decoration-none rounded"><button style="background-color: #E9DB8C; border-style: none;">Editar</button></a></li>
                    <li><a href="" class="link-body-emphasis d-inline-flex text-decoration-none rounded"><button style="background-color: #E9DB8C; border-style: none;">Adicionar</button></a></li>
                </ul>
                </div>
            </li>
            <li class="border-top my-3"></li>
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                Account
                </button>
                <div class="collapse" id="account-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New...</a></li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Profile</a></li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Settings</a></li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Sign out</a></li>
                </ul>
                </div>
            </li>
            </ul>
        </div>
        
        <footer class="rodape">
            
        </footer>
        
    </body>
</html>