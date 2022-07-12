<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aplikasi pertama - sign in</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
            <h4><a class="navbar-brand" href="#">aplikasi pertama</a></h4>
            <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expandad="false" aria-label="Toggle navigation" >
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <td></td>
    
    <div class="clearfix">&nbsp;</div>
    <div class="container">

        <div class="d-flex justify-content-center">
            <div class="card w-50">
                <div class="card-header text-white bg-info">
                    <h4>
                       <i class="fa-solid fa-lock text-warning"></i> login sistem
                    </h4>
                </div>
                <div class="card-body">
                    <form action="ceklogin" method="POST">
                        <div class="mb-3">
                            <label for="usernamelog">username</label>
                            <input type="text" class="form-control" style="height: 50px" id="username" name="username" placeholder="masukkan username anda">
                        </div>
                        <div class="mb-3">
                            <label for="passwordlog">username</label>
                            <input type="password" class="form-control" style="height: 50px" id="password" name="password" placeholder="masukkan password anda">

                        </div>
                        <button type="submit" class="btn btn-info text-white float-end"> <i class="fa-solidfa-right-to-brackettext-success"></i> login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net//npm/@poppersjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net//npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/4af1d56044.js" crossorigin="anonymous"></script>
</body>

</html>
