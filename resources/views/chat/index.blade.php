@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Chatbot Pelayanan Masjid</h2>
    <div class="card mb-3">
        <div class="card-body" style="height: 400px; overflow-y: scroll;">
            @foreach($messages as $msg)
                <div class="text-{{ $msg->sender === 'user' ? 'right' : 'left' }}">
                    <span class="badge bg-{{ $msg->sender === 'user' ? 'primary' : 'secondary' }}">{{ $msg->message }}</span>
                </div>
            @endforeach
        </div>
    </div>
    <form action="{{ route('chat.send') }}" method="POST">
        @csrf
        <div class="input-group">
            <input type="text" name="message" class="form-control" placeholder="Ketik keluhan, saran, atau masukan...">
            <button type="submit" class="btn btn-success">Kirim</button>
        </div>
    </form>
</div>
@endsection
