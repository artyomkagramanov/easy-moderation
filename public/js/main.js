$(document).ready(function(){
	$('.image-remove' ).click(function(e){
		e.preventDefault();
		var elem = $(this);
		bootbox.confirm("Are you sure?", function(result) {
  			if( result ) {
  				var id = elem.attr('data-id');
  				// alert( id );	
  			}
  			

		});
	});

	$('.image-tags').on('blur', function(e){
		e.preventDefault();
		var self = $(this);
		var tags = self.val();
		var id = self.attr( 'data-id' );
		var base_url = window.location.href;
		if( base_url.indexOf( '?' ) != -1 ) {
			var arr = base_url.split( '?' );
			base_url = arr[0];
		}
		var csrf_value = $("input[name='_token']").attr('value');
		$.ajax({
		  type: "POST",
		  url: base_url + '/update-tags',
		  data: {photo_id:id, tags:tags, _token:csrf_value},
		  success: function(data){
		  	console.log(data);
		  },
		});

	});


	/*
	 * User verification ( verifid/unverified )
	 */
	$('.verify_checkbox').change(function(){
		var self = $(this);
		var checked;
		if (this.checked) {
			checked = 1;
		} else {
			checked = 0;
		}
		var user_id = self.parent().find('.user_id').val();
		$.ajax({
		  	method: "PUT",
		  	url: "/users/"+user_id,
		  	data: { verified: checked }
		}).then(function(data){
			if(data.status == 'error'){
				$('.panel.panel-default.unverified .error').html(data.message);
				$('.panel.panel-default.unverified .error').show()
				$('.panel.panel-default.unverified .error').focus();
				$('.verify_checkbox').attr("checked", false);
			}else{
				window.location.reload();
			}
		});
	});

	/*
	 * Toggle boolean settings
	 */
	 $('.setting_checkbox').change(function(){
		var self = $(this);
		var setting = self.data('setting');
		var checked;
		if (this.checked) {
			checked = 1;
		} else {
			checked = 0;
		}
		$.ajax({
		  	method: "POST",
		  	url: "/settings",
		  	data: { key: setting, value: checked }
		});
	});

	/*
	 * Template activation ( activate/deactivate )
	 */
	$('.template_active_checkbox').change(function(){
		var self = $(this);
		var checked;
		if (this.checked) {
			checked = 1;
		} else {
			checked = 0;
		}
		var template_id = self.parent().find('.template_id').val();
		$.ajax({
		  	method: "PUT",
		  	url: "/templates/"+template_id+"/activation",
		  	data: { active: checked }
		});
	});

	/*
	 * Delete any resource with delete method.
	 */
	$('.delete').click(function(){
		var self = $(this);
		self.parent().submit();
		return false;
	});
});