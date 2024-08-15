
const btnSend = document.getElementById("btn");
const chat = document.getElementById("chat");

const typeMessage = (element, message, callback) => {
  let index = 0;
  element.innerHTML = '';
  const typingInterval = setInterval(() => {
    if (index < message.length) {
      element.innerHTML += message.charAt(index);
      index++;
    } else {
      clearInterval(typingInterval);
      if (callback) callback();
    }
  }, 30); // Ajusta la velocidad aquí
};

const getMessage = (msg) => {
  const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      const response = xhr.responseText;
      const chatBody = document.querySelector(".scroller");
      
      // Mensaje del usuario
      const divUser = document.createElement("div");
      divUser.className = "me visible";
      divUser.textContent = msg;
      chatBody.append(divUser);

      // Mensaje del bot
      const divCpu = document.createElement("div");
      divCpu.className = "alicia visible typing-effect";
      divCpu.innerHTML = ''; // Inicialmente vacío, será llenado por la función typingMessage

      chatBody.append(divCpu);

      // Aplica el efecto de máquina de escribir
      typeMessage(divCpu, response);
    }
  };
  xhr.open("GET", "bot/chat.php?msg=" + msg, true);
  xhr.send();
};

btnSend.addEventListener("click", (e) => {
  e.preventDefault();
  if (chat.value.trim() === "") {
    return; // No hacer nada si el campo está vacío
  }
  getMessage(chat.value);
  chat.value = ""; // Limpiar el campo de entrada
});
