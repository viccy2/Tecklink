//AJAX REQUESTS

//User Registration Function
function RegisterUser(){

   $(document).ready(function() {
         
       
            //Geting the user sign up Form
            var form = $("#userform");
            var formData = new FormData($("#userform")[0]);
            // alert(formData);
            //Sending the Data Using Ajax Post
             $.ajax({
              url: form.attr("action"),
              type: 'POST',
              data: formData,
              success: function(data){
                $("#error").show();
                $('#error').text('');
                $('#error').text(data);
                var b = data;
                var match = data.match("Account created successfully");
                var matchs = data.match("Account already created");

              //Condition for successful Registration
                if (match!=null) {
                   
                   $(this).hide();
                    Lobibox.notify('success', {
                    size: 'mini',
                    msg: data
               		 });
                setTimeout(function(){
                window.location.href = '../activate_account';
                },5000);
                };

               //Condition for unsuccessful Registration 
                if (matchs!=null) {
                 var d= Lobibox.notify('error', {
                    size: 'mini',
                    msg: data
                	});
                };
                //Applying AI Text to Sppech
                var jarvis = new Artyom();
                 jarvis.say(data);
                 },
              error: function(data){
                alert("not success");
              },
             
              cache: false,
              contentType: false,
              processData: false
            });
      
         });

	
};

//User Login Function
function UserLogin(){


	   	$(document).ready(function() {
			var form = $("#signinform");
        	var formData = new FormData($("#signinform")[0]);
		 	 $.ajax({
              url: form.attr("action"),
              type: 'POST',
              data: formData,

               success: function(data){
                $("#error").show();
                $('#error').text('');
                $('#error').text(data);
                var b = data;
                var match = data.match("Login successfull");
                var matchs = data.match("Incorrect Password or Email");
                var matches = data.match("Your account has not been activated");
               
                if (match!=null) {
                   $(this).hide();
                    Lobibox.notify('success', {
                    size: 'mini',
                    msg: data
                });

                setTimeout(function(){
                window.location.href = '../newsfeed';
                },5000);
                };
                if (matchs!=null) {
                 var d= Lobibox.notify('error', {
                    size: 'mini',
                    msg: data
                });
                };
                if (matches!=null) {
                 var d= Lobibox.notify('error', {
                    size: 'mini',
                    msg: data
                });
                };

                var jarvis = new Artyom();
                 jarvis.say(data);
            
                
                  
              },
              error: function(data){
                alert("not success");
              },
             
              cache: false,
              contentType: false,
              processData: false
            });

   });



};

//Function to Activate Account
function Activate(){
		$(document).ready(function() {
			var form = $("#activateform");
        	var formData = new FormData($("#activateform")[0]);

        	  $.ajax({
              url: form.attr("action"),
              type: 'POST',
              data: formData,

               success: function(data){
                $("#error").show();
                $('#error').text('');
                $('#error').text(data);
                var b = data;
                var match = data.match("Activation successfull");
                var matchs = data.match("Incorrect email or activation code");
                var matches = data.match("Your account has been activated already");

                if (match!=null) {
                   $(this).hide();
                    Lobibox.notify('success', {
                    size: 'mini',
                    msg: data
                });
                 setTimeout(function(){
                window.location.href = 'index';
                },5000);
                };

                if (matchs!=null) {
                 var d= Lobibox.notify('error', {
                    size: 'mini',
                    msg: data
                });
                };

                if (matches!=null) {
                 var d= Lobibox.notify('error', {
                    size: 'mini',
                    msg: data
                });
                };
                 var jarvis = new Artyom();
                 jarvis.say(data);
              },
              error: function(data){
                alert("not success");
              },
             
              cache: false,
              contentType: false,
              processData: false
            });


			
   });
};


//User Registration Function
function RegisterCompany(){
   $(document).ready(function() {
            //Geting the user sign up Form
            var form = $("#companyform");
            var formData = new FormData($("#companyform")[0]);
            // alert(formData);
            //Sending the Data Using Ajax Post
             $.ajax({
              url: form.attr("action"),
              type: 'POST',
              data: formData,
              success: function(data){
                $("#error").show();
                $('#error').text('');
                $('#error').text(data);
                var b = data;
                var match = data.match("Account created successfully");
                var matchs = data.match("Account already created");

              //Condition for successful Registration
                if (match!=null) {
                   
                   $(this).hide();
                    Lobibox.notify('success', {
                    size: 'mini',
                    msg: data
                   });
                setTimeout(function(){
                // window.location.href = '../activate_account';
                },5000);
                };

               //Condition for unsuccessful Registration 
                if (matchs!=null) {
                 var d= Lobibox.notify('error', {
                    size: 'mini',
                    msg: data
                  });
                };
                //Applying AI Text to Sppech
                var jarvis = new Artyom();
                 jarvis.say(data);
                 },
              error: function(data){
                alert("not success");
              },
             
              cache: false,
              contentType: false,
              processData: false
            });
      
         });

  
}