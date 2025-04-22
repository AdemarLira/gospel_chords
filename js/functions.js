function validarFormulario(){
    var nome = document.getElementById('nome').value.trim();
    var email = document.getElementById('email').value.trim();
    var senha = document.getElementById('senha').value.trim();
    var celular = document.getElementById('celular').value.trim();
    var cidade = document.getElementById('cidade').value.trim();
    var estado = document.getElementById('estado').value.trim();
    
    if(nome === "" || email === "" || senha === "" || celular === "" || cidade === "" || estado === ""){
      alert("Todos os campos são obrigatórios!");
    return false;
    }

    if (email.indexOf('@') === -1 || email.indexOf('.') === -1 || email.startsWith('@') || email.endsWith('.') || email.indexOf('@') > email.lastIndexOf('.')) {
      alert("Por favor, insira um email válido!");
      return false; 
    }
    
    if (senha.length < 8 ){
      alert("A senha deve conter pelo menos 8 caracteres!")
      return false;
    }
      return true; 
    }

function verificarPlanos() {
  window.location.href = 'planos.php';
}

function voltarIndex(){
  window.location.href = 'index.html';
}