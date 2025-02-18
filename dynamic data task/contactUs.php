<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

      <!-- Latest compiled and minified CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

      <!-- Latest compiled JavaScript -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>

    <!-- container -->
    <div class="container-fluid">
        <h3 class="text-center">Contact Us</h3>
        <!-- card -->
        <div class="card p-4">
             <!-- form -->
            <form action="contactUs.php" method="post">
                <!-- fname -->
                <div class="mb-3">
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name" minlength="2" maxlength="50">
                </div>
                <!-- lname -->
                <div class="mb-3">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" minlength="2" maxlength="50">
                </div>
                <!-- email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" maxlength="50" minlength="5">
                </div>
                <!-- phone number -->
                <div class="mb-3">
                    <label for="number" class="form-label">Phone number</label>
                    <input type="number" name="number" id="number" class="form-control" minlength="10" maxlength="10" placeholder="+91"/>
                </div>

                <!-- btn -->
                <div class="row d-flex justify-content-center">
                    <button type="submit" class="btn btn-dark col-lg-4">Submit</button>
                </div>
            </form>
        </div> 
    </div>
</body>
</html>