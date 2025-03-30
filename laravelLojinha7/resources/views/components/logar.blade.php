<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>
    <body>
        
    <style>
        body{
            margin: auto;
            height: 717px;
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
            width: 70%;
            text-align: center;
            float: left;
        }
        .rodape{
            margin:auto;
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
            height: 60%;
            margin: auto;
            align-content: center;  
        }
        h2{
          float:left
        }
        .logo{
            height:70%;
            width: 30%;
            float:right; 
        }
        .inputs{
            background-color: #D9D9D9;
            border-style: none;
            height: 65%;
            width: 100%;
            border-radius: 2px;

        }
        button:hover{
            background-color:rgb(58, 58, 58);
        }
        button:active{
            background-color:#A9A9A9;
        }
        #botaoEntrar{
            float: right; 
            margin-right: 5%; 
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
            <a href="cadastrar"><button>Cadastrar</button></a>
        </div>

    </header>
    
    <div class="logo">
        <picture>
            <img> 
        </picture>
    </div>


    <section class="secao">

        <h1 style="font-size: 250%; text-align: center;">Acessar Sistema</h1>

        <div class="blocoLogin">

           


            <div style="width: 50%; margin: auto;">
                <div>
                    <h2>Nome:</h2>
                    <input class="inputs">
                </div>

                <div>
                    <h2>Senha:</h2>
                    <input class="inputs">  
                </div>

            </div>


            <div style="width:100%; height:10%; float: left; margin-top:5%;">
                
                <a href="/"><button style="float: left; margin-left: 5%;">Voltar</button></a>

                <a href="homeLogado"><button id="botaoEntrar" style="float: right; margin-right: 5%;">Entrar</button></a>
                
            </div>

        </div>
                
        
    </section>
        
    </section>

    <footer class="rodape">
        
    </footer>
        
    </body>
</html>