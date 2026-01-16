<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magazine Maires d'Afrique</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="/maires-afrique-logo.jpeg" sizes="any">
    <link rel="icon" href="/maires-afrique-logo.jpeg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/maires-afrique-logo.jpeg">
    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
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

        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient 15s ease infinite;
        }

        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .glass-strong {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(30px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>

<body
    class="min-h-screen bg-gradient-to-br from-purple-900 via-indigo-900 to-blue-900 animate-gradient overflow-x-hidden">
    <!-- Animated Background Blobs -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div
            class="absolute -top-40 -right-40 w-80 h-80 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse">
        </div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse"
            style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/2 w-80 h-80 bg-indigo-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse"
            style="animation-delay: 4s;"></div>
    </div>

    <!-- Navigation -->
    <nav class="sticky top-0 z-50 glass-strong shadow-2xl">
        <div class="container mx-auto px-4 py-5">
            <div class="flex items-center justify-between flex-wrap gap-4">
                <a href="{{ route('home') }}"
                    class="flex items-center gap-3 bg-white rounded-lg font-bold text-2xl hover:scale-110 transition-all duration-300">
                    <img src="{{ asset('images/logo.png') }}" alt="Maires d'Afrique" class="h-14 mx-auto"
                        onerror="this.style.display='none'">
                </a>
                <div class="flex gap-3">
                    <a href="{{ route('home') }}"
                        class="px-6 py-3 glass text-white rounded-2xl font-medium transition-all hover:glass-strong hover:-translate-y-1 hover:shadow-lg hover:shadow-purple-500/30">
                        <span class="hidden md:inline">🏠 Accueil</span>
                        <span class="md:hidden">🏠</span>
                    </a>
                    <a href="{{ route('samca.affiche') }}"
                        class="px-6 py-3 glass text-white rounded-2xl font-medium transition-all hover:glass-strong hover:-translate-y-1 hover:shadow-lg hover:shadow-blue-500/30">
                        <span class="hidden md:inline">🌍 SAMCA</span>
                        <span class="md:hidden">🌍</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <div class="text-center py-12 md:py-20 px-4 relative z-10">
        <div class="glass-strong rounded-3xl p-8 inline-block shadow-2xl mb-6"
            style="animation: float 3s ease-in-out infinite;">
            <h1 class="text-4xl md:text-7xl font-black text-white">
                📰 Magazine Maires d'Afrique
            </h1>
        </div>
        <p class="text-xl md:text-3xl text-white/90 font-semibold">
            Magazine International de Promotion et de Valorisation
        </p>
    </div>

    <!-- Main Content -->
    <div class="mx-auto px-4 pb-20 relative z-10">
        <div class="max-w-6xl mx-auto">
            <!-- Image Card -->
            {{-- <div class="glass-strong rounded-3xl w-2xl p-4 md:p-8 shadow-2xl mb-12">
                <img src="{{ asset('images/samca.png') }}" alt="Magazine Maires d'Afrique"
                    class="w-full rounded-2xl hover:scale-[1.02] transition-transform duration-500">
            </div> --}}

            <!-- About Section -->
            <div class="rounded-3xl py-6 md:py-10 text-white">
                <h3 class="text-3xl md:text-4xl font-black mb-8 md:mb-10 flex items-center gap-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-blue-500 rounded-2xl flex items-center justify-center shadow-lg"
                        style="animation: float 3s ease-in-out infinite;">
                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                        </svg>
                    </div>
                    <span>À propos du Magazine</span>
                </h3>

                <!-- Description Boxes -->
                <div class="grid grid-cols-1 md:grid-cols-2 mb-8 gap-2">
                    <div
                        class="glass rounded-2xl p-6 md:p-8 border border-white/20 hover:glass-strong hover:scale-[1.02] transition-all">
                        <p class="text-lg md:text-xl leading-relaxed">
                            <span class="font-bold text-purple-300">Maires d'Afrique</span> est un magazine
                            international de promotion et de valorisation de la dynamique et des perspectives locales.
                            Il vise à offrir un cadre de communication adapté aux élus locaux et à renforcer l'écoute
                            des maires.
                        </p>
                    </div>

                    <div class="space-y-2">
                        <div
                            class="glass rounded-2xl p-6 md:p-8 border border-white/20 hover:glass-strong hover:scale-[1.02] transition-all">
                            <p class="text-lg md:text-xl leading-relaxed">
                                Entièrement destiné aux décideurs communaux, il propose un traitement pertinent de
                                l'information politique, économique, financière, juridique, sociale, culturelle et
                                sportive
                                au plan communal. Une ligne éditoriale responsable, privilégiant l'objectivité et
                                l'information de proximité.
                            </p>
                        </div>

                        <div
                            class="glass rounded-2xl p-6 md:p-8 border border-white/20 hover:glass-strong hover:scale-[1.02] transition-all">
                            <p class="text-lg md:text-xl leading-relaxed">
                                Il comprend des informations documentées de l'actualité locale, des conseils et des
                                analyses
                                d'experts, utiles aux élus et aux populations. Il proposera également des dossiers
                                sectoriels complets, des fiches techniques, des reportages, des enquêtes sur des sujets
                                locaux.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Mission Highlight -->
                <div
                    class="glass rounded-2xl p-6 md:p-8 mb-8 border border-purple-400/50 hover:scale-105 transition-all">
                    <h4 class="text-2xl md:text-3xl font-bold text-purple-300 mb-4 flex items-center gap-2">
                        💡 Mission
                    </h4>
                    <p class="text-xl md:text-2xl font-bold italic leading-relaxed">
                        Un journal au cœur de la décision entre les élus locaux et les populations
                    </p>
                </div>

                <!-- Focus Areas -->
                <div class="glass rounded-2xl p-6 md:p-8 mb-8 border border-white/20">
                    <h4 class="text-2xl md:text-3xl font-bold text-purple-300 mb-6">🎯 Le magazine se consacre à :</h4>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div
                            class="glass rounded-xl p-6 border border-white/10 hover:glass-strong hover:-translate-y-1 transition-all group">
                            <div class="text-3xl mb-3 group-hover:scale-125 transition-transform">👥</div>
                            <p class="text-base md:text-lg">La vie des communes et collectivités territoriales</p>
                        </div>
                        <div
                            class="glass rounded-xl p-6 border border-white/10 hover:glass-strong hover:-translate-y-1 transition-all group">
                            <div class="text-3xl mb-3 group-hover:scale-125 transition-transform">💪</div>
                            <p class="text-base md:text-lg">Le renforcement des capacités locales</p>
                        </div>
                        <div
                            class="glass rounded-xl p-6 border border-white/10 hover:glass-strong hover:-translate-y-1 transition-all group">
                            <div class="text-3xl mb-3 group-hover:scale-125 transition-transform">🔧</div>
                            <p class="text-base md:text-lg">Les leviers organisationnels et technologiques</p>
                        </div>
                        <div
                            class="glass rounded-xl p-6 border border-white/10 hover:glass-strong hover:-translate-y-1 transition-all group">
                            <div class="text-3xl mb-3 group-hover:scale-125 transition-transform">🌍</div>
                            <p class="text-base md:text-lg">La gouvernance globale des communes d'Afrique</p>
                        </div>
                    </div>
                </div>

                <!-- Rubriques -->
                <div class="glass rounded-2xl p-6 md:p-8 border border-white/20">
                    <h4 class="text-2xl md:text-3xl font-bold text-purple-300 mb-8 text-center">📑 Rubriques principales
                    </h4>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div
                            class="glass rounded-2xl p-6 border border-purple-400/30 hover:glass-strong hover:-translate-y-1 transition-all group">
                            <h5 class="text-xl md:text-2xl font-bold text-purple-300 mb-3 flex items-center gap-2">
                                <span class="text-3xl group-hover:scale-125 transition-transform">🏙️</span>
                                Échos des Villes
                            </h5>
                            <p class="text-white/90 leading-relaxed text-sm md:text-base">Toute l'actualité économique,
                                politique, culturelle, environnementale, technologique et sportive des communes. Cette
                                rubrique traitera les décisions du conseil municipal et les carnets d'audiences des
                                maires.
                            </p>
                        </div>

                        <div class="flex-col items-center justify-between space-y-2">
                            <div
                                class="glass rounded-2xl p-6 border border-indigo-400/30 hover:glass-strong hover:-translate-y-1 transition-all group">
                                <h5 class="text-xl md:text-2xl font-bold text-indigo-300 mb-3 flex items-center gap-2">
                                    <span class="text-3xl group-hover:scale-125 transition-transform">📊</span>
                                    Mandat
                                </h5>
                                <p class="text-white/90 leading-relaxed text-sm md:text-base">Analyse et décryptage de
                                    la
                                    gestion communale par des administrés et des experts.</p>
                            </div>
                            <div
                                class="glass rounded-2xl p-6 border border-purple-400/30 hover:glass-strong hover:-translate-y-1 transition-all group">
                                <h5 class="text-xl md:text-2xl font-bold text-purple-300 mb-3 flex items-center gap-2">
                                    <span class="text-3xl group-hover:scale-125 transition-transform">📻</span>
                                    Commune à la Une
                                </h5>
                                <p class="text-white/90 leading-relaxed text-sm md:text-base">Radioscopie d'une commune.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                        <div class="flex-col items-center justify-between space-y-2">
                            <div
                                class="glass rounded-2xl p-6 border border-blue-400/30 hover:glass-strong hover:-translate-y-1 transition-all group">
                                <h5 class="text-xl md:text-2xl font-bold text-blue-300 mb-3 flex items-center gap-2">
                                    <span class="text-3xl group-hover:scale-125 transition-transform">⚖️</span>
                                    Aide à la Décision
                                </h5>
                                <p class="text-white/90 leading-relaxed text-sm md:text-base">Veille juridique.
                                    Économie,
                                    fiscalité, finance locales, partenariats, jumelages, commentaires des textes et
                                    pratiques dans la commune.</p>
                            </div>

                            <div
                                class="glass rounded-2xl p-6 border border-indigo-400/30 hover:glass-strong hover:-translate-y-1 transition-all group">
                                <h5 class="text-xl md:text-2xl font-bold text-indigo-300 mb-3 flex items-center gap-2">
                                    <span class="text-3xl group-hover:scale-125 transition-transform">📢</span>
                                    Annonces
                                </h5>
                                <p class="text-white/90 leading-relaxed text-sm md:text-base">Diffusions des appels
                                    d'offre,
                                    offres de services à l'intention des maires et communes, recherches d'emploi.</p>
                            </div>
                        </div>
                        <div
                            class="glass rounded-2xl p-6 border border-blue-400/30 hover:glass-strong hover:-translate-y-1 transition-all group">
                            <h5 class="text-xl md:text-2xl font-bold text-blue-300 mb-3 flex items-center gap-2">
                                <span class="text-3xl group-hover:scale-125 transition-transform">📰</span>
                                Dossiers et Interviews
                            </h5>
                            <p class="text-white/90 leading-relaxed text-sm md:text-base">Gros plan sur un sujet
                                d'intérêt pour la mairie ou la commune et entretien avec un responsable municipal
                                (maire, adjoints au maire, conseillers municipaux, secrétaires généraux de mairie,
                                leaders d'opinion...).</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Section -->
                <div class="mt-8 glass rounded-2xl p-6 md:p-8 border border-purple-400/50">
                    <h4 class="text-2xl md:text-3xl font-bold text-purple-300 mb-6 flex items-center gap-2">
                        <span class="text-3xl">🌐</span>
                        Contact & Informations
                    </h4>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="glass rounded-xl p-6 border border-white/10 hover:glass-strong transition-all">
                            <p class="text-lg md:text-xl mb-2 flex items-center gap-2">
                                <span class="text-2xl">🌍</span>
                                <strong>Site Web :</strong>
                            </p>
                            <a href="http://www.mairesdafrique.com" target="_blank"
                                class="text-xl md:text-2xl font-bold text-purple-300 hover:text-white transition-colors break-all">
                                www.mairesdafrique.com
                            </a>
                        </div>
                        <div class="glass rounded-xl p-6 border border-white/10 hover:glass-strong transition-all">
                            <p class="text-lg md:text-xl mb-2 flex items-center gap-2">
                                <span class="text-2xl">📧</span>
                                <strong>Email :</strong>
                            </p>
                            <a href="mailto:maires.dafrique@gmail.com"
                                class="text-xl md:text-2xl font-bold text-blue-300 hover:text-white transition-colors break-all">
                                maires.dafrique@gmail.com
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Final Message -->
                <div
                    class="mt-8 text-center p-6 md:p-8 glass rounded-2xl border border-white/20 hover:scale-105 transition-transform">
                    <p class="text-2xl md:text-3xl font-black leading-relaxed">
                        Magazine de promotion et de valorisation de la dynamique<br class="hidden md:block">
                        <span class="md:inline">et des perspectives locales</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>