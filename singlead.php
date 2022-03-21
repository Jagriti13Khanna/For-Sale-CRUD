
        <?php
            $list_sql = "SELECT ad_id, title, ad, date_posted, user_name, users.u_id, item_sold_yn, deleted_yn, image_name, price FROM for_sale INNER JOIN users ON for_sale.u_id = users.u_id WHERE deleted_yn = 'N' AND item_sold_yn = 'N' AND ad_id = $view_details $search_part ORDER BY $orderby $order $limit_string";
    
            
    
            $list_result = $conn->query($list_sql); ?>

        
        </div> 
        <div class="ads-section">
        <?php if ($list_result->num_rows > 0): ?>
            <h2>View Details</h2>
            
                    <div class="ads">
                        
                        <?php while($row = $list_result->fetch_assoc()): ?>
                            <?php extract($row); ?>
                            <div class="ads-single-view ">
                                <div class="ads-single-flex-view float">
                            <a href="index.php">Go back to view all ads</a></div>
                                <h3><?php echo $title; ?></h3>
                                <div>
                                    <p>Date posted : <?php echo date("M d, Y g:i a", strtotime($date_posted)) ?></p>
                                    <p>Advertiser : <?php echo $user_name; ?></p>
                                </div>
                                <p style="block"><?php echo $ad; ?></p>                            
                                <img src="display/<?php echo $image_name?>" alt="<?php echo $image_name?>">
                                <p><?php echo "$" . $price; ?></p>
                                
        
                                <?php if ($_SESSION['user_id'] == $u_id): ?>
                                    <div class="ads-single-flex-view">
                                        <a href="myads.php?id=<?php echo $ad_id; ?>">Edit</a> 
                                    <?php if ($item_sold_yn == 'Y'): ?>
                                        <a href="mark-item-unsold.php?id=<?php echo $ad_id; ?>">Mark Item as Available</a>
                                    <?php else: ?>
                                        <a href="mark-item-sold.php?id=<?php echo $ad_id; ?>">Mark Item as Sold</a>
                                    <?php endif ?>
                                    <a href="delete.php?id=<?php echo $ad_id; ?>">Delete Item Permanently</a>
                                    </div>    
                                <?php endif ?>
                            </div>
                        <?php endwhile ?>                    
                    </div>
                    <?php endif ?>
                                    </div>