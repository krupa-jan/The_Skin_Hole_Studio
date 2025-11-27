<!DOCTYPE html>
<html lang="cs">
<head>
    <title>Služby | The Skin Hole Studio</title>
    <?php require 'includes/html_head.php'; ?>
</head>

<body>
    <?php require 'includes/nav.php'; ?>
    
    <div class="services">
        <?php
    
        $services = [
            ["name" => "Služba1", "price" => "10 000", "discount" => "", "image" => "assets/images/logo/Logo_500x500_Transparent.webp"],
            ["name" => "Služba2", "price" => "2 000", "discount" => "", "image" => "assets/images/logo/Logo_500x500_Transparent.webp"],
            
        ];

        foreach ($services as $service) {

            $name = $service['name'];
            $price = $service['price'];
            $discount = $service['discount'];
            $image = $service['image'];
        
            include 'includes/services/service_template.php'; 
        }
    
        ?>
    </div>
    
    <?php require 'includes/footer.php'; ?>
</body>

</html>