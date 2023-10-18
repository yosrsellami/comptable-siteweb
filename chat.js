document.addEventListener("DOMContentLoaded", function() {
    var messageForm = document.getElementById("message-form");
    var messageInput = document.getElementById("message-input");
    var messageContainer = document.getElementById("message-container");
    
    messageForm.addEventListener("submit", function(e) {
        e.preventDefault();
        
        // Récupérez le message de l'utilisateur
        var userMessage = messageInput.value;
        
        // Ajoutez le message de l'utilisateur à la liste des messages affichés
        var userMessageElement = document.createElement("div");
        userMessageElement.classList.add("message", "user-message");
        userMessageElement.textContent = userMessage;
        messageContainer.appendChild(userMessageElement);
        
        // Envoyez le message à chatbot.php pour traitement
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "chatbot.php");
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Récupérez la réponse du chatbot
                    var response = JSON.parse(xhr.responseText).message;
                    
                    // Ajoutez la réponse du chatbot à la liste des messages affichés
                    var botMessageElement = document.createElement("div");
                    botMessageElement.classList.add("message", "bot-message");
                    botMessageElement.textContent = response;
                    messageContainer.appendChild(botMessageElement);
                    
                    // Effacez le champ de saisie du
                    messageInput.value = "";
                } else {
                    console.error("Une erreur s'est produite lors de l'envoi de la requête au serveur.");
                }
            }
        };
        xhr.send("message=" + encodeURIComponent(userMessage));
    });
});