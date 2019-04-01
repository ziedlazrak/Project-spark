var rating = {
  highlight : function(selected){
  // highlight() : update the number of stars on mouse over
  // PARAM selected : number of stars selected

    var stars = document.getElementsByClassName("stars");
    for (var i=0; i<stars.length; i++) {
      if (i < selected) {
        stars[i].classList.add("over");
      } else {
        stars[i].classList.remove("over");
      }
    }
  },

  save : function(rating){
  // save() : save rating
  // PARAM rating : selected rating

    // FETCH RATING DATA
    var data = new FormData();
    data.append('req', "save");
    data.append('mail',document.getElementById("mail").value);
    data.append('categorie',document.getElementById("categorie").value);
    data.append('message',document.getElementById("message").value);    
    data.append('rating', rating);


    // AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', "../views/ajax-rating.php", true);
   
    xhr.send(data);

    document.location.reload();
  }
};