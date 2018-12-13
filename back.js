   function getusername () {
    
    $.ajax("getusername.php", {
        type: 'POST',
        success: function(response) {
            
            console.log(response);
            document.getElementById("username").innerHTML = response;
     
    }
    });
    }

getusername();




function insertBook (form) {
    
       var id = form.bookID.value;
       var title = form.title.value;
	   var author = form.author.value;
	   var price = form.price.value;
    $.ajax("newbook.php", {
        data: { id : id,
                title:title,
			    author:author,
			    price: price
              },
        type: 'POST',
        success: function(response) {
			alert("Book Inserted Successfully")
            console.log(response);
     
    }
    });
	   
    
}


function seeBooks() {
	  $.ajax("getbooks.php", {
        type: 'POST',
        success: function(response) {     
			document.getElementById("tableofdata").removeAttribute("hidden");
            document.getElementById("bookResults").innerHTML = response;
			console.log(response);
    }
    });
	
}


function deleteBook(form){
	var id = form.bookIDDelete.value;
	$.ajax("deletebooks.php", {
        data: { id : id
              },
        type: 'POST',
        success: function(response) { 
            console.log(response);
			alert("Book Deleted")
     
    }
    });
}