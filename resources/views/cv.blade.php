<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CV - HOUSSOU Samuel | Développeur Full-Stack Web & Mobile</title>
@php
    $portfolioEmail = config('portfolio.email');
    $portfolioPhone = config('portfolio.phone');
    $portfolioCity = config('portfolio.city');
    $portfolioGithub = config('portfolio.github');
    $portfolioLinkedin = config('portfolio.linkedin');
    $portfolioFacebook = config('portfolio.facebook');
@endphp
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
:root{ --blue:#2563eb; --violet:#7c3aed; --ink:#0f172a; --muted:#475569; --line:#e2e8f0; }
*{margin:0;padding:0;box-sizing:border-box;}
body{font-family:'Inter',ui-sans-serif,system-ui,sans-serif;color:var(--ink);background:#f1f5f9;font-size:13px;line-height:1.55;}
.page{max-width:850px;margin:0 auto;background:#fff;padding:48px 56px;}
header{display:flex;justify-content:space-between;align-items:flex-start;border-bottom:3px solid var(--blue);padding-bottom:20px;margin-bottom:24px;}
h1{font-size:26px;font-weight:800;letter-spacing:-.5px;}
h1 span{display:block;font-size:15px;font-weight:600;background:linear-gradient(90deg,var(--blue),var(--violet));-webkit-background-clip:text;background-clip:text;color:transparent;margin-top:4px;}
.contact{text-align:right;color:var(--muted);font-size:12px;}
.contact div{margin-bottom:3px;}
.contact i{color:var(--blue);}
section{margin-bottom:22px;}
h2{font-size:14px;font-weight:700;text-transform:uppercase;letter-spacing:1px;color:var(--blue);border-bottom:1px solid var(--line);padding-bottom:6px;margin-bottom:12px;}
.obj{color:#334155;}
.obj b{color:var(--ink);}
.grid{display:grid;grid-template-columns:1fr 1fr;gap:0 28px;}
.item{display:flex;gap:10px;margin-bottom:10px;}
.item .ic{width:10px;height:10px;border-radius:50%;background:linear-gradient(135deg,var(--blue),var(--violet));margin-top:5px;flex-shrink:0;}
.item .t{font-weight:700;}
.item .s{color:var(--muted);font-size:12px;}
.item .d{margin-top:3px;color:#334155;}
ul{list-style:none;}
ul li{padding-left:16px;position:relative;margin-bottom:5px;}
ul li::before{content:"";position:absolute;left:0;top:7px;width:6px;height:6px;border-radius:50%;background:var(--blue);}
.tag{display:inline-block;background:#eef2ff;color:var(--blue);border:1px solid #c7d2fe;border-radius:999px;padding:2px 10px;font-size:11px;margin:0 4px 4px 0;font-weight:600;}
@media print{ body{background:#fff;} .page{padding:24px 8mm;background:#fff;} .noprint{display:none;} }
@page{size:A4;margin:12mm;}
.bar{position:relative;background:#e2e8f0;height:6px;border-radius:999px;overflow:hidden;margin-top:4px;}
.bar i{position:absolute;inset:0;background:linear-gradient(90deg,var(--blue),var(--violet));border-radius:999px;}
</style>
</head>
<body>
<div class="noprint" style="background:#94a3b8;padding:10px 0;">
  <div class="page" style="padding:0;background:transparent;text-align:center;">
    <button onclick="window.print()" style="cursor:pointer;background:var(--ink);color:#fff;border:0;border-radius:999px;padding:10px 22px;font-family:inherit;font-weight:600;">Imprimer / enregistrer en PDF</button>
  </div>
</div>
<div class="page">
  <header>
    <div>
      <h1>HOUSSOU Samuel<span>Développeur Full-Stack Web &amp; Mobile</span></h1>
    </div>
    <div class="contact">
      <div><i>✉</i> {{ $portfolioEmail }}</div>
      <div><i>☎</i> {{ $portfolioPhone }}</div>
      <div><i>⌖</i> {{ $portfolioCity }}</div>
      <div><i>◎</i> GitHub : {{ $portfolioGithub }}</div>
      <div><i>☑</i> LinkedIn : {{ $portfolioLinkedin }}</div>
    </div>
  </header>

  <section>
    <h2>Profil</h2>
    <p class="obj">
      <b>Développeur Full-Stack Web &amp; Mobile</b> passionné par la conception d'applications métier, de plateformes SaaS et de solutions digitales. Formé en <b>Système Informatique et Logiciel</b>, je conçois des applications web modernes et des plateformes de gestion adaptées aux besoins réels des entreprises : gestion événementielle, éducation, agroalimentaire et services numériques.
    </p>
  </section>

  <section>
    <h2>Expériences</h2>
    @foreach($experiences as $experience)
    @if($experience->type !== 'formation')
    <div class="item">
      <div class="ic"></div>
      <div>
        <div class="t">{{ $experience->titre }}{{ $experience->organisme ? ' — ' . $experience->organisme : '' }}</div>
        <div class="s">{{ collect([$experience->periode, $experience->lieu, $experience->domaine])->filter()->implode(' • ') }}</div>
        @if($experience->description)<div class="d">{{ $experience->description }}</div>@endif
      </div>
    </div>
    @endif
    @endforeach
  </section>

  <section>
    <h2>Formation</h2>
    @foreach($experiences as $experience)
    @if($experience->type === 'formation')
    <div class="item">
      <div class="ic"></div>
      <div>
        <div class="t">{{ $experience->titre }}{{ $experience->organisme ? ' — ' . $experience->organisme : '' }}</div>
        <div class="s">{{ collect([$experience->periode, $experience->lieu])->filter()->implode(' • ') }}</div>
        @if($experience->details)
        <ul style="margin-top:6px;">
          @foreach($experience->details as $detail)<li>{{ $detail }}</li>@endforeach
        </ul>
        @endif
      </div>
    </div>
    @endif
    @endforeach
  </section>

  <section>
    <h2>Projets &amp; Réalisations</h2>
    @foreach($projects as $project)
    <div class="item">
      <div class="ic"></div>
      <div>
        <div class="t">{{ $project->titre }} — <span style="color:var(--muted);font-weight:500;">{{ $project->domaine }}</span> <span style="color:var(--violet);">·</span> {{ $project->statut }}</div>
        @if($project->presentation)<div class="d">{{ $project->presentation }}</div>@endif
        @if(!empty($project->tags))<div style="margin-top:6px;">@foreach($project->tags as $tag)<span class="tag">{{ $tag }}</span>@endforeach</div>@endif
      </div>
    </div>
    @endforeach
  </section>

  <section>
    <h2>Compétences</h2>
    <div class="grid">
      @foreach($competences as $categorie => $liste)
      @if(str_contains($categorie, 'Autres'))
      <div>
        <div style="font-weight:700;margin-bottom:6px;">{{ $categorie }}</div>
        <ul>
          @foreach($liste as $competence)<li>{{ $competence->nom }}</li>@endforeach
        </ul>
      </div>
      @else
      <div>
        <div style="font-weight:700;margin-bottom:4px;">{{ $categorie }}</div>
        @foreach($liste as $competence)
        <div style="margin-bottom:6px;">
          <div style="display:flex;justify-content:space-between;font-size:12px;"><span>{{ $competence->nom }}</span><span style="color:var(--muted);">{{ $competence->niveau }}%</span></div>
          <div class="bar"><i style="width:{{ min(100,max(0,(int)$competence->niveau)) }}%"></i></div>
        </div>
        @endforeach
      </div>
      @endif
      @endforeach
    </div>
  </section>

  <section>
    <h2>Contact &amp; Réseaux</h2>
    <ul>
      <li>GitHub : {{ $portfolioGithub }}</li>
      <li>LinkedIn : {{ $portfolioLinkedin }}</li>
      <li>Facebook : {{ $portfolioFacebook }}</li>
    </ul>
  </section>
</div>
</body>
</html>