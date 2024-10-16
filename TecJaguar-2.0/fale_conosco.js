const form = document.querySelector("form");
const nomeInput = document.querySelector("#nome");
const emailInput = document.querySelector("#email");
const assuntoInput = document.querySelector("#assunto");
const mensagemInput = document.querySelector("#mensagem"); 

form.addEventListener("submit", (event) => { 
    event.preventDefault(); 

    if (nomeInput.value === "") { 
        alert("Por favor, preencha seu nome.");
        return;
    }

     if (emailInput.value === "") { 
        alert("Por favor, preencha seu email.");
        return;
    }

     if (assuntoInput.value === "") { 
        alert("Por favor, preencha o assunto.");
        return;
    }

     if (mensagemInput.value === "") { 
        alert("Por favor, preencha com a mensagem.");
        return;
    }

    alert("Formulário enviado com sucesso!");
});
