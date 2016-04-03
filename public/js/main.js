$(document).ready(function(){

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