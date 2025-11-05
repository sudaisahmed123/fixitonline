<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat with Rasa</title>
    <!-- Link to jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .chat-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            max-width: 100%;
            overflow: hidden;
        }
        .chatbox {
            height: 400px;
            overflow-y: auto;
            padding: 20px;
            border-bottom: 1px solid #ccc;
        }
        .input-container {
            display: flex;
            padding: 10px;
            background-color: #f9f9f9;
        }
        input[type="text"] {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 10px;
        }
        button {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .message {
            margin-bottom: 10px;
        }
        .user-message {
            text-align: right;
        }
        .bot-message {
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="chat-container">
        <h1 style="text-align:center;">Chat with Rasa</h1>
        <div id="chatbox" class="chatbox"></div>
        <div class="input-container">
            <input type="text" id="userMessage" placeholder="Type your message...">
            <button id="sendButton">Send</button>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#sendButton').click(function() {
                const message = $('#userMessage').val();
                $('#chatbox').append(`<div class="message user-message">${message}</div>`); // Display user message
                $('#userMessage').val(''); // Clear input field

                $.ajax({
                    url: '/chat',
                    method: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify({ message: message }),
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(data) {
                        // Append the bot's reply to the chatbox
                        data.forEach(reply => {
                            $('#chatbox').append(`<div class="message bot-message">${reply.text}</div>`);
                        });
                        // Scroll to the bottom of the chatbox
                        $('#chatbox').scrollTop($('#chatbox')[0].scrollHeight);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            });
        });
    </script>
</body>
</html>
