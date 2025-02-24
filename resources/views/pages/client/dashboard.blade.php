<x-layout>
    @if (Session()->has("success"))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ Session("success") }}',
        });
    </script>
    @endif
    <h1>Dashboard</h1>
</x-layout>
