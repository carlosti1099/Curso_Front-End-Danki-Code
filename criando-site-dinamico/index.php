<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave,do,meu,site">
    <meta name="description" content="Descrição do meu website">
    <title>Projeto 01</title>
</head>
<body>
    <header>
        <div class="center">
            <div class="logo">Logomarca</div><!--logo-->
            <nav class="desktop">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
        </div><!--center-->
    </header>

    <section class="banner-principal">
        <div class="center">
            <form>
                <h2>Qual o seu melhor e-mail?</h2>
                <input type="text" name="email" required />
                <input type="submit" name="acao" value="Cadastrar!">
            </form>
        </div><!--center-->
    </section><!--banner-principal-->

    <section class="descricao-autor">
        <div class="w50">
            <h2>Carlos Roberto Costa Jr<h2>
            <p>The standard chunk of Lorem Ipsum used since the 1500s
                is reproduced below for those interested. Sections
                1.10.32 and 1.10.33 from "de Finibus Bonorum et
            </p>
            <p>A palavra “computador” vem do verbo “computar” que, por sua
                vez, significa “calcular”. Sendo assim, podemos pensar que
                a criação de computadores começa na idade antiga, já que a
                relação de contar já intrigava os homens.
            </p>
        </div><!--w50-->
        <div class="w50">
            <!--Pegar imagem depois--> 
            <img src="images/foto.jpg" width="200" />
        </div><!--w50-->
    </section><!--descricao-autor-->

    <section class="especialidades">
        <div class="center">
            <h2 class="title">Especialidades</h2>
            <div class="box-especialidade">
                <h3>icone1</h3>
                <h3>css3</h3>
                <p>ed placerat pharetra ultricies. Nulla facilisi. Curabitur neque ante, mollis id tellus at, semper pharetra tellus. Cras aliquet sapien et tempus sodales. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div><!--box-especialidade-->
            <div class="box-especialidade">
                <h3>icone2</h3>
                <h3>HTML5</h3>
                <p>ed placerat pharetra ultricies. Nulla facilisi. Curabitur neque ante, mollis id tellus at, semper pharetra tellus. Cras aliquet sapien et tempus sodales. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div><!--box-especialidade-->
            <div class="box-especialidade">
                <h3>icone3</h3>
                <h3>Javascript</h3>
                <p>ed placerat pharetra ultricies. Nulla facilisi. Curabitur neque ante, mollis id tellus at, semper pharetra tellus. Cras aliquet sapien et tempus sodales. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div><!--box-especialidade-->
        </div>
    </section><!--especialidades-->

    <section class="extras">
        <div class="center">
            <div class="w50">
                <h2 class="title">Depoimentos</h2>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Parágrafo de conteúdo da página. Basta escrever o que você quiser aqui que o conteúdo aparecerá conforme o planejado. Você pode criar parágrados separando o conteúdo com uma linha vazia no documento markdown.</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimento-single-->
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Parágrafo de conteúdo da página. Basta escrever o que você quiser aqui que o conteúdo aparecerá conforme o planejado. Você pode criar parágrados separando o conteúdo com uma linha vazia no documento markdown.</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimento-single-->
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Parágrafo de conteúdo da página. Basta escrever o que você quiser aqui que o conteúdo aparecerá conforme o planejado. Você pode criar parágrados separando o conteúdo com uma linha vazia no documento markdown.</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimento-single-->
            </div><!--w50-->

            <div class="w50">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
                    <ul>
                        <li>Parágrafo de conteúdo da página. Basta escrever o que você quiser aqui que o conteúdo aparecerá conforme o planejado. Você pode criar parágrados separando o conteúdo com uma linha vazia no documento markdown.</li>
                        <li>Parágrafo de conteúdo da página. Basta escrever o que você quiser aqui que o conteúdo aparecerá conforme o planejado. Você pode criar parágrados separando o conteúdo com uma linha vazia no documento markdown.</li>
                        <li>Parágrafo de conteúdo da página. Basta escrever o que você quiser aqui que o conteúdo aparecerá conforme o planejado. Você pode criar parágrados separando o conteúdo com uma linha vazia no documento markdown.</li>
                    </ul>
                </div><!--servicos-->
            </div><!--w50-->
        </div><!--center-->
    </section><!--extras-->

    <footer>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div><!--center-->
    </footer>

    
</body>
</html>