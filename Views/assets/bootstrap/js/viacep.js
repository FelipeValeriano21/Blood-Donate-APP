function BuscaCep() {
    var cep = document.getElementById('cep').value;
    document.getElementById("resultado").innerHTML = "";
    const ceps = [
      '69050002', '69304-650', '66033-000', '69900-607', '68908-170', '76821-092',
      '77001-214', '70710-100', '74535-010', '78005-100', '79004-310', '20211-030',
      '29047-105', '30150-341', '05403-000', '17519-050', '13083-970', '18618-970',
      '14051-140', '15091-240', '80060-220', '88015-240', '90650-001'
    ];
    var url = 'https://viacep.com.br/ws/' + cep + '/json/';
  
    fetch(url)
      .then(response => response.json())
      .then(data => {
        if (data.erro) {
          document.getElementById('resultado').innerHTML = 'CEP não encontrado.';
        } else {
          document.getElementById('estadoselected').textContent = data.uf; // Mostrar o estado fora do loop
          for (let i = 0; i < ceps.length; i++) {
            var urlCEPS = 'https://viacep.com.br/ws/' + ceps[i] + '/json/';
            fetch(urlCEPS)
              .then(response => response.json())
              .then(data1 => {
                if (data1.erro) {
                  // Ignore CEPs não encontrados
                } else {
                  if (data1.uf === data.uf) {
                    console.log(data1.cep + " " + data1.bairro);
                    document.getElementById("resultado").innerHTML += `<p>CEP: ${data1.cep}, Bairro: ${data1.bairro}, Cidade: ${data1.localidade}</p>`;
                  }
                }
              });
          }
        }
      })
      .catch(error => {
        console.error('Erro na requisição:', error);
        document.getElementById('resultado').innerHTML = 'Erro na consulta. Por favor, tente novamente.';
      });
  }
  