$('#searchNow').click(searchRes);

function searchRes(){
        var keyword = $('#searchBar').val();
        searchResAPI(keyword).then(results => {
            $.each(results, function(i, results){
                var $tr = $('<tr>').append(
                $('<td>').text(results.first_name + ' ' + results.last_name),
                $('<td>').append("<button type='button' data-id= " + results.id + " id='add' class='btn btn-success sendBtn'>Send request</button>"),
                $('<td>').append("<button type='button' data-id=" +results.id +" id='block' class='btn btn-danger blockBtn'>Block user</button>")
            ).appendTo("#res");
            })
            });
            // $("#delete").click(removeFriend);
            // $("#block").click(blockFriend);
        }
        

        // async function searchResAPI(keyword){
        //     const response = await fetch("http://localhost/fb%20implement%20-%20Mohamad%20Ali%20Diab/php/search.php?entered_str="+ keyword),{
        //     method: 'POST',
		// 	body: new URLSearchParams({
		// 		
		// 	})
        // }
        //     if(!response.ok){
        //         const message = "ERROR OCCURED";
        //         throw new Error(message);
        //     }
            
        //     const results = await response.json();
        //     return results;
        // }

        async function searchResAPI(keyword){
            const response = await fetch("http://localhost/fb%20implement%20-%20Mohamad%20Ali%20Diab/php/search.php", {
                method: 'POST',
                body: new URLSearchParams({
                    "entered_str": keyword,
                })
            });
            
            if(!response.ok){
                const message = "ERROR OCCURED";
                throw new Error(message);
            }
            
            const results = await response.json();
            return results;
        }
        
