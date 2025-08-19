function showSuccessMessage() {
  document.getElementById("registration-form").classList.add("hidden");
  document.getElementById("success-message").classList.remove("hidden");
}
function showFormAgain() {
  document.getElementById("success-message").classList.add("hidden");
  document.getElementById("registration-form").classList.remove("hidden");
}
