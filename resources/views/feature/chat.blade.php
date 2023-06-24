<!DOCTYPE html>
<html>
<head>
    <title>Chat</title>
</head>
<body>
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
</body>
</html>
