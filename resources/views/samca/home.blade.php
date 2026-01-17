<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maires d'Afrique - Accueil</title>
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

        @keyframes pulse-glow {

            0%,
            100% {
                box-shadow: 0 0 20px rgba(168, 85, 247, 0.4);
            }

            50% {
                box-shadow: 0 0 40px rgba(168, 85, 247, 0.8);
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
    </style>
</head>

<body
    class="min-h-screen bg-gradient-to-br from-indigo-950 via-purple-950 to-blue-950 animate-gradient overflow-x-hidden">

    <!-- Enhanced Background Elements -->
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
                    <a href="{{ route('samca.affiche') }}"
                        class="px-6 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white rounded-2xl font-semibold transition-all hover:shadow-lg hover:shadow-purple-500/50 hover:-translate-y-1 flex items-center gap-2">
                        <span class="text-xl">🌍</span>
                        <span class="hidden md:inline">SAMCA</span>
                    </a>
                    <a href="{{ route('samca.magazine') }}"
                        class="px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-2xl font-semibold transition-all hover:shadow-lg hover:shadow-blue-500/50 hover:-translate-y-1 flex items-center gap-2">
                        <span class="text-xl">📰</span>
                        <span class="hidden md:inline">Magazine</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12 md:py-20 relative z-10">
        <div class="max-w-7xl mx-auto">

            <!-- Hero Section -->
            <div class="text-center mb-16" style="animation: float 4s ease-in-out infinite;">
                <div class="inline-block relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-purple-500 to-blue-500 rounded-3xl blur-2xl opacity-50">
                    </div>
                    <div class="relative glass-strong rounded-3xl p-10 shadow-2xl border-2 border-white/20">
                        <div class="bg-white rounded-lg">
                            <img src="{{ asset('images/logo.png') }}" alt="Maires d'Afrique" class="h-20 mx-auto"
                                onerror="this.style.display='none'">
                        </div>

                        <h1 class="text-5xl md:text-3xl font-black text-white mt-6 glow-text">Maires d'Afrique</h1>
                    </div>
                </div>
            </div>

            <!-- Website Link -->
            <div class="text-center mb-16">
                <a href="http://www.mairesdafrique.com" target="_blank"
                    class="inline-flex items-center gap-3 text-xl font-bold text-white px-6 py-3 bg-gradient-to-r from-purple-600 via-pink-600 to-blue-600 rounded-full hover:scale-105 transition-all shadow-2xl hover:shadow-purple-500/50 border-2 border-white/20 relative overflow-hidden group">
                    <span class="absolute inset-0 shimmer"></span>
                    <svg class="w-7 h-7 group-hover:rotate-45 transition-transform" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                        <path
                            d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                    </svg>
                    <span class="relative z-10">www.mairesdafrique.com</span>
                </a>
            </div>

            <!-- Introduction Cards -->
            <div class="grid md:grid-cols-3 gap-6 mb-16">
                <div class="gradient-border glass p-8 rounded-3xl card-hover">
                    <div class="text-4xl mb-4">✨</div>
                    <h3 class="text-xl font-bold text-purple-300 mb-3">Promotion</h3>
                    <p class="text-white/90 leading-relaxed"><span class="font-bold text-purple-200">Maires
                            d'Afrique</span> est un magazine international de promotion et de valorisation de la
                        dynamique et des perspectives locales.</p>
                </div>

                <div class="gradient-border glass p-8 rounded-3xl card-hover" style="animation-delay: 0.1s;">
                    <div class="text-4xl mb-4">🎯</div>
                    <h3 class="text-xl font-bold text-blue-300 mb-3">Communication</h3>
                    <p class="text-white/90 leading-relaxed">Un cadre de communication adapté aux élus locaux et au
                        renforcement de l'écoute des maires.</p>
                </div>

                <div class="gradient-border glass p-8 rounded-3xl card-hover" style="animation-delay: 0.2s;">
                    <div class="text-4xl mb-4">📊</div>
                    <h3 class="text-xl font-bold text-pink-300 mb-3">Information</h3>
                    <p class="text-white/90 leading-relaxed">Une ligne éditoriale responsable, privilégiant
                        l'objectivité et l'information de proximité.</p>
                </div>
            </div>

            <!-- Highlight Quote -->
            <div class="my-16 relative">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-purple-500 to-blue-500 rounded-3xl blur-xl opacity-30">
                </div>
                <div class="relative glass-strong p-10 md:p-12 rounded-3xl border-2 border-white/20 shadow-2xl">
                    <div class="text-6xl mb-6 text-center">💬</div>
                    <p class="text-3xl md:text-4xl font-black text-white text-center leading-relaxed glow-text">
                        "Un journal au cœur de la décision entre les élus locaux et les populations"
                    </p>
                </div>
            </div>

            <!-- Focus Section -->
            <div class="my-16">
                <h3 class="text-4xl md:text-5xl font-black text-white mb-10 text-center glow-text">
                    🎯 Notre Mission
                </h3>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="gradient-border glass p-8 rounded-3xl card-hover group">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center text-3xl mb-4 group-hover:scale-110 transition-transform">
                            🏘️</div>
                        <p class="text-white text-lg leading-relaxed">Vie des communes et collectivités territoriales,
                            renforcement des capacités et développement des ressources humaines locales</p>
                    </div>

                    <div class="gradient-border glass p-8 rounded-3xl card-hover group">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-2xl flex items-center justify-center text-3xl mb-4 group-hover:scale-110 transition-transform">
                            ⚙️</div>
                        <p class="text-white text-lg leading-relaxed">Leviers organisationnels, managériaux et
                            technologiques des communes</p>
                    </div>

                    <div class="gradient-border glass p-8 rounded-3xl card-hover group">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-pink-500 to-purple-500 rounded-2xl flex items-center justify-center text-3xl mb-4 group-hover:scale-110 transition-transform">
                            🌍</div>
                        <p class="text-white text-lg leading-relaxed">Gouvernance globale des communes d'Afrique</p>
                    </div>
                </div>
            </div>

            <!-- Rubriques Section -->
            <div class="my-16">
                <h3 class="text-4xl md:text-5xl font-black text-white mb-12 text-center glow-text">
                    📑 Nos Rubriques
                </h3>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="gradient-border glass p-8 rounded-3xl card-hover group">
                        <div class="flex items-center gap-4 mb-4">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center text-3xl group-hover:scale-110 transition-transform">
                                🏙️</div>
                            <h5 class="text-2xl font-bold text-purple-200">Échos des Villes</h5>
                        </div>
                        <p class="text-white/90 leading-relaxed">L'actualité économique, politique, culturelle,
                            environnementale, technologique et sportive des communes.</p>
                    </div>

                    <div class="gradient-border glass p-8 rounded-3xl card-hover group">
                        <div class="flex items-center gap-4 mb-4">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-xl flex items-center justify-center text-3xl group-hover:scale-110 transition-transform">
                                📰</div>
                            <h5 class="text-2xl font-bold text-blue-200">Dossiers & Interviews</h5>
                        </div>
                        <p class="text-white/90 leading-relaxed">Gros plan sur un sujet d'intérêt pour la mairie et
                            entretiens avec les responsables municipaux.</p>
                    </div>

                    <div class="gradient-border glass p-8 rounded-3xl card-hover group">
                        <div class="flex items-center gap-4 mb-4">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-pink-500 to-purple-500 rounded-xl flex items-center justify-center text-3xl group-hover:scale-110 transition-transform">
                                📊</div>
                            <h5 class="text-2xl font-bold text-pink-200">Mandat</h5>
                        </div>
                        <p class="text-white/90 leading-relaxed">Analyse et décryptage de la gestion communale par des
                            administrés et experts.</p>
                    </div>

                    <div class="gradient-border glass p-8 rounded-3xl card-hover group">
                        <div class="flex items-center gap-4 mb-4">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-indigo-500 to-blue-500 rounded-xl flex items-center justify-center text-3xl group-hover:scale-110 transition-transform">
                                📻</div>
                            <h5 class="text-2xl font-bold text-indigo-200">Commune à la Une</h5>
                        </div>
                        <p class="text-white/90 leading-relaxed">Radioscopie approfondie d'une commune.</p>
                    </div>

                    <div class="gradient-border glass p-8 rounded-3xl card-hover group">
                        <div class="flex items-center gap-4 mb-4">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-purple-500 to-blue-500 rounded-xl flex items-center justify-center text-3xl group-hover:scale-110 transition-transform">
                                ⚖️</div>
                            <h5 class="text-2xl font-bold text-purple-200">Aide à la Décision</h5>
                        </div>
                        <p class="text-white/90 leading-relaxed">Veille juridique, économie, fiscalité, finance locales,
                            partenariats et jumelages.</p>
                    </div>

                    <div class="gradient-border glass p-8 rounded-3xl card-hover group">
                        <div class="flex items-center gap-4 mb-4">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-pink-500 to-purple-500 rounded-xl flex items-center justify-center text-3xl group-hover:scale-110 transition-transform">
                                📢</div>
                            <h5 class="text-2xl font-bold text-pink-200">Annonces</h5>
                        </div>
                        <p class="text-white/90 leading-relaxed">Appels d'offres et services à l'intention des maires et
                            communes.</p>
                    </div>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-6 justify-center my-16">
                <a href="{{ route('samca.affiche') }}"
                    class="group relative px-12 py-6 bg-gradient-to-r from-purple-600 via-pink-600 to-purple-600 text-white rounded-full font-black text-xl shadow-2xl hover:shadow-purple-500/50 hover:-translate-y-3 transition-all text-center overflow-hidden">
                    <span class="absolute inset-0 shimmer"></span>
                    <span class="relative z-10 flex items-center justify-center gap-3">
                        <span class="text-2xl">📅</span>
                        Découvrir SAMCA 2026
                    </span>
                </a>
                <a href="{{ route('samca.magazine') }}"
                    class="group relative px-12 py-6 bg-gradient-to-r from-blue-600 via-indigo-600 to-blue-600 text-white rounded-full font-black text-xl shadow-2xl hover:shadow-blue-500/50 hover:-translate-y-3 transition-all text-center overflow-hidden">
                    <span class="absolute inset-0 shimmer"></span>
                    <span class="relative z-10 flex items-center justify-center gap-3">
                        <span class="text-2xl">📖</span>
                        Lire le Magazine
                    </span>
                </a>
            </div>

            <!-- Footer -->
            <div class="relative mt-20">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-purple-500 to-blue-500 rounded-3xl blur-xl opacity-20">
                </div>
                <div
                    class="relative glass-strong rounded-3xl p-10 md:p-12 text-center shadow-2xl border-2 border-white/20">
                    <div class="text-6xl mb-4">🏆</div>
                    <h4 class="text-3xl md:text-4xl font-black text-white mb-6 glow-text">Magazine de Promotion et de
                        Valorisation</h4>
                    <p class="text-2xl mb-6">
                        <a href="http://www.mairesdafrique.com" target="_blank"
                            class="text-purple-300 hover:text-white font-bold transition-colors inline-flex items-center gap-2">
                            <span class="text-3xl">🌐</span>
                            www.mairesdafrique.com
                        </a>
                    </p>
                    <p class="text-white/70 text-lg">Connecter les élus locaux avec leurs communautés</p>
                </div>
            </div>

        </div>
    </div>

</body>

</html>