@if (session()->get('error'))
    <div class="alert alert-danger"
        style="width:200px; position:fixed !important; top:0; right:0; z-index:5000 !important;">
        <p>{{ session('error') }}</p>
    </div>
    <script>
        setTimeout(function() {
            document.querySelector('.alert').remove();
        }, 5000);
    </script>
@endif
