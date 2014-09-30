<hr />

<div class="date-stamp" style="float:right; padding-right:20px">
	<? echo date("l, F j, Y"); ?>
</div>

<ul class="list-primary-nav clearfix">
    <li><a href="/_base/">Home</a></li>

    <?
    $q = "SELECT * FROM  `nav_items` ORDER BY displayOrder asc";
    $navItems=mysql_query($q,$conn);
    $count=0;

    while ($row=mysql_fetch_array($navItems)) {
        $categoryName[$count]=$row["categoryName"];
        $alias[$count]=$row["alias"];
        $index[$count]=$row["index"];

        ?>
        <li><a href="index.php?section=<? echo $alias[$count]; ?>"><?echo $categoryName[$count];?></a></li>
        <?

        $count++;
    }
    ?>
    <li style="float: right; padding-top: 15px;"><fb:login-button max_rows="1" size="medium" show_faces="false" auto_logout_link="true"></fb:login-button></li>

</ul>

<hr />
