<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>


<!-- 

<style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f2f2f2;
            margin: 0;
        }

        .chat-container {
            width: 120px;
            height: 100vh;
            align-items: center;
            justify-content: center;
            max-width: 100%;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .chat-header {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }

        .chatbox {
            flex: 1;
            padding: 10px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
        }

        .message {
            margin: 5px 0;
            padding: 8px;
            border-radius: 12px;
            max-width: 80%;
            word-wrap: break-word;
        }

        .user {
            align-self: flex-end;
            background-color: #007bff;
            color: white;
        }

        .bot {
            align-self: flex-start;
            background-color: #e5e5ea;
            color: black;
        }

        .input-area {
            display: flex;
            border-top: 1px solid #ddd;
        }

        #user-input {
            flex: 1;
            padding: 10px;
            border: none;
            outline: none;
        }

        #send-btn {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="chat-container">
        <div class="chat-header">Cafeteria Chatbot</div>
        <div id="chatbox" class="chatbox"></div>
        <div class="input-area">
            <input type="text" id="user-input" placeholder="Type your message...">
            <button id="send-btn">Send</button>
        </div>
    </div>

    <script>
        const chatbox = document.getElementById('chatbox');
        const userInput = document.getElementById('user-input');
        const sendBtn = document.getElementById('send-btn');

        sendBtn.addEventListener('click', () => {
            const message = userInput.value;
            if (message.trim()) {
                appendMessage(message, 'user');
                userInput.value = '';
                fetchChatbotReply(message);
            }
        });

        function appendMessage(message, sender) {
            const messageElem = document.createElement('div');
            messageElem.className = `message ${sender}`;
            messageElem.textContent = message;
            chatbox.appendChild(messageElem);
            chatbox.scrollTop = chatbox.scrollHeight;
        }

        async function fetchChatbotReply(message) {
            const response = await fetch('chatbot.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ message })
            });
            const data = await response.json();
            appendMessage(data.reply, 'bot');
        }
    </script> -->






<?php
// header("Content-Type: application/json");

// $input = json_decode(file_get_contents('php://input'), true);
// $message = $input['message'] ?? '';

// // Replace with your actual API key and endpoint
// $apiKey = "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";
// $apiUrl = "https://api.openai.com/v1/completions";

// // Data for OpenAI API request
// $data = [
//     "model" => "text-davinci-003", // Replace with the correct model ID
//     "prompt" => $message,
//     "max_tokens" => 50
// ];

// // Initialize cURL and make the API call
// $ch = curl_init($apiUrl);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_POST, true);
// curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
// curl_setopt($ch, CURLOPT_HTTPHEADER, [
//     "Authorization: Bearer $apiKey",
//     "Content-Type: application/json"
// ]);

// $response = curl_exec($ch);
// if (curl_errno($ch)) {
//     $error_message = curl_error($ch);
//     echo json_encode(["reply" => "Error: $error_message"]);
// } 
// else {
//     $decodedResponse = json_decode($response, true);
//     $reply = $decodedResponse['choices'][0]['text'] ?? "Sorry, I couldn't understand that.";
//     echo json_encode(["reply" => $reply]);
// }
// curl_close($ch);
?>


