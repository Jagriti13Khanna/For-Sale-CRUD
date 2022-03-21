<?php
$page_title="Image Gallery";

session_start();

// include ("image_function.php");
// $thumb_folder = "thumbnails/";
// $display_folder = "display/";
// $original_folder = "uploaded_files/";

$view_details = $_GET['view']; 
$username = $_GET['by_user']; 

$limit = 6;
$page = 1;
$orderby = "date_posted";
// echo $orderby;
$order = " DESC ";
$start_position = 0;
$limit_string = " LIMIT $start_position , $limit ";

require ("includes/connect.php");
include("session-time-check.php");
include("login-post.php"); 
include("ad-post.php"); 
include("messages.php");

if (isset($_GET)) {
    extract($_GET);
}

include("search-post.php");

if ($id) 
{
    $get_sql = "SELECT title, ad, image_name, price FROM for_sale WHERE ad_id = $id AND u_id = " . $_SESSION['user_id'];
    $get_res = $conn->query($get_sql);
    if ($get_res->num_rows > 0)
    {
        $get_row = $get_res->fetch_assoc();
        $post_ad = $get_row['ad'];
        $post_title = $get_row['title'];
        $post_price = $get_row['price'];
        $image_name = $get_row['image_name'];
    }
    else
    {
        $message = "<p>Unable to retrieve information.</p>";
    }
}

//count of records to paginate
$count_sql = "SELECT COUNT(*) AS row_count FROM for_sale INNER JOIN users ON for_sale.u_id = users.u_id  WHERE deleted_yn = 'N' and item_sold_yn = 'N' $search_part ";
$count_result = $conn->query($count_sql) or die ($conn->error);

// echo $count_sql;

if ($count_sql > 0)
{
    echo "no ads.";
}

// SELECT ad_id, title, ad, date_posted, user_name, users.u_id, item_sold_yn FROM for_sale INNER JOIN users ON for_sale.u_id = users.u_id WHERE deleted_yn = 'N' AND item_sold_yn = 'N' $search_part ORDER BY $orderBy $order $limit_string 
if ($count_result->num_rows > 0)
{
    $count_row = $count_result->fetch_assoc();
    // extract($count_row);
    // var_dump($count_row);
    $count_of_records = $count_row["row_count"];

    // echo $count_of_records;
    // echo $row_count;
}
// echo $count_of_records;

if ($count_of_records > $limit)
{
    // end = 13 / 5 remainder = 3
    $end = round($count_of_records % $limit, 0);
    // splits = 13 - 3 / 5 =2
    $splits = round(($count_of_records - $end) / $limit, 0);
    // num pages = 2
    $num_pages = $splits;
    if ($end != 0)
    {
        // num pages = 3
        $num_pages++;
    }

    // in groups of limit (5) where records are being retrieved from
    $start_position = ($page * $limit) - $limit;
    $limit_string =  " LIMIT $start_position , $limit ";
}

?>


<?php require ("includes/header.php"); ?>

<div class="main-flex-container">
    <div class="search-section">
        <div class="search">
            <?php include ("search-form.php"); ?>
        </div>
    <?php if($view_details): ?>
        <?php include ("singlead.php"); ?>
    <?php elseif($username): ?>
    <?php include ("username.php") ?>
    <?php else: ?>
     <?php include ("list.php") ?>
    <?php endif ?>
    <div class="form-section-mobile">
        <?php if ($message): ?>
            <div>
                <?php echo $message; ?>
            </div>
        <?php endif ?>
    
        <?php if ($_SESSION['user_id']): ?>
            <?php include ("ad-form.php"); ?>
        <?php else : ?>
            <?php include ("login-form.php"); ?>
        <?php endif ?>
    </div>
</div>



<?php require ("includes/footer.php"); ?>