<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @vite('resources/css/app.css')
</head>

<body>

    @include('layouts.navigation')
    <div class="fixed bottom-0 right-0 mb-4 mr-4">
        <button id="open-chat" class="text-white py-2 px-4 rounded-md transition duration-300 flex items-center">
            <img src="{{ asset('two-speech-bubbles-icon.webp') }}" alt="" height="50" width="50">
        </button>
    </div>
    <div id="chat-container" class="hidden fixed bottom-20 right-4 w-96">
        <div class="bg-white shadow-md rounded-lg max-w-lg w-full">
            <div class="p-4 border-b bg-blue-500 text-white rounded-t-lg flex justify-between items-center">
                <p class="text-lg font-semibold">Admin Bot</p>
                <button id="close-chat"
                    class="text-gray-300 hover:text-gray-400 focus:outline-none focus:text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div id="chatbox" class="p-4 h-80 overflow-y-auto">
                <!-- Chat messages will be displayed here -->
                <div class="mb-2 text-right">
                    <p class="bg-blue-500 text-white rounded-lg py-2 px-4 inline-block">hello</p>
                </div>
                <div class="mb-2">
                    <p class="bg-gray-200 text-gray-700 rounded-lg py-2 px-4 inline-block">This is a response from the
                        chatbot.</p>
                </div>
                <div class="mb-2 text-right">
                    <p class="bg-blue-500 text-white rounded-lg py-2 px-4 inline-block">this example of chat</p>
                </div>
                <div class="mb-2">
                    <p class="bg-gray-200 text-gray-700 rounded-lg py-2 px-4 inline-block">This is a response from the
                        chatbot.</p>
                </div>
                <div class="mb-2 text-right">
                    <p class="bg-blue-500 text-white rounded-lg py-2 px-4 inline-block">design with tailwind</p>
                </div>
                <div class="mb-2">
                    <p class="bg-gray-200 text-gray-700 rounded-lg py-2 px-4 inline-block">This is a response from the
                        chatbot.</p>
                </div>
            </div>
            <div class="p-4 border-t flex">
                <input id="user-input" type="text" placeholder="Type a message"
                    class="w-full px-3 py-2 border rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button id="send-button"
                    class="bg-blue-500 text-white px-4 py-2 rounded-r-md hover:bg-blue-600 transition duration-300">Send</button>
            </div>
        </div>
    </div>


    @vite('resources/js/app.js')
    <script>
        const chatbox = document.getElementById("chatbox");
        const chatContainer = document.getElementById("chat-container");
        const userInput = document.getElementById("user-input");
        const sendButton = document.getElementById("send-button");
        const openChatButton = document.getElementById("open-chat");
        const closeChatButton = document.getElementById("close-chat");

        let isChatboxOpen = true; // Set the initial state to open

        // Function to toggle the chatbox visibility
        function toggleChatbox() {
            chatContainer.classList.toggle("hidden");
            isChatboxOpen = !isChatboxOpen; // Toggle the state
        }

        // Add an event listener to the open chat button
        openChatButton.addEventListener("click", toggleChatbox);

        // Add an event listener to the close chat button
        closeChatButton.addEventListener("click", toggleChatbox);

        // Add an event listener to the send button
        sendButton.addEventListener("click", function() {
            const userMessage = userInput.value;
            if (userMessage.trim() !== "") {
                addUserMessage(userMessage);
                respondToUser(userMessage);
                userInput.value = "";
            }
        });

        userInput.addEventListener("keyup", function(event) {
            if (event.key === "Enter") {
                const userMessage = userInput.value;
                addUserMessage(userMessage);
                respondToUser(userMessage);
                userInput.value = "";
            }
        });

        function addUserMessage(message) {
            const messageElement = document.createElement("div");
            messageElement.classList.add("mb-2", "text-right");
            messageElement.innerHTML = `<p class="bg-blue-500 text-white rounded-lg py-2 px-4 inline-block">${message}</p>`;
            chatbox.appendChild(messageElement);
            chatbox.scrollTop = chatbox.scrollHeight;
        }

        function addBotMessage(message) {
            const messageElement = document.createElement("div");
            messageElement.classList.add("mb-2");
            messageElement.innerHTML =
                `<p class="bg-gray-200 text-gray-700 rounded-lg py-2 px-4 inline-block">${message}</p>`;
            chatbox.appendChild(messageElement);
            chatbox.scrollTop = chatbox.scrollHeight;
        }

        function respondToUser(userMessage) {
            // Replace this with your chatbot logic
            setTimeout(() => {
                addBotMessage("This is a response from the chatbot.");
            }, 500);
        }

        // Automatically open the chatbox on page load
        toggleChatbox();




        setTimeout(() => {
            window.Echo.channel('test-channel')
                .listen('.App\\Events\\TestEvent', (res) => {
                    console.log(res);
                })
        }, 500);
    </script>
</body>

</html>