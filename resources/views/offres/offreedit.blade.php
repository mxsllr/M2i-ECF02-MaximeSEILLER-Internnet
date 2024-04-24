<form action="{{route('offre.edit')}}" method="POST ">

    @csrf
    <input type="hidden" name="company_id" value="{{Auth::id()}}">
    <label for="domaine">Domaine :</label>
    <select name="domaine" id="domaine">
        <option value=" ">Choisir le domaine de recherche de l'entreprise</option>
        <option value="it">IT</option>
        <option value="restauration">Restauration</option>
        <option value="secretariat">Secretariat</option>
        <option value="immobilier">Immobilier</option>
    </select>
    <label for="titre">Titre :</label>
    <input id="titre" name="titre" type="text"/>
    <label for="description">Description du poste :</label>
    <textarea id="description" name="description"></textarea>
    <label for="localisation">Agglomeration :</label>
    <select name="localisation" id="localisation">
        <option value=" ">Choisir le secteur de recherche de l'entreprise</option>
        <option value="paris">Paris</option>
        <option value="toulouse">Toulouse</option>
        <option value="lyon">Lyon</option>
        <option value="lille">Lille</option>
    </select>
    <label for="email">Email de contact :</label>
    <input name="email" id="email" type="email"/>
    <button type="submit" class="">Enregistrer</button>

</form>
