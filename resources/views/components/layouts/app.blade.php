<!doctype html>
<!-- dir="rtl" for RTL support -->
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ $title ?? 'Page Title' }}</title>

  <!-- Inter web font from bunny.net (GDPR compliant) -->
  <link rel="preconnect" href="https://fonts.bunny.net" />
  <link
    href="https://fonts.bunny.net/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />

  <!-- Tailwind CSS Play CDN (mainly for development/testing purposes) -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>

  <!-- Tailwind CSS v3 Configuration -->
  <script>
    const defaultTheme = tailwind.defaultTheme;
    const colors = tailwind.colors;
    const plugin = tailwind.plugin;

    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          fontFamily: {
            sans: ["Inter", ...defaultTheme.fontFamily.sans],
          },
        },
      },
    };
  </script>
  <!-- Alpine x-cloak style (https://alpinejs.dev/directives/cloak) -->
  <style>
    [x-cloak] {
      display: none !important;
    }

    .grid-background {
      background-image:
        linear-gradient(to right, #e5e7eb 1px, transparent 1px),
        linear-gradient(to bottom, #e5e7eb 1px, transparent 1px);
      background-size: 32px 32px;
    }
  </style>
  @livewireStyles
</head>

<body>
  {{ $slot}}

  <script>
    document.addEventListener('livewire:initialized', () => {
      console.log("Livewire loaded");
      window.livewireScriptConfig = {};
      window.livewireScriptConfig.uri = "/livewire/update";
    });
  </script>
  @livewireScripts
</body>

</html>