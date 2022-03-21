<?php
        $list_sql = "SELECT ad_id, title, ad, date_posted, user_name, users.u_id, item_sold_yn, deleted_yn, image_name, price FROM for_sale INNER JOIN users ON for_sale.u_id = users.u_id WHERE deleted_yn = 'N' AND item_sold_yn = 'N' AND user_name = '$username' $search_part ORDER BY $orderby $order $limit_string";    
            // echo $list_sql;    
            $list_result = $conn->query($list_sql); ?>        
    </div> 
    <div class="ads-section">
    <?php if ($list_result->num_rows > 0): ?>
        <h2>Sale Ads</h2>
                <div class="ads">                    
                    <?php while($row = $list_result->fetch_assoc()): ?>
                        <?php extract($row); ?>
                        <div class="ads-single">
                            <h3><?php echo $title; ?></h3>
                            <div>
                                <p>Date posted : <?php echo date("M d, Y g:i a", strtotime($date_posted)) ?></p>
                                <p>Advertiser : <?php echo $user_name; ?></p>
                            </div>
                            <p style="block"><?php echo mb_strimwidth("$ad", 0, 100, "..."); ?></p>                            
                            <img src="thumbnails/<?php echo $image_name?>" alt="<?php echo $image_name?>">
                            <p><?php echo "$" . $price; ?></p>
                            <a href="index.php?view=<?php echo $ad_id; ?>" class="view-details">View details</a>    
                            <?php if ($_SESSION['user_id'] == $u_id): ?>
                                <div class="ads-single-flex">
                                    <a href="index.php?id=<?php echo $ad_id; ?>">Edit</a> 
                                <?php if ($item_sold_yn == 'N'): ?>
                                    <a href="mark-item-sold.php?id=<?php echo $ad_id; ?>">Mark Item as Sold</a>
                                <?php endif ?>
                                </div>    
                            <?php endif ?>
                        </div>
                    <?php endwhile ?>                    
                </div>
                <!-- pagination -->
                <?php  if($count_of_records > $limit): ?>
                     <ul class="pagination">
                        <li>Pages</li>
                            <?php
                                $next_page = $page + 1;
                                $previous_page = $page - 1;
                                $anchor_string = THIS_PAGE."?search=$search&orderby=$orderby&order=$order&limit=$limit&page="; ?>
    
                                <?php if ($page > 1): ?>
                                    <li><a href="<?php echo $anchor_string.$previous_page; ?>"><< Prev</a></li>
                                <?php endif ?>
    
                                <?php for ($i=1; $i <= $num_pages ; $i++): ?>
                                    <?php if ($i != $page): ?>
                                        <li><a href="<?php echo $anchor_string.$i; ?>"><?php echo $i; ?></a></li>
                                    <?php else: ?>
                                        <li><?php echo $i; ?></li>
                                    <?php endif ?>
                                <?php endfor ?>
    
                                <?php if ($page < $num_pages): ?>
                                    <li><a href="<?php echo $anchor_string.$next_page; ?>">Next >></a></li>
                                <?php endif ?>
                        </ul>
                    <?php endif ?>
            <?php endif ?>
    </div>