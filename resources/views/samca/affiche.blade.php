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

<body class="min-h-screen overflow-x-hidden bg-white">

    <!-- Navigation -->
    <nav class="sticky top-0 z-50 border-b shadow-2xl glass-strong border-white/10">
        <div class="container px-4 py-4 mx-auto">
            <div class="flex flex-wrap items-center justify-between gap-4">
                <a href="{{ route('home') }}"
                    class="flex items-center gap-3 px-2 text-2xl font-bold transition-all duration-300 bg-white rounded-lg hover:scale-110">
                    <img src="{{ asset('images/logo.png') }}" alt="Maires d'Afrique" class="mx-auto h-14"
                        onerror="this.style.display='none'">
                </a>
                <div class="flex gap-3">
                    <a href="{{ route('home') }}"
                        class="flex items-center gap-2 px-6 py-3 font-semibold text-white transition-all bg-gradient-to-r from-purple-600 to-pink-600 rounded-2xl hover:shadow-lg hover:shadow-purple-500/50 hover:-translate-y-1">
                        <span class="text-xl">🏠</span>
                        <span class="hidden md:inline">Accueil</span>
                    </a>
                    <a href="{{ route('samca.magazine') }}"
                        class="flex items-center gap-2 px-6 py-3 font-semibold text-white transition-all bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl hover:shadow-lg hover:shadow-blue-500/50 hover:-translate-y-1">
                        <span class="text-xl">📰</span>
                        <span class="hidden md:inline">Magazine</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Header -->
    <div class="relative z-10 px-4 py-16 text-center md:py-24">
        <div class="relative inline-block mb-8" style="animation: float 4s ease-in-out infinite;">
            <div
                class="absolute inset-0 bg-gradient-to-r from-purple-500 via-pink-500 to-blue-500 rounded-3xl blur-3xl opacity-60">
            </div>
            <div class="relative p-12 border-2 shadow-2xl glass-strong rounded-3xl border-white/20">
                <div class="mb-6 text-8xl md:text-9xl">🌍</div>
                <h1 class="mb-4 text-5xl font-black text-white md:text-7xl glow-text">
                    SAMCA 2026
                </h1>
                <div class="w-32 h-1 mx-auto rounded-full bg-gradient-to-r from-purple-500 to-blue-500"></div>
            </div>
        </div>
        <p class="max-w-4xl mx-auto text-2xl font-bold leading-relaxed text-white md:text-3xl">
            Salon des Maires et des Collectivités d'Afrique
        </p>
    </div>

    <!-- Main Content -->
    <div class="relative z-10 px-4 pb-20 mx-auto">
        <div class="mx-auto max-w-7xl">

            <!-- Date & Location Banner -->
            <div class="relative mb-16">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-purple-500 to-blue-500 rounded-3xl blur-xl opacity-30">
                </div>
                <div class="relative p-10 shadow-2xl gradient-border glass-strong rounded-3xl md:p-12">
                    <div class="flex items-center gap-4 mb-8">
                        <div
                            class="flex items-center justify-center w-16 h-16 text-4xl shadow-lg bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl">
                            📅
                        </div>
                        <h2 class="text-4xl font-black text-white md:text-5xl glow-text">Date & Lieu</h2>
                    </div>
                    <div class="grid gap-8 md:grid-cols-2">
                        <div class="p-8 border glass rounded-2xl border-white/10 card-hover">
                            <div class="mb-4 text-5xl">🗓️</div>
                            <p class="mb-2 text-xl font-semibold text-purple-200">Dates</p>
                            <p class="text-3xl font-black text-white md:text-4xl">23, 24, 25 Avril 2026</p>
                        </div>
                        <div class="p-8 border glass rounded-2xl border-white/10 card-hover">
                            <div class="mb-4 text-5xl">📍</div>
                            <p class="mb-2 text-xl font-semibold text-blue-200">Lieu</p>
                            <p class="text-3xl font-black text-white md:text-4xl">Hôtel 2 Février</p>
                            <p class="mt-2 text-xl text-white/80">Lomé - Togo 🇹🇬</p>
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
                    <div class="relative p-10 shadow-2xl gradient-border glass-strong rounded-3xl md:p-12 card-hover">
                        <div class="flex items-center gap-4 mb-6">
                            <div
                                class="flex items-center justify-center w-16 h-16 text-4xl shadow-lg bg-gradient-to-br from-pink-500 to-purple-500 rounded-2xl">
                                🎯
                            </div>
                            <h2 class="text-3xl font-black text-purple-200 md:text-4xl">Thème Principal</h2>
                        </div>
                        <p
                            class="text-2xl italic font-black leading-relaxed text-center text-white md:text-4xl glow-text">
                            "Les opportunités de la promotion immobilière et foncière pour les municipalités"
                        </p>
                    </div>
                </div>
            </div>

            <!-- Event Format -->
            <div class="mb-16">
                <h2 class="mb-10 text-4xl font-black text-center text-white md:text-5xl glow-text">
                    🏆 Format de l'Événement
                </h2>
                <div class="grid grid-cols-2 gap-6 md:grid-cols-4">
                    <div class="cursor-pointer group card-hover">
                        <div class="relative">
                            <div
                                class="absolute inset-0 transition-opacity opacity-50 bg-gradient-to-br from-purple-600 to-pink-600 rounded-3xl blur-xl group-hover:opacity-70">
                            </div>
                            <div
                                class="relative p-8 text-center border-2 shadow-2xl glass-strong rounded-3xl border-white/20">
                                <div class="mb-4 text-6xl transition-transform group-hover:scale-125">🏪</div>
                                <h3 class="text-xl font-black text-white md:text-2xl">EXPOSITION</h3>
                            </div>
                        </div>
                    </div>

                    <div class="cursor-pointer group card-hover">
                        <div class="relative">
                            <div
                                class="absolute inset-0 transition-opacity opacity-50 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-3xl blur-xl group-hover:opacity-70">
                            </div>
                            <div
                                class="relative p-8 text-center border-2 shadow-2xl glass-strong rounded-3xl border-white/20">
                                <div class="mb-4 text-6xl transition-transform group-hover:scale-125">👥</div>
                                <h3 class="text-xl font-black text-white md:text-2xl">CONFÉRENCE</h3>
                            </div>
                        </div>
                    </div>

                    <div class="cursor-pointer group card-hover">
                        <div class="relative">
                            <div
                                class="absolute inset-0 transition-opacity opacity-50 bg-gradient-to-br from-pink-600 to-purple-600 rounded-3xl blur-xl group-hover:opacity-70">
                            </div>
                            <div
                                class="relative p-8 text-center border-2 shadow-2xl glass-strong rounded-3xl border-white/20">
                                <div class="mb-4 text-6xl transition-transform group-hover:scale-125">🤝</div>
                                <h3 class="text-xl font-black text-white md:text-2xl">B TO B</h3>
                            </div>
                        </div>
                    </div>

                    <div class="cursor-pointer group card-hover">
                        <div class="relative">
                            <div
                                class="absolute inset-0 transition-opacity opacity-50 bg-gradient-to-br from-indigo-600 to-blue-600 rounded-3xl blur-xl group-hover:opacity-70">
                            </div>
                            <div
                                class="relative p-8 text-center border-2 shadow-2xl glass-strong rounded-3xl border-white/20">
                                <div class="mb-4 text-6xl transition-transform group-hover:scale-125">🏅</div>
                                <h3 class="text-xl font-black text-white md:text-2xl">AWARDS</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Themes Grid -->
            <div class="mb-16">
                <h2 class="mb-10 text-4xl font-black text-center text-white md:text-5xl glow-text">
                    💡 Thématiques Principales
                </h2>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
                    <div class="p-8 text-center gradient-border glass rounded-3xl card-hover group">
                        <div class="mb-4 text-6xl transition-all group-hover:scale-125 group-hover:rotate-12">🏗️</div>
                        <h3 class="mb-2 text-2xl font-bold text-purple-200">Aménagement</h3>
                        <p class="text-lg text-white/80">Urbain & Environnement</p>
                    </div>

                    <div class="p-8 text-center gradient-border glass rounded-3xl card-hover group">
                        <div class="mb-4 text-6xl transition-all group-hover:scale-125 group-hover:rotate-12">⚡</div>
                        <h3 class="mb-2 text-2xl font-bold text-blue-200">Énergie</h3>
                        <p class="text-lg text-white/80">Solutions Durables</p>
                    </div>

                    <div class="p-8 text-center gradient-border glass rounded-3xl card-hover group">
                        <div class="mb-4 text-6xl transition-all group-hover:scale-125 group-hover:rotate-12">💼</div>
                        <h3 class="mb-2 text-2xl font-bold text-indigo-200">Finances</h3>
                        <p class="text-lg text-white/80">Services & Équipements</p>
                    </div>

                    <div class="p-8 text-center gradient-border glass rounded-3xl card-hover group">
                        <div class="mb-4 text-6xl transition-all group-hover:scale-125 group-hover:rotate-12">🤖</div>
                        <h3 class="mb-2 text-2xl font-bold text-pink-200">Intelligence</h3>
                        <p class="text-lg text-white/80">Artificielle & Tech</p>
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="mb-16">
                <div class="relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-purple-500 to-blue-500 rounded-3xl blur-xl opacity-20">
                    </div>
                    <div class="relative p-10 shadow-2xl gradient-border glass-strong rounded-3xl md:p-12">
                        <div class="flex items-center gap-4 mb-8">
                            <div
                                class="flex items-center justify-center w-16 h-16 text-4xl shadow-lg bg-gradient-to-br from-purple-500 to-blue-500 rounded-2xl">
                                📞
                            </div>
                            <h2 class="text-3xl font-black text-white md:text-4xl glow-text">Contactez-nous</h2>
                        </div>

                        <div class="grid gap-6 md:grid-cols-2">
                            <div class="p-8 border glass rounded-2xl border-white/10 card-hover group">
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="text-5xl transition-transform group-hover:scale-125">📱</span>
                                    <p class="text-xl font-bold text-purple-200">Téléphone</p>
                                </div>
                                <a href="tel:+22898905151"
                                    class="text-3xl font-black text-white transition-colors hover:text-purple-300">
                                    +228 98905151
                                </a>
                            </div>

                            <div class="p-8 border glass rounded-2xl border-white/10 card-hover group">
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="text-5xl transition-transform group-hover:scale-125">📧</span>
                                    <p class="text-xl font-bold text-blue-200">Email</p>
                                </div>
                                <a href="mailto:maires.dafrique@gmail.com"
                                    class="text-2xl font-black text-white break-all transition-colors hover:text-blue-300">
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
                    class="relative p-12 text-center border-2 shadow-2xl glass-strong rounded-3xl md:p-16 border-white/20 card-hover">
                    <div class="flex justify-center gap-4 mb-6">
                        <span class="text-6xl">⭐</span>
                        <span class="text-6xl">✨</span>
                        <span class="text-6xl">⭐</span>
                    </div>
                    <h2 class="mb-4 text-3xl font-black leading-tight text-white md:text-5xl glow-text">
                        LE GRAND RENDEZ-VOUS
                    </h2>
                    <p class="text-2xl font-bold leading-relaxed text-purple-200 md:text-3xl">
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