<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- link -->
    <script src="ajax.js"></script>

    <script>
    </script>

</head>
<body>
    
    <!-- main container -->
    <div class="container-fluid">
        <h3 class="text-lg-center text-md-center text-sm-center text-center">Form</h3>
        <!-- card -->
        <div class="card p-4">
            <!-- fname -->
            <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" name="fname" id="fname" class="form-control">
            </div>
            <!-- lname -->
            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" name="lname" id="lname" class="form-control">
            </div>
            <!-- email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
             <!-- Address -->
             <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea name="address" id="address" class="form-control" rows="2"></textarea>
            </div>
            <!-- btn -->
            <div class="row d-flex justify-content-center">
                <button type="submit" class="btn btn-dark col-6">
                    <a href="aboutUs.html" class="text-decoration-none text-white">
                        Submit
                    </a>
                </button>
            </div>
            
        </div>
    </div>

</body>
</html>