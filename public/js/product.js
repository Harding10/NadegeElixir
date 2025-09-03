// Script pour éditer un article
function editArticle(article) {
    // Remplir le formulaire avec les données de l'article
    const form = document.getElementById('articleForm');
    form.querySelector('#title').value = article.title;
    form.querySelector('#price').value = article.price;
    form.querySelector('#description').value = article.description;
    
    // Modifier l'action du formulaire pour la mise à jour
    // On construit l'URL dynamiquement. Attention, cela suppose une structure de route comme /produits/{id}
    form.action = `/produits/${article.id}`;
    
    // Ajouter la méthode PUT pour la mise à jour
    let methodField = form.querySelector('input[name="_method"]');
    if (!methodField) {
        methodField = document.createElement('input');
        methodField.type = 'hidden';
        methodField.name = '_method';
        form.appendChild(methodField);
    }
    methodField.value = 'PUT';
    
    // Modifier le titre de la modale et le texte du bouton
    document.querySelector('#addProductModal h3').textContent = "Modifier l'article";
    form.querySelector('button[type="submit"]').textContent = 'Mettre à jour';
    
    // Afficher la modale
    document.getElementById('addProductModal').classList.remove('hidden');
}