<?php
            
            //INIZIALIZZAZIONE DEL ARRAY DI PERMESSI
            
            $permissions=array (
                AMMINISTRATORE => array("home" => HOME_AMMINISTRATORE, "provincia" => PROVINCIA, "modifica_medico" => MODIFICA_MEDICO, "dettaglio_referral" => DETTAGLIO_REFERRAL, "elenco_referral" => ELENCO_AZIENDE, "aziende" => ELENCO_MEDICI, "pazienti" => ELENCO_PAZIENTI, "medici" => DETTAGLIO_DSR, "modifica_dsr" => MODIFICA_DSR, "ordini" => ORDINI, "PDF" => PDF, "coupon" => COUPONS, "prezzi" => PREZZO, "trattamento"=>TRATTAMENTO),
                MEDICO => array("home" => HOME_MEDICO,"aggiorna_profile_medico" => AGGIORNA_PROFILO_MEDICO,"pazienti" => PAZIENTI,"agenda" => AGENDA, "aggiunge_paziente" => AGGIUNGE_PAZIENTE, "modifica_paziente" => MODIFICA_PAZIENTE, "aggiunge_esame" => AGGIUNGE_ESAME, "aggiunge_altro_esame" => AGGIUNGE_ALTRO_ESAME, "aggiunge_ereferral" => AGGIUNGE_EREFERRAL, "dettaglio_referral" => DETTAGLIO_REFERRAL, "dettaglio_referral" => DETTAGLIO_REFERRAL, "aggiorna_referral" => AGGIORNA_REFERRAL, "segnala_errore" => SEGNALA_ERRORE, "coupon" =>COUPONS, "fatture" => FATTURE, "ordini" => ORDINI, "aziende" =>  AZIENDE, "checkout" => CHECKOUT, "PDF" => PDF, "minisito"=>MINISITO, "associato"=>ASSOCIATO, "trattamento"=>TRATTAMENTO, "abbonamento" => ABBONAMENTO, "ortho"=>"ortho.php", "cambiapass"=>"cambia_password.php", "profilo"=>"profile.php"),
                AZIENDA => array("home" => HOME_DSR,"presa_in_carico" => ACQUISIZIONE_REFERRAL, "dettaglio_referral" => DETTAGLIO_REFERRAL, "aggiorna_referral" => AGGIORNA_REFERRAL, "dettaglio_dsr" => DETTAGLIO_DSR, "segnala_errore" => SEGNALA_ERRORE, "minisito" => "minisito.php"),
                PAZIENTE => array("home" => HOME_PAZIENTE,"presa_in_carico" => ACQUISIZIONE_REFERRAL, "dettaglio_referral" => DETTAGLIO_REFERRAL, "aggiorna_referral" => AGGIORNA_REFERRAL, "dettaglio_dsr" => DETTAGLIO_DSR, "segnala_errore" => SEGNALA_ERRORE, "minisito"=>"associato.php", "agenda"=>AGENDA, "coupon"=>COUPONS, "t"=>"paz_trattamenti.php", "minisito" => "associato.php"),
                NON_LOGATO => array("home" => HOME_GUEST, "provincia" => PROVINCIA, "registro" => REGISTRAZIONE, "login" => LOGIN, "login2" => LOGIN_2, "recupera" => RECUPERA_PASSWORD, "logout" => LOGOUT)
            );
            
            require_once CLASS_DIR."Access.class.php";
            
            $oAccess = new Access();
            $oAccess->isAllowed();
            
            

