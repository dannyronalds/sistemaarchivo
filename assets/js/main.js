pie();
line();
barrasX();
barrasY();
function barrasX() {
  const ctx = document.getElementById("barras");
  $.ajax({
    type: "GET",
    url: "http://localhost/archivo/controller/graficos.controller.php?action=barrasX",
    success: function (response) {
      console.log(response);
      let data = JSON.parse(response);

      new Chart(ctx, {
        type: "bar",
        data: {
          labels: data[0].tipo,
          datasets: [
            {
              label: "Expedientes",
              data: data[0].total,
              borderWidth: 1,
            },
          ],
        },
        options: {
          scales: {
            y: {
              beginAtZero: true,
            },
          },
        },
      });
    },
  });
}

function barrasY() {
  const ctx1 = document.getElementById("linea");
  $.ajax({
    type: "GET",
    url: "http://localhost/archivo/controller/graficos.controller.php?action=barrasY",
    success: function (response) {
      console.log(response);
      let data = JSON.parse(response);

      new Chart(ctx1, {
        type: "bar",
        data: {
          labels: data[0].tipo,
          datasets: [
            {
              label: "Partidas",
              data: data[0].total,
              borderWidth: 1,
            },
          ],
        },
        options: {
          indexAxis: "y",
          scales: {
            y: {
              beginAtZero: true,
            },
          },
        },
      });
    },
  });
}

function line() {
  const ctx2 = document.getElementById("line");
  $.ajax({
    type: "GET",
    url: "http://localhost/archivo/controller/graficos.controller.php?action=line",
    success: function (response) {
      console.log(response);
      let data = JSON.parse(response);
      new Chart(ctx2, {
        type: "line",
        data: {
          labels: data[0].dias,
          datasets: [
            {
              label: "Atencion de Solicitudes por dia",
              data: data[0].total,
              borderWidth: 1,
            },
          ],
        },
        options: {
          scales: {
            y: {
              max: 100,
            },
          },
        },
      });
    },
  });
}

function pie() {
  const ctx3 = document.getElementById("circulo");
  $.ajax({
    type: "GET",
    url: "http://localhost/archivo/controller/graficos.controller.php?action=pie",
    success: function (response) {
      //console.log(response);
      let data = JSON.parse(response);
      new Chart(ctx3, {
        type: "pie",
        data: {
          labels: ["atendido", "no atendido", "pendiente"],
          datasets: [
            {
              label: "Estado de solicitudes",
              data: [data.atendido, data.no_atendido, data.pendiente],
              borderWidth: 1,
            },
          ],
        },
        options: {
          scales: {
            y: {
              max: 500,
            },
          },
        },
      });
    },
  });
}


// chatbot.js
$(document).ready(function() {
  const chatbotMessages = $('#chatbot-messages');
  // Preguntas y respuestas predeterminadas
  const qaPairs = [{
          question: '¿Cuáles son los productos disponibles?',
          answer: 'Tenemos una variedad de productos, ¿hay algo específico que estás buscando?'
      },
      {
          question: '¿Cuál es el tiempo de envío?',
          answer: 'El tiempo de envío depende de tu ubicación. Puedes consultar más detalles en nuestra sección de envíos.'
      },
      {
          question: 'pregunta numero 3 para resolver dudas?',
          answer: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, nam veniam dignissimos rem eligendi tempora iusto voluptatibus perferendis vitae enim optio hic, eos quo voluptas laborum fugiat voluptatum saepe. Expedita?'
      },
      {
          question: 'pregunta numero 4 para resolver dudas?',
          answer: 'respuesta numero 4, las respuestas relacionadas al archivo y dudas.'
      },
      {
          question: 'pregunta numero 5 para resolver dudas?',
          answer: 'Respuesta bien elaborada para la pregunta 5'
      },
      // Agrega más pares de preguntas y respuestas según sea necesario
  ];

  // Función para mostrar mensajes del chatbot
  function showMessage(message, question, isUser = false) {
      console.log(message, question, isUser);
      const questionElement = $('<h4></h4>').addClass(isUser ? 'question-message' : 'chatbot-message').text(question);
      const messageElement = $('<div></div>').addClass(isUser ? 'user-message' : 'chatbot-message').text(message);
      chatbotMessages.append(questionElement);
      chatbotMessages.append(messageElement);
  }
  // Función para manejar la entrada del usuario
  function handleUserInput(userMessage) {
      if (userMessage !== '') {
          //console.log(userMessage)
          showMessage(null, userMessage, isUser = true);
          handleChatbotResponse(userMessage);
      }
  }
  // Función para manejar las respuestas del chatbot
  function handleChatbotResponse(userMessage) {
      for (const qaPair of qaPairs) {
          const normalizedQuestion = qaPair.question.toLowerCase();
          if (userMessage.toLowerCase().includes(normalizedQuestion)) {
              showMessage(qaPair.answer);
              return;
          }
      }
      showMessage('Lo siento, no entendí la pregunta. ¿Puedes reformularla?');
  }
  // Evento al hacer clic en el botón de enviar
  $("#response1").click(function() {
      $("#chatbot-messages").empty();
      handleUserInput(qaPairs[0].question)
  })
  $("#response2").click(function() {
      $("#chatbot-messages").empty();
      handleUserInput(qaPairs[1].question)
  })
  $("#response3").click(function() {
      $("#chatbot-messages").empty();
      handleUserInput(qaPairs[2].question)
  })
  $("#response4").click(function() {
      $("#chatbot-messages").empty();
      handleUserInput(qaPairs[3].question)
  })
})
