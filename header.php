<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Senang Bicara – Your Partner in Public Speaking. Belajar . Berlatih . Bertumbuh bersama komunitas dan program pelatihan public speaking di Jakarta Selatan.">

	<!-- Google Fonts: Raleway (Persis seperti desain asli) -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800&display=swap" rel="stylesheet">

	<!-- Tailwind CSS & Konfigurasi Warna Brand Terpusat -->
	<script src="https://cdn.tailwindcss.com"></script>
	<script>
		tailwind.config = {
			theme: {
				extend: {
					fontFamily: {
						sans: ['"Raleway"', 'sans-serif'],
					},
					colors: {
						brand: {
							topbar: '#190430',
							purple: '#470A70',
							purpleDark: '#320650',
							purpleLight: '#F3EAFB',
							red: '#D9320B',
							redHover: '#B82807',
							surface: '#FAFAFC',
							ink: '#18181B',
							muted: '#52525B',
						}
					}
				}
			}
		}
	</script>

	<!-- GEO AI & SEO Structured Data (JSON-LD) -->
	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "EducationalOrganization",
		"name": "Senang Bicara",
		"alternateName": "SenangBicara",
		"url": "https://senangbicara.com",
		"logo": "<?php echo esc_url( get_template_directory_uri() . '/assets/images/1sb.png' ); ?>",
		"foundingDate": "2011-11-11",
		"description": "Your Partner in Public Speaking. Belajar . Berlatih . Bertumbuh bersama komunitas dan pelatihan public speaking di Jakarta Selatan.",
		"email": "senangbicara@gmail.com",
		"telephone": "+62816870999",
		"address": {
			"@type": "PostalAddress",
			"streetAddress": "Grand ITC Permata Hijau Lt.2",
			"addressLocality": "Jakarta Selatan",
			"addressRegion": "DKI Jakarta",
			"addressCountry": "ID"
		},
		"sameAs": [
			"https://www.facebook.com/SenangBicaraCommunity/",
			"https://www.instagram.com/senangbicara",
			"https://www.tiktok.com/@senangbicara"
		]
	}
	</script>

	<?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-white text-brand-ink font-sans antialiased selection:bg-brand-purple selection:text-white' ); ?>>
<?php wp_body_open(); ?>

