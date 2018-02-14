$(document).ready(function(){

    $("#formLogin").submit(function(event){
        console.log('yebo yes');
        var flag = 'yay';

        var formData = $("#formLogin").serialize();
      
        $.ajax({
            type:'post',
            data : formData,
            url:'formLogin.php',

            success: function(data){
                console.log(data);
                 console.log(data);
               // var text = data;
        
    
                if(data == 'yay'){
                console.log('logged in');
                //alert(text);
                     window.location = 'otherpage.php';
                 }else if (data =='nay'){
                    console.log('watcha doing');
                    $('#error').empty();
                    $('#error').append('<div class="alert alert-danger">password or username is incorrect</div>');
                 }
    
                     
                   
                }
                
        
    });
         
    event.preventDefault();

});

         $("#formRegister").submit(function(event){

        var formData = $("#formRegister").serialize();
      
        $.ajax({
            type:'post',
            data : formData,
            url:'formRegister.php',

            success: function(data){
                    console.log(data);
              
                 if(data == 'yay'){
                    alert('you are registered');
                    window.location = 'otherpage.php';
                 }else if(data == 'user'){
                    console.log(data);
                    console.log('something went wrong');
                     $('#error2').empty();
                    $('#error2').html('<div class="alert alert-danger">username is already taken</div>');
                 }else if(data == 'email'){
                     $('#error2').empty();
                    $('#error2').html('<div class="alert alert-danger">email is already taken</div>');

                 }else if(data == 'password'){
                     $('#error2').empty();
                    $('#error2').html('<div class="alert alert-danger">passwords dont match</div>');
                 }else{
                     $('#error2').empty();
                    $('#error2').html('<div class="alert alert-danger">re-check information</div>');
                }
                    }
                
        
    });
         
    event.preventDefault();

        });
$("#hey").submit(function(event){
    
        $('.list-group').remove();
      
        var formData = $("#hey").serialize();
       
      
        $.ajax({
            type:'post',
            data : formData,
            url:'search.php',

            success: function(data){
                console.log('info has returned');
                $('.alert').remove();
                $("#full").append(data);
                
                   
                }
                
        
    });
         
    event.preventDefault();


});

  $('.wishlist').click(function(event){
        console.log('clicked');
        console.log('clicked');
        var number = ($(this).attr('value'));
        alert(number);
        $.ajax({
            type:'post',
            data : ({name: number}),
            url:'wishlist.php',

            success: function(data){
                console.log(data);
                //location.reload();
                }
        });
        
 });

 $('.profilename').on('click',function(event){
    console.log('profile');
    var PProf = $(this).attr('value');
    console.log(PProf);
    $.ajax({
            type:'post',
            data : ({person: PProf}),
            url:'loadprofile.php',

            success: function(data){
                console.log(data);
                window.location = 'profile.php';
                //location.reload();
                }

    });



 });
        

});