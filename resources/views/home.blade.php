<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Samuel HOUSSOU - Développeur Full-Stack Web & Mobile</title>
<meta name="description" content="Samuel HOUSSOU, développeur Full-Stack Web & Mobile : Laravel, React.js, Node.js, Django, PHP, bases de données. Conception d'applications métier, plateformes SaaS et solutions digitales pour entreprises.">
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
@php
    $portfolioEmail = config('portfolio.email');
    $portfolioPhone = config('portfolio.phone');
    $portfolioPhoneLink = config('portfolio.phone_link');
    $portfolioCity = config('portfolio.city');
    $portfolioGithub = config('portfolio.github');
    $portfolioLinkedin = config('portfolio.linkedin');
    $portfolioFacebook = config('portfolio.facebook');
@endphp
<style>
@keyframes fade-in {
  from {opacity:0; transform:translateY(20px);}
  to {opacity:1; transform:translateY(0);}
}
@keyframes float {
  0%,100% {transform:translateY(0);}
  50% {transform:translateY(-12px);}
}
.animate-fade-in {animation:fade-in 1s ease-out;}
.animate-fade-in-delay {animation:fade-in 1s ease-out 0.2s both;}
.animate-fade-in-delay-2 {animation:fade-in 1s ease-out 0.4s both;}
.animate-float {animation:float 6s ease-in-out infinite;}
html {scroll-behavior: smooth;}
body {font-family:'Inter',ui-sans-serif,system-ui,sans-serif;}
details summary::-webkit-details-marker {display:none;}
details[open] summary .fa-angle-down {transform:rotate(180deg);}
summary .fa-angle-down {transition:transform .3s;}
</style>
</head>
<body class="bg-gradient-to-br from-slate-900 via-slate-950 to-slate-900 text-white">

