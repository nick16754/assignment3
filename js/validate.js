/*Author: Nick Taglianetti*/
function validateName() {
    var firstName = document.forms["pgh-form"]["first"].value;
    var lastName = document.forms["pgh-form"]["last"].value;

    if (firstName == "" || lastName == "") {
      alert("Heya, yinz gotta enter yer full name n'at ta Pittsburghify it!");
      return false;
    }
}
