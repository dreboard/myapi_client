<!-- Footer -->
<footer>
	<div class="row">
		<div class="col-lg-12">
			<p>Copyright &copy; MyAPI Client 2017</p>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
</footer>

</div>
<!-- /.container -->
<?php
if($_SERVER['APPLICATION_ENV'] === 'development'){
	echo $debugbarRenderer->render();
}
 ?>
</body>

</html>