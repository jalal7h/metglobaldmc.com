
<form name="mg_searchbox" class="mg_searchbox cl_l2r" method="POST" action="{_FULL_URL}">
	
	<div class="date">
		<label>
			<span>From:</span>
			<icon class="fa fa-calendar cl_l2_t"></icon>
			<input autocomplete="off" value="{date_from}" required type="text" name="date_from">
		</label>
		<label>
			<span>To:</span>
			<icon class="fa fa-calendar cl_l2_t"></icon>
			<input autocomplete="off" value="{date_to}" required type="text" name="date_to">
		</label>
		<input type="hidden" name="date_result">
	</div>

	<div class="type">
		<label><input type="radio" name="service" value="transfer" > Transfer</label>
		<label><input type="radio" name="service" value="dailytour" > Daily Tour</label>
		<script>mg_searchbox.service.value = "{service}";</script>
	</div>

	<div class="position">
		<input autocomplete="off" type="richbox" name="position_id" feed="{feed}" list_limit="20" char_limit="2" value="{position_id}" >
	</div>
	<input type="submit" value="GO!" class="cl_l2r">

</form>



