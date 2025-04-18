<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Replay Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label, textarea {
            margin-bottom: 10px;
        }
        textarea {
            resize: vertical;
            height: 150px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if (isset($_GET['replay_id'])) {
            $contact_id = $_GET['replay_id'];
            
        ?>
            <h2>Replay Form for Contact ID: <?php echo $contact_id; ?></h2>
            <form action="Admin.php" method="post">
                <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                <label for="replay_message">Replay Message:</label>
                <textarea name="replay_message" id="replay_message" required></textarea>
                <input type="submit" value="Submit">
            </form>
        <?php
        } else {
            echo "<p>Invalid request. No product selected.</p>";
        }
        ?>
    </div>
</body>
</html>
