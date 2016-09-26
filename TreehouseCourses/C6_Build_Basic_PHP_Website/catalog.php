<?php 
$catalog = array(
	"Design Patterns", 
	"Forrest Gump", 
	"Beethoven"
);

	$pageTitle = "Full Catalog"; // default for when not otherwise specified
	$section = null; // default for when not otherwise specified

	if (isset($_GET["cat"])) {

		if ($_GET["cat"] == "books") {
			$pageTitle = "Books";
			$section = "books";
		} else if ($_GET["cat"] == "movies") {
			$pageTitle = "Movies";
			$section = "movies";
		} else if ($_GET["cat"] == "music") {
			$pageTitle = "Music";
			$section = "music";
		}
	}

	include("inc/header.php"); 
?>

<div class="section catalog page">
	<div class="wrapper">

		<h1><?php echo $pageTitle; ?></h1>

		<ul>
<!-- 			<li>Item 1</li>
			<li>Item 2</li>
			<li>Item 3</li> -->
			<?php 
			foreach($catalog as $item) {
				echo "<li>" . $item . "</li>";
			}
			?>
		</ul>


	</div>

</div>

<?php include("inc/footer.php"); ?>