<h2 class="section-title"><i class="fa-solid fa-paper-plane"></i> Discutons de votre projet</h2>

<p>Un projet de site web, une idée d'application ou une proposition de stage ? Remplissez le formulaire ci-dessous et je vous répondrai dans les plus brefs délais.</p>

<div id="form-message" class="form-message"></div>

<form id="contactForm" class="contact-form">
    <div class="form-group">
        <label for="name">Votre Nom</label>
        <input type="text" id="name" name="name" class="form-control" required placeholder="John Doe">
    </div>

    <div class="form-group">
        <label for="email">Votre Email</label>
        <input type="email" id="email" name="email" class="form-control" required placeholder="john@example.com">
    </div>

    <div class="form-group">
        <label for="subject">Sujet</label>
        <input type="text" id="subject" name="subject" class="form-control" required placeholder="Proposition de stage...">
    </div>

    <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" class="form-control" required placeholder="Bonjour Pierre, je vous contacte pour..."></textarea>
    </div>

    <button type="submit" class="btn-submit" id="btn-submit">
        <span>Envoyer le message</span> <i class="fa-solid fa-paper-plane"></i>
    </button>
</form>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault(); // On bloque le rechargement brutal de la page

    const form = this;
    const btnSubmit = document.getElementById('btn-submit');
    const messageDiv = document.getElementById('form-message');
    const formData = new FormData(form);

    // On change le bouton pour montrer que ça charge
    btnSubmit.innerHTML = '<span>Envoi en cours...</span> <i class="fa-solid fa-spinner fa-spin"></i>';
    btnSubmit.disabled = true;
    messageDiv.className = 'form-message'; // Reset des classes

    // On envoie les données à notre script PHP
    fetch('/api/send_mail.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            messageDiv.textContent = data.message;
            messageDiv.classList.add('success');
            form.reset(); // On vide le formulaire
        } else {
            messageDiv.textContent = data.message;
            messageDiv.classList.add('error');
        }
    })
    .catch(error => {
        messageDiv.textContent = "Une erreur critique est survenue. Veuillez réessayer.";
        messageDiv.classList.add('error');
    })
    .finally(() => {
        // On remet le bouton à la normale
        btnSubmit.innerHTML = '<span>Envoyer le message</span> <i class="fa-solid fa-paper-plane"></i>';
        btnSubmit.disabled = false;
    });
});
</script>