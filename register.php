<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت‌نام</title>
    <link rel="stylesheet" href="siteghaleb.css">
</head>
<body>
    <div style="text-align: center;">
        <h2>فرم ثبت‌نام</h2>
        <form action="register.php" method="post">
            <table style="margin-left: auto; margin-right: auto;">
                <tr>
                    <td>نام واقعی:</td>
                    <td><input type="text" name="realname" required></td>
                </tr>
                <tr>
                    <td>نام کاربری:</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>کلمه عبور:</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td>تکرار کلمه عبور:</td>
                    <td><input type="password" name="repassword" required></td>
                </tr>
                <tr>
                    <td>پست الکترونیک:</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <input type="submit" value="ثبت‌نام">
                    </td>
                </tr>
            </table>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $realname = $_POST['realname'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $repassword = $_POST['repassword'];
            $email = $_POST['email'];

            // نمایش مشخصات وارد شده به کاربر
            echo "<h3>مشخصات وارد شده:</h3>";
            echo "<p>نام واقعی: $realname</p>";
            echo "<p>نام کاربری: $username</p>";
            echo "<p>پست الکترونیک: $email</p>";
            echo "<p>کلمه عبور: $password</p>";

            // بررسی تطابق کلمه عبور
            if ($password == $repassword) {
                echo "<p>ثبت‌نام موفقیت‌آمیز بود. خوش آمدید، $realname!</p>";
            } else {
                echo "<p>کلمه عبور و تکرار آن تطابق ندارند.</p>";
            }
        }
        ?>
    </div>
</body>
</html>