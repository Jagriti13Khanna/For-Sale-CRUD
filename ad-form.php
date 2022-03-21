<?php
    if ($id)
    {
        $heading = "Update an Ad.";
        $submitButton = "Update my Ad!";
    }
    else
    {
        $heading = "Add an Ad.";        
        $submitButton = "Post my Ad!";
    }
?>
<h2><?php echo $heading; ?></h2>
<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>" method="POST" enctype="multipart/form-data" class="ad-form form">   
<!-- <?php echo $sql;
            var_dump($sql);?> -->
    
    <div>
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="<?php echo $post_title; ?>">
        <?php if ($invalidPT) echo $invalidPT; ?> 
    </div>
    
    <div>
        <label for="ad">Ad Description</label>
        <textarea name="ad" id="ad"><?php echo $post_ad; ?></textarea>        
        <?php if ($invalidPA) echo $invalidPA; ?> 
    </div>

    <div>
        <label for="myfile">Select a file</label>
        <input type="file" id="myfile" name="myfile">
        <?php if ($invalidIN) echo $invalidIN; ?> 
    </div>

    <div>
        <label for="price">Price</label>
        <input type="text" id="price" name="price" value="<?php echo $post_price; ?>">
        <?php if ($invalidPR) echo $invalidPR; ?> 
    </div>

    <div><input type="submit" name="ad-btn" value="<?php echo $submitButton; ?>"></div>

</form>