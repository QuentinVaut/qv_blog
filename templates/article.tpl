
            <div class="span8">

                <form  method="POST" action="article.php" enctype="multipart/form-data" id="form_article" name="form_article">
                    <div class="clearfix">
                        {if isset($smarty.get.id)} <input type="hidden" name="id" value="{if isset({$smarty.get.id})} {$smarty.get.id}{/if}"/> {/if}
                        
                        <label for="titre">Titre</label>
                        <div class="input">
                            <input type='text' id="titre"  name='titre'  value="{$name}" maxlength="150"/>
                        </div>
                        <label for="img">Image</label>
                        {if isset({$smarty.get.id})}
                            Miniature : <img src={if isset($smarty.get.id)}'img/{$smarty.get.id}.jpg'{/if} style='width:100px; height: 100px;'/>
                        {/if}

                        <div class="input">
                            <input type='file' id="img" name='img'    value=""/>
                        </div>

                        <label for="texte">Texte</label>
                        <div class="input">
                            <textarea name="texte" id="texte">{$texte}</textarea>
                        </div>

                        <label for="publie">Publier ?</label>
                        <div class="input">
                            <input type='checkbox' id="publie" name='publie' value="1" checked="{$check}"/>
                        </div>
                        <div class="form-actions">

                             <input type='submit' name='envoyer' value='{$name_boutton}' class='btn btn-large btn-primary'/>

                        </div>

                    </div>
                </form>
            </div>