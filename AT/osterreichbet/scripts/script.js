function showSuccessMessage() {
  document.getElementById("registration-form").classList.add("hidden");
  document.getElementById("success-message").classList.remove("hidden");
}
function showFormAgain() {
  document.getElementById("registration-form").reset();
  document.getElementById("success-message").classList.add("hidden");
  document.getElementById("registration-form").classList.remove("hidden");
}

function showLoginSuccess() {
  const form = document.getElementById("login-form");
  const successMessage = document.getElementById("login-success");

  if (form && successMessage) {
    form.classList.add("hidden");
    successMessage.classList.remove("hidden");

    setTimeout(() => {
      window.location.href = "/";
    }, 3000);
  }
}
