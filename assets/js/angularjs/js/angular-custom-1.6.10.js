$postModule = angular.module('loginApp', []);
var base_path = document.getElementById('base_path').value;

$postModule.controller('LoginController',function($scope, $http){
	$scope.post = {};
	$scope.post.users = [];
	$scope.tempUser = {};
	$scope.editMode = false;
	$scope.index = '';
	
	var url = base_path+'login/do_login';
	
	$scope.saveUser = function(){
		
		$http({
			method: 'post',
			url: url,
			data: $.param({'user' : $scope.tempUser, 'type' : 'login' }),
			headers: {'Content-Type': 'application/x-www-form-urlencoded'}
		}).then(function (response){
			console.log(response.data);
			var data = response.data;
			if(data.success){
	    		$scope.messageSuccess(data.message);
	    		$scope.loginForm.$setPristine();
	    		$scope.tempUser = {};
				var redirectto = base_path+'main';
				//alert(redirectto);
				window.location.href = redirectto;
	    		
	    	}else{
	    		$scope.messageFailure(data.message);
	    	}
		},function (error){
			console.log(error);
		});
		
	    jQuery('.btn-save').button('reset');
	}
	
	$scope.addUser = function(){
		jQuery('.btn-save').button('loading');
		$scope.saveUser();
		$scope.editMode = false;
		$scope.index = '';
	}
	
	$scope.updateUser = function(){
		$('.btn-save').button('loading');
		$scope.saveUser();
	}
	
	$scope.editUser = function(user){
		$scope.tempUser = {
			id: user.id,
			firstname : user.first_name,
			lastname : user.last_name,
			email : user.user_email,
			companyname : user.company_name,
			designation : user.designation,
			password : user.user_password
		};
		$scope.editMode = true;
		$scope.index = $scope.post.users.indexOf(user);
		//$('#email').css('disabled','disabled');
	}
	
	
	$scope.deleteUser = function(user){
		var r = confirm("Are you sure want to delete this user!");
		if (r == true) {
			$http({
				method: 'post',
				url: url,
				 data: $.param({ 'id' : user.id, 'type' : 'delete_user' }),
				headers: {'Content-Type': 'application/x-www-form-urlencoded'}
			}).then(function (response){
				//console.log(response.data);
				var data = response.data;
				if(data.success){
		    		var index = $scope.post.users.indexOf(user);
		    		$scope.post.users.splice(index, 1);
		    	}else{
		    		$scope.messageFailure(data.message);
		    	}
			},function (error){
				console.log(error);
			});
		}
	}
		
	$scope.init = function(){
		$http({
			method: 'post',
			url: url,
			data: $.param({ 'type' : 'getUsers' }),
			headers: {'Content-Type': 'application/x-www-form-urlencoded'}
		}).then(function (response){
			//console.log(response.data);
			var data = response.data;
			if(data.success && !angular.isUndefined(data.data) ){
	    		$scope.post.users = data.data;
	    	}else{
	    		$scope.messageFailure(data.message);
	    	}
		},function (error){
			console.log(error);
		});
	}
	
	
	
	$scope.messageFailure = function (msg){
		jQuery('.alert-failure-div > p').html(msg);
		jQuery('.alert-failure-div').show('slow');
		jQuery('.alert-failure-div').delay(5000).slideUp(function(){
			jQuery('.alert-failure-div > p').html('');
		});
	}
	
	$scope.messageSuccess = function (msg){
		jQuery('.alert-success-div > p').html(msg);
		jQuery('.alert-success-div').show('slow');
		jQuery('.alert-success-div').delay(5000).slideUp(function(){
			jQuery('.alert-success-div > p').html('');
		});
	}
	
	$scope.getError = function(error, name){
		if(angular.isDefined(error)){
			if(error.required && name == 'name'){
				return "Please enter name";
			}else if(error.email && name == 'email'){
				return "Please enter valid email";
			}else if(error.required && name == 'company_name'){
				return "Please enter company name";
			}else if(error.required && name == 'designation'){
				return "Please enter designation";
			}else if(error.required && name == 'email'){
				return "Please enter email";
			}else if(error.minlength && name == 'name'){
				return "Name must be 3 characters long";
			}else if(error.minlength && name == 'company_name'){
				return "Company name must be 3 characters long";
			}else if(error.minlength && name == 'designation'){
				return "Designation must be 3 characters long";
			}
		}
	}
});

