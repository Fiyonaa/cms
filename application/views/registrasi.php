<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Register </title>
    <link rel="icon" type="image/x-icon" href="<?= site_url('assets')?>/assets/img/favicon/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?= site_url('assets')?>/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="<?= site_url('assets')?>/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= site_url('assets')?>/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= site_url('assets')?>/assets/css/demo.css" />
    <link rel="stylesheet" href="<?= site_url('assets')?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?= site_url('assets')?>/assets/vendor/css/pages/page-auth.css" />
    <script src="<?= site_url('assets')?>/assets/vendor/js/helpers.js"></script>
    <script src="<?= site_url('assets')?>/assets/js/config.js"></script>
</head>

<body>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <div class="card">
                    <div class="card-body">
                       
                        <h4 class="mb-2">Silahkan Registrasi !! 😉👌</h4>

                        <!-- Flash messages -->
                        <?php if ($this->session->flashdata('error')): ?>
                            <div class="alert alert-danger">
                                <?= $this->session->flashdata('error'); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($this->session->flashdata('success')): ?>
                            <div class="alert alert-success">
                                <?= $this->session->flashdata('success'); ?>
                            </div>
                        <?php endif; ?>

                        <form id="formAuthentication" class="mb-3" action="<?= site_url('auth/register_process'); ?>" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required autofocus />
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password"/>
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter your name" required />
                            </div>

                            <div class="mb-3">
                                <label for="level" class="form-label">Level</label>
                                <select class="form-control" id="level" name="level" required>
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>

                            <button class="btn btn-primary d-grid w-100">Sign up</button>
                        </form>

                        <p class="text-center">
                            <span>Already have an account?</span>
                            <a href="<?= site_url('auth/login'); ?>">
                                <span>Sign in instead</span>
                            </a>
                        </p>
                        <br>
                        <div id="ngilang">
                            <?= $this->session->flashdata('alert') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= site_url('assets')?>/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= site_url('assets')?>/assets/vendor/js/bootstrap.js"></script>
    <script src="<?= site_url('assets')?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= site_url('assets')?>/assets/vendor/js/menu.js"></script>
</body>

</html>
