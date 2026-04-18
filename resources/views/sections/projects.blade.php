{{-- ===================== PROJECTS ===================== --}}
<section class="section projects" id="projects"
    style="background-image: url('{{ asset('images/projects-bg.png') }}');">
    <div class="container">
        <div class="section-label">My Work</div>
        <h2 class="section-title">Featured <em>Projects</em></h2>

        <div class="projects-grid">
            @foreach ($projects as $index => $project)
            <article class="project-card {{ $index === 0 ? 'project-featured' : '' }}">
                <div class="project-image">
                    <div class="project-placeholder" style="background: {{ $project['color'] }}">
                        <span class="project-abbr">{{ strtoupper(substr($project['title'], 0, 2)) }}</span>
                    </div>
                    <div class="project-overlay">
                        @if ($project['demo'])
                            <a href="{{ $project['demo'] }}" target="_blank" class="project-link" rel="noopener">Live Demo ↗</a>
                        @endif
                        @if ($project['repo'])
                            <a href="{{ $project['repo'] }}" target="_blank" class="project-link" rel="noopener">GitHub ↗</a>
                        @endif
                    </div>
                </div>
                <div class="project-body">
                    <div class="project-tags">
                        @foreach ($project['tags'] as $tag)
                        <span class="project-tag">{{ $tag }}</span>
                        @endforeach
                    </div>
                    <h3 class="project-title">{{ $project['title'] }}</h3>
                    <p class="project-desc">{{ $project['description'] }}</p>
                </div>
            </article>
            @endforeach
        </div>

        <div class="projects-cta">
            <a href="https://github.com" target="_blank" rel="noopener" class="btn-outline">
                See All Projects on GitHub ↗
            </a>
        </div>
    </div>
</section>