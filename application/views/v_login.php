<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
</head>
<body>
    <h1>Form Login</h1>
    <form action="login/aksi_login" method="post">     
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Login"></td>
                <a href="<?php echo base_url('register/tambah');?>"class="btn btn-primary"><i class="fa fa-plus">Register</i></a>
            </tr>
        </table>
    </form>
</body>
</html>