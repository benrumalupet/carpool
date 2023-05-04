<!DOCTYPE html>
<html>

<head>
  <title>Car Registration Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h1 class="mt-5 mb-3">Car Information Form</h1>
    <form action="car-insert.php" method="post">
      <div class="form-group">
        <label for="carName">Car Name:</label>
        <input type="text" class="form-control" id="carName" name="carName">
      </div>

      <div class="form-group">
        <label for="brand">Brand:</label>
        <input type="text" class="form-control" id="brand" name="brand">
      </div>

      <div class="form-group">
        <label for="plateNum">Plate Number:</label>
        <input type="text" class="form-control" id="plateNum" name="plateNum">
      </div>

      <div class="form-group">
        <label for="carType">Car Type:</label>
        <input type="text" class="form-control" id="carType" name="carType">
      </div>

      <div class="form-group">
        <label for="year">Year:</label>
        <input type="text" class="form-control" id="year" name="year">
      </div>

      <div class="form-group">
        <label for="color">Color:</label>
        <input type="text" class="form-control" id="color" name="color">
      </div>

      <div class="form-group">
        <label for="chassisNum">Chassis Number:</label>
        <input type="text" class="form-control" id="chassisNum" name="chassisNum">
      </div>

      <div class="form-group">
        <label for="cr_file">OR/CR File:</label>
        <input type="file" class="form-control-file" id="cr_file" name="cr_file" accept="image/*" maxlength="26214400"
          required>
      </div>


      <div class="form-group">
        <label for="seatType">Seat Type:</label>
        <input type="text" class="form-control" id="seatType" name="seatType">
      </div>

      <div class="form-group">
        <label for="seatRate">Seat Rate:</label>
        <input type="text" class="form-control" id="seatRate" name="seatRate">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
      <!-- Add a Clear Fields button -->
      <button type="button" class="btn btn-secondary" onclick="clearFields()"
        style="background-color: red; color: white; padding: 7px 20px; border: none; border-radius: 5px;">Clear Fields
      </button>
      <script>
        function clearFields() {
          document.getElementById("carName").value = "";
          document.getElementById("brand").value = "";
          document.getElementById("plateNum").value = "";
          document.getElementById("carType").value = "";
          document.getElementById("year").value = "";
          document.getElementById("color").value = "";
          document.getElementById("chassisNum").value = "";
          document.getElementById("cr_file").value = "";
          document.getElementById("seatType").value = "";
          document.getElementById("seatRate").value = "";
        }
      </script>
      <!-- Add a Back button -->
      <a href="driver.php" class="btn btn-secondary"
        style="background-color: blue; color: white; padding: 6px 20px; border: none; border-radius: 5px;">Back</a>
    </form>
  </div>
</body>

</html>