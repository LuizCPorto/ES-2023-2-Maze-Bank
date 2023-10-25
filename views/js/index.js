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

  // LOGIN DE USUÁRIO
document.getElementById('signin').addEventListener('submit', function (e) {
  e.preventDefault();

  var usuario = document.getElementById('usuario').value;
  var senha = document.getElementById('senha').value;


  var formData = new FormData();
  formData.append('nomeUsuario', usuario);
  formData.append('senha', senha);


  //REQUISIÇÃO
  fetch('../../../ES-2023-2-Maze-Bank/controllers/login/Login.php', {
    method: 'POST',
    body: formData
  })
    .then(response => response.text())
    .then(data => {
      console.log(data);
      if(data === "Usuário não encontrado.") {
        Swal.fire({
          icon: 'error',
          title: 'Erro',
          text: 'Usuario nao encontrado.',
        });
      }
      
      //entra aqui quando for sucesso!
      if(data === "Login feito com sucesso") {
        Swal.fire(
          'Parabéns!',
          'Cadastro feito com sucesso!',
          'success'
        ).then((result)=>{
          if(result.isConfirmed){
            window.location.href = "../../../ES-2023-2-Maze-Bank/routes/home.php";
          }
        })
      }
      if(data === "admin") {
        Swal.fire(
          'Admin!',
          'Logando com usuario Administrador!',
          'success'
        ).then((result)=>{
          if(result.isConfirmed){
            window.location.href = "../../../ES-2023-2-Maze-Bank/routes/crud/crudIndex.php";
          }
        })

      }
      if(data === "Senha incorreta.") {
        Swal.fire(
          'Erro!',
          'Senha incorreta!',
          'error'
        )
      }
    })
    .catch(error => {
      //entra aqui quando a autenticação der errado
      alert('Erro ao processar a solicitação: ' + error);
    });
});

  document.getElementById('signup').addEventListener('submit',function (e){
    e.preventDefault();

    var email = document.getElementById('email').value;
    var usuarioRegistro = document.getElementById('usuarioRegistro').value;
    var cpf = document.getElementById('cpf').value;
    var senha1 = document.getElementById('senha1').value;
    var senha2 = document.getElementById('senha2').value;

    var formData = new FormData();
    formData.append("email",email);
    formData.append("usuarioRegistro",usuarioRegistro);
    formData.append("cpf",cpf);
    formData.append("senha1",senha1);
    formData.append("senha2",senha2);

    fetch('../../../ES-2023-2-Maze-Bank/controllers/Cadastro/Cadastro.php',{
      method:'POST',
      body:formData
    })
    .then(response => response.text())
    .then(data => {
      // console.log(data);
      if(data == "Senhas nao coincidem."){
        Swal.fire(
          'Erro!',
          'Senhas nao coincidem!',
          'warning'
        )
      }
      else if(data == "Email ou CPF já cadastrado!"){
        Swal.fire(
          'Erro!',
          'Email ou CPF já cadastrado!',
          'warning'
        )
      }
      if(data == "Registro feito com sucesso!") {
        Swal.fire(
          'Parabéns!',
          'Cadastro feito com sucesso!',
          'success'
        )
      }
    })
    .catch(error => {
      alert('Erro ao processar a solicitação: ' + error);
    })
  })

