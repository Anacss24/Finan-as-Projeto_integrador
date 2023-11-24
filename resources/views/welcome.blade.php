<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQM1iCBP6qiyMrfUTIjrnJC2Zs-KFo9DfxdI9Lxem1i8HOUXEHc" type="image/png">
   <link rel="stylesheet" href="/css/style.css">
    <title>FINANÇAS</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
</head>

<body style="background-color: black;">

    <div>
        @if (Route::has('login'))
        <div>
            @auth
            <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
            <nav class="teste">
            <div class="logo">
            <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQM1iCBP6qiyMrfUTIjrnJC2Zs-KFo9DfxdI9Lxem1i8HOUXEHc" alt="" width="70px" height="70px">
             <h1>FINANÇAS</h1>
            </div>
            <a class="btn" href="{{ route('login') }}">ENTRAR</a>
            @if (Route::has('register'))
            <a class="btn" href="{{ route('register') }}">REGISTRO</a>
            
            </nav>
           
            @endif
            @endauth
        </div>
        <h2>O jeito mais fácil de controlar as suas finanças</h2>
        <div style="display: flex;">
         
        <p style="margin:40px; font-size:18px; margin-top:70px; ">Organize seu dinheiro em tempo real em uma solução completa, prática e segura, e garanta o controle total das suas finanças.<br><br>
        <strong> Perfil do usuário - </strong> Nesta etapa, você preencherá os dados gerais. Além disso, terá acompanhamento de receitas e despesas.<br><br>
        <strong> Categorização - </strong>  Categorizar suas despesas para ter uma melhor gestão.<br><br>
         <strong> Definição de Metas - </strong>  Adicionar metas a serem atingidas, por
         exemplo: economizar 100 reais ao fim do mês.<br><br>
        <strong> Calculadora - </strong> Recurso para cálculos.<br><br>     
        <strong> Conversor de moeda - </strong> Um recurso para os usuários verificarem o valor de moedas estrangeiras.
       </p>
       
        <img style="border-radius: 20px; width:400px; height:300; margin-bottom:0px; margin-top:40px" src="https://img.freepik.com/vetores-gratis/conceito-de-avaliacao-de-credito-de-design-plano-desenhado-a-mao_23-2149179725.jpg?w=740&t=st=1700342077~exp=1700342677~hmac=bccc25a1f51c5530d6b100cb348b5cd57565699d88060b2a0e537b4b087f752f" alt="">
   
        </div>
        <div style="display:flex;">
        <img style="width: 40px; height:40px; margin-left:30px" src="/img/icons8-cadeado-96.png" alt="">
        <strong><p style="margin-top: 15px;">Segurança dos seus dados em primeiro lugar</p></strong>
        <img style= "width: 40px; height:40px; margin-left:20px;" src="/img/icons8-dispositivo-48.png" alt="">
        <strong><p style="margin-top: 15px; margin-left:5px;">Acesse quando quiser, no celular ou computador</p></strong>
        </div>

        @endif

</body>

</html>