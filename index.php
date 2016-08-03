<!DOCTYPE html>
<html lang="en">
<head>
  <title>Music Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
  
<div class="container">
	<div class="row">
	<header> <a href="index.php">My Tunes</a> </header>
	<nav id="sideNavParent" class="pdsa-sn-wrapper">
		<ul>
			<li class="pds-sn-brand">
				<a href="index.php" class="visible-sm visible-md visible-lg">Music</a>
			</li>
			<li>
				<a href="#">
					<span class="visible-sm visible-md visible-lg">Home</span>
					<i class="glyphicon glyphicon-home visible-xs"></i>
				</a>
			</li>
			<li>
				<a href="#" data-toggle="collapse" data-target="#ulGenres">
					<span class="visible-sm visible-md visible-lg">Genres&nbsp;<b class="caret"></b></span>
					<i class="glyphicon glyphicon-globe visible-xs"></i>
				</a>

				<div class="visible-sm visible-md visible-lg">
				<ul id="ulGenres" class="collapse" data-parent="#sideNavParent">
					<li>
						<a href="#">All Genres</a>
					</li>
					<li>
						<a href="#">Jazz</a>
					</li>
					<li>
						<a href="#">Country</a>
					</li>
					<li>
						<a href="#">Rock</a>
					</li>
				</ul>
				</div>
			</li>
			<li>
				<a href="#" data-toggle="collapse" data-target="#ulPlaylists"> 
					<span class="visible-sm visible-md visible-lg">Playlists&nbsp;<b class="caret"></b></span>
					<i class="glyphicon glyphicon-list-alt visible-xs"></i>
				</a>

				<div class="visible-sm visible-md visible-lg">
				<ul id="ulPlaylists" class="collapse" data-parent="#sideNavParent">
					<li>
						<a href="#">All Playlist</a>
					</li>
					<li>
						<a href="#">Classical</a>
					</li>
					<li>
						<a href="#">Romantic</a>
					</li>
					<li>
						<a href="#">Favorite</a>
					</li>
				</ul>
				</div>
			</li>
			<li>
				<a href="#">
					<span class="visible-sm visible-md visible-lg">Songs</span>
					<i class="glyphicon glyphicon-music visible-xs"></i>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="visible-sm visible-md visible-lg">Downloads</span>
					<i class="glyphicon glyphicon-download visible-xs"></i>
				</a>
			</li>
		</ul>
	</nav>
	</div>
</div>

<div class="container body-content">
	<div class="row">
		<div class="col-xs-10 col-lg-12">
			<h1>My Music</h1>
			<p>This is where you gather all of your music
		</div>
	</div>
</div>

</body>
</html>