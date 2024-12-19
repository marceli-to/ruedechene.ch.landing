<x-mail::message>
  <div class="text-base pb-base">
    Mesdames et Messieurs<br><br>
    Nous vous remercions de l'intérêt que vous portez à notre projet. Nous nous ferons un plaisir de vous contacter dès que la commercialisation officielle sera lancée.<br><br>
    Votre équipe de la «Creative Factory»
  </div>
  <br>
  <div class="text-base pb-base">
    <strong>Vos coordonnées :</strong>
  </div>
  <div class="text-base pb-base">
    <strong>Prénom</strong><br>
    {{ $data->firstname }}
  </div>
  <div class="text-base pb-base">
    <strong>Nom</strong><br>
    {{ $data->name }}
  </div>
  <div class="text-base pb-base">
    <strong>Rue/numéro</strong><br>
    {{ $data->street }}
  </div>
  <div class="text-base pb-base">
    <strong>NPA/localité</strong><br>
    {{ $data->location }}
  </div>
  <div class="text-base pb-base">
    <strong>E-Mail</strong><br>
    {{ $data->email }}
  </div>
  <div class="text-base pb-base">
    <strong>Téléphone</strong><br>
    {{ $data->phone }}
  </div>
  <div class="text-base pb-base">
    <strong>Intérêt pour :</strong><br>
    {{ $data->interest }}
  </div>
</x-mail::message>
