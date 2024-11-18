import './bootstrap';
import Swal from 'sweetalert2';

// Puedes agregar este código para ejecutarlo en la página
document.addEventListener('DOMContentLoaded', () => {
    Swal.fire({
        title: 'Error',
        text: 'Do you want to continue?',
        icon: 'error',
        confirmButtonText: 'Cool'
    });
});
