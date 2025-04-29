@extends('layouts.app')

@section('title', 'Chatbot Masjid - Manajemen Masjid')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <h2>Chatbot Masjid</h2>
        <p>Selamat datang di layanan chatbot masjid. Silakan ajukan pertanyaan atau pilih layanan.</p>
    </div>
</div>

<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Chatbot Masjid</h5>
            </div>
            <div class="card-body">
                <div id="chat-messages" class="mb-3" style="height: 400px; overflow-y: auto; border: 1px solid #ddd; border-radius: 5px; padding: 10px; background-color: #f9f9f9;">
                    <div class="bot-message mb-2">
                        <div class="message-content p-2 rounded bg-light">
                            <strong>Bot Masjid:</strong> Assalamu'alaikum, ada yang bisa saya bantu? Anda dapat bertanya tentang donasi pembangunan, donasi harian, donasi operasional, zakat mal, zakat fitrah, antrian qurban, atau kegiatan masjid.
                        </div>
                    </div>
                    <!-- Messages will be added here dynamically -->
                </div>
                <div id="quick-replies" class="mb-3 d-flex flex-wrap">
                    <button class="btn btn-sm btn-outline-primary m-1" onclick="sendQuickReply('donasi pembangunan')">Donasi Pembangunan</button>
                    <button class="btn btn-sm btn-outline-primary m-1" onclick="sendQuickReply('donasi harian')">Donasi Harian</button>
                    <button class="btn btn-sm btn-outline-primary m-1" onclick="sendQuickReply('donasi operasional')">Donasi Operasional</button>
                    <button class="btn btn-sm btn-outline-primary m-1" onclick="sendQuickReply('zakat mal')">Zakat Mal</button>
                    <button class="btn btn-sm btn-outline-primary m-1" onclick="sendQuickReply('zakat fitrah')">Zakat Fitrah</button>
                    <button class="btn btn-sm btn-outline-primary m-1" onclick="sendQuickReply('antrian qurban')">Antrian Qurban</button>
                    <button class="btn btn-sm btn-outline-primary m-1" onclick="sendQuickReply('kegiatan masjid')">Kegiatan Masjid</button>
                </div>
                <div class="input-group">
                    <input type="text" id="message-input" class="form-control" placeholder="Ketik pesan Anda...">
                    <button id="send-button" class="btn btn-primary">Kirim</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Loading indicator -->
<div id="loading-indicator" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 9999;">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Send message when send button is clicked
        $('#send-button').on('click', function() {
            sendMessage();
        });

        // Send message when Enter key is pressed
        $('#message-input').on('keypress', function(e) {
            if (e.which === 13) {
                sendMessage();
            }
        });

        // Initial setup - scroll to bottom of chat
        scrollToBottom();
    });

    // Function to send message
    function sendMessage() {
        const messageInput = $('#message-input');
        const message = messageInput.val().trim();
        
        if (message) {
            // Add user message to chat
            addUserMessage(message);
            
            // Clear input
            messageInput.val('');
            
            // Process the message
            processMessage(message);
        }
    }

    // Function to send quick reply
    function sendQuickReply(message) {
        // Add user message to chat
        addUserMessage(message);
        
        // Process the message
        processMessage(message);
    }

    // Function to add user message to chat
    function addUserMessage(message) {
        const messageHtml = `
            <div class="user-message mb-2 text-end">
                <div class="message-content p-2 rounded bg-primary text-white d-inline-block">
                    <strong>Anda:</strong> ${message}
                </div>
            </div>
        `;
        
        $('#chat-messages').append(messageHtml);
        scrollToBottom();
    }

    // Function to add bot message to chat
    function addBotMessage(response) {
        let messageHtml = `
            <div class="bot-message mb-2">
                <div class="message-content p-2 rounded bg-light">
                    <strong>Bot Masjid:</strong> ${response.text}
                </div>
            </div>
        `;
        
        $('#chat-messages').append(messageHtml);
        
        // Clear existing quick replies
        $('#quick-replies').empty();
        
        // Add new quick replies/options if available
        if (response.options && response.options.length > 0) {
            response.options.forEach(option => {
                let button;
                
                if (option.action === 'reply') {
                    button = `<button class="btn btn-sm btn-outline-primary m-1" onclick="sendQuickReply('${option.message}')">${option.text}</button>`;
                } else if (option.action === 'redirect') {
                    button = `<a href="${option.url}" class="btn btn-sm btn-outline-success m-1">${option.text}</a>`;
                }
                
                $('#quick-replies').append(button);
            });
        }
        
        scrollToBottom();
    }

    // Function to process the message via AJAX
    function processMessage(message) {
        // Show loading indicator
        $('#loading-indicator').show();
        
        $.ajax({
            url: '/chatbot/process',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                message: message
            },
            success: function(data) {
                // Hide loading indicator
                $('#loading-indicator').hide();
                
                // Add bot response to chat
                addBotMessage(data.response);
            },
            error: function(error) {
                // Hide loading indicator
                $('#loading-indicator').hide();
                
                // Add error message to chat
                const errorResponse = {
                    text: 'Maaf, terjadi kesalahan. Silakan coba lagi nanti.',
                    options: []
                };
                addBotMessage(errorResponse);
                
                console.error('Error:', error);
            }
        });
    }

    // Function to scroll to bottom of chat
    function scrollToBottom() {
        const chatMessages = document.getElementById('chat-messages');
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }
</script>
@endsection 