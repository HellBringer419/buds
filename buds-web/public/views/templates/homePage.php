<head>
</head>
<style type="text/css">
	.bg{
		width: 100vw;
		min-height: 100vh;
		background-image: linear-gradient(220deg, #C33764cc,#1D2671cc);
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		z-index: 0;
	}
	.container{
		z-index: 10;
	}
	#headingbox{
		display: flex;
		width: 100%;
		margin: 3em 1.8em 1.2em;
		box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.75);
		border-radius: 5px;
		padding:1.2em;
		min-height: 200px;
		align-items: center;
		justify-content: center;
		text-align: center;
		color: #fff;

	}
	.card-curve{
		background: #fff;
		border-radius: 0 30%;
		height: 100%;
		min-height: 150px;
		padding-top: 1.5em;
		padding-bottom: 1.5em;
		cursor: pointer;

	}
	.card-curve:hover{
		box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.75);
		text-decoration: none;
	}
	a{
		text-decoration: none !important;
	}
	.card-curve img{
		width: 90%; 
	}
	#headingbox img{
		max-width: 110px;
	}
	.labelbox{
		border-left: 2.5px solid #2d4665;
		color: #666;
	}
	.label{
		text-align: center;
		font-weight: 700;
		color: #111;
		font-size: 1.5em;
		margin-bottom: 1.8em;
	}
	#bottom-box{
		margin-top: 150px;
	}
	.heading{
		font-size: 5em;
	}
	.subheading{
		color: #ededed;
	}

</style>

<div class="bg">

	<div id='grad-overlay'></div>

	<div class="container">
		<div id='headingbox' class="">
			<div class="row align-items-center">
				<div class="col-12">
					<img src="assets/logos/favicon.png">
				</div>
				<div class="col-12">
					<h1 class="heading">BUDS</h1>
					<h2 class="subheading">"We are here to help you"</h2>
				</div>
			</div>
		</div>

		<div id="bottom-box">
			<div class="container">
				<div  class="row">
					<div class="col">
						<a href="#!/grade">
						<div class="card-curve">
							<div class="row align-items-center">
								<div class="col-5"><img src="assets/icons/grades.png"></div>
								<div class="col-6  labelbox ">
									<p class="label">Grade Yourself</p>
									<p>Test yourself with beautifully design and structure test content</p>
								</div>
							</div>
						</div>
						</a>
					</div>

					<div class="col">
						<a href="#!/library">
						<div class="card-curve">
							<div class="row align-items-center">
								<div class="col-5"><img src="assets/icons/books.png"></div>
								<div class="col-6  labelbox ">
									<p class="label">Materials for you</p>
									<p>Get all the personalised,easy to understand and interactive study materials.</p>
								</div>
							</div>
						</div>
						</a>
					</div>

					<div class="col">
						<a href="#!/login">
						<div class="card-curve">
							<div class="row align-items-center">
								<div class="col-5"><img src="assets/icons/complain.png"></div>
								<div class="col-6  labelbox ">
									<p class="label">Grievances</p>
									<p>Let Us know what bothers you and we are here to solve it.</p>
								</div>
							</div>
						</div>
						</a>
					</div>	 
				</div>
			</div>
		</div>
	</div>
</div>
