<hr />
<h1>Thought Board</h1>
<hr />
<!-- Begin Posts -->

<?

$q = "SELECT * FROM  `homepage_posts` ORDER BY timestamp desc";

$result=mysql_query($q,$conn);

$count=0;

while ($row=mysql_fetch_array($result)) {
    $date[$count]=$row["date"];
    $category[$count]=$row["category"];
    $subject[$count]=$row["subject"];
    $comment[$count]=$row["comment"];
    $timestamp[$count]=$row["timestamp"];
    $index[$count]=$row["index"];

    ?><h2><? echo $subject[$count]; ?></h2><?
    ?><font size="-2" color="#C0C0C0"> Posted <? echo $date[$count]; ?></font><?
    ?><p><? echo $comment[$count]; ?></p>
    <br />
    <hr /><?
    $count++;
}
?>
