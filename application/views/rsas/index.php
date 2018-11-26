<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <style type="text/css">
            footer {
                position: fixed;
                bottom: 0;
                left: 0;
            }
        </style>
        <title>Trabalho de RSA</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->

        <!-- Bootstrap -->
        <link href="/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <br>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="border text-center col-sm-8">
                <br>
                <img src="/assets/imagens/rsaGrande.png" alt="Criptografia RSA">
                <h1 class="text-center"><b>Criptografia</b></h1>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="row" >
            <div class="col-sm-12">
                <div class="col-12">
                    <p   align="justify">  
                        &nbsp; RSA (Rivest-Shamir-Adleman) é um dos primeiros sistemas de criptografia de chave pública
                        e é amplamente utilizado para transmissão segura de dados. Neste sistema de criptografia,
                        a chave de encriptação é pública e é diferente da chave de decriptação que é secreta (privada).
                        No RSA, esta assimetria é baseada na dificuldade prática da fatorização do produto de dois números 
                        primos grandes, o "problema de fatoração". O acrônimo RSA é composto das letras iniciais dos 
                        sobresnomes de Ron Rivest, Adi Shamir e Leonard Adleman, fundadores da actual empresa RSA
                        Data Security, Inc., os quais foram os primeiros a descrever o algoritmo em 1978. Cliffor 
                        Cocks, um matemático Inglês que trabalhava para a agência de inteligência britânica Government
                        Communications Headquarters (GCHQ), desenvolveu um sistema equivalente em 1973, mas ele 
                        não foi revelado até 1997.

                        É considerado dos mais seguros, já que mandou por terra todas as tentativas de quebrá-lo. Foi também o 
                        primeiro algoritmo a possibilitar criptografia e assinatura digital, e uma das grandes inovações em 
                        criptografia de chave pública.

                        Um usuário do RSA cria e então publica uma chave pública baseada em dois números primos grandes, junto 
                        com um valor auxiliar. Os números primos devem ser mantidos secretos. Qualquer um pode usar a chave 
                        pública para encriptar a mensagem, mas com métodos atualmente publicados, e se a chave pública for muito grande,
                        apenas alguém com o conhecimento dos números primos pode decodificar a mensagem de forma viável. Quebrar
                        a encriptação RSA é conhecido como problema RSA. Se ele for tão difícil quanto o problema de fatoramento, 
                        ele permanece como uma questão em aberto.

                        O RSA é um algoritmo relativamente lento e, por isso, é menos usado para criptografar diretamente os dados
                        do usuário. Mais frequentemente, o RSA passa chaves criptografadas compartilhadas para criptografia de 
                        chave simétrica que, por sua vez, pode executar operações de criptografia-descriptografia em massa a uma 
                        velocidade muito maior.
                    </p>
                    <p align="justify">
                        &nbsp;Fatorar números pequenos é algo simples, mas fatorar números grandes é bem difícil e demorado, pois este é um 
                        problema que não pode ser resolvido em um tempo polinomial determinístico, ou falando de forma bem simplificada,
                        não há uma fórmula para isto.

                        E como o RSA usa isto tudo? As chaves pública e privada são geradas com base na multiplicação de dois números primos. O resultado
                        desta multiplicação será público mas, se o número for grande o suficiente, fatorar este número para descobrir os primos que multiplicamos 
                        para formá-lo pode demorar anos.

                        É desta particularidade que vem segurança do RSA. Na verdade não é impossível quebrar a criptografia RSA, mas como para fazer isto
                        seriam necessários alguns bons anos ou décadas, a ideia se torna inviável.</p>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
        <script src="/node_modules/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
