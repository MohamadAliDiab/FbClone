$(document).ready(getInfo);

function getInfo(){
    getInfoAPI().then(infos => {
        $.each(infos, function(index, infos){
            $('#first_name').append(infos.first_name);
            $('#last_name').append(infos.last_name);
            $('#bday').append(infos.bday);
            $('#gender').append(infos.gender);
            $('#email').append(infos.email);
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