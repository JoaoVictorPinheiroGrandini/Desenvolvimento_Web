<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$formulario = array(
    'id'=>'formCadastro',
    'tipo_submit'=>'POST', 
    'url_submit'=>'cadastro.php', 
    'itens'=> array(
        'nome'=>array('tipo'=> 'text', 'nome'=> 'nome', 'label'=> 'Nome', 'placeholder'=> 'Informe seu nome.'),
        'idade'=>array('tipo'=> 'number', 'nome'=> 'idade', 'label'=> 'Idade', 'placeholder'=> 'Informe sua idade.', 'funcao_validacao'=> 'validaIdade'),
        'sexo'=>array('tipo'=> 'radio', 'nome'=> 'sexo', 'label'=> 'Sexo', 'opcoes'=> array("M"=> "Masculino", "F"=>"Feminino", "O"=>"Outros")),
        'esporte_preferido'=>array('tipo'=> 'checkbox', 'nome'=> 'esporte_preferido', 'label'=> 'Esporte Pref.', 'opcoes'=> array("F"=> "Futebol", "V"=>"Vôlei", "N"=>"Natação", "O"=> "Outros"), 'obrigatorio'=>false, "valor_padrao"=> array("F", "N")),
        'cidade_nascimento'=>array('tipo'=> 'text', 'nome'=> 'cidade', 'label'=> 'Cidade de Nasc.', 'placeholder'=> 'Informe a cidade que você nasceu.'),
        'estado_nascimento'=>array('tipo'=> 'select', 'nome'=> 'estado_nascimento', 'label'=> 'Estado de Nasc.', 'opcoes'=> array("RJ"=> "Rio de Janeiro", "SP"=>"São Paulo", "ES"=>"Espírito Santo", "MG"=>"Minas Gerais", "O"=> "Outros"), "valor_padrao"=> "MG"),
        'cpf'=>array('tipo'=> 'number', 'nome'=> 'cpf', 'label'=> 'CPF', 'placeholder'=> 'Informe seu CPF.', 'funcao_validacao'=> 'validaCpf'),
        'descricao'=>array('tipo'=> 'textarea', 'nome'=> 'descricao', 'label'=> 'Descrição', 'placeholder'=> 'Faça uma descrição sobre você.', 'obrigatorio'=>false),
        'botao_enviar'=>array('tipo'=> 'submit', 'nome'=> 'enviar', 'label'=> 'Enviar'),
        'botao_limpar_form'=>array('tipo'=> 'reset', 'nome'=> 'reset', 'label'=> 'Limpar Formulário'),
    )
);

//Função para criar Label

function criarLabel($array, $nome, $label){
    echo "<label for=".$array[$nome]." >".$array[$label]."</label>";
}

//Função para criar inputs text e number

function criarInputSemOpcoes($chave, $array){
    criarLabel($array, "nome", "label");
    echo "<input type=".$array["tipo"]." id=".$chave." placeholder=".$array["placeholder"].">";
}

//Função para criar checkbox e radio

function criarInputComOpcoes($array){
    echo "<label>".$array["label"]."</label>";
    foreach($array["opcoes"] as $chave => $x){
      echo "<input type=".$array["tipo"]." id=".$array["nome"]."_".$chave." name=".$array["nome"]."value=".$chave.">";  
      criarLabel($array["opcoes"], $array["nome"]."_".$chave, $x);
    };
}

//Função para criar textarea

function criarTextArea($chave, $array){
    criarLabel($array, "nome", "label");
    echo "<textarea id=".$chave." name=".$array["nome"]." placeholder=".$array["placeholder"]."> </textarea>";
}


//função para criar select


function criarSelect($chave, $array){
    criarLabel($array, "nome", "label");
    echo "<select id=".$chave."name=".$array["nome"]."required>
    <option value=0 >-</option>";

    foreach($array["opcoes"] as $chave2 => $x){
        echo "<option value=".$chave2."> ".$x."</option>";
    };

    echo "</select>";
}


//função para criar button, submit e reset  PAREI AQUIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII

function criarBotao($chave, $array){
    
}

function criarFormulario($array){
    echo "<form action=".$array["url_submit"]."method=".$array['tipo_submit']." >";


    echo "</form>";
}
function criarCampos($id, $array){

    if($array["tipo"]=="text"){

    }
}
?>
</body>
</html>