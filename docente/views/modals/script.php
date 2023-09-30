 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script>
     $('.delete-content').submit(function(e) {
         e.preventDefault();
         Swal.fire({
             title: '¿Está seguro?',
             text: "No podrás recuperar el registro",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             cancelButtonText: 'Cancelar',
             confirmButtonText: 'Eliminar'
         }).then((result) => {
             if (result.isConfirmed) {
                 /* Swal.fire(
                     'Deleted!',
                     'Your file has been deleted.',
                     'success'
                 ) */
                 this.submit();
             }
         })
     });
     /* Swal.fire({
         title: 'Are you sure?',
         text: "You won't be able to revert this!",
         icon: 'warning',
         showCancelButton: true,
         confirmButtonColor: '#3085d6',
         cancelButtonColor: '#d33',
         confirmButtonText: 'Yes, delete it!'
     }).then((result) => {
         if (result.isConfirmed) {
             Swal.fire(
                 'Deleted!',
                 'Your file has been deleted.',
                 'success'
             )
         }
     }) */
 </script>