document.getElementById("registerform").addEventListener("submit", function(event) {
    
    const nome = document.getElementById("nome");
    const email = document.getElementById("email");
    const telefone = document.getElementById("telefone");
    const senha = document.getElementById("senha");
    const idade = document.getElementById("idade");

    const spinregister = document.getElementById("spinbtn");
    const Errormesage = document.getElementById("Errormesage");

    if (nome.value === "" || email.value === "" || telefone.value === "" || idade.value === "" || senha.value === "") {
        Errormesage.style.visibility = "visible";
        event.preventDefault(); 
        return false;
    } else {
        alert("Form enviado");
        return true;
    }

    spinregister.style.display = "inline-block";
});
