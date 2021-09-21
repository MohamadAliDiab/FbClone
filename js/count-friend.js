$(document).ready(count_friends);

function count_friends(){
    count_friendsAPI().then(friends => {
        $('#counter').append(friends[0].counted);
    })
}


async function count_friendsAPI(){
    const response = await fetch("http://localhost/fb%20implement%20-%20Mohamad%20Ali%20Diab/php/list_connections_count.php");
    
    if(!response.ok){
        const message = "ERROR OCCURED";
        throw new Error(message);
    }
    
    const friends = await response.json();
    return friends;
}

