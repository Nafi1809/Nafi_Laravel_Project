document.getElementById('loginForm').addEventListener('submit', function(event){
    event.preventDefault();
    
    const correctUsername = 'Nafi';
    const correctPassword = 'buset';
    
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    
    if(username === correctUsername && password === correctPassword){
        alert("bener broo !!");
        window.location.href = 'index';
    }else{
        alert("username atau password tidak sesuai");
    }
    
    });