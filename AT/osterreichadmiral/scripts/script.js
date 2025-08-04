function showSuccessMessage() {
  document.getElementById('registration-form').classList.add('hidden');
  document.getElementById('success-message').classList.remove('hidden');
}
function showFormAgain() {
  document.getElementById('registration-form').reset();
  document.getElementById('success-message').classList.add('hidden');
  document.getElementById('registration-form').classList.remove('hidden');
}

  // Show modal if not accepted yet
  if (!localStorage.getItem('ageGateAccepted')) {
    document.getElementById('age-gate-modal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
  }
  function acceptAgeGate() {
    localStorage.setItem('ageGateAccepted', '1');
    document.getElementById('age-gate-modal').style.display = 'none';
    document.body.style.overflow = '';
  }