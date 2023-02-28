<?php require_once "./template/header.php"; ?>
<div class=" container">
    <div class=" row">
        <div class=" col-12 border rounded mt-3 p-5">
        <?php
            
            $sql = "SELECT * FROM students";
            $query = mysqli_query($connD,$sql);

            $totalSql = "SELECT SUM(money) AS total_money FROM students";
            $totalQuery = mysqli_query($connD,$totalSql);
            $totalMoney = mysqli_fetch_assoc($totalQuery);
            
            ?>
            <h3>View created informations</h3>
            <p>Total informations : <?= $query->num_rows ?></p>
            
            <table class=" table table-bordered align-center">
                <thead>
                    <tr>
                        <th>Id</th>
                    
                        <th>Name</th>
                    
                        <th>Money</th>

                        <th>Options</th>
                    
                        <th>Created at</th>

                    </tr>
                </thead>
                <tbody>
                <?php while($data = mysqli_fetch_assoc($query)): ?>
                
                    <tr class=" align-middle">
                        <td><?= $data["id"] ?></td>
                        <td><?= $data["name"] ?></td>
                        <td class=" text-end"><?= $data["money"] ?></td>
                        <td>
                            <a href="" class=" btn btn-sm btn-secondary"><i class="bi bi-pencil"></i><span class=" d-none d-lg-inline-block">Edit</span></a>
                                <form class=" d-inline-block" action="list-delete.php" method="post">
                                    <input type="hidden" value="<?= $data["id"] ?>" name="id">
                                <button onclick='return confirm("Are you sure?")' class=" btn btn-sm btn-danger"><i class="bi bi-trash"></i><span class=" d-none d-lg-inline-block">Delete</span></button>

                                </form>
                        </td>
                        <td>
                            <div class="">
                            <i class=" bi bi-calendar"></i>
                            <p class=" mb-0 d-inline"><?= showTime($data["created_at"]) ?></p>
                            </div><div class="">
                            <i class=" bi bi-clock"></i>
                            <p class=" mb-0 d-inline"><?= showTime($data["created_at"],"g:i a") ?></p>
                            </div>
                    </td>
                    </tr>
                <?php endwhile; ?>
                <tr>
                    <td colspan="2">Total</td>
                    <td colspan="2" class=" text-end"><?= $totalMoney["total_money"] ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once "./template/footer.php"; ?>

