$(document).ready(function(){

    function table (data) {
        var data = jQuery.parseJSON(JSON.stringify(data));
        var html = '';
        for (var i = 0; i < data.result.length; i++) {
            html += '<tbody><tr><td>' + data.result[i].id + '</td><td>' + data.result[i].id_card + '</td><td>' + data.result[i].password + '</td><td>' + data.result[i].phone + '</td><td>' + data.result[i].phone_token + '</td><td>' + data.result[i].idphone_token_data + '</td><td>' + data.result[i].doc_photo + '</td><td>' + data.result[i].surname + '</td><td>' + data.result[i].name + '</td><td>' + data.result[i].patronymic + '</td><td>' + data.result[i].date_of_birth + '</td><td>' + data.result[i].gender + '</td><td>' + data.result[i].other_data + '</td></tr></tbody>';
        }
    $('.upd').append(html);
    }
    
    function update(){
        $('.table').empty();
        $('.table').append('<thead><tr><th scope="col">id</th><th scope="col">id_card</th><th scope="col">password</th><th scope="col">phone</th><th     scope="col">phone_token</th><th scope="col">phone_token_data</th><th scope="col">doc_photo</th><th scope="col">surname</th><th scope="col">name</th><th scope="col">patronymic</th><th scope="col">date_of_birth</th><th scope="col">gender</th><th scope="col">other_data</th></tr></thead>'); 
    }

    $('#showInput').click(function(){
        $('#inputs').show(600);        
    });
        
    $('#clear').click(function() {
        update();
        console.log("clear");
    });



    function display(){
        $.ajax({
        url: 'https://m.qzo.su/api/users/viewUPD', 
        type: 'GET',
        datatype: 'json',
        data: {},
        success:function (data){
                            update();
                            table (data);
                            console.log("downloaded")
                },
        error:function() {
                alert("Error is occured");
              }    
        });
    }
    
    $('.sortA').click(function(){
        $.ajax({
            url: 'https://m.qzo.su/api/users/viewUPDsortA', 
            type: 'GET',
            datatype: 'json',
            data: {},
            success:function(data){
                        update();                   
                        table ( data);
                        console.log("Sort by ASC succsess");
                    }
            });
    });
   
    $('.sortD').click(function(){
        $.ajax({
            url: 'https://m.qzo.su/api/users/viewUPDsortD', 
            type: 'GET',
            datatype: 'json',
            data: {},
            success:function(data){
                        update();
                        table ( data);
                        console.log("Sort by DESC succsess");
                    }
        });
    });
display();    
    $('#add').click(function(){
        var id_card = $('#id_card').val();
        var password = $('#password').val();
        var phone = $('#phone').val();
        var phone_token = $('#phone_token').val();
        var phone_token_data = $('#phone_token_data').val();
        var doc_photo = $('#doc_photo').val();
        var surname = $('#surname').val();
        var name = $('#name').val();
        var patronymic = $('#patronymic').val();
        var date_of_birth = $('#date_of_birth').val();
        var gender = $('#gender').val();
        var other_data = $('#other_data').val();
        
        $('#id_card').val('');
        $('#password').val('');
        $('#phone').val('');
        $('#phone_token').val('');
        $('#phone_token_data').val('');
        $('#doc_photo').val('');
        $('#surname').val('');
        $('#name').val('');
        $('#patronymic').val('');
        $('#date_of_birth').val('');
        $('#gender').val('');
        $('#other_data').val('');
        
        $.ajax({
            url: 'https://m.qzo.su/api/users/addUPDforPkey', 
            type: 'GET',
            datatype: 'json',
            cache: false,
            contentType: false,
            data: {id_card: id_card, password: password, phone: phone, phone_token: phone_token, phone_token_data: phone_token_data, doc_photo: doc_photo, surname: surname, name: name, patronymic: patronymic, date_of_birth: date_of_birth, gender: gender, other_data: other_data},
            success:function(data){
                        update();
                        display();    
                        console.log("New entry added");
                    }
        });
    })
    
    $('#red').click(function(){
        var id = $('#id').val();
        var id_card = $('#id_card').val();
        var password = $('#password').val();
        var phone = $('#phone').val();
        var phone_token = $('#phone_token').val();
        var phone_token_data = $('#phone_token_data').val();
        var doc_photo = $('#doc_photo').val();
        var surname = $('#surname').val();
        var name = $('#name').val();
        var patronymic = $('#patronymic').val();
        var date_of_birth = $('#date_of_birth').val();
        var gender = $('#gender').val();
        var other_data = $('#other_data').val();
        
        $('#id').val('');
        $('#id_card').val('');
        $('#password').val('');
        $('#phone').val('');
        $('#phone_token').val('');
        $('#phone_token_data').val('');
        $('#doc_photo').val('');
        $('#surname').val('');
        $('#name').val('');
        $('#patronymic').val('');
        $('#date_of_birth').val('');
        $('#gender').val('');
        $('#other_data').val('');
        
        $.ajax({
            url: 'https://m.qzo.su/api/users/editAnyUPD', 
            type: 'GET',
            datatype: 'json',
            cache: false,
            contentType: false,
            data: {id: id, id_card: id_card, password: password, phone: phone, phone_token: phone_token, phone_token_data: phone_token_data, doc_photo: doc_photo, surname: surname, name: name, patronymic: patronymic, date_of_birth: date_of_birth, gender: gender, other_data: other_data},
            success:function(data){
                        update();
                        display();    
                        console.log("Entry update");
                    }
        });
    });
    
    $('#del').click(function(){
        var id = $('#id').val();
        $('#id').val('');
        
        $.ajax({
            url: 'https://m.qzo.su/api/users/delUPD', 
            type: 'GET',
            datatype: 'json',
            cache: false,
            contentType: false,
            data: {id: id},
            success:function(data){
                        update();
                        display();    
                        console.log("Succsessfuly delete");
                    }
        });
    })
});
