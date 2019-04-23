<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>
	<div class="row">
		<div class="sidebar col-md-3">
		<div class="imagen">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/coletos.jpeg" id="fotoperson">
		</div>
		<div class="menu">
			<ul>
				<li href=".about">ACERCA DE MI</li>
				<li href="#expe">EXPERIENCIA</li>
				<li>EDUCACIÓN</li>
				<li>HABILIDADES</li>
				<li>CONTACTO</li>
			</ul>
		</div>
	</div>

	<!-- Content -->
	<div class="container todo col-md-6 offset-md-4">
		<div class="row datos">
			<h1>AMELIA FAYAD</h1>
			<h4>Av. Mapocho 1522 - amelita182@gmail.com</h4>
		</div>

		<div class="row about">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis quam consequatur numquam quae iste corporis libero veniam ex nemo, quasi accusantium commodi, eius sunt saepe recusandae hic, molestiae doloremque ipsum.</p>
		</div>
		<br>

		<div class="row rrss">
			<i class="fab fa-twitter-square"></i>
			<i class="fab fa-github-square"></i>
			<i class="fab fa-facebook-square"></i>
		</div>

		<br>
		<br>
		<br>
		<hr>
		<br>
		<br>

		<h1>EXPERIENCIA</h1>	
		<div class="row" id="expe">

				<h3>Trabajo numero 1</h3> 
				<h5 class="offset-md-6">2015-2016</h5>
				<h5>murio la vieja</h5>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, ab enim dolorum nihil illum laboriosam magnam adipisci beatae laborum soluta nam, iusto minima cumque ad dicta mollitia, praesentium aperiam laudantium.

				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut soluta, libero qui quod corporis, officia eum deserunt, in nesciunt eligendi voluptas quaerat distinctio blanditiis quia architecto at ea dolorem ad!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, obcaecati quas inventore perspiciatis quod numquam facilis molestias recusandae, labore optio libero? Tenetur officiis distinctio, illo omnis obcaecati placeat optio error.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam neque facere consectetur quae, explicabo? Libero debitis voluptate qui, tempora eius suscipit error ex culpa quo similique quisquam doloribus ab maxime.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sequi modi, tenetur repudiandae natus aliquid, est at mollitia ab vero, dolor quasi illum laboriosam cupiditate autem. Similique tempore at, quisquam?
			
		</div>

		<h1>EDUCACION</h1>
				<div class="row div">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, ab enim dolorum nihil illum laboriosam magnam adipisci beatae laborum soluta nam, iusto minima cumque ad dicta mollitia, praesentium aperiam laudantium.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut soluta, libero qui quod corporis, officia eum deserunt, in nesciunt eligendi voluptas quaerat distinctio blanditiis quia architecto at ea dolorem ad!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, obcaecati quas inventore perspiciatis quod numquam facilis molestias recusandae, labore optio libero? Tenetur officiis distinctio, illo omnis obcaecati placeat optio error.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam neque facere consectetur quae, explicabo? Libero debitis voluptate qui, tempora eius suscipit error ex culpa quo similique quisquam doloribus ab maxime.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sequi modi, tenetur repudiandae natus aliquid, est at mollitia ab vero, dolor quasi illum laboriosam cupiditate autem. Similique tempore at, quisquam?
		</div>

		<h1>HABILIDADES</h1>
				<div class="row div">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, ab enim dolorum nihil illum laboriosam magnam adipisci beatae laborum soluta nam, iusto minima cumque ad dicta mollitia, praesentium aperiam laudantium.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut soluta, libero qui quod corporis, officia eum deserunt, in nesciunt eligendi voluptas quaerat distinctio blanditiis quia architecto at ea dolorem ad!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, obcaecati quas inventore perspiciatis quod numquam facilis molestias recusandae, labore optio libero? Tenetur officiis distinctio, illo omnis obcaecati placeat optio error.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam neque facere consectetur quae, explicabo? Libero debitis voluptate qui, tempora eius suscipit error ex culpa quo similique quisquam doloribus ab maxime.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sequi modi, tenetur repudiandae natus aliquid, est at mollitia ab vero, dolor quasi illum laboriosam cupiditate autem. Similique tempore at, quisquam?
		</div>
	</div>



	</div>



    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>

</html>