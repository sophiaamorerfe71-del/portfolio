{{-- ===================== SKILLS ===================== --}}
{{-- ===================== SKILLS ===================== --}}
<section class="section skills" id="skills"
    style="background-image: url('{{ asset('images/skills-bg.png') }}');">
    <div class="container">
        <div class="section-label">What I Use</div>
        <h2 class="section-title">Technical <em>Skills</em></h2>

        <div class="skills-grid">
            @foreach ($skillGroups as $group)
                <div class="skill-group reveal">
                    <div class="skill-group-header">
                        <div class="skill-group-icon">{{ $group['icon'] }}</div>
                        <h3>{{ $group['title'] }}</h3>
                    </div>
                    <div class="skill-list">
                        @foreach ($group['skills'] as $skill)
                            <div class="skill-item">
                                <div class="skill-info">
                                    <span class="skill-name">{{ $skill['name'] }}</span>
                                    <span class="skill-level">{{ $skill['level'] }}%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-fill" data-width="{{ $skill['level'] }}"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Tools & Technologies --}}
        <div class="tools-section">
            <h3 class="tools-title">Tools &amp; Technologies</h3>
            <div class="tools-grid">
                @foreach ($tools as $tool)
                    <div class="tool-badge reveal">{{ $tool }}</div>
                @endforeach
            </div>
        </div>

    </div>
</section>