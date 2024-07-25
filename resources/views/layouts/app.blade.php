<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Estilos Personales-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}"><!-- Estilos SideBar-->
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <!--Nuevo-->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/plugins/morris/morris.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('/assets/css/dataTables.bootstrap4.min.css') }}"> -->
    <link rel="stylesheet" href="{{asset('/assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap-datetimepicker.min.css') }}">

    <link rel="stylesheet" href="{{ asset ('assets/css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Favicons -->
    <link href="{{asset('img/favicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">





</head>

<body>
    <div id="app">
        @include ('layouts.sidebar')
        @include ('layouts.header')
        <main class="py-4">
            @yield('content')

        </main>
    </div>
    <!-- 
 <script src="{{ asset('js/main.js') }}"></script> -->
    <!-- Agrega jQuery -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/toastr_jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset ('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset ('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset ('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('assets/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset ('assets/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset ('assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset ('assets/js/chart.js') }}"></script>
    <script src="{{ asset ('assets/js/select2.min.js') }}"></script>
    <!--  <script src="{{ asset ('assets/js/jquery.dataTables.min.js') }}"></script> -->
    <!--  <script src="{{ asset ('assets/js/dataTables.bootstrap4.min.js') }}"></script> -->
    <script src="{{ asset ('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset ('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset ('assets/plugins/fileupload/fileupload.min.js') }}"></script>
    <script src="{{ asset ('assets/js/app.js') }}"></script>
    <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>


    <!-- //Data Tables -->

    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>



    <!-- jQuery library -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- // Funcion de sweetalert2 para cerarr Sesion -->
    <script>
        document.getElementById('logoutButton').addEventListener('click', function(event) {
            event.preventDefault();
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¿Quieres cerrar sesión?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, cerrar sesión'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Si el usuario confirma, entonces envía el formulario de logout
                    document.getElementById('logout-form').submit();
                }
            });
        });
    </script>
    <!-- // Funcion de sweetalert2 para enviar formulario de registro de empleado -->
    <script>
        $(document).ready(function() {
            // Listen for the form submission event
            $('#enviarlo').click(function(e) {
                // Prevent the form from submitting automatically
                e.preventDefault();

                // Display the SweetAlert
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: '¡Empleado registrado!',
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    // Submit the form after the timer
                    $(this).closest('form').submit();
                });
            });
        });
    </script>
    <!-- // Funcion de sweetalert2 para enviar formulario de registro de empleado -->
    <script>
        $(document).ready(function() {
            // Listen for the form submission event
            $('#enviarlosala').click(function(e) {
                // Prevent the form from submitting automatically
                e.preventDefault();

                // Display the SweetAlert
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: '¡Sala registrada!',
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    // Submit the form after the timer
                    $(this).closest('form').submit();
                });
            });
        });
    </script>

    <!-- // Funcion de sweetalert2 para enviar formulario de registro de puesto -->

    <script>
        $(document).ready(function() {
            // Listen for the form submission event
            $('#enviarlopuesto').click(function(e) {
                // Prevent the form from submitting automatically
                e.preventDefault();

                // Display the SweetAlert
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: '¡Puesto registrado!',
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    // Submit the form after the timer
                    $(this).closest('form').submit();
                });
            });
        });
    </script>
    <!-- // Funcion de sweetalert2 para enviar formulario de edicion de empleado -->
    <script>
        $(document).ready(function() {
            // Listen for the form submission event
            $('#editar').click(function(e) {
                // Prevent the form from submitting automatically
                e.preventDefault();

                // Display the SweetAlert
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: '¡Empleado editado!',
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    // Submit the form after the timer
                    $(this).closest('form').submit();
                });
            });
        });
    </script>
    <!-- // Funcion de sweetalert2 para enviar formulario de edicion de sala -->
    <script>
        $(document).ready(function() {
            // Listen for the form submission event
            $('#editarsala').click(function(e) {
                // Prevent the form from submitting automatically
                e.preventDefault();

                // Display the SweetAlert
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: '¡Sala editada!',
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    // Submit the form after the timer
                    $(this).closest('form').submit();
                });
            });
        });
    </script>

    <!-- // Funcion de sweetalert2 para enviar formulario de edicion puestos -->
    <script>
        $(document).ready(function() {
            // Listen for the form submission event
            $('#editarpuesto').click(function(e) {
                // Prevent the form from submitting automatically
                e.preventDefault();

                // Display the SweetAlert
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: '¡Puesto editado!',
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    // Submit the form after the timer
                    $(this).closest('form').submit();
                });
            });
        });
    </script>



    <script>
        $(document).ready(function() {
            // Listen for the form submission event
            $('#enviar').click(function(e) {
                // Prevent the form from submitting automatically
                e.preventDefault();

                // Display the SweetAlert
                Swal.fire({
                    position: "top-center",
                    icon: "success",
                    title: "Respuestas enviadas",
                    showConfirmButton: false,
                    timer: 1700
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If the user confirms, redirect to the employees page
                        window.location.href = "{{ route('empleados.create') }}"; // Change 'empleados.index' to the actual route name for your employees page
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Listen for the delete button click event
            $('.delete-button').click(function(e) {
                // Prevent the default button action
                e.preventDefault();

                // Get the closest form to the clicked button
                var form = $(this).closest('form');

                // Display the SweetAlert confirmation dialog
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "¡No podrás revertir esto!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, eliminarlo',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If the user confirms, submit the form
                        form.submit();
                    }
                });
            });
        });
    </script>



    <script>
        $(document).ready(function() {
            $('#buscar').DataTable({
                responsive: true,
                autoWidth: false // Evita que DataTables ajuste automáticamente el ancho de la tabla
            });
        });
    </script>

<!-- Metodo para destrurir sesion por inactividad por 10 minutos-->
    <script>
        var idleTime = 0;
        $(document).ready(function() {
            // Incrementa el contador de inactividad cada minuto
            var idleInterval = setInterval(timerIncrement, 60000); // 1 minuto

            // Reinicia el contador de inactividad cuando se detecta actividad
            $(this).mousemove(function(e) {
                idleTime = 0;
            });
            $(this).keypress(function(e) {
                idleTime = 0;
            });
        });

        function timerIncrement() {
            idleTime = idleTime + 1;
            if (idleTime > 10) { // Cambia este valor según tus necesidades (10 minuto en este caso)
                // Hacer una solicitud AJAX para cerrar la sesión
                $.ajax({
                    url: '/logout', // La ruta a tu controlador o ruta de logout
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Asegúrate de enviar el token CSRF
                    },
                    success: function(data) {
                        // Redireccionar a la página de inicio de sesión u otra página
                        window.location.href = '/';
                    }
                });
            }
        }
    </script>


</body>

</html>