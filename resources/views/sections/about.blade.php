{{-- ===================== ABOUT ===================== --}}
<section class="section about" id="about"
    style="background-image: url('{{ asset('images/about-bg.png') }}');">
    <div class="container">

        <div class="section-label">Who I Am</div>  

        <div class="about-grid">

            {{-- Left: Photo --}}
            <div class="about-left reveal">
                <div class="about-photo-frame">
                    <div class="about-photo-shadow"></div>
                    <div class="about-photo-main">
                        <img src="{{ asset('images/kaiss.png') }}"
                             alt="Sophia Amor Erfe">
                    </div>
                </div>
                <div class="about-avail">
                    <span class="avail-dot"></span>
                    Available for hire
                </div>
            </div>

            {{-- Right: Content --}}
            <div class="about-content">
                <h2 class="section-title">Turning ideas into<br><em>reliable software</em></h2>

                {{-- Stats --}}
                <div class="about-stats">
                    @foreach ($stats as $stat)
                        <div class="stat-card reveal">
                            <span class="stat-number">{{ $stat['value'] }}</span>
                            <span class="stat-label">{{ $stat['label'] }}</span>
                        </div>
                    @endforeach
                </div>

                <p>
                    I'm a full-stack developer based in the Philippines with {{ $experience }}+ years of experience
                    building web applications for startups and established businesses. I specialize in Laravel
                    backends and modern JavaScript frontends.
                </p>
                <p>
                    My approach is simple: understand the problem deeply, build a clean solution, and ship it
                    reliably. I care about code quality, documentation, and making systems that are easy to maintain.
                </p>

                <div class="about-highlights">
                    @foreach ($highlights as $item)
                        <div class="highlight-item reveal">
                            <div class="highlight-icon">✓</div>
                            <span>{{ $item }}</span>
                        </div>
                    @endforeach
                </div>

                <a href="{{ route('resume.download') }}"
                   class="btn-primary"
                   style="margin-top: 2rem;"
                   target="_blank" rel="noopener">
                    Download CV
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                        <polyline points="7 10 12 15 17 10"/>
                        <line x1="12" y1="15" x2="12" y2="3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>