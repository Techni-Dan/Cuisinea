const searchBar = document.getElementById('search-bar');
const searchForm = document.querySelector('form');
const recipeResults = document.querySelector('.recipe-results');
const categoryFilter = document.getElementById('category-filter');

searchForm.addEventListener('keyup', (event) => {
  event.preventDefault();
  const searchTerm = searchBar.value.trim().toLowerCase();
  const selectedCategory = categoryFilter.value; // Get category filter
  /*if (!searchTerm) {
    alert('Veuillez saisir un terme de recherche');
    return;
  }
*/
  fetchRecipes(searchTerm, selectedCategory);
});

categoryFilter.addEventListener('change', () => {
  const selectedCategory = categoryFilter.value;
  const searchTerm = searchBar.value.trim().toLowerCase();
  fetchRecipes(searchTerm, selectedCategory);
});

function fetchRecipes(searchTerm, category = '') {
  const url = 'search.php?search_term=' + encodeURIComponent(searchTerm) + '&category=' + encodeURIComponent(category);

  fetch(url)
    .then(response => response.json())
    .then(data => {
      let html = '';

      if (data.length > 0) {
        document.getElementById('existing-recipes-container').style.display = 'none';

        data.forEach(recipe => {
          if (recipe.image == null) { recipe.image = 'recipe_default.jpg' }
          html += `
          <div class="col-12">
          <div class="card mb-2">
            <img src="uploads/recipes/${recipe.image}" class="card-img-top" alt="${recipe.title}">
            <div class="card-body">
              <h4 class="card-title">${recipe.title}</h4>
              <p class="card-text">${recipe.description.substring(0, 100)}...</p>
              <a href="recette.php?id=${recipe.id}" class="btn btn-primary">Voir la recette</a>
            </div>
          </div>
        </div>
                
              `;
        });

        recipeResults.innerHTML = html;
      } else {
        //document.getElementById('existing-recipes-container').style.display = 'block';
        recipeResults.innerHTML = '<p>Aucune recette trouvée pour "' + searchTerm + '".</p>';
      }

    })
    .catch(error => {
      console.error('Erreur lors de la recherche des recettes:', error);
      recipeResults.innerHTML = '<p>Une erreur est survenue.</p>';
    });
}

// Fetch initial categories
fetchCategories();

function fetchCategories() {
  fetch('categories.php') // Replace with the correct path to fetch categories
    .then(response => response.json())
    .then(categories => {
      const categoryFilter = document.getElementById('category-filter');

      categories.forEach(category => {
        const option = document.createElement('option');
        option.value = category.id;
        option.text = category.name;
        categoryFilter.appendChild(option);
      });
    })
    .catch(error => console.error('Erreur lors du chargement des catégories:', error));
}