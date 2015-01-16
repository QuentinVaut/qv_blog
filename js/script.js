function verif_champ(champ)
{
    if (champ == "")
    {
        return false;
    }
    return true;
}

function verifForm(f)
{

    var champOk = verif_champ(f.password);

    if (champOk)
        return true;
    else
    {
        alert("Veuillez remplir correctement tous les champs");
        return false;
    }
}

function control_form(champ)
{
    var champ
    if (document.getElementById(champ).value == '')
    {
        alert("Champ non renseigné");
        return false;
    } else
        return true;
}