<!-- Navigation -->
<nav id="navbar" class="fixed w-full z-50 transition-all duration-300 bg-transparent">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-20">
      <a href="#accueil" class="text-2xl font-bold bg-gradient-to-r from-blue-400 to-violet-400 bg-clip-text text-transparent">HOUSSOU Samuel</a>
      <div class="hidden md:flex space-x-8">
        <a href="#accueil" class="hover:text-blue-400 transition-colors">Accueil</a>
        <a href="#apropos" class="hover:text-blue-400 transition-colors">À propos</a>
        <a href="#competences" class="hover:text-blue-400 transition-colors">Compétences</a>
        <a href="#projets" class="hover:text-blue-400 transition-colors">Projets</a>
        <a href="#explorations" class="hover:text-blue-400 transition-colors">Explorations</a>
        <a href="#parcours" class="hover:text-blue-400 transition-colors">Parcours</a>
        <a href="#contact" class="hover:text-blue-400 transition-colors">Contact</a>
      </div>
      <button id="mobile-menu-btn" class="md:hidden" aria-label="Menu"><i class="fas fa-bars text-2xl"></i></button>
    </div>
  </div>

  <div id="mobile-menu" class="md:hidden bg-slate-900/98 backdrop-blur-md hidden">
    <div class="px-4 pt-2 pb-4 space-y-3">
      <a href="#accueil" class="block py-2 hover:text-blue-400 transition-colors">Accueil</a>
      <a href="#apropos" class="block py-2 hover:text-blue-400 transition-colors">À propos</a>
      <a href="#competences" class="block py-2 hover:text-blue-400 transition-colors">Compétences</a>
      <a href="#projets" class="block py-2 hover:text-blue-400 transition-colors">Projets</a>
      <a href="#explorations" class="block py-2 hover:text-blue-400 transition-colors">Explorations</a>
      <a href="#parcours" class="block py-2 hover:text-blue-400 transition-colors">Parcours</a>
      <a href="#contact" class="block py-2 hover:text-blue-400 transition-colors">Contact</a>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section id="accueil" class="min-h-screen flex flex-col justify-center items-center px-4 relative overflow-hidden">
  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute top-1/4 -left-32 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-1/4 -right-32 w-96 h-96 bg-violet-600/20 rounded-full blur-3xl"></div>
  </div>

  <div class="text-center z-10 max-w-4xl mx-auto">
    <div class="mb-6 flex justify-center gap-6">
      <div class="p-4 bg-blue-500/20 rounded-lg animate-fade-in animate-float"><i class="fas fa-code text-blue-400 text-3xl"></i></div>
      <div class="p-4 bg-violet-500/20 rounded-lg animate-fade-in-delay animate-float" style="animation-delay:1s"><i class="fas fa-server text-violet-400 text-3xl"></i></div>
      <div class="p-4 bg-blue-500/20 rounded-lg animate-fade-in-delay-2 animate-float" style="animation-delay:2s"><i class="fas fa-mobile-screen-button text-blue-400 text-3xl"></i></div>
    </div>
    <h1 class="text-5xl md:text-7xl font-bold mb-2 animate-fade-in">
      HOUSSOU Samuel
    </h1>
    <span class="block text-2xl md:text-4xl mt-4 bg-gradient-to-r from-blue-400 via-violet-400 to-blue-400 bg-clip-text text-transparent font-bold animate-fade-in">
      Développeur Full-Stack Web & Mobile
    </span>
    <p class="text-lg md:text-xl text-gray-300 mt-8 mb-4 animate-fade-in-delay">
      Applications métier &bull; Plateformes SaaS &bull; Solutions digitales
    </p>
    <p class="text-md md:text-lg text-gray-400 max-w-2xl mx-auto mb-8 animate-fade-in-delay">
      Je conçois des applications web modernes et des plateformes de gestion adaptées aux besoins réels des entreprises.
    </p>

    <div class="flex flex-wrap justify-center gap-3 mb-10 animate-fade-in-delay-2">
      <span class="px-4 py-1.5 rounded-full text-sm bg-blue-500/10 border border-blue-500/40 text-blue-300">Laravel</span>
      <span class="px-4 py-1.5 rounded-full text-sm bg-violet-500/10 border border-violet-500/40 text-violet-300">React.js</span>
      <span class="px-4 py-1.5 rounded-full text-sm bg-blue-500/10 border border-blue-500/40 text-blue-300">Node.js</span>
      <span class="px-4 py-1.5 rounded-full text-sm bg-violet-500/10 border border-violet-500/40 text-violet-300">Django</span>
      <span class="px-4 py-1.5 rounded-full text-sm bg-blue-500/10 border border-blue-500/40 text-blue-300">PHP</span>
      <span class="px-4 py-1.5 rounded-full text-sm bg-blue-500/10 border border-blue-500/40 text-blue-300">Bases de données</span>
    </div>

    <div class="flex gap-4 justify-center flex-wrap animate-fade-in-delay-2">
      <a href="#projets" class="bg-gradient-to-r from-blue-500 to-violet-500 px-8 py-4 rounded-full font-semibold hover:shadow-lg hover:shadow-violet-500/50 transform hover:scale-105 transition-all"><i class="fas fa-rocket mr-2"></i>Découvrir mes projets</a>
      <a href="#" onclick="event.preventDefault();window.open('{{ route('cv') }}','_blank')" class="border-2 border-blue-400 px-8 py-4 rounded-full font-semibold hover:bg-blue-400/10 transition-all"><i class="fas fa-download mr-2"></i>Télécharger mon CV</a>
      <a href="#contact" class="border-2 border-violet-400 px-8 py-4 rounded-full font-semibold hover:bg-violet-400/10 transition-all"><i class="fas fa-paper-plane mr-2"></i>Me contacter</a>
    </div>
  </div>

  <div class="mt-16 flex justify-center animate-fade-in-delay-2">
    <div class="relative w-44 h-44 md:w-56 md:h-56">
      <div class="absolute inset-0 rounded-full bg-gradient-to-r from-blue-500 to-violet-500 opacity-20 blur-2xl animate-float"></div>
      <img src="{{ asset('images/houssou.png') }}" alt="Samuel HOUSSOU" class="relative w-full h-full object-cover rounded-full border-4 border-blue-500/50 shadow-lg">
    </div>
  </div>
</section>

