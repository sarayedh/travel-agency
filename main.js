//Fonction valider pour le formulaire booking 
     function validerBooking()
     {
       var nom = document.formulaire.name.value;
       var email = document.formulaire.email.value;
       var location = document.formulaire.location.value;
       var phone = document.formulaire.Phone.value;
       var error="";
 
    //Nom
    if (nom.length<3 && !isAlpha(nom)) error += 'Nom Invalide \n';
 
    //Email
    if (!isEmail(email)) error += 'Email Invalide \n';
 
    //Location
   if (location.length < 7 && !isAlpha(location)) error += 'Location Invalide \n';
 
    //Phone
    if (phone.length != 8 && !isNumeric(phone)) error += 'Numero de Tel Invalide \n';
 
      error && alert(error);
     }


// fonction valider contact pour le formulaire de contact 
     function validerContact()
     {
       var nom = document.formulaire.name.value;
       var message = document.formulaire.message.value;
       var error="";
 
    //Nom
    if (nom.length<3 && !isAlpha(nom)) error += 'Nom Invalide \n';
 
    //Message
    if (message.length<3 && !isAlpha(message)) error += 'Message Invalide \n';
     }     
 
//Fonction isAlpha verifie qu'une chaine de caractere est alphabetique 
     function isAlpha(str) {
      const alph = 'abcdefghijklmnopqrstuvwxyz';
       for (i = 0; i < str.length; i++) {
          if (!alph.includes(str[i].toLowerCase())) return false;
          return true;} }
 
 
//Fonction isNumeric verifie qu'une chaine de caractere est numerique 
     function isNumeric(str) {
       var nums = '0123456789';
        for (i = 0; i < str.length; i++) {
          if (!nums.includes(str[i])) return false;
          return true;}}
 

//Fonction isEmail verifie qu'une chaine est un email
     function isEmail(str) {
      if (str.indexOf('@') == -1 || str.indexOf('.') == -1) return false;
        if (
        str.indexOf('@') > -1 &&
        str.indexOf('.') > -1 &&
        str.indexOf('@') > str.indexOf('.')
          )return false;
           return true; }