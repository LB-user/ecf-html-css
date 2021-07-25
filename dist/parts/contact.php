<?php $section='Contact'; ?>
<section>

    <div class="container-contact">
        <h1>Nous Contacter</h1>
        <form action="POST" class="form-contact">
            <div class="form-div-name">
                <label for="form-name">Votre nom</label>
                <input type="text" id="form-name" placeholder="Entrez votre nom">
            </div>
            <div class="form-div-mail">
                <label for="form-mail">Votre e-mail</label>
                <input type="text" id="form-mail" placeholder="Entrez votre e-mail">
            </div>
            <div class="form-div-message">
                <label for="form-message">Votre message</label>
                <textarea name="form-message" rows="6" id="form-message" placeholder="Tapez votre message"></textarea>
            </div>
            <div class="form-div-button">
                <button type="submit" class="form-button button">
                    <span>Envoyer</span>
                    <img src="img/Icon-feather-arrow-right-circle-1.svg" alt=">">
                </button>
            </div>

        </form>
    </div>

</section>