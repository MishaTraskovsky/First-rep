jquery(function(){
        
    $('btn btn-primary').click(function addRow(id){                     
        var tbody = document.getElementById(id).getElementsByTagName("TBODY")[0];
        var row = document.createElement("TR")
        var td1 = document.createElement("TD")
        td1.appendChild(document.createTextNode("column 1"))
        var td2 = document.createElement("TD")
        td2.appendChild (document.createTextNode("column 2"))
        row.appendChild(td1);
        row.appendChild(td2);
        tbody.appendChild(row);

    });  
});