<div class="search-form-container">
    <h2>Search</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="GET" class="search-form form">
        <div>
            <label for="search">Search</label>
            <input type="text" name="search" id="search" value="<?php echo $search ?>">
        </div>
        <div>
            <label for="orderby">Sort By</label>
            <select name="orderby" id="orderby">
                <option value="title" <?php if ($orderby == "title") { echo "selected"; } ?>>Title</option>
                <option value="date_posted" <?php if ($orderby == "date_posted") { echo "selected"; } ?>>Date Posted</option>
                <option value="user_name" <?php if ($orderby == "user_name") { echo "selected"; } ?>>User Name</option>
                <option value="a_id" <?php if ($orderby == "a_id") { echo "selected"; } ?>>Order Entered</option>
            </select>
        </div>
        <div>
            <label for="order">Sort Order</label>
            <select name="order" id="order">
                <option value="ASC" <?php if ($order == "ASC") { echo "selected"; } ?>>ASCENDING</option>
                <option value="DESC" <?php if ($order == "DESC") { echo "selected"; } ?>>Descending</option>
            </select>
        </div>
        <div>
            <label for="limit">Ads per page</label>
            <select name="limit" id="limit">
                <option value="6" <?php if ($limit == "6") { echo "selected"; } ?>>6</option>
                <option value="8" <?php if ($limit == "8") { echo "selected"; } ?>>8</option>
                <option value="10" <?php if ($limit == "10") { echo "selected"; } ?>>10</option>
                <option value="20" <?php if ($limit == "20") { echo "selected"; } ?>>20</option>
            </select>
        </div>
        <div>
            <input type="submit" name="search-form" value="Search">
        </div>
    </form>
</div>