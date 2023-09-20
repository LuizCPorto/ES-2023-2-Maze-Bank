var formSignin = document.querySelector('#signin')
var formSignup = document.querySelector('#signup')
var btnColor = document.querySelector('.btnColor')

document.querySelector('#btnSignin')
  .addEventListener('click', () => {
    formSignin.style.left = "25px"
    formSignup.style.left = "450px"
    btnColor.style.left = "0px"
  })

document.querySelector('#btnSignup')
  .addEventListener('click', () => {
    formSignin.style.left = "-450px"
    formSignup.style.left = "25px"
    btnColor.style.left = "110px"
  })

  //LOGIN DE USUÁRIO
document.getElementById('signin').addEventListener('submit', function (e) {
  e.preventDefault();

  var usuario = document.getElementById('usuario').value;
  var senha = document.getElementById('senha').value;

  var formData = new FormData();
  formData.append('nomeUsuario', usuario);
  formData.append('senha', senha);

  //REQUISIÇÃO
  fetch('../controller/LoginController.php', {
    method: 'POST',
    body: formData
  })
    .then(response => response.text())
    .then(data => {
      console.log(data);
      if(data === "Usuário não encontrado.") {
        alert("Usuário não encontrado!");
      }
      
      //entra aqui quando for sucesso!
      if(data === "Login feito com sucesso") {
        alert("Login feito com sucesso");
        window.location.href = "home.php";
      }

      if(data === "Senha incorreta.") {
        alert("Senha incorreta, tente novamente!");
      }
    })
    .catch(error => {
      //entra aqui quando a autenticação der errado
      alert('Erro ao processar a solicitação: ' + error);
    });
});

