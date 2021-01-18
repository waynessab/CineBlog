<!DOCTYPE html>

<html>
<head>
    <title>CineBlog - Login</title>
    <meta charset="utf-8">
    <meta media="viewport" content="width=devide-width">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <!--referencia para o arquivo css-->
</head>

<body>
    <div id="area-cabecalho">
        <div id="area-logo">
            <h1>Cine<span class="branco">Blog</span></h1>
        </div>

        <div id="area-menu">
            <a href="index.html">Home</a>
            <a href="filmes.html">Filmes</a>
            <a href="series.html">Séries</a>
            <a href="cadastre-se.php">Cadastre-se</a>
            <a href="login.php">Login</a>
        </div>
    </div>
    <div id="area-principal">
        <div id="area-postagens">
            <!--Abertura postagem-->
            <div class="postagem">
            <img width="620px" src="imagens/series.jpg">
               <form method="POST" action="conexao.php">
               <h2>Faça Login!</h2> <br>
               <script>
  function typeWriter(elemento) {
    const textoArray = elemento.innerHTML.split('');
    elemento.innerHTML = '';
    textoArray.forEach((letra, i) => {
      setTimeout(() => elemento.innerHTML += letra, 75 * i);
    });
  }
  const titulo = document.querySelector('h2');
  typeWriter(titulo);


                </script>
               <p>Faça Login para ter acesso a novidades! </p><br>
               
                <label>Email:</label><input type="text" name="email_pesquisa" id="email"><br><br>
                <label>Senha:</label><input type="password" name="senha" id="senha"><br><br>
                <input type="submit" value="   Entrar  " id="entrar" name="entrar"><br>

                </form>
            <script>//funcção pra pegar os names
const email = document.getElementById('email');
const arremail = [];

//função pra pegar o nome
function getEmail(e) {
    // console.log(arrNames);

    if (email.value === '') {
        alert('Por favor, insira um email.');
    } else {
        alert('Números não são permitidos. Por favor, digite um email válido');
    }
}

function clearInput() {
    document.getElementById('email').value = '';
}

document.getElementById('submit').addEventListener('click', getEmail);
//<!--Wanessa de Souza Barros--></script>
            <!--Fechamento Postagem-->

</div>



            </div>
        </div>
      
    </div>
</body>
