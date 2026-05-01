<?php get_header(); ?>

<main>
    <!-- SECCIÓN HERO -->
    <section class="hero">
        
    </section>
    
    <!-- SECCIÓN INFO -->
    <section class="seccion-info">
        <div class="card">
            <h3>Administración</h3>
            <p>Horario de atención: Lunes a Viernes de 07:30 a 13:00 hs.</p>
            <p>Tel: (03541) 43-2578</p>
            <p>administracion@coopsanroque.com.ar</p>
        </div>

        <div class="card">
            <h3>Guardia</h3>
            <p>Tel. Cel.: (3541)(15) 54-1852</p>
        </div>

        <div class="card">
            <h3>Pago de Boletas</h3>
            <p>Ingresá a VisaHome y pagá tus facturas de la Cooperativa de forma fácil y segura.</p>
        </div>
    </section>

    <!-- SECCIÓN NOTICIAS -->
    <section class="noticias">
        <h2>Noticias</h2>

        <div class="noticia-item">
            <h3>Llamado a Asamblea General Ordinaria</h3>
            <p>El Consejo de Administración convoca a Asamblea General Ordinaria para el día sábado 11 de Noviembre de 2023 a las 9:00 AM.</p>
            <a href="#">Leer más</a>
        </div>

        <div class="noticia-item">
            <h3>Inicio de prestación técnica y distribución domiciliaria de agua</h3>
            <p>Inicio de prestación en los barrios Villa Parque San Miguel y Villa del Lago Norte.</p>
            <a href="#">Leer más</a>
        </div>

        <div class="noticia-item">
            <h3>Planificación regional del servicio de agua potable 2022-2037</h3>
            <p>Avanza la planta potabilizadora Cooperativa San Roque con una inversión que supera los 60 millones de pesos.</p>
            <a href="#">Leer más</a>
        </div>
    </section>
    <section class="contacto-seccion" style="padding: 50px 0; background: #f9f9f9;">
    <div class="container" style="max-width: 800px; margin: 0 auto; text-align: center;">
        <h2 style="margin-bottom: 30px;">Envianos tu consulta</h2>
        <?php 
        // Forzamos la ejecución del shortcode directamente por ID
        // Cambié the_content() por do_shortcode para que sea infalible
        echo do_shortcode('[wpforms id="16"]'); 
        ?>
    </div>
</section>
</main>

<?php get_footer(); ?>