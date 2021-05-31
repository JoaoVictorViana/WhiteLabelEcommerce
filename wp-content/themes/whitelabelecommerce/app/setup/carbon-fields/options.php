<?php declare( strict_types = 1 );

namespace App;

use Carbon_Fields\Container\Container;
use Carbon_Fields\Field;

function crb_attach_theme_options(): void {
	Container::make( 'theme_options', 'Opções do tema' )
			->set_page_file( 'theme-options' )
			->add_tab(
				__( 'Cabeçalho', 'app' ),
				[
					Field::make_image( 'header_logo', 'Imagem da logo Cabeçalho no Modo Light' )
						->set_value_type( 'url' )
						->set_width( 33 ),
					Field::make_text( 'header_logo_url', 'URL logo cabeçalho' ),
				]
			)->add_tab(
				__( 'Rodapé', 'app' ),
				[
					Field::make_image( 'footer_logo', 'Imagem da logo Rodapé Modo Light' )
							->set_value_type( 'url' )
							->set_width( 33 ),
				]
			);

}
