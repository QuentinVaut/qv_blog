<div class="span8">


 <h2>{$article[0]['titre']}</h2>
  <img src='img/{$article[0]['id']}.jpg' />
  <p>
  {$article[0]['texte']}
  </p>
  <span>Date : {$article[0]['date_fr']}</span>
  <br>
  <h3>Commentaires de l'article : </h3>
  {if ($commentaires != "Aucun commentaire")} 
  {foreach from=$commentaires item=commentaire}
  <p>
      <b> Auteur : {$commentaire['auteur']} </b><br>
 
  {$commentaire['text']}
  </p>
  <span>Date : {$commentaire['date']}</span>
  <br>
  <br>
 {/foreach}
 
 {else}
     <h1>Aucun commentaire</h1>
  {/if}
   
   
   
  <h1>Ajoutez un commentaire : </h1>
  {if $connect == true}
                  <form  method="POST" action="commentaire.php?id={$smarty.get.id}" enctype="multipart/form-data" id="form_article" name="form_commentaire">
                    <div class="clearfix">
                        {if isset($smarty.get.id)} <input type="hidden" name="id" value="{if isset({$smarty.get.id})} {$smarty.get.id}{/if}"/> {/if}
                        <label for="texte">Saisissez votre commentaire : </label>
                        <div class="input">
                            <textarea name="texte" id="texte"></textarea>
                        </div>
                        <div class="form-actions">

                             <input type='submit' name='envoyer' value="Envoyer" class='btn btn-large btn-primary'/>

                        </div>

                    </div>
                </form>
                        {else}
                            <h3>Connectez vous pour commenter cet article</h3>
   {/if}

</div>