<div class="header">
	<div class="container">
		<a href="http://www.lazybearhosting.co.uk"><h1>LazyBear<strong>Boilerplate</strong></h1></a>

		<ul class="nav nav-pills">
			<li <?php if ($router->module === "home") { print 'class="active"'; } ?>><a href="/home">Home</a></li>
			<li <?php if ($router->module === "about") { print 'class="active"'; } ?>><a href="/about">About</a></li>
			<li <?php if ($router->module === "contact") { print 'class="active"'; } ?>><a href="/contact">Contact</a></li>
		</ul>
	</div>
</div>