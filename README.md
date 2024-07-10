_todo_/
Creiamo una tabella trains e relativa Migration
Ogni treno dovrà avere:
Azienda
Stazione di partenza
Stazione di arrivo
Orario di partenza
Orario di arrivo
Codice Treno
Numero Carrozze
In orario
Cancellato
È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto.
Inserite inizialmente i dati tramite PhpMyAdmin.
Create Model relativo ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna.

# keywords

php artisan make:migration create_trains_table // CREAZIONE DB IN LARAVEL, \_trains\* in questo caso è il nome assegnato
php artisan migrate // CREAZIONE DB IN PHP MY ADMIN
php artisan migrate:status // CHECK CHE IL DB SIA EFFETTIVAMENTE STATO CREATO
php artisan make:migration update_trains_table --table=trains
php artisan migrate:rollback // ANNULLA L ULTIMA MODIFICA FATTA
