<html>
<header>
<title>SuperAdmin Access</title>
<link rel="stylesheet" href="css/style.css">
<body>
<h5 class="card-title text-center">Register Staff Baru</h5>
                            <form class="form-signin" action="register_user.php" method="post">

                                <div class="form-label-group">
                                    <input type="text" name="name" id="inputName" class="form-control" placeholder="Input Nama Staff" required autofocus>
                                    <label for="inputUname">Nama Staff</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Input Email Staff" required autofocus>
                                    <label for="inputEmail">Email Staff</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="tel" name="phone" id="inputEmail" class="form-control" placeholder="Input Nomor Telepon" required autofocus>
                                    <label for="inputPhone">Staff Phone</label>
                                </div>
                                <div class="form-label-group">
                                <div class="name">
                                <div class="value">
                                    <select name="role" id="role">
                                        <option value="waiter">Waiter</option>
                                        <option value="akuntan">Akuntan</option>
                                        <option value="kasir">Kasir</option>
                                    </select>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Foto Staff</div>
                                    <div class="value">
                                        <div class="input-group js-input-file">    
                                            <input type="file" name="fotostaff" id="#">
                                        </div>
                                        <div class="label--desc">Silakan Masukkan Gambar untuk staff</div>
                                    </div>
                                </div>
                                <div class="form-label-group">
                                    <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Password" required>
                                    <label for="inputPassword">Password</label>
                                </div>
                                <input class="btn btn-lg btn-primary btn-block text-uppercase" name="submit" type="submit" value="Register">
                                <hr class="my-4">
                                
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</body>
</html>
