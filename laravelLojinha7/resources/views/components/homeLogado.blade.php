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
        button{
            height: 10%;
            width: 100%;
            background-color: #A9A9A9;
            font-size:17px;
            border-style: solid;
            border-width: 1px;
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

    <aside id="aside">

        <a><button id="botaoColorido">Painel de Controle</button></a>
        <a><button>Funcionário</button></a>
    
    </aside>


    <section class="secao">

        <h1 style="font-size: 250%; text-align: center;">Painel de Controle</h1>

        <div class="blocoPainelControle">

            <div style="float: left; width: 50%;">
                <h1 style="font-size: 220%; text-align: center;">Ultimas Entradas</h1>
            </div>    

            <div style="float: right; width: 50%;">
                <h1 style="font-size: 220%; text-align: center;">Ultimos Funcionários</h1>
            </div>  

        </div>
                
        
    </section>

    <footer class="rodape">
        
    </footer>
        
    </body>
</html>