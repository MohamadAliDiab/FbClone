$(document).ready(list_notifications);

function list_notifications(){
    list_notificationsAPI().then(notifications => {
        $.each(notifications, function(i, notifications){
            var $tr = $('<tr>').append(
                $('<td>').text(notifications.first_name + ' ' + notifications.last_name),
                $('<td>').append("<button type='button' id='acc_" + notifications.id + "' class='btn btn-success addBtn'>Accept request</button>"),
                $('<td>').append("<button type='button' id='decc_" + notifications.id + "' class='btn btn-danger deleteBtn'>Decline request</button>")
            ).appendTo("#nots");
        });
        
    })
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

