<?php
// Deteksi otomatis URL logo footer agar tidak pernah broken
$local_footer_logo = get_template_directory() . '/assets/images/3sb.png';
$logo_footer_url   = file_exists( $local_footer_logo )
	? get_template_directory_uri() . '/assets/images/3sb.png'
	: 'https://beta.senangbicara.com/wp-content/uploads/2026/11/3sb.png';
?>

<!-- FOOTER -->
<footer id="kontak" class="bg-brand-topbar text-white pt-16 pb-10">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 pb-12 border-b border-white/10">
			<!-- Brand Info -->
			<div class="lg:col-span-4 space-y-4">
				<img src="<?php echo esc_url( $logo_footer_url ); ?>" alt="Senang Bicara" class="h-8 w-auto object-contain">
				<p class="text-sm font-bold text-white">Your Partner in Public Speaking</p>
				<p class="text-sm text-white/75 leading-relaxed">
					SenangBicara adalah komunitas pengembangan diri yang membantu setiap orang belajar, berlatih, dan bertumbuh melalui komunikasi dan public speaking.
				</p>
				<div class="pt-2 flex flex-wrap items-center gap-2.5">
					<a href="https://www.facebook.com/SenangBicaraCommunity/" target="_blank" rel="noopener" class="px-3.5 py-1.5 rounded-[4px] bg-white/10 hover:bg-brand-red text-xs font-semibold transition">Facebook</a>
					<a href="https://www.instagram.com/senangbicara?srtk=cG9vYXBxenJwMDB2" target="_blank" rel="noopener" class="px-3.5 py-1.5 rounded-[4px] bg-white/10 hover:bg-brand-red text-xs font-semibold transition">Instagram</a>
					<a href="https://www.tiktok.com/@senangbicara" target="_blank" rel="noopener" class="px-3.5 py-1.5 rounded-[4px] bg-white/10 hover:bg-brand-red text-xs font-semibold transition">TikTok</a>
				</div>
			</div>

			<!-- Explore -->
			<div class="lg:col-span-2 space-y-3">
				<h3 class="text-sm font-bold uppercase tracking-wider text-white/95">Explore</h3>
				<ul class="space-y-2.5 text-sm text-white/75">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-white transition">Beranda</a></li>
					<li><a href="#tentang" class="hover:text-white transition">Tentang Kami</a></li>
					<li><a href="#kontak" class="hover:text-white transition">Hubungi Kami</a></li>
				</ul>
			</div>

			<!-- Programs -->
			<div class="lg:col-span-3 space-y-3">
				<h3 class="text-sm font-bold uppercase tracking-wider text-white/95">Our Programs</h3>
				<ul class="space-y-2.5 text-sm text-white/75">
					<li><a href="https://api.whatsapp.com/send?phone=62816870999&text=Saya+ingin+daftar+Kursus+public+speaking+Public+Training" target="_blank" rel="noopener" class="hover:text-white transition">Komunitas</a></li>
					<li><a href="https://api.whatsapp.com/send?phone=62816870999&text=Saya+ingin+daftar+Kursus+public+speaking+Private" target="_blank" rel="noopener" class="hover:text-white transition">Private Class</a></li>
					<li><a href="https://api.whatsapp.com/send?phone=62816870999&text=Saya+ingin+daftar+Kursus+public+speaking+Corporate+Training" target="_blank" rel="noopener" class="hover:text-white transition">In-House Training</a></li>
				</ul>
			</div>

			<!-- Get in Touch -->
			<div class="lg:col-span-3 space-y-3">
				<h3 class="text-sm font-bold uppercase tracking-wider text-white/95">Get in Touch</h3>
				<ul class="space-y-2.5 text-sm text-white/75">
					<li>Grand ITC Permata Hijau Lt.2</li>
					<li><a href="mailto:senangbicara@gmail.com" class="hover:text-white transition">senangbicara@gmail.com</a></li>
					<li><a href="https://api.whatsapp.com/send?phone=62816870999&text=Hallo+SenangBicara+saya+ingin+tanya+Kursus+public+speaking" target="_blank" rel="noopener" class="hover:text-white transition">+62 816-870-999</a></li>
					<li>M-F 9:00AM to 6:00PM</li>
				</ul>
			</div>
		</div>

		<div class="pt-8 flex flex-col sm:flex-row justify-between items-center gap-3 text-xs text-white/60">
			<p>Your Partner in Public Speaking – Senang Bicara</p>
			<p>Copyright © <?php echo esc_html( date( 'Y' ) ); ?>. All rights reserved.</p>
		</div>
	</div>
</footer>

<!-- FLOATING WHATSAPP BUTTON (Persis Pojok Kanan Bawah) -->
<a href="https://api.whatsapp.com/send?phone=62816870999&text=Hallo+SenangBicara+saya+ingin+tanya+Kursus+public+speaking" target="_blank" rel="noopener" aria-label="Hubungi Kami via WhatsApp" class="fixed bottom-5 right-5 z-50 flex items-center justify-center w-12 h-12 sm:w-14 sm:h-14 bg-[#25D366] hover:bg-[#20bd5a] text-white rounded-xl shadow-lg transition transform hover:scale-105">
	<svg class="w-7 h-7 fill-current" viewBox="0 0 448 512"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
</a>

<!-- SCRIPT TOGGLE MENU MOBILE -->
<script>
	const btn = document.getElementById('mobile-menu-btn');
	const menu = document.getElementById('mobile-menu');
	const mobileLinks = document.querySelectorAll('.mobile-link');

	if (btn && menu) {
		btn.addEventListener('click', () => {
			menu.classList.toggle('hidden');
		});
		mobileLinks.forEach(link => {
			link.addEventListener('click', () => menu.classList.add('hidden'));
		});
	}
</script>

<?php wp_footer(); ?>
</body>
</html>
