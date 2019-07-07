<!DOCTYPE html>
<html>
	<head>
		<title>Website</title>
		<style type="text/css">
			*{
				margin: 0px;
				padding: 0px;
			}
			.header_menu{
				margin: auto;
				margin-top: 10px;
				width: 98%;
				box-shadow: 0 4px 8px 0 rgba(0,0,0,0.6);
			}
			header{
				background-color: #B7B7B7;
				padding: 20px;
				text-align: center;
			}
			 nav{
				background-color: #000000;
				padding: 20px;

			}
			 a{
				padding: 20px;
				margin: 0px;
				color: white;
				text-decoration: none;
			}
			a:hover{
				background-color: #D6D6D6;
				color: black;
			}

			.mainContent{	
				margin:auto;
				margin-top: 10px;
				width: 98%;
				display: flex;
				box-shadow: 0 4px 8px 0 rgba(0,0,0,0.6);
			}
			.leftSide , .rightSide{
				width: 50%;
				opacity: 0.6;
				box-shadow: 0 4px 8px 0 rgba(0,0,0,0.3);
				margin: 10px;
				text-align: justify;
				padding: 10px;
			}
			.middleSide{
				width: 90%;
				opacity: 0.6;
				padding: 10px;
				box-shadow: 0 4px 8px 0 rgba(0,0,0,0.3);
				margin: 10px;
			}
			.middleSide:hover , .leftSide:hover , .rightSide:hover{
				opacity: 1;
			}
			footer{
				background-color: #9C9C9C;
				width: 95%;
				margin: auto;
				margin-top: 10px;
				padding: 30px;
				text-align: center;
			}
			@media screen and (max-width: 700px)
			{
				.mainContent{
					margin: 10px;
					display: block;
					width: 100%;
				}
				.leftSide , .rightSide{
					width: 90%;
					margin-top: 10px;
					overflow: hidden;
				}
			}
			




		</style>
	</head>
	<body>
		<div class="header_menu">
			<header>
				<h1>Header</h1>
			</header>
			<div class="navigation">
			<nav>
				<a href="#">Link 1</a>
				<a href="#">Link 2</a>
				<a href="#">Link 3</a>
				<a href="#">Link 4</a>
			</nav>
		</div>
		</div>
		<div class="mainContent">

			<div class="leftSide">
				<h1>Left</h1>
				<p style="margin-left: 20px;margin-right: 20px;">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			</div>

			<div class="middleSide">
				<h1>Main</h1>
				<p style="margin-left: 20px; margin-right: 20px; text-align: justify; ">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
				<p style="margin-left: 20px; margin-right: 20px; text-align: justify; ">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			</div>
			<div class="rightSide">
				<h1>Right</h1>
				<p style="margin-left: 20px;margin-right: 20px;">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			</div>
		</div>

		<footer>
			@copyright content by www.DomainName.in

		</footer>


	</body>
</html>
