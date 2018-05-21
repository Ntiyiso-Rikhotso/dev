
<tbody>
	
	<tr>
		<td colspan="3">
			Please complete the form below to bid
		</td>
	</tr>
	
	<tr>
		<td>
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">@</span>
			</div>
			<input <?php echo $isLoggedIn ? 'disabled' : '';?> type="text" value="<?php echo $isLoggedIn ? $userInfo->email : '';?>" form="bid-now" name="email" class="form-control" placeholder="Email address" aria-label="email" aria-describedby="basic-addon1">
		</div>
		</td>
		<td>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">R</span>
				</div>
				<input type="text" form="bid-now" name="amount" label="bid amount" class="form-control" aria-label="Amount (to the nearest rand)">
			</div>
		</td>
		<td><button type="button" form="bid-now" class="btn btn-success btn-block btn-md bid-submit">Submit</button></td>
	</tr>
	
</tbody>

