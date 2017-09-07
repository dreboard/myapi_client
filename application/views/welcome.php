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
			<hr>
			<?php
			$headers["Authorization"] = "Basic  d2ViUG9ydGFsOldlYiBQb3J0YWwgUGFzc3dvcmQu";
			$headers["http_Authorization"] = "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsIng1dCI6IktDbUoyOEY4eXFtdm1EYzB4MWpzYVhmbHlTVSIsImtpZCI6IktDbUoyOEY4eXFtdm1EYzB4MWpzYVhmbHlTVSJ9.eyJpc3MiOiJodHRwczovL2FwaS5pbmNlbnRpc29mdC5jb206NDQzMzMiLCJhdWQiOiJodHRwczovL2FwaS5pbmNlbnRpc29mdC5jb206NDQzMzMvcmVzb3VyY2VzIiwiZXhwIjoxNTAxMDA4OTYxLCJuYmYiOjE1MDEwMDUzNjEsImNsaWVudF9pZCI6IndlYlBvcnRhbCIsImNsaWVudF9pc0ludGVybmFsIjoidHJ1ZSIsImNsaWVudF90eXBlIjoiQXBwbGljYXRpb24iLCJjbGllbnRfcmVzb3VyY2VOYW1lIjoid2ViUG9ydGFsIiwiY2xpZW50X2FwcGxpY2F0aW9uTmFtZSI6IndlYlBvcnRhbCIsInNjb3BlIjpbIk1lc3NhZ2VzIiwiTWVzc2FnZVRlbXBsYXRlcyIsIlVzZXJzIl19.i0Dpp2NjnmK6DmaL6vwnycXA0f3TBc0Zf0ZU45a_6-A3FH7Iee83-yWW1_LzfkrCA2XuX0gvr236_0VZErLtJt9hbdBek0kikWHeoujpEU_sRjZPJkywhqyOJuz5wLSbxczeYNWktNE2Mu4pHJaZtwgN39vW8PO8zxO5agBz2znrTaQv2Jf9B4YH2w_qKuWqTVwgIz9_TzjUEn2h8ALY_zSv2DZaDKKUPn_3gM_ARNxbLuNP4K28px8S2AWBRROMhy3yRUxCGzOMhz1udT9pHCHoqgHpHUksiQqR--Vn6i60Czg0WU6rKwgrLjxdgJSFE1ZXqQPF8TCWg02csC8cJg";
			$result = [];
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, API_URL);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1) ;
			if(!$curlData = curl_exec($ch)){
				$result['err'] = curl_error($ch);
				//var_dump($result);
			} else {
				//var_dump(curl_exec($ch));
			}

			?>
			<hr>
			<a id="ajax_btn" class="btn btn-primary" href="#">Get Users <span class="glyphicon glyphicon-chevron-right"></span></a>
			<a id="users_btn" class="btn btn-primary" href="#">Get Users <span class="glyphicon glyphicon-chevron-right"></span></a>
			<div id="results"></div>
			<div class="table-responsive">
				<table id="usersTbl" class="table">
					<tr id="usersTblHdr"><th>Name</th><th>Email</th></tr>

				</table>
			</div>



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
				<h4>Call Types</h4>
				<ul>
					<li>Onload (GET)</li>
					<li>Request (GET)</li>
					<li>Request (POST)</li>
				</ul>
			</div>

		</div>

	</div>
	<!-- /.row -->

	<hr>



<?php include 'inc/footer.php'; ?>