<?

include('database.php');

$section = $_GET["section"];

$siteName = 'DD.net Test Site';
$browserTitle = '';

$q = "SELECT * FROM  `nav_items` ORDER BY displayOrder ASC";
$navItems=mysql_query($q,$conn);
$count=0;

$thisCategory = '';
$thisAlias = '';
$thisIncludeFile = '';

while ($row=mysql_fetch_array($navItems)) {
    $categoryName[$count]=$row["categoryName"];
    $alias[$count]=$row["alias"];
    $includeFile[$count]=$row["includeFile"];
    $index[$count]=$row["index"];


	if ($section == $alias[$count]) {
		$thisCategory = $categoryName[$count];
    $thisAlias = $alias[$count];
    $thisIncludeFile = $includeFile[$count];
	}

    $count++;
}

if (strlen($thisCategory) > 0 ) {
	$browserTitle = $siteName.' - '.$thisCategory;
} else {
	$browserTitle = $siteName.' - Home';
}

?>

<link rel="ICON" href="">
<meta name="viewport" content="width=device-width,initial-scale=1">

<link href='//fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic,700italic|Open+Sans:700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/modernizr.min.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=""/>
<meta name="description" content=""/>
<meta property="og:image" content=""/>

<title><?echo $browserTitle;?></title>

<!-- Place Google Analytics Code Here -->