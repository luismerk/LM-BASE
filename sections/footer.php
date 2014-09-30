<a id="back-to-top" class="icon-top back-to-top heading6" href="#"><span>Back to Top</span></a>

2013-2014 Luis Mercado, Ph.D.
<br />
Developed by <a href="http://www.differentialdesigns.net" target="_new">
Differential Designs. Net</a>

<div style="float:right; padding-right:20px" align="right">
    <a href="/">Home</a> | 

    <?
    $q = "SELECT * FROM  `nav_items` ORDER BY displayOrder asc";
    $navItems=mysql_query($q,$conn);
    $count=0;

    while ($row=mysql_fetch_array($navItems)) {
        $categoryName[$count]=$row["categoryName"];
        $alias[$count]=$row["alias"];
        $index[$count]=$row["index"];

        ?>
        <a href="../index.php?section=<? echo $alias[$count]; ?>"><?echo $categoryName[$count];?></a> |
        <?

        $count++;
    }
    ?>
</div>

