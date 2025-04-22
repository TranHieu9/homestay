<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background: url('star.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-wrapper {
            width: 350px;
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.6);
            text-align: center;
        }
        .form-wrapper h3 {
            font-size: 26px;
            margin-bottom: 20px;
        }
        .form-item {
            position: relative;
            margin-bottom: 15px;
        }
        .form-item input {
            width: 80%;
            padding: 12px 16px;
            padding-left: 20px;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
        }
        input::placeholder {
            color: #ddd;
        }
        input[type='text'] {
            background-image: url('img/user.jpg');
            background-repeat: no-repeat;
            background-position: 10px center;
        }
        input[type='password'] {
            background-image: url('img/pass.jpg');
            background-repeat: no-repeat;
            background-position: 10px center;
        }
        .form-item input:focus {
            outline: none;
            border: 1.5px solid #00b6df;
        }
        .button-panel button {
            width: 100%;
            padding: 12px;
            font-size: 1.2em;
            background: #00b6df;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .button-panel button:hover {
            background: #008db3;
        }
        .reminder {
            margin-top: 15px;
        }
        .reminder a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
        }
        .reminder a:hover {
            color: #cab6bf;
        }
    </style>
</head>
<body>
    <div class="form-wrapper">
        <h3>Đăng Nhập</h3>
        <form action="http://localhost/BTL/" method="POST">
            <div class="form-item">
                <input type="text" name="username" placeholder="Tên đăng nhập" required>
            </div>
            <div class="form-item">
                <input type="password" name="pass" placeholder="Mật khẩu" required>
            </div>
            <div class="button-panel">
                <button type="submit" name="login-admin">Đăng Nhập</button>
            </div>
        </form>
        <div class="reminder">
            <a href="./admin/taotaikhoan">Chưa có tài khoản? Đăng ký</a> |
            <a href="#">Hỗ trợ 18001089 or TranHieu</a>
        </div>
    </div>
</body>
</html>