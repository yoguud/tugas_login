
<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR</title>
    <style>
        /* General Reset and Body Styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f7fb;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
            color: #007BFF; /* Biru terang */
            margin-bottom: 30px;
        }

        /* Styling for the form */
        form {
            background-color: #ffffff;
            padding: 30px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            width: 400px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        form:hover {
            transform: scale(1.05);
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.15);
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
            text-align: left;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #007BFF;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        a {
            color: #007BFF;
            text-decoration: none;
            font-size: 14px;
            text-align: center;
        }

        a:hover {
            text-decoration: underline;
        }

        .footer-text {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div>
        <h1>DAFTAR</h1>
        <form method="post" action="daftar_aksi.php">
            <table>
                <tr>
                    <!-- <td>Username</td>
                    <td>:</td> -->
                    <td><input type="text" name="username" placeholder="Masukkan username" required></td>
                </tr>
                <tr>
                    <!-- <td>Email</td>
                    <td>:</td> -->
                    <td><input type="email" name="email" placeholder="Masukkan Email" required></td>
                    
                    <?php if(isset($_GET['error'])):?>
                        <p style="color: red; text-align: center;"><?= "Email Sudah Terdaftar" ?></p>
                    <?php endif ?>

                </tr>
                <tr>
                    <!-- <td>Password</td>
                    <td>:</td> -->
                    <td><input type="password" name="password" placeholder="Masukkan password" required></td>
                    
                </tr>
                <tr>
                    <!-- <td></td>
                    <td></td> -->
                    <td><input type="submit" value="Daftar"></td>
                </tr>
                <tr>
                    <!-- <td></td>
                    <td></td> -->
                    <td class="footer-text">Sudah punya akun? <a href="index.php">Login!</a></td>
                </tr>
            </table>
        </form>
    </div>

    <script>
        // Optional: Animasi smooth saat form muncul
        document.querySelector('form').style.animation = 'fadeIn 1s ease-out';

        // CSS Keyframe Animation (Smooth Fade-In Effect)
        const style = document.createElement('style');
        style.innerHTML = `
            @keyframes fadeIn {
                0% {
                    opacity: 0;
                    transform: translateY(30px);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        `;
        document.head.appendChild(style);
    </script>

</body>
</html>
