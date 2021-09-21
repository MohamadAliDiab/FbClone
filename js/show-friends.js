$(document).ready(list_friends);

function list_friends(){
    list_friendsAPI().then(friends => {
        $.each(friends, function(i, friends){
            $('#friend-listing').append("<div class='card text-white bg-dark ms-5 mt-5 col-sm-6' style='max-width: 15rem;'><h5 class='card-header '>" + friends.first_name + ' ' + friends.last_name + 
             "</h5><div class='card-body'><button type='button' data-id="+ friends.id +" id='delete' class='btn btn-warning card-title ms-1'>Remove Friend</button></br><button type='button' id='block' data-id="+ friends.id +" class='btn btn-danger card-title ms-1'>BLOCK</button></div></div>");
        });
        $("#delete").click(removeFriend);
		$("#block").click(blockFriend);
    })
}

async function list_friendsAPI(){
    const response = await fetch("http://localhost/fb%20implement%20-%20Mohamad%20Ali%20Diab/php/list_connections.php");
    
    if(!response.ok){
        const message = "ERROR OCCURED";
        throw new Error(message);
    }
    
    const friends = await response.json();
    return friends;
}


function removeFriend(){
    var friend_id = $(this).attr("data-id");
    removeFriendAPI(friend_id).then(response => {
        $(this).closest(".card").hide();
    });
}

async function removeFriendAPI(friend_id){
    const response = await fetch("http://localhost/fb%20implement%20-%20Mohamad%20Ali%20Diab/php/remove_con.php?friend_id=" + friend_id);
    
    if(!response.ok){
        const message = "ERROR OCCURED";
        throw new Error(message);
    }
    
    const removeFr = await response.json();
    return removeFr;
}



function blockFriend(){
    var friend_id = $(this).attr("data-id");
    blockFriendAPI(friend_id).then(response => {
        $(this).closest(".card").hide();
    });
}

	
async function blockFriendAPI(friend_id){
    const response = await fetch("http://localhost/fb%20implement%20-%20Mohamad%20Ali%20Diab/php/block.php?blocked_user_id=" + friend_id);
    
    if(!response.ok){
        const message = "ERROR OCCURED";
        throw new Error(message);
    }
    
    const blocked = await response.json();
    return blocked;
}

