# Progetto Laravel - Gestione amministrativa del portfolio

Questo repository contiene il codice sorgente per un'applicazione web basata su Laravel che consente la gestione amministrativa di un portfolio. L'applicazione consente di inserire, modificare, cancellare e visualizzare i progetti presenti nel portfolio.

## Prerequisiti

Prima di iniziare a lavorare su questo progetto, assicurati di avere i seguenti prerequisiti installati sul tuo sistema:

- PHP (versione >= 7.4)
- Composer
- Laravel (versione >= 8.x)
- Database server (ad esempio MySQL, PostgreSQL, SQLite)

## Installazione

1. Clona questo repository sul tuo sistema locale:

```bash
git clone https://github.com/FilippoBonafini/laravel-auth.git
```

2. Entra nella directory del progetto:

```bash
cd laravel-auth
```

3. Installa le dipendenze di Composer e di npm:

```bash
composer install
npm i
```

4. Copia il file `.env.example` in un nuovo file `.env`:

```bash
cp .env.example .env
```

5. Genera la chiave dell'applicazione:

```bash
php artisan key:generate
```

6. Configura le variabili d'ambiente nel file `.env` per il tuo database:

```
DB_CONNECTION=nome-del-database
DB_HOST=host-del-database
DB_PORT=porta-del-database
DB_DATABASE=nome-del-database
DB_USERNAME=username-del-database
DB_PASSWORD=password-del-database
```

7. Esegui le migrazioni del database:

```bash
php artisan migrate
```

8. Avvia il server di sviluppo di Laravel e di vite:

```bash
php artisan serve
npm run dev
```

9. Ora puoi accedere all'applicazione nel tuo browser.

## Milestones

Di seguito sono elencate le milestones per la realizzazione del progetto Laravel per la gestione amministrativa del tuo portfolio:

### Milestone 1: Inizializzazione del progetto

- Configurazione di Laravel e dell'ambiente di sviluppo.
- Creazione delle tabelle del database per la gestione dei progetti.
- Creazione delle rotte e delle viste base per la visualizzazione dei progetti.

### Milestone 2: Creazione, modifica e cancellazione dei progetti

- Implementazione delle funzionalità di creazione, modifica e cancellazione dei progetti.
- Validazione dei dati inseriti nel form.
- Caricamento e gestione delle immagini associate ai progetti.

### Milestone 3: Gestione degli utenti amministratori

- Implementazione dell'autenticazione e dell'autorizzazione per gli utenti amministratori.
- Creazione di un'interfaccia di amministrazione per la gestione degli utenti.

### Milestone 4: Paginazione e ordinamento dei progetti

- Aggiunta di paginazione e ordinamento alla visualizzazione dei progetti.
- Implementazione di filtri per la ricerca dei progetti.

### Milestone 5: Ottimizzazione e miglioramenti

- Ottimizzazione delle query al database per migliorare le prestazioni.
- Implementazione di funzionalità extra come l'ordinamento per data, categorie o tag dei progetti.
- Miglioramento dell'interfaccia utente e dell'esperienza
 d'uso.

