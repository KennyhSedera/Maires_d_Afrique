<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAMCA 2026 - Salon des Maires d'Afrique</title>
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
                    <a href="{{ route('samca.magazine') }}"
                        class="px-6 py-3 glass text-white rounded-2xl font-medium transition-all hover:glass-strong hover:-translate-y-1 hover:shadow-lg hover:shadow-indigo-500/30">
                        <span class="hidden md:inline">📰 Magazine</span>
                        <span class="md:hidden">📰</span>
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
                🌍 SAMCA 2026
            </h1>
        </div>
        <p class="text-xl md:text-3xl text-white/90 font-semibold">
            Salon des Maires et des Collectivités d'Afrique
        </p>
    </div>

    <!-- Main Content -->
    <div class=" mx-auto px-4 pb-20 relative z-10">
        <div class="max-w-6xl mx-auto">
            <!-- Image Card -->
            {{-- <div class="glass-strong rounded-3xl p-4 md:p-8 shadow-2xl mb-12">
                <img src="{{ asset('images/samca.png') }}" alt="Affiche SAMCA 2026"
                    class="w-full rounded-2xl shadow-2xl hover:scale-[1.02] transition-transform duration-500">
            </div> --}}

            <!-- Info Section -->
            <div class="rounded-3xl p-6 md:p-10 text-white">
                <h3 class="text-3xl md:text-4xl font-black mb-8 md:mb-10 flex items-center gap-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-blue-500 rounded-2xl flex items-center justify-center shadow-lg"
                        style="animation: float 3s ease-in-out infinite;">
                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" />
                        </svg>
                    </div>
                    <span>Informations sur l'événement</span>
                </h3>

                <!-- Date & Location -->
                <div
                    class="glass rounded-2xl p-6 md:p-8 mb-6 border border-white/20 hover:glass-strong hover:scale-[1.02] transition-all">
                    <h4 class="text-2xl md:text-3xl font-bold text-purple-300 mb-4 flex items-center gap-2">
                        📅 Date et Lieu
                    </h4>
                    <div class="space-y-3">
                        <p class="text-lg md:text-xl"><span class="font-bold">Dates :</span> 23, 24, 25 Avril 2026</p>
                        <p class="text-lg md:text-xl"><span class="font-bold">Lieu :</span> Hôtel 2 Février, Lomé - Togo
                        </p>
                    </div>
                </div>

                <!-- Theme -->
                <div
                    class="glass rounded-2xl p-6 md:p-8 mb-6 border border-purple-400/50 hover:scale-[1.02] transition-all">
                    <h4 class="text-2xl md:text-3xl font-bold text-purple-300 mb-4 flex items-center gap-2">
                        🎯 Thème Principal
                    </h4>
                    <p class="text-xl md:text-2xl leading-relaxed font-medium">
                        "Les opportunités de la promotion immobilière et foncière pour les municipalités"
                    </p>
                </div>

                <!-- Event Format -->
                <div class="glass rounded-2xl p-6 md:p-8 mb-8 border border-white/20">
                    <h4 class="text-2xl md:text-3xl font-bold text-purple-300 mb-6 text-center md:text-left">
                        🏆 Format de l'événement
                    </h4>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div
                            class="bg-gradient-to-br from-purple-500 to-blue-500 text-white py-4 px-4 md:px-6 rounded-2xl font-bold text-center text-base md:text-lg shadow-lg hover:scale-110 hover:rotate-3 transition-all cursor-pointer">
                            <div class="text-2xl md:text-3xl mb-2">🏪</div>
                            EXPOSITION
                        </div>
                        <div
                            class="bg-gradient-to-br from-purple-500 to-blue-500 text-white py-4 px-4 md:px-6 rounded-2xl font-bold text-center text-base md:text-lg shadow-lg hover:scale-110 hover:rotate-3 transition-all cursor-pointer">
                            <div class="text-2xl md:text-3xl mb-2">👥</div>
                            CONFÉRENCE
                        </div>
                        <div
                            class="bg-gradient-to-br from-purple-500 to-blue-500 text-white py-4 px-4 md:px-6 rounded-2xl font-bold text-center text-base md:text-lg shadow-lg hover:scale-110 hover:rotate-3 transition-all cursor-pointer">
                            <div class="text-2xl md:text-3xl mb-2">🤝</div>
                            B TO B
                        </div>
                        <div
                            class="bg-gradient-to-br from-purple-500 to-blue-500 text-white py-4 px-4 md:px-6 rounded-2xl font-bold text-center text-base md:text-lg shadow-lg hover:scale-110 hover:rotate-3 transition-all cursor-pointer">
                            <div class="text-2xl md:text-3xl mb-2">🏅</div>
                            AWARDS
                        </div>
                    </div>
                </div>

                <!-- Features Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div
                        class="glass rounded-2xl p-6 text-center border border-white/20 hover:glass-strong hover:-translate-y-2 transition-all group">
                        <div class="text-4xl mb-3 group-hover:scale-125 transition-transform">🏗️</div>
                        <h5 class="text-xl md:text-2xl font-bold text-purple-300 mb-2">Aménagement</h5>
                        <p class="text-base md:text-lg text-white/80">Urbain & Environnement</p>
                    </div>
                    <div
                        class="glass rounded-2xl p-6 text-center border border-white/20 hover:glass-strong hover:-translate-y-2 transition-all group">
                        <div class="text-4xl mb-3 group-hover:scale-125 transition-transform">⚡</div>
                        <h5 class="text-xl md:text-2xl font-bold text-blue-300 mb-2">Énergie</h5>
                        <p class="text-base md:text-lg text-white/80">Solutions durables</p>
                    </div>
                    <div
                        class="glass rounded-2xl p-6 text-center border border-white/20 hover:glass-strong hover:-translate-y-2 transition-all group">
                        <div class="text-4xl mb-3 group-hover:scale-125 transition-transform">💼</div>
                        <h5 class="text-xl md:text-2xl font-bold text-indigo-300 mb-2">Finances</h5>
                        <p class="text-base md:text-lg text-white/80">Services & Équipements</p>
                    </div>
                    <div
                        class="glass rounded-2xl p-6 text-center border border-white/20 hover:glass-strong hover:-translate-y-2 transition-all group">
                        <div class="text-4xl mb-3 group-hover:scale-125 transition-transform">🤖</div>
                        <h5 class="text-xl md:text-2xl font-bold text-purple-300 mb-2">IA</h5>
                        <p class="text-base md:text-lg text-white/80">Intelligence Artificielle</p>
                    </div>
                </div>

                <!-- Contact Box -->
                <div class="glass rounded-2xl p-6 md:p-8 border border-purple-400/50">
                    <h4 class="text-2xl md:text-3xl font-bold text-purple-300 mb-6 flex items-center gap-2">
                        📞 Contacts
                    </h4>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="glass rounded-xl p-6 border border-white/10 hover:glass-strong transition-all">
                            <p class="text-lg md:text-xl mb-2 flex items-center gap-2">
                                <span class="text-2xl">📱</span>
                                <strong>Téléphone :</strong>
                            </p>
                            <a href="tel:+22898905151"
                                class="text-xl md:text-2xl font-bold text-purple-300 hover:text-white transition-colors">
                                +228 98905151
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

                <!-- Grand Rendez-vous -->
                <div
                    class="mt-8 text-center p-6 md:p-8 glass rounded-2xl border border-white/20 hover:scale-105 transition-transform">
                    <p class="text-2xl md:text-3xl font-black leading-relaxed">
                        ⭐ LE GRAND RENDEZ-VOUS DE LA DYNAMIQUE<br class="hidden md:block">
                        <span class="md:inline">ET DES PERSPECTIVES LOCALES !</span> ⭐
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>