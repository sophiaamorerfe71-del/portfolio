{{-- ===================== HERO ===================== --}}
<section class="hero" id="hero"
    style="background-image: url('{{ asset('images/hero-bg.png') }}');">

    <div class="container hero-inner">

        <div class="hero-text reveal">
            <span class="hero-tag">Full-Stack Developer</span>
            <h1 class="hero-title">
                Hello, I'm<br>
                <em>Sophia Amor Erfe</em>
            </h1>
            <p class="hero-sub">
                I craft clean, performant web applications using Laravel, PHP, and modern technologies.
                Passionate about solving real-world problems through elegant code.
            </p>
            <div class="hero-cta">
                <a href="#projects" class="btn-primary">View My Work</a>
                <a href="#contact"  class="btn-secondary">Let's Talk</a>
            </div>
        </div>

        <div class="hero-visual">
            <div class="hero-card">
                <div class="hero-card-header">
                    <span class="dot red"></span>
                    <span class="dot yellow"></span>
                    <span class="dot green"></span>
                </div>
                <pre class="hero-code"><code><span class="c-key">class</span> <span class="c-class">Developer</span> {
  <span class="c-key">protected</span> <span class="c-var">$name</span> = <span class="c-str">'Sophia Amor Erfe'</span>;
  <span class="c-key">protected</span> <span class="c-var">$role</span> = <span class="c-str">'Full-Stack Dev'</span>;
  <span class="c-key">protected</span> <span class="c-var">$location</span> = <span class="c-str">'Philippines 🇵🇭'</span>;

  <span class="c-key">public function</span> <span class="c-fn">skills</span>(): <span class="c-class">array</span>
  {
    <span class="c-key">return</span> [
      <span class="c-str">'Laravel'</span>, <span class="c-str">'Vue.js'</span>,
      <span class="c-str">'MySQL'</span>,   <span class="c-str">'Vertrigo'</span>,
    ];
  }

  <span class="c-key">public function</span> <span class="c-fn">isAvailable</span>(): <span class="c-class">bool</span>
  {
    <span class="c-key">return</span> <span class="c-str">true</span>; <span style="color:#546e7a">// hire me!</span>
  }
}</code></pre>
            </div>
        </div>

    </div>

    <div class="hero-scroll">
        <span>Scroll down</span>
        <div class="scroll-line"></div>
    </div>

</section>