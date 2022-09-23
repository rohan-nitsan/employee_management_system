<?php
function insert($name, $e_id, $email, $password, $gender, $building, $street, $road,  $city, $state, $pin, $blood_group, $mobile, $hobbies, $year_from, $year_to, $position, $company, $salary, $avatar, $is_admin)
{
    include '../Config/connection.php';

    $address = $building . ", " . $street . ", " . $road . ", " . $city . ", " . $state . " " . "($pin)";
    $hobbie = "";
    foreach ($hobbies as $hob) {
        $hobbie .= $hob . ",";
    }
    $pwd = md5($password);
    $cmd = "
        INSERT INTO employee 
        (name,employee_id,email,password,gender,address,blood_group,mobile_no,hobbies,year_from,year_to,position,company,salary,avatar,is_admin) 
        VALUES 
        ('$name','$e_id','$email','$pwd','$gender','$address','$blood_group','$mobile','$hobbie','$year_from','$year_to','$position','$company','$salary','$avatar','$is_admin')
        ";
    $result = mysqli_query($con, $cmd) or die(mysqli_error($con));
    if ($result) {
        echo "<script>alert('Register Successful');</script>";
        echo "<script>window.location.href='../index.php';</script>";
    }
}

function display()
{
    include 'Config/connection.php';

    $cmd = "SELECT * FROM employee";
    global $result;
    $result  = mysqli_query($con, $cmd) or die(mysqli_error($con));
    echo '<tr>';
    echo '<th>Emp. ID</th>';
    echo '<th>Name</th>';
    echo '<th>Email</th>';
    echo '<th>Gender</th>';
    echo '<th>Blood Group</th>';
    echo '<th>Mobile No.</th>';
    echo '<th colspan="2">Action</th>';
    echo '</tr>';

    while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        echo "<tr>";
        echo "<td>" . $row['employee_id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . ucfirst($row['gender']) . "</td>";
        echo "<td>" . $row['blood_group'] . "</td>";
        echo "<td>" . $row['mobile_no'] . "</td>";
        echo "<td>" . "<a href='Employees/edit.php?id=$id'><button class='btn btn-warning'>Edit</button></a>" . "</td>";
        echo "<td>" . "<a href='Employees/delete.php?id=$id''><button class='btn btn-danger'>Delete</button></a>" . "</td>";
        echo "</tr>";
    }
}

function edit($id)
{
    if ($_SESSION['is_admin'] == 1) {
        include '../Config/connection.php';
    }
    if ($_SESSION['is_admin'] == 0) {
        include 'Config/connection.php';
    }

    $cmd = "SELECT * FROM employee WHERE id=$id";
    $result  = mysqli_query($con, $cmd) or die(mysqli_error($con));
    global $data;
    $data = mysqli_fetch_array($result);
    return $data;
}

function update($id, $name, $e_id, $email, $password, $gender, $address, $blood_group, $mobile, $hobbies, $year_from, $year_to, $position, $company, $salary, $avatar, $is_admin)
{
    if ($_SESSION['is_admin'] == 1) {
        include '../Config/connection.php';
    }
    if ($_SESSION['is_admin'] == 0) {
        include 'Config/connection.php';
    }
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
    $pwd = md5($password);
    $cmd = "UPDATE employee SET name='$name',employee_id='$e_id',email='$email',password='$pwd',gender='$gender',address='$address',blood_group='$blood_group',mobile_no='$mobile',hobbies='$hobbie',year_from='$year_from',year_to='$year_to',position='$position',company='$company',salary='$salary',avatar='$avatar',is_admin='$is_admin' WHERE id='$id'";
    $result = mysqli_query($con, $cmd) or die(mysqli_error($con));
    if ($result) {
        echo "<script>alert('Update Successful');</script>";
        if ($_SESSION['is_admin'] == 1) {
            echo "<script>window.location.href='../index.php?id=$id'</script>";
            return $result;
        }
        if ($_SESSION['is_admin'] == 0) {
            echo "<script>window.location.href='index.php?id=$id'</script>";
            return $result;
        }
    }
}

function delete($id)
{
    include '../Config/connection.php';
    $cmd = "DELETE FROM employee WHERE id=$id";
    $result = mysqli_query($con, $cmd) or die(mysqli_error($con));

    if ($result) {
        echo "<script>alert('Successfully Deleted ')</script>";
        echo "<script>window.location.href='../index.php'</script>";
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
    $pwd = md5($password);
    $cmd = "SELECT * FROM employee WHERE email='$email' and password='$pwd'";
    $result = mysqli_query($con, $cmd) or die(mysqli_error($con));
    return $result;
}