<!-- À Propos Section -->
<section id="apropos" class="py-24 px-4 bg-slate-900/20">
  <div class="max-w-5xl mx-auto">
    <h2 class="text-4xl md:text-5xl font-bold mb-4 text-center">À propos de moi</h2>
    <p class="text-gray-400 text-center mb-16">Présentation, parcours et positionnement professionnel</p>

    <div class="flex flex-col md:flex-row gap-12 items-center">
      <div class="flex-1 bg-slate-800/50 p-8 rounded-2xl backdrop-blur-sm border border-slate-700">
        <p class="text-lg text-gray-300 leading-relaxed mb-6">
          Je suis <span class="text-blue-400 font-semibold">HOUSSOU Samuel</span>, développeur <span class="text-violet-400 font-semibold">Full-Stack Web & Mobile</span>, passionné par la conception de solutions numériques capables de répondre à des problèmes concrets.
        </p>
        <p class="text-lg text-gray-300 leading-relaxed mb-6">
          Formé en <span class="text-blue-400 font-semibold">Système Informatique et Logiciel</span>, je m'intéresse particulièrement au développement d'applications métier, à l'architecture logicielle et à la création de plateformes web modernes.
        </p>
        <p class="text-lg text-gray-300 leading-relaxed mb-6">
          Au fil de mon parcours, j'ai participé à la conception et au développement de plusieurs projets dans des domaines variés, notamment la <span class="text-violet-400 font-semibold">gestion événementielle</span>, l'<span class="text-violet-400 font-semibold">éducation</span>, l'<span class="text-violet-400 font-semibold">agroalimentaire</span> et les <span class="text-violet-400 font-semibold">services numériques</span>.
        </p>
        <p class="text-lg text-gray-300 leading-relaxed">
          J'aime relever des défis techniques, apprendre de nouvelles technologies et transformer des idées en applications fonctionnelles, utiles et évolutives.
        </p>
      </div>

      <div class="flex-1 w-full">
        <div class="bg-slate-800/50 p-8 rounded-2xl backdrop-blur-sm border border-slate-700 mb-6">
          <h3 class="text-xl font-bold text-blue-400 mb-4 flex items-center gap-2">
            <i class="fas fa-bullseye"></i> Positionnement professionnel
          </h3>
          <p class="text-gray-300 leading-relaxed">
            Développeur Full-Stack orienté vers la conception et le développement d'applications web modernes, de plateformes de gestion et de solutions numériques adaptées aux besoins des entreprises.
          </p>
        </div>
        <div class="bg-slate-800/50 p-8 rounded-2xl backdrop-blur-sm border border-slate-700 mb-6">
          <h3 class="text-xl font-bold text-violet-400 mb-4 flex items-center gap-2">
            <i class="fas fa-flag"></i> Objectifs professionnels
          </h3>
          <p class="text-gray-300 leading-relaxed mb-4">
            Mon objectif est de concevoir des solutions numériques utiles, performantes et évolutives, capables de répondre aux besoins des entreprises et des utilisateurs.
          </p>
          <p class="text-gray-300 leading-relaxed mb-4">
            Je souhaite approfondir mon expertise en développement Full-Stack, en architecture logicielle et en conception d'applications web et mobiles.
          </p>
          <p class="text-gray-300 leading-relaxed">
            Passionné par les défis techniques, je m'intéresse particulièrement aux projets qui associent innovation, résolution de problèmes et impact concret.
          </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
          <div class="p-5 bg-slate-800/50 rounded-xl border border-slate-700 text-center">
            <i class="fas fa-briefcase text-2xl text-blue-400 mb-3"></i>
            <p class="text-gray-300 text-sm">Applications métier</p>
          </div>
          <div class="p-5 bg-slate-800/50 rounded-xl border border-slate-700 text-center">
            <i class="fas fa-cloud text-2xl text-violet-400 mb-3"></i>
            <p class="text-gray-300 text-sm">Plateformes SaaS</p>
          </div>
          <div class="p-5 bg-slate-800/50 rounded-xl border border-slate-700 text-center">
            <i class="fas fa-lightbulb text-2xl text-blue-400 mb-3"></i>
            <p class="text-gray-300 text-sm">Solutions digitales</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-12 text-center">
      <div class="p-6 bg-slate-800/50 rounded-xl border border-slate-700">
        <div class="text-3xl font-bold text-blue-400 mb-2">{{ $projects->count() }}</div>
        <div class="text-gray-400 text-sm">Projets majeurs</div>
      </div>
      <div class="p-6 bg-slate-800/50 rounded-xl border border-slate-700">
        <div class="text-3xl font-bold text-violet-400 mb-2">{{ $explorations->count() }}</div>
        <div class="text-gray-400 text-sm">Idées explorées</div>
      </div>
      <div class="p-6 bg-slate-800/50 rounded-xl border border-slate-700">
        <div class="text-3xl font-bold text-blue-400 mb-2">{{ $competences->flatten()->count() }}</div>
        <div class="text-gray-400 text-sm">Compétences techniques</div>
      </div>
      <div class="p-6 bg-slate-800/50 rounded-xl border border-slate-700">
        <div class="text-3xl font-bold text-violet-400 mb-2">100%</div>
        <div class="text-gray-400 text-sm">Engagement</div>
      </div>
    </div>
  </div>
