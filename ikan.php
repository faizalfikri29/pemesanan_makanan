<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasi Bakar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .product-container {
            background-color: orange; 
            padding: 20px; 
            border: 1px solid black;
        }
        .product-image {
            max-width: 150px; 
            height: auto;
        }
        .product-title {
            font-weight: bold;
            text-decoration: underline; 
        }
        .product-info {
            margin-left: 20px; 
        }

        .back-button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        
        .back-button {
            display: block;
            background-color: #f0f0f0;
            padding: 10px 20px;
            text-decoration: none;
            color: black;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 120px;  /* Lebar tetap */
            text-align: center;
        }

        .mt-5 {
            margin-top: 1.25rem;
        }
    </style>
</head>
<body style="background-color: #EB5B00;">
    <div class="container mt-5">
        <div class="product-container d-flex align-items-center">
            <div>
                <img src="img/ikan1.jpeg" alt="Nasi Bakar" class="product-image img-fluid">
            </div>
            <div class="product-info">
                <span class="product-title">
                    <a href="ikan/ikan1.html" style="color: black;">Asam padeh ikan patin</a>
                </span>
                <span class="ml-2" id="hargasatuan">Rp25.000</span>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="product-container d-flex align-items-center">
            <div>
                <img src="img/ikan2.jpeg" alt="Nasi Bakar" class="product-image img-fluid">
            </div>
            <div class="product-info">
                <span class="product-title">
                    <a href="ikan/ikan2.html" style="color: black;">Ikan gurame crispy sambal </a>
                </span>
                <span class="ml-2" id="hargasatuan">Rp30.000</span>
            </div>
        </div>
        <div class="back-button-container mt-5">
            <a class="back-button" type="submit" href="./index.php">Kembali</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
