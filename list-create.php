<?php require_once "./template/header.php"; ?>

<div class=" container">
    <div class=" row">
        <div class=" col-12 border rounded mt-3 p-5 col-lg-6">
            <h3>Create information</h3>
            <?php
            
            if($_SERVER["REQUEST_METHOD"] === "POST"){
                
                $name = $_POST["name"];
                $money = $_POST["money"]; 

                $sql = "INSERT INTO students (name,money) VALUES ('$name',$money)";
                if(mysqli_query($connD,$sql)){
                    echo alert("Created information successfully");
                }
            }
            
            
            
            ?>
            <form action="" method="post">
                <div class=" mb-3">
                    <label for="" class=" form-label">Name</label>
                    <input type="text" name="name" class=" form-control" required>
                </div>
                <div>
                    <label for="" class=" form-label">Money</label>
                    <input type="number" name="money" class=" form-control" required>
                </div>
                <div>
                    <button class=" btn btn-primary mt-3">Submit</button>
                </div>
            </form>
        
        </div>
    </div>
</div>

<?php require_once "./template/footer.php"; ?>