</section>

<!-- Compétences Section -->
@if($competences->isNotEmpty())
<section id="competences" class="py-24 px-4 bg-slate-900/30">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-4xl md:text-5xl font-bold mb-4 text-center">Compétences Techniques</h2>
    <p class="text-gray-400 text-center mb-16">Stack technologique et expertise développées au fil de mon parcours</p>

    <div class="grid md:grid-cols-2 gap-8">
      @foreach($competences as $categorie => $liste)
      <div class="bg-slate-800/50 p-6 rounded-xl backdrop-blur-sm border border-slate-700 {{ $categorie === 'Autres compétences' ? 'md:col-span-2' : '' }}">
        <h3 class="text-xl font-bold mb-6 {{ $categorie === 'Autres compétences' ? 'text-violet-400' : 'text-blue-400' }} flex items-center gap-2">
          <div class="w-2 h-2 {{ $categorie === 'Autres compétences' ? 'bg-violet-400' : 'bg-blue-400' }} rounded-full"></div>{{ $categorie }}
        </h3>

        @if($categorie === 'Autres compétences')
        <ul class="grid sm:grid-cols-2 gap-3">
          @foreach($liste as $competence)
          <li class="flex items-start gap-3 text-gray-300">
            <i class="fas fa-check-circle text-violet-400 mt-1"></i>
            <span>{{ $competence->nom }}</span>
          </li>
          @endforeach
        </ul>
        @else
        <div class="space-y-4">
          @foreach($liste as $competence)
          <div>
            <div class="flex justify-between mb-2">
              <span class="font-medium text-sm">{{ $competence->nom }}</span>
              <span class="text-blue-400 font-semibold text-sm">{{ $competence->niveau }}%</span>
            </div>
            <div class="h-2 bg-slate-700 rounded-full overflow-hidden">
              <div class="h-full bg-gradient-to-r from-blue-500 to-violet-500 rounded-full" style="width:{{ min(100, max(0, (int) $competence->niveau)) }}%"></div>
            </div>
          </div>
          @endforeach
        </div>
        @endif
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif

