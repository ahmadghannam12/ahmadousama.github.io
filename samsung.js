const form = document.querySelector('form');


form.addEventListener('submit', (event) => {
    event.preventDefault();

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    if (name === '' || email === '' || message === '') {
        alert('Please fill in all fields');
        return;
    }
    const formData = {
        name: name,
        email: email,
        message: message
    };
    form.reset();

    alert('Thank you! Your message has been sent.');
});
var mytime = setInterval(mytime, 1000)
function mytime() {
  var d = new Date();
  var t = d.toLocaleString();
  document.getElementById("Clock").innerHTML = t;
  document.getElementById("Clock").style.color = "Black";
}
var myButton = document.getElementById("myButton");
myButton.onclick = function () {
  alert("hello");
}