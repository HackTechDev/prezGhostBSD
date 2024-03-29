<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

        <title>Présentation de FreeBSD</title>

        <meta name="description" content="Présentation de FreeBSD">
        <meta name="author" content="Samuel Gondouin">

		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="dist/reset.css">
		<link rel="stylesheet" href="dist/reveal.css">
		<link rel="stylesheet" href="dist/theme/beige.css" id="theme">

		<!-- Theme used for syntax highlighting of code -->
		<link rel="stylesheet" href="plugin/highlight/monokai.css" id="highlight-theme">
	</head>

	<body>

		<div class="reveal">

			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides">

                <?php include("ilard.php") ?>

                <?php include("couverture.php") ?>

                <?php include("origine.php") ?>    

                <?php include("signification.php") ?>

                <?php include("historique.php") ?>

                <?php include("freebsd.php") ?>

                <?php include("utilisation.php") ?>

                <?php include("communaute.php") ?>

                <?php include("port.php") ?>

                <?php include("comparaison.php") ?>

                <?php include("atout.php") ?>

                <?php include("defaut.php") ?>

                <?php include("lien1.php") ?>

                <?php include("lien2.php") ?>

                <?php include("revealjs.php") ?>

                <?php include("zeend.php") ?>

                <?php include("pratique.php") ?>


			</div>

		</div>

		<script src="dist/reveal.js"></script>
		<script src="plugin/zoom/zoom.js"></script>
		<script src="plugin/notes/notes.js"></script>
		<script src="plugin/search/search.js"></script>
		<script src="plugin/markdown/markdown.js"></script>
		<script src="plugin/highlight/highlight.js"></script>
		<script>

			// Also available as an ES module, see:
			// https://revealjs.com/initialization/
			Reveal.initialize({
				controls: true,
				progress: true,
				center: true,
				hash: true,

				// Learn about plugins: https://revealjs.com/plugins/
				plugins: [ RevealZoom, RevealNotes, RevealSearch, RevealMarkdown, RevealHighlight ]
			});

		</script>

	</body>
</html>
