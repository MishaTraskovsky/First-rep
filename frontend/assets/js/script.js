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
 success: function (data) {
  var html = '';
  data = JSON.parse(data);
     for (var i = 0; i < data.length; i++) {
    html += '<tbody><tr><td>' + data[i].id + '</td><td>' + data[i].id_card + '</td><td>' + data[i].password + '</td><td>' + data[i].phone + '</td><td>' + data[i].phone_token + '</td><td>' + data[i].phone_token_data + '</td><td>' + data[i].doc_photo + '</td><td>' + data[i].surname + '</td><td>' + data[i].name + '</td><td>' + data[i].patronymic + '</td><td>' + data[i].date_of_birth + '</td><td>' + data[i].gender + '</td><td>' + data[i].other_data + '</td></tr></tbody>';
  }
    console.log(html);
  $('.upd').append(html);
},
 error:  function() {
        alert("Error is occured");
        }
    })
 


});
