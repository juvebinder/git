<?php

include("config.php");




if (isset($POST['input'])) {

    $input = $_POST['input'];
    $quuery = "SELECT * FROM members WHERE pr_en_12_ LIKE '{$input}%' 
  
  
  
  ";

    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) { ?>

        <table class="table table-bordered table-striped mt-4">

            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>

                </tr>
            </thead>


            <tbody>
                <?php

                while ($row = mysqli_fetch_assoc($result)) {
                    $pr_en_1_ = $row['pr_en_1_'];
                    $pr_en_2_ = $row['pr_en_2_'];
                    $pr_en_3_ = $row['pr_en_3_'];
                    $pr_en_5_ = $row['pr_en_5_'];
                    $pr_en_6_ = $row['pr_en_6_'];
                    $pr_en_7_ = $row['pr_en_7_'];
                    $pr_en_8_ = $row['pr_en_8_'];
                    $pr_en_9_ = $row['pr_en_9_'];
                    $pr_en_10_ = $row['pr_en_10_'];
                    $pr_en_11_ = $row['pr_en_11_'];
                    $pr_en_12_ = $row['pr_en_12_'];
                    $pr_en_13_ = $row['pr_en_13_'];
                    $pr_en_14_ = $row['pr_en_14_'];
                    $pr_en_15_ = $row['pr_en_15_'];
                    $pr_en_16_ = $row['pr_en_16_'];
                    $pr_en_17_ = $row['pr_en_17_'];
                    $pr_en_18_ = $row['pr_en_18_'];
                ?>
                    <tr>
                        <td><?php echo $pr_en_1_; ?></td>
                        <td><?php echo $pr_en_2_; ?></td>
                        <td><?php echo $pr_en_3_; ?></td>
                        <td><?php echo $pr_en_5_; ?></td>
                        <td><?php echo $pr_en_6_; ?></td>
                        <td><?php echo $pr_en_7_; ?></td>
                        <td><?php echo $pr_en_8_; ?></td>
                        <td><?php echo $pr_en_9_; ?></td>
                        <td><?php echo $pr_en_10_; ?></td>
                        <td><?php echo $pr_en_11_; ?></td>
                        <td><?php echo $pr_en_12_; ?></td>
                        <td><?php echo ($pr_en_13_ == 'sell') ? 'SELL' : (($pr_en_13_ == 'rent') ? 'RENT' : 'SELL AND RENT'); ?></td>
                        <td><img src="uploads/<?php echo $pr_en_14_; ?>" width="120" height="120"></td>
                        <td><img src="uploads/<?php echo $pr_en_15_; ?>" width="120" height="120"></td>
                        <td><img src="uploads/<?php echo $pr_en_16_; ?>" width="120" height="120"></td>
                        <td><img src="uploads/<?php echo $pr_en_17_; ?>" width="120" height="120"></td>
                        <td><img src="uploads/<?php echo $pr_en_18_; ?>" width="120" height="120"></td>


                    </tr>
                <?php
                }


                ?>
            </tbody>

        </table>

<?php

    } else {
        echo "<h6 class='text-danger text-center mt-3'NO DATA FOUND </h6>";
    }
}

?>