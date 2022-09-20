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

    <section class="">
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
                                            <h6 class="form-label">Name</h6>
                                            <input type="text" name="name" class="form-control form-control-lg" />
                                            <p class="error" id="name_error"></p>


                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <h6 class="form-label">Employee ID</h6>
                                            <input type="text" name="e_id" class="form-control form-control-lg" />
                                            <p class="error" id="e_id_error"></p>

                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <h6 class="form-label">Email</h6>
                                            <input type="email" name="email" class="form-control form-control-lg" />
                                            <p class="error" id="email_error"></p>
                                        </div>

                                    </div>
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

                                </div>
                                <div class="row">
                                    <h6 class="form-label">Address</h6>
                                    <div class="col-md-4 mb-4">

                                        <div class="form-outline datepicker w-100">
                                            <input type="text" class="form-control form-control-lg" name="building" placeholder="Building" />
                                            <p class="error" id="building_error"></p>

                                        </div>

                                    </div>
                                    <div class="col-md-4 mb-4">

                                        <div class="form-outline datepicker w-100">
                                            <input type="text" class="form-control form-control-lg" name="road" placeholder="Road" />
                                            <p class="error" id="road_error"></p>

                                        </div>

                                    </div>
                                    <div class="col-md-4 mb-4">

                                        <div class="form-outline datepicker w-100">
                                            <input type="text" class="form-control form-control-lg" name="street" placeholder="Street" />
                                            <p class="error" id="street_error"></p>

                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-4">

                                        <div class="form-outline datepicker w-100">
                                            <input type="text" class="form-control form-control-lg" name="city" placeholder="City" />
                                            <p class="error" id="city_error"></p>

                                        </div>

                                    </div>
                                    <div class="col-md-4 mb-4">

                                        <div class="form-outline datepicker w-100">
                                            <input type="text" class="form-control form-control-lg" name="state" placeholder="State" />
                                            <p class="error" id="state_error"></p>

                                        </div>

                                    </div>
                                    <div class="col-md-4 mb-4">

                                        <div class="form-outline datepicker w-100">
                                            <input type="text" class="form-control form-control-lg" name="pin" placeholder="Pin Code" />
                                            <p class="error" id="pin_error"></p>

                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <h6 class="form-label">Blood Group</h6>

                                            <div class='form-check form-check-inline'>
                                                <input class='form-check-input' type='radio' name='blood_group' value='A+'>
                                                <label class='form-check-label'>A+</label>
                                            </div>
                                            <div class='form-check form-check-inline'>
                                                <input class='form-check-input' type='radio' name='blood_group' value='A-'>
                                                <label class='form-check-label'>A-</label>
                                            </div>
                                            <div class='form-check form-check-inline'>
                                                <input class='form-check-input' type='radio' name='blood_group' value='B+'>
                                                <label class='form-check-label'>B+</label>
                                            </div>
                                            <div class='form-check form-check-inline'>
                                                <input class='form-check-input' type='radio' name='blood_group' value='B+'>
                                                <label class='form-check-label'>B-</label>
                                            </div>
                                            <div class='form-check form-check-inline'>
                                                <input class='form-check-input' type='radio' name='blood_group' value='O+'>
                                                <label class='form-check-label'>O+</label>
                                            </div>
                                            <div class='form-check form-check-inline'>
                                                <input class='form-check-input' type='radio' name='blood_group' value='O-'>
                                                <label class='form-check-label'>O-</label>
                                            </div>
                                            <div class='form-check form-check-inline'>
                                                <input class='form-check-input' type='radio' name='blood_group' value='AB+'>
                                                <label class='form-check-label'>AB+</label>
                                            </div>
                                            <div class='form-check form-check-inline'>
                                                <input class='form-check-input' type='radio' name='blood_group' value='AB-'>
                                                <label class='form-check-label'>AB-</label>
                                            </div>


                                            <p class="error" id="blood_group_error"></p>


                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <h6 class="form-label">Mobile Number</h6>
                                            <input type="text" name="mobile" class="form-control form-control-lg" />
                                            <p class="error" id="mobile_error"></p>

                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-4">

                                        <div class="form-outline">
                                            <h6 class="form-label">Hobbies</h6>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="hobbies[]" value="cricket">
                                                <label class="form-check-label">Cricket</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="hobbies[]" value="reading">
                                                <label class="form-check-label">Reading</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="hobbies[]" value="music">
                                                <label class="form-check-label">Music</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="hobbies[]" value="e-games">
                                                <label class="form-check-label">E-Games</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="hobbies[]" value="traveling">
                                                <label class="form-check-label">Traveling</label>
                                            </div>
                                            <p class="error" id="hobbies_error"></p>


                                        </div>

                                    </div>

                                </div>
                                <div class="row">
                                    <h6 class="form-label">Experience</h6>
                                    <div class="col-md-4 mb-4">

                                        <div class="form-outline">

                                            <input type="text" name="year_from" class="form-control form-control-lg" placeholder="Year From" />
                                            <p class="error" id="year_from_error"></p>


                                        </div>

                                    </div>
                                    <div class="col-md-4 mb-4">

                                        <div class="form-outline">

                                            <input type="text" name="year_to" class="form-control form-control-lg" placeholder="Year To" />
                                            <p class="error" id="year_to_error"></p>

                                        </div>

                                    </div>
                                    <div class="col-md-4 mb-4">

                                        <div class="form-outline">

                                            <input type="text" name="position" class="form-control form-control-lg" placeholder="Position" />
                                            <p class="error" id="position_error"></p>

                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">

                                            <input type="text" name="company" class="form-control form-control-lg" placeholder="Company Name" />
                                            <p class="error" id="company_name_error"></p>

                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">

                                            <input type="number" name="salary" class="form-control form-control-lg" placeholder="Salary" />
                                            <p class="error" id="salary_error"></p>

                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <h6 class="form-label">Profile Picture</h6>
                                        <div class="input-group mb-3">

                                            <input type="file" class="form-control" name="avatar">

                                        </div>
                                        <p class="error" id="avatar_error"></p>
                                    </div>
                                </div>


                                <div class=" mt-4 pt-2">
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
    if (empty($name)) {
        echo "
            <script>
                document.getElementById('name_error').innerText='* Please Enter Name';
            </script>
        ";
        $valid = 0;
    } else {
        $valid = 1;
    }
    if (empty($e_id)) {
        echo "
            <script>
                document.getElementById('e_id_error').innerText='* Please Enter Employee ID';
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
    if (empty($building)) {
        echo "
            <script>
                document.getElementById('building_error').innerText='* Please Enter Building';
            </script>
        ";
        $valid = 0;
    } else {
        $valid = 1;
    }
    if (empty($road)) {
        echo "
            <script>
                document.getElementById('road_error').innerText='* Please Enter Road';
            </script>
        ";
        $valid = 0;
    } else {
        $valid = 1;
    }
    if (empty($street)) {
        echo "
            <script>
                document.getElementById('street_error').innerText='* Please Enter Street';
            </script>
        ";
        $valid = 0;
    } else {
        $valid = 1;
    }
    if (empty($city)) {
        echo "
            <script>
                document.getElementById('city_error').innerText='* Please Enter City';
            </script>
        ";
        $valid = 0;
    } else {
        $valid = 1;
    }
    if (empty($state)) {
        echo "
            <script>
                document.getElementById('state_error').innerText='* Please Enter State';
            </script>
        ";
        $valid = 0;
    } else {
        $valid = 1;
    }
    if (empty($pin)) {
        echo "
            <script>
                document.getElementById('pin_error').innerText='* Please Enter Pin Code';
            </script>
        ";
        $valid = 0;
    } else {
        $valid = 1;
    }
    if (empty($blood_group)) {
        echo "
            <script>
                document.getElementById('blood_group_error').innerText='* Please Select Blood Group';
            </script>
        ";
        $valid = 0;
    } else {
        $valid = 1;
    }
    if (empty($mobile)) {
        echo "
            <script>
                document.getElementById('mobile_error').innerText='* Please Enter Mobile Number';
            </script>
        ";
        $valid = 0;
    } else {
        $valid = 1;
    }
    if (empty($hobbies) or count($hobbies) < 2) {
        echo "
            <script>
                document.getElementById('hobbies_error').innerText='* Please Select Any 2 Hobbies';
            </script>
        ";
        $valid = 0;
    } else {
        $valid = 1;
    }
    if (empty($year_from)) {
        echo "
            <script>
                document.getElementById('year_from_error').innerText='* Please Enter Year From';
            </script>
        ";
        $valid = 0;
    } else {
        $valid = 1;
    }
    if (empty($year_to)) {
        echo "
            <script>
                document.getElementById('year_to_error').innerText='* Please Enter Year To';
            </script>
        ";
        $valid = 0;
    } else {
        $valid = 1;
    }
    if (empty($position)) {
        echo "
            <script>
                document.getElementById('position_error').innerText='* Please Enter Position';
            </script>
        ";
        $valid = 0;
    } else {
        $valid = 1;
    }
    if (empty($company_name)) {
        echo "
            <script>
                document.getElementById('company_name_error').innerText='* Please Enter Company Name';
            </script>
        ";
        $valid = 0;
    } else {
        $valid = 1;
    }
    if (empty($salary)) {
        echo "
            <script>
                document.getElementById('salary_error').innerText='* Please Enter Salary';
            </script>
        ";
        $valid = 0;
    } else {
        $valid = 1;
    }
    if (empty($avatar)) {
        echo "
            <script>
                document.getElementById('avatar_error').innerText='* Please Upload Profile Picture';
            </script>
        ";
        $valid = 0;
    } else {
        $valid = 1;
    }
    // if ($valid == 1) {
    //     include '../App/function.php';
    //     insert($name, $e_id, $address, $gender, $email, $day, $month, $year, $hsc);
    // }
}

?>