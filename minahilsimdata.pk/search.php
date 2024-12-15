<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minahil Sim Data Search</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #f0f4f8, #dbe9f4); /* Gradient background */
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }

        h2 {
            margin-top: 0;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header a {
            text-decoration: none;
            color: white;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 8px; /* Match button style */
            font-size: 16px;
            font-weight: bold;
        }

        input[type="text"] {
            width: calc(100% - 120px); /* Adjust width */
            padding: 10px;
            font-size: 16px;
            border: 2px solid #007bff;
            border-radius: 8px 0 0 8px; /* Rounded corners */
            color: #333;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #0056b3;
            outline: none;
        }

        button {
            margin-top: 8px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 8px; /* Rounded corners */
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        #result {
            color: #333;
            margin-top: 10px;
            padding: 10px;
            display: none;
            width: auto;
            border-radius: 8px; /* Rounded corners */
            background-color: #f9f9f9; /* Light background for result */
        }

        table {
            width: max-content;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #dee2e6;
            padding: 12px;
            text-align: left;
            vertical-align: top;
        }

        th {
            background-color: #d71a20;
            color: white;
        }

        td {
            background-color: #f9f9f9;
            color: black;
            word-wrap: break-word;
            width:200px;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            padding: 20px;
            background-color: #dbe6f25e; /* Blue background */
            color: black;
            border-top: 1px solid #0056b3; /* Darker blue border */
            border-radius: 0 0 8px 8px;
        }

        .footer p {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .footer .whatsapp-text {
            font-size: 16px;
            margin-bottom: 15px;
            color: #098072; /* Lighter text color */
        }

        .footer ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .footer li {
            margin: 10px;
            font-size: 16px;
            padding: 15px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease, transform 0.3s ease;
            width: 250px; /* Fixed width for consistency */
            text-align: left;
            display: flex;
            align-items: center;
        }

        .footer li:hover {
            background-color: #e9ecef;
            transform: scale(1.02);
        }

        .footer li::before {
            content: '•'; /* Bullet point */
            color: #007bff; /* Blue color for bullet */
            font-size: 24px;
            margin-right: 10px;
        }

        .whatsapp-button {
            display: inline-block;
            background-color: #25D366;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            text-decoration: none;
            font-weight: bold;
            margin: 10px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .whatsapp-button:hover {
            background-color: #128C7E;
            transform: scale(1.05);
        }

        .whatsapp-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="index.html">Home</a>
        </div>
        
        <form method="POST">
            <input type="text" name="mobileNumber" placeholder="Enter mobile number">
            <button type="submit" name="submit">Search</button>
        </form>

        <div id="result">
                    </div>

        <div class="footer">
            <div class="whatsapp-container">
                <p class="whatsapp-text">کسی بھی نمبر کا فرینچائز کا ڈیٹا نکلوانے کے لیے واٹس ایپ پر رابطہ کریں۔ لوکیشن، کال ہسٹری، فیملی ٹری اور شناختی کارڈ کی کاپی وغیرہ کی سروس بھی دستیاب ہے۔</p>
                <a href="https://wa.me/+923551331953" class="whatsapp-button" target="_blank">Contact on WhatsApp</a>
            </div>
            <p><strong>Our Paid Services:</strong></p>
            <ul>
                <li>All network Fresh Number Details (Name, CNIC, Address)</li>
                <li>All numbers against CNIC</li>
                <li>Nadra CNIC Verification</li>
                <li>Pin Point Location</li>
                <li>Family Tree</li>
                <li>CDR (Call Data Record)</li>
                <li>IMEI Tracking (Stolen or Lost Mob Trace)</li>
                <li>Fake WhatsApp Number</li>
                <li>Vehicle Details</li>
                <li>Marriage Certificate (Copy)</li>
                <li>Death Certificate (Copy)</li>
                <li>FRC (Family Registration Certificate)</li>
                <li>Vaccination (Corona, Booster, Polio)</li>
                <li>Travel History</li>
                <li>Passport Details</li>
                <li>Fake Calling Software (Private, Unknown Number)</li>
                <li>More Trusted Services Available</li>
            </ul>
            <a href="https://wa.me/+923551331953" class="whatsapp-button" target="_blank">Contact on WhatsApp</a>
        </div>
    </div>
</body>
</html>
