$.ajax({
    url: 'get_books.php',
    type: 'GET',
    success: function(books) {
      books = JSON.parse(books);
      var html = '';
      for (var i = 0; i < books.length; i++) {
        html += '<tr>';
        html += '<td>' + books[i].id + '</td>';
        html += '<td>' + books[i].title + '</td>';
        html += '<td>' + books[i].author + '</td>';
        html += '<td>' + books[i].publication_year + '</td>';
        html += '<td>' + (books[i].available ? 'Có' : 'Không') + '</td>';
        html += '</tr>';
      }
      $('#books-table tbody').html(html);
    }
  });
  