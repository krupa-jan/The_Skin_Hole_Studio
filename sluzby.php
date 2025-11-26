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
            ["name" => "Služba1", "image" => "assets/images/logo/Logo_500x500_Transparent.webp"],
            ["name" => "Služba2", "image" => ""],
            
        ];

        foreach ($services as $service) {

            $name = $service['name'];
            $image = $service['image'];
        
            include 'includes/service_template.php'; 
        }
    
        ?>
    </div>
    
    <?php require 'includes/footer.php'; ?>
</body>

</html>