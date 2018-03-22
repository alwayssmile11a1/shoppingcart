<html>

<body>
    <div class="list-group">
        <h5 href="#" class="mt-3 list-group-item list-group-item-action active ">Brands</h5>

        <?php 
            include "dbconnection.php"; 
            $brand_query = "SELECT* FROM brands";
            $brands = mysqli_query($connect,$brand_query);

            if(mysqli_num_rows($brands)>0)
            {
                while($brand = mysqli_fetch_array($brands))
                {
        ?>

                    <a href="#" class="list-group-item list-group-item-action brand" brandID="<?php echo $brand["brand_id"] ?>">
                        <?php echo $brand["brand_title"]; ?>
                    </a>

        <?php

                }
            }
            
        ?>

    </div>
</body>

</html>