<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
   document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.formulario-eliminar').forEach(function (eliminarBtn) {
        eliminarBtn.addEventListener('click', function (event) {
            event.preventDefault();

            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 mr-5",
                    cancelButton: "bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700"
                },
                buttonsStyling: true
            });

            swalWithBootstrapButtons.fire({
                title: "¿Estás seguro?",
                text: "¡No podrás revertir esto!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "¡Sí, elíminalo!",
                cancelButtonText: "Cancelar",
                reverseButtons: true,
                background: '#38322e',
                color: '#d4d4d8'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Enviar el formulario
                    event.target.closest('form').submit();
                } else {
                    swalWithBootstrapButtons.fire({
                        title: "Cancelado",
                        text: "El proceso ha sido cancelado.",
                        icon: "error",
                        background: '#38322e',
                        color: '#d4d4d8'
                    });
                }
            });
        });
    });
});

</script>