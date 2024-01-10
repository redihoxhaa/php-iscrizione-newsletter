# PHP HOTELS

#### CONSEGNA DELL'ESERCIZIO 

```
Creare una pagina index.php con un form (che richiama la stessa pagina) per l'inserimento di un indirizzo email.

Controllare che la mail  passata in GET sia ben formata e contenga un punto e una chiocciola.

Usare un alert di Bootstrap (il componente HTML/CSS, non alert JS) per mostrare il messaggio di:
successo: la mail contiene un punto e una chiocciola;
errore: la mail NON contiene un punto e una chiocciola;

Milestone 1
Logica tutta dentro index.php, mostrare il messaggio di successo/errore dentro un alert di Bootstrap;

Milestone 2
Spostare la logica dentro functions.php (include);

BONUS
Milestone 3
invece di usare una classe statica per lo stile dell’alert, modificarla in base all’esito della funzione.

Milestone 4
invece di visualizzare il messaggio di success nella index.php, in caso di esito positivo effettuare un redirect ad una thankyou page
dove usiamo la session per mostrare anche l'indirizzo email con cui ci siamo "registrati"
```

#### SVOLGIMENTO

MILESTONE 1
Creiamo un form nella pagina index.php dove andiamo ad inserire un campo di input di testo e un pulsante di submit.
Per effettuare una verifica sulla correttezza dell'email andiamo a settare una variabile di stato, con assegnazione di default null,
che diventa true se l'email inserita contiene sia '@' che '.', altrimenti false. Per fare questo ci serviamo del metodo str_contains.
Attraverso questa variabile di stato nel nostro body andiamo a gestire i due casi, in cui stampiamo un alert di successo con conseguente testo
se la variabile è true, e un alert di warning se la variabile è false.

MILESTONE 2
Creaimo un file functions.php che includiamo all'interno di index dove all'interno andiamo a spostare la logica precedentemente definita sopra il tag HTML.

MILESTONE 3
Attraverso l'utilizzo della sintassi if ed endif, andiamo a modificare prima la classe dell'alter con "success" se la variabile di stato è true, e "warning" se è false.
Stessa cosa facciamo anche per il messaggio all'interno dell'alert.

MILESTONE 4
Creiamo una pagina session.php dove andiamo ad inizializzare la sessione e la importiamo in tutte le pagine che hanno bisogno di accedere alla variabile dell'email.
Creaimo anche una pagina di landing che sarà chiamata thankyou.php dove andremo a reindirizzare l'utente in caso di successo. Quindi possiamo eliminare la condizione
che crea l'alert di successo e lasciare solo quello di warning, e aggiungiamo all'interno della condizione di successo di functions.php, un redirect a thankyou.php.
All'interno di thankyou.php stampiamo l'email con la quale siamo riusciti ad accedere, che si trova sempre nell'array associativo $_SESSION, accompagnata
da un messaggio di benvenuto.