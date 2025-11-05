<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cloud Class | Registration Confirmation</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to bottom right, #fffbea, #fff2cc);
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 30px;
    }

    .email-container {
      background: #ffffff;
      border-radius: 16px;
      max-width: 640px;
      width: 100%;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
      border: 1px solid #fceabb;
      overflow: hidden;
    }

    .header {
      text-align: center;
      padding: 40px 30px;
      background: linear-gradient(to right, #fff7cc, #ffe895);
    }

    .header-icon {
      background: white;
      display: inline-block;
      padding: 12px;
      border-radius: 16px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.08);
      margin-bottom: 16px;
    }

    .header svg {
      width: 42px;
      height: 42px;
      color: #d97706;
    }

    .header h1 {
      font-size: 24px;
      font-weight: 600;
      color: #654f00;
      margin: 8px 0 4px;
    }

    .header h2 {
      font-size: 16px;
      color: #856c00;
      margin: 0;
    }

    .content {
      padding: 32px;
      color: #444;
    }

    .content h3 {
      font-weight: 500;
      color: #654f00;
      margin-bottom: 10px;
    }

    .content p {
      margin: 6px 0;
      line-height: 1.6;
    }

    .details-box {
      background: #fffdf5;
      border-radius: 12px;
      border: 1px solid #f7e8a3;
      padding: 20px 24px;
      margin: 20px 0;
    }

    .details-box h4 {
      margin: 0 0 10px;
      font-size: 16px;
      font-weight: 600;
      color: #c48a00;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .details-box svg {
      width: 18px;
      height: 18px;
      color: #c48a00;
    }

    .button {
      display: inline-block;
      background: #facc15;
      color: #4b3b00;
      font-weight: 500;
      padding: 12px 28px;
      border-radius: 8px;
      text-decoration: none;
      box-shadow: 0 3px 6px rgba(0,0,0,0.1);
      transition: background 0.2s, transform 0.2s;
    }

    .button:hover {
      background: #eab308;
      transform: translateY(-1px);
    }

    .footer {
      background: #fff8d8;
      text-align: center;
      padding: 16px;
      font-size: 12px;
      color: #7a6b00;
    }

    @media (max-width: 480px) {
      .content {
        padding: 24px 20px;
      }
    }
  </style>
</head>
<body>

  <div class="email-container">
    <div class="header">
      <div class="header-icon">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l9 6 9-6M4 6h16a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2z"/>
        </svg>
      </div>
      <h1>Cloud Class ☁️</h1>
      <h2>Registration Confirmation</h2>
    </div>

    <div class="content">
      <h3>Hello <span style="color:#d97706; font-weight:600;">{{ $name }}</span>!</h3>
      <p>Congratulations! You’ve successfully registered for <strong>Cloud Class</strong>.  
      We’re thrilled to have you join our program.</p>

      <div class="details-box">
        <h4>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M20 13V7a2 2 0 00-2-2H6a2 2 0 00-2 2v6m16 0a2 2 0 01-2 2H6a2 2 0 01-2-2m16 0v4a2 2 0 01-2 2H6a2 2 0 01-2-2v-4"/>
          </svg>
          Registration Details
        </h4>
        <p><strong>Full Name:</strong> {{ $name }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Birthdate:</strong> {{ $birthdate }}</p>
        <p><strong>Course:</strong> Cloud Class</p>
      </div>

      <p>To complete your registration and confirm your spot in the program, please click the button below:</p>

      <div style="text-align:center; margin:24px 0;">
        <a href="{{ url('/') }}" class="button">☁️ Confirm My Registration</a>
      </div>

      <p><strong>Important:</strong> Please confirm your registration within 7 days to secure your spot.</p>
    </div>

    <div class="footer">
      <p>This is an automated email — please do not reply.</p>
      <p>&copy; {{ date('Y') }} feli.pakevan.web.id | All rights reserved.</p>
    </div>
  </div>

</body>
</html>
