@extends('app')
@section('seo_title', 'Venez vivre l’expérience «Creative Factory»')
@section('seo_description', 'Proche de la gare, à la rue du Chêne 5 à Renens, des appartements modernes de 1,5 à 7,5 pièces ainsi que des lofts et des surfaces commerciales seront disponibles à la location dès le 1er septembre 2025.')
@section('content')

<x-layout.section class="bg-white !p-0">
  <x-media.image 
    :image="'rue-de-chene-exterieure'" 
    :alt="'Visualisierung'" />
</x-layout.section>

<x-layout.section class="bg-white">
  <x-layout.inner>
    <div class="max-w-3xl">
      <h1 class="max-w-xl">Venez vivre l’expérience «Creative Factory»</h1>
      <h2 class="text-xl">Nouvelle promotion!<br>Appartements et surfaces commerciales</h2>
      <p>Proche de la gare, à la rue du Chêne 5 à Renens, des appartements modernes de 1,5 à 7,5 pièces ainsi que des lofts et des surfaces commerciales seront disponibles à la location dès le 1er septembre 2025.</p>
      <p>Côté parc : des logements atypiques à caractère « loft-activité » verront ainsi le jour et bénéficieront de l’exposition favorable, du dégagement visuel et du calme du nouveau jardin arboré. Côté voie de chemin de fer : des ateliers et commerces. Le Pavillon accueillera des logements en colocation, ainsi que des activités ouvertes au public en rez-de-chaussée.</p>
      <h3 class="mb-0">Vous êtes intéressé(e)s?</h3>
      <p>Nous vous enverrons volontiers de plus amples informations dès que la commercialisation sera lancée. Veuillez remplir le formulaire de contact.</p>
    </div>
  </x-layout.inner>
</x-layout.section>

<x-layout.section class="bg-linen text-graphite">
  <x-layout.inner>
    <h2 class="text-fern mb-15 lg:mb-25">Formulaire de contact</h2>
    @livewire('create-inquiry')
  </x-layout.inner>
</x-layout.section>

@endsection