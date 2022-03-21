<?php

if (isset($search)) 
{
    $search = trim($search);
    
    if ($search)
    {
        $search_part = " AND ( title LIKE '%$search%' OR ad LIKE '%$search%' OR user_name LIKE '%$search%' ) ";
    }
}
?>