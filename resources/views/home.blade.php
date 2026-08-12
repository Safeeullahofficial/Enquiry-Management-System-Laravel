@if(session('success'))

<script>
    alert("{{ session('success') }}")
</script>

@endif

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">



        <title>Hero Section</title>
    </head>

    <body>

        @include('layout.header')

        <section class="hero d-flex align-items-center text-center text-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">

                        <h1 class="display-3 fw-bold mb-4">
                            Welcome to the Enquiry Management System
                        </h1>

                        <p class="lead mb-4">
                            Manage customer enquiries efficiently, track progress,
                            assign responsibilities, and improve response times with
                            a modern and easy-to-use management platform.
                        </p>

                        <a href="/enqiury" class="btn btn-primary btn-lg btn-custom">
                            Get Started
                        </a>

                    </div>
                </div>
            </div>
        </section>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        @include('layout.footer')
    </body>

    </html>
</body>

</html>