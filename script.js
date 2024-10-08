
let currentStep = 0;
const steps = document.querySelectorAll('.step');

function nextStep() {
    if (currentStep < steps.length - 1) {
        steps[currentStep].classList.remove('active');
        currentStep++;
        steps[currentStep].classList.add('active');
    }
}

function prevStep() {
    if (currentStep > 0) {
        steps[currentStep].classList.remove('active');
        currentStep--;
        steps[currentStep].classList.add('active');
    }
}

function finishWizard() {
    alert('Wizard completado');
}

