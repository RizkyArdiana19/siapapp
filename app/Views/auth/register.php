<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .landing-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        .landing-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 350px;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
        }

        .landing-box img {
            width: 120px;
            height: auto;
            margin: 0 auto 10px auto;
        }

        .landing-box h2 {
            margin-top: 0;
            font-size: 22px;
            color: #333;
            text-align: left;
            margin-left: 10px;
        }

        .landing-box p {
            font-size: 14px;
            color: #666;
            text-align: left;
            margin-left: 10px;
        }

        .form-control {
            border: none;
            border-bottom: 2px solid #ccc;
            border-radius: 0;
            padding-left: 0;
            padding-right: 0;
            margin-bottom: 15px;
            box-shadow: none;
        }

        .form-control:focus {
            border-bottom: 2px solid #CC0000;
            box-shadow: none;
        }

        .landing-box .btn {
            width: 100%;
            margin-bottom: 10px;
            border-radius: 50px;
            padding: 10px 0;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .landing-box .btn-danger {
            background-color: #CC0000;
            border: none;
        }

        .landing-box .btn-danger:hover {
            background-color: #CC0000;
        }

        .landing-box .btn-white {
            background-color: #fff;
            color: #e74c3c;
            border: 2px solid #e74c3c;
        }

        .landing-box .btn-white:hover {
            background-color: #f0f0f0;
            color: #e74c3c;
            border: 2px solid #e74c3c;
        }

        .back-button {
            position: absolute;
            top: 10px;
            left: 10px;
            color: #CC0000;
            font-weight: bold;
            text-decoration: none;
            background-color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .landing-box .info-text {
            font-size: 16px;
            color: #333;
        }

        .landing-box .info-text p {
            margin: 10px 0;
            text-align: center;
        }

        .password-toggle {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #888;
        }

        .password-field-container {
            position: relative;
        }

        .alert {
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class="landing-container">
        <div class="landing-box">
            <a href="/" class="back-button">&lt; Back</a>
            <img src="/img/logo1.png" alt="Gambar">
            <h2>Sign Up</h2>
            <p>Please enter your personal data</p>

            <?= view('Myth\Auth\Views\_message_block') ?>

            <form action="/register" method="post" class="users">
                <?= csrf_field() ?>

                <div class="form-group">
                    <input type="number" class="form-control" id="phone_number" name="phone_number" value="<?= set_value('phone_number') ?>" placeholder="Phone Number"/>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" id="username" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" id="email" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                </div>

                <div class="password-field-container">
                    <input type="password" id="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                    <span toggle="#password" class="password-toggle bi bi-eye-slash-fill"></span>
                </div>

                <div class="password-field-container">
                    <input type="password" id="confirm-password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                    <span toggle="#confirm-password" class="password-toggle bi bi-eye-slash-fill"></span>
                </div>

                <button type="submit" class="btn btn-danger"><?=lang('Auth.register')?></button>
            </form>

            <div class="info-text">
                <p><?= lang('Auth.alreadyRegistered') ?> <a href="<?= url_to('login') ?>"><?= lang('Auth.signIn') ?></a></p>
                <p>- Sistem Informasi Aset Perusahaan -</p>
                <p>Holding Industri Pertahanan C ver 1.1123</p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('.password-toggle').forEach(function(toggle) {
            toggle.addEventListener('click', function() {
                const inputField = document.querySelector(this.getAttribute('toggle'));
                if (inputField.getAttribute('type') === 'password') {
                    inputField.setAttribute('type', 'text');
                    this.classList.remove('bi-eye-slash-fill');
                    this.classList.add('bi-eye-fill');
                } else {
                    inputField.setAttribute('type', 'password');
                    this.classList.remove('bi-eye-fill');
                    this.classList.add('bi-eye-slash-fill');
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('error')) {
                const errorMessage = urlParams.get('error');
                alert('Error: ' + decodeURIComponent(errorMessage));
            }
        });
    </script>
</body>

</html>
