
/*function carregaCidades(campo){
    var form=document.getElementsByTagName("form")[0];
    form.setAttribute("action"," ");
    form.submit();
};*/

document.addEventListener("DOMContentLoaded",()=>{
    var selectGrupo = document.getElementById("animal");
    selectGrupo.addEventListener("change", carregaEspecies);
});
const pegaValorGrupo = () => document.getElementById("animal").value;
  
let criaOptionsEspecie = (resposta) =>{
    var selectEspecie = document.getElementById("especie");
    limpaSelect(selectEspecie);
    console.log(resposta);
    for(var especie of resposta){
        var optionCid = document.createElement("option");
        optionCid.setAttribute("value", especie);
        optionCid.textContent=especie;
        selectEspecie.appendChild(optionCid);
    }
}
function limpaSelect(campo){
    var opt;
    while(opt = campo.firstChild){
        campo.removeChild(opt);
    }
}
function carregaEspecies(){
    //var corpo = {"estado": pegaValorEstado()};
    var formulario=new FormData();
    formulario.append("animal",pegaValorGrupo());
    fetch("http://localhost/jvpg/DesenvolvimentoWeb/aula6/animais/especie.php",{
        mode: 'no-cors',
        method:"POST", headers:{"content-type":"application-json",  "Access-Control-Allow-Origin": 'origin-list'},body:formulario})
        .then(async resposta=>{
            var especies=await resposta.json();
            criaOptionsEspecie(especies);
        })
        .catch(error=>console.log(error));
}