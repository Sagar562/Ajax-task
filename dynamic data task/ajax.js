$(document).ready(function(){
    $.ajax({
        url : 'backend.php',
        method : 'GET',
        dataType : 'json',
        success : function(res){
            if (res) 
            {
                $('#fname').val(res.first_name);
                $('#lname').val(res.last_name);
                $('#email').val(res.email);
                $('#address').val(res.address);
            } 
            else
            {
                alert('No data found');
            }
        }
    })
})
   