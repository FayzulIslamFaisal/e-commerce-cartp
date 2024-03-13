<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Repository Pattern</title>
</head>

<body>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <a href="{{ route('student') }}" class="btn btn-primary">All Student</a>
                    <form method="POST" action="{{ route('add_student') }}">
                        @csrf
                        <div class="form-group">
                            <label for="sname">Student Name</label>
                            <input type="text" name="name" class="form-control" id="sname"
                                aria-describedby="emailHelp">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="srule">Role Number</label>
                            <input type="text" name="rule" class="form-control" id="srule">
                            @error('rule')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="number" name="status" class="form-control" id="status">

                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
