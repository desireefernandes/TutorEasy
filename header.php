<header class="ui fixed menu">
	<h1 class="header item" style="padding: 15px 30px 5px 30px;">
		<a href="index.php" title="TutorEasy">
			<img class="logo" src="img/_logo/icon.svg">
		</a>
	</h1>
	<nav>
		<ul>
			<li><a href="home-tutorial.php">Tutoriais</a></li>
			<li><a href="index#tutoriais">Contribuir</a></li>
			<li><a href="index#quemsomos">Quem somos?</a></li>
		</ul>
	</nav>
	<div class="right menu">
		<?php if(isset($_SESSION['user_id'])): ?>
			<!-- Login realizado entrar -->
			<div class="ui simple dropdown item">
				<i class="user circle icon"></i> <?= $_SESSION['user_name']; ?> <i class="dropdown icon"></i>
				<div class="menu">
					<a class="item" href="perfil-tutorial.php">Meus tutoriais</a>
					<a class="item" href="perfil-user.php">Meu perfil</a>
					<div class="divider"></div>
					<!-- <div class="header">Header Item</div> -->
					<a class="item" href="logout.php">Sair</a>
				</div>
			</div>
			<?php else: ?>
			<!-- button entrar -->
			<div class="item">
				<a href="login.php" class="ui teal button">Entrar</a>
			</div>
		<?php endif ?>
	</div>
</header>
