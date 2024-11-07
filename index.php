<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>CURSO PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal"> 
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Módulo 01 - Básico </h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola"> Exercicio A - Olá  PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=html">Exercicio B - Integração  HTML</a></li>
                        <li><a href="exercicio.php?dir=basico&file=css"> Exercicio C - Integração  CSS</a></li>
                        <li><a href="exercicio.php?dir=basico&file=comentario"> Exercicio D - Comentários  PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=desafio"> Desafio do Módulo</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Módulo 02 - Tipos</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">                Exercicio A - Tipo Inteiro</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=float">              Exercicio B - Tipo Float</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=aritmeticas">        Exercicio C - Operações Aritméricas</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_precedencia">Desafio Precedência</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=string">             Exercicio D - Tipo String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_string">     Desafio String</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Módulo 03  </h3>
                    <ul>
                        <li><a href="#">Exercicio A</a></li>
                        <li><a href="#">Exercicio B</a></li>
                        <li><a href="#">Exercicio C</a></li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>Módulo 04 </h3>
                    <ul>
                        <li><a href="#">Exercicio A</a></li>
                        <li><a href="#">Exercicio B</a></li>
                        <li><a href="#">Exercicio C</a></li>
                    </ul>
                </div>
                <div class="modulo laranja">
                    <h3>Módulo 05 </h3>
                    <ul>
                        <li><a href="#">Exercicio A</a></li>
                        <li><a href="#">Exercicio B</a></li>
                        <li><a href="#">Exercicio C</a></li>
                    </ul>
                </div>
                <div class="modulo verde-escuro ">
                    <h3>Módulo 06 </h3>
                    <ul>
                        <li><a href="#">Exercicio A</a></li>
                        <li><a href="#">Exercicio B</a></li>
                        <li><a href="#">Exercicio C</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho-escuro">
                    <h3>Módulo 07 </h3>
                    <ul>
                        <li><a href="#">Exercicio A</a></li>
                        <li><a href="#">Exercicio B</a></li>
                        <li><a href="#">Exercicio C</a></li>
                    </ul>
                </div>
                <div class="modulo azul-escuro">
                    <h3>Módulo 08 </h3>
                    <ul>
                        <li><a href="#">Exercicio A</a></li>
                        <li><a href="#">Exercicio B</a></li>
                        <li><a href="#">Exercicio C</a></li>
                    </ul>
                </div>
                <div class="modulo roxo-escuro ">
                    <h3>Módulo 09 </h3>
                    <ul>
                        <li><a href="#">Exercicio A</a></li>
                        <li><a href="#">Exercicio B</a></li>
                        <li><a href="#">Exercicio C</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS <?= date('Y'); ?>
    </footer>
    
</body>
</html>