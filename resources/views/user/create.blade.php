<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS can be added here */
        /* Adjust container width for larger screens */
        @media (min-width: 2200px) {
            .container {
                max-width: 2200px;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header bg-primary text-white">Add User</div>
                    <div class="card-body">
                        <form method="POST" action="/user/store" enctype="multipart/form-data" id="userForm" class="needs-validation" novalidate>
                            @csrf <!-- Automatically generates CSRF token input field -->
                            <div class="row">
                                <!-- First Name Field -->
                                <div class="form-group col-md-4">
                                    <label for="firstname">First Name</label>
                                    <input id="firstname" type="text" class="form-control" name="firstname" required autofocus>
                                    <div class="invalid-feedback">
                                        Please provide a first name.
                                    </div>
                                </div>

                                <!-- Middle Name Field -->
                                <div class="form-group col-md-4">
                                    <label for="middlename">Middle Name</label>
                                    <input id="middlename" type="text" class="form-control" name="middlename" required>
                                    <div class="invalid-feedback">
                                        Please provide a middle name.
                                    </div>
                                </div>

                                <!-- Last Name Field -->
                                <div class="form-group col-md-4">
                                    <label for="lastname">Last Name</label>
                                    <input id="lastname" type="text" class="form-control" name="lastname" required>
                                    <div class="invalid-feedback">
                                        Please provide a last name.
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Suffix Field -->
                                <div class="form-group col-md-4">
                                    <label for="suffix">Suffix</label>
                                    <input id="suffix" type="text" class="form-control" name="suffix">
                                </div>

                                <!-- Birthdate Field -->
                                <div class="form-group col-md-4">
                                    <label for="birthdate">Birthdate</label>
                                    <input id="birthdate" type="date" class="form-control" name="birthdate" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid birthdate.
                                    </div>
                                </div>

                                <!-- Gender Field -->
                                <div class="form-group col-md-4">
                                    <label for="gender">Gender</label>
                                    <select id="gender" class="form-control" name="gender" required>
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a gender.
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Address Field -->
                                <div class="form-group col-md-6">
                                    <label for="address">Address</label>
                                    <input id="address" type="text" class="form-control" name="address" required>
                                    <div class="invalid-feedback">
                                        Please provide an address.
                                    </div>
                                </div>

                                <!-- Contact Number Field -->
                                <div class="form-group col-md-6">
                                    <label for="contact_number">Contact Number</label>
                                    <input id="contact_number" type="tel" class="form-control" name="contact_number" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid contact number.
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Email Field -->
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid email address.
                                    </div>
                                </div>

                                <!-- Username Field -->
                                <div class="form-group col-md-6">
                                    <label for="username">Username</label>
                                    <input id="username" type="text" class="form-control" name="username" required>
                                    <div class="invalid-feedback">
                                        Please provide a username.
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Password Field -->
                                <div class="form-group col-md-6">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    <div class="invalid-feedback">
                                        Please provide a password.
                                    </div>
                                </div>

                                <!-- Confirm Password Field -->
                                <div class="form-group col-md-6">
                                    <label for="password-confirm">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    <div class="invalid-feedback">
                                        Please confirm your password.
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Client-side form validation
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>

</html>