<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/SingleService.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<style>
    @media only screen and (max-width: 400px){
    .service-page-frist-section div h1 {
 
    margin-left: 20px;
}}
</style>
<body onload="myFunction()"> 
<div id="loading"></div>
<?php require './Navbar.php'; ?>
    <section>
        <div class="service-page-frist-section"> 
          <div>
            <h1>
                Web Development
            </h1>
          </div>
        </div>
    </section>

    <section>
        <div class="check">
            <div class="left">
                <div class="inner-left-div">
                    <h2>Customize Your Website and Give Your Users New Superpowers. 


                    </h2>

                    <ul>
                        <li>Branding</li>
                        <li>Art Direction</li>
                        <li>Brand Guidelines</li>
                        <li>Print Collateral</li>
                        <li>Product Packaging</li>
                    </ul>
                </div>
            </div>
            <div class="right">
                <div class="inner-right-div">
                    <img src="./assets/images/singleservice/web.png" alt="">
                    <p>With Cretmark by your side, you can rest assured that your website will be custom designed by experts who understand the latest web design trends and all the newest technologies available today. You can have an excellent responsive website that will increase sales, engage more users, and boost your brand awareness with our intuitive designs. It's never been easier to get started with a professional website designed by Cretmark! Plus, if there are any changes needed after launch, our support team will be available 24/7 until everything looks perfect!
                    </p>
                    
                </div>
            </div>
        </div>
    </section>
    <?php require './Footer.php'; ?>
   
</body>
</html>