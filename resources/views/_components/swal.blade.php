<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.querySelectorAll('.formulario-eliminar').forEach(function(eliminarBtn) {
        
        eliminarBtn.addEventListener('click', function(event) {
            
            event.preventDefault();

            // SweetAlert2
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 mr-5",
                    cancelButton: "bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700"
            },
            buttonsStyling: true
            });
            swalWithBootstrapButtons.fire({
            title: "¿Estás seguro?",
            text: "¡No podrás ser capaz de revertir esto!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "¡Si, eliminalo!",
            cancelButtonText: "¡No, cancelalo!",
            reverseButtons: false,
            background: '#38322e',
            color: '#d4d4d8'
            }).then((result) => {
            if (result.isConfirmed) {
                swalWithBootstrapButtons.fire({
                title: "¡Eliminado!",
                text: "El elemento ha sido eliminado.",
                icon: "success",
                background: '#38322e',
                color: '#d4d4d8'
                });
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire({
                title: "Cancelado",
                text: "Proceso cancelado :)",
                icon: "error",
                background: '#38322e',
                color: '#d4d4d8'
                });
            }
            });
        });
    });
</script>