<input type='checkbox' id='search-modal-toggle' class='modal-toggle'/>
<label id='search-modal' class='modal-bg' for='search-modal-toggle'>
	<div class="modal-box">
		<form id='modal-search-box' action='<?php echo get_site_url(); ?>' method='GET'>
			<div id='search-text-container'>
				<input type="text" name="s" id='search-text' placeholder="Search">
			</div>
			<input type="submit" value='Search' id='search-button' />
		</form>
	</div>
</label>

<script type='text/javascript'>
document.getElementById('search-modal-toggle').addEventListener('click', function() {
	setTimeout(function() {
		var searchText = document.getElementById('search-text');
		searchText.select();
		searchText.focus();
	}, 100);
})

document.getElementById('search-text-container').addEventListener('click', function(e) {
	e.preventDefault();
});

</script>