<!DOCTYPE html>
<html lang="en">

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
    <style>
        body {
            background-size: auto;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <?php
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (empty($_POST["valMail"])) {
        $emailErr = "Email is required, please try again.";
        $good = false;
        $email = $emailErr;
    } else {
        $email = test_input($_POST["valMail"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format, please try again.<br><br> You entered:<font color='black'>$email</font>";
            $good = false;
            $email = $emailErr;
        } else {
            $emailErr = "Thank you for your registration. Your input values are the following:";
            $good = true;
            $email = test_input($_POST['valMail']);
        }
    }

    $valGender = $_POST["valGender"];
    $fName = $_POST["fName"];
    $lName = $_POST["lName"];
    $valAge = $_POST["valAge"];
    $telNumber = $_POST["telNumber"];
    $classLevel = $_POST["classLevel"];
    $myComment = $_POST["myComment"];

    if ($_POST['custId'] == "Klingon") {
        $lang = "Klingonisch";
    } elseif ($_POST['custId'] == "Elvspeak") {
        $lang = "Elfisch";
    } else {
        $lang = "Unbekannt";
    }
    if (isset($_POST['newsletter'])) {
        $newsletter = "";
    } else {
        $newsletter = "nicht";
    }

    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h1 id="app" style="color:rgb(83, 7, 27)"><?php echo $emailErr; ?></h1>
                <?php if ($good == true) { ?>
                    <div id="confirmation-message" class="alert alert-warning" role="alert">
                        <?php
                        echo "<b>Vorname:</b> $fName<br>";
                        echo "<b>Nachname:</b> $lName<br>";
                        echo "<b>Geschlecht:</b> $valGender<br>";
                        echo "<b>Alter:</b> $valAge<br>";
                        echo "<b>Telefon:</b> $telNumber<br>";
                        echo "<b>Email:</b> $email<br><br>";
                        echo "Der Kurs für den du dich entschieden Hast ist <b>\"$lang\"</b>.<br> Dein gewählter Schwirigkeitsgrad: <b>$classLevel</b><br><br>";
                        echo "Du hast dich entschieden das Newsletter $newsletter zu abbonieren.<br><br>";
                        echo "Wir werden dich in Kürze über die Daten des Kurses Informieren.<br><br>";
                        if ($myComment != "") {
                            echo "Kommentar: $myComment";
                        }
                        ?>
                    </div>
                <?php } ?>
            </div>

            <div class="col-sm">
                <h1 id="app" style="color:rgb(83, 7, 27)">We value your input always. For questions or ideas write to me
                    <a href="mailto:sven.bledt@gmail.com" style="font-size:90%;">@svenbledt</a>
                </h1>
                <a name="back" id="back" class="btn btn-warning text-white" href="/index.php" role="button">Back to
                    Klingon homepage!</a>
                <a name="back" id="back" class="btn btn-success" href="/index_elves.php" role="button">Back to Elvspeak
                    homepage!</a>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
</body>

</html>