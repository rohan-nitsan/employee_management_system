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
                            <form method="POST" action="" enctype="multipart/form-data">

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
                                            <input type="text" class="form-control form-control-lg" name="street" placeholder="Street" />
                                            <p class="error" id="street_error"></p>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-outline datepicker w-100">
                                            <input type="text" class="form-control form-control-lg" name="road" placeholder="Road" />
                                            <p class="error" id="road_error"></p>

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
                                            <input type="number" class="form-control form-control-lg" name="pin" placeholder="Pin Code" />
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
                                            <input type="number" name="year_from" class="form-control form-control-lg" placeholder="Year From" />
                                            <p class="error" id="year_from_error"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-outline">
                                            <input type="number" name="year_to" class="form-control form-control-lg" placeholder="Year To" />
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
                                            <input type="file" class="form-control" name="avatar" id="avatar">
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

include '../App/function.php';
if (isset($_POST['register'])) {
    extract($_POST);
    $valid = 1;
    # Avatar

    $target_dir = "../Upload/";
    $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $avatar = basename($_FILES["avatar"]["name"]);

    # Validations
    if (empty($name)) {
        validation_error('name_error', '* Please Enter Name');
        $valid = 0;
    } else if (!preg_match('/^([^0-9]*)$/', $name)) {
        validation_error('name_error', '* Only Contain Letters');
        $valid = 0;
    }
    if (empty($e_id)) {
        validation_error('e_id_error', '* Please Enter Employee ID');
        $valid = 0;
    }
    if (empty($email)) {
        validation_error('email_error', '* Please Enter Email');
        $valid = 0;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        validation_error('email_error', '* Please Enter Valid Email');
        $valid = 0;
    }
    if (empty($gender)) {
        validation_error('gender_error', '* Please Select Gender');
        $valid = 0;
    }
    if (empty($building)) {
        validation_error('building_error', '* Please Enter Building');
        $valid = 0;
    }
    if (empty($street)) {
        validation_error('street_error', '* Please Enter Street');
        $valid = 0;
    }
    if (empty($road)) {
        validation_error('road_error', '* Please Enter Road');
        $valid = 0;
    }

    if (empty($city)) {
        validation_error('city_error', '* Please Enter City');
        $valid = 0;
    }
    if (empty($state)) {
        validation_error('state_error', '* Please Enter State');
        $valid = 0;
    }
    if (empty($pin)) {
        validation_error('pin_error', '* Please Enter Pin Code');
        $valid = 0;
    } else if (strlen($pin) < 6 or strlen($pin) > 6) {
        validation_error('pin_error', '* Invalid Pin');
        $valid = 0;
    }
    if (empty($blood_group)) {
        validation_error('blood_group_error', '* Please Select Blood Group');
        $valid = 0;
    }
    if (empty($mobile)) {
        validation_error('mobile_error', '* Please Enter Mobile Number');
        $valid = 0;
    } else if (!preg_match('/^[0-9]{10}+$/', $mobile)) {
        validation_error('mobile_error', '* Please Enter Valid Mobile Number');
        $valid = 0;
    }
    if (empty($hobbies) or count($hobbies) < 2) {
        validation_error('hobbies_error', '* Please Select Any 2 Hobbies');
        $valid = 0;
    }
    if (empty($year_from)) {
        validation_error('year_from_error', '* Please Enter Year From');
        $valid = 0;
    } else if ((int)$year_from > date("Y") or strlen($year_from) < 4) {
        validation_error('year_from_error', '* Invalid Year');
        $valid = 0;
    }
    if (empty($year_to)) {
        validation_error('year_to_error', '* Please Enter Year To');
        $valid = 0;
    } else if ((int)$year_to > date("Y") or strlen($year_to) < 4) {
        validation_error('year_to_error', '* Invalid Year');
        $valid = 0;
    }
    if (empty($position)) {
        validation_error('position_error', '* Please Enter Position');
        $valid = 0;
    } else if (!preg_match('/^([^0-9]*)$/', $position)) {
        validation_error('position_error', '* Only Contain Letters');
        $valid = 0;
    }
    if (empty($company)) {
        validation_error('company_name_error', '* Please Enter Company Name');
        $valid = 0;
    } else if (!preg_match('/^([^0-9]*)$/', $company)) {
        validation_error('company_name_error', '* Only Contain Letters');
        $valid = 0;
    }
    if (empty($salary)) {
        validation_error('salary_error', '* Please Enter Salary');
        $valid = 0;
    }

    if ($avatar) {
        $check = getimagesize($_FILES["avatar"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            validation_error('avatar_error', '* File is Not Image');
            $valid = 0;
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            validation_error('avatar_error', '* File already exists. Please upload file with different name');
            $valid = 0;
            $uploadOk = 0;
        }
        if ($_FILES["avatar"]["size"] > 500000) {
            validation_error('avatar_error', '* File is too large');
            $valid = 0;
            $uploadOk = 0;
        }
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            validation_error('avatar_error', '* Sorry, only JPG, JPEG, PNG & GIF files are allowed');
            $valid = 0;
            echo ".";
            $uploadOk = 0;
        }
        if ($uploadOk == 1 and $valid == 1) {
            move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);
        }
    } else {
        validation_error('avatar_error', '* Please Upload Profile Picture');

        $valid = 0;
    }
    if ($valid == 1) {
        insert($name, $e_id, $email, $gender, $building, $street, $road, $city, $state, $pin, $blood_group, $mobile, $hobbies, $year_from, $year_to, $position, $company, $salary, $avatar);
    }
}

?>