$userModule = angular.module('userApp', []);
$userModule.controller('UserController',function($scope, $http){
	$scope.post = {};
	$scope.post.users = [];
	$scope.tempUser = {};
	$scope.editMode = false;
	$scope.index = '';
	
	var url = base_path+'users/get_users';
	
	$scope.saveUser = function(){
		
		$http({
			method: 'post',
			url: url,
			data: $.param({'user' : $scope.tempUser, 'type' : 'login' }),
			headers: {'Content-Type': 'application/x-www-form-urlencoded'}
		}).then(function (response){
			console.log(response.data);
			var data = response.data;
			if(data.success){
	    		$scope.messageSuccess(data.message);
	    		$scope.loginForm.$setPristine();
	    		$scope.tempUser = {};
				var redirectto = base_path+'main';
				//alert(redirectto);
				window.location.href = redirectto;
	    		
	    	}else{
	    		$scope.messageFailure(data.message);
	    	}
		},function (error){
			console.log(error);
		});
		
	    jQuery('.btn-save').button('reset');
	}
	
	$scope.addUser = function(){
		jQuery('.btn-save').button('loading');
		$scope.saveUser();
		$scope.editMode = false;
		$scope.index = '';
	}
	
	$scope.updateUser = function(){
		$('.btn-save').button('loading');
		$scope.saveUser();
	}
	
	$scope.editUser = function(user){
		$scope.tempUser = {
			id: user.id,
			firstname : user.first_name,
			lastname : user.last_name,
			email : user.user_email,
			companyname : user.company_name,
			designation : user.designation,
			password : user.user_password
		};
		$scope.editMode = true;
		$scope.index = $scope.post.users.indexOf(user);
		//$('#email').css('disabled','disabled');
	}
	
	
	$scope.deleteUser = function(user){
		var r = confirm("Are you sure want to delete this user!");
		if (r == true) {
			$http({
				method: 'post',
				url: url,
				 data: $.param({ 'id' : user.id, 'type' : 'delete_user' }),
				headers: {'Content-Type': 'application/x-www-form-urlencoded'}
			}).then(function (response){
				//console.log(response.data);
				var data = response.data;
				if(data.success){
		    		var index = $scope.post.users.indexOf(user);
		    		$scope.post.users.splice(index, 1);
		    	}else{
		    		$scope.messageFailure(data.message);
		    	}
			},function (error){
				console.log(error);
			});
		}
	}
		
	$scope.init = function(){
		$http({
			method: 'post',
			url: base_path+'users/get_users',
			data: $.param({ 'type' : 'getUsers' }),
			headers: {'Content-Type': 'application/x-www-form-urlencoded'}
		}).then(function (response){
			//console.log(response.data);
			var data = response.data;
			if(data.success && !angular.isUndefined(data.data) ){
	    		$scope.post.users = data.data;
	    	}else{
	    		$scope.messageFailure(data.message);
	    	}
		},function (error){
			console.log(error);
		});
	}
	
	
	
	$scope.messageFailure = function (msg){
		jQuery('.alert-failure-div > p').html(msg);
		jQuery('.alert-failure-div').show('slow');
		jQuery('.alert-failure-div').delay(5000).slideUp(function(){
			jQuery('.alert-failure-div > p').html('');
		});
	}
	
	$scope.messageSuccess = function (msg){
		jQuery('.alert-success-div > p').html(msg);
		jQuery('.alert-success-div').show('slow');
		jQuery('.alert-success-div').delay(5000).slideUp(function(){
			jQuery('.alert-success-div > p').html('');
		});
	}
	
	$scope.getError = function(error, name){
		if(angular.isDefined(error)){
			if(error.required && name == 'name'){
				return "Please enter name";
			}else if(error.email && name == 'email'){
				return "Please enter valid email";
			}else if(error.required && name == 'company_name'){
				return "Please enter company name";
			}else if(error.required && name == 'designation'){
				return "Please enter designation";
			}else if(error.required && name == 'email'){
				return "Please enter email";
			}else if(error.minlength && name == 'name'){
				return "Name must be 3 characters long";
			}else if(error.minlength && name == 'company_name'){
				return "Company name must be 3 characters long";
			}else if(error.minlength && name == 'designation'){
				return "Designation must be 3 characters long";
			}
		}
	}
});

