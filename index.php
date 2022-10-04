<form  action="thanks.php"  method="post">
    
    <div>
      <label  for="userFirstname">Prenom* :</label>
      <input  type="text"  id="userFirstname"  name="userFirstname" minlength = 2 maxlength = 50 placeholder="Votre Prénom" required>
    </div>
    <div>
      <label  for="userLastname">Nom* :</label>
      <input  type="text"  id="userLastname"  name="userLastname" minlength = 2 maxlength = 50 placeholder="Votre Nom" required>
    </div>
    <div>
      <label  for="userMail">Courriel* : </label>
      <input  type="email"  id="userMail"  name="userMail" 
              pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*$"
              placeholder="Votre Email" 
              required>
    </div>
    <div>
      <label  for="userPhone">Téléphone* :</label>
        <input  type="tel"  id="userPhone"  name="userPhone" 
                pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$"
                placeholder="Votre Numero Tel." required>
    </div>
    <div>
        <label for="userSubject">Choisit un theme *:</label>
        <select name="userSubject" id="userSubject"  required>
            <option value="">Choisir une rubrique</option>
            <option value="AucunTheme">Aucun Thème Particulier</option>
            <option value="Environnement">Environnement</option>
            <option value="BienEtreAnimal">Bien être animal</option>
            <option value="Recyclage">Recyclage</option>
            <option value="EnergiesRenouvelables">Energies Renouvelables</option>
        </select>
    </div>
    <div>
      <label  for="userMessage">Message* :</label>
      <textarea  id="userMessage"  name="userMessage" required></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
</form>
