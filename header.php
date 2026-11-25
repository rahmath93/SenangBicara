<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Senang Bicara – Your Partner in Public Speaking. Komunitas dan pelatihan public speaking di Jakarta Selatan sejak 2011: Community, Private Class, Public & Corporate Training.">

	<!-- Google Fonts: Plus Jakarta Sans (Modern & Clean) -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

	<!-- Tailwind CSS & Konfigurasi Warna Brand Terpusat -->
	<script src="https://cdn.tailwindcss.com"></script>
	<script>
		tailwind.config = {
			theme: {
				extend: {
					fontFamily: {
						sans: ['"Plus Jakarta Sans"', 'sans-serif'],
					},
					colors: {
						brand: {
							purple: '#3B0A6E',
							purpleDark: '#260549',
							purpleLight: '#F4EFFA',
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
		"logo": "https://beta.senangbicara.com/wp-content/uploads/2026/11/1sb.png",
		"foundingDate": "2011-11-11",
		"description": "Your Partner in Public Speaking. Komunitas pengembangan diri dan lembaga pelatihan komunikasi, presentasi, MC, moderator, dan public speaking di Jakarta Selatan.",
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

<!-- Top Info Bar (Desktop Only - Minimalis) -->
<div class="hidden lg:block bg-brand-purple text-white/90 text-xs py-2 border-b border-white/10">
	<div class="max-w-6xl mx-auto px-6 flex justify-between items-center">
		<div class="flex items-center gap-6">
			<span class="flex items-center gap-2">
				<svg class="w-3.5 h-3.5 text-brand-red" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
				South Jakarta
			</span>
			<a href="mailto:senangbicara@gmail.com" class="flex items-center gap-2 hover:text-white transition">
				<svg class="w-3.5 h-3.5 text-brand-red" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/></svg>
				senangbicara@gmail.com
			</a>
		</div>
		<div class="flex items-center gap-4">
			<span class="text-white/70">Social Media:</span>
			<a href="https://www.facebook.com/SenangBicaraCommunity/" target="_blank" rel="noopener" class="hover:text-brand-red transition">Facebook</a>
			<a href="https://www.instagram.com/senangbicara?srtk=cG9vYXBxenJwMDB2" target="_blank" rel="noopener" class="hover:text-brand-red transition">Instagram</a>
			<a href="https://api.whatsapp.com/send?phone=62816870999&text=Hallo+SenangBicara+saya+ingin+tanya+Kursus+public+speaking" target="_blank" rel="noopener" class="hover:text-brand-red transition">WhatsApp</a>
			<a href="https://www.tiktok.com/@senangbicara" target="_blank" rel="noopener" class="hover:text-brand-red transition">TikTok</a>
		</div>
	</div>
</div>

<!-- Main Sticky Navigation (Mobile-First & Minimalist) -->
<header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-zinc-100">
	<div class="max-w-6xl mx-auto px-4 sm:px-6 h-16 sm:h-20 flex items-center justify-between">
		<!-- Logo -->
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center shrink-0" aria-label="Senang Bicara Beranda">
			<img src="https://beta.senangbicara.com/wp-content/uploads/2026/11/1sb.png" alt="Senang Bicara" class="h-7 sm:h-9 w-auto object-contain">
		</a>

		<!-- Desktop Menu -->
		<nav class="hidden md:flex items-center gap-8 text-sm font-semibold text-zinc-700" aria-label="Main Navigation">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-brand-purple hover:text-brand-red transition">Beranda</a>
			<div class="relative group">
				<button type="button" class="flex items-center gap-1 hover:text-brand-purple transition py-2">
					Program
					<svg class="w-4 h-4 text-zinc-400 group-hover:text-brand-purple transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
				</button>
				<div class="absolute left-0 top-full pt-1 w-52 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
					<div class="bg-white rounded-2xl shadow-xl border border-zinc-100 p-2 space-y-1">
						<a href="#program" class="block px-4 py-2.5 rounded-xl text-sm text-zinc-700 hover:bg-brand-purpleLight hover:text-brand-purple transition">Komunitas</a>
						<a href="#program" class="block px-4 py-2.5 rounded-xl text-sm text-zinc-700 hover:bg-brand-purpleLight hover:text-brand-purple transition">Private Class</a>
						<a href="https://api.whatsapp.com/send?phone=62816870999&text=Saya+ingin+daftar+Kursus+public+speaking+Corporate+Training" target="_blank" rel="noopener" class="block px-4 py-2.5 rounded-xl text-sm text-zinc-700 hover:bg-brand-purpleLight hover:text-brand-purple transition">In-House Training</a>
					</div>
				</div>
			</div>
			<a href="#tentang" class="hover:text-brand-purple transition">Tentang Kami</a>
			<a href="#kontak" class="hover:text-brand-purple transition">Hubungi Kami</a>
		</nav>

		<!-- Desktop CTA & Mobile Hamburger -->
		<div class="flex items-center gap-3">
			<a href="https://docs.google.com/forms/d/1AMBrvGWPJHhi6WMo8HdtUaAK9OEEAEfX9tpnVHHnW_8/viewform?pli=1&pli=1&edit_requested=true" target="_blank" rel="noopener" class="hidden sm:inline-flex items-center justify-center px-5 py-2.5 rounded-full bg-brand-red hover:bg-brand-redHover text-white text-sm font-semibold shadow-sm shadow-brand-red/20 transition">
				Daftar Anggota
			</a>
			<button id="mobile-menu-btn" type="button" aria-label="Buka Menu" class="md:hidden p-2 rounded-xl text-brand-purple hover:bg-brand-purpleLight transition">
				<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
			</button>
		</div>
	</div>

	<!-- Mobile Navigation Drawer -->
	<div id="mobile-menu" class="hidden md:hidden bg-white border-t border-zinc-100 px-4 pt-3 pb-6 space-y-3 shadow-lg">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="block py-2 px-3 rounded-xl font-semibold text-brand-purple bg-brand-purpleLight/60">Beranda</a>
		<div class="px-3 py-1">
			<p class="text-xs font-bold uppercase tracking-wider text-zinc-400 mb-2">Program</p>
			<div class="space-y-2 pl-2 border-l-2 border-brand-purple/20">
				<a href="#program" class="mobile-link block py-1 text-sm font-medium text-zinc-700 hover:text-brand-purple">Komunitas</a>
				<a href="#program" class="mobile-link block py-1 text-sm font-medium text-zinc-700 hover:text-brand-purple">Private Class</a>
				<a href="https://api.whatsapp.com/send?phone=62816870999&text=Saya+ingin+daftar+Kursus+public+speaking+Corporate+Training" target="_blank" rel="noopener" class="block py-1 text-sm font-medium text-zinc-700 hover:text-brand-purple">In-House Training</a>
			</div>
		</div>
		<a href="#tentang" class="mobile-link block py-2 px-3 rounded-xl font-medium text-zinc-700 hover:bg-zinc-50">Tentang Kami</a>
		<a href="#kontak" class="mobile-link block py-2 px-3 rounded-xl font-medium text-zinc-700 hover:bg-zinc-50">Hubungi Kami</a>
		<div class="pt-2">
			<a href="https://docs.google.com/forms/d/1AMBrvGWPJHhi6WMo8HdtUaAK9OEEAEfX9tpnVHHnW_8/viewform?pli=1&pli=1&edit_requested=true" target="_blank" rel="noopener" class="block w-full text-center py-3 rounded-full bg-brand-red text-white font-semibold text-sm shadow-md shadow-brand-red/20">
				Daftar Anggota
			</a>
		</div>
	</div>
</header>
