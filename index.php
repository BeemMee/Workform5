<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>หน้าเว็บหลัก</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    /* การตั้งค่าเบื้องต้น */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* การตกแต่งส่วนหัว */
    header {
      background: linear-gradient(45deg, #4CAF50, #2196F3); /* เพิ่ม Gradient */
      color: white;
      text-align: center;
      padding: 60px 20px;
      border-bottom: 5px solid #333; /* เพิ่มเส้นใต้ */
    }

    header h1 {
      font-size: 42px;
      letter-spacing: 2px;
    }

    header p {
      font-size: 18px;
      margin-top: 10px;
      font-weight: 300;
      letter-spacing: 1px;
    }

    /* การจัดตำแหน่งปุ่มล็อกอิน */
    main {
      display: flex;
      justify-content: center; /* จัดกลางแนวนอน */
      align-items: center; /* จัดกลางแนวตั้ง */
      height: calc(100vh - 200px); /* ให้พื้นที่หลักพอดีกับหน้าจอ */
    }

    .btn-login {
      background-color: #2196F3;
      color: white;
      text-decoration: none;
      padding: 20px 40px;
      font-size: 20px;
      border-radius: 50px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease-in-out;
    }

    .btn-login:hover {
      background-color: #1976D2;
      transform: scale(1.1); /* ขยายขนาดปุ่มเมื่อ Hover */
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    }

    /* การตกแต่งส่วนท้าย */
    footer {
      text-align: center;
      background-color: #333;
      color: white;
      padding: 15px;
      position: fixed;
      width: 100%;
      bottom: 0;
      font-size: 14px;
    }

    /* การปรับการจัดการในอุปกรณ์มือถือ */
    @media (max-width: 768px) {
      header h1 {
        font-size: 32px;
      }

      header p {
        font-size: 16px;
      }

      .btn-login {
        padding: 15px 30px;
        font-size: 18px;
      }
    }

  </style>
</head>
<body>
  <!-- ส่วนหัวของหน้า -->
  <header>
    <div class="container">
      <h1>ยินดีต้อนรับสู่เว็บไซต์ของเรา</h1>
      <p>กรุณาเข้าสู่ระบบเพื่อดำเนินการต่อ</p>
    </div>
  </header>

  <!-- ปุ่มไปที่หน้าล็อกอิน -->
  <main>
    <div class="content">
      <a href="form3.php" class="btn-login">ไปที่หน้าล็อกอิน</a>
    </div>
  </main>

  <!-- ส่วนท้าย -->
  <footer>
    <p>&copy; 2024 เว็บไซต์ของเรา. AMBUT</p>
  </footer>
</body>
</html>
