
    {if $smarty.session.utente['idRuoloUtente'] == $smarty.const.AMMINISTRATORE} 
<div class="left side-menu">
<div class="sidebar-inner slimscrollleft">
<div id=sidebar-menu>
<ul>
<li>
<a href="home_amministratore.php" class="waves-effect {if $smarty.server.SCRIPT_NAME|strstr:'home_amministratore.php'}active{/if}"><i class="md md-home"></i><span> Cruscotto </span></a>
</li>
<li>
<a href="aziende.php" class="waves-effect {if $smarty.server.SCRIPT_NAME|strstr:'aziende.php'}active{/if}" ><i class="md md-wallet-travel"></i><span> Aziende associate </span></a>
</li>
<li>
<a href="medici.php" class="waves-effect {if $smarty.server.SCRIPT_NAME|strstr:'medici.php'}active{/if}"><i class="md md-recent-actors"></i><span> Medici associati </span></a>
</li>
<li>
<a href="pazienti.php" class="waves-effect {if $smarty.server.SCRIPT_NAME|strstr:'pazienti.php'}active{/if}"><i class="md md-keyboard-alt"></i><span> Pazienti iscritti </span></a>
</li>
<li>
<a href="ordini.php" class="waves-effect {if $smarty.server.SCRIPT_NAME|strstr:'ordini.php'}active{/if}"><i class="md md-apps"></i><span> Prescrizione / Ordini </span></a>
</li>
<li>
<a href="coupon.php" class="waves-effect {if $smarty.server.SCRIPT_NAME|strstr:'coupon.php'}active{/if}"><i class="md md-cast-connected"></i><span> Sconti </span></a>
</li>
<li>
<a href="prezzi.php" class="waves-effect {if $smarty.server.SCRIPT_NAME|strstr:'prezzi.php'}active{/if}"><i class="md md-account-balance-wallet"></i><span> Listino prezzi </span></a>
</li>
</ul>
<div class=clearfix></div>
</div>
<div class=clearfix></div>
</div>
</div>

    
    {elseif $smarty.session.utente['idRuoloUtente'] == $smarty.const.MEDICO}

<div class="left side-menu">
<div class="sidebar-inner slimscrollleft">
<div id=sidebar-menu>
<ul>
    {if $smarty.session.utente['abonado'] == TRUE}
<li>
<a href="home_medico.php" class="waves-effect {if $smarty.server.SCRIPT_NAME|strstr:'home_medico.php'}active{/if}"><i class="md md-home"></i><span> Cruscotto </span></a>
</li>
<li>
<a href="aziende.php" class="waves-effect {if $smarty.server.SCRIPT_NAME|strstr:'aziende.php'}active{/if}"><i class="md md-business"></i><span> I tuoi studi medici </span></a>
</li>
<li>
<a href="ordini.php" class="waves-effect {if $smarty.server.SCRIPT_NAME|strstr:'ordini.php'}active{/if}"><i class="md md-apps"></i><span> Prescrizioni </span></a>
</li>
<li>
<a href="agenda.php" class="waves-effect {if $smarty.server.SCRIPT_NAME|strstr:'agenda.php'}active{/if}"><i class="md md-event"></i><span> La mia agenda </span></a>
</li>
<li>
<a href="fatture.php" class="waves-effect {if $smarty.server.SCRIPT_NAME|strstr:'fatture.php'}active{/if}"><i class="md md-account-balance-wallet"></i><span> Pagamenti e fatture </span></a>
</li>
<li>
<a href="coupon.php" class="waves-effect {if $smarty.server.SCRIPT_NAME|strstr:'coupon.php'}active{/if}"><i class="md md-attach-money"></i><span> Codici sconto </span></a>
</li>
<li>
<a href="minisito.php" class="waves-effect {if $smarty.server.SCRIPT_NAME|strstr:'minisito.php'}active{/if}"><i class="md md-contacts"></i><span> Minisito </span></a>
</li>
<li>
<a href="ortho.php" class="waves-effect {if $smarty.server.SCRIPT_NAME|strstr:'ortho.php'}active{/if}"><i class="md md-dock"></i><span> Ortho Viewer </span></a>
</li>
{else}
    <li>
<a href="home_medico.php" class="waves-effect {if $smarty.server.SCRIPT_NAME|strstr:'home_medico.php'}active{/if}"><i class="md md-home"></i><span> Cruscotto </span></a>
</li>
<li>
<a href="ordini.php" class="waves-effect {if $smarty.server.SCRIPT_NAME|strstr:'ordini.php'}active{/if}"><i class="md md-apps"></i><span> Prescrizioni </span></a>
</li>
   <li>
<a href="ortho.php" class="waves-effect {if $smarty.server.SCRIPT_NAME|strstr:'ortho.php'}active{/if}"><i class="md md-dock"></i><span> Ortho Viewer </span></a>
</li> 
    {/if}
</ul>
<div class=clearfix></div>
</div>
<div class=clearfix></div>
</div>
</div>

    {elseif $smarty.session.utente['idRuoloUtente'] == $smarty.const.DESIGN_SPECIALIST_REVIEW}


{else}
        <div class="left side-menu">
<div class="sidebar-inner slimscrollleft">
<div id=sidebar-menu>
<ul>
<li>
<a href="home_paziente.php" class="waves-effect {if $smarty.server.SCRIPT_NAME|strstr:'home_paziente.php'}active{/if}"><i class="md md-home"></i><span> Cruscotto </span></a>
</li>
<li>
<a href="agenda.php" class="waves-effect {if $smarty.server.SCRIPT_NAME|strstr:'agenda.php'}active{/if}"><i class="md md-keyboard-alt"></i><span> Le mie visite </span></a>
</li>
<li>
<a href="home_paziente.php?gradimenti=true" class="waves-effect {if $smarty.server.SCRIPT_NAME|strstr:'home_paziente.php?gradimenti'}active{/if}"><i class="md md-apps"></i><span> I miei gradimenti </span></a>
</li>
<li>
<a href="home_paziente.php?inviti" class="waves-effect {if $smarty.server.SCRIPT_NAME|strstr:'home_paziente.php?inviti'}active{/if}"><i class="md md-book"></i><span> Invita ai tuoi amici</span></a>
</li>
</ul>
<div class=clearfix></div>
</div>
<div class=clearfix></div>
</div>
</div>
    {/if}