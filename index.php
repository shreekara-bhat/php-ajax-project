<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>New Project</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="jquery.js"></script>
</head>

<body>
  <div class="container mt-4">
    <div class="col-md-12">
      <!--- start 1st col-12-->
      <div class="card">
        <!--- start 1st card1-->
        <div class="card-header">
          <!--- start 1st card-header-->
          <h4>DropDown with foreign key with SQL</h4>
        </div>
        <!--- end 1st card-header-->

        <div class="card-body">
          <!--  start first card body-->
          <div class="row mb-4">
            <!-- start first row in card body-->

            <div class="col-sm-4">
              <!-- col-sm-4 start-->
              <div class="form-group">
                <!-- start form group-->
                <label for="inputText" class="col-form-label" name="Bldg Wings">Country</label>

                <div>
                  <select class="form-select input-group" name="country" id="country">
                    <option selected disabled value="">Choose...</option>
                    <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'db-one');
                    $query = mysqli_query($conn, "SELECT * FROM country");
                    while ($row = mysqli_fetch_array($query)) {
                      ?>
                      <option value="<?php echo $row['id']; ?>"><?php echo $row['country']; ?> </option>
                      <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
              <!-- end form group-->
            </div>
            <!-- 1st col-sm-4 end-->

            <!-- 2nd col-sm-4 start-->
            <div class="col-sm-4">
              <!-- col-sm-4 start-->
              <div class="form-group">
                <!-- start form group-->
                <label for="inputText" class="col-form-label" name="">STATE</label>

                <div>
                  <select class="form-select" name="state" id="state">
                    <option selected disabled value="">Choose...</option>
                    <option value="" selected>Choose State</option>
                  </select>
                </div>
              </div>
              <!-- end form group-->
            </div>
            <!--2nd col-sm-4 end-->

            <!--3rd col-sm-4 start-->
            <div class="col-sm-4">
              <!-- col-sm-4 start-->
              <div class="form-group">
                <!-- start form group-->
                <label for="inputText" class="col-form-label" name="Bldg Wings">CITY</label>

                <div>
                  <select class="form-select" id="city" name="city">
                    <option selected disabled value="">Choose...</option>
                    <option value="" selected>Choose city</option>
                  </select>
                </div>
              </div>
              <!-- end form group-->
            </div>
            <!--3rd col-sm-4 end-->

          </div>
          <!-- end first row in card body-->
          <div class="row mb-4">

            <div class="col-sm-3">
              <div class="form-group">
                <label for="DOB" class="col-form-label">DOB</label>
                <input type="date" name="birthday" class="form-control" id='birthday' onchange="ageCount()">
              </div>
            </div>

            <div class="col-sm-1">
              <div class="form-group">
                <div class="">
                  <label for="Age" class="col-form-group mb-3">Age</label>
                </div>
                <label class="form-control" id="demo">&nbsp;</label>
              </div>
            </div>

            <div class="col-sm-4">
              <p>1</p>
            </div>


            <div class="col-sm-4">
              <label for="" class="col-form-group">Select</label>
              <select class="form-select" id="city" name="city">
                <option selected disabled value="">Choose...</option>
                <option value="" selected>A</option>
                <option value="" selected>B</option>
                <option value="" selected>C</option>
                <option value="" selected>D</option>
                <option value="" selected>E</option>
                <option value="" selected>F</option>
                <option value="" selected>G</option>
              </select>

            </div>

          </div>

          <div class="row mb-4">
            <table style="width: 100%" class="table table-bordered" id="myTable">
              <thead>
                <tr>
                  <th max-width="10%" scope="col">#</th>
                  <th width="30%" scope="col" contenteditable='true'>First</th>
                  <th width="30%" scope="col">Last</th>
                  <th width="30%" scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td contenteditable='true'>Mark</td>
                  <td contenteditable='true'>Otto</td>
                  <td contenteditable='true'>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td contenteditable='true'>Jacob</td>
                  <td contenteditable='true'>Thornton</td>
                  <td contenteditable='true'>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td contenteditable='true'>Larry</td>
                  <td contenteditable='true'>the Bird</td>
                  <td contenteditable='true'>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>
        <!-- endfirst card body-->
      </div>
      <!--- end 1st card1-->
    </div>
    <!--- end 1st col-12-->
  </div>

</body>


<script>
  function ageCount() {
    var now = new Date();                            //getting current date
    var currentY = now.getFullYear();                //extracting year from the date
    // var currentM = now.getMonth();                   //extracting month from the date

    var dobget = document.getElementById("birthday").value; //getting user input
    var dob = new Date(dobget);                             //formatting input as date
    var prevY = dob.getFullYear();                          //extracting year from input date
    // var prevM = dob.getMonth();                             //extracting month from input date

    var ageY = currentY - prevY;
    // var ageM = Math.abs(currentM - prevM);          //converting any negative value to positive

    document.getElementById('demo').innerHTML = ageY;
  }

  document.getElementById('myTable').addEventListener('dblclick', function (event) {
    if (event.target.tagName === 'TD') {
      event.target.style.backgroundColor = '#90EE90';
    }
  });

  document.getElementById('myTable').addEventListener('click', function (event) {
    if (event.target.tagName === 'TD') {
      event.target.style.backgroundColor = 'blue';
    }
  });



</script>

</html>