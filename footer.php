<footer class="blog-footer">
	<p>&copy; <?php echo Date('Y') ?> - <?php bloginfo('name') ?> </p>
	<p>
		<a href="#">Back to top</a>
	</p>
</footer>

<?php wp_footer(); ?>


<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script> -->
<script>
	const tooltips = document.querySelectorAll('.tt')
	tooltips.forEach(t => {
		new bootstrap.Tooltip(t)
	})
</script>
</body>

</html>