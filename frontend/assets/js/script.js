$(document).ready(function(){
        
    $('#addraw').click(function() {
       $('table').append('<tr><th scope="row">5</th> <td>newname</td> <td>newsurname</td> <td>@newmale</td></tr>');    
        console.log("addrow");
    });
});