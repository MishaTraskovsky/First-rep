$(document).ready(function(){
        
    $('#addraw').click(function() {
       $('.table').append('<tr><th scope="row">5</th> <td>newname</td> <td>newsurname</td> <td>@newmale</td></tr>');    
        console.log("addrow");
    });
    
    $('#clear').click(function() {
       $('.table').empty();
       $('.table').append('<thead><tr><th scope="col">#</th><th scope="col">First</th><th scope="col">Last</th><th scope="col">Handle</th></tr></thead>');
        console.log("clear");
    });
});