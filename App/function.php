<?php
function insert($name, $e_id, $email, $gender, $building, $street, $road,  $city, $state, $pin, $blood_group, $mobile, $hobbies, $year_from, $year_to, $position, $company, $salary, $avatar)
{
    include '../Config/connection.php';

    $address = $building . ", " . $street . ", " . $road . ", " . $city . ", " . $state . " " . "($pin)";
    $hobbie = "";
    foreach ($hobbies as $hob) {
        $hobbie .= $hob . ",";
    }
    $cmd = "
        INSERT INTO employee 
        (name,employee_id,email,gender,address,blood_group,mobile_no,hobbies,year_from,year_to,position,company,salary,avatar) 
        VALUES 
        ('$name','$e_id','$email','$gender','$address','$blood_group','$mobile','$hobbie','$year_from','$year_to','$position','$company','$salary','$avatar')
        ";
    $result = mysqli_query($con, $cmd) or die(mysqli_error($con));
    if ($result) {
        echo "<script>alert('Register Successful');</script>";
        echo "<script>window.location.href='display.php';</script>";
    }
}

function display()
{
    include '../Config/connection.php';

    $cmd = "SELECT * FROM employee";
    global $result;
    $result  = mysqli_query($con, $cmd) or die(mysqli_error($con));

    while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        echo "<tr>";
        echo "<td>" . $row['employee_id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . ucfirst($row['gender']) . "</td>";
        echo "<td>" . $row['blood_group'] . "</td>";
        echo "<td>" . $row['mobile_no'] . "</td>";
        echo "<td>" . "<a href='../Employees/edit.php?id=$id'><button class='btn btn-warning'>Edit</button></a>" . "</td>";
        echo "<td>" . "<a href='../Employees/delete.php?id=$id''><button class='btn btn-danger'>Delete</button></a>" . "</td>";
        echo "</tr>";
    }
}


function edit($id)
{
    include '../Config/connection.php';

    $cmd = "SELECT * FROM employee WHERE id=$id";
    $result  = mysqli_query($con, $cmd) or die(mysqli_error($con));
    global $data;
    $data = mysqli_fetch_array($result);
    return $data;
}

function update($id, $name, $e_id, $email, $gender, $address, $blood_group, $mobile, $hobbies, $year_from, $year_to, $position, $company, $salary, $avatar)
{
    include '../Config/connection.php';
    $hobbie = "";

    $img_cmd = "SELECT avatar FROM employee WHERE id='$id'";
    $img_result = mysqli_query($con, $img_cmd) or die(mysqli_error($con));
    $img = mysqli_fetch_array($img_result);

    if (empty($avatar)) {
        $avatar = $img['avatar'];
    }

    foreach ($hobbies as $hob) {
        $hobbie .= $hob . ",";
    }
    $cmd = "UPDATE employee SET name='$name',employee_id='$e_id',email='$email',gender='$gender',address='$address',blood_group='$blood_group',mobile_no='$mobile',hobbies='$hobbie',year_from='$year_from',year_to='$year_to',position='$position',company='$company',salary='$salary',avatar='$avatar' WHERE id='$id'";
    $result = mysqli_query($con, $cmd) or die(mysqli_error($con));
    if ($result) {
        echo "<script>alert('Update Successful');</script>";
        echo "<script>window.location.href='../Employees/display.php'</script>";
    }
}

function delete($id)
{
    include '../Config/connection.php';
    $cmd = "DELETE FROM employee WHERE id=$id";
    $result = mysqli_query($con, $cmd) or die(mysqli_error($con));

    if ($result) {
        echo "<script>alert('Successfully Deleted ')</script>";
        echo "<script>window.location.href='../Employees/display.php'</script>";
    }
}

function validation_error($id, $msg)
{
    echo "
        <script>
            document.getElementById('$id').innerText='$msg';
        </script>
    ";
}

function login($email, $password)
{
    include 'Config/connection.php';
    $cmd = "SELECT * FROM employee WHERE email='$email' and password='$password'";
    $result = mysqli_query($con, $cmd) or die(mysqli_error($con));
    return $result;
    // if($result){
    //     return 1;
    // }else {
    //     return 0;
    // }
}
