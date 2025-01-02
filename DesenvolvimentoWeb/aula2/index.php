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
        'cidade_nascimento'=>array('tipo'=> 'text', 'nome'=> 'cidade', 'label'=> 'Cidade de Nasc.', 'placeholder'=> "Informe a cidade que você nasceu."),
        'estado_nascimento'=>array('tipo'=> 'select', 'nome'=> 'estado_nascimento', 'label'=> 'Estado de Nasc.', 'opcoes'=> array("RJ"=> "Rio de Janeiro", "SP"=>"São Paulo", "ES"=>"Espírito Santo", "MG"=>"Minas Gerais", "O"=> "Outros"), "valor_padrao"=> "MG"),
        'cpf'=>array('tipo'=> 'number', 'nome'=> 'cpf', 'label'=> 'CPF', 'placeholder'=> 'Informe seu CPF.', 'funcao_validacao'=> 'validaCpf'),
        'descricao'=>array('tipo'=> 'textarea', 'nome'=> 'descricao', 'label'=> 'Descrição', 'placeholder'=> "Faça uma descrição sobre você", 'obrigatorio'=>false),
        
        'botao_enviar'=>array('tipo'=> 'submit', 'nome'=> 'enviar', 'label'=> 'Enviar'),
        'botao_limpar_form'=>array('tipo'=> 'reset', 'nome'=> 'reset', 'label'=> 'Limpar Formulário'),
    )
);

function criarTextNumber ($array, $chave) {
  echo "<input type=".$array['tipo']." id=".$chave." name=".$array['nome']." placeholder='$array[placeholder]' required/>";
};

function criarTextArea ($array, $chave) {
  echo "<textarea id=".$chave." name=".$array['nome']." placeholder='$array[placeholder]'></textarea>";
};

function criarButton ($array, $chave) {
  echo "<button type=".$array['tipo']." id=".$chave." name=".$array['nome'].">".$array['label']."</button>";
};

function criarSelect ($array, $chave) {
  echo "<select id=".$chave." name=".$array['nome'].">";
  foreach($array['opcoes'] as $chavita => $valozito) {
    if($chavita == $array['valor_padrao']) {
      echo "<option value=".$chavita." selected>".$valozito."</option>";
    } else {
      echo "<option value=".$chavita.">".$valozito."</option>";
    }
    
  };
  echo "</select>";
};

function criarCaixinhas ($array, $chave) {
  foreach($array['opcoes'] as $chavita => $valozito) {
    if($array['tipo'] == "checkbox" && ($chavita == "F" || $chavita == "N")) {
      echo "<input type=".$array['tipo']." id=".$chave.'_'.$chavita." name=".$chave." value=".$chavita." checked>";
    }else {
      echo "<input type=".$array['tipo']." id=".$chave.'_'.$chavita." name=".$chave." value=".$chavita.">";
    }
    echo "<label for=".$chave.'_'.$chavita.">".$valozito."</label>";
  }
};

function criarCampos($valor, $chave) {
  if(($valor['tipo'] == 'reset') || ($valor['tipo'] == 'submit') || ($valor['tipo'] == 'button')) {
    if($valor['tipo'] == 'submit') {
      echo "<div class='itemWrapperBTNsSubmitReset'>";
    }
    criarButton($valor, $chave);
    if($valor['tipo'] == 'reset') {
      echo "</div>";
    }
  } else {
    echo "<div class='itemWrapper'>";
      echo "<label for=".$valor['nome'].">".$valor['label'].":</label>";
      if(($valor['tipo'] == 'text') || ($valor['tipo'] == 'number')) {
        criarTextNumber($valor, $chave);
      };
      if($valor['tipo'] == 'textarea') {
        criarTextArea($valor, $chave);
      };
      if($valor['tipo'] == 'select') {
        criarSelect($valor, $chave);
      };
      if(($valor['tipo'] == 'checkbox') || ($valor['tipo'] == 'radio')) {
        criarCaixinhas($valor, $chave);
      };
    echo "</div>";  
  }
  
};

function criarFormulario($formulario) {
  echo "<form method=". $formulario['tipo_submit']." action=".$formulario['url_submit']." id=".$formulario['id']."> ";
  foreach($formulario['itens'] as $chave => $valor) {
    criarCampos($valor, $chave);
  };
  echo"</form>";
};
criarFormulario($formulario);
?>