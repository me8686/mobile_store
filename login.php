<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
    <link rel="stylesheet" href="siteghaleb.css">
</head>
<body>
    <div style="text-align: center;">
        <h2>فرم ورود</h2>
        <!-- فرم بدون action. داده‌ها به همین صفحه ارسال می‌شود -->
        <form action="login.php" method="post">
            <table style="margin-left: auto; margin-right: auto;">
                <tr>
                    <td>نام کاربری:</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>کلمه عبور:</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <input type="submit" value="ورود">
                    </td>
                </tr>
            </table>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // نمایش مشخصات وارد شده به کاربر
            echo "<h3>مشخصات وارد شده:</h3>";
            echo "<p>نام کاربری: $username</p>";
            echo "<p>کلمه عبور: $password</p>";

            // در اینجا می‌توانید بررسی کنید که اطلاعات درست است یا نه.
            if ($username == "mmd86" && $password == "me1386") {
                echo "<p>خوش آمدید، $username!</p>";
            } else {
                echo "<p>نام کاربری یا کلمه عبور اشتباه است.</p>";
            }
        }
        ?>
    </div>
</body>
</html>