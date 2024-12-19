@props(['route', 'title' => ''])
<li>
  <a 
    href="{{ route($route) }}" 
    title="{{ $title }}"
    {{ $attributes->merge(['class' => 'block py-4 lowercase font-bold text-md xl:text-xl md:mr-20 xl:mr-28 hover:text-serene transition-colors']) }}>
    {{ $title }}
  </a>
</li>