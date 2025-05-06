<!DOCTYPE html>
<html>
<head>
    <title>Chatbot Masjid</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <h1>Chatbot Pelayan Masjid</h1>
    <div id="chat-box" style="border:1px solid #ccc;padding:10px;height:300px;overflow-y:auto;"></div>
    <input type="text" id="message" placeholder="Tulis pertanyaan..." />
    <button onclick="sendMessage()">Kirim</button>

    <script>
        async function sendMessage() {
            let message = document.getElementById('message').value;
            let response = await fetch('/chat/send', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ message: message })
            });
            let data = await response.json();
            document.getElementById('chat-box').innerHTML += `<p><strong>Anda:</strong> ${message}</p>`;
            document.getElementById('chat-box').innerHTML += `<p><strong>Bot:</strong> ${data.reply}</p>`;
            document.getElementById('message').value = '';
        }
    </script>
</body>
</html>
