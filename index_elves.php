<!DOCTYPE html>
<html lang="en">

<?php require ('inc/config.php') ?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet">
  <script src="https://kit.fontawesome.com/d4cbcb96c8.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/main.css">
  <link rel="icon" type="image/x-icon" href="./assets/img/favicon.ico">
  <script src="./js/main.js" defer></script>
  <title>Document</title>
</head>

<body>
  <main>

    <section>
      <header id="headerWrapper2" class="p-2 bg-dark text-bg-light">
        <div class="container">
          <div class="row m-3">

            <div class="col m-1 p-2 title-font-header contenthead2">
              <h1 class="glow" style="text-align:left">Stranger Tongues&#8482;</h1>
              <p id="titlelead2" style="text-align:left;">Stranger Tongues&#8482; - strange language-classes for special
                people!<span style="float:right; font-size:x-large;">Welcome yalls!</span></p>
            </div>
          </div>

          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

            <ul class="nav col-12 col-lg-auto me-lg-auto justify-content-center mb-md-auto">
              <li><a href="index_elves.php" class="nav-link px-2 text-white">Homepage</a></li>
              <li><a href="index.php" class="nav-link px-2 text-white">Klingon</a></li>
              <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
            </ul>

            <div class="text-end">
              <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <a href="index.php" type="button" class="btn btn-warning">Klingon</a>
                <a href="index_elves.php" type="button" class="btn btn-success">Elvspeak</a>
              </div>
            </div>
          </div>
        </div>
      </header>
    </section>

    <section>
      <div class="container content2">
        <div class="row">
          <div class="col-sm">

            <img class="rounded-circle img-fluid" src="./assets/img/Elrond_cut.png" alt="test" id="klingon_02">

            <div class="text-center">
              <div class="container">
                <div class="row">
                  <div class="col-sm m-5 p-5"></div>
                </div>
              </div>
              <h1 class="display-3 title-font-content">Learn "Elvspeak" Now!</h1>
              <p class="lead" style="text-align: left;  padding-left: 2%;">
                Stranger Tongues&#8482; is the one and only language institute,
                where we teach the fine tunings and techniques to have in evry elvish palaver the upper hand. Fill out
                the following form to register for new classes next semester.
              </p>

            </div>
          </div>
          <div class="filler"></div>

          <div class="col-sm px-5" style="height:max-content;">
            <p class="title-font-lead">Fill out the following form</p>
            <!-- <form id="formValidation" onsubmit="return validateAll();" action="./results.php"  method="get"> -->
            <form action="confirmation.php" class="" method="post">

              <!-- <div id="errormessage"></div> -->

              <label for="valMail" class="form-label" style="margin-top: 20px;">E-mail adress:</label>
              <p id="message-1" class="messageError"></p>
              <div class="mb-4 input-group">
                <span class="input-group-text">
                  <i class="bi bi-envelope-at-fill"></i>
                </span>
                <input type="text" class="form-control text-white bg-dark" name="valMail" id="valMail" value=""
                  placeholder="e.g me@expl.com" required>
                <div class="input-group-text" style="font-size: 80%"><label for="newsletter">Sub to Newsletter?</label>
                  <input class="form-check-input mt-0 mx-1" name="newsletter" id="newsletter" type="checkbox"
                    value="yes" aria-label="Checkbox for following text input">
                </div>
              </div>

              <label for="valGender" class="form-label">Gender</label>
              <p id="message-2" class="messageError"></p>
              <div class="mb-4 input-group">
                <span class="input-group-text">
                  <i class="fa-solid fa-mars-and-venus-burst"></i>
                </span>
                <select class="form-select text-white bg-dark" id="valGender" name="valGender" required>
                  <option value="" selected>-- Please choose an option --</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="binary">Binary</option>
                </select>
              </div>

              <label for="fName" class="form-label">First Name</label>
              <p id="message-3" class="messageError"></p>
              <div class="mb-4 input-group">
                <span class="input-group-text">
                  <i class="fa-solid fa-circle-user"></i>
                </span>
                <input type="text" class="form-control text-white bg-dark" id="fName" name="fName" value=""
                  placeholder="e.g Gaudenz" required>
              </div>

              <label for="lName" class="form-label">Last Name</label>
              <p id="message-4" class="messageError"></p>
              <div class="mb-4 input-group">
                <span class="input-group-text">
                  <i class="fa-solid fa-circle-user"></i>
                </span>
                <input type="text" class="form-control text-white bg-dark" id="lName" name="lName" value=""
                  placeholder="e.g Raiber" required>
              </div>

              <label for="valAge" class="form-label">Your Age</label>
              <p id="message-5" class="messageError"></p>
              <div class="mb-4 input-group">
                <span class="input-group-text">
                  <i class="fa-solid fa-circle-user"></i>
                </span>
                <input type="number" class="form-control text-white bg-dark" id="valAge" name="valAge" value="" min="0"
                  max="150" placeholder="18 to 99" required>
              </div>
          </div>

          <div class="col-sm mt-5 mb-4 px-5">
            <label for="telNumber" class="form-label" style="margin-top: 25px;">Enter your phone number:</label>
            <p id="message-6" class="messageError"></p>
            <div class="mb-4 input-group">
              <span class="input-group-text">
                <i class="fa-solid fa-phone-volume"></i>
              </span>
              <input type="tel" class="form-control text-white bg-dark" id="telNumber" name="telNumber"
                placeholder="e.g 41-78-123-45-67" required>
            </div>

            <!-- <p>pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{2}" format="+41781234567"</p> -->

            <label for="classLevel" class="form-label">Class Level</label>
            <p id="message-7" class="messageError"></p>
            <div class="mb-4 input-group">
              <span class="input-group-text">
                <i class="fa-solid fa-graduation-cap"></i>
              </span>
              <select class="form-select text-white bg-dark" name="classLevel" id="classLevel" required>
                <option value="" selected>-- Please choose a level --</option>
                <option value="A0">Beginner A0</option>
                <option value="B1">Advanced Degree B1</option>
                <option value="C3">Master Degree C3</option>
              </select>
            </div>


            <div class="form-floating mb-4 mt-5">
              <textarea name="myComment" id="myComment" class="form-control text-white bg-dark"
                style="height: 140px"></textarea>
              <label for="query" input type="text" style="color:white; margin-top:0.1%"><i
                  class="fa-solid fa-message"></i> additional commentary...</label>
            </div>
            <!-- hidden input -->
            <input type="hidden" id="myHidden" name="custId" value="Elvspeak">


            <!-- <div class="mb-4 text-center">
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div> -->

            <div class="mb-4 text-center">
              <input type="submit" class="btn btn-success" value="Submit">
              <!-- <button type="submit" class="btn btn-secondary" value="register">submit</button> -->
            </div>
            </form>

            <!-- <div class="mb-4 text-center">
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div> -->

            <div>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>DISCLAIMER</strong> Follow this link for cookie policy
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            </div>
            <div><a href="#" class="nav-link px-2 text-white text-end">back to top</a></div>
          </div>
        </div>


      </div>
      </div>
    </section>

    <section id="footer2">
      <footer>
        <div class="container-fluid my-2 py-2">
          <ul class="nav col-12 col-lg-auto me-lg-auto justify-content-center mb-md-auto">
            <li><a href="index_test.php" class="nav-link px-2 text-white">Homepage</a></li>
            <li><a href="index.php" class="nav-link px-2 text-white">Klingon</a></li>
            <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
          </ul>
        </div>
      </footer>
    </section>

  </main>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

</body>

</html>