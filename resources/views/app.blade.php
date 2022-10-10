<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <script src="{{ mix('/js/app.js') }}" defer></script>
  <script src="{{ mix('/js/manifest.js') }}" defer></script>
  <script src="{{ mix('/js/vendor.js') }}" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js"></script>
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  @inertiaHead
</head>

<body>
  @inertia
</body>

</html>
