<?php include 'inc/header.php'; ?>
	<div class="row">

		<!-- Blog Entries Column -->
		<div class="col-md-8">

			<h1 class="page-header">
				MyAPI Client
			</h1>
			<p class="lead">
				by <a href="https://github.com/dreboard/myapi">Responses from MyAPI</a>
			</p>
			<hr>

			<p>Front end companion of MyAPI used to make calls to endpoints.</p>
			<ul>
				<li>Guzzle PSR7 Client</li>
				<li>jQery AJAX</li>
			</ul>
			<a id="ajax_btn" class="btn btn-primary" href="#">Get Request <span class="glyphicon glyphicon-chevron-right"></span></a>
			<div id="results"></div>
			
			<hr>


		</div>

		<!-- Blog Sidebar Widgets Column -->
		<div class="col-md-4">

			<div class="well">
				<h4>Make Post Call</h4>
				<div class="input-group">
					<input name="post_var" value="" id="post_var" type="text" class="form-control">
					<span class="input-group-btn">
                            <button id="post_btn" class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
				</div>
				<!-- /.input-group -->
			</div>

			<!-- Blog Categories Well -->
			<div class="well">
				<h4>Post Response</h4>
				<div class="row">
					<div class="col-lg-12">
						<p id="post_response"></p>
					</div>
					<!-- /.col-lg-6 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- Side Widget Well -->
			<div class="well">
				<h4>Side Widget Well</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
			</div>

		</div>

	</div>
	<!-- /.row -->

	<hr>



<?php include 'inc/footer.php'; ?>