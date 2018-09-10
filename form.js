function showLanguage() {
  var language = document.geElementById('language');
  var selectedLanguage = language.options[language.selectedIndex].text;
  document.getElementById('selected_language').value = selectedLanguage;
}
function showPhone(phone){
  document.getElementById('selected_phone').value = phone;
}
