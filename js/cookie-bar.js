// --- Config --- //
var purecookieTitle = "Ciasteczka";
var purecookieDesc =
  "Ta strona korzysta z ciasteczek aby świadczyć usługi na jak najwyższym poziomie. Korzystając z tej strony zgadasz się na ich użycie.";
var purecookieLink =
  '<a href="polityka-prywatnosci" target="_blank">Polityka prywatności.</a>';
var purecookieButton = "Okej!";
// ---        --- //

function setCookie(name, value, days) {
  var expires = "";
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
    expires = "; expires=" + date.toUTCString();
  }
  document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(";");
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == " ") c = c.substring(1, c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
  }
  return null;
}

function eraseCookie(name) {
  document.cookie = name + "=; Max-Age=-99999999;";
}

function cookieConsent() {
  if (!getCookie("purecookieDismiss")) {
    document.body.innerHTML +=
      '<div class="cookieConsentContainer" id="cookieConsentContainer"><div class="cookieTitle"><a>' +
      purecookieTitle +
      '</a></div><div class="cookieDesc"><p>' +
      purecookieDesc +
      " " +
      purecookieLink +
      '</p></div><div class="cookieButton"><a onClick="purecookieDismiss();">' +
      purecookieButton +
      "</a></div></div>";
  }
}

function purecookieDismiss() {
  setCookie("purecookieDismiss", "1", 7);
  jQuery(".cookieConsentContainer").css("display", "none");
}

cookieConsent();