<!-- Projets Section -->
<section id="projets" class="py-24 px-4 bg-slate-900/10">
  <div class="max-w-7xl mx-auto">
    <h2 class="text-4xl md:text-5xl font-bold mb-4 text-center">Mes Projets & Réalisations</h2>
    <p class="text-gray-400 text-center mb-10 max-w-2xl mx-auto">
      Applications métier, plateformes SaaS et solutions digitales
    </p>

    @if($projects->count() > 1)
    <div class="flex flex-wrap justify-center gap-3 mb-12" id="filtres-projets">
      <button type="button" data-categorie="tous" class="filtre-btn px-5 py-2 rounded-full text-sm font-semibold border border-blue-500 text-blue-300 bg-blue-500/20 transition-all">Tous</button>
      @foreach($projects->pluck('domaine')->unique() as $domaine)
      <button type="button" data-categorie="{{ Str::slug($domaine) }}" class="filtre-btn px-5 py-2 rounded-full text-sm font-semibold border border-slate-600 text-gray-300 hover:border-blue-500 hover:text-blue-300 transition-all">{{ $domaine }}</button>
      @endforeach
    </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
      @forelse($projects as $project)
      <div class="projet-card group bg-slate-800/50 rounded-2xl overflow-hidden backdrop-blur-sm border border-slate-700 hover:border-blue-500 transition-all duration-300 hover:shadow-xl hover:shadow-blue-500/20 hover:-translate-y-2 flex flex-col" data-categorie="{{ Str::slug($project->domaine) }}">
        <div class="relative overflow-hidden h-56">
          @if($project->image)
          <img src="{{ \Illuminate\Support\Str::startsWith($project->image, 'http') ? $project->image : asset($project->image) }}" alt="{{ $project->titre }}" loading="lazy" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
          @else
          <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-blue-500/20 to-violet-500/20">
            <i class="fas fa-laptop-code text-4xl text-blue-400/60"></i>
          </div>
          @endif
          <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-70"></div>
          <div class="absolute top-4 right-4">
            @php
                $badge = match($project->statut) {
                    'Terminé' => ['bg-green-500/20', 'text-green-300', 'border-green-500/50'],
                    'En cours' => ['bg-yellow-500/20', 'text-yellow-300', 'border-yellow-500/50'],
                    'En développement' => ['bg-amber-500/20', 'text-amber-300', 'border-amber-500/50'],
                    'À actualiser' => ['bg-purple-500/20', 'text-purple-300', 'border-purple-500/50'],
                    default => ['bg-blue-500/20', 'text-blue-300', 'border-blue-500/50'],
                };
            @endphp
            <span class="px-3 py-1 rounded-full text-xs font-semibold {{ $badge[0] }} {{ $badge[1] }} border {{ $badge[2] }}">{{ $project->statut }}</span>
          </div>
          <div class="absolute bottom-4 left-4">
            <h3 class="text-2xl font-bold">{{ $project->titre }}</h3>
          </div>
        </div>

        <div class="p-6 flex flex-col flex-1">
          @if($project->type || $project->domaine || $project->role)
          <div class="flex flex-wrap gap-2 mb-4">
            @if($project->type)
            <span class="px-3 py-1 rounded-full text-xs bg-slate-900/60 border border-slate-600 text-gray-300"><i class="fas fa-tag mr-1 text-blue-400"></i>{{ $project->type }}</span>
            @endif
            @if($project->domaine)
            <span class="px-3 py-1 rounded-full text-xs bg-slate-900/60 border border-slate-600 text-gray-300"><i class="fas fa-folder mr-1 text-violet-400"></i>{{ $project->domaine }}</span>
            @endif
            @if($project->role)
            <span class="px-3 py-1 rounded-full text-xs bg-slate-900/60 border border-slate-600 text-gray-300"><i class="fas fa-user mr-1 text-blue-400"></i>{{ $project->role }}</span>
            @endif
          </div>
          @endif

          @if($project->presentation)
          <p class="text-gray-300 leading-relaxed mb-4">{{ $project->presentation }}</p>
          @else
          <p class="text-gray-400 mb-4">{{ $project->description }}</p>
          @endif

          @if(!empty($project->fonctionnalites))
          <details class="mb-4">
            <summary class="cursor-pointer font-semibold text-blue-400 hover:text-violet-400 transition-colors select-none flex items-center gap-2"><i class="fas fa-list-check"></i>Fonctionnalités principales<i class="fas fa-angle-down ml-auto"></i></summary>
            <ul class="mt-3 space-y-2">
              @foreach($project->fonctionnalites as $fonctionnalite)
              <li class="flex items-start gap-2 text-sm text-gray-300">
                <i class="fas fa-check text-violet-400 mt-1"></i>
                {{ $fonctionnalite }}
              </li>
              @endforeach
            </ul>
          </details>
          @endif

          @if(!empty($project->tags))
          <div class="flex flex-wrap gap-2 mt-auto pt-4">
            @foreach($project->tags as $tag)
            <span class="px-3 py-1 bg-blue-500/20 rounded-full text-xs text-blue-300 border border-blue-500/30">{{ $tag }}</span>
            @endforeach
          </div>
          @endif
        </div>
      </div>
      @empty
      <p class="text-gray-400 col-span-full text-center">Aucun projet à afficher pour le moment.</p>
      @endforelse
    </div>
  </div>
</section>