<!-- demo chatbot -->

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="container">
        <div class="title">Let's Chat</div>
        <div class="chat" id="chat"></div>
        <input type="text" class="input" id="input" placeholder="Type your message here...." />
        <button class="button" id="button"><i class="fa-brands fa-telegram"></i></button>
      </div>
      
      <script >
         // A simple chatbot that responds with some predefined answers
 function chatbot(input) {
    let output = "";
    input = input.toLowerCase();
    if (input.includes("hello")) {
      output = "Hello, nice to meet you!,How may i help you";
    }else if (input.includes("give me some high price food") || (input.includes("price"))){
      output = "Well the price of Chicken 65 is $222,If you need more information check food section";
    }else if(input.includes("hi")) {
      output = "Hello, nice to meet you!,How may i help you";
    }  else if (input.includes("how are you")) {
      output = "I'm doing fine, thank you for asking.";
    } else if (input.includes("what is your name")) {
      output = "My name is Jarvis, I'm a chatbot.";
    } else if (input.includes("what can you do")) {
      output = "I can chat with you and answer some simple questions.";
    } else if (input.includes("what dishes do you recommend") || input.includes("recommend") ){
      output = "For sweet items i would recommend gulab jamun and for full course i would recommend meals";
    } else if (input.includes("list some food items") || input.includes("food items") || input.includes("give me some food items")) {
      output = "Idly,Dosa,Chappati,Parotta,meals etc.If you need more details check food section";
    }else if (input.includes("give me some feedback about this product") || (input.includes("feedback"))) {
      output = "It was good i would recommend some new dishes.";
    }else if (input.includes("contact details")) {
      output = "Please click on the know more page";
    }else if (input.includes("thankyou") || input.includes("thanks")) {
      output = "Don't mention it.I am here to assist you";
    }else if (input.includes("ok")){
      output = "Feel free to ask more questions";
    }else if (input.includes("what are your most popular items?") || (input.includes("popular items"))){
      output = "Idly,dosa and i would recommend meals";
    }else if (input.includes("can I see the menu") || (input.includes("menu"))){
      output = "Well ofcourse you can check food section";
    }else if (input.includes("do you have any special offers today") || (input.includes("offer"))){
      output = "For Diwali the price of foods are 10% discount";
    }else if (input.includes("do you have veg and nonveg options") || (input.includes("veg and nonveg"))){
      output = "Yes the foods were separated based on the vegeterian and non vegeterian categories";
    }else if (input.includes("can I order directly from you") || (input.includes("order"))){
      output = "Sorry for the inconvinience, you need to checkout the invoice section to place the order ";
    }else if (input.includes("nonveg foods") || (input.includes("nonveg"))){
      output = "We have different type of food items in Non-vegeterian,Please feel free to check the food section";
    } else if (input.includes("veg foods") || (input.includes("veg"))){
      output = "We have different type of food items in vegeterian,Please feel free to check the food section";
    }else {
      output = "Sorry, I don't understand that. Please try something else.Ask questions about food";
    }
    return output;
  }

  // Display the user message on the chat
  function displayUserMessage(message) {
    let chat = document.getElementById("chat");
    let userMessage = document.createElement("div");
    userMessage.classList.add("message");
    userMessage.classList.add("user");
    let userAvatar = document.createElement("div");
    userAvatar.classList.add("avatar");
    let userText = document.createElement("div");
    userText.classList.add("text");
    userText.innerHTML = message;
    userMessage.appendChild(userAvatar);
    userMessage.appendChild(userText);
    chat.appendChild(userMessage);
    chat.scrollTop = chat.scrollHeight;
  }

  // Display the bot message on the chat
  function displayBotMessage(message) {
    let chat = document.getElementById("chat");
    let botMessage = document.createElement("div");
    botMessage.classList.add("message");
    botMessage.classList.add("bot");
    let botAvatar = document.createElement("div");
    botAvatar.classList.add("avatar");
    let botText = document.createElement("div");
    botText.classList.add("text");
    botText.innerHTML = message;
    botMessage.appendChild(botAvatar);
    botMessage.appendChild(botText);
    chat.appendChild(botMessage);
    chat.scrollTop = chat.scrollHeight;
  }

  // Send the user message and get the bot response
  function sendMessage() {
    let input = document.getElementById("input").value;
    if (input) {
      displayUserMessage(input);
      let output = chatbot(input);
      setTimeout(function() {
        displayBotMessage(output);
      }, 1000);
      document.getElementById("input").value = "";
    }
  }

  // Add a click event listener to the button
  document.getElementById("button").addEventListener("click", sendMessage);

  // Add a keypress event listener to the input
  document.getElementById("input").addEventListener("keypress", function(event) {
    if (event.keyCode == 13) {
      sendMessage();
    }
  });
      </script> 


<style>
    * {
    box-sizing: border-box;
  }

  body {
    font-family: 'Poppins', sans-serif;
   
  }

  .container {
    width: 500px;
    margin: 50px auto;
    padding: 20px;
    border-radius: 10px;
    box-shadow: #64646f33 0px 7px 29px 0px;
    background: #31363F;
  }

  .title {
    text-align: center;
    margin-right: 170px;
    font-size: 24px;
    font-weight: bold;
    color: #edf1f3;
  }

  .chat {
    height: 400px;
    overflow-y: scroll;
    margin: 20px 0;
    padding: 10px;
    border: 2px solid #545250;
    border-radius: 5px;
    background: #222831;
  }

  .message {
    display: flex;
    /* align-items: center; */
    margin: 10px 0;
  }

  .user {
    justify-content: flex-end;
  }

  .bot {
    justify-content: flex-start;
  }

  .avatar {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin: 0 10px;
  }

  .user .avatar {
    order: 2;
    background: url("avatar.jpg");
    background-size: cover;
  }

  .bot .avatar {
    order: 1;
    background: url("bot.jpg");
    background-size: cover;
  }

  .text {
    max-width: 70%;
    padding: 10px;
    border-radius: 10px;
    font-size: 16px;
    color: white;
  }

  .user .text {
    background: #4a4d52;
  }

  .bot .text {
    background: #8c8c8e;
  }

  .input {
    position: relative;
    width: 100%;
    padding: 10px;
    border: 2px solid #cbcbce;
    border-radius: 5px;
    outline: none;
    font-size: 20px;
   
  }

  .input:focus {
    border-color: #8296d0;
    color: #1e1f1f;
  }

  .button {
    position: absolute;
    width: 80px;
    border: none;
    padding: 6px;
    background: #31363F;
    color: white;
    font-size: 20px;
    font-weight: bold;
    cursor: pointer;
    margin-top: .01rem;
    margin-left: -5.1rem;
    outline: none;
  
  }
button i{
  font-size: 3rem;
}
  .button:hover {
    box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.2);
  }

  .chat::-webkit-scrollbar {
    width: 10px;
}

.chat::-webkit-scrollbar-thumb {
    background: #bcbdc0;
    border-radius: 10px;
}
  
</style> 











<?php include('./constant/layout/footer.php');?>
<!-- Author Name- Mayuri K. 
 for any PHP, Codeignitor, Laravel OR Python work contact me at mayuri.infospace@gmail.com  
 Visit website - www.mayurik.com -->