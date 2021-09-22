<?php

// $nome = "Marcio";

$resposta = readline("Digite a opcao");
while($resposta == 's' || $resposta == 'S'){}

//maiúscula
$resposta = strtoupper($resposta);

//retira os espaços da string
$resposta = ltrim($resposta);

while($resposta == 'S'){    
    // echo "resposta em maíuscula \n";
    break;
}

//míniscula
$resposta = strtolower($resposta);
while($resposta == 's'){}

//só o 1º caractere em maísculo
$string = "fabio da silva";
$string = ucfirst($string);
// echo $string . "\n";

//1º caractere de cada palavra em maísculo
$string = "fabio da silva";
$string = ucwords($string);
// echo $string;


//Criptografar os dados MD5
$senha = "56789";
$senha = md5($senha);

if ($senha == md5("56789"))
// echo $senha;

//criptografar os dados usando uma chave
$chave = str_shuffle("um texto qualquer");
$chave = rand(5, 25);//min e max
$senhanova = 12345;
$senhanova = crypt($senhanova, $chave); //2 parâmetros - 1 senha, 2 chave

// echo "Senha com md5=$senha - senha com crypt = $senhanova" ;

//criptografar a string em 128bits
$senhaatual = "123456";
$senhaatual = hash("sha512",$senhaatual); //1 tipo da criptografia 2 string

//Substituir conteúdo de uma string
$fruta = "banana prata";
$fruta = str_replace("prata","maça", $fruta);//1 encontrar, 2 substituir, 3 variável

// echo $fruta;

//quantide de caracteres de uma string
$nome = "Jó";
$qtd = strlen($nome);   

if($qtd > 2){
    // echo $nome;
}

//pegar partes de uma string
$nome = "Carlos Eduardo";
$sobrenome = substr($nome,7,7);//1 variavel //2 inicio //fim
$sobrenome = substr($nome,-7);//de trás para frente

//unset
$cidade = "Campinas";
unset($cidade);
// echo $cidade;

//converter string em vetor - explode()
$nomes = "Ana, Carlos, Davi, Cintia, Pedro, Daiane";
$nomes = ltrim($nomes);
$vetorNomes = explode(",",$nomes);//1 delimitador 2 variável
echo $vetorNomes[5];

//converter vetor em string - implode()
$nomes = implode(",",$vetorNomes);
?>