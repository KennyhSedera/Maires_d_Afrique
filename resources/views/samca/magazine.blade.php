<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magazine Maires d'Afrique</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="/maires-afrique-logo.jpeg" sizes="any">
    <link rel="icon" href="/maires-afrique-logo.jpeg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/maires-afrique-logo.jpeg">
    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-25px) rotate(1deg);
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

        @keyframes pulse-glow {

            0%,
            100% {
                box-shadow: 0 0 30px rgba(168, 85, 247, 0.5);
            }

            50% {
                box-shadow: 0 0 50px rgba(168, 85, 247, 0.9);
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
            text-shadow: 0 0 20px rgba(168, 85, 247, 0.5),
                0 0 40px rgba(168, 85, 247, 0.3);
        }

        .card-hover {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .card-hover:hover {
            transform: translateY(-8px) scale(1.02);
        }

        .gradient-border {
            position: relative;
            background: linear-gradient(135deg, rgba(168, 85, 247, 0.15), rgba(59, 130, 246, 0.15));
        }

        .gradient-border::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: inherit;
            padding: 2px;
            background: linear-gradient(135deg, #a855f7, #3b82f6);
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
        }
    </style>
</head>

<body
    class="min-h-screen bg-gradient-to-br from-indigo-950 via-purple-950 to-blue-950 animate-gradient overflow-x-hidden">

    <!-- Enhanced Background -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div
            class="absolute -top-40 -right-40 w-96 h-96 bg-purple-500 rounded-full mix-blend-screen filter blur-3xl opacity-30 animate-pulse">
        </div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-blue-500 rounded-full mix-blend-screen filter blur-3xl opacity-30 animate-pulse"
            style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/2 w-96 h-96 bg-pink-500 rounded-full mix-blend-screen filter blur-3xl opacity-20 animate-pulse"
            style="animation-delay: 4s;"></div>

        <!-- Particles -->
        <div class="absolute top-20 left-20 w-2 h-2 bg-white rounded-full animate-pulse"></div>
        <div class="absolute top-40 right-40 w-1 h-1 bg-purple-300 rounded-full animate-pulse"
            style="animation-delay: 1s;"></div>
        <div class="absolute bottom-40 left-60 w-1.5 h-1.5 bg-blue-300 rounded-full animate-pulse"
            style="animation-delay: 2s;"></div>
    </div>

    <!-- Navigation -->
    <nav class="sticky top-0 z-50 glass-strong shadow-2xl border-b border-white/10">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between flex-wrap gap-4">
                <a href="{{ route('home') }}"
                    class="flex items-center gap-3 px-2 bg-white rounded-lg font-bold text-2xl hover:scale-110 transition-all duration-300">
                    <img src="{{ asset('images/logo.png') }}" alt="Maires d'Afrique" class="h-14 mx-auto"
                        onerror="this.style.display='none'">
                </a>
                <div class="flex gap-3">
                    <a href="{{ route('home') }}"
                        class="px-6 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white rounded-2xl font-semibold transition-all hover:shadow-lg hover:shadow-purple-500/50 hover:-translate-y-1 flex items-center gap-2">
                        <span class="text-xl">🏠</span>
                        <span class="hidden md:inline">Accueil</span>
                    </a>
                    <a href="{{ route('samca.affiche') }}"
                        class="px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-2xl font-semibold transition-all hover:shadow-lg hover:shadow-blue-500/50 hover:-translate-y-1 flex items-center gap-2">
                        <span class="text-xl">🌍</span>
                        <span class="hidden md:inline">SAMCA</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Header -->
    <div class="text-center py-16 md:py-24 px-4 relative z-10">
        <div class="inline-block relative mb-8" style="animation: float 4s ease-in-out infinite;">
            <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-blue-500 rounded-3xl blur-2xl opacity-50">
            </div>
            <div class="relative glass-strong rounded-3xl p-10 shadow-2xl border-2 border-white/20">
                <div class="text-7xl md:text-8xl mb-4">📰</div>
                <h1 class="text-4xl md:text-6xl font-black text-white glow-text">
                    Magazine Maires d'Afrique
                </h1>
            </div>
        </div>
        <p class="text-xl md:text-2xl text-white/90 font-semibold max-w-3xl mx-auto leading-relaxed">
            Magazine International de Promotion et de Valorisation
        </p>
    </div>

    <!-- Main Content -->
    <div class="mx-auto px-4 pb-20 relative z-10">
        <div class="max-w-7xl mx-auto">

            <!-- À propos Section -->
            <section class="mb-16">
                <div class="flex items-center gap-4 mb-10">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center shadow-lg"
                        style="animation: float 3s ease-in-out infinite;">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                        </svg>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-black text-white glow-text">À propos du Magazine</h2>
                </div>

                <div class="grid md:grid-cols-3 gap-6 mb-8">
                    <div class="gradient-border glass rounded-3xl p-8 card-hover">
                        <div class="text-4xl mb-4">✨</div>
                        <p class="text-white/90 text-lg leading-relaxed">
                            <span class="font-bold text-purple-200">Maires d'Afrique</span> est un magazine
                            international de promotion et de valorisation de la dynamique et des perspectives locales.
                        </p>
                    </div>

                    <div class="gradient-border glass rounded-3xl p-8 card-hover">
                        <div class="text-4xl mb-4">🎯</div>
                        <p class="text-white/90 text-lg leading-relaxed">
                            Un traitement pertinent de l'information politique, économique, financière, juridique,
                            sociale, culturelle et sportive au plan communal.
                        </p>
                    </div>

                    <div class="gradient-border glass rounded-3xl p-8 card-hover">
                        <div class="text-4xl mb-4">📊</div>
                        <p class="text-white/90 text-lg leading-relaxed">
                            Des informations documentées, conseils d'experts, dossiers sectoriels, fiches techniques et
                            reportages.
                        </p>
                    </div>
                </div>

                <!-- Mission -->
                <div class="relative mb-12">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-purple-500 to-blue-500 rounded-3xl blur-xl opacity-30">
                    </div>
                    <div class="relative gradient-border glass-strong rounded-3xl p-10 md:p-12 shadow-2xl">
                        <div class="text-5xl mb-4 text-center">💡</div>
                        <h3 class="text-2xl md:text-3xl font-black text-purple-200 mb-4 text-center">Notre Mission</h3>
                        <p
                            class="text-2xl md:text-3xl font-bold text-white text-center leading-relaxed italic glow-text">
                            "Un journal au cœur de la décision entre les élus locaux et les populations"
                        </p>
                    </div>
                </div>
            </section>

            <!-- Focus Areas -->
            <section class="mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-10 text-center glow-text">
                    🎯 Le Magazine se consacre à
                </h2>
                <div class="grid md:grid-cols-4 gap-6">
                    <div class="gradient-border glass rounded-3xl p-8 card-hover group text-center">
                        <div class="text-5xl mb-4 group-hover:scale-125 transition-transform">👥</div>
                        <p class="text-white text-lg font-semibold">La vie des communes et collectivités territoriales
                        </p>
                    </div>
                    <div class="gradient-border glass rounded-3xl p-8 card-hover group text-center">
                        <div class="text-5xl mb-4 group-hover:scale-125 transition-transform">💪</div>
                        <p class="text-white text-lg font-semibold">Le renforcement des capacités locales</p>
                    </div>
                    <div class="gradient-border glass rounded-3xl p-8 card-hover group text-center">
                        <div class="text-5xl mb-4 group-hover:scale-125 transition-transform">🔧</div>
                        <p class="text-white text-lg font-semibold">Les leviers organisationnels et technologiques</p>
                    </div>
                    <div class="gradient-border glass rounded-3xl p-8 card-hover group text-center">
                        <div class="text-5xl mb-4 group-hover:scale-125 transition-transform">🌍</div>
                        <p class="text-white text-lg font-semibold">La gouvernance globale des communes d'Afrique</p>
                    </div>
                </div>
            </section>

            <!-- Rubriques -->
            <section class="mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-12 text-center glow-text">
                    📑 Rubriques Principales
                </h2>

                <!-- Main Grid -->
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Échos des Villes - Grande carte -->
                    <div class="gradient-border glass rounded-3xl p-8 card-hover group md:col-span-2">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center text-4xl flex-shrink-0 group-hover:scale-110 transition-transform shadow-lg">
                                🏙️
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl md:text-3xl font-bold text-purple-200 mb-3">Échos des Villes</h3>
                                <p class="text-white/90 text-lg leading-relaxed">
                                    Toute l'actualité économique, politique, culturelle, environnementale, technologique
                                    et sportive des communes. Cette rubrique traitera les décisions du conseil municipal
                                    et les carnets d'audiences des maires.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Dossiers et Interviews -->
                    <div class="gradient-border glass rounded-3xl p-8 card-hover group">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-2xl flex items-center justify-center text-3xl flex-shrink-0 group-hover:scale-110 transition-transform shadow-lg">
                                📰
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl md:text-2xl font-bold text-blue-200 mb-2">Dossiers & Interviews</h3>
                                <p class="text-white/90 leading-relaxed">
                                    Gros plan sur un sujet d'intérêt pour la mairie et entretiens avec les responsables
                                    municipaux.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Mandat -->
                    <div class="gradient-border glass rounded-3xl p-8 card-hover group">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-2xl flex items-center justify-center text-3xl flex-shrink-0 group-hover:scale-110 transition-transform shadow-lg">
                                📊
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl md:text-2xl font-bold text-indigo-200 mb-2">Mandat</h3>
                                <p class="text-white/90 leading-relaxed">
                                    Analyse et décryptage de la gestion communale par des administrés et des experts.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Commune à la Une -->
                    <div class="gradient-border glass rounded-3xl p-8 card-hover group">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center text-3xl flex-shrink-0 group-hover:scale-110 transition-transform shadow-lg">
                                📻
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl md:text-2xl font-bold text-purple-200 mb-2">Commune à la Une</h3>
                                <p class="text-white/90 leading-relaxed">
                                    Radioscopie approfondie d'une commune.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Aide à la Décision -->
                    <div class="gradient-border glass rounded-3xl p-8 card-hover group">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-2xl flex items-center justify-center text-3xl flex-shrink-0 group-hover:scale-110 transition-transform shadow-lg">
                                ⚖️
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl md:text-2xl font-bold text-blue-200 mb-2">Aide à la Décision</h3>
                                <p class="text-white/90 leading-relaxed">
                                    Veille juridique, économie, fiscalité, finance locales, partenariats et jumelages.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Annonces -->
                    <div class="gradient-border glass rounded-3xl p-8 card-hover group">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-pink-500 to-purple-500 rounded-2xl flex items-center justify-center text-3xl flex-shrink-0 group-hover:scale-110 transition-transform shadow-lg">
                                📢
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl md:text-2xl font-bold text-pink-200 mb-2">Annonces</h3>
                                <p class="text-white/90 leading-relaxed">
                                    Appels d'offres, offres de services et recherches d'emploi pour les communes.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section class="mb-16">
                <div class="relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-purple-500 to-blue-500 rounded-3xl blur-xl opacity-20">
                    </div>
                    <div class="relative gradient-border glass-strong rounded-3xl p-10 md:p-12 shadow-2xl">
                        <div class="flex items-center gap-4 mb-8">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-purple-500 to-blue-500 rounded-2xl flex items-center justify-center text-4xl shadow-lg">
                                🌐
                            </div>
                            <h2 class="text-3xl md:text-4xl font-black text-white glow-text">Contact & Informations</h2>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="glass rounded-2xl p-8 border border-white/10 card-hover group">
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="text-4xl group-hover:scale-125 transition-transform">🌍</span>
                                    <p class="text-xl font-bold text-purple-200">Site Web</p>
                                </div>
                                <a href="http://www.mairesdafrique.com" target="_blank"
                                    class="text-2xl font-bold text-white hover:text-purple-300 transition-colors break-all">
                                    www.mairesdafrique.com
                                </a>
                            </div>

                            <div class="glass rounded-2xl p-8 border border-white/10 card-hover group">
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="text-4xl group-hover:scale-125 transition-transform">📧</span>
                                    <p class="text-xl font-bold text-blue-200">Email</p>
                                </div>
                                <a href="mailto:maires.dafrique@gmail.com"
                                    class="text-2xl font-bold text-white hover:text-blue-300 transition-colors break-all">
                                    maires.dafrique@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Final Message -->
            <div class="relative">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-500 rounded-3xl blur-2xl opacity-30">
                </div>
                <div
                    class="relative glass-strong rounded-3xl p-10 md:p-12 text-center shadow-2xl border-2 border-white/20 card-hover">
                    <div class="text-6xl mb-6">🏆</div>
                    <p class="text-3xl md:text-4xl font-black text-white leading-relaxed glow-text">
                        Magazine de promotion et de valorisation<br class="hidden md:block">
                        de la dynamique et des perspectives locales
                    </p>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
