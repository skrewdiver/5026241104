<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Tooltip</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .container-fluid {
            padding: 0;
            margin: 0;
            height: 100vh;
        }

        .left-panel {
            background-color: #02203e;
            padding: 20px;
            color: white;
        }

        .right-panel {
            background-color: #e9ecef;
            padding: 40px;
        }

        .welcome {
            font-size: 45px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container-fluid row">
        <div class="col left-panel d-flex align-items-center">
            <div>
                <h1 class="welcome">Welcome to Our Website</h1>
                <p>Log in to your account to access exclusive features.</p>
            </div>
        </div>
        <div class="col right-panel d-flex justify-content-center align-items-center">
            <div class="login-box border border-dark rounded p-4 w-100">
                <h2 class="mb-4">Login</h2>
                <div class="row mb-3">
                    <div class="col">
                        <label>Email</label>
                        <input type="email" class="w-100 p-2 border rounded" placeholder="Enter email"
                            data-toggle="tooltip" data-placement="bottom" title="Masukkan email yang valid">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label>Password</label>
                        <input type="password" class="w-100 p-2 border rounded" data-toggle="tooltip"
                            data-placement="bottom" title="Minimal 8 karakter" placeholder="Enter password">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <button class="btn btn-success btn-block" data-toggle="tooltip" data-placement="bottom"
                            title="Tekan untuk login">
                            Login
                        </button>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>

</html>