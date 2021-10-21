<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Menu</title>
</head>
<body>
    <table>
        <tr>
            <td>Nama sistem</td>
            <td>
                <a href="utama.php?menu=home">Home</a>
                ::
                <a href="utama.php?menu=product">product</a>
                ::
                <a href="utama.php?menu=about">About</a>
                ::
                <a href="utama.php?menu=login">Login</a>
            </td>
        </tr>
    </table>

    <?php
    if (isset($_GET['menu'])){
        $menu = $_GET['menu'];
    } else {
        $menu = 'home';
    }
    include $menu .'.php';
    ?>

    <h3>Senarai Tudung yang Kami Jual</h3>


</body>
</html>