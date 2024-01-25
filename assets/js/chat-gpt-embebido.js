// Definir la URL de la API de OpenAI
const apiUrl = 'https://api.openai.com/v1/chat/completions';
const key_api = 'tu api key de openai';
// Definir los datos de la solicitud
function gptArchivo(prompt, apiUrl, key_api) {
  const requestData = {
    model: 'gpt-3.5-turbo',
    messages: [
      {
        role: 'system',
        content: 'eres un asistente',
      },
      {
        role: 'user',
        content: prompt,
      },
    ],
  };

  // Devolver la promesa resultante de la solicitud AJAX
  return $.ajax({
    url: apiUrl,
    type: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'Authorization': 'Bearer ' + key_api,
    },
    data: JSON.stringify(requestData),
  });
}

// MANEJO DEL DOM PARA MOSTRAR EL RESULTADO
$("#enviar").click(function () {
  const prompt = $("#prompt").val();
  console.log(prompt);

  // Llamar a la función y manejar la lógica de presentación en el éxito
  gptArchivo(prompt, apiUrl, key_api)
    .done(function (data) {
      // Manejar la respuesta de la API
      $("#mensajes").empty();
      const respuesta = data.choices[0].message.content;
      $("#mensajes").html(respuesta);
    })
    .fail(function (error) {
      // Manejar errores
      console.error('Error en la solicitud:', error);
    });
});
