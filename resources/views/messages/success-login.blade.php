@if (session()->get('success'))
    <div class="alert alert-success"
        style="width:200px; position:fixed !important; top:0; right:0; z-index:5000 !important;">
        <p>{{ session('success') }}</p>
    </div>
    <script>
        setTimeout(function() {
            document.querySelector('.alert').remove();
        }, 5000);
    </script>
@endif