<!-- Explorations Section -->
@if($explorations->isNotEmpty())
<section id="explorations" class="py-24 px-4 bg-slate-900/30">
  <div class="max-w-7xl mx-auto">
    <h2 class="text-4xl md:text-5xl font-bold mb-4 text-center">Autres Projets & Explorations</h2>
    <p class="text-gray-400 text-center mb-16 max-w-2xl mx-auto">
      Idées et projets exploratoires qui montrent la diversité de mes réflexions et de ma veille technologique
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      @foreach($explorations as $exploration)
      <div class="group bg-slate-800/40 rounded-2xl overflow-hidden backdrop-blur-sm border border-slate-700/60 hover:border-violet-500 transition-all duration-300 hover:shadow-xl hover:shadow-violet-500/20 hover:-translate-y-2 flex flex-col">
        <div class="relative overflow-hidden h-44">
          @if($exploration->image)
          <img src="{{ \Illuminate\Support\Str::startsWith($exploration->image, 'http') ? $exploration->image : asset($exploration->image) }}" alt="{{ $exploration->titre }}" loading="lazy" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300 opacity-80">
          @else
          <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-violet-500/20 to-blue-500/20">
            <i class="fas fa-lightbulb text-4xl text-violet-400/60"></i>
          </div>
          @endif
          <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-70"></div>
          <div class="absolute top-4 right-4">
            @php
                $badgeExp = match($exploration->statut) {
                    'Exploration' => ['bg-violet-500/20', 'text-violet-300', 'border-violet-500/50'],
                    'Conception de MVP' => ['bg-cyan-500/20', 'text-cyan-300', 'border-cyan-500/50'],
                    default => ['bg-blue-500/20', 'text-blue-300', 'border-blue-500/50'],
                };
            @endphp
            <span class="px-3 py-1 rounded-full text-xs font-semibold {{ $badgeExp[0] }} {{ $badgeExp[1] }} border {{ $badgeExp[2] }}">{{ $exploration->statut }}</span>
          </div>
          <div class="absolute bottom-4 left-4">
            <h3 class="text-lg font-bold leading-tight">{{ $exploration->titre }}</h3>
          </div>
        </div>

        <div class="p-6 flex flex-col flex-1">
          <div class="flex flex-wrap gap-2 mb-3">
            <span class="px-3 py-1 rounded-full text-xs bg-slate-900/60 border border-slate-600 text-gray-300"><i class="fas fa-tag mr-1 text-violet-400"></i>{{ $exploration->type }}</span>
            <span class="px-3 py-1 rounded-full text-xs bg-slate-900/60 border border-slate-600 text-gray-300"><i class="fas fa-folder mr-1 text-blue-400"></i>{{ $exploration->domaine }}</span>
          </div>

          @if($exploration->presentation)
          <p class="text-gray-400 text-sm leading-relaxed mb-4">{{ $exploration->presentation }}</p>
          @endif

          @if(!empty($exploration->fonctionnalites))
          <details class="mb-4">
            <summary class="cursor-pointer font-semibold text-sm text-violet-400 hover:text-blue-400 transition-colors select-none flex items-center gap-2"><i class="fas fa-list-check"></i>Fonctionnalités envisagées<i class="fas fa-angle-down ml-auto"></i></summary>
            <ul class="mt-3 space-y-1.5">
              @foreach($exploration->fonctionnalites as $fonctionnalite)
              <li class="flex items-start gap-2 text-xs text-gray-400">
                <i class="fas fa-check text-violet-400 mt-0.5"></i>
                {{ $fonctionnalite }}
              </li>
              @endforeach
            </ul>
          </details>
          @endif

          @if(!empty($exploration->tags))
          <div class="flex flex-wrap gap-2 mt-auto pt-3">
            @foreach($exploration->tags as $tag)
            <span class="px-3 py-1 bg-violet-500/15 rounded-full text-xs text-violet-300 border border-violet-500/30">{{ $tag }}</span>
            @endforeach
          </div>
          @endif
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif

<!-- Parcours : Expériences & Formation Section -->
@if($experiences->isNotEmpty())
<section id="parcours" class="py-24 px-4 bg-slate-900/10">
  <div class="max-w-5xl mx-auto">
    <h2 class="text-4xl md:text-5xl font-bold mb-4 text-center">Parcours</h2>
    <p class="text-gray-400 text-center mb-16">Expériences professionnelles et formation académique</p>

    <div class="relative border-l-2 border-slate-700 ml-4 md:ml-6 space-y-10">
      @foreach($experiences as $experience)
      @php
          $picto = match($experience->type) {
              'stage' => ['fa-briefcase', 'text-blue-400'],
              'developpement' => ['fa-laptop-code', 'text-violet-400'],
              'formation' => ['fa-graduation-cap', 'text-violet-400'],
              default => ['fa-circle', 'text-blue-400'],
          };
      @endphp
      <div class="relative pl-10 md:pl-14">
        <div class="absolute -left-[19px] md:-left-[27px] top-1 w-9 h-9 md:w-10 md:h-10 rounded-full bg-slate-800 border border-slate-600 flex items-center justify-center">
          <i class="fas {{ $picto[0] }} {{ $picto[1] }}"></i>
        </div>
        <div class="bg-slate-800/50 p-6 rounded-2xl backdrop-blur-sm border border-slate-700">
          <div class="flex flex-wrap items-center gap-3 mb-3">
            <h3 class="text-xl font-bold">{{ $experience->titre }}
              @if($experience->organisme)<span class="text-blue-400"> — {{ $experience->organisme }}</span>@endif
            </h3>
            @if($experience->periode)
            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-violet-500/15 border border-violet-500/40 text-violet-300">{{ $experience->periode }}</span>
            @endif
          </div>
          @if($experience->lieu || $experience->domaine)
          <p class="text-gray-400 text-sm mb-3">
            @if($experience->lieu)<i class="fas fa-map-marker-alt mr-1 text-blue-400"></i>{{ $experience->lieu }}@endif
            @if($experience->domaine)
            <span class="mx-2">•</span><i class="fas fa-folder-open mr-1 text-violet-400"></i>{{ $experience->domaine }}
            @endif
          </p>
          @endif
          @if($experience->description)
          <p class="text-gray-300 leading-relaxed">{{ $experience->description }}</p>
          @endif
          @if(!empty($experience->details))
          <ul class="mt-4 grid sm:grid-cols-2 gap-2">
            @foreach($experience->details as $detail)
            <li class="flex items-start gap-2 text-sm text-gray-300">
              <i class="fas fa-check text-violet-400 mt-1"></i>{{ $detail }}
            </li>
            @endforeach
          </ul>
          @endif
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif

