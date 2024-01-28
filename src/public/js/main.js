window.onload = function () {

  const button__register = document.getElementById('button__register');
  const button__login = document.getElementById('button__login');
  const button__logout = document.getElementById('button__logout');

  if (location.href == "http://localhost/") {
    button__register.style.display = 'block';
    button__register.style.visibility = 'hidden';
    button__login.style.display = 'none';
    button__logout.style.display = 'none';
  }
  // else if (location.href == "http://localhost/confirm"){
  else if (location.href.indexOf("http://localhost/confirm") === 0){
    button__register.style.display = 'block';
    button__register.style.visibility = 'hidden';
    button__login.style.display = 'none';
    button__logout.style.display = 'none';
  }
  // else if (location.href == "http://localhost/login"){
  else if (location.href.indexOf("http://localhost/login") === 0){
    button__register.style.display = 'block';
    button__register.style.visibility = 'visible';
    button__login.style.display = 'none';
    button__logout.style.display = 'none';
  }
  // else if (location.href == "http://localhost/register"){
  else if (location.href.indexOf("http://localhost/register") === 0){
    button__register.style.display = 'none';
    button__login.style.display = 'block';
    button__login.style.visibility = 'visible';
    button__logout.style.display = 'none';
  }
  // else if (location.href == "http://localhost/admin"){
  else if (location.href.indexOf("http://localhost/admin") === 0){
    button__register.style.display = 'none';
    button__login.style.display = 'none';
    button__logout.style.display = 'block';
    button__logout.style.visibility = 'visible';
  }
  else if (location.href.indexOf("http://localhost/search") === 0){
    button__register.style.display = 'none';
    button__login.style.display = 'none';
    button__logout.style.display = 'block';
    button__logout.style.visibility = 'visible';
  }
}