<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f5f5f5; /* Light background for readability */
        color: #333; /* Dark text for contrast */
        font-family: 'Arial', sans-serif; /* Font for a clean look */
    }
    .card {
        background-color: #fff; /* White background for card */
        border: 1px solid #ddd; /* Light grey border */
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
    .text-white {
        color: #fff !important; /* Ensure text is white */
    }
    .container {
        margin-top: 5%;
    }
</style>

</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- General form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Login</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- Form start -->
                    <form action="<?= base_url('/auth') ?>" method="post">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <?php if (session()->getFlashdata('error')) { ?>
                            <div class="alert alert-danger">
                                <?= session()->getFlashdata('error') ?>
                            </div>
                        <?php } ?>
                        <?php if (session()->getFlashdata('success')) { ?>
                            <div class="alert alert-success">
                                <?= session()->getFlashdata('success') ?>
                            </div>
                        <?php } ?>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <br>
                            <a class="text-black" href="<?= base_url('register'); ?>">Don't have an account?</a>
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
