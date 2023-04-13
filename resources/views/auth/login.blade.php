<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- style font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Admin Main Bola</title>
</head>
<style>
    .text-font-fix {
        font-family: 'Lexend Deca', sans-serif;
    }

    .btn-green-hover {
        background-color: #62B6B7;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 8px 20px;
        margin: 4px 2px;
        transition: 0.3s;
    }

    .btn-green-hover:hover {
        background-color: #CBEDD5;
        color: white;
    }
</style>

<body class="text-font-fix">
    <div class="container">
        <div class="row m-5">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card shadow" style="border: none; border-radius: 12px;">
                    <div class="card-body text-center">
                        <img src="{{ asset('Assets/logo/logo-tanpa-bg.png') }}" class="img-fluid my-3 w-50"
                            alt="">
                        <h4 class="fw-bold my-3">Login Admin</h4>
                        <div class="m-2">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword"
                                    placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                        </div>
                        <div class="m-4">
                            <button type="submit" id="" name=""
                                class="btn-green-hover mt-2">Login</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

</body>
{{-- JQuery --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

</html>
