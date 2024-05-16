<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ID Card Test</title>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    html, body {
        height: 100%;
    }
    .id-card-container {
        position: relative;
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .id-card-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1; /* Move the image behind the info */
    }
    .id-card-info {
        position: absolute;
        top: 63%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: #000;
        font-size: 25px;
        line-height: 1.5;
        letter-spacing: 1px; /* Adjust letter spacing */
    }
    .id-card-info p {
        margin-bottom: 10px; /* Adjust line spacing */
    }
    .id-card-profile {
        position: absolute;
        top: 15%;
        left: 28%;
        border-radius: 50%;
        width: 350px;
        height: 350px;

    }
</style>
</head>
<body>
    <div class="id-card-container">
        <img class="id-card-image" src="template1.png" alt="ID Card Image">
        <img class="id-card-profile" src="profile.png" alt="">
        <div class="id-card-info">
            <p class="id-card-name">{{ $value }}</p>
            <p class="id-card-email">maharjansameer111@gmail.com</p>
            <p class="id-card-contact">9851426273</p>
            <p class="id-card-address">Mahalaxmi-04, Lalitpur</p>
            <p class="id-card-dob">1999 Oct 01</p>
        </div>
    </div>
</body>
</html>
