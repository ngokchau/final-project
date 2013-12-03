<form role="search" method="get" id="searchform" class="navbar-form navbar-right" action="<?php echo home_url( '/' ); ?>">
	<div class="hidden-xs">
		<div class="form-group">
			<input type="text" value="" name="s" id="s" class="form-control"  placeholder="Search" />
			<!-- <input type="submit" class="btn btn-success" value="Search" /> -->
		</div>
		<button class="btn btn-success" type="button">Search</button>
	</div>
	<div class="visible-xs">
		<div class="input-group">
			<input type="text" value="" name="s" id="s" class="form-control"  placeholder="Search" />
			<span class="input-group-btn">
				<input type="submit" class="btn btn-success" value="Search" />
			</span>
		</div>
	</div>
</form>