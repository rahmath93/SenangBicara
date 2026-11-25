<?php
get_header();
$hero_img = get_template_directory_uri() . '/assets/images/' . rawurlencode( 'Kelas Public Speaking Senang Bicara.jpeg' );
?>

<main id="content">

	<!-- 1. HERO SECTION (Identik dengan Referensi Screenshot & Responsif Mobile) -->
	<section class="relative overflow-hidden bg-[#F4EBFB]">
		<!-- Background Desktop Full-Width -->
		<div class="hidden md:block absolute inset-0 bg-cover bg-left-center bg-no-repeat" style="background-image: url('<?php echo esc_url( $hero_img ); ?>');"></div>

		<!-- Gambar Mobile (Tampil utuh tanpa memotong wajah pembicara di HP) -->
		<div class="md:hidden relative w-full h-[320px] sm:h-[400px] overflow-hidden">
			<img src="<?php echo esc_url( $hero_img ); ?>" alt="Kelas Public Speaking Senang Bicara" class="w-full h-full object-cover object-[22%_top]">
			<div class="absolute inset-0 bg-gradient-to-t from-[#F4EBFB] via-[#F4EBFB]/20 to-transparent"></div>
		</div>

		<!-- Konten Teks Hero (Posisi Kanan Tengah di Desktop, Tengah Rapi di Mobile) -->
		<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 pb-14 pt-2 md:py-0 md:min-h-[580px] lg:min-h-[650px] flex items-center">
			<div class="w-full md:w-[54%] md:ml-auto text-center md:text-left md:pl-6 lg:pl-12">
				<h1 class="text-3xl sm:text-4xl lg:text-[46px] font-bold tracking-tight text-[#111111] leading-[1.2] mb-2.5">
					Your <span class="text-[#D9320B]">Partner</span> in Public Speaking
				</h1>
				<p class="text-base sm:text-lg lg:text-[21px] font-bold text-[#111111] tracking-normal">
					Belajar . Berlatih . Bertumbuh
				</p>
			</div>
		</div>
	</section>