<!-- TOP BAR (Persis Referensi: Ungu Gelap #190430) -->
<div class="hidden md:block bg-brand-topbar text-white text-[13px] py-2.5">
	<div class="max-w-7xl mx-auto px-6 lg:px-10 flex justify-between items-center">
		<!-- Kiri: Lokasi & Email -->
		<div class="flex items-center gap-6">
			<span class="flex items-center gap-2 font-medium">
				<svg class="w-3.5 h-3.5 text-white shrink-0" fill="currentColor" viewBox="0 0 384 512"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"/></svg>
				South Jakarta
			</span>
			<a href="mailto:senangbicara@gmail.com" class="flex items-center gap-2 font-medium hover:text-white/80 transition">
				<svg class="w-3.5 h-3.5 text-white shrink-0" fill="currentColor" viewBox="0 0 512 512"><path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"/></svg>
				senangbicara@gmail.com
			</a>
		</div>

		<!-- Kanan: Social Media Icons -->
		<div class="flex items-center gap-3.5">
			<span class="font-medium text-white/95">Social Media :</span>
			<!-- Facebook -->
			<a href="https://www.facebook.com/SenangBicaraCommunity/" target="_blank" rel="noopener" aria-label="Facebook Senang Bicara" class="text-white hover:text-white/75 transition">
				<svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
			</a>
			<!-- Instagram -->
			<a href="https://www.instagram.com/senangbicara?srtk=cG9vYXBxenJwMDB2" target="_blank" rel="noopener" aria-label="Instagram Senang Bicara" class="text-white hover:text-white/75 transition">
				<svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
			</a>
			<!-- WhatsApp -->
			<a href="https://api.whatsapp.com/send?phone=62816870999&text=Hallo+SenangBicara+saya+ingin+tanya+Kursus+public+speaking" target="_blank" rel="noopener" aria-label="WhatsApp Senang Bicara" class="text-white hover:text-white/75 transition">
				<svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 448 512"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
			</a>
			<!-- TikTok -->
			<a href="https://www.tiktok.com/@senangbicara" target="_blank" rel="noopener" aria-label="TikTok Senang Bicara" class="text-white hover:text-white/75 transition">
				<svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 448 512"><path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/></svg>
			</a>
		</div>
	</div>
</div>

<!-- MAIN HEADER / NAVBAR -->
<header class="sticky top-0 z-50 bg-white border-b border-zinc-100/80 shadow-[0_2px_15px_rgba(0,0,0,0.03)]">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 h-16 sm:h-[88px] flex items-center justify-between">
		<!-- Logo -->
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center shrink-0" aria-label="Senang Bicara Beranda">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/1sb.png' ); ?>" alt="Senang Bicara" class="h-7 sm:h-9 w-auto object-contain">
		</a>

		<!-- Desktop Navigation -->
		<nav class="hidden md:flex items-center gap-8 text-[15px] font-semibold text-zinc-900" aria-label="Main Navigation">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-brand-purple hover:text-brand-red transition">Beranda</a>
			<div class="relative group">
				<button type="button" class="flex items-center gap-1.5 text-zinc-900 hover:text-brand-purple transition py-2">
					Program
					<svg class="w-3.5 h-3.5 text-zinc-500 group-hover:text-brand-purple transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M19 9l-7 7-7-7"/></svg>
				</button>
				<div class="absolute left-0 top-full pt-1 w-52 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
					<div class="bg-white rounded-xl shadow-xl border border-zinc-100 p-2 space-y-1">
						<a href="#program" class="block px-4 py-2.5 rounded-lg text-sm font-medium text-zinc-800 hover:bg-brand-purpleLight hover:text-brand-purple transition">Komunitas</a>
						<a href="#program" class="block px-4 py-2.5 rounded-lg text-sm font-medium text-zinc-800 hover:bg-brand-purpleLight hover:text-brand-purple transition">Private</a>
						<a href="https://api.whatsapp.com/send?phone=62816870999&text=Saya+ingin+daftar+Kursus+public+speaking+Corporate+Training" target="_blank" rel="noopener" class="block px-4 py-2.5 rounded-lg text-sm font-medium text-zinc-800 hover:bg-brand-purpleLight hover:text-brand-purple transition">In-House Training</a>
					</div>
				</div>
			</div>
			<a href="#tentang" class="text-zinc-900 hover:text-brand-purple transition">Tentang Kami</a>
			<a href="#kontak" class="text-zinc-900 hover:text-brand-purple transition">Hubungi Kami</a>
		</nav>

		<!-- Desktop Button & Mobile Hamburger -->
		<div class="flex items-center gap-3">
			<a href="https://docs.google.com/forms/d/1AMBrvGWPJHhi6WMo8HdtUaAK9OEEAEfX9tpnVHHnW_8/viewform?pli=1&pli=1&edit_requested=true" target="_blank" rel="noopener" class="hidden md:inline-flex items-center justify-center px-7 py-3 rounded-[4px] bg-brand-purple hover:bg-brand-purpleDark text-white text-sm font-semibold transition">
				Daftar Anggota
			</a>
			<button id="mobile-menu-btn" type="button" aria-label="Buka Menu" class="md:hidden p-2 rounded-lg text-brand-purple hover:bg-brand-purpleLight transition">
				<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
			</button>
		</div>
	</div>

	<!-- Mobile Menu Drawer -->
	<div id="mobile-menu" class="hidden md:hidden bg-white border-t border-zinc-100 px-4 pt-3 pb-6 space-y-3 shadow-lg">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="block py-2 px-3 rounded-lg font-bold text-brand-purple bg-brand-purpleLight/70">Beranda</a>
		<div class="px-3 py-1">
			<p class="text-xs font-bold uppercase tracking-wider text-zinc-400 mb-2">Program</p>
			<div class="space-y-2 pl-2 border-l-2 border-brand-purple/20">
				<a href="#program" class="mobile-link block py-1 text-sm font-semibold text-zinc-800 hover:text-brand-purple">Komunitas</a>
				<a href="#program" class="mobile-link block py-1 text-sm font-semibold text-zinc-800 hover:text-brand-purple">Private</a>
				<a href="https://api.whatsapp.com/send?phone=62816870999&text=Saya+ingin+daftar+Kursus+public+speaking+Corporate+Training" target="_blank" rel="noopener" class="block py-1 text-sm font-semibold text-zinc-800 hover:text-brand-purple">In-House Training</a>
			</div>
		</div>
		<a href="#tentang" class="mobile-link block py-2 px-3 rounded-lg font-semibold text-zinc-800 hover:bg-zinc-50">Tentang Kami</a>
		<a href="#kontak" class="mobile-link block py-2 px-3 rounded-lg font-semibold text-zinc-800 hover:bg-zinc-50">Hubungi Kami</a>
		<div class="pt-2">
			<a href="https://docs.google.com/forms/d/1AMBrvGWPJHhi6WMo8HdtUaAK9OEEAEfX9tpnVHHnW_8/viewform?pli=1&pli=1&edit_requested=true" target="_blank" rel="noopener" class="block w-full text-center py-3 rounded-[4px] bg-brand-purple text-white font-semibold text-sm">
				Daftar Anggota
			</a>
		</div>
	</div>
</header>
