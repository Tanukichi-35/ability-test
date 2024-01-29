window.onload = function () {

  const button__register = document.getElementById('button__register');
  const button__login = document.getElementById('button__login');
  const button__logout = document.getElementById('button__logout');
  const select__category = document.getElementById('select__category');

  // if (location.href == "http://localhost/") {
  if (location.pathname == "/") {
    button__register.style.display = 'block';
    button__register.style.visibility = 'hidden';
    button__login.style.display = 'none';
    button__logout.style.display = 'none';
    Color(select__category);
  }
  // else if (location.href.indexOf("http://localhost/confirm") === 0){
  else if (location.pathname == "/confirm"){
    button__register.style.display = 'block';
    button__register.style.visibility = 'hidden';
    button__login.style.display = 'none';
    button__logout.style.display = 'none';
  }
  // else if (location.href == "http://localhost/login"){
  // else if (location.href.indexOf("http://localhost/login") === 0){
  else if (location.pathname == "/login"){
    button__register.style.display = 'block';
    button__register.style.visibility = 'visible';
    button__login.style.display = 'none';
    button__logout.style.display = 'none';
  }
  // else if (location.href == "http://localhost/register"){
  // else if (location.href.indexOf("http://localhost/register") === 0){
  else if (location.pathname == "/register"){
    button__register.style.display = 'none';
    button__login.style.display = 'block';
    button__login.style.visibility = 'visible';
    button__logout.style.display = 'none';
  }
  // else if (location.href == "http://localhost/admin"){
  // else if (location.href.indexOf("http://localhost/admin") === 0){
  else if (location.pathname == "/admin"){
    button__register.style.display = 'none';
    button__login.style.display = 'none';
    button__logout.style.display = 'block';
    button__logout.style.visibility = 'visible';
  }
  // else if (location.href.indexOf("http://localhost/search") === 0){
  else if (location.pathname == "/search"){
    button__register.style.display = 'none';
    button__login.style.display = 'none';
    button__logout.style.display = 'block';
    button__logout.style.visibility = 'visible';
  }
}

function Color(sample) {
  if(!(sample.value)){
    sample.style.color = '#A0A0A0';
  }else{
    sample.style.color = '#000';
  }
}