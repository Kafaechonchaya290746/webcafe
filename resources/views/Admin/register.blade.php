<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>สมัคร Admin</title>
    <style>
        body {
            font-family: 'Prompt', sans-serif;
            background: #f0f0f0;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        .box {
            background: white;
            padding: 30px;
            border-radius: 15px;
            width: 350px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
        button {
            background: #007BFF;
            color: white;
            border: none;
        }
        .alert {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            font-size: 14px;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
<div class="box">
    <h2>สมัครผู้ดูแลระบบ</h2>

    <!-- แสดงข้อความ success -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- แสดงข้อความข้อผิดพลาด (ถ้ามี) -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.register') }}">
        @csrf
        <input type="text" name="username" placeholder="ชื่อผู้ใช้" value="{{ old('username') }}" required>
        <input type="email" name="email" placeholder="อีเมล" value="{{ old('email') }}" required>
        <input type="password" name="password" placeholder="รหัสผ่าน" required>
        <button type="submit">สมัคร</button>
    </form>
</div>
</body>
</html>
