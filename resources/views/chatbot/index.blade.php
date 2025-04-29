@extends('layouts.app')

@section('title', 'Chatbot Masjid')

@section('content')
<div class="container">
    <h3 class="mb-3">Chatbot Masjid</h3>
    <div class="card">
        <div class="card-body">
            <div id="chat-box" style="height: 300px; overflow-y: scroll; border: 1px solid #ccc; padding: 10px;">
                <div><strong>Bot:</strong> Assalamu'alaikum! Ada yang bisa kami bantu?</div>
            </div>
            <form id="chat-form" class="mt-3">
                <div class="input-group">
                    <input type="text" class="form-control" id="user-input" placeholder="Tulis pertanyaan Anda..." required>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.getElementById('chat-form').addEventListener('submit', function(e) {
        e.preventDefault();

        const input = document.getElementById('user-input');
        const message = input.value;
        const chatBox = document.getElementById('chat-box');

        chatBox.innerHTML += `<div><strong>Anda:</strong> ${message}</div>`;
        input.value = '';

        fetch("{{ route('chatbot.send') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            body: JSON.stringify({ message })
        })
        .then(response => response.json())
        .then(data => {
            chatBox.innerHTML += `<div><strong>Bot:</strong> ${data.reply}</div>`;
            chatBox.scrollTop = chatBox.scrollHeight;
        });
    });
</script>
