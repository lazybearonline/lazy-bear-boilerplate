<div class="header">
	<div class="container">
		<div class="navbar">
			<div class="navbar-inner">
				<a class="brand" href="http://www.lazybearhosting.co.uk">
					LazyBear<b>Boilerplate</b>
				</a>

				<ul class="nav pull-right">
					<li <?php if ($router->module === "home") { print 'class="active"'; } ?>><a href="/home">Home</a></li>
					<li <?php if ($router->module === "about") { print 'class="active"'; } ?>><a href="/about">About</a></li>
					<li <?php if ($router->module === "contact") { print 'class="active"'; } ?>><a href="/contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>