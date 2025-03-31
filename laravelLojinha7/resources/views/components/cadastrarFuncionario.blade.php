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
            background-color: #F0D53B   ;
            height: 15%;
            width: 100%;
            align-content: center;
        }  
        .secao{
            height: 70%;
            width: 100%;
            float: left;
        }
        .rodape{
            margin: auto;
            background-color: #A9A9A9;
            height: 15%;
            width: 100%;
            align-content: center;
        }
        button{
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
        .blocoLogin{           
            border-style: solid; 
            border-radius: 2px;
            border-color: #FFBE50;
            border-width: 2px;
            width: 80%;         
            height: 70%;
            margin: auto;
            align-content: center;
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
        #botaoEntrar{
            background-color: #E1D27B;
        }
        #botaoEntrar:hover{
            background-color:rgb(199, 187, 107);
        }
        #botaoEntrar:active{
            background-color:#E1D27B;
        }
    </style>

    <header class="cabecalho">

        <div style="float:right; margin-right: 10%;">
            
        </div>

    </header>


    <section class="secao">

        <h1 style="font-size: 250%; text-align: center;">Cadastrar Funcionário</h1>

        <div class="blocoLogin">

           

            <div style="margin-left: 5%;">
                <div style="float:left  ;width: 50%;">
                    <div>
                        <h2>Nome:</h2>
                        <input class="inputs">
                    </div>

                    <div>
                        <h2>Idade:</h2>
                        <input class="inputs">  
                    </div>

                </div>

                <div style="float:right; width: 50%;">
                    <div>
                        <h2>Cargo:</h2>
                        <input class="inputs">  
                    </div>

                    <div>
                        <h2>Senha:</h2>
                        <input class="inputs">  
                    </div>
                </div>
            </div>

            <div style="width:100%; height:10%; float: left; margin-top:5%;">
                
                <a href="/"><button style="float: left; margin-left: 5%;">Voltar</button></a>

                <a href="homeLogado"><button id="botaoEntrar" style="float: right; margin-right: 5%;">Entrar</button></a>
                
            </div>

        </div>
                
        
    </section>

    <footer class="rodape">
        
    </footer>
        
    </body>
</html>