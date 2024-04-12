function filterLocations() {
    // Récupérer la valeur saisie par l'utilisateur
    var searchInput = document.getElementById('locationInput').value;

    // Envoyer une requête AJAX au serveur avec la valeur saisie
    $.ajax({
        url: "{{ route('locations.search') }}",
        type: 'GET',
        data: {
            search: searchInput
        },
        success: function(response) {
            // Mettre à jour les options de localisation avec les résultats de la recherche
            var locationSelect = document.getElementById('location');
            locationSelect.innerHTML = ''; // Effacer les options existantes

            // Ajouter les nouvelles options
            response.forEach(function(location) {
                var option = document.createElement('option');
                option.value = location.id;
                option.text = location.localisation;
                locationSelect.appendChild(option);
            });
        }
    });
}
