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
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h3>Enquiry Form</h3>
                    </div>

                    <div class="card-body">

                        <form action="" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" name="fullname" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Education</label>
                                <input type="text" name="education" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <textarea name="address" class="form-control" rows="3" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Course</label>
                                <select name="course" class="form-select" required>
                                    <option value="">-- Select Course --</option>
                                    <option value="Web Development">Web Development</option>
                                    <option value="Graphic Designing">Graphic Designing</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                    <option value="MS Office">MS Office</option>
                                    <option value="AutoCAD">AutoCAD</option>
                                    <option value="Python">Python</option>
                                    <option value="PHP & MySQL">PHP & MySQL</option>
                                    <option value="Laravel">Laravel</option>
                                    <option value="Flutter">Flutter</option>
                                    <option value="Video Editing">Video Editing</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Duration</label>
                                <input type="text" name="duration" class="form-control" placeholder="e.g. 3 Months" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">
                                Submit Enquiry
                            </button>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>


    @include('layout.footer')


</body>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>