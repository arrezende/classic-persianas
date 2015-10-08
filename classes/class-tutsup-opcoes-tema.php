<?php
/**
 * Classe ClassicOpcoesTema - Carrega as opções do tema
 *
 * Este é um template básico para suas criações mais avançadas.
 */
 
// Verifica se a classe já existe
if ( ! class_exists('ClassicOpcoesTema') ) {

	// Cria a classe
	class ClassicOpcoesTema
	{
		// As opções
		protected $options;

		/**
		 * Construtor
		 *
		 * Carrega todas as funções.
		 */
		public function __construct () {
		
			// Variável de opções que está no functions.php
			global $classic_opcoes_tema;
			
			// Configura as opções dentro da classe
			$this->options = $classic_opcoes_tema;
				
			/* Essa classe só executa ações para a área administrativa */
			if ( is_admin() ) {
				
				// Carrega os scripts e styles necessários
				add_action( 
					'admin_enqueue_scripts', 
					array( $this, 'carrega_scripts' ) 
				);

				// Adiciona o menu de opções
				add_action('admin_menu', array( $this, 'adiciona_menu' ) );
				
				// Registra nossas opções
				add_action( 'admin_init', array( $this, 'registra_opcoes' ) );
			} // is_admin
			
		} // __construct
		
		/**
		 * Função para adicionar o menu na área administrativa
		 */
		public function adiciona_menu() {
		
			// Creates a page for editing the theme options
			add_theme_page(
				'Opções do tema',            // Título da página
				'Opções do tema',            // Título do menu
				'edit_themes',               // Permissões
				'classic_opcoes_tema',       // Slug do menu
				array( $this, 'admin_html' ) // Função de callback
			);
			
		} // adiciona_menu
		
		/**
		 * Função para registrar nossas opções
		 */
		public function registra_opcoes() {
		
			register_setting( 
				'classic_opcoes_tema', 
				'classic_opcoes_tema', 
				array( $this, 'valida_campos' ) // Função de callback
			);
			
		} // registra_opcoes
		
		// Callback para validar os campos enviados (se necessário)
		public function valida_campos( $input ) {
			
			// Vamos validar apenas o fundo, só para você entender
			if( isset( $input['fundo'] ) ) {
				$input['fundo'] = sanitize_text_field( $input['fundo'] );
			}
			
			return $input;
			
		} // valida_campos
		
		/**
		 * Carrega a página HTML que será apresentada na área administrativa
		 */
		public function admin_html() {		
?>

<div class="wrap">

	<form method="post" action="options.php">
		<?php
			settings_fields( 'classic_opcoes_tema' );
			do_settings_sections( 'classic_opcoes_tema' );
		?>
		
		<h3>Opções do tema</h3>

		Logo:<br>

		<?php
			if ( esc_attr( classic_chk( $this->options, 'logo' ) )) {
				echo '<img src="' . esc_attr( classic_chk( $this->options, 'logo' ) ) . '" alt="Classic Persianas" class="imagem"></a>';
			}
				?>
<br>
		Alterar Logo:<br><input type="text" class="imagem" value="<?php 
					echo esc_attr( classic_chk( $this->options, 'logo' ) );
					?>" name="classic_opcoes_tema[logo]"><br><br>
				

		

		
		Conta do Facebook:
		<input class="regular-text" type="text" value="<?php 
		echo esc_attr( classic_chk( $this->options, 'facebook' ) );
		?>" name="classic_opcoes_tema[facebook]"><br><br>

		Conta do Twitter:
		<input class="regular-text" type="text" value="<?php 
		echo esc_attr( classic_chk( $this->options, 'twitter' ) );
		?>" name="classic_opcoes_tema[twitter]"><br><br>


		Copyright do rodapé:<br>
		<input class="regular-text" type="text" value="<?php 
		echo esc_attr( classic_chk( $this->options, 'rodape' ) );
		?>" name="classic_opcoes_tema[rodape]"><br><br>
			
		Cor de fundo:<br>
		<input class="fundo" type="text" value="<?php 
		echo esc_attr( classic_chk( $this->options, 'fundo' ) );
		?>" name="classic_opcoes_tema[fundo]"><br><br>
		
		<p>
			<?php submit_button(); ?>
		</p>
	</form>
</div>

<?php

		} // admin_html
		
		/**
		 * Carrega scripts e styles
		 */
		public function carrega_scripts() {
		
			// Caixa de upload de imagem
			wp_enqueue_script('media-upload');
			
			// Thickbox
			wp_enqueue_script('thickbox');
			wp_enqueue_style('thickbox');
			
			// Color picker (para cores)
			wp_enqueue_style( 'wp-color-picker' );
			
			// Nosso script
			wp_enqueue_script( 
				'admin_settings', 
				get_template_directory_uri() . '/js/admin-settings.js', 
				array('wp-color-picker'), 
				'1.0.0', 
				true 
			);
			
		} // carrega_scripts
	
	} // Class ClassicOpcoesTema

	// Carrega a classe
	$classic_opcoes_tema = new ClassicOpcoesTema();

	function m1_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'm1_logo' ); // Add setting for logo uploader
         
    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'm1_logo', array(
        'label'    => __( 'Upload Logo (replaces text)', 'm1' ),
        'section'  => 'title_tagline',
        'settings' => 'm1_logo',
    ) ) );
}
add_action( 'customize_register', 'm1_customize_register' );


}

