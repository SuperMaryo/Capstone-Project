<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Product</title>

    <link rel="stylesheet" href="../static/css/adminpage.css">
    <link rel="stylesheet" href="../static/css/adminProd.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    
</head>
<body>
<div class="container">
    <div class="side-nav">
        <div class="page-title">
            <h2>Admin Panel</h2>
        </div>
        <nav>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="#">Orders</a></li>
                <li style="background: #2fccf8;"><a href="adminProd.php">Products</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="adminCompleted.php">Projects</a></li>
                <li><a href="#">Admin Profile</a></li>
                <br><br><br><br><br>
                <li><a href="../logout.php">Log Out</a></li>
            </ul>
        </nav>
    </div>
</div>
<div class="container2">
    <div class="prodContent">
        <div class="prodtitle"></div>
            <h2>Products</h2>
    </div>
    <form action="">
        <div class="details">
            <div class="productForm">
                <span class="formSpan">Product Name</span>
                <input type="text" placeholder="Enter Product Name" required>
            </div>
            <div class="productForm">
                <span class="formSpan">Product Category</span>
                <select name="pcategory" id="pcategory" required>
                    <option value="0"></option>
                    <option value="Mirror">Mirror</option>
                    <option value="Clothes">Clothes Cabinet</option>
                    <option value="Kitchen">Kitchen Cabinet</option>
                </select>
                
            </div>
            <div class="productForm">
                <span class="formSpan">Product Price</span>
                <input type="number" placeholder="₱" required>
            </div>
            <div class="productForm">
                <span class="formSpan">Product Image</span>
                <input type="file" placeholder="Enter Product Image" multiple="multiple" required>
            </div>
            <div class="productForm">
                <span class="formSpan">Product Quantity</span>
                <input type="number" placeholder="Enter product quantity" required>
            </div>
            <div class="productForm">
                <span class="formSpan">Product Details</span><br>
                <textarea name="details" id="" cols="30" rows="10" placeholder="Describe product"></textarea>
            </div>
            <div class="uploadBtn">
                <input type="submit" value="Upload">
            </div>
        </div>
    </form>
</div>
</body>
</html>