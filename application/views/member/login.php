<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login Page</title>
        <link href="<?php echo base_url(); ?>assets/login/css/styles.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <b><h3 class="text-center my-4">Halaman Login</h3></b>
                                    </div>
                                    <div class="card-body">
                                        <form action="<?php echo base_url("member/login/aksi_login")?>" method="POST">
                                        <?php
                                            if($this->session->flashdata("notif")){
                                            ?>
                                                <span class="badge badge-danger"><?php echo $this->session->flashdata("notif") ?></span>
                                        <?php
                                            }
                                        ?>
                                            <div class="form-group">
                                                <label class="small mb-2" for="inputUsername">Username</label>
                                                <input class="form-control py-4" name="username" id="inputUsername" type="username" placeholder="Masukan Username" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-2" for="inputPassword">Password</label>
                                                <input class="form-control py-4" name="password" id="inputPassword" type="password" placeholder="Masukan Password" />
                                            </div>
                                            <div class="form-group">
                                                <center><button type="submit" class="btn btn-danger">Login</button></center><br>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>
    </body>
</html>
