<?php
  if(isset($page))
  {
   $result = mysql_query("select Count(*) As Total from post");
   $rows = mysql_num_rows($result);
   if($rows)
   {
    $rs = mysql_fetch_array($result);
    $total = $rs["Total"];
   }
   $totalPages = ceil($total / $perpage);
   if($page <=1 )
   {
    echo "<span id='page_links' style='font-weight:bold;'>Pre</span>";
   }
   else
   {
    $j = $page - 1;
    echo "<span><a id='page_a_link' href='index.php?page=$j'>< Pre</a></span>";
   }
   for($i=1; $i <= $totalPages; $i++)
   {
    if($i<>$page)
    {
     echo "<span><a href='index.php?page=$i' id='page_a_link'>$i</a></span>";
    }
    else
    {
     echo "<span id='page_links' style='font-weight:bold;'>$i</span>";
    }
   }
   if($page == $totalPages )
   {
    echo "<span id='page_links' style='font-weight:bold;'>Next ></span>";
   }
   else
   {
    $j = $page + 1;
    echo "<span><a href='index.php?page=$j' id='page_a_link'>Next</a></span>";
   }
  }
 ?>
