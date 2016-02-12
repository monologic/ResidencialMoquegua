<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>@yield('title', 'Default') Panel de Administración</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/ve.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/animate.css') }}">
	
	</head>
<style>
       *{
       	padding: 0;
        margin: 0;  

        }
        
        header{
			
        	position:relative;
			width: 100%;
			margin: 0;
        }
        .banner{
        	display: block;
        	position:relative;
        	top:0px;
        	padding: 0;
        }
        .main{
        	
        	background-color:white;
        
        }

       .cuestion{
			padding: 8%;
			background-color:white;  

       }

       .menu-fixed {
				position:fixed;
				z-index:1000;
				top:0;
				/*max-width:1000px;*/
				left:0;
				width:100%;
				box-shadow:0px 4px 3px rgba(0,0,0,.5);
		}
        .articulos{
        	display: block;
        	position: relative;
			height: 1000px;
        }     
    
 </style>
<body>

	<header class="">
		

				@include('admin.templates.partials.nav')

	</header>
	
	
		<div class="container-fluid con">
			<div class="main row">

					<section class="col-sm-6 col-md-6 cuestion wow bounceInLeft" data-wow-offset="500" data-wow-delay="1s">
							@yield('content')
					</section>


					<section class="col-sm-6 col-md-6 cuestion wow bounceInRight" data-wow-offset="500">
							 <img src="{{ asset('imagen/fon.jpg') }}" class="img-thumbnail img-responsive">
					</section>

			</div>
		

		</div>
	
	
	<div>
		

	</div>







	<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/jquery-1.12.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/wow.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/scrol.js') }}"></script>

	<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>
  
</body>
</html>