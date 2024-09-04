<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
            color: #333;
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 5%;
        }
        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            border-bottom: 1px solid #ddd;
            border-radius: 8px 8px 0 0;
        }
        .card-title {
            margin: 0;
        }
        .card-body {
            padding: 20px;
        }
        .card-footer {
            padding: 20px;
            border-top: 1px solid #ddd;
            background-color: #f9f9f9;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .form-control {
            background-color: #f1f1f1;
            color: #333;
            border: 1px solid #ccc;
        }
        .form-control::placeholder {
            color: #aaa;
        }
        .text-primary {
            color: #007bff !important;
        }
        .profile-img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            object-fit: cover;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- User Info Card -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Welcome, <?= esc($user['name']) ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- User Info -->
                    <div class="card-body">
                        <!-- Display Profile Picture -->
                        <div class="text-center">
                            <?php if (!empty($user['profile_cd'])): ?>
                                <img src="<?= base_url('image/' . esc($user['profile_cd'])) ?>" alt="Profile Picture" class="profile-img">
                            <?php else: ?>
                                <img src="<?= base_url('image/default.png') ?>" alt="Profile Picture" class="profile-img">
                            <?php endif; ?>
                        </div>
                        <h4 class="text-primary">Personal Information</h4>
                        <p><strong>Email:</strong> <?= esc($user['email']) ?></p>
                        <p><strong>Name:</strong> <?= esc($user['name']) ?></p>
                        <p><strong>Birthday:</strong> <?= esc($user['birthday']) ?></p>
                        <p><strong>Age:</strong> <?= esc($user['age']) ?></p>
                        <p><strong>Gender:</strong> <?= esc($user['gender']) ?></p>
                        <p><strong>Address:</strong> <?= esc($user['address']) ?></p>
                        <p><strong>Occupation:</strong> <?= esc($user['occupation']) ?></p>
                        <p><strong>Nationality:</strong> <?= esc($user['nationality']) ?></p>
                    </div>
                    <!-- /.card-body -->
                    <!-- Edit Form -->
                    <div class="card-footer">
                        <h4 class="text-primary">Edit Information</h4>
                        <form method="post" action="<?= base_url('update') ?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="<?= esc($user['name']) ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="<?= esc($user['email']) ?>">
                            </div>
                            <div class="form-group">
                                <label for="birthday">Birthday</label>
                                <input type="date" name="birthday" id="birthday" class="form-control" value="<?= esc($user['birthday']) ?>">
                            </div>
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="number" name="age" id="age" class="form-control" value="<?= esc($user['age']) ?>">
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="Male" <?= $user['gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
                                    <option value="Female" <?= $user['gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
                                    <option value="Other" <?= $user['gender'] == 'Other' ? 'selected' : '' ?>>Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" id="address" class="form-control" value="<?= esc($user['address']) ?>">
                            </div>
                            <div class="form-group">
                                <label for="occupation">Occupation</label>
                                <input type="text" name="occupation" id="occupation" class="form-control" value="<?= esc($user['occupation']) ?>">
                            </div>
                            <div class="form-group">
                                <label for="nationality">Nationality</label>
                                <input type="text" name="nationality" id="nationality" class="form-control" value="<?= esc($user['nationality']) ?>">
                            </div>
                            <div class="form-group">
                                <label for="profile_cd">Profile Picture</label>
                                <input type="file" name="profile_cd" id="profile_cd" class="form-control-file">
                            </div>
                            <input type="hidden" name="id" value="<?= esc($user['id']) ?>">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>

                        <!-- Password Change Form -->
                        <h4 class="text-primary mt-4">Change Password</h4>
                        <form method="post" action="<?= base_url('auth/change_password') ?>">
                            <div class="form-group">
                                <label for="current_password">Current Password</label>
                                <input type="password" name="current_password" id="current_password" class="form-control" placeholder="Current Password">
                            </div>
                            <div class="form-group">
                                <label for="new_password">New Password</label>
                                <input type="password" name="new_password" id="new_password" class="form-control" placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <label for="confirm_new_password">Confirm New Password</label>
                                <input type="password" name="confirm_new_password" id="confirm_new_password" class="form-control" placeholder="Confirm New Password">
                            </div>
                            <button type="submit" class="btn btn-primary">Change Password</button>
                        </form>

                        <!-- Logout Button -->
                        <div class="mt-4">
                            <a href="<?= base_url('auth/logout') ?>" class="btn btn-danger">Logout</a>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
