    
    <!-- -------------- Début du footer -------------------------- -->

    <div id="footer" class="container-fluid mt-5 mb-5">
      <div class="row">
        <ul class="list-group col">
          <li class="list-group-item"> Nous contacter </li>
          <li class="list-group-item">Téléphone Siège</li>
          <li class="list-group-item">Téléphone SAV</li>
          <li class="list-group-item">Téléphone support technique</li>
          <li class="list-group-item">Formulaire de contact</li>
        </ul>

        <ul class="list-group col">
          <li class="list-group-item">Réseaux sociaux </li>
          <li class="list-group-item">Facebook</li>
          <li class="list-group-item">Twitter</li>
          <li class="list-group-item">Instagram</li>
          <li class="list-group-item">Linkedin</li>
        </ul>

        <ul class="list-group col">
          <li class="list-group-item">Email</li>
          <li class="list-group-item">PDG</li>
          <li class="list-group-item">Vice-President</li>
          <li class="list-group-item">Directeur Marketing</li>
          <li class="list-group-item">Directrice des ventes</li>
        </ul>

        <ul class="list-group col">
          <li class="list-group-item">Nos avis :</li>
          <li class="list-group-item">* * * * * Super travail ! Merci</li>
          <li class="list-group-item">* * * * Bravo à toute l'équipe </li>
          <li class="list-group-item">* * * * Je recommande ! </li>
          <li class="list-group-item">* * * * Rien à redire ! Parfait </li>
        </ul>
      </div>
    </div>
    <img src="<?= IMG_PATH ?>/social footer/footer.jpg"> 

    <script>
// Création dynamisme carousel à la main : 
      const carrousselle = document.querySelector('.carrousselle');
const container = carrousselle.querySelector('.carrousselle-container');
const prevBtn = carrousselle.querySelector('.carrousselle-prev');
const nextBtn = carrousselle.querySelector('.carrousselle-next');
const items = carrousselle.querySelectorAll('.carrousselle-item');
let currentIndex = 0;

prevBtn.addEventListener('click', () => {
  currentIndex = currentIndex > 0 ? currentIndex - 1 : items.length - 1;
  updatecarrousselle();
});

nextBtn.addEventListener('click', () => {
  currentIndex = currentIndex < items.length - 1 ? currentIndex + 1 : 0;
  updatecarrousselle();
});
// Modification fonction "count' pour 3 car ca marchais pas 
function updatecarrousselle() {
  container.style.transform = `translateX(-${currentIndex * (100 / 3)}%)`;
}
    </script>
    <script src=" <?= JS_PATH ?>bootstrap.js"></script>
  </body>
</html>