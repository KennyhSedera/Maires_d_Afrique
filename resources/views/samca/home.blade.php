<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maires d'Afrique</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
                <a href="#accueil"
                    class="flex items-center gap-3 px-2 bg-white rounded-lg font-bold text-2xl hover:scale-110 transition-all duration-300">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo SAMCA" class="w-auto h-12" />
                </a>
                <div class="flex gap-8 flex-wrap">
                    <a href="#apropos"
                        class="nav-link text-white hover:text-purple-300 font-semibold transition-colors">
                        À propos
                    </a>
                    <a href="#magazine"
                        class="nav-link text-white hover:text-purple-300 font-semibold transition-colors">
                        Magazine
                    </a>
                    <a href="#evenements"
                        class="nav-link text-white hover:text-purple-300 font-semibold transition-colors">
                        Événements
                    </a>
                    <a href="#contact"
                        class="nav-link text-white hover:text-purple-300 font-semibold transition-colors">
                        Contact
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12 md:py-20 relative z-10">
        <div class="max-w-7xl mx-auto">

            <!-- Hero Section -->
            <section id="accueil" class="text-center mb-24" style="animation: float 4s ease-in-out infinite;">
                <div class="inline-block relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-purple-500 to-blue-500 rounded-3xl blur-2xl opacity-50">
                    </div>
                    <div class="relative glass-strong rounded-3xl p-10 shadow-2xl border-2 border-white/20">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo SAMCA"
                            class="w-full h-60 rounded-xl bg-white" />
                        <h1 class="text-5xl md:text-7xl font-black text-white glow-text">Maires d'Afrique</h1>
                        <p class="text-2xl text-purple-200 mt-4 font-semibold">Magazine International de Promotion</p>
                    </div>
                </div>
            </section>

            <!-- À propos Section -->
            <section id="apropos" class="mb-24">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-12 text-center glow-text">
                    ✨ À propos
                </h2>

                <div class="grid md:grid-cols-3 gap-6 mb-12">
                    <div class="gradient-border glass p-8 rounded-3xl card-hover">
                        <div class="text-4xl mb-4">✨</div>
                        <h3 class="text-xl font-bold text-purple-300 mb-3">Promotion</h3>
                        <p class="text-white/90 leading-relaxed"><span class="font-bold text-purple-200">Maires
                                d'Afrique</span> est un magazine international de promotion et de valorisation de la
                            dynamique et des perspectives locales.</p>
                    </div>

                    <div class="gradient-border glass p-8 rounded-3xl card-hover">
                        <div class="text-4xl mb-4">🎯</div>
                        <h3 class="text-xl font-bold text-blue-300 mb-3">Communication</h3>
                        <p class="text-white/90 leading-relaxed">Un cadre de communication adapté aux élus locaux et au
                            renforcement de l'écoute des maires.</p>
                    </div>

                    <div class="gradient-border glass p-8 rounded-3xl card-hover">
                        <div class="text-4xl mb-4">📊</div>
                        <h3 class="text-xl font-bold text-pink-300 mb-3">Information</h3>
                        <p class="text-white/90 leading-relaxed">Une ligne éditoriale responsable, privilégiant
                            l'objectivité et l'information de proximité.</p>
                    </div>
                </div>

                <!-- Highlight Quote -->
                <div class="relative">
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
            </section>

            <!-- Mission Section -->
            <section class="mb-24">
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
            </section>

            <!-- Magazine Section -->
            <section id="magazine" class="mb-24">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-12 text-center glow-text">
                    📑 Nos Rubriques
                </h2>

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
            </section>

            <!-- Événements Section -->
            <section id="evenements" class="mb-24">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-12 text-center glow-text">
                    🎯 Nos Événements
                </h2>

                <!-- SAMCA 2026 - Event Card -->
                <div class="relative mb-8">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-purple-500 via-pink-500 to-blue-500 rounded-3xl blur-2xl opacity-40">
                    </div>
                    <div class="relative gradient-border glass-strong rounded-3xl p-10 md:p-12 shadow-2xl">

                        <!-- Event Header -->
                        <div class="flex flex-col items-center justify-center mb-10">
                            <img src="{{ asset('images/logo.jpeg') }}" alt="Logo SAMCA"
                                class="w-auto h-24 rounded-xl" />
                            <h3 class="text-4xl md:text-6xl font-black text-white glow-text mb-4">SAMCA 2026</h3>
                            <p class="text-2xl text-purple-200 font-bold">Salon des Maires et des Collectivités
                                d'Afrique</p>
                        </div>

                        <!-- Date & Location -->
                        <div class="grid md:grid-cols-2 gap-6 mb-8">
                            <div class="glass rounded-2xl p-6 border border-white/10 card-hover">
                                <div class="text-4xl mb-3">🗓️</div>
                                <p class="text-lg text-purple-200 mb-2 font-semibold">Dates</p>
                                <p class="text-2xl md:text-3xl font-black text-white">21, 22, 23 Mai 2026</p>
                            </div>
                            <div class="glass rounded-2xl p-6 border border-white/10 card-hover">
                                <div class="text-4xl mb-3">📍</div>
                                <p class="text-lg text-blue-200 mb-2 font-semibold">Lieu</p>
                                <p class="text-2xl md:text-3xl font-black text-white">Hôtel 2 Février</p>
                                <p class="text-lg text-white/80">Lomé - Togo 🇹🇬</p>
                            </div>
                        </div>

                        <!-- Theme -->
                        <div class="glass rounded-2xl p-8 border border-white/10 mb-8">
                            <div class="flex items-center gap-3 mb-4">
                                <div
                                    class="w-12 h-12 bg-gradient-to-br from-pink-500 to-purple-500 rounded-xl flex items-center justify-center text-3xl">
                                    🎯</div>
                                <h4 class="text-2xl font-bold text-pink-200">Thème Principal</h4>
                            </div>
                            <p class="text-xl md:text-2xl font-bold text-white italic">"Les opportunités de la promotion
                                immobilière et foncière pour les municipalités"</p>
                        </div>

                        <!-- Event Format -->
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                            <div class="glass rounded-2xl p-6 text-center card-hover group">
                                <div class="text-5xl mb-2 group-hover:scale-125 transition-transform">🏪</div>
                                <h5 class="text-lg font-bold text-white">EXPOSITION</h5>
                            </div>
                            <div class="glass rounded-2xl p-6 text-center card-hover group">
                                <div class="text-5xl mb-2 group-hover:scale-125 transition-transform">👥</div>
                                <h5 class="text-lg font-bold text-white">CONFÉRENCE</h5>
                            </div>
                            <div class="glass rounded-2xl p-6 text-center card-hover group">
                                <div class="text-5xl mb-2 group-hover:scale-125 transition-transform">🤝</div>
                                <h5 class="text-lg font-bold text-white">B TO B</h5>
                            </div>
                            <div class="glass rounded-2xl p-6 text-center card-hover group">
                                <div class="text-5xl mb-2 group-hover:scale-125 transition-transform">🏅</div>
                                <h5 class="text-lg font-bold text-white">AWARDS</h5>
                            </div>
                        </div>

                        <!-- Themes -->
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <div class="glass rounded-2xl p-6 text-center card-hover">
                                <div class="text-4xl mb-2">🏗️</div>
                                <h5 class="text-lg font-bold text-purple-200 mb-1">Aménagement</h5>
                                <p class="text-sm text-white/80">Urbain & Environnement</p>
                            </div>
                            <div class="glass rounded-2xl p-6 text-center card-hover">
                                <div class="text-4xl mb-2">⚡</div>
                                <h5 class="text-lg font-bold text-blue-200 mb-1">Énergie</h5>
                                <p class="text-sm text-white/80">Solutions Durables</p>
                            </div>
                            <div class="glass rounded-2xl p-6 text-center card-hover">
                                <div class="text-4xl mb-2">💼</div>
                                <h5 class="text-lg font-bold text-indigo-200 mb-1">Finances</h5>
                                <p class="text-sm text-white/80">Services & Équipements</p>
                            </div>
                            <div class="glass rounded-2xl p-6 text-center card-hover">
                                <div class="text-4xl mb-2">🤖</div>
                                <h5 class="text-lg font-bold text-pink-200 mb-1">Intelligence</h5>
                                <p class="text-sm text-white/80">Artificielle & Tech</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Placeholder pour futurs événements -->
                <div class="glass rounded-3xl p-10 text-center border-2 border-dashed border-white/20">
                    <div class="text-6xl mb-4">📅</div>
                    <p class="text-2xl text-white/70 font-semibold">D'autres événements à venir...</p>
                </div>
            </section>

            <!-- Contact Section -->
            <section id="contact" class="mb-16">
                <div class="relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-purple-500 to-blue-500 rounded-3xl blur-xl opacity-20">
                    </div>
                    <div class="relative glass-strong rounded-3xl p-10 md:p-12 shadow-2xl border-2 border-white/20">
                        <div class="flex items-center gap-4 mb-8">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-purple-500 to-blue-500 rounded-2xl flex items-center justify-center text-4xl shadow-lg">
                                📞</div>
                            <h2 class="text-3xl md:text-4xl font-black text-white glow-text">Contactez-nous</h2>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">

                            <div class="glass rounded-2xl p-8 border border-white/10 card-hover group">
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="text-5xl group-hover:scale-125 transition-transform">📱</span>
                                    <p class="text-xl font-bold text-blue-200">Téléphone</p>
                                </div>
                                <a href="tel:+22898905151"
                                    class="text-2xl font-bold text-white hover:text-blue-300 transition-colors">
                                    +228 98905151
                                </a>
                            </div>

                            <div class="glass rounded-2xl p-8 border border-white/10 card-hover group">
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="text-5xl group-hover:scale-125 transition-transform">📧</span>
                                    <p class="text-xl font-bold text-pink-200">Email</p>
                                </div>
                                <a href="mailto:maires.dafrique@gmail.com"
                                    class="text-xl font-bold text-white hover:text-pink-300 transition-colors break-all">
                                    maires.dafrique@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <div class="relative">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-purple-500 to-blue-500 rounded-3xl blur-xl opacity-20">
                </div>
                <div
                    class="relative glass-strong rounded-3xl p-10 md:p-12 text-center shadow-2xl border-2 border-white/20">
                    <div class="text-6xl mb-4">🏆</div>
                    <h4 class="text-3xl md:text-4xl font-black text-white mb-4 glow-text">Magazine de Promotion et de
                        Valorisation</h4>
                    <p class="text-white/70 text-lg">Connecter les élus locaux avec leurs communautés</p>
                    <p class="text-white/50 text-sm mt-6">© 2026 Maires d'Afrique - Tous droits réservés</p>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
