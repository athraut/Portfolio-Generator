<?php

include "config.php";

if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $headline = $_POST['headline'];
  $aboutdesc = $_POST['aboutdesc'];
  $expyear=$_POST['expyear'];
  $clientno=$_POST['clientno'];
  $projectno=$_POST['projectno'];
  $linkedin = $_POST['linkedin'];
  $github = $_POST['github'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $skill = json_encode($_POST['skill']);
  $skillrange = json_encode($_POST['skillrange']);
  $service = json_encode($_POST['service']);
  $servicedesc = json_encode($_POST['servicedesc']);
  $query = $conn->prepare("INSERT INTO users(name,headline,aboutdesc,expyear,clientno,projectno,skill,skillrange,service,servicedesc,address,phone,email,linkedin,github) VALUES('$name','$headline','$aboutdesc','$expyear','$clientno','$projectno',?,?,?,?,'$address','$phone','$email','$linkedin','$github')");
  $query->bind_param("ssss", $skill, $skillrange, $service, $servicedesc);
  $query->execute();
  $query->close();
}

$conn->close();

?>
<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <form class="form-style-9" method="post" action="form.php" style="margin-left:30%; margin-right:30%; margin-top:5%;">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" name="name" class="form-control">

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Headline</label>
      <input type="text" name="headline" class="form-control">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">About Description</label>
      <textarea type="text" name="aboutdesc" class="form-control"></textarea>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Total Experience Year</label>
      <input type="number" name="expyear" class="form-control">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Clients No.</label>
      <input type="number" name="clientno" class="form-control">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Projects Completed</label>
      <input type="number" name="projectno" class="form-control">
    </div>
    <div id="skill">
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Skill</label>
        <input type="text" name="skill[]" class="form-control field-style">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Range</label>
        <input type="range" name="skillrange[]" class="form-control field-style">
      </div>
    </div>
    <input type="button" id="addskill" value="Add More">
    <script>
      $(document).ready(function() {
        $("#addskill").click(function() {
          $("#skill").append('<label for="exampleInputPassword1" class="form-label">Add New Skill</label> ');
          $("#skill").append('<input type="text" name="skill[]" class="form-control field-style"><br> ');
          $("#skill").append('<input type="range"  name="skillrange[]" class="form-control field-style">  ');
        });
      });
    </script>
    <div id="container">
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Service 1 </label>
        <input type="text" name="service[]" class="form-control field-style">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Service 1 Description</label>
        <textarea type="text" name="servicedesc[]" class="form-control field-style"></textarea>
      </div>
    </div>
    <input type="button" id="addservice" value="Add More">
    <script>
      $(document).ready(function() {
        $("#addservice").click(function() {
          $("#container").append('<label for="exampleInputPassword1" class="form-label">Add New Service</label>  ');
          $("#container").append(' <input type="text" placeholder="Add New Service" name="service[]" class="form-control field-style"><br>');
          $("#container").append(' <textarea type="text" placeholder="Add New Service Description" name="servicedesc[]" class="form-control field-style"></textarea> ');
        });
      });
    </script>


    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Address</label>
      <input type="text" name="address" class="form-control">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Contact No.</label>
      <input type="number" name="phone" class="form-control">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">E-mail Id</label>
      <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Linkedin Id</label>
      <input type="text" name="linkedin" class="form-control">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">GitHub Id</label>
      <input type="text" name="github" class="form-control">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>