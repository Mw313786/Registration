document.getElementById('appForm').addEventListener('submit', function(e){
  const f = e.target;
  if(!f.fullname.value.trim() || !f.email.value.trim()){
    e.preventDefault();
    alert('Please fill required fields: Full Name and Email.');
    return false;
  }
  // allow submit
});