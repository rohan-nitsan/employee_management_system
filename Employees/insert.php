<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../Assets/CSS/insert.css">
    <title>Registration</title>
</head>

<body>

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h1 class="mb-4 pb-2 pb-md-0 mb-md-5">Employee Registration</h1>
                            <form method="POST" action="">

                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <h6 class="form-label">First Name</h6>
                                            <input type="text" name="fname" class="form-control form-control-lg" />
                                            <p class="error" id="fname_error"></p>


                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <h6 class="form-label">Last Name</h6>
                                            <input type="text" name="lname" class="form-control form-control-lg" />
                                            <p class="error" id="lname_error"></p>

                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-4">

                                        <div class="form-outline datepicker w-100">
                                            <h6 class="form-label">Address</h6>
                                            <input type="text" class="form-control form-control-lg" name="address" />
                                            <p class="error" id="address_error"></p>

                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <h6 class="mb-2 pb-1">Gender </h6>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" value="male" />
                                            <label class="form-check-label">Male</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" value="female" />
                                            <label class="form-check-label">Female</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" value="other" />
                                            <label class="form-check-label">Other</label>
                                        </div>
                                        <p class="error" id="gender_error"></p>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <h6 class="form-label">Email</h6>
                                            <input type="email" name="email" class="form-control form-control-lg" />
                                            <p class="error" id="email_error"></p>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 mb-4 pb-2">

                                        <div class="form-outline">
                                            <h6 class="form-label">Date of Birth</h6>
                                            <select name="day" id="" class="btn border">
                                                <option value="">Select</option>
                                                <?php
                                                for ($i = 1; $i <= 31; $i++) {
                                                    echo "<option value='$i'>$i</option>";
                                                }
                                                ?>
                                            </select>
                                            <select name="month" id="" class="btn border">
                                                <option value="">Select</option>
                                                <?php
                                                $months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                                                foreach ($months as $month) {
                                                    echo "<option value='$month'>$month</option>";
                                                }
                                                ?>
                                            </select>
                                            <select name="year" id="" class="btn border">
                                                <option value="">Select</option>
                                                <?php
                                                for ($i = 1980; $i <= 2022; $i++) {
                                                    echo "<option value='$i'>$i</option>";
                                                }
                                                ?>
                                            </select>
                                            <p class="error" id="dob_error"></p>

                                        </div>

                                    </div>
                                    <div class="col-md-4 mb-4 pb-2">

                                        <div class="form-outline">
                                            <h6 class="form-label">HSC(%)</h6>
                                            <input type="number" name="hsc" class="form-control form-control-lg" />
                                            <p class="error" id="hsc_error"></p>

                                        </div>

                                    </div>
                                </div>


                                <div class="mt-4 pt-2">
                                    <input type="submit" name="register" class="btn btn-primary btn-lg" id="" value="Register">
                                    <input class="btn btn-danger btn-lg" type="reset" value="Reset" />
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>

<?php

if (isset($_POST['register'])) {
    extract($_POST);
    $valid = 0;
    # Validations
    if (empty($fname)) {
        echo "
            <script>
                document.getElementById('fname_error').innerText='* Please Enter First Name';
            </script>
        ";
        $valid = 0;
    } else {
        $valid = 1;
    }
    if (empty($lname)) {
        echo "
            <script>
                document.getElementById('lname_error').innerText='* Please Enter Last Name';
            </script>
        ";
        $valid = 0;
    } else {
        $valid = 1;
    }
    if (empty($address)) {
        echo "
            <script>
                document.getElementById('address_error').innerText='* Please Enter Address';
            </script>
        ";
        $valid = 0;
    } else {
        $valid = 1;
    }
    if (empty($gender)) {
        echo "
            <script>
                document.getElementById('gender_error').innerText='* Please Select Gender';
            </script>
        ";
        $valid = 0;
    } else {
        $valid = 1;
    }
    if (empty($email)) {
        echo "
            <script>
                document.getElementById('email_error').innerText='* Please Enter Email';
            </script>
        ";
        $valid = 0;
    } else {
        $valid = 1;
    }
    if (empty($day) or empty($month) or empty($year)) {
        echo "
            <script>
                document.getElementById('dob_error').innerText='* Please Select Date';
            </script>
        ";
        $valid = 0;
    } else {
        $valid = 1;
    }
    if (empty($hsc)) {
        echo "
            <script>
                document.getElementById('hsc_error').innerText='* Please Enter HSC Percentage';
            </script>
        ";
        $valid = 0;
    } else {
        $valid = 1;
    }
    if ($valid == 1) {
        include '../App/function.php';
        insert($fname, $lname, $address, $gender, $email, $day, $month, $year, $hsc);
    }
}

?>