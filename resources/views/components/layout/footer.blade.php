@if (!Route::is('page.privacy') && !Route::is('page.imprint'))
<x-layout.section class="relative !p-0">
  <x-misc.map />
</x-layout.section>
@endif
<footer>
  <div class="bg-fern text-linen text-sm py-5 md:py-10 px-15 md:px-25">
    <x-layout.inner>
      <nav>
        <ul class="flex gap-x-15 lg:gap-x-20">
          <li>
            <a href="{{ route('page.imprint') }}" title="Mentions légales">Mentions légales</a>
          </li>
          <li>
            <a href="{{ route('page.privacy') }}" title="Protection des données">Protection des données</a>
          </li>
          <li>
            <a href="https://stoz.ch" target="_blank" title="stoz.ch" rel="noopener">design by stoz</a>
          </li>
        </ul>
      </nav>
    </x-layout.inner>
  </div>
</footer>
@livewireScripts
@vite('resources/js/app.js')
{{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-CQR3W75S29"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-CQR3W75S29');
</script> --}}
</body>
</html>
<!-- made with ❤ by stoz.ch & marceli.to -->