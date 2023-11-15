

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umroh.in Meet</title>
    
    <link rel="icon" type="image/x-icon" href="./umrohin_fav.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .container {
            height: 100vh !important;
        }

        body {
            background-color: rgb(20, 20, 20);
        }

        #welcome {
            width: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        .image-primary {
            text-align: center;
        }

        .image-primary img {
            width: 400px;
        }

        #form {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container d-flex h-100 justify-content-center">
        <div class="align-self-center">
            <div id="welcome">
                <div>
                    <figure class="image-primary mb-5">
                        <img src="./umrohin_image.png" alt="">
                    </figure>

                    <form action="/meet" id="form" method="get">
                        <div class="mb-3">
                            <input type="text" name="display_name" class="form-control" value="" placeholder="Display Name" required>
                            <div class="form-text"></div>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Join Meeting</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

   

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>