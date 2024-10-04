<script src="script.js">
// Toggle show/hide password functionality
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');

togglePassword.addEventListener('click', function () {
    // Toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);

    // Toggle the eye icon
    this.classList.toggle('fa-eye');
    this.classList.toggle('fa-eye-slash');
});

// Modal functionality for 'Tambah Barang'
const modal = document.querySelector('#modal');
const openModalBtn = document.querySelector('#openModalBtn');
const closeModalBtn = document.querySelector('#closeModalBtn');

// Open modal
openModalBtn.addEventListener('click', function () {
    modal.style.display = 'block';
});

// Close modal when 'X' button is clicked
closeModalBtn.addEventListener('click', function () {
    modal.style.display = 'none';
});

// Close modal when clicking outside of the modal
window.addEventListener('click', function (e) {
    if (e.target == modal) {
        modal.style.display = 'none';
    }
});

// Button click effect (hover scale effect)
const buttons = document.querySelectorAll('.button');

buttons.forEach(button => {
    button.addEventListener('mouseover', function () {
        this.style.transform = 'scale(1.1)';
    });

    button.addEventListener('mouseout', function () {
        this.style.transform = 'scale(1)';
    });
});

// Form validation example for login
const form = document.querySelector('#loginForm');
const username = document.querySelector('#username');
const passwordInput = document.querySelector('#password');

form.addEventListener('submit', function (e) {
    // Prevent default form submission
    e.preventDefault();

    // Validate form inputs
    if (username.value === '' || passwordInput.value === '') {
        alert('Please fill in all fields.');
    } else {
        // You can add AJAX or form submission here
        alert('Login successful!');
    }
});

</script>
