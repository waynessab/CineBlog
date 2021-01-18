<!DOCTYPE html>
<html>

<head>
    <title>CineBlog - Cadastre-se</title>
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
                <h2>Cadastre-se</h2> <br>


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
                <p>Cadastre-se e receba no seu email notificações de novos posts!</p><br>
                <form action="processa.php" method="POST" name="formulario">
                    Nome:
                    <input type="text" name="nome">
                    <br> <br>Email:
                    <input type="email" name="email">
                    <br> <br>Telefone:
                    <input type="number" name="telefone">
                    <br> <br>Senha:
                    <input type="password" name="senha">
                    <br> <br>
                    <input type="submit" value="Enviar">

                </form>
                   <script>
                       /*Função validar*/
                       function validar (){
                      var nome = document.getElementById("nome");
                      var email = document.getElementById("email");
                      var telefone = document.getElementById("telefone");
                      var senha = document.getElementById("senha");
                      
                      if (nome.value == ""){
                          alert("nome não informado");

                          nome.focus();
                          return;
                      }if (email.value == ""){
                          alert("email não informado");

                          email.focus();
                          return;
                      }if (telefone.value == ""){
                          alert("telefone não informado");

                          telefone.focus();
                          return;
                      }
                       }
                       </script>
            </div>
            <!--Fechamento Postagem-->
        </div>
        <div id="area-lateral">
            <div class="conteudo-lateral">
                <h3>Postagens recentes</h3>
                <div class="texto-postagem-lateral">
                    <p>A orfa</p>
                    <a href="conteudo2.html">Leia Mais</a>
                </div>
                <HR>
                <div class="texto-postagem-lateral">
                    <p>Friends</p>
                    <a href="conteudo3.html">Leia Mais</a>
                    <hr>
                </div>
            </div>
            <div class="conteudo-lateral">
                <h3>Categorias</h3>
                <br><a href="index.html">Home</a><br>
                <a href="Filmes.html">Filmes</a><br>
                <a href="Series.html">Séries</a><br>
                <a href="login.php">Login</a><br>
                <a href="cadastre-se.php">Cadastre-se</a><br>



            </div>
        </div>
        <div id="rodape">
            <p>&copy; Feito por: Wanessa de Souza Barros</p>
        </div>
        <div id="rodape">
            <p> Profa. Elisabete da Silva Santos</p>
        </div>

        <div id="rodape">
            <p>&copy; ILP-540 – Manhã - Fatec-SP</p>
        </div>
        <div id="rodape"> Todos os direitos reservados</div>

    </div>
</body>