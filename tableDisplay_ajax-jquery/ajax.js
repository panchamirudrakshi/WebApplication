function loadData()
{
$.ajax({
       
		
		 url: "books.xml",
		 dataType: "xml",
		 success: function(data) {
			 simple(data);
}
 });
}

function simple(data)

{
	$(data).find('book').each(function(){
			var title = $(this).find('title').text();
			var authors;
			var author = $(this).find('author');
			author.each(function(){
				var author = $(this).text();
				if(authors!=null)
					authors += "," + author;
				else
					authors = author;
			});
			var year = $(this).find('year').text();
			var price = $(this).find('price').text();
			var category = $(this).attr('category');
			$('#book').append('<tr><td>' + title + '</td><td>' + authors + '</td><td>' + year + '</td><td>' + price + '</td><td>' + category + '</td></tr>');
			
	});	
}