var dados;

formCliente = document.getElementById("formCliente");
formCliente.onsubmit = function(e){
  registerClient(dados, this.nome.value, this.endereco.value);
  return false;
}

function registerClient(bd, nome, endereco){
  var last;
  for(var k in bd.clientes) {
   last = parseInt(k);
  }
  dados.clientes[last+1] = {
 "nome" : nome,
 "endereco" : endereco
}
  sendJSON(dados, 'salvaJSON.php');
  return false;
}

function listRegisted(){
console.log(dados)
  listClient = document.getElementById("listClient");
  for(var k in dados.clientes) {
   last = parseInt(k);
   form = document.createElement("form");
   form.name = "listclient";
   form.setAttribute("onsubmit", alterClient(k))
   listclient.appendChild(form);
//     <form name="formCliente" id="formCliente">
//   <label>Nome:</label>
//   <input type="text" name="nome">
//   <br />
//   <label>Endereço:</label>
//   <input type="text" name="endereco">
//   <br />
//   <input type="submit" value="Cadastrar" name="">
// </form>')
  }
}


var xhr = new XMLHttpRequest();

function getJSON(url) {
  xhr.responseType = 'json';
  xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) { 
      //Callback caso de tudo certo
      dados = JSON.parse(this.response);
    }
  };
  xhr.open('GET', url);
  xhr.send();
};

function sendJSON(myJson, url){
  xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      console.log("enviou"); 
      console.log(this); 
    };
  };
  xhr.open("GET", url+"?data="+JSON.stringify(myJson), true);
  xhr.send();
};

getJSON('bd.json');
listRegisted();