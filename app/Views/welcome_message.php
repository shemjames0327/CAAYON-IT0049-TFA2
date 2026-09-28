<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS System - Home</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
            margin: 0; 
            background-color: #f4f4f4; 
        }
        .container { 
            text-align: center; 
            background: white; 
            padding: 50px; 
            border-radius: 8px; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
        }
        h1 { 
            color: #005a2b; /* Dark Green */
            margin-bottom: 20px;
        }
        .button-group {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-top: 30px;
        }
        .btn { 
            display: inline-block; 
            padding: 15px 30px; 
            font-size: 16px;
            font-weight: bold;
            text-decoration: none; 
            color: #fff; 
            background-color: #005a2b; /* Dark Green */
            border: 2px solid #d4af37; /* Gold */
            border-radius: 5px; 
            transition: all 0.3s ease; 
        }
        .btn:hover { 
            background-color: #d4af37; /* Gold */
            color: #005a2b; /* Dark Green */
            border-color: #005a2b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Point of Sale System</h1>
        <p>Select a module to manage your database records:</p>
        
        <div class="button-group">
            <!-- base_url() will automatically use the path from your .env file -->
            <a href="<?= base_url('customers') ?>" class="btn">Customer Accounts</a>
            <a href="<?= base_url('users') ?>" class="btn">User Accounts</a>
        </div>
    </div>
</body>
</html>