<!DOCTYPE html>
<html>
<head>
	<title>Kotak Saran Online</title>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="semantic/components/reset.css">
	<link rel="stylesheet" type="text/css" href="semantic/components/site.css">

	<link rel="stylesheet" type="text/css" href="semantic/components/container.css">
	<link rel="stylesheet" type="text/css" href="semantic/components/grid.css">
	<link rel="stylesheet" type="text/css" href="semantic/components/header.css">
	<link rel="stylesheet" type="text/css" href="semantic/components/image.css">
	<link rel="stylesheet" type="text/css" href="semantic/components/menu.css">

	<link rel="stylesheet" type="text/css" href="semantic/components/divider.css">
	<link rel="stylesheet" type="text/css" href="semantic/components/dropdown.css">
	<link rel="stylesheet" type="text/css" href="semantic/components/segment.css">
	<link rel="stylesheet" type="text/css" href="semantic/components/button.css">
	<link rel="stylesheet" type="text/css" href="semantic/components/input.css">
	<link rel="stylesheet" type="text/css" href="semantic/components/label.css">
	<link rel="stylesheet" type="text/css" href="semantic/components/popup.css">
	<link rel="stylesheet" type="text/css" href="semantic/components/list.css">
	<link rel="stylesheet" type="text/css" href="semantic/components/icon.css">
	<link rel="stylesheet" type="text/css" href="semantic/components/sidebar.css">
	<link rel="stylesheet" type="text/css" href="semantic/components/transition.css">
	<!-- <link rel="stylesheet" type="text/css" href="semantic/semantic.min.css"> -->
	<style type="text/css">

	.hidden.menu {
	  display: none;
	}

	.masthead.segment {
	  min-height: 700px;
	  padding: 1em 0em;
	}
	.masthead .logo.item img {
	  margin-right: 1em;
	}
	.masthead .ui.menu .ui.button {
	  margin-left: 0.5em;
	}
	.masthead h1.ui.header {
	  margin-top: 3em;
	  margin-bottom: 0em;
	  font-size: 4em;
	  font-weight: normal;
	}
	.masthead h2 {
	  font-size: 1.7em;
	  font-weight: normal;
	}

	.ui.vertical.stripe {
	  padding: 8em 0em;
	}
	.ui.vertical.stripe h3 {
	  font-size: 2em;
	}
	.ui.vertical.stripe .button + h3,
	.ui.vertical.stripe p + h3 {
	  margin-top: 3em;
	}
	.ui.vertical.stripe .floated.image {
	  clear: both;
	}
	.ui.vertical.stripe p {
	  font-size: 1.33em;
	}
	.ui.vertical.stripe .horizontal.divider {
	  margin: 3em 0em;
	}

	.quote.stripe.segment {
	  padding: 0em;
	}
	.quote.stripe.segment .grid .column {
	  padding-top: 5em;
	  padding-bottom: 5em;
	}

	.footer.segment {
	  padding: 5em 0em;
	}

	.secondary.pointing.menu .toc.item {
	  display: none;
	}

	@media only screen and (max-width: 700px) {
	  .ui.fixed.menu {
	    display: none !important;
	  }
	  .secondary.pointing.menu .item,
	  .secondary.pointing.menu .menu {
	    display: none;
	  }
	  .secondary.pointing.menu .toc.item {
	    display: block;
	  }
	  .masthead.segment {
	    min-height: 350px;
	  }
	  .masthead h1.ui.header {
	    font-size: 2em;
	    margin-top: 1.5em;
	  }
	  .masthead h2 {
	    margin-top: 0.5em;
	    font-size: 1.5em;
	  }
	}
	</style>
	<script src="semantic/semantic.min.js"></script>
	<script src="semantic/jquery.min.js"></script>
</head>
<body>
		<!-- Page Contents -->
		<div class="pusher">
			<div class="ui inverted vertical masthead center aligned segment">
				<div class="ui container">
				<div class="ui large secondary inverted pointing menu">
					<a class="active item">Beranda</a>
					<a class="item">Sampaikan Aspirasi</a>
					<a href="#cekaspirasi" class="item">Cek Balasan</a>
				</div>
				</div>

				<div class="ui text container">
					<h1 class="ui inverted header">Kotak Saran Online</h1>
					<h2>Sampaikan kritik, saran, atau pertanyaan Anda kepada kami.</h2>
					<a class="ui huge teal button">Mulai <i class="right arrow icon"></i></a>
				</div>
			</div>
			<div id="cekaspirasi" class="ui vertical stripe segment">
				<div class="ui middle aligned stackable grid container">
					<div class="row">
						<div class="eight wide column">
							<h3 class="ui header">Sudah menyampaikan aspirasi?</h3>
							<p>Silakan cek balasan dari aspirasi Anda melalui formulir di bawah ini. Gunakan nomor tiket yang diberikan oleh sistem.</p>
							<form action="index.html" method="POST">
							<div class="ui action left icon input">
								<i class="search icon"></i>
								<input type="text" placeholder="Masukkan nomor tiket">
								<button class="ui teal button">CEK</button>
							</div>
							</form>
							<div class="ui divider"></div>
							<p>Setiap aspirasi yang disampaikan otomatis mendapatkan nomor tiket. Lupa dengan nomor tiket? Cek email Anda.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="ui inverted vertical footer segment">
				<div class="ui container">
					<div class="ui stackable inverted divided equal height stackable grid">
						<div class="three wide column">
							<h4 class="ui inverted header">Tentang</h4>
							<div class="ui inverted link list">
								<a href="#" class="item">Apa itu Kotak Saran Online?</a>
								<a href="#" class="item">Siapa kami?</a>
								<a href="#" class="item">Kontak</a>
							</div>
						</div>
						<div class="ten wide column">
							<h4 class="ui inverted header">Kotak Saran Online</h4>
							<p>&copy; 2016. Kelompok Praktik Cloud Computing STMIK AKAKOM Yogyakarta.</p>
						</div>
					</div>
				</div>
			</div>
	</div>
</body>
</html>