<!-- Contact Section -->
<section id="contact" class="py-24 px-4 bg-slate-900/30">
  <div class="max-w-4xl mx-auto">
    <h2 class="text-4xl md:text-5xl font-bold mb-4 text-center">Travaillons Ensemble</h2>
    <p class="text-gray-400 text-center mb-12">Un projet en tête ? Une opportunité à discuter ? Contactez-moi !</p>

    <div class="bg-slate-800/50 p-8 md:p-12 rounded-2xl backdrop-blur-sm border border-slate-700">
      @if(session('success'))
      <div class="mb-8 p-4 rounded-lg bg-green-500/15 border border-green-500/40 text-green-300 flex items-center gap-3">
        <i class="fas fa-check-circle"></i> {{ session('success') }}
      </div>
      @endif

      @if(session('error'))
      <div class="mb-8 p-4 rounded-lg bg-red-500/15 border border-red-500/40 text-red-300 flex items-center gap-3">
        <i class="fas fa-exclamation-circle"></i> {{ session('error') }}
      </div>
      @endif

      @if($errors->any())
      <div class="mb-8 p-4 rounded-lg bg-red-500/15 border border-red-500/40 text-red-300">
        <ul class="list-disc list-inside space-y-1">
          @foreach($errors->all() as $error)
          <li class="text-sm">{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <div class="grid md:grid-cols-2 gap-6 mb-8 pb-8 border-b border-slate-600">
        <div class="flex items-center gap-3 p-4 bg-slate-900/50 rounded-lg">
          <i class="fas fa-envelope text-blue-400 text-2xl"></i>
          <div>
            <p class="text-gray-400 text-sm">Email</p>
            <a href="mailto:{{ $portfolioEmail }}" class="text-white hover:text-blue-400 transition-colors">{{ $portfolioEmail }}</a>
          </div>
        </div>
        <div class="flex items-center gap-3 p-4 bg-slate-900/50 rounded-lg">
          <i class="fas fa-phone text-violet-400 text-2xl"></i>
          <div>
            <p class="text-gray-400 text-sm">Téléphone / WhatsApp</p>
            <a href="{{ $portfolioPhoneLink }}" class="text-white hover:text-violet-400 transition-colors">{{ $portfolioPhone }}</a>
          </div>
        </div>
      </div>

      <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
        @csrf
        <div class="grid md:grid-cols-2 gap-6">
          <input type="text" name="nom" value="{{ old('nom') }}" placeholder="Votre nom" required class="w-full px-4 py-3 bg-slate-900/50 border border-slate-600 rounded-lg focus:outline-none focus:border-blue-500 transition-colors text-white placeholder-gray-400">
          <input type="email" name="email" value="{{ old('email') }}" placeholder="Votre email" required class="w-full px-4 py-3 bg-slate-900/50 border border-slate-600 rounded-lg focus:outline-none focus:border-violet-500 transition-colors text-white placeholder-gray-400">
        </div>
        <input type="text" name="sujet" value="{{ old('sujet') }}" placeholder="Sujet" class="w-full px-4 py-3 bg-slate-900/50 border border-slate-600 rounded-lg focus:outline-none focus:border-blue-500 transition-colors text-white placeholder-gray-400">
        <textarea rows="5" name="message" placeholder="Votre message" required class="w-full px-4 py-3 bg-slate-900/50 border border-slate-600 rounded-lg focus:outline-none focus:border-violet-500 transition-colors resize-none text-white placeholder-gray-400">{{ old('message') }}</textarea>
        <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-violet-500 py-4 rounded-lg font-semibold hover:shadow-lg hover:shadow-violet-500/50 transform hover:scale-[1.02] transition-all"><i class="fas fa-paper-plane mr-2"></i> Envoyer le message</button>
      </form>

      <div class="text-center mt-12">
        <a href="#" onclick="event.preventDefault();window.open('{{ route('cv') }}','_blank')" class="inline-block border-2 border-blue-400 px-6 py-3 rounded-full font-semibold hover:bg-blue-400/10 transition-all mb-8"><i class="fas fa-download mr-2"></i>Télécharger mon CV</a>
      </div>

      <div class="flex justify-center gap-6">
        <a href="{{ $portfolioGithub }}" target="_blank" rel="noopener" class="p-4 bg-slate-800 rounded-full hover:bg-blue-500 transition-colors transform hover:scale-110"><i class="fab fa-github text-2xl"></i></a>
        <a href="{{ $portfolioLinkedin }}" target="_blank" rel="noopener" class="p-4 bg-slate-800 rounded-full hover:bg-blue-500 transition-colors transform hover:scale-110"><i class="fab fa-linkedin text-2xl"></i></a>
        <a href="{{ $portfolioFacebook }}" target="_blank" rel="noopener" class="p-4 bg-slate-800 rounded-full hover:bg-violet-500 transition-colors transform hover:scale-110"><i class="fab fa-facebook-f text-2xl"></i></a>
        <a href="mailto:{{ $portfolioEmail }}" class="p-4 bg-slate-800 rounded-full hover:bg-blue-500 transition-colors transform hover:scale-110"><i class="fas fa-envelope text-2xl"></i></a>
        <a href="{{ $portfolioPhoneLink }}" class="p-4 bg-slate-800 rounded-full hover:bg-violet-500 transition-colors transform hover:scale-110"><i class="fas fa-phone text-2xl"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="py-8 px-4 border-t border-slate-800">
  <div class="max-w-7xl mx-auto text-center text-gray-400">
    <p>&copy; {{ date('Y') }} HOUSSOU Samuel - Développeur Full-Stack Web & Mobile. Tous droits réservés.</p>
    <p class="text-sm mt-2"><i class="fas fa-map-marker-alt mr-1 text-blue-400"></i>{{ $portfolioCity }}</p>
  </div>
</footer>

<script>
window.addEventListener('scroll', function() {
  const navbar = document.getElementById('navbar');
  if(window.scrollY > 50){
    navbar.classList.add('bg-slate-900/95','backdrop-blur-md','shadow-lg');
    navbar.classList.remove('bg-transparent');
  } else {
    navbar.classList.remove('bg-slate-900/95','backdrop-blur-md','shadow-lg');
    navbar.classList.add('bg-transparent');
  }
});
const mobileMenuBtn = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
mobileMenuBtn.addEventListener('click',()=>{mobileMenu.classList.toggle('hidden');});
mobileMenu.querySelectorAll('a').forEach(link=>{link.addEventListener('click',()=>{mobileMenu.classList.add('hidden');});});

const filtreBtns = document.querySelectorAll('#filtres-projets .filtre-btn');
const cartes = document.querySelectorAll('.projet-card');
filtreBtns.forEach(btn=>{
  btn.addEventListener('click',()=>{
    filtreBtns.forEach(b=>{b.classList.remove('border-blue-500','text-blue-300','bg-blue-500/20');b.classList.add('border-slate-600','text-gray-300');});
    btn.classList.add('border-blue-500','text-blue-300','bg-blue-500/20');
    btn.classList.remove('border-slate-600','text-gray-300');
    const cible = btn.dataset.categorie;
    cartes.forEach(card=>{
      card.style.display = (cible === 'tous' || card.dataset.categorie === cible) ? '' : 'none';
    });
  });
});
</script>

</body>
</html>