$(document).ready(function(){
        
   // $('.table').append('<thead><tr><th scope="col">#</th><th scope="col">First</th><th scope="col">Last</th><th scope="col">Handle</th></tr></thead><tbody><tr><th scope="row">1</th><td>Mark</td><td>Otto</td><td>@mdo</td></tr><tr><th scope="row">2</th><td>Jacob</td><td>Thornton</td><td>@fat</td></tr><tr><th scope="row">3</th><td>Larry</td><td>the Bird</td><td>@twitter</td></tr></tbody>');
    
    $('#addraw').click(function() {
       $('.table').append('<tr><th scope="row">5</th> <td>newname</td> <td>newsurname</td> <td>@newmale</td></tr>');    
        console.log("addrow");
    });
    
    $('#clear').click(function() {
       $('.table').empty();
       $('.table').append('<thead><tr><th scope="col">#</th><th scope="col">First</th><th scope="col">Last</th><th scope="col">Handle</th></tr></thead>');
        console.log("clear");
    });
   
    $.ajax({
 url: 'https://m.qzo.su/api/users/viewUPD', 
 type: 'GET',
 datatype: 'json',
 data: {},
 jsonpCallback: 'drawTable'
 success: function(data){
    // Check if username is available or not
    console.log(data); 
 },
 error: function(){
    alert('Much wrong, such sad');
 }
});

function drawTable(data) {
  var html = '';
  for (var i = 0; i < data.length; i++) {
    html += '<tr><td>' + data[i].course + '</td><td>' + data[i].name + '</td><td>' + data[i].price + '</td></tr>';
  }
  $('.table .upd').append(html);
});