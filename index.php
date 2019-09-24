<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>helped</title>
</head>
<body>
	<div class="container">
		<header>
			<div class="col-3">
				<div class="row">
					<h1>Helped</h1>
				</div>
				<div class="row">
					<p><strong>Escolha a melhor solução para você!</strong><p>
				</div>
			</div>
			<div class="col-9">
					<ul class="nav">
					  <li class="nav-item">
					    <a class="btn btn-outline-primary" href="#">Home</a>
					  </li>
					  <li class="nav-item">
					    <a class="btn btn-outline-primary" href="#">Cadastrar-se</a>
					  </li>
					  <li class="nav-item">
					    <a class="btn btn-outline-primary" href="#">Contato</a>
					  </li>
				</ul>
			</div>
		</header>
		<hr>

		<!-- The core Firebase JS SDK is always required and must be listed first -->
		<script src="https://www.gstatic.com/firebasejs/6.6.2/firebase-app.js"></script>

		<!-- TODO: Add SDKs for Firebase products that you want to use
		     https://firebase.google.com/docs/web/setup#available-libraries -->
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-analytics.js"></script>

		<script>
		  // Your web app's Firebase configuration
		  var firebaseConfig = {
		    apiKey: "AIzaSyDG50N8agYXmabV16ZKEeB7EGLzZQTHiKU",
		    authDomain: "vagou-1569281294294.firebaseapp.com",
		    databaseURL: "https://vagou-1569281294294.firebaseio.com",
		    projectId: "vagou-1569281294294",
		    storageBucket: "",
		    messagingSenderId: "203994144133",
		    appId: "1:203994144133:web:77b931d00365cd75a6b8ec",
		    measurementId: "G-L41MHZKE3P"
		  };
		  // Initialize Firebase
		  firebase.initializeApp(firebaseConfig);
		  firebase.analytics();
		</script>


		<!--Adicionando JS do Bootstrap-->
		<script type="text/javascript">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		</script>
	</div>

</body>
</html>
