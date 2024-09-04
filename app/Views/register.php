<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f5f5f5; /* Light background for better readability */
        color: #333; /* Dark text for contrast */
        font-family: 'Arial', sans-serif; /* Font for a clean look */
    }
    .card {
        background-color: #fff; /* White background for card */
        border: 1px solid #ddd; /* Light grey border for card */
        border-radius: 8px; /* Rounded corners */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    }
    .card-header {
        background-color: #007bff; /* Sky blue background for header */
        color: #fff; /* White text */
        text-align: center; /* Centered header text */
        border-bottom: 1px solid #ddd; /* Light grey border for separation */
        border-radius: 8px 8px 0 0; /* Rounded top corners */
    }
    .btn-primary {
        background-color: #007bff; /* Sky blue background for button */
        border: none;
    }
    .btn-primary:hover {
        background-color: #0056b3; /* Darker blue on hover */
    }
    .form-control {
        background-color: #f1f1f1; /* Light grey input fields */
        color: #333; /* Dark text in input fields */
        border: 1px solid #ccc; /* Light grey border */
    }
    .form-control::placeholder {
        color: #aaa; /* Grey placeholder text */
    }
    .alert {
        margin-top: 10px;
    }
    .text-primary {
        color: #007bff !important; /* Sky blue text */
    }
    .container {
        margin-top: 5%;
    }
    h6 {
        margin-bottom: 0;
    }
</style>

</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- General form elements -->
                <div class="card card-primary">
                    <div class="card-header text-center">
                        <h3 class="card-title">Register</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- Form start -->
                    <form method="post" action="">
                        <div class="card-body">
                            <div class="form-group mt-2">
                                <label for="name"><h6>Name</h6></label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your full name" value="<?= set_value('name') ?>">
                            </div>
                            <div class="form-group mt-2">
                                <label for="email"><h6>Email address</h6></label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" value="<?= set_value('email') ?>">
                            </div>
                            <div class="form-group mt-2">
                                <label for="password"><h6>Password</h6></label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group mt-2">
                                <label for="confpassword"><h6>Password Verify</h6></label>
                                <input type="password" name="confpassword" id="confpassword" class="form-control" placeholder="Password Verify">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <?php if (isset($errors)) { ?>
                            <div class="alert alert-danger">
                                <?= $errors->listErrors(); ?>
                            </div>
                        <?php } ?>

                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <br>
                            <a class="text-white" href="<?php echo base_url(''); ?>">Do you already have an account?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
