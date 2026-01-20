<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAMCA 2026 - Salon des Maires d'Afrique</title>
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
                box-shadow: 0 0 30px rgba(168, 85, 247, 0.5);
            }

            50% {
                box-shadow: 0 0 60px rgba(168, 85, 247, 0.9);
            }
        }

        @keyframes spin-slow {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
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
            transform: translateY(-10px) scale(1.03);
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

        <!-- Floating Particles -->
        <div class="absolute top-20 left-20 w-3 h-3 bg-white rounded-full animate-pulse"></div>
        <div class="absolute top-40 right-40 w-2 h-2 bg-purple-300 rounded-full animate-pulse"
            style="animation-delay: 1s;"></div>
        <div class="absolute bottom-40 left-60 w-2 h-2 bg-blue-300 rounded-full animate-pulse"
            style="animation-delay: 2s;"></div>
        <div class="absolute top-60 right-60 w-1 h-1 bg-pink-300 rounded-full animate-pulse"
            style="animation-delay: 3s;"></div>
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
                    <a href="{{ route('samca.magazine') }}"
                        class="px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-2xl font-semibold transition-all hover:shadow-lg hover:shadow-blue-500/50 hover:-translate-y-1 flex items-center gap-2">
                        <span class="text-xl">📰</span>
                        <span class="hidden md:inline">Magazine</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Header -->
    <div class="text-center py-16 md:py-24 px-4 relative z-10">
        <div class="inline-block relative mb-8" style="animation: float 4s ease-in-out infinite;">
            <div
                class="absolute inset-0 bg-gradient-to-r from-purple-500 via-pink-500 to-blue-500 rounded-3xl blur-3xl opacity-60">
            </div>
            <div class="relative glass-strong rounded-3xl p-12 shadow-2xl border-2 border-white/20">
                <div class="text-8xl md:text-9xl mb-6">🌍</div>
                <h1 class="text-5xl md:text-7xl font-black text-white glow-text mb-4">
                    SAMCA 2026
                </h1>
                <div class="h-1 w-32 bg-gradient-to-r from-purple-500 to-blue-500 mx-auto rounded-full"></div>
            </div>
        </div>
        <p class="text-2xl md:text-3xl text-white font-bold max-w-4xl mx-auto leading-relaxed">
            Salon des Maires et des Collectivités d'Afrique
        </p>
    </div>

    <!-- Main Content -->
    <div class="mx-auto px-4 pb-20 relative z-10">
        <div class="max-w-7xl mx-auto">

            <!-- Date & Location Banner -->
            <div class="relative mb-16">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-purple-500 to-blue-500 rounded-3xl blur-xl opacity-30">
                </div>
                <div class="relative gradient-border glass-strong rounded-3xl p-10 md:p-12 shadow-2xl">
                    <div class="flex items-center gap-4 mb-8">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center text-4xl shadow-lg">
                            📅
                        </div>
                        <h2 class="text-4xl md:text-5xl font-black text-white glow-text">Date & Lieu</h2>
                    </div>
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="glass rounded-2xl p-8 border border-white/10 card-hover">
                            <div class="text-5xl mb-4">🗓️</div>
                            <p class="text-xl text-purple-200 mb-2 font-semibold">Dates</p>
                            <p class="text-3xl md:text-4xl font-black text-white">23, 24, 25 Avril 2026</p>
                        </div>
                        <div class="glass rounded-2xl p-8 border border-white/10 card-hover">
                            <div class="text-5xl mb-4">📍</div>
                            <p class="text-xl text-blue-200 mb-2 font-semibold">Lieu</p>
                            <p class="text-3xl md:text-4xl font-black text-white">Hôtel 2 Février</p>
                            <p class="text-xl text-white/80 mt-2">Lomé - Togo 🇹🇬</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Theme Section -->
            <div class="mb-16">
                <div class="relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-pink-500 to-purple-500 rounded-3xl blur-2xl opacity-30">
                    </div>
                    <div class="relative gradient-border glass-strong rounded-3xl p-10 md:p-12 shadow-2xl card-hover">
                        <div class="flex items-center gap-4 mb-6">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-pink-500 to-purple-500 rounded-2xl flex items-center justify-center text-4xl shadow-lg">
                                🎯
                            </div>
                            <h2 class="text-3xl md:text-4xl font-black text-purple-200">Thème Principal</h2>
                        </div>
                        <p
                            class="text-2xl md:text-4xl font-black text-white leading-relaxed text-center italic glow-text">
                            "Les opportunités de la promotion immobilière et foncière pour les municipalités"
                        </p>
                    </div>
                </div>
            </div>

            <!-- Event Format -->
            <div class="mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-10 text-center glow-text">
                    🏆 Format de l'Événement
                </h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="group card-hover cursor-pointer">
                        <div class="relative">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-purple-600 to-pink-600 rounded-3xl blur-xl opacity-50 group-hover:opacity-70 transition-opacity">
                            </div>
                            <div
                                class="relative glass-strong rounded-3xl p-8 border-2 border-white/20 text-center shadow-2xl">
                                <div class="text-6xl mb-4 group-hover:scale-125 transition-transform">🏪</div>
                                <h3 class="text-xl md:text-2xl font-black text-white">EXPOSITION</h3>
                            </div>
                        </div>
                    </div>

                    <div class="group card-hover cursor-pointer">
                        <div class="relative">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-3xl blur-xl opacity-50 group-hover:opacity-70 transition-opacity">
                            </div>
                            <div
                                class="relative glass-strong rounded-3xl p-8 border-2 border-white/20 text-center shadow-2xl">
                                <div class="text-6xl mb-4 group-hover:scale-125 transition-transform">👥</div>
                                <h3 class="text-xl md:text-2xl font-black text-white">CONFÉRENCE</h3>
                            </div>
                        </div>
                    </div>

                    <div class="group card-hover cursor-pointer">
                        <div class="relative">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-pink-600 to-purple-600 rounded-3xl blur-xl opacity-50 group-hover:opacity-70 transition-opacity">
                            </div>
                            <div
                                class="relative glass-strong rounded-3xl p-8 border-2 border-white/20 text-center shadow-2xl">
                                <div class="text-6xl mb-4 group-hover:scale-125 transition-transform">🤝</div>
                                <h3 class="text-xl md:text-2xl font-black text-white">B TO B</h3>
                            </div>
                        </div>
                    </div>

                    <div class="group card-hover cursor-pointer">
                        <div class="relative">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-indigo-600 to-blue-600 rounded-3xl blur-xl opacity-50 group-hover:opacity-70 transition-opacity">
                            </div>
                            <div
                                class="relative glass-strong rounded-3xl p-8 border-2 border-white/20 text-center shadow-2xl">
                                <div class="text-6xl mb-4 group-hover:scale-125 transition-transform">🏅</div>
                                <h3 class="text-xl md:text-2xl font-black text-white">AWARDS</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Themes Grid -->
            <div class="mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-10 text-center glow-text">
                    💡 Thématiques Principales
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="gradient-border glass rounded-3xl p-8 card-hover group text-center">
                        <div class="text-6xl mb-4 group-hover:scale-125 group-hover:rotate-12 transition-all">🏗️</div>
                        <h3 class="text-2xl font-bold text-purple-200 mb-2">Aménagement</h3>
                        <p class="text-white/80 text-lg">Urbain & Environnement</p>
                    </div>

                    <div class="gradient-border glass rounded-3xl p-8 card-hover group text-center">
                        <div class="text-6xl mb-4 group-hover:scale-125 group-hover:rotate-12 transition-all">⚡</div>
                        <h3 class="text-2xl font-bold text-blue-200 mb-2">Énergie</h3>
                        <p class="text-white/80 text-lg">Solutions Durables</p>
                    </div>

                    <div class="gradient-border glass rounded-3xl p-8 card-hover group text-center">
                        <div class="text-6xl mb-4 group-hover:scale-125 group-hover:rotate-12 transition-all">💼</div>
                        <h3 class="text-2xl font-bold text-indigo-200 mb-2">Finances</h3>
                        <p class="text-white/80 text-lg">Services & Équipements</p>
                    </div>

                    <div class="gradient-border glass rounded-3xl p-8 card-hover group text-center">
                        <div class="text-6xl mb-4 group-hover:scale-125 group-hover:rotate-12 transition-all">🤖</div>
                        <h3 class="text-2xl font-bold text-pink-200 mb-2">Intelligence</h3>
                        <p class="text-white/80 text-lg">Artificielle & Tech</p>
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="mb-16">
                <div class="relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-purple-500 to-blue-500 rounded-3xl blur-xl opacity-20">
                    </div>
                    <div class="relative gradient-border glass-strong rounded-3xl p-10 md:p-12 shadow-2xl">
                        <div class="flex items-center gap-4 mb-8">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-purple-500 to-blue-500 rounded-2xl flex items-center justify-center text-4xl shadow-lg">
                                📞
                            </div>
                            <h2 class="text-3xl md:text-4xl font-black text-white glow-text">Contactez-nous</h2>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="glass rounded-2xl p-8 border border-white/10 card-hover group">
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="text-5xl group-hover:scale-125 transition-transform">📱</span>
                                    <p class="text-xl font-bold text-purple-200">Téléphone</p>
                                </div>
                                <a href="tel:+22898905151"
                                    class="text-3xl font-black text-white hover:text-purple-300 transition-colors">
                                    +228 98905151
                                </a>
                            </div>

                            <div class="glass rounded-2xl p-8 border border-white/10 card-hover group">
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="text-5xl group-hover:scale-125 transition-transform">📧</span>
                                    <p class="text-xl font-bold text-blue-200">Email</p>
                                </div>
                                <a href="mailto:maires.dafrique@gmail.com"
                                    class="text-2xl font-black text-white hover:text-blue-300 transition-colors break-all">
                                    maires.dafrique@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Grand Rendez-vous Banner -->
            <div class="relative">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-purple-500 via-pink-500 to-blue-500 rounded-3xl blur-2xl opacity-40">
                </div>
                <div
                    class="relative glass-strong rounded-3xl p-12 md:p-16 text-center shadow-2xl border-2 border-white/20 card-hover">
                    <div class="flex justify-center gap-4 mb-6">
                        <span class="text-6xl">⭐</span>
                        <span class="text-6xl">✨</span>
                        <span class="text-6xl">⭐</span>
                    </div>
                    <h2 class="text-3xl md:text-5xl font-black text-white leading-tight glow-text mb-4">
                        LE GRAND RENDEZ-VOUS
                    </h2>
                    <p class="text-2xl md:text-3xl font-bold text-purple-200 leading-relaxed">
                        de la dynamique et des perspectives locales !
                    </p>
                    <div class="flex justify-center gap-4 mt-6">
                        <span class="text-6xl">⭐</span>
                        <span class="text-6xl">✨</span>
                        <span class="text-6xl">⭐</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
