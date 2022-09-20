<?php
function insert($fname, $lname, $address, $gender, $email, $day, $month, $year, $hsc)
{
    include '../Config/connection.php';
    $dob = $day . '-' . $month . '-' . $year;

    $cmd = "INSERT INTO employee (fname,lname,address,gender,email,dob,hsc) VALUES ('$fname','$lname','$address','$gender','$email','$dob','$hsc')";
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
        echo "<td>" . $id . "</td>";
        echo "<td>" . $row['fname'] . "</td>";
        echo "<td>" . $row['lname'] . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>" . ucfirst($row['gender']) . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['dob'] . "</td>";
        echo "<td>" . $row['hsc'] . "</td>";
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

function update($id, $fname, $lname, $address, $gender, $email, $day, $month, $year, $hsc)
{
    include '../Config/connection.php';
    $dob = $day . '-' . $month . '-' . $year;

    $cmd = "UPDATE employee SET fname='$fname', lname='$lname',address='$address',gender='$gender',email='$email',dob='$dob',hsc='$hsc' WHERE id='$id'";
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
