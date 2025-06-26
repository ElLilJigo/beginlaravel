<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'TurnJoy')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 px-3">
    <a class="navbar-brand" href="/notes">TurnJoy</a>
    <div class="navbar-nav">
        <a class="nav-link" href="/notes">📋 Toutes les notes</a>
        <a class="nav-link" href="/notes/create">➕ Nouvelle note</a>
    </div>
</nav>

<div class="container">
    <h1 class="mb-3">@yield('header', 'TurnJoy')</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
