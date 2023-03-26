@if (session()->has('message'))
    <script>
        toastr.success('{{ session('message') }}', 'Réussi');
    </script>
@endif