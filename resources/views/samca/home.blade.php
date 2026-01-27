<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maires d'Afrique</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="/maires-afrique-logo.png" sizes="any">
    <link rel="icon" href="/maires-afrique-logo.png" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/maires-afrique-logo.png">
    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-30px) rotate(2deg);
            }
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        @keyframes shimmer {
            0% {
                background-position: -1000px 0;
            }

            100% {
                background-position: 1000px 0;
            }
        }

        .animate-gradient {
            background-size: 400% 400%;
            animation: gradient 20s ease infinite;
        }

        .glass {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(25px);
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .glass-strong {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(35px);
            border: 1px solid rgba(255, 255, 255, 0.25);
        }

        .shimmer {
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            background-size: 1000px 100%;
            animation: shimmer 3s infinite;
        }

        .glow-text {
            text-shadow: 0 0 20px rgba(168, 85, 247, 0.5), 0 0 40px rgba(168, 85, 247, 0.3);
        }

        .card-hover {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .card-hover:hover {
            transform: translateY(-12px) scale(1.02);
        }

        .gradient-border {
            position: relative;
            background: linear-gradient(135deg, rgba(168, 85, 247, 0.2), rgba(59, 130, 246, 0.2));
            border-radius: 1.5rem;
        }

        .gradient-border::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 1.5rem;
            padding: 2px;
            background: linear-gradient(135deg, #a855f7, #3b82f6);
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
        }

        html {
            scroll-behavior: smooth;
        }

        .nav-link {
            position: relative;
        }

        .nav-link.active {
            color: #a855f7;
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(to right, #a855f7, #3b82f6);
        }
    </style>
</head>

<body class="min-h-screen bg-white overflow-x-hidden">

    <!-- Navigation -->
   <nav class="sticky top-0 z-50 glass-strong shadow-lg border-b border-white/10">
    <div class="container mx-auto px-4 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="#accueil"
                class="flex items-center gap-3 px-2 bg-white rounded-lg font-bold text-2xl hover:scale-110 transition-all duration-300">
                <img src="{{ asset('images/logo.png') }}" alt="Logo Maires d'Afrique" class="w-auto h-12" />
            </a>

            <!-- Menu Desktop -->
            <div class="hidden md:flex gap-8">
                <a href="#apropos" class="nav-link text-blue-800 hover:text-purple-800 font-semibold transition-colors">
                    À propos
                </a>
                <a href="#magazine"
                    class="nav-link text-blue-800 hover:text-purple-800 font-semibold transition-colors">
                    Magazine
                </a>
                <a href="#evenements"
                    class="nav-link text-blue-800 hover:text-purple-800 font-semibold transition-colors">
                    Événements
                </a>
                <a href="#contact" class="nav-link text-blue-800 hover:text-purple-800 font-semibold transition-colors">
                    Contact
                </a>
            </div>

            <!-- Bouton Hamburger Mobile -->
            <button id="mobile-menu-button" class="md:hidden p-2 rounded-lg hover:bg-white/20 transition-colors">
                <svg class="w-6 h-6 text-blue-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"></path>
                    <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Menu Mobile (caché par défaut) -->
        <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4 space-y-3">
            <a href="#apropos"
                class="block px-4 py-3 text-blue-800 hover:text-purple-800 hover:bg-white/20 font-semibold rounded-lg transition-all">
                À propos
            </a>
            <a href="#magazine"
                class="block px-4 py-3 text-blue-800 hover:text-purple-800 hover:bg-white/20 font-semibold rounded-lg transition-all">
                Magazine
            </a>
            <a href="#evenements"
                class="block px-4 py-3 text-blue-800 hover:text-purple-800 hover:bg-white/20 font-semibold rounded-lg transition-all">
                Événements
            </a>
            <a href="#contact"
                class="block px-4 py-3 text-blue-800 hover:text-purple-800 hover:bg-white/20 font-semibold rounded-lg transition-all">
                Contact
            </a>
        </div>
    </div>
</nav>

    <!-- Hero Section -->
    <section id="accueil" class="relative min-h-[80vh] flex items-center overflow-hidden ">

        <div class="absolute inset-0 -z-10">
            <div class="absolute top-20 left-10 w-72 h-72 bg-purple-500/10 rounded-full blur-3xl animate-pulse">
            </div>
            <div
                class="absolute bottom-20 right-10 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl animate-pulse delay-1000">
            </div>
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-pink-500/5 rounded-full blur-3xl">
            </div>

            <div class="absolute inset-0 opacity-30"
                style="background-image: radial-gradient(circle, #9333ea 1px, transparent 1px); background-size: 50px 50px;">
            </div>
        </div>

        <div class="mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center px-8 py-10">

                <div class="space-y-8">
                    <div class="space-y-1">
                        <h1 class="text-2xl md:text-4xl font-black flex gap-2 text-gray-900 leading-tight">
                            Maires
                            <span
                                class="block text-transparent bg-clip-text bg-gradient-to-r from-purple-500 via-pink-500 to-blue-500">
                                d'Afrique
                            </span>
                        </h1>
                        <div class="h-2 w-24 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full"></div>
                    </div>

                    <p class="text-xl md:text-2xl text-gray-600 leading-relaxed max-w-xl">
                        Un magazine international de <span class="font-bold text-purple-600">promotion</span> et
                        de <span class="font-bold text-pink-600">valorisation</span> de la dynamique et des
                        perspectives locales.
                    </p>

                    <div class="space-y-4 pt-4">
                        <div class="flex items-start gap-4 group">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-blue-600 mb-1">Communication</h3>
                                <p class="text-gray-600">Un cadre adapté aux élus locaux et au renforcement de
                                    l'écoute des
                                    maires.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 group">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-pink-500 to-pink-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-pink-600 mb-1">Information</h3>
                                <p class="text-gray-600">Une ligne éditoriale responsable privilégiant
                                    l'objectivité et
                                    l'information de proximité.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4 pt-6">
                        <a href="#magazine"
                            class="group inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-purple-500 to-pink-500 text-white font-bold rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all">
                            <span>Découvrir le magazine</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                        <a href="#contact"
                            class="inline-flex items-center gap-3 px-8 py-4 bg-white border-2 border-gray-200 text-gray-900 font-bold rounded-xl hover:border-purple-500 hover:text-purple-500 transition-all">
                            <span>Nous contacter</span>
                        </a>
                    </div>
                </div>

                <div class="relative flex items-center justify-center lg:justify-end">
                    <div class="relative">
                        <div class="absolute inset-0 -m-8 border-2 border-purple-500/20 rounded-full animate-ping">
                        </div>
                        <div class="absolute inset-0 -m-16 border-2 border-pink-500/20 rounded-full animate-ping"
                            style="animation-delay: 0.5s;"></div>
                        <div class="absolute inset-0 -m-24 border-2 border-blue-500/20 rounded-full animate-ping"
                            style="animation-delay: 1s;"></div>

                        <div
                            class="relative w-80 h-80 md:w-96 md:h-96 bg-gradient-to-br from-white to-gray-50 rounded-full shadow-2xl flex items-center justify-center border-4 border-white">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-purple-500/20 via-pink-500/20 to-blue-500/20 rounded-full blur-2xl">
                            </div>

                            <div class="relative z-10 text-center p-8">
                                <div class="mb-6">
                                    <img src="{{ asset('images/logo.png') }}" alt="Logo Maires d'Afrique"
                                        class="w-auto h-48 object-contain mx-auto drop-shadow-2xl hover:scale-110 transition-transform duration-500" />
                                </div>

                                <div class="flex justify-center gap-3">
                                    <div class="px-4 py-2 bg-white rounded-full shadow-lg border border-purple-100">
                                        <span class="font-bold text-purple-600">🌍 Afrique</span>
                                    </div>
                                    <div class="px-4 py-2 bg-white rounded-full shadow-lg border border-pink-100">
                                        <span class="font-bold text-pink-600">📰 Magazine</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="absolute top-10 -left-6 w-20 h-20 bg-purple-500 rounded-2xl shadow-xl animate-bounce"
                            style="animation-duration: 3s;">
                            <div class="w-full h-full flex items-center justify-center text-3xl">🏛️</div>
                        </div>
                        <div class="absolute bottom-1/3 -right-6 w-20 h-20 bg-pink-500 rounded-2xl shadow-xl animate-bounce"
                            style="animation-duration: 3s; animation-delay: 0.5s;">
                            <div class="w-full h-full flex items-center justify-center text-3xl">📢</div>
                        </div>
                        <div class="absolute bottom-1 left-4 w-16 h-16 bg-blue-500 rounded-2xl shadow-xl animate-bounce"
                            style="animation-duration: 3s; animation-delay: 1s;">
                            <div class="w-full h-full flex items-center justify-center text-2xl">⚖️</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12 md:py-20 relative z-10">
        <div class="max-w-7xl mx-auto">
            <!-- About Section -->
            <section id="apropos" class="mb-24">
                <div class="text-center mb-2">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-blue-500/10 to-purple-500/10 border border-blue-500/20 rounded-full mb-6">
                        <span class="w-4 h-4 bg-blue-500 rounded-full animate-pulse"></span>
                        <span class="text-lg font-semibold text-blue-600">À Propos</span>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 gap-8 items-start">

                    <div class="relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-3xl opacity-0 group-hover:opacity-100 blur-xl transition-all duration-500">
                        </div>

                        <div
                            class="relative h-full bg-white overflow-hidden rounded-3xl p-8 md:p-10 border border-gray-100 shadow-lg hover:shadow-2xl transition-all duration-300">
                            <div class="flex items-start gap-6 mb-6">
                                <div class="flex-shrink-0">
                                    <div
                                        class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-2xl flex items-center justify-center shadow-xl group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Pour les Décideurs</h3>
                                    <div class="h-1 w-16 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full">
                                    </div>
                                </div>
                            </div>

                            <p class="text-gray-700 text-lg leading-relaxed">
                                Entièrement destiné aux <span class="font-semibold text-blue-600">décideurs
                                    communaux</span>, il
                                propose un traitement pertinent de l'information <span
                                    class="font-semibold text-indigo-600">politique, économique, financière, juridique,
                                    sociale,
                                    culturelle et sportive</span> au plan communal. Une ligne éditoriale responsable,
                                privilégiant
                                l'objectivité et l'information de proximité.
                            </p>

                            <div class="flex flex-wrap gap-2 mt-6">
                                <span
                                    class="px-3 py-1 bg-blue-50 text-blue-600 text-sm font-medium rounded-lg">Politique</span>
                                <span
                                    class="px-3 py-1 bg-indigo-50 text-indigo-600 text-sm font-medium rounded-lg">Économie</span>
                                <span
                                    class="px-3 py-1 bg-purple-50 text-purple-600 text-sm font-medium rounded-lg">Culture</span>
                            </div>

                            <div
                                class="absolute bottom-0 left-0 right-0 h-1.5 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-b-3xl transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500">
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-purple-500 to-pink-500 rounded-3xl opacity-0 group-hover:opacity-100 blur-xl transition-all duration-500">
                        </div>

                        <div
                            class="relative h-full bg-white rounded-3xl p-8 md:p-10 border border-gray-100 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden">
                            <!-- Icône décorative -->
                            <div class="flex items-start gap-6 mb-6">
                                <div class="flex-shrink-0">
                                    <div
                                        class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center shadow-xl group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Notre Contenu</h3>
                                    <div class="h-1 w-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full">
                                    </div>
                                </div>
                            </div>

                            <!-- Contenu -->
                            <p class="text-gray-700 text-lg leading-relaxed">
                                Il comprendra des <span class="font-semibold text-purple-600">informations
                                    documentées</span> de
                                l'actualité locale, des conseils et des analyses d'experts, utiles aux élus et aux
                                populations. Il
                                proposera également des <span class="font-semibold text-pink-600">dossiers sectoriels
                                    complets</span>, des fiches techniques, des reportages, des enquêtes sur des sujets
                                locaux.
                            </p>

                            <!-- Liste à puces -->
                            <ul class="space-y-3 mt-6">
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-purple-500 mt-0.5 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700">Informations documentées</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-purple-500 mt-0.5 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700">Analyses d'experts</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-purple-500 mt-0.5 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700">Dossiers sectoriels & reportages</span>
                                </li>
                            </ul>

                            <!-- Barre au fond -->
                            <div
                                class="absolute bottom-0 left-0 right-0 h-1.5 bg-gradient-to-r from-purple-500 to-pink-500 rounded-b-3xl transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500">
                            </div>
                        </div>
                    </div>

                </div>

            </section>

            <!-- Mission Section -->
            <section class="mb-24">
                <div class="text-center mb-8">
                    <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">
                        Notre <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-purple-500">Mission</span>
                    </h2>
                    <div class="h-1.5 w-24 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full mx-auto"></div>

                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-purple-500 to-pink-500 rounded-3xl opacity-0 group-hover:opacity-100 blur-xl transition-all duration-500">
                        </div>
                        <div
                            class="relative h-full bg-white rounded-3xl p-8 border border-gray-100 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                            <div class="relative mb-6">
                                <div
                                    class="relative w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center text-4xl shadow-xl group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                                    🏘️
                                </div>
                            </div>

                            <p class="text-gray-700 text-lg leading-relaxed">
                                Vie des communes et collectivités territoriales, renforcement des capacités et
                                développement des
                                ressources humaines locales
                            </p>

                            <div
                                class="absolute mx-4 bottom-0 left-0 right-0 h-1.5 bg-gradient-to-r from-purple-500 to-pink-500 rounded-3xl transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500">
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-3xl opacity-0 group-hover:opacity-100 blur-xl transition-all duration-500">
                        </div>
                        <div
                            class="relative h-full bg-white rounded-3xl p-8 border border-gray-100 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                            <div class="relative mb-6">
                                <div
                                    class="relative w-20 h-20 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-2xl flex items-center justify-center text-4xl shadow-xl group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                                    ⚙️
                                </div>
                            </div>

                            <p class="text-gray-700 text-lg leading-relaxed">
                                Leviers organisationnels, managériaux et technologiques des communes
                            </p>

                            <div
                                class="absolute mx-4 bottom-0 left-0 right-0 h-1.5 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-3xl transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500">
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-pink-500 to-purple-500 rounded-3xl opacity-0 group-hover:opacity-100 blur-xl transition-all duration-500">
                        </div>
                        <div
                            class="relative h-full bg-white rounded-3xl p-8 border border-gray-100 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                            <div class="relative mb-6">
                                <div
                                    class="relative w-20 h-20 bg-gradient-to-br from-pink-500 to-purple-500 rounded-2xl flex items-center justify-center text-4xl shadow-xl group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                                    🌍
                                </div>
                            </div>

                            <p class="text-gray-700 text-lg leading-relaxed">
                                Gouvernance globale des communes d'Afrique
                            </p>

                            <div
                                class="absolute mx-4 bottom-0 left-0 right-0 h-1.5 bg-gradient-to-r from-pink-500 to-purple-500 rounded-3xl transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Magazine Section -->
            <section id="magazine" class="mb-24">
                <h2 class="text-4xl md:text-5xl font-black text-black mb-12 text-center ">
                    📑 Nos Rubriques
                </h2>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div
                        class="relative overflow-hidden rounded-2xl bg-white border border-gray-100 shadow-lg hover:shadow-2xl transition-all duration-300 group">
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-purple-500/10 to-pink-500/10 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-500">
                        </div>

                        <div class="relative p-6 pb-8">
                            <div class="flex items-start gap-4 mb-4">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center text-3xl shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                                    🏙️
                                </div>
                                <div class="flex-1">
                                    <h5 class="text-xl font-bold text-gray-900 mb-2">Échos des Villes</h5>
                                    <div
                                        class="h-1 w-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full group-hover:w-20 transition-all">
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                L'actualité économique, politique, culturelle, environnementale, technologique et
                                sportive des communes.
                            </p>
                        </div>

                        <div
                            class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-purple-500 to-pink-500 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300">
                        </div>
                    </div>

                    <div
                        class="relative overflow-hidden rounded-2xl bg-white border border-gray-100 shadow-lg hover:shadow-2xl transition-all duration-300 group">
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-500/10 to-indigo-500/10 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-500">
                        </div>

                        <div class="relative p-6 pb-8">
                            <div class="flex items-start gap-4 mb-4">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-xl flex items-center justify-center text-3xl shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                                    📰
                                </div>
                                <div class="flex-1">
                                    <h5 class="text-xl font-bold text-gray-900 mb-2">Dossiers & Interviews</h5>
                                    <div
                                        class="h-1 w-12 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full group-hover:w-20 transition-all">
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                Gros plan sur un sujet d'intérêt pour la mairie et entretiens avec les responsables
                                municipaux.
                            </p>
                        </div>

                        <div
                            class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-500 to-indigo-500 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300">
                        </div>
                    </div>

                    <div
                        class="relative overflow-hidden rounded-2xl bg-white border border-gray-100 shadow-lg hover:shadow-2xl transition-all duration-300 group">
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-pink-500/10 to-purple-500/10 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-500">
                        </div>

                        <div class="relative p-6 pb-8">
                            <div class="flex items-start gap-4 mb-4">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-pink-500 to-purple-500 rounded-xl flex items-center justify-center text-3xl shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                                    📊
                                </div>
                                <div class="flex-1">
                                    <h5 class="text-xl font-bold text-gray-900 mb-2">Mandat</h5>
                                    <div
                                        class="h-1 w-12 bg-gradient-to-r from-pink-500 to-purple-500 rounded-full group-hover:w-20 transition-all">
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                Analyse et décryptage de la gestion communale par des administrés et experts.
                            </p>
                        </div>

                        <div
                            class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-pink-500 to-purple-500 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300">
                        </div>
                    </div>

                    <div
                        class="relative overflow-hidden rounded-2xl bg-white border border-gray-100 shadow-lg hover:shadow-2xl transition-all duration-300 group">
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-indigo-500/10 to-blue-500/10 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-500">
                        </div>

                        <div class="relative p-6 pb-8">
                            <div class="flex items-start gap-4 mb-4">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-indigo-500 to-blue-500 rounded-xl flex items-center justify-center text-3xl shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                                    📻
                                </div>
                                <div class="flex-1">
                                    <h5 class="text-xl font-bold text-gray-900 mb-2">Commune à la Une</h5>
                                    <div
                                        class="h-1 w-12 bg-gradient-to-r from-indigo-500 to-blue-500 rounded-full group-hover:w-20 transition-all">
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                Radioscopie approfondie d'une commune.
                            </p>
                        </div>

                        <div
                            class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-indigo-500 to-blue-500 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300">
                        </div>
                    </div>

                    <div
                        class="relative overflow-hidden rounded-2xl bg-white border border-gray-100 shadow-lg hover:shadow-2xl transition-all duration-300 group">
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-purple-500/10 to-blue-500/10 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-500">
                        </div>

                        <div class="relative p-6 pb-8">
                            <div class="flex items-start gap-4 mb-4">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-purple-500 to-blue-500 rounded-xl flex items-center justify-center text-3xl shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                                    ⚖️
                                </div>
                                <div class="flex-1">
                                    <h5 class="text-xl font-bold text-gray-900 mb-2">Aide à la Décision</h5>
                                    <div
                                        class="h-1 w-12 bg-gradient-to-r from-purple-500 to-blue-500 rounded-full group-hover:w-20 transition-all">
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                Veille juridique, économie, fiscalité, finance locales, partenariats et jumelages.
                            </p>
                        </div>

                        <div
                            class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-purple-500 to-blue-500 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300">
                        </div>
                    </div>

                    <div
                        class="relative overflow-hidden rounded-2xl bg-white border border-gray-100 shadow-lg hover:shadow-2xl transition-all duration-300 group">
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-pink-500/10 to-purple-500/10 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-500">
                        </div>

                        <div class="relative p-6 pb-8">
                            <div class="flex items-start gap-4 mb-4">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-pink-500 to-purple-500 rounded-xl flex items-center justify-center text-3xl shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                                    📢
                                </div>
                                <div class="flex-1">
                                    <h5 class="text-xl font-bold text-gray-900 mb-2">Annonces</h5>
                                    <div
                                        class="h-1 w-12 bg-gradient-to-r from-pink-500 to-purple-500 rounded-full group-hover:w-20 transition-all">
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                Appels d'offres et services à l'intention des maires et communes.
                            </p>
                        </div>

                        <div
                            class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-pink-500 to-purple-500 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Événements Section -->
            <section id="evenements" class="mb-24">
                <h2 class="text-4xl md:text-5xl font-black text-black mb-12 text-center ">
                    🎯 Nos Événements
                </h2>

                <div class="relative mb-8">
                    <div
                        class="relative bg-gradient-to-r from-purple-200 via-pink-200 to-blue-200 rounded-3xl py-10 md:p-12 shadow-lg">

                        <div class="flex flex-col items-center justify-center mb-10">
                            <img src="{{ asset('images/logo.jpeg') }}" alt="Logo SAMCA"
                                class="w-auto h-24 rounded-xl" />
                            <h3 class="text-4xl md:text-6xl font-black text-black  mb-4">SAMCA 2026</h3>
                            <p class="text-2xl text-purple-400 font-bold text-center">Salon des Maires et des
                                Collectivités
                                d'Afrique</p>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6 max-w-6xl mx-auto p-4">
                            <a href="http://localhost:8000/#evenements" target="_blank" referrer="noopener noreferrer"
                                class="relative overflow-hidden rounded-2xl shadow-xl bg-gradient-to-br from-blue-50 to-white border border-blue-100 transition-all duration-300 transform hover:scale-105">
                                <div class="absolute top-0 right-0 w-40 h-40 bg-blue-500/10 rounded-full -mr-20 -mt-20">
                                </div>
                                <div
                                    class="absolute bottom-0 left-0 w-32 h-32 bg-blue-500/10 rounded-full -ml-16 -mb-16">
                                </div>

                                <div class="relative p-8">
                                    <div
                                        class="inline-block px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-full mb-6">
                                        Événement le plus proche
                                    </div>

                                    <h3
                                        class="text-xl md:text-3xl font-semibold text-gray-900 text-center mb-6 leading-tight">
                                        "Les opportunités de la promotion immobilière et foncière pour les
                                        municipalités"
                                    </h3>

                                    <div class="space-y-4 mb-6">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center text-2xl">
                                                🗓️
                                            </div>
                                            <div>
                                                <p class="text-sm text-gray-500 font-medium">Dates</p>
                                                <p class="text-lg font-semibold text-gray-900">21, 22, 23 Mai 2026</p>
                                            </div>
                                        </div>

                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center text-2xl">
                                                📍
                                            </div>
                                            <div>
                                                <p class="text-sm text-gray-500 font-medium">Lieu</p>
                                                <p class="text-lg font-semibold text-gray-900">Hôtel 2 Février, Lomé -
                                                    Togo 🇹🇬</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex flex-wrap gap-2 mb-6">
                                        <span
                                            class="px-3 py-1 bg-blue-100 text-blue-700 text-sm font-medium rounded-lg">Exposition</span>
                                        <span
                                            class="px-3 py-1 bg-blue-100 text-blue-700 text-sm font-medium rounded-lg">Conférence</span>
                                        <span
                                            class="px-3 py-1 bg-blue-100 text-blue-700 text-sm font-medium rounded-lg">B
                                            to B</span>
                                        <span
                                            class="px-3 py-1 bg-blue-100 text-blue-700 text-sm font-medium rounded-lg">Awards</span>
                                    </div>

                                    <p class="text-gray-600 text-base italic border-l-4 border-blue-500 pl-4">
                                        Le grand rendez-vous de la dynamique et des perspectives locales
                                    </p>
                                </div>
                            </a>

                            <a href="http://localhost:8000/#evenements" target="_blank" referrer="noopener noreferrer"
                                class="group relative overflow-hidden rounded-2xl shadow-xl bg-gradient-to-br from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 transition-all duration-300 transform hover:scale-105">

                                <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32">
                                </div>
                                <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24">
                                </div>

                                <div class="relative h-full flex flex-col items-center justify-center p-8 text-center">
                                    <div
                                        class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                    </div>

                                    <h4 class="text-2xl md:text-3xl font-bold text-white mb-4">
                                        Découvrez tous nos événements
                                    </h4>

                                    <p class="text-blue-100 text-lg mb-6">
                                        "Plus d'informations sur nos conférences, expositions et rencontres
                                        professionnelles"
                                    </p>

                                    <div
                                        class="inline-flex items-center gap-2 px-6 py-3 bg-white text-blue-600 font-semibold rounded-full group-hover:gap-4 transition-all">
                                        <span>Visiter le site</span>
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section id="contact" class="mb-16">
                <div class="relative">
                    <div class="relative glass-strong rounded-3xl p-10 md:p-12 shadow-lg border-2 border-white/20">
                        <div class="flex items-center gap-4 mb-8">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-purple-500 to-blue-500 rounded-2xl flex items-center justify-center text-4xl shadow-lg">
                                📞</div>
                            <h2 class="text-3xl md:text-4xl font-black text-black ">Contactez-nous</h2>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <a href="tel:+22898905151" class="group block">
                                <div
                                    class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-blue-500 to-blue-700 p-0.5 hover:scale-[1.02] transition-all duration-300">
                                    <div class="bg-white rounded-[1.375rem] p-8 h-full">
                                        <div class="flex flex-col h-full">
                                            <div class="flex items-center justify-between mb-6">
                                                <span
                                                    class="px-4 py-2 bg-blue-50 text-blue-600 text-xs font-bold rounded-full uppercase tracking-wider">
                                                    Contact Direct
                                                </span>
                                                <div
                                                    class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center group-hover:rotate-12 transition-transform">
                                                    <span class="text-2xl">📱</span>
                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                <h5 class="text-xl font-black text-gray-900 mb-2">Téléphone</h5>
                                                <div
                                                    class="h-1.5 w-16 bg-gradient-to-r from-blue-500 to-blue-300 rounded-full">
                                                </div>
                                            </div>

                                            <div class="flex-1 flex items-center">
                                                <div
                                                    class="text-2xl md:text-3xl font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-400 group-hover:scale-105 transition-transform">
                                                    +228 98 90 51 51
                                                </div>
                                            </div>

                                            <div
                                                class="flex items-center justify-between mt-6 pt-6 border-t border-gray-100">
                                                <span class="text-sm text-gray-500 font-medium">Appelez
                                                    maintenant</span>
                                                <div
                                                    class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center group-hover:translate-x-2 transition-transform">
                                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="mailto:maires.dafrique@gmail.com" class="group block">
                                <div
                                    class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-pink-500 to-purple-600 p-0.5 hover:scale-[1.02] transition-all duration-300">
                                    <div class="bg-white rounded-[1.375rem] p-8 h-full">
                                        <div class="flex flex-col h-full">
                                            <div class="flex items-center justify-between mb-6">
                                                <span
                                                    class="px-4 py-2 bg-pink-50 text-pink-600 text-xs font-bold rounded-full uppercase tracking-wider">
                                                    Messagerie
                                                </span>
                                                <div
                                                    class="w-12 h-12 bg-pink-100 rounded-full flex items-center justify-center group-hover:rotate-12 transition-transform">
                                                    <span class="text-2xl">📧</span>
                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                <h5 class="text-xl font-black text-gray-900 mb-2">Email</h5>
                                                <div
                                                    class="h-1.5 w-16 bg-gradient-to-r from-pink-500 to-purple-400 rounded-full">
                                                </div>
                                            </div>

                                            <div class="flex-1 flex items-center">
                                                <div
                                                    class="text-2xl md:text-3xl font-black text-transparent bg-clip-text bg-gradient-to-r from-pink-600 to-purple-500 break-all group-hover:scale-105 transition-transform">
                                                    maires.dafrique@gmail.com
                                                </div>
                                            </div>

                                            <div
                                                class="flex items-center justify-between mt-6 pt-6 border-t border-gray-100">
                                                <span class="text-sm text-gray-500 font-medium">Envoyez un
                                                    message</span>
                                                <div
                                                    class="w-10 h-10 bg-gradient-to-r from-pink-500 to-purple-500 rounded-full flex items-center justify-center group-hover:translate-x-2 transition-transform">
                                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Footer -->
    <footer class="relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700"></div>
        <div class="absolute inset-0 opacity-10"
            style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 40px 40px;">
        </div>

        <div
            class="absolute top-0 left-0 w-96 h-96 bg-purple-500/20 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2">
        </div>
        <div
            class="absolute bottom-0 right-0 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl translate-x-1/2 translate-y-1/2">
        </div>

        <div class="relative container mx-auto px-6 py-16">
            <div class="text-center mb-12">
                <div class="inline-flex items-center justify-center h-20 mb-8 shadow-2xl">
                    <a href="#accueil"
                        class="flex items-center gap-3 px-2 bg-white rounded-lg font-bold text-2xl hover:scale-110 transition-all duration-300 h-full">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo SAMCA" class="w-auto h-full" />
                    </a>
                </div>

                <h4 class="text-2xl md:text-4xl italic text-white mb-4 leading-tight">
                    "Un journal au coeur de la décision entre les élus locaux et les populations"
                </h4>

                <div class="flex items-center justify-center gap-2 mb-6">
                    <div class="h-1 w-12 bg-white/30 rounded-full"></div>
                    <div class="h-1 w-6 bg-white/50 rounded-full"></div>
                    <div class="h-1 w-3 bg-white/70 rounded-full"></div>
                </div>

                <p class="text-white/90 text-xl md:text-2xl font-medium max-w-2xl mx-auto">
                    Connecter les élus locaux avec leurs communautés
                </p>
            </div>

            <div class="grid md:grid-cols-4 gap-8 mb-12 max-w-5xl mx-auto">
                <div>
                    <h5 class="text-white font-bold text-lg mb-4">Navigation</h5>
                    <ul class="space-y-2">
                        <li><a href="#accueil" class="text-white/70 hover:text-white transition-colors">Accueil</a></li>
                        <li><a href="#apropos" class="text-white/70 hover:text-white transition-colors">À propos</a>
                        </li>
                        <li><a href="#contact" class="text-white/70 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h5 class="text-white font-bold text-lg mb-4">Magazine</h5>
                    <ul class="space-y-2">
                        <li><a href="#magazine" class="text-white/70 hover:text-white transition-colors">Nos
                                Rubriques</a>
                        </li>
                        {{-- <li><a href="#" class="text-white/70 hover:text-white transition-colors">Archives</a></li>
                        --}}
                    </ul>
                </div>

                <div>
                    <h5 class="text-white font-bold text-lg mb-4">SAMCA</h5>
                    <ul class="space-y-2">
                        <li><a href="#evenements" class="text-white/70 hover:text-white transition-colors">Nos
                                Evénements</a>
                        </li>
                        <li><a href="#" target="_blank" referrer=" noreferrer"
                                class="text-white/70 hover:text-white transition-colors">Site web</a></li>
                        </li>
                    </ul>
                </div>

                <div>
                    <h5 class="text-white font-bold text-lg mb-4">Contact</h5>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-2 text-white/70">
                            <span>📱</span>
                            <a href="tel:+22898905151" class="hover:text-white transition-colors">+228 98 90 51 51</a>
                        </li>
                        <li class="flex items-start gap-2 text-white/70">
                            <span>📧</span>
                            <a href="mailto:maires.dafrique@gmail.com"
                                class="hover:text-white transition-colors break-all">maires.dafrique@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="h-px bg-white/20 mb-8"></div>

            <div class="text-center">
                <p class="text-white/60 text-sm">
                    © 2026 <span class="font-semibold text-white/80">Maires d'Afrique</span> - Tous droits réservés
                </p>
                <p class="text-white/40 text-xs mt-2">
                    Fait avec ❤️ pour les communes d'Afrique
                </p>
            </div>
        </div>
    </footer>
</body>
<!-- Script pour le menu mobile -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');

        // Toggle menu au clic
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });

        // Fermer le menu quand on clique sur un lien
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            });
        });

        // Fermer le menu si on clique en dehors
        document.addEventListener('click', function(event) {
            const isClickInsideMenu = mobileMenu.contains(event.target);
            const isClickOnButton = mobileMenuButton.contains(event.target);

            if (!isClickInsideMenu && !isClickOnButton && !mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            }
        });
    });
</script>

</html>
