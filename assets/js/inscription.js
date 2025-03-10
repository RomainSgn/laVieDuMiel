function togglePassword(inputId, button) {
    let input = document.getElementById(inputId);
    let isPassword = input.getAttribute('type') === 'password';
    // input.setAttribute('type', isPassword ? 'text' : 'password');
    if (isPassword) {
      input.setAttribute('type', 'text');
    }else{
      input.setAttribute('type', 'password');
    }

    // la visibilté des icones
    let eyeOpen = button.querySelector('img[alt="afficher le mot de passe"]');
    let eyeClosed = button.querySelector('img[alt="cacher le mot de passe"]');
   if(isPassword){
      eyeOpen.style.display = 'none';
      eyeClosed.style.display = 'block';
    }else{
      eyeOpen.style.display = 'block';
      eyeClosed.style.display = 'none';
    }
}