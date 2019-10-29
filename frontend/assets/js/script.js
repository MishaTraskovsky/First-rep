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

    function table ( data) {
                        var data = jQuery.parseJSON(JSON.stringify(data));
                        var html = '';
                        for (var i = 0; i < data.result.length; i++) {
                              html += '<tbody><tr><td>' + data.result[i].id + '</td><td>' + data.result[i].id_card + '</td><td>' + data.result[i].password + '</td><td>' + data.result[i].phone + '</td><td>' + data.result[i].phone_token + '</td><td>' + data.result[i].idphone_token_data + '</td><td>' + data.result[i].doc_photo + '</td><td>' + data.result[i].surname + '</td><td>' + data.result[i].name + '</td><td>' + data.result[i].patronymic + '</td><td>' + data.result[i].date_of_birth + '</td><td>' + data.result[i].gender + '</td><td>' + data.result[i].other_data + '</td></tr></tbody>';
                        }
                        $('.upd').append(html);
          } 
    
$.ajax({
 url: 'https://m.qzo.su/api/users/viewUPD', 
 type: 'GET',
 datatype: 'json',
 data: {},
 success: function (data) {
                        table ( data);
          },
 error:  function() {
        alert("Error is occured");
        }
    })
    
    $('#sortA').click(
    $.ajax({
        url: 'https://m.qzo.su/api/users/viewUPDsortA', 
        type: 'GET',
        datatype: 'json',
        data: {},
        success:    function(){
                    table ( data);
                    $('.table').empty();
                    $('.table').append('<thead><tr><th scope="col">id</th><th scope="col">id_card</th><th scope="col">password</th><th scope="col">phone</th><th scope="col">phone_token</th><th scope="col">phone_token_data</th><th scope="col">doc_photo</th><th scope="col">surname</th><th scope="col">name</th><th scope="col">patronymic</th><th scope="col">date_of_birth</th><th scope="col">gender</th><th scope="col">other_data</th></tr></thead>');
                    console.log("Sort by ASC succsess");
                    }
        }))
 

});
