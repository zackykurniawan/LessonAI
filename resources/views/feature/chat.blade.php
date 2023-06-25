@extends('layouts.template')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Jurusan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ url('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ url('jurusan') }}">Master</a></div>
                <div class="breadcrumb-item">Jurusan</div>
            </div>
        </div>
    </section>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        
                    </div>
                    <div class="card-body mx-auto">
                        <form id="chatForm">
                            @csrf
                            <input type="text" name="message" placeholder="Type your message">
                            <button type="submit">Send</button>
                        </form>

                        <div id="reply">
                            <!-- Balasan dari GPT-3.5 akan ditampilkan di sini -->
                        </div>

                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                $('#chatForm').submit(function(event) {
                                    event.preventDefault();
                                    var formData = $(this).serialize();

                                    $.ajax({
                                        url: '/chat',
                                        type: 'POST',
                                        data: formData,
                                        success: function(response) {
                                            var reply = response.reply;
                                            $('#reply').append('<p>' + reply + '</p>');
                                            // Atau, jika Anda ingin mengganti isi dari #reply dengan balasan terbaru:
                                            // $('#reply').html('<p>' + reply + '</p>');
                                        }
                                    });
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
