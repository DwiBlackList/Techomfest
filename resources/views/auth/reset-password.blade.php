<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="This is a login page template based on Bootstrap 5">
    <title>Reset Password</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="text-center my-5">
                        <img src="{{ asset('img/logo.png') }}" alt="logo" width="150">
                    </div>
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            <h1 class="fs-4 card-title fw-bold mb-4">Reset Password</h1>
                            <form method="POST" class="needs-validation" novalidate="" autocomplete="off" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="E-mail">E-mail</label>
                                    <input id="E-mail" type="E-mail" class="form-control" name="E-mail" :value="old('email', $request->email)" required autofocus>
                                    <div class="invalid-feedback">
                                        E-mail
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="password">New Password</label>
                                    <input id="password" type="password" class="form-control" name="password" value="" required autofocus>
                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="password-confirm">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    <div class="invalid-feedback">
                                        Please confirm your new password
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <div class="form-check">
                                        <input type="checkbox" name="logout_devices" id="logout" class="form-check-input">
                                        <label for="logout" class="form-check-label">Logout all devices</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary ms-auto">
                                        Reset Password
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="text-center mt-5 mb-3 text-white">
                        TechComfest 2023
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/validation.js') }}></script>
</body>
</html>