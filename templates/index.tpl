<div class="span8">

    
        {if isset($notification)}
            <div class="alert alert-success" id ="notif">
            {$notification}
            </div>
        {/if}
    
        
{foreach from=$articles item=article}
 <h2>{$article['titre']}</h2>
  <img src='img/{$article['id']}.jpg' />
  <p>
  {$article['texte']}
  </p>
  <span>Date : {$article['date_fr']}</span>
  <br>
  {if isset($connect) && $connect == 1}
    <a href='article.php?id={$article['id']}'>Modifier un article</a>
    || <a href='suppression.php?id={$article['id']}'>Supprimer un article</a>
  {/if}
 {/foreach}
 
<div class=pagination>page :
<ul>
    
{for $i=1 to $total}
    <li><a href="index.php?page={$i}"> {$i}</a></li>
{/for}
</ul>
</div>

</div>