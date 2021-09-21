$(document).ready(list_notifications);

function list_notifications(){
    list_notificationsAPI().then(notifications => {
        $.each(notifications, function(i, notifications){
            var $tr = $('<tr>').append(
                $('<td>').text(notifications.first_name + ' ' + notifications.last_name),
                $('<td>').append("<button type='button' data-id= " + notifications.sender_id + " id='acc' class='btn btn-success addBtn'>Accept request</button>"),
                $('<td>').append("<button type='button' data-id=" +notifications.sender_id +" id='decc' class='btn btn-danger declineBtn'>Decline request</button>")
            ).appendTo("#nots");
        })
        $(".addBtn").click(addFriend);
		$(".declineBtn").click(declineReq);
    })
}

function addFriend(){
    var nots_id = $(this).attr("data-id");
    acceptReqAPI(nots_id).then(response => {
        $(this).closest('tr').hide();
    });
}

async function acceptReqAPI(nots_id){
    const response = await fetch("http://localhost/fb%20implement%20-%20Mohamad%20Ali%20Diab/php/accept_request.php?sender_id=" + nots_id);
    
    if(!response.ok){
        const message = "ERROR OCCURED";
        throw new Error(message);
    }
    
    const acceptReq = await response.json();
    return acceptReq;
}



function declineReq(){
    var nots_id = $(this).attr("data-id");
    declineReqAPI(nots_id).then(response => {
        $(this).closest('tr').hide();
    });
}

	
async function declineReqAPI(nots_id){
    const response = await fetch("http://localhost/fb%20implement%20-%20Mohamad%20Ali%20Diab/php/decline_request.php?sender_id=" + nots_id);
    
    if(!response.ok){
        const message = "ERROR OCCURED";
        throw new Error(message);
    }
    
    const declined = await response.json();
    return declined;
}


async function list_notificationsAPI(){
    const response = await fetch("http://localhost/fb%20implement%20-%20Mohamad%20Ali%20Diab/php/notification.php");
    
    if(!response.ok){
        const message = "ERROR OCCURED";
        throw new Error(message);
    }
    
    const notifications = await response.json();
    return notifications;
}

