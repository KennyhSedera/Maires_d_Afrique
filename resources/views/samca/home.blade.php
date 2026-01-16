<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maires d'Afrique - Accueil</title>
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
        <div class="container mx-auto px-4 py-3">
            <div class="flex items-center justify-between flex-wrap gap-4">
                <a href="{{ route('home') }}"
                    class="flex items-center gap-3 bg-white rounded-lg font-bold text-2xl hover:scale-110 transition-all duration-300">
                    <img src="{{ asset('images/logo.png') }}" alt="Maires d'Afrique" class="h-14 mx-auto"
                        onerror="this.style.display='none'">
                </a>
                <div class="flex gap-3">
                    <a href="{{ route('samca.affiche') }}"
                        class="px-6 py-3 glass text-white rounded-2xl font-medium transition-all hover:glass-strong hover:-translate-y-1 hover:shadow-lg hover:shadow-blue-500/30">
                        <span class="hidden md:inline">🌍 SAMCA</span>
                        <span class="md:hidden">🌍</span>
                    </a>
                    <a href="{{ route('samca.magazine') }}"
                        class="px-6 py-3 glass text-white rounded-2xl font-medium transition-all hover:glass-strong hover:-translate-y-1 hover:shadow-lg hover:shadow-indigo-500/30">
                        <span class="hidden md:inline">📰 Magazine</span>
                        <span class="md:hidden">📰</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12 md:py-20 relative z-10">
        <div class="max-w-7xl mx-auto">
            <!-- Logo Header -->
            <div class="text-center mb-12" style="animation: float 3s ease-in-out infinite;">
                <div class="glass-strong rounded-3xl p-8 inline-block shadow-2xl">
                    <img src="{{ asset('images/logo.png') }}" alt="Maires d'Afrique" class="max-w-xs mx-auto"
                        onerror="this.style.display='none'">
                </div>
            </div>

            <!-- Website Link -->
            <div class="text-center mb-12">
                <a href="http://www.mairesdafrique.com" target="_blank"
                    class="inline-flex items-center gap-3 text-2xl font-bold text-white px-8 py-4 glass-strong rounded-full hover:scale-105 transition-all shadow-2xl hover:shadow-purple-500/50">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                        <path
                            d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                    </svg>
                    www.mairesdafrique.com
                </a>
            </div>

            <!-- Main Glass Container -->
            <div class="glass-strong rounded-3xl p-6 md:p-12 shadow-2xl">
                <!-- Introduction -->
                <div class="space-y-6 text-lg leading-relaxed text-white mb-12">
                    <div class="glass rounded-2xl p-6 border-l-4 border-purple-400 hover:glass-strong transition-all">
                        <p><span class="font-bold text-purple-300">Maires d'Afrique</span> est un magazine international
                            de promotion et de valorisation de la dynamique et des perspectives locales. Il vise à
                            offrir un cadre de communication adapté aux élus locaux et à renforcer l'écoute des maires.
                        </p>
                    </div>

                    <div class="glass rounded-2xl p-6 border-l-4 border-blue-400 hover:glass-strong transition-all">
                        <p>Entièrement destiné aux décideurs communaux, il propose un traitement pertinent de
                            l'information politique, économique, financière, juridique, sociale, culturelle et sportive
                            au plan communal. Une ligne éditoriale responsable, privilégiant l'objectivité et
                            l'information de proximité.</p>
                    </div>

                    <div class="glass rounded-2xl p-6 border-l-4 border-indigo-400 hover:glass-strong transition-all">
                        <p>Il comprend des informations documentées de l'actualité locale, des conseils et des analyses
                            d'experts, utiles aux élus et aux populations. Il proposera également des dossiers
                            sectoriels complets, des fiches techniques, des reportages, des enquêtes sur des sujets
                            locaux.</p>
                    </div>
                </div>

                <!-- Highlight Quote -->
                <div
                    class="my-12 p-8 bg-gradient-to-r from-purple-600/30 to-blue-600/30 glass-strong rounded-3xl transform hover:scale-105 transition-all shadow-2xl border border-white/20">
                    <p class="text-2xl md:text-3xl font-bold text-white text-center italic">
                        "Un journal au cœur de la décision entre les élus locaux et les populations"
                    </p>
                </div>

                <!-- Focus Section -->
                <div class="my-12">
                    <h3 class="text-3xl md:text-4xl font-extrabold text-white mb-8">
                        🎯 Maires d'Afrique se consacre à :
                    </h3>
                    <div class="space-y-4">
                        <div
                            class="flex items-start gap-4 glass rounded-2xl p-6 hover:glass-strong hover:translate-x-2 transition-all">
                            <div
                                class="flex-shrink-0 w-10 h-10 bg-gradient-to-br from-purple-500 to-blue-500 rounded-full flex items-center justify-center text-white font-bold shadow-lg">
                                ✓</div>
                            <p class="text-white text-lg">À la vie des communes et des collectivités territoriales, au
                                renforcement des capacités et au développement des ressources humaines locales</p>
                        </div>
                        <div
                            class="flex items-start gap-4 glass rounded-2xl p-6 hover:glass-strong hover:translate-x-2 transition-all">
                            <div
                                class="flex-shrink-0 w-10 h-10 bg-gradient-to-br from-purple-500 to-blue-500 rounded-full flex items-center justify-center text-white font-bold shadow-lg">
                                ✓</div>
                            <p class="text-white text-lg">Aux leviers organisationnels, managériaux et technologiques
                                locales des communes</p>
                        </div>
                        <div
                            class="flex items-start gap-4 glass rounded-2xl p-6 hover:glass-strong hover:translate-x-2 transition-all">
                            <div
                                class="flex-shrink-0 w-10 h-10 bg-gradient-to-br from-purple-500 to-blue-500 rounded-full flex items-center justify-center text-white font-bold shadow-lg">
                                ✓</div>
                            <p class="text-white text-lg">À la gouvernance globale des communes d'Afrique</p>
                        </div>
                    </div>
                </div>

                <!-- Rubriques Section -->
                <div class="my-12">
                    <h3 class="text-3xl md:text-4xl font-extrabold text-white mb-10 text-center">📑 Rubriques
                        Principales</h3>

                    <div class="grid gap-6">
                        <div
                            class="glass rounded-2xl p-6 md:p-8 border-l-8 border-purple-400 hover:glass-strong hover:-translate-y-1 transition-all">
                            <h5 class="text-2xl font-bold text-purple-300 mb-3 flex items-center gap-2">
                                <span class="text-3xl">🏙️</span> Échos des Villes
                            </h5>
                            <p class="text-white/90 leading-relaxed">Toute l'actualité économique, politique,
                                culturelle, environnementale, technologique et sportive des communes.</p>
                        </div>

                        <div
                            class="glass rounded-2xl p-6 md:p-8 border-l-8 border-blue-400 hover:glass-strong hover:-translate-y-1 transition-all">
                            <h5 class="text-2xl font-bold text-blue-300 mb-3 flex items-center gap-2">
                                <span class="text-3xl">📰</span> Dossiers et Interviews
                            </h5>
                            <p class="text-white/90 leading-relaxed">Gros plan sur un sujet d'intérêt pour la mairie ou
                                la commune et entretien avec un responsable municipal.</p>
                        </div>

                        <div
                            class="glass rounded-2xl p-6 md:p-8 border-l-8 border-indigo-400 hover:glass-strong hover:-translate-y-1 transition-all">
                            <h5 class="text-2xl font-bold text-indigo-300 mb-3 flex items-center gap-2">
                                <span class="text-3xl">📊</span> Mandat
                            </h5>
                            <p class="text-white/90 leading-relaxed">Analyse et décryptage de la gestion communale par
                                des administrés et des experts.</p>
                        </div>

                        <div
                            class="glass rounded-2xl p-6 md:p-8 border-l-8 border-purple-400 hover:glass-strong hover:-translate-y-1 transition-all">
                            <h5 class="text-2xl font-bold text-purple-300 mb-3 flex items-center gap-2">
                                <span class="text-3xl">📻</span> Commune à la Une
                            </h5>
                            <p class="text-white/90 leading-relaxed">Radioscopie d'une commune.</p>
                        </div>

                        <div
                            class="glass rounded-2xl p-6 md:p-8 border-l-8 border-blue-400 hover:glass-strong hover:-translate-y-1 transition-all">
                            <h5 class="text-2xl font-bold text-blue-300 mb-3 flex items-center gap-2">
                                <span class="text-3xl">⚖️</span> Aide à la Décision
                            </h5>
                            <p class="text-white/90 leading-relaxed">Veille juridique. Économie, fiscalité, finance
                                locales, partenariats, jumelages.</p>
                        </div>

                        <div
                            class="glass rounded-2xl p-6 md:p-8 border-l-8 border-indigo-400 hover:glass-strong hover:-translate-y-1 transition-all">
                            <h5 class="text-2xl font-bold text-indigo-300 mb-3 flex items-center gap-2">
                                <span class="text-3xl">📢</span> Annonces
                            </h5>
                            <p class="text-white/90 leading-relaxed">Diffusions des appels d'offre, offres de services à
                                l'intention des maires et communes.</p>
                        </div>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-6 justify-center my-12">
                    <a href="{{ route('samca.affiche') }}"
                        class="px-10 py-5 bg-gradient-to-r from-purple-600 to-blue-600 text-white rounded-full font-bold text-xl shadow-2xl hover:shadow-purple-500/50 hover:-translate-y-2 transition-all text-center">
                        📅 Découvrir SAMCA 2026
                    </a>
                    <a href="{{ route('samca.magazine') }}"
                        class="px-10 py-5 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-full font-bold text-xl shadow-2xl hover:shadow-blue-500/50 hover:-translate-y-2 transition-all text-center">
                        📖 En savoir plus
                    </a>
                </div>

                <!-- Footer -->
                <div class="glass-strong rounded-3xl p-8 md:p-10 text-center shadow-2xl border border-white/20">
                    <h4 class="text-2xl md:text-3xl font-bold text-white mb-4">🏆 Magazine de promotion et de
                        valorisation</h4>
                    <p class="text-xl">
                        <a href="http://www.mairesdafrique.com" target="_blank"
                            class="text-purple-300 hover:text-white font-semibold transition-colors">
                            🌐 www.mairesdafrique.com
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>