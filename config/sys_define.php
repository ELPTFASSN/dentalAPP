<?php
  
    // Ruoli degli utenti
    define("AMMINISTRATORE","1");
    define("MEDICO","2");
    define("PAZIENTE","3");
    define("AZIENDA","4");
    define("NON_LOGATO","0");
   
    // Stato degli utenti
    define("UTENTE_ATTIVO","1");
    define("UTENTE_NON_ATTIVO","0");
    define("UTENTE_CANCELLATO","1");
    define("UTENTE_NON_CANCELLATO","0");
    define("LIMIT_UTENTI", "20");
    
    // Documenti
    define("URL_SCANSIONI_ESAMI", URL_FILE."scansioni/");
    define("PATH_SCANSIONI_ESAMI", DOC_ROOT."scansioni/");
    define("URL_IMAGES", URL_FILE."images/");
    define("IMG", DOC_ROOT."images/");
    
    
    // GESTIONE EMAIL
    define("MAIL_HOST", "smtp.gmail.com");
    define("MAIL_AUTH",1);
    define("MAIL_AUTH_USERNAME", "noreply@intervolutions.com");
    define("MAIL_AUTH_PASSWORD", "ccc888ccc");
    define("MAIL_AUTH_TYPE", "plain");
    define("EMAIL_FROM_ADDRESS", "noreply@intervolutions.com");
    define("EMAIL_FROM_NAME", "easy smile group");
    define("SMTP_DEBUG", 0);
    
    define("PLATFORM_NAME", "easy smile group");
    define("MAIL_ADMIN_CONTACT", "cv@intervolutions.com");
    
    
    // PATH ALLEGATI
    define("PATH_ALLEGATI", DOC_ROOT."allegati/");
    define("PDF", "generatePDF.php");
    
    //DEFINE PERMESSI
    define("HOME_AMMINISTRATORE", "home_amministratore.php");
    define("AGGIORNA_DSR","aggiorna_dsr.php");
    define("MODIFICA_MEDICO","modifica_medico.php");
    define("COUPONS", "coupon.php");
    define("HOME_MEDICO", "home_medico.php");
    define("AGGIORNA_PROFILO_MEDICO","aggiorna_profilo_medico.php");
    define("AGGIUNGE_PAZIENTE", "aggiunge_paziente.php");   
    define("MODIFICA_PAZIENTE","modifica_paziente.php");
    define("AGGIUNGE_ESAME","aggiunge_esame.php");
    define("AGGIUNGE_ALTRO_ESAME","aggiunge_altro_esame.php");
    define("AGGIUNGE_EREFERRAL","aggiunge_ereferral.php");
    define("ACQUISIZIONE_REFERRAL","presa_in_carico.php");
    define("DETTAGLIO_REFERRAL","dettaglio_referral.php");
    define("AGGIORNA_REFERRAL","aggiorna_risposta_referral.php");
    define("ELENCO_MEDICI","medici.php");
    define("ELENCO_AZIENDE","aziende.php");
    define("ELENCO_PAZIENTI","pazienti.php");
    define("HOME_DSR", "home_dsr.php");
    define("DETTAGLIO_DSR", "dettaglio_dsr.php");
    define("MODIFICA_DSR", "modifica_dsr.php");
    define("AGGIUNGI_DSR", "aggiungi_dsr.php");
    define("ORDINI", "ordini.php");
    define("HOME_GUEST", "index.php");
    define("REGISTRAZIONE", "registrati.php");
    define("LOGIN", "login.php");
    define("LOGIN_2", "login_step_2.php");
    define("RECUPERA_PASSWORD", "recupera_password.php");
    define("SEGNALA_ERRORE", "segnala_errore.php");
    define("LOGOUT", "logout.php");
    define("PROVINCIA", "province.php");
    define("HOME_PAZIENTE", "home_paziente.php");
    define("PAZIENTI", "pazienti.php");
    define("AGENDA", "agenda.php");
    define("PREZZO", "prezzi.php");
    define("FATTURE", "fatture.php");
    define("AZIENDE", "aziende.php");
    define("CHECKOUT", "checkout.php");
    define("MINISITO", "minisito.php");
    define("ASSOCIATO", "associato.php");
    define("TRATTAMENTO", "trattamenti.php");
    define("ABBONAMENTO", "abbonamenti.php");
    
    // STATI ORDINI
    define ('IN_ATTESA_DI_PAGAMENTO',1);
    define ('IN_ATTESA_DI_GESTIONE',2);
    define ('SPEDITO',3);
    define ('COMPLETATO',4);
    define ('CANCELLATO',5);
    define ('ASPETTANDO_RESSO',6);
    define ('RIMBORSATO',7);

    
    // STATO PAGAMENTI
    define ('NON_PAGATO',1);
    define ('PAYPAL',2);
    define ('CASH',3);
    define ('CREDIT_CARD',4);