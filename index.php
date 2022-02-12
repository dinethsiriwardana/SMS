<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S Server</title>
    <title>Java Script</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">



</head>

<body>



    <div class="container" id="container">
        <!-- <div class="container container-dark" id="container"> -->

        <h1 id="form">Form</h1>
       
        <hr>

        <!-- Add Mobile Data  -->
        <div class="containerform" id="adddata">
            <div class="containerform" id="containerform">
                <h5 id="form">Add Data Form</h5>
                <form id="formadddata" action="sendsms.php">
                    <div class="row">
                        <div class="col">
                            <label> Name</label>
                            <input type="text" name="name" id="name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label> Phone  Number</label>
                            <input type="text" name="number" id="number" placeholder="Enter Number using this format - 9471XXXXXXX">
                        </div>
                    </div>
                    


                    <div class="row">

                        <div class="col" style="padding-top: 20px;">
                            <button type="submit" class="btn btn-primary" onclick=btnclick() id="adddatasubmit">Send Data</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
</body>

</html>