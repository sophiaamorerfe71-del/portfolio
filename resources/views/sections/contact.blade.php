{{-- ===================== CONTACT ===================== --}}
<section class="section contact" id="contact"
    style="background-image: url('{{ asset('images/contact-bg.png') }}');">
    <div class="container">
        <div class="section-label">Get In Touch</div>
        <h2 class="section-title">Let's Work <em>Together</em></h2>

        <div class="contact-grid">
            <div class="contact-info">
                <p class="contact-intro">
                    I'm currently open to freelance projects and full-time opportunities. 
                    If you have a project in mind or just want to say hello, I'd love to hear from you.
                </p>
                <div class="contact-details">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </div>
                        <div>
                            <div class="contact-label">Email</div>
                            <a href="mailto:john@example.com" class="contact-value">sophiaamorerfe71@gmail.com</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div>
                            <div class="contact-label">Location</div>
                            <span class="contact-value">Philippines (Remote-friendly)</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <div>
                            <div class="contact-label">Availability</div>
                            <span class="contact-value status-open">Open to opportunities</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form-wrap">
                @if (session('success'))
                    <div class="alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST" class="contact-form" id="contactForm">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" placeholder="Sophia Amor Erfe"
                                value="{{ old('name') }}" required>
                            @error('name')
                                <span class="form-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="sophiaamorerfe71@gmail.com"
                                value="{{ old('email') }}" required>
                            @error('email')
                                <span class="form-error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" placeholder="Project Inquiry"
                            value="{{ old('subject') }}" required>
                        @error('subject')
                            <span class="form-error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5"
                            placeholder="Tell me about your project...">{{ old('message') }}</textarea>
                        @error('message')
                            <span class="form-error">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn-primary btn-full" id="submitBtn">
                        <span class="btn-text">Send Message</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>