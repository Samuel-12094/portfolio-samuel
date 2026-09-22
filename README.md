# Portfolio — Samuel HOUSSOU

Site portfolio personnel développé avec **Laravel 12**, **Blade** et **Bootstrap**, qui présente mon profil, mon parcours, mes compétences et mes projets.

## Fonctionnalités

- Page d'accueil avec sections : À propos, Parcours, Compétences, Projets (avec filtres), Explorations, Contact
- Formulaire de contact fonctionnel : validation, enregistrement en base de données et envoi d'e-mail (Blade mail)
- Page CV consultable et imprimable en PDF
- Base de données gérée via Eloquent (modèles et migrations)
- Design responsive (mobile-first, menu mobile)

## Technologies

- PHP 8.x / Laravel 12
- Blade templates
- Bootstrap, JavaScript (filtres et interactions)
- Eloquent ORM + MariaDB / MySQL
- Git / GitHub

## Installation

```bash
git clone https://github.com/Samuel-12094/portfolio-samuel.git
cd portfolio-samuel
composer install
npm install && npm run build
cp .env.example .env
php artisan key:generate
# configurer la base de données dans .env puis :
php artisan migrate --seed
php artisan serve
```

## Structure clé

```
app/Http/Controllers/   HomeController, CVController, ContactController
app/Models/             Competence, Contact, Experience, Project
app/Mail/               ContactMail
resources/views/        home, cv, emails, welcome
database/migrations/    tables users, competences, projects, contacts, experiences
public/images/          visuels du portfolio
```

## Contact

- GitHub : [github.com/Samuel-12094](https://github.com/Samuel-12094)
- E-mail : houssousamuel454@gmail.com