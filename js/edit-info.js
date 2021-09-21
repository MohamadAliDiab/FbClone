$(document).ready(getInfo);

function getInfo(){
    getInfoAPI().then(infos => {
        $.each(infos, function(index, infos){
            $('#first_name').val(infos.first_name);
            $('#last_name').val(infos.last_name);
            $('#bday').val(infos.bday);
            $('#email').val(infos.email);
        })
    });
}

async function getInfoAPI(){
    const response = await fetch("http://localhost/fb%20implement%20-%20Mohamad%20Ali%20Diab/php/info.php");
    
    if(!response.ok){
        const message = "ERROR OCCURED";
        throw new Error(message);
    }
    
    const infos = await response.json();
    return infos;
}

$('#save_changes').click(editInfo);

$("#save_changes").click(function(prevent){
    prevent.preventDefault();
  });

function editInfo(){
    editInfoAPI().then(updates => {
        $.each(updates, function(index, updates){
            $('#first_name').append(updates.first_name);
            $('#last_name').append(updates.last_name);
            $('#bday').append(updates.bday);
            $('#email').append(updates.email);
        })
    });
}


async function editInfoAPI(){
    const response = await fetch("http://localhost/fb%20implement%20-%20Mohamad%20Ali%20Diab/php/update_info.php",{
        method: 'POST',
        body: new URLSearchParams({
            "first_name": $('#first_name').val(),
            "last_name": $('#last_name').val(),
            "email": $('#email').val(),
            "bday": $('#bday').val()
        })
    });

    if(!response.ok){
        const message ="ERROR OCCURED";
        throw new Error(message);
    }

    const updates = await response.json();
    return updates;
}


