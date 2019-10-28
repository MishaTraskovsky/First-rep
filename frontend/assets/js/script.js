$(document).ready(function(){
        
   $('.table').append('<thead><tr><th scope="col">id</th><th scope="col">id_card</th><th scope="col">password</th><th scope="col">phone</th><th scope="col">phone_token</th><th scope="col">phone_token_data</th><th scope="col">doc_photo</th><th scope="col">surname</th><th scope="col">name</th><th scope="col">patronymic</th><th scope="col">date_of_birth</th><th scope="col">gender</th><th scope="col">other_data</th></tr></thead>');
    
    $('#addraw').click(function() {
       $('.table').append('<tr><th scope="row">5</th> <td>newname</td> <td>newsurname</td> <td>@newmale</td></tr>');    
        console.log("addrow");
    });
    
    $('#clear').click(function() {
       $('.table').empty();
       $('.table').append('<thead><tr><th scope="col">id</th><th scope="col">id_card</th><th scope="col">password</th><th scope="col">phone</th><th scope="col">phone_token</th><th scope="col">phone_token_data</th><th scope="col">doc_photo</th><th scope="col">surname</th><th scope="col">name</th><th scope="col">patronymic</th><th scope="col">date_of_birth</th><th scope="col">gender</th><th scope="col">other_data</th></tr></thead>');
        console.log("clear");
    });
   
    $.ajax({
 url: 'https://m.qzo.su/api/users/viewUPD', 
 type: 'GET',
 datatype: 'json',
 data: {},
 success: function ( data) {
                        var data = jQuery.parseJSON(JSON.stringify(data));
                        var html = '';
                       // for (var i = 0; i < data.result.length; i++) {
                       //        html += '<tbody><tr><td>' + data.result.id[i] + '</td><td>' + data.result.id_card[i] + '</td><td>' + data.result.password[i] + '</td><td>' + data.result.phone[i] + '</td><td>' + data.result.phone_token[i] + '</td><td>' + data.result.idphone_token_data[i] + '</td><td>' + data.result.doc_photo[i] + '</td><td>' + data.result.surname[i] + '</td><td>' + data.result.name[i] + '</td><td>' + data.result.patronymic[i] + '</td><td>' + data.result.date_of_birth[i] + '</td><td>' + data.result.gender[i] + '</td><td>' + data.result.other_data[i] + '</td></tr></tbody>';
                        //}
                        console.log(data.result[0].id);
                        $('.upd').append(html);
          },
 error:  function() {
        alert("Error is occured");
        }
    })
 


});
