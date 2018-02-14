$(document).ready(function(){
 

    $("#hereme").blur(function(){
    console.log("This input field has lost its focus.");
        });

    $('.remove').click(function(event){
        console.log('clicked');
        var number = ($(this).attr('value'));
        console.log(number);
        $.ajax({
            type:'post',
            data : ({name: number}),
            url:'profileedit.php',

            complete: function(data){
                console.log(data.responseText);
                location.reload();
                }
                
        
    });
        });
    $('#about').submit(function(event){
        var text = $('#aboutMe').val();
        console.log(text);
        console.log('sexy');
        $.ajax({
            type:'post',
            data : ({about: text}),
            url:'profileedit.php',

            complete: function(data){
                $('#demo').text(text);
                console.log(data.responseText);
                location.reload();
                }
                
        
    });
    });

    
     $('#location').submit(function(event){
        var text = $('#aboutLoc').val();
        console.log(text);
        console.log('sexy');
        $.ajax({
            type:'post',
            data : ({location: text}),
            url:'profileedit.php',

            complete: function(data){

                $('#demo1').text(text);
                console.log(data.responseText);
                location.reload();
                }
                
        
    });

    }); 


     $('#contacts').submit(function(event){
        alert('hey');
        var cell = $('#cell').val();
        var email = $('#emaill').val();
        
        
        $.ajax({
            type:'post',
            data : ({phone: cell,emailq: email}),
            url:'profileedit.php',

            complete: function(data){

                console.log(data);
                alert(data.responseText);
                location.reload();
                }
                
        
    });

    });

    $('.wish').click(function(event){
        console.log('removing');
        $('.list-group').remove();
        $.ajax({
            type:'post',
            data : ({wish: 'here'}),
            url:'profileedit.php',

            complete: function(data){
                console.log(data.responseText);
               
                if(data.responseText == 'empty'){
                    $('#emptyd').remove();
                    $('.inserter').append('<li id ="emptyd" class="list-group-item" style="margin: 0px auto;width:200px;text-align:center;">EMPTY</li>');
                }

                $('.inserter').append(data.responseText);


               //alert(data.responseText);
                }
                
        
    });
        
    });

    $('.delprof').click(function(event){
        console.log('deleting profile');
        //$('.list-group').remove();
        $.ajax({
            type:'post',
            data : ({action: 'delete'}),
            url:'profileedit.php',

            complete: function(data){
                console.log(data.responseText);
                window.location = 'index.php';
                //$('.inserter').append(data.responseText);
               //alert(data.responseText);
                }
                
        
    });
        
    });

    $('.mess').submit(function(event){
        console.log('sending message');
        //$('.list-group').remove();
        var formData = $(".mess").serialize();
        $.ajax({
            type:'post',
            data : formData,
            url:'profileedit.php',

            complete: function(data){
                console.log(data.responseText);
                //window.location = 'splasshpage.php';
                //$('.inserter').append(data.responseText);
               //alert(data.responseText);
                }
                
        
    });
        
    });

      

    $("#form").on('submit',(function(e) {
  e.preventDefault();
  $.ajax({
    url: "fileupload.php",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   complete: function(data)
      {
        console.log(data.responseText);
        $("#image").attr("src", data.responseText);
    }         
    });
 }));    

    $("#form2").on('submit',(function(e) {
      var number = ($('#button2').attr('value'));
      console.log(number);
      console.log('form 2');
  e.preventDefault();
  $.ajax({
    url: "fileupload2.php?q=" + number,
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   complete: function(data)
      {
        console.log(data.responseText);
        $("#image2").attr("src", data.responseText);
    }         
    });
 }));

   // $('#interested').on('click', (function(event){
      /**function car(){
        alert('sending message');
        var number = ($('#interested').attr('value'));
        var here = ($('.goat').attr('id'));
        var here = '#'+ here;
        alert(here);
        $.ajax({
            type:'post',
            data : ({id:number}),
            url:'interested.php',

            complete: function(data){
                var result = eval(data.responseText);
                console.log(result)
                for (var index in result){
                  
                  $(here).append(result[index]);
                
              }
               
                }
                
        
    });
        
    }  **/
     $('#goback').on('click',(function(){

        location.reload();

    }));
   

    });