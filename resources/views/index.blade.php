<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ID Card</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }
    .id-card {
        width: 85.6mm; /* Standard PVC card width */
        height: 53.98mm; /* Standard PVC card height */
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        padding: 10px;
        margin: 50px auto;
        position: relative;
        overflow: hidden;
    }
    .id-card img {
        width: 100%;
        height: auto;
        border-radius: 5px;
    }
    .id-card .info {
        position: absolute;
        bottom: 10px;
        left: 10px;
        color: #333;
    }
    .id-card .info h2, .id-card .info p {
        margin: 0;
    }
</style>
</head>
<body>
    <div class="id-card">
        <img src="path_to_your_image.jpg" alt="ID Card Image">
        <div class="info">
            <h2>John Doe</h2>
            <p>ID: 123456789</p>
            <p>Position: Employee</p>
        </div>
    </div>
</body>
</html>
