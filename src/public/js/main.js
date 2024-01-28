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
  else if (location.href == "http://localhost/confirm"){
    button__register.style.display = 'block';
    button__register.style.visibility = 'hidden';
    button__login.style.display = 'none';
    button__logout.style.display = 'none';
  }
  else if (location.href == "http://localhost/login"){
    button__register.style.display = 'block';
    button__register.style.visibility = 'visible';
    button__login.style.display = 'none';
    button__logout.style.display = 'none';
  }
  else if (location.href == "http://localhost/register"){
    button__register.style.display = 'none';
    button__login.style.display = 'block';
    button__login.style.visibility = 'visible';
    button__logout.style.display = 'none';
  }
  else if (location.href == "http://localhost/admin"){
    button__register.style.display = 'none';
    button__login.style.display = 'none';
    button__logout.style.display = 'block';
    button__logout.style.visibility = 'visible';
  }

}