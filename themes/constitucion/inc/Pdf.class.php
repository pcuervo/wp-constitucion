<?php $directory = get_template_directory();
include $directory.'/inc/dompdf/dompdf_config.inc.php';

class Pdf {

	public function __construct()
	{

	}

	public static function generateCertificate($name = '', $surnames = '', $folio = ''){
		$directory = get_template_directory();
		ob_start();
	  	include $directory.'/templates/htmlPdfCertificate.php';
	  	$html = ob_get_clean();
		$mipdf = new DOMPDF();
		 
		$mipdf->set_paper("A4", "portrait");
		$mipdf->load_html( utf8_decode( utf8_encode($html) ) );
		$mipdf->render();
		$mipdf->stream('Certificado-Constitucion-CDMX.pdf', array("Attachment"=>0));
	}
}