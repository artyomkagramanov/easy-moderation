$(document).ready(function(){
	
	/*
		Handle social button click event.
	*/
	$('.social-login').on('click' , function(event){
		return manageUserDetails($(this).data('url') , event);
	});


	/*
		Helper functions.
	*/

	var openWindow = function(url , name)
	{
		var width = 500;
		var height = 500;
		var left=(screen.width/2)-(width/2);
		var top=(screen.height/2)-(height/2);
		var win = window.open(url , name, 'height='+height+',width='+width+',top='+top+',left='+left);
		return win;
	};

	var redirectToRegistrationPage = function(user)
	{
		var redirectURI = '/social/middle?';
		for(var k in user)
		{
			if(k == 'avatar')
			{
				user[k] = user[k].replace( /&/g , '%26');
				console.log(user[k]);
			}
			redirectURI += '&'+k+'='+user[k];
		}
		window.location.href = redirectURI;
	}

	var manageUserDetails = function(url , event)
	{
		event.preventDefault();
		var win = openWindow(url , 'Sign up with Social Network.');
		var interval = setInterval(function(){
			try{
				if(win.state)
				{
					var state = win.state.state;
					var user = win.state.user;
					switch(state)
					{
						case 'new' 		: 	redirectToRegistrationPage(user);	break;
						case 'existing' : 	window.location.href = '/admin'; break;
					}
					clearInterval(interval);
				}
			} catch(err){}},1000)
	}
});