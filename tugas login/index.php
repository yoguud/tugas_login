<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to Erpeel One</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* General Body Styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2; /* Light grey background */
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            height: 100vh; /* Full height */
            text-align: center;
            padding: 0 20px;
        }

        /* Container Styling for the Form */
        .container {
            background-color: #fff; /* White background */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px; /* Max width for form */
            opacity: 0;
            transform: translateY(-50px);
            animation: fadeInUp 1s forwards;
        }

        /* Animation for the fade-in and slide-up effect */
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Heading Styling */
        h2 {
            color: #007BFF; /* Bright blue color */
            margin-bottom: 20px;
        }

        /* Input Styling */
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        /* Focus Effect for Input Fields */
        input[type="email"]:focus, input[type="password"]:focus {
            border-color: #007BFF;
            outline: none;
        }

        /* Submit Button Styling */
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #007BFF; /* Blue color */
            border: none;
            border-radius: 5px;
            font-size: 18px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        /* Hover Effect for Submit Button */
        input[type="submit"]:hover {
            background-color: #0056b3; /* Darker blue */
            transform: scale(1.05);
        }

        /* Link Styling */
        p {
            font-size: 14px;
            margin-top: 10px;
        }

        a {
            color: #007BFF;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            text-decoration: underline;
            color: #0056b3;
        }

        /* Error Message Styling */
        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 15px;
        }

        /* Responsiveness: Ensuring form works on mobile */
        @media (max-width: 600px) {
            .container {
                padding: 30px;
            }

            input[type="submit"], input[type="email"], input[type="password"] {
                padding: 15px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Login to Erpeel One</h2>

        <!-- Check for notifications -->
        <?php 
        include 'koneksi.php';
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "<p class='error-message'>Login gagal! username dan password salah!</p>";
            } else if($_GET['pesan'] == "logout"){
                echo "<p class='error-message'>Anda telah berhasil logout</p>";
            } else if($_GET['pesan'] == "belum_login"){
                echo "<p class='error-message'>Anda harus login untuk mengakses halaman admin</p>";
            }
        }
        ?>

        <!-- Login Form -->
        <form method="post" action="cek_login.php">
            <input type="email" name="email" placeholder="Masukkan email" required autocomplete="off">
            <input type="password" name="password" placeholder="Masukkan password" required>
            <input type="submit" value="LOGIN">
            <p>Belum punya akun? <a href="daftar.php">Daftar!</a></p>
        </form>
    </div>

    <script>
        // JavaScript validation and form shake effect for empty inputs
        document.querySelector("form").addEventListener("submit", function(event) {
            var email = document.querySelector("input[name='email']").value;
            var password = document.querySelector("input[name='password']").value;
            var errorMessage = "";

            if (!email) {
                errorMessage += "Email tidak boleh kosong.\n";
            } else if (!validateEmail(email)) {
                errorMessage += "Format email tidak valid.\n";
            }

            if (!password) {
                errorMessage += "Password tidak boleh kosong.\n";
            }

            if (errorMessage) {
                event.preventDefault();
                alert(errorMessage);
                shakeForm();
            }
        });

        function validateEmail(email) {
            var re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            return re.test(String(email).toLowerCase());
        }

        function shakeForm() {
            var form = document.querySelector("form");
            form.classList.add('shake');
            setTimeout(function() {
                form.classList.remove('shake');
            }, 500);
        }
    </script>

</body>
</html>
