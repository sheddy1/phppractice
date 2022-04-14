<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <button name="create-table">
            Create TAble
        </button>
    </form>

    <?php
        $user = "root";
        $pass = "";
        $db ="dofile";
        $db = new mysqli('localhost',$user,$pass,$db)
        or die("could not connect");


        $create = "
        CREATE TABLE rrr(
            order_zone VARCHAR(30) NOT NULL,
            state VARCHAR(50) NOT NULL,
            ward VARCHAR(50) NOT NULL,
            community VARCHAR(50) NOT NULL,
            sex VARCHAR(50) NOT NULL,
            dob VARCHAR(50) NOT NULL,
            hhh_surname VARCHAR(50) NOT NULL,
            hhh_firstname VARCHAR(50) NOT NULL,
            hhh_othername VARCHAR(50) NOT NULL,
            applicant_surname VARCHAR(50) NOT NULL,
            applicant_firstname VARCHAR(50) NOT NULL,
            applicant_othername VARCHAR(50) NOT NULL,
            contactno VARCHAR(50) NOT NULL,
            hhaddress VARCHAR(50) NOT NULL,
            hhsize VARCHAR(50) NOT NULL,
            num_room VARCHAR(50) NOT NULL,
            agey VARCHAR(50) NOT NULL,
            relationship VARCHAR(50) NOT NULL,
            otherrelationship VARCHAR(50) NOT NULL,
            orphan VARCHAR(50) NOT NULL,
            orphantype VARCHAR(50) NOT NULL,
            validid VARCHAR(50) NOT NULL,
            valididtype VARCHAR(50) NOT NULL,
            othervalididtype VARCHAR(50) NOT NULL,
            idnumber VARCHAR(50) NOT NULL,
            bankaccount VARCHAR(50) NOT NULL,
            bankname VARCHAR(50) NOT NULL,
            accountname VARCHAR(50) NOT NULL,
            accountno VARCHAR(50) NOT NULL,
            bvn VARCHAR(50) NOT NULL,
            marritalstatus VARCHAR(50) NOT NULL,
            b2labour VARCHAR(50) NOT NULL,
            b3labour VARCHAR(50) NOT NULL,
            b4labour VARCHAR(50) NOT NULL,
            otherb5labour VARCHAR(50) NOT NULL,
            b6labour VARCHAR(50) NOT NULL,
            educationalqualification VARCHAR(50) NOT NULL,
            currentlyenrolledinschl VARCHAR(50) NOT NULL,
            disability VARCHAR(50) NOT NULL,
            typeofdisability VARCHAR(50) NOT NULL,
            othertypeofdisability VARCHAR(50) NOT NULL,
            chronicallyill VARCHAR(50) NOT NULL,
            chronicallyilltype VARCHAR(50) NOT NULL,
            bed VARCHAR(50) NOT NULL,
            landforhousing VARCHAR(50) NOT NULL,
            mobilephone VARCHAR(50) NOT NULL,
            television VARCHAR(50) NOT NULL,
            kerosenestove VARCHAR(50) NOT NULL,
            bed_num VARCHAR(50) NOT NULL,
            landforhousing_num VARCHAR(50) NOT NULL,
            mobilephone_num VARCHAR(50) NOT NULL,
            television_num VARCHAR(50) NOT NULL,
            kerosenestove_num VARCHAR(50) NOT NULL,
            cook VARCHAR(50) NOT NULL,
            othercook_dwelling VARCHAR(50) NOT NULL,
            floor VARCHAR(50) NOT NULL,
            otherfloor_dwelling VARCHAR(50) NOT NULL,
            roof VARCHAR(50) NOT NULL,
            otherroof_dwelling VARCHAR(50) NOT NULL,
            latitude VARCHAR(50) NOT NULL,
            longitude VARCHAR(50) NOT NULL,
            accuracy VARCHAR(50) NOT NULL,
            interviewdate VARCHAR(50) NOT NULL,
            enumeratorname VARCHAR(50) NOT NULL,
            enumeratorcode VARCHAR(50) NOT NULL
        )
        ";

        mysqli_query($db,$create);
    ?>
</body>